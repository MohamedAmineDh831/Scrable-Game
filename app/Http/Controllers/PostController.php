<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\nizar;
use App\Models\play;
use App\Models\User;

class PostController extends Controller

{
    //
  
    function test(){
        return view('test');
    }


function jeu(){
    return view('Game.game');
}

function jeu_post(Request $request){
    return $request->input('liste_joueurs');
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
        $request->session()->forget('joueur');
       $request->session()->push('joueur',$user_name[0]);
       return redirect()->action([PostController::class, 'partie']);
      
    }

}

    function partie(Request $request){
       
          
        return view('partie');
      
    }
   
     function affichage(Request $request){
         $u=new User();
        
         $c=0;
        $post=new nizar();
        $post->typepartie=$request->input("tp");
        $k=$request->input("tp");
   
        $n=nizar::where('typepartie','=',$k)->get();
       
$c=0;
for($i=0;$i<count($n);$i++)
{
    if($n[$i]['typepartie']==$n[$i]['count'])
    $c++;
}

 if($c==count($n))
 {
    $post->typepartie=$request->input("tp");  
    $post->count=1;
    $post->save();
    $c=$c-1;   
    $ses=$request->session()->get('joueur');
    
    $k1=$ses[0]->name;
   
          $a=$u::where('name','=',$k1)->get();
          $k=$request->input("tp");
          $n1=nizar::where('typepartie','=',$k)->get();
          $users=$n1[count($n1)-1];
          $f=$a[0];
          $f->idpartie=$users['id'];
         
          $f->save();
         
       
            
    return view('test');
 }
 $users=$n[$c];

if($users['typepartie']>$users['count'])
           
           {
            $request->session()->push('idpartie',$users['id']);
            $ses=$request->session()->get('joueur');
            
            $k=$ses[0]->name;
                  $a=$u::where('name','=',$k)->get();
                 
                  $f=$a[0];
                  $f->idpartie=$users['id'];
                 
                  $f->save();
               
                  $users['count']+=1;
                  $users->save();
           
                

             return view('test');
          
                   
               
       
           }
          
        }
     
  
        
        public function base(Request $request)
        {
           
            $ses=$request->session()->get('joueur');
            $play=new User();  
            $u=new nizar();  
            $k=$ses[0]->name;
            $yosr=$play::where('name','=',$k)->get();
            $you=$yosr[0]['idpartie'];
            $n=$u::where('id','=',$you)->get();
           $s= $n[0]['count'];
           $a=$n[0]['id'];
        
         
           if($s==$n[0]['typepartie'])
           {    
       
            $request->session()->push('idpartie',$a);
               $t=$play::where('idpartie','=',$you)->get();
$p=0;
$tab=[];
               foreach($t as $c)
               {
                   $p+=1;
                   $h=(string)$p;
                   $v=("joueur$h");
                   array_push($tab,$v);
                   
                  # $request->session()->forget($v);
    
               }
               foreach($tab as $p)
               {
            
                $request->session()->push($v,$c['name']); 
               $ses=$request->session()->get($p);
           
               }
             
           }
            else
            { 
               
            return view('attendre',
        [
            'name'=>$k,
            'idpartie'=>$you,
            'count'=>$s

        ]);}
    
        }
}
