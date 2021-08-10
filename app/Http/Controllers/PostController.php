<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\nizar;
class PostController extends Controller

{
    //
    function test(){
        return view('test');
    }
        function index1(){
        return view('Identification.inscrit');
    }

    function partie(){
        return view('partie');
    }
     function affichage(Request $request){
        $post=new nizar();
        #$post->typepartie=$request->input("tp");
        $post->count=10;
        $post->typepartie=$request->input("tp");
        $post->save();
        #$users = DB::table('nizars')->select('id','typepartie')->get();
        $users = DB::select('select * from nizars ');
        #$users = DB::select('select count from  nizars where typepartie=10');
        $n=nizar::where('typepartie','=','16')->get();
        #dd($n);
        foreach($n as $value){
           if( $value['typepartie']>$value['count'] )
           {
               $post->count+=1;
               $post->save();
               echo $value['id'];
           }
        }
        #if($n->typepartie!=$n->count)
        {
            echo( "hey hey");
        }
      
        #return view('partie',['users'=>$users]);
        #dd("insertion valide");
        }
   
}
