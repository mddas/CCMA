<?php
//GLIMPSES OF SUCCESS
namespace App\Http\Controllers;
use App\Models\Student;
use Session;
use File;
use Illuminate\Http\Request;

class StudentController extends Controller
{
      public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.student.view")->with(["students"=>Student::all()]);
    }
    public function addForm(){
        return view('dashboard.student.add')->with(['students'=>Student::all()]);
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'name' => 'required',
        'rank'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/student/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/student/'), $image);
       }
       else{
          $image = null;
       }
       $student = Student::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'rank'=>$req['rank'],
            'image'=>$image,
        ]);

        if($student==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StudentRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StudentRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $student = Student::find($slug);
        $image = substr($student->image,1);
        $student->delete();
        File::delete($image);
        if($student==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StudentRead'));
        }       
    }
    public function edit($slug){
        $student = Student::find($slug);     
        return view('dashboard.student.add')->with(["students"=>$student]);
        return redirect(route('StudentRead'));
    }
}
