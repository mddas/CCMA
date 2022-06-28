<?php

namespace App\Http\Controllers;
use App\Models\NoticePage ;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;

class NoticePageController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.page_type.notice_page.view")->with(["notices"=>NoticePage::all()]);
    }
    public function addForm(){
        $category = Category::where('type','notice')->get();      
        $subcategory = Subcategory::where('type','notice')->get();
        return view('dashboard.page_type.notice_page.add')->with(['category'=>$category,"subcategory"=>$subcategory]);
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'title' => 'required',
        'discription'=>'required',
        'uploadto'=>'required',
         'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/notice_page/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/notice_page/'), $image);
       }
       else{
          $image = null;
       }
       $noticepage = NoticePage::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'discription'=>$req['discription'],
            'uploadto'=>$req['uploadto'],
            'image'=>$image,
        ]);

        if($noticepage==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('NoticePageRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('NoticePageRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $noticepage = NoticePage::find($slug)->delete();
        if($noticepage==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('NoticePageRead'));
        }       
    }
    public function edit($slug){
        $category = Category::all();      
        $subcategory = Subcategory::all();
        $noticepage = NoticePage::find($slug);
        return view('dashboard.page_type.notice_page.add')->with(["noticepage"=>$noticepage,"category"=>$category,"subcategory"=>$subcategory]);
        // return redirect(route('InstituteDetails'));
    }
}
