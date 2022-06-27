<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\GalaryPage;
use App\Models\VideoPage;
use App\Models\NoticePage;
use App\Models\CommonPage;
use App\Models\InstituteDetails;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = Category::all();
        $notice = NoticePage::all();
        $institute = InstituteDetails::all()->last();
        return view("ccma.index")->with(["menus"=>$menus,"notices"=>$notice,'institute'=>$institute]);
    }
    public function menu($slug , Request $req){
    
        $menu = Category::where('name',$slug)->first();
        $menuType = $menu->type;
        $menu_id  = $menu->id;
        if($menu->count()>0){
            if($menuType=="common"){
                   $menus = Category::all();
                   if($req['id']==null){
                        $randomData = CommonPage::where("uploadto","category_id_".$menu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = CommonPage::find($req['id']);
                   }
                   $common_page = CommonPage::where("uploadto","category_id_".$menu_id)->get();
                   return view('ccma.common_page.common_page')->with(["menus"=>$menus,"common_pages"=>$common_page,"random"=>$randomData,"slug"=>$slug]);
            }
            elseif($menuType=="galary"){
                $menus = Category::all();
                   if($req['id']==null){
                        $randomData = GalaryPage::where("uploadto","category_id_".$menu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = GalaryPage::find($req['id']);
                   }
                   $galary_page = GalaryPage::where("uploadto","category_id_".$menu_id)->get();
                   return view('ccma.galary_page.galary')->with(["menus"=>$menus,"galary_pages"=>$galary_page,"random"=>$randomData,"slug"=>$slug]);
            }
            elseif($menuType=="video"){
                $menus = Category::all();
                   if($req['id']==null){
                        $randomData = VideoPage::where("uploadto","category_id_".$menu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = VideoPage::find($req['id']);
                   }
                   $common_page = VideoPage::where("uploadto","category_id_".$menu_id)->get();
                   return view('ccma.video_page.video')->with(["menus"=>$menus,"common_pages"=>$common_page,"random"=>$randomData,"slug"=>$slug]);
            }
            elseif($menuType=="notice"){
                $menus = Category::all();
                   if($req['id']==null){
                        $randomData = NoticePage::where("uploadto","category_id_".$menu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = NoticePage::find($req['id']);
                   }
                   $common_page = NoticePage::where("uploadto","category_id_".$menu_id)->get();
                   return view('ccma.common_page.common_page')->with(["menus"=>$menus,"common_pages"=>$common_page,"random"=>$randomData,"slug"=>$slug]);
            }
        }            
        else{
            return "null";
        }
    }
    public function submenu($slug,Request $req){
        $submenu = SubCategory::where('name',$slug)->first();
        $submenuType = $submenu->type;
        $submenu_id  = $submenu->id;
        if($submenu->count()>0){
            if($submenuType=="common"){
                   $menu = Category::all();
                   if($req['id']==null){
                        $randomData = CommonPage::where("uploadto","subcategory_id_".$submenu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = CommonPage::find($req['id']);
                   }
                   $common_page = CommonPage::where("uploadto","subcategory_id_".$submenu_id)->get();
                   return view('ccma.common_page.common_page')->with(["menus"=>$menu,"common_pages"=>$common_page,"random"=>$randomData,"slug"=>$slug]);
            }
            elseif($submenuType=="galary"){
                $menu = Category::all();
                   if($req['id']==null){
                        $randomData = GalaryPage::where("uploadto","subcategory_id_".$submenu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = GalaryPage::find($req['id']);
                   }
                   $galary_page = GalaryPage::where("uploadto","subcategory_id_".$submenu_id)->get();
                   return view('ccma.galary_page.galary')->with(["menus"=>$menu,"galary_pages"=>$galary_page,"random"=>$randomData,"slug"=>$slug]);
            }
            elseif($submenuType=="video"){
                $menu = Category::all();
                   if($req['id']==null){
                        $randomData = CommonPage::where("uploadto","subcategory_id_".$submenu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = CommonPage::find($req['id']);
                   }
                   $common_page = CommonPage::where("uploadto","subcategory_id_".$submenu_id)->get();
                   return view('ccma.video_page.video')->with(["menus"=>$menu,"common_pages"=>$common_page,"random"=>$randomData,"slug"=>$slug]);
            }
            elseif($submenuType=="notice"){
                $menu = Category::all();
                   if($req['id']==null){
                        $randomData = NoticePage::where("uploadto","subcategory_id_".$submenu_id)->inRandomOrder()->first();
                   }
                   else{
                       $randomData = NoticePage::find($req['id']);
                   }
                   //return $randomData;
                   $common_page = NoticePage::where("uploadto","subcategory_id_".$submenu_id)->get();
                   return view('ccma.common_page.common_page')->with(["menus"=>$menu,"common_pages"=>$common_page,"random"=>$randomData,"slug"=>$slug]);
            }
        }            
        else{
            return "null";
        }
    }
}
