<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
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


      //value pass er 4th rule

       return view ('home.index') 
      ->withId( '17')
      ->withName( 'Natsu Dragnil');

     } 
}
  