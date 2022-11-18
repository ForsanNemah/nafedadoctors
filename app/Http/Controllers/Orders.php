<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
class Orders extends Controller
{
    //

    
    public function login(Request $req ){

       // echo $req->input('name');
       // echo $req->input('phone');
       // echo $req->input('type');
       // echo $req->input('msg');

        $results = DB::select('insert into study_orders (name,phn,course,time) values(?,?,?,?)', [ $req->input('name'),$req->input('phone')
    
    ,$req->input('type')
    
    ,$req->input('msg')
    
    ]);
     


    return Redirect::back()->withErrors(['msg' => 'تمت العملية بنجاح ']);

  //echo   $results;

  /*
 if(count( $results )>0){


return view('admin.html.index');
 }
 else{

    return Redirect::back()->withErrors(['msg' => 'Wronge ID or Password']);
 }
 */
        
            }
}
