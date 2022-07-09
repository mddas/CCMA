<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalmenu = Category::all()->count();
        $totalsubmenu = SubCategory::all()->count();
        $totalpagetype = 4;  
        return view("dashboard.index")->with(['totalmenu'=>$totalmenu,'totalsubmenu'=>$totalsubmenu,'totalpagetype'=>$totalpagetype]);
    }
}
