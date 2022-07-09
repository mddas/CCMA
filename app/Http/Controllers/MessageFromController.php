<?php

namespace App\Http\Controllers;
use App\Models\MessageFrom;
use Illuminate\Http\Request;
use Session;

class MessageFromController extends Controller
{
      public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.message.view")->with(["messages"=>MessageFrom::all()]);
    }
    public function addForm(){
        return view('dashboard.message.add');
    }
     public function store(Request $req){
        //  dd($req);
        $validated = $req->validate([
            'name' => 'required',
            'position'=>'required',
            'messages'=>'required',
             'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/message_from/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/message_from/'), $image);
       }
       else{
          $image = null;
       }
       $message_from = MessageFrom::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'position'=>$req['position'],
            'messages'=>$req['messages'],
            'image'=>$image,
        ]);

        if($message_from==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('MessageRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('MessageRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $message_from = MessageFrom::find($slug);
        $image= $message_from->image;
        $message_from_delete = $message_from->delete();
        if($message_from_delete==TRUE){
             if(unlink(substr($image,1))){
                 
             }
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('MessageRead'));
        }       
    }
    public function edit($slug){

        $message_from = MessageFrom::find($slug);     
        return view('dashboard.message.add')->with(["message"=>$message_from]);
        // return redirect(route('InstituteDetails'));
    }
}
