<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function test(){
        return view('test');
    }

    function inscrit(){
        return view('Identification.inscrit');
    }

    function inscrit_post(Request $request){

        $username = $request->input('Username');
        $email = $request->input('email');
        $password = $request->input('password');

        $verifUsername = ['name'=>$username];
        $verifEmail = ['email'=>$email];
        $user_name = User::where($verifUsername)->get();
        $user_email = User::where($verifEmail)->get();
        if(sizeof($user_name)!=0){
            dd('username deja utilisé');
        }
        else {
            if(sizeof($user_email)!=0){
                dd('email deja utilisé');
            }
            else {

                $post = new User();
                $post->name = $username;
                $post->email = $email;
                $post->password = $password;
                if ($request->hasfile('picture')) {
                    $file = $request->file('picture');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('uploads/chat/', $filename);
                    $post->image = $filename;

                } else {
                    return $request;
                    $post->image = '';
                }
                $post->save();

                return $post;
            }
        }
    }

    function login(){

        return view('Identification.login');
    }

    function login_post(Request $request){

        $username = $request->input('Username');
        $password = $request->input('password');

        $verifUsername = ['name'=>$username];
        $user_name = User::where($verifUsername)->get();

        if(sizeof($user_name)==0){
            dd('vous n\'avez pas de compte');
        }
        else if($user_name[0]->password != $password){
            dd('mot de passe incorrect');
        }
        else{
            return $user_name[0];
        }

    }
}
