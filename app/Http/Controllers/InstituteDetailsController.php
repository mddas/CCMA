<?php

namespace App\Http\Controllers;
use App\Models\InstituteDetails;
use Illuminate\Http\Request;
use Session;
class InstituteDetailsController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.institute.details")->with(["details"=>InstituteDetails::all()]);
    }
    public function add(){
        return view('dashboard.institute.add-details');
    }
     public function store(Request $req){
        $validated = $req->validate([
        'name' => 'required',
        'date'=>'required',
        'number'=>'required',
        'email'=>'required',
        'address'=>'required',
        'discription'=>'required',
        'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $company_image = "/images/institute_details/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/institute_details/'), $company_image);
       }
       else{
          $company_image = null;
       }

        if($req->file('logo')){
                //return($req->file('image'));
                $file= $req->file('logo');
                $company_logo = "/images/institute_details/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/institute_details/'), $company_logo);
            $institutedetails = InstituteDetails::updateOrCreate(
                    ['id' => $req['id']],
                    [
                    'name'=>$req['name'],
                    'date'=>$req['date'],
                    'number'=>$req['number'],
                    'email'=>$req['email'],
                    'address'=>$req['address'],
                    'discription'=>$req['discription'],
                    'logo'=>$company_logo,
                    'image'=>$company_image,
                  ]);
       }
       else{
          $institutedetails = InstituteDetails::updateOrCreate(
                    ['id' => $req['id']],
                    [
                    'name'=>$req['name'],
                    'date'=>$req['date'],
                    'number'=>$req['number'],
                    'email'=>$req['email'],
                    'address'=>$req['address'],
                    'discription'=>$req['discription'],
                    'image'=>$company_image,
                  ]);
       }
 

        if($institutedetails==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('InstituteDetails'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('InstituteDetails'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $institutedetails = InstituteDetails::find($slug)->delete();
        if($institutedetails==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('InstituteDetails'));
        }       
    }
    public function edit($slug){
        $institutedetails = InstituteDetails::find($slug);
        return view('dashboard.institute.add-details')->with(["details"=>$institutedetails]);
        // return redirect(route('InstituteDetails'));
    }
}
