<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = $this->getUserList();
       // $users = [
      //index array     [1,'Nahin' , 'nahin@gmail.com'],
      //     [2,'Naruto','naruto@gmail.com'],
      //     [3,'Natsu' , 'natsu@gmail.com']
// associative array
      //    ['id'=>1,  'name'=> 'Nahin' , 'email'=>'nahin@gmail.com'],
       //   ['id'=>2,  'name'=> 'Naruto',  'email'=>'naruto@gmail.com'],
       //   ['id'=>3,  'name'=> 'Natsu' , 'email'=>'natsu@gmail.com']



      //  ]; 
        return view('user.list')->with('userList', $users);

        
    }
      






   // public function details($id,$name,$email){
    //   echo $id;
   // echo $name;
    // echo $email;
         
  //   }
     public function details($id,$name,$email){
        $users = $this->getUserList();
        $user ='';
        foreach($users as $u)
        {
            if($u['id'] == $id)
            {
                $user = $u;
                break; 
            }
        }
        return view('user.details')->with('user',$user);
    } 






     public function edit($id,$name,$email){
        echo $id;
     echo $name;
     echo $email;
       // retern view('user.edit')->with('user', $user);
        
    }

    public function update(request $req, $id,$name,$email){
        return view('user.list')->with('userlist', $users);
    }
      public function delete( $id,$name,$email){
        return view('user.delete')->with('user', $user);
    }
 

      public function destroy( $id,$name,$email){
        return view('user.list')->with('userlist', $users);
    }










    public function create(){
     
     return view('user.create');
        
    } 

    public function insert(Request $req){
       $users = $this->getUserList();
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);
      
     return view('user.list')->with('userList',$users);
        
    }

     public function getUserList(){
     return [  ['id'=>1,  'name'=> 'Nahin' , 'email'=>'nahin@gmail.com'],
          ['id'=>2,  'name'=> 'Naruto',  'email'=>'naruto@gmail.com'],
          ['id'=>3,  'name'=> 'Natsu' , 'email'=>'natsu@gmail.com']

     ];
     
        
    }

     


  
  
}  
  