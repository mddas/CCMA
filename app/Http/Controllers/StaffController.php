<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Session;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.staff.view")->with(["staffs"=>Staff::all()]);
    }
    public function addForm(){
        return view('dashboard.staff.add');//->with(['category'=>$category,"subcategory"=>$subcategory]);
    }
     public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'name' => 'required',
        'describes'=>'required',
        'subject'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $image = "/images/staff/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/staff/'), $image);
       }
       else{
          $image = null;
       }
       $staff = Staff::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'describe'=>$req['describes'],
            'subject'=>$req['subject'],
            'image'=>$image,
        ]);

        if($staff==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StaffRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StaffRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $staff = Staff::find($slug);
        $image = $staff->image;
        $staff_delete = $staff->delete();
        if($staff==TRUE){
             unlink(substr($image,1));
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('StaffRead'));
        }       
    }
    public function edit($slug){
        $staff = Staff::find($slug);     
        return view('dashboard.student.add')->with(["students"=>$student]);
        return redirect(route('StaffRead'));
    }
}
