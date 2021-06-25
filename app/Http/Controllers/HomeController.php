<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(Request $req){
     // echo " Welcome home";
     // value pass korar 1st method
     // $name = 'Nahin'; 
     //   $id = '1838';
     //  return view('home.index', compact('name','id'));

      //value pass er 2nd method
      //return view('home.index',['name'=>'Naruto', 'id'=>'123']);


      //value pass er 3rd method  
    // return view ('home.index') 
   //   ->with('id', '02')
   //   ->with('name', 'Natsu');
 
      //joto gula dorkar hoy with with diye dibo
 //session(['key' => 'value']);

      //value pass er 4th rule
    //  if($req->session()->has('uname')){
      //    return view ('home.index') 
     // ->withId( '17')
     // ->withName( 'Natsu Dragnil');

     // }else{
     //    $req->session()->flash('msg','invalid Request from home');
      //   return redirect('/login');

      //}
        // middleware creat er por ager tai raikha dise

      return view ('home.index') 
      ->withId( '17')
      ->withName( 'Natsu Dragnil');

     } 
}
  