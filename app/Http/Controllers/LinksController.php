<?php

namespace App\Http\Controllers;
use App\Models\Links;
use Session;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(){
        return view("dashboard.institute.links")->with(["links"=>Links::all()]);
    }

     public function store(Request $req){
        $validated = $req->validate([
        'map' => 'required',
        ]);
        //dd($req);
     
            $link = Links::updateOrCreate(
                    ['id' => $req['id']],
                    [
                    'facebook'=>$req['facebook'],
                    'twitter'=>$req['twitter'],
                    'map'=>$req['map'],
                    'linkedln'=>$req['linkedln'],
                    'youtube'=>$req['youtube'],
                    'other'=>$req['other'],
                  ]);
  
       
 

        if($link==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('links'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('InstituteDetails'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $link = Links::find($slug)->delete();
        if($link==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('links'));
        }       
    }
    public function edit($slug){
        $link = Links::find($slug);
        $links = Links::all();
        return view('dashboard.institute.links')->with(["links"=>$links , 'link'=>$link]);
        return redirect(route('InstituteDetails'));
    }
}
