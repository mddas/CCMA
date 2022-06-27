<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Session;
use Illuminate\Http\Request;

class BannerController extends Controller
{
      public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.banner.view")->with(["banners"=>Banner::all()]);
    }
    public function addForm(){    
        return view('dashboard.banner.add');
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'image' => 'required',        
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/banner/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/banner/'), $image);
       }
       else{
          $image = null;
       }
       $banner = Banner::updateOrCreate(
            ['id' => $req['id']],
            [
            'image'=>$image,
        ]);

        if($banner==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('BannerRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('BannerRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $slidder = Banner::find($slug)->delete();
        if($slidder==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('BannerRead'));
        }       
    }
    public function edit($slug){
        return "left for future";
        $category = Category::all();      
        $subcategory = Subcategory::all();
        $banner = Banner::find($slug);
     
        return view('dashboard.slidder.add')->with(["banners"=>$banner,"category"=>$category,"subcategory"=>$subcategory]);
        // return redirect(route('InstituteDetails'));
    }
}
