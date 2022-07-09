<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\SuccessStudent;
use Session;
class SuccessStudentController extends Controller
{
     public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.student.student_success.view")->with(["students"=>SuccessStudent::all()]);
    }
    public function addForm(){
        return view('dashboard.student.student_success.add')->with(['students'=>SuccessStudent::all()]);
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'name' => 'required',
        'rank'=>'required',
        'message'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/student/student_success/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/student/student_success'), $image);
       }
       else{
          $image = null;
       }
       $student = SuccessStudent::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'rank'=>$req['rank'],
            'message'=>$req['message'],
            'image'=>$image,
        ]);

        if($student==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StudentSuccessRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StudentSuccessRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $student = SuccessStudent::find($slug);
        $image = $student->image;
        $student_delete = $student->delete();
        if($student==TRUE){
             unlink(substr($image,1));
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StudentSuccessRead'));
        }       
    }
    public function edit($slug){
        $student = SuccessStudent::find($slug);     
        return view('dashboard.student.student_success.add')->with(["student"=>$student]);
        return redirect(route('StudentSuccessRead'));
    }
}
