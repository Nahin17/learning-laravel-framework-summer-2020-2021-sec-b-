<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function naru(){
       return view('/customer.naruto');
    }



     public function one(){
       return view('/customer.onepiece');
    }

     public function blea(){
       return view('/customer.bleach');
    }

     public function deathn(){
       return view('/customer.deathnote');
    }

    public function agnibeen(){
       return view('/customer.agnibeena');
    }
    public function patherpachal(){
       return view('/customer.patherpachali');
    }
    public function cnet(){
       return view('/customer.cn');
    }
    public function htmll(){
       return view('/customer.html');
    }
    
    


   
}
