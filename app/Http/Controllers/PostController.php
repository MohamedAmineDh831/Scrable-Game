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
        $ses=$request->session()->get('joueur');
        return $ses;
    }
     function affichage(Request $request){
         $u=new User();
        
         $c=0;
        $post=new nizar();
        $post->typepartie=$request->input("tp");
        $k=$request->input("tp");
       
        #$users = DB::table('nizars')->select('id','typepartie')->get();
       # $users = DB::select('select * from nizars where typepartie>count and typepartie=? ',[$k]);
        #$users = DB::select('select count from  nizars where typepartie=10');
        $n=nizar::where('typepartie','=',$k)->get();
 
    

 /*if(!count($n))
 {
    $post->typepartie=$request->input("tp");  
    $post->count=55;
    $post->save();
 }
 */
$c=0;
for($i=0;$i<count($n);$i++)
{
    if($n[$i]['typepartie']==$n[$i]['count'])
    $c++;
}

 if($c==count($n))
 {
    $post->typepartie=$request->input("tp");  
    $post->count=55;
    $post->save();
    $ses=$request->session()->get('joueur');
            
    $k=$ses[0]->name;
          $a=$u::where('name','=',$k)->get();
       
          $f=$a[0];
          $f->idpartie=$n[0]['id'];
         
          $f->save();
    echo 'play game';   
 
 }
 $users=$n[$c];
{
if($users['typepartie']>$users['count'])
           
           {
           
            $ses=$request->session()->get('joueur');
            
            $k=$ses[0]->name;
                  $a=$u::where('name','=',$k)->get();
                 
                  $f=$a[0];
                  $f->idpartie=$users['id'];
                 
                  $f->save();
               
                  $users['count']+=1;
                  $users->save();
                 $ammar=DB::select('select * from users where idpartie=?',[202]);
                 # $routes = DB::select('select * from users GROUP BY idpartie');
        
                   dd( $ammar);
            
                   
               
       
           }
          
           }
     
        }
        public function base(Request $request)
        {
            $play=new User();
            $user= $play->user=$request->input('usr');;
            $a=play::where('name','=',$user)->get();
            $b=$a[0]['idpartie'];
            $c=nizar::where('id','=',$b)->get();
            $o=$c[0]['count'];
         
            return view('liste',[
                'o'=>$o
            ]);

        }
   
}
