<?php

namespace App\Http\Controllers;
use App\Models\CommonPage;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;


class CommonPageController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.page_type.common_page.view")->with(["commonpages"=>CommonPage::all()]);
    }
    public function addForm(){
        
        $category = Category::where('type','common')->get();     
        $subcategory = Subcategory::where('type','common')->get();
        return view('dashboard.page_type.common_page.add')->with(['category'=>$category,"subcategory"=>$subcategory]);
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'title' => 'required',
        'discription'=>'required',
        'uploadto'=>'required',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/common_page/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/common_page/'), $image);
       }
       else{
          $image = null;
       }
       $commonpage = CommonPage::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'discription'=>$req['discription'],
            'uploadto'=>$req['uploadto'],
            'image'=>$image,
        ]);

        if($commonpage==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('CommonPageRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('CommonPageRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $commonpage = CommonPage::find($slug);
        $image = $commonpage->image;
        $commonpage_delete = $commonpage->delete();
        if($commonpage_delete==TRUE){
             unlink(substr($image,1));
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('CommonPageRead'));
        }       
    }
    public function edit($slug){
        $category = Category::all();      
        $subcategory = Subcategory::all();
        $commonpage = CommonPage::find($slug);
     
        return view('dashboard.page_type.common_page.add')->with(["commonpage"=>$commonpage,"category"=>$category,"subcategory"=>$subcategory]);
        // return redirect(route('InstituteDetails'));
    }
    public function getCatSub($sub_cat_id){
       // return $sub_cat_id;
        $subcat = explode('_',$sub_cat_id);
        if($subcat[0]=="category"){
            $category = Category::find($subcat[2]);
            return $category->name;
        }
        elseif($subcat[0]=="subcategory"){
            $subcategory = SubCategory::find($subcat[2]);
            return $subcategory->name;
        }
        
    }
}

