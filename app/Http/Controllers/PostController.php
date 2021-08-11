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
        #$post->typepartie=$request->input("tp");
        $post->count=7;
        $post->typepartie=$request->input("tp");
        $k=$request->input("tp");
        $post->save();
        #$users = DB::table('nizars')->select('id','typepartie')->get();
        $users = DB::select('select * from nizars ');
        #$users = DB::select('select count from  nizars where typepartie=10');
       # $n=nizar::where('typepartie','=','10')->get();
        #dd($n);
        $m=1;
        DB::update('update nizars set count = ? where typepartie>count   and typepartie = ?',['count+'.$m,$k]);
        #DB::table("nizars")->where('id', $k,'typepartie>count')->increment('count');
        $id=5;
$votes=20;

     /*   foreach($n as $value){
           if( $value['typepartie']>$value['count'] )
           {
            DB::update('update student set count = ? where typepartie>count',[3]);
            $value['count']+=1;
               #$post->count+=1;
               #$post->save();
               echo $value['id'];
           }
           
        }
        */
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
