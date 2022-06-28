<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Session;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view("dashboard.nevigation.submenu")->with(["categories"=>Category::all()->where('type','group'),"subcategories"=>SubCategory::all()]);;
    }
    public function store(Request $req){
        // dd($req);
        $validated = $req->validate([
        'name' => 'required',
        'category_id'=>'required',
         'type'=> 'required',
        ]);
       
       $category = SubCategory::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'category_id'=>$req['category_id'],
            'type'=>$req['type'],//common,gallary,video,download,notice or events
        ]);
        if($category==TRUE){
            Session::flash('message', 'Inserted Successfully'); 
            Session::flash('alert-success', 'success');
            return redirect(route("subcategoryread"));
            //return Category::all();
        }
        else{
            Session::flash('message', 'Failed to insert'); 
            Session::flash('alert-danger', 'danger');
            return redirect(route('subcategoryread'));
        }        
    }
    public function edit($slug){
        return "edit";
    }   
    public function view($slug){
        return "view";
    }
    public function delete($slug){
        $subcategory = SubCategory::find($slug);
        $subcategory_type = $subcategory->type;
        if($subcategory_type=="common"){
            $toDelete = CommonPage::where("uploadto","subcategory_id_".$subcategory->id)->get();
        }
        elseif($subcategory_type=="video"){
           $toDelete = VideoPage::where("uploadto","subcategory_id_".$subcategory->id)->get();
        }
        elseif($subcategory_type=="galary"){
           $toDelete = GalaryPage::where("uploadto","subcategory_id_".$subcategory->id)->get();
        }
        elseif($subcategory_type=="notice"){
            $toDelete = NoticePage::where("uploadto","subcategory_id_".$subcategory->id)->get();
        }
        //return $toDelete;
        if($toDelete){
            $toDelete->each->delete();
            //return $category;
            $subcategory_delete = $subcategory->delete();
            return redirect(route("subcategoryread"));
        }
        else{
            return "cannot delete menus and its data";
        }

        //
    }
}

//category pagination type shoul be two
//a)single, if single then ask page type
//b)group ,if group then don't ask any things

