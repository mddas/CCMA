<?php
//this class is take user message and store it
namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Slidder;
use App\Models\Category;
use App\Models\InstituteDetails;
use Illuminate\Http\Request;
use Session;

class MessageController extends Controller
{

    public function contact(){//this is frontend
        $menus = Category::all();
        $slidders = Slidder::all();
        return view("ccma.contact")->with(['slidders'=>Slidder::all(),'menus'=>$menus,'slidders'=>$slidders,'institutes'=>InstituteDetails::all()->last()]);
    }
   public function index(){//this is for admin
        return view("dashboard.contact.view")->with(["messages"=>Message::all()]);
    }
    public function add(){
        return view("dashboard.add-message");
    }
    public function store(Request $req){
        
         $validated = $req->validate([
        'name' => 'required',
        'email' => 'required',
        'number'=> 'required',
        'message'=>'required',
        ]);
         
       $about = Message::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'email'=>$req['email'],
            'number'=>$req['number'],
            'message'=>$req['message'],
            
        ]);
        
        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');

        
        return redirect(route('ContactUs'));
        //return Category::all(); 
    }
    public function delete(Request $req){
        Message::find($req['id'])->delete();
    }
    public function edit(){
        return "edit";
    }
}
