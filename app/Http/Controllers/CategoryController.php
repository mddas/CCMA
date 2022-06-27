<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\GalaryPage;
use App\Models\CommonPage;
use App\Models\NoticePage;
use App\Models\VideoPage;
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
        $menu_type = Category::find($slug)->type;
        if($menu_type=="group"){
         $subcategory = Category::find($slug)->getSubcategory;
         foreach($subcategory as $sub){
             $subcategory_type = $sub->type;
             if($subcategory_type=="common"){
                    $toDelete = CommonPage::where("uploadto","subcategory_id_".$sub->id)->get();
                }
                elseif($subcategory_type=="video"){
                $toDelete = VideoPage::where("uploadto","subcategory_id_".$sub->id)->get();
                }
                elseif($subcategory_type=="galary"){
                $toDelete = GalaryPage::where("uploadto","subcategory_id_".$sub->id)->get();
                }
                elseif($subcategory_type=="notice"){
                    $toDelete = NoticePage::where("uploadto","subcategory_id_".$sub->id)->get();
                }
                // return $toDelete;
            if($toDelete){           
                $toDelete->each->delete();//delete all datas related to subcategory                
            }
            $sub->delete();//delete all sub category related to category
             //conclusion this delete all subcategory and page type data related to category.
         }
         Category::find($slug)->delete();
         return redirect(route("categoryread"));
    }
    else{
        /************this delete menu page post data and category***********/
        $category = Category::find($slug);
        $category_type = $category->type;
        if($category_type=="common"){
            $toDelete = CommonPage::where("uploadto","category_id_".$category->id)->get();
        }
        elseif($category_type=="video"){
           $toDelete = VideoPage::where("uploadto","category_id_".$category->id)->get();
        }
        elseif($category_type=="galary"){
           $toDelete = GalaryPage::where("uploadto","category_id_".$category->id)->get();
        }
        elseif($category_type=="notice"){
            $toDelete = NoticePage::where("uploadto","category_id_".$category->id)->get();
        }
        //return $toDelete;
        if($toDelete){
            $toDelete->each->delete();
            //return $category;
            $category_delete = $category->delete();
            return redirect(route("categoryread"));
        }
        else{
            return "cannot delete menus and its data";
        }

    }
        
    }
   
}
