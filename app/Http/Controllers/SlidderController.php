<?php

namespace App\Http\Controllers;
use App\Models\Slidder;
use Session;
use Illuminate\Http\Request;

class SlidderController extends Controller
{
      public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.slidder.view")->with(["slidders"=>Slidder::all()]);
    }
    public function addForm(){    
        return view('dashboard.slidder.add');
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
                $image = "/images/slidder/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/slidder/'), $image);
       }
       else{
          $image = null;
       }
       $slidder = Slidder::updateOrCreate(
            ['id' => $req['id']],
            [
            'image'=>$image,
        ]);

        if($slidder==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('SlidderRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('SlidderRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $slidder = Slidder::find($slug)->delete();
        if($slidder==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('SlidderRead'));
        }       
    }
    public function edit($slug){
        return "left for future";
        $category = Category::all();      
        $subcategory = Subcategory::all();
        $slidder = Slidder::find($slug);
     
        return view('dashboard.slidder.add')->with(["commonpage"=>$slidder,"category"=>$category,"subcategory"=>$subcategory]);
        // return redirect(route('InstituteDetails'));
    }
}
