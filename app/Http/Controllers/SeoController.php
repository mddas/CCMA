<?php

namespace App\Http\Controllers;
use App\Models\Seo;
use Session;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.seo.view")->with(["seos"=>Seo::all()]);
    }
    public function addForm(){
        return view('dashboard.seo.add');//->with(['category'=>$category,"subcategory"=>$subcategory]);
    }
     public function store(Request $req){
        $validated = $req->validate([
        'title' => 'required',
        'discription'=>'required',
        'keyword'=>'required',
        'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/seo/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/seo/'), $image);
            $seo = Seo::updateOrCreate(
                ['id' => $req['id']],
             [
                'title'=>$req['title'],
                'discription'=>$req['discription'],
                'keyword'=>$req['keyword'],
                'image'=>$image,            
             ]);
       }
       else{
            $seo = Seo::updateOrCreate(
                ['id' => $req['id']],
             [
                'title'=>$req['title'],
                'discription'=>$req['discription'],
                'keyword'=>$req['keyword'],           
             ]);
       }      

        if($seo==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('SeoRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('SeoRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $seo = Seo::find($slug);
        $image = $seo->image;
        $seo_delete = $seo->delete();
        if($seo_delete==TRUE){
             if(unlink(substr($image,1))){
                 
             }
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('SeoRead'));
        }       
    }
    public function edit($slug){
        $seo = Seo::find($slug);    
        return view('dashboard.seo.add')->with(["seos"=>$seo]);
        
    }
}
