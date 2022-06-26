<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = Category::all();
        return view("ccma.index")->with(["menus"=>$menus]);
    }
    public function menu($slug){
        $menu = Category::where('name',$slug)->first();
        $menuType = $menu->type;
        if($menu->count()>0){
            if($menuType=="common"){
                return "this is common type";
                // $common_page = CommonPage::class->where() 
            }
            elseif($menuType=="galary"){
                return "this is galary";
            }
            elseif($menuType=="video"){
                return "this is video";
            }
            elseif($menuType=="notice"){
                return "this is notice";
            }
        }            
        else{
            return "null";
        }
    }
    public function submenu($slog){
        return $slog;
    }
}
