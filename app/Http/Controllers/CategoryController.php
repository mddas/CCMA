<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    public function index(){
        return view("dashboard.nevigation.menu")->with(["categories"=>Category::all()]);
    }

    public function store(Request $req){
        $validated = $req->validate([
        'name' => 'required',
        'type'=>'required'
        ]);
        //return $req;

       $category = Category::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'type'=>$req['type'],//single or group
        ]);

        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');

        return redirect("/admin/menu");
        //return Category::all();        
    }
    public function edit($slug){
        return "edit";
    }   
    public function view($slug){
        return "view";
    }
    public function delete($slug){
        $category = Category::find($slug)->delete();
        return redirect(route("categoryread"));
    }
   
}
