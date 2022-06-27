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
        //return $req;
        $validated = $req->validate([
        'title' => 'required',
        'discription'=>'required',
        'keyword'=>'required',
        'image'=>'required',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/seo/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/seo/'), $image);
       }
       else{
          $image = null;
       }
       $seo = Seo::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'discription'=>$req['discription'],
            'keyword'=>$req['keyword'],
        ]);

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
        $seo = Seo::find($slug)->delete();
        if($seo==TRUE){
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
