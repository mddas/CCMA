<?php

namespace App\Http\Controllers;
use App\Models\GalaryPage;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;

class GalaryPageController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.page_type.galary_page.view")->with(["galarypages"=>GalaryPage::all()]);
    }
    public function addForm(){
        $category = Category::where('type','galary')->get();      
        $subcategory = Subcategory::where('type','galary')->get();
        return view('dashboard.page_type.galary_page.add')->with(['category'=>$category,"subcategory"=>$subcategory]);
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'title' => 'required',
        'uploadto'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/gallary_page/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/gallary_page/'), $image);
       }
       else{
          $image = null;
       }
       $galarypage = GalaryPage::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'discription'=>$req['discription'],
            'uploadto'=>$req['uploadto'],
            'image'=>$image,
        ]);

        if($galarypage==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('GalaryPageRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('GalaryPageRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $galarypage = GalaryPage::find($slug)->delete();
        if($galarypage==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('GalaryPageRead'));
        }       
    }
    public function edit($slug){
        $category = Category::all();      
        $subcategory = Subcategory::all();
        
        $galarypage = GalaryPage::find($slug);
        return view('dashboard.page_type.galary_page.add')->with(["galarypage"=>$galarypage,"category"=>$category,"subcategory"=>$subcategory]);
        // return redirect(route('InstituteDetails'));
    }
}
