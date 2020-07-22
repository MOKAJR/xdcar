<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Showcar;
use Illuminate\Support\Facades\Auth;


class addcar extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add() {
        
        return view('project.addcars');
    }

    public function postadd(Request $request) {

        $this->validate($request, [

            'photo1'    => 'required|image|mimes:jpeg,png,gif,svg,jpg|max:5048', 
            'photo2'    => 'required|image|mimes:jpeg,png,gif,svg,jpg|max:5048', 
            'photo3'    => 'required|image|mimes:jpeg,png,gif,svg,jpg|max:5048', 
            'name'    => 'required|min:2|max:50',  
            'make'    => 'required|min:2|max:50',  
            'model'    => 'required|min:2|max:20', 
            'qun'    => 'required|min:1|max:3',
            'price'    => 'required|min:3|max:10',     

        ]);

        //=============================photo1================================================
        $file_extansision1 = $request->file('photo1')->getClientOriginalExtension();
        $file_name1 = time().'.'.$file_extansision1 ;
        $path = 'img/car';
        $request->file('photo1')->move($path, $file_name1) ;


        //=============================photo2================================================
    
        $file_name2 = time().'2'.'.'.$request->file('photo2')->getClientOriginalExtension();
        $request->file('photo2')->move($path, $file_name2) ;


        //=============================photo3================================================
      
        $file_name3 = time().'3'.'.'.$request->file('photo3')->getClientOriginalExtension();
        $request->file('photo3')->move($path, $file_name3) ;

        //============================================================================
            
         $newcar = new Showcar();

         $newcar->name=$request->input('name');
         $newcar->make=$request->input('make');
         $newcar->model=$request->input('model');
         $newcar->des=$request->input('des');
         $newcar->qun=$request->input('qun');
         $newcar->price=$request->input('price');
         $newcar->activ= 1 ;
         $newcar->user_id=Auth::user()->id;
         $newcar->photo1= $file_name1 ;
         $newcar->photo2= $file_name2 ;
         $newcar->photo3= $file_name3 ;
 
 
 
         $newcar->save();
         return back()
                       ->with('success', 'Car Added Success');
    }

  

    public function delete() {
        $todelete = Showcar::all();
        $arr = Array('del' => $todelete);
        return view('project.deletecar', $arr);
    }

}
