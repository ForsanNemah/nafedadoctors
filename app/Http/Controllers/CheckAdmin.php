<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Routes;
class CheckAdmin extends Controller
{
    //

    public function login(Request $req ){

        //echo $req->input('id');
        //echo $req->input('pass');

        $results = DB::select('select * from admins where id = ? and pass=?', [ $req->input('id'),$req->input('pass')]);
     

  
 if(count( $results )>0){

    return redirect()->route('dash');
//return view('admin.html.index');
 }
 else{

    return Redirect::back()->withErrors(['msg' => 'Wronge ID or Password']);
 }
        
            }
}
