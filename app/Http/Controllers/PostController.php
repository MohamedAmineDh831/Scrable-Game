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
         $c=0;
        $post=new nizar();
        $post->typepartie=$request->input("tp");
   
        
        $post->count=50;
        $post->typepartie=$request->input("tp");
        $k=$request->input("tp");
       
        #$users = DB::table('nizars')->select('id','typepartie')->get();
        $users = DB::select('select * from nizars ');
        #$users = DB::select('select count from  nizars where typepartie=10');
        $n=nizar::where('typepartie','=',$k)->get();
        


  foreach($n as $value){
           if( $value['typepartie']>$value['count'] )
           {
             $value['count']+=1;
             $value->save();
              echo"uhuh";              
             echo $value['id'];
           }
           else
           {
            $post->count=50;
            $post->typepartie=$request->input("tp");
            $post->save();
           
            echo"nizar";
           }
           
        }

    
        /*if($c)
        {
            $post->count+=1;
            $post->typepartie=$request->input("tp");
            $post->save();
        }
      */
        #return view('partie',['users'=>$users]);
        #dd("insertion valide");
        }
   
}
