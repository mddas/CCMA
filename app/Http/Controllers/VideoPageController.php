<?php

namespace App\Http\Controllers;
use App\Models\VideoPage;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;

class VideoPageController extends Controller
{
    public function index(){
        //dd(InstituteDetails::all()->last()->logo);
        return view("dashboard.page_type.video_page.view")->with(["videopages"=>VideoPage::all()]);
    }
    public function addForm(){
        $category = Category::all();      
        $subcategory = Subcategory::all();
        return view('dashboard.page_type.video_page.add')->with(['category'=>$category,"subcategory"=>$subcategory]);
    }
      public function store(Request $req){
        //return $req;
        $validated = $req->validate([
        'title' => 'required',
        'uploadto'=>'required',
        'video'=>'required',
        ]);
        //dd($req);
       if($req->file('video')){
                //return($req->file('image'));
                $file= $req->file('video');
                $video = "/images/video_page/".date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/video_page/'), $video);
       }
       else{
          $video = null;
       }
       $videopage = VideoPage::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'discription'=>$req['discription'],
            'uploadto'=>$req['uploadto'],
            'video'=>$video,
        ]);

        if($videopage==TRUE){
             Session::flash('message', 'Inserted Successfully'); 
             Session::flash('alert-success', 'success');
             return redirect(route('VideoPageRead'));
        }
        else{
             Session::flash('message', 'Failed to Insert'); 
             Session::flash('alert-success', 'success');
             return redirect(route('VideoPageRead'));
        }
        
        //return Category::all();        
    }
    public function delete($slug){
        $videopage = VideoPage::find($slug)->delete();
        if($videopage==TRUE){
             Session::flash('message', 'Deleted completed'); 
             Session::flash('alert-success', 'success');
             return redirect(route('VideoPageRead'));
        }       
    }
    public function edit($slug){
        $category = Category::all();      
        $subcategory = Subcategory::all();
        $videopage = VideoPage::find($slug);
        return view('dashboard.page_type.video_page.add')->with(["videopage"=>$videopage,"category"=>$category,"subcategory"=>$subcategory]);
        // return redirect(route('InstituteDetails'));
    }
}
