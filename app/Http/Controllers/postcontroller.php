<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class postcontroller extends Controller
{

public function login(){
    return view('login.login');
}

public function login_Store(){


// welcome data frome login form
  $name =request()->name;
  $email =request()->email;
  $password =request()->password;

  //  insert data into user table
$user = new User ;
$user->name =$name;
$user->email =$email;
$user->password =bcrypt($password);
$user->save();

   return to_route('postes.index');
}





public function index(){

$all_data= Post::all();
$user_data = User::find(1);
    return view(' postes.index', ['poste' => $all_data ,'user'=>$user_data]);
    }



    public function show(Post $post){
      $user_data = User::all();

         return view(' postes.show',['post'=>$post, 'users'=>$user_data]);
    }




    public  function create(){
           $user_data = User::all();
        return view('postes.create',[ 'users'=>$user_data]);

    }



    public function store(){
// welcome the data frome create form
    $titel =request()->titel;
    $Discription =request()->Discription;
    $creat_by =request()->creat_by;

    // insert data into data postes tabal
    $post =new Post;
    $post->titel = $titel ;
    $post->description =$Discription ;
     $post->save();

      return to_route('postes.index');
    }



    public function edit(Post $post){
         $user_data = User::all();

    return view('postes.Edit',['users'=> $user_data,'post'=>$post ]);
    }





    public function update($postID){

    $titel =request()->titel;
    $Discription =request()->Discription;
    $creat_by =request()->creat_by;
// updata data postes
  $The_post_from_DB = Post::find($postID);
    $The_post_from_DB->update([
        'titel'=>$titel,
        'description'=>$Discription
    ]);

      return to_route('postes.index');
    }




    public function destroy($postID){
     $The_post= Post::find($postID);
     $The_post->delete();
        return to_route('postes.index');
    }





    }

