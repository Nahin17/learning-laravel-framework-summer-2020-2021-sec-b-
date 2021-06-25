<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function index(){
      //  echo "it works..... "; 
       return view('login.index'); 
    }

    public function verifyy(Request $req){
   
  //dd($req);



    //if($req['uname'] == $req['password'])  //  == mean name r pass 





      if($req->uname != $req->password) 
      {
         
        return redirect('/home');
      } 
      else
      {
       
        return redirect('/login');
      }

    }  


   



   


}
 
