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
        $k=$request->input("tp");
       
        #$users = DB::table('nizars')->select('id','typepartie')->get();
        $users = DB::select('select * from nizars where typepartie>count and typepartie=? ',[$k]);
        #$users = DB::select('select count from  nizars where typepartie=10');
        $n=nizar::where('typepartie','=',$k)->get();
 
    

 /*if(!count($n))
 {
    $post->typepartie=$request->input("tp");  
    $post->count=55;
    $post->save();
 }
 */
 /*for($i=0;$i<count($n);$i++)
 {
if($n[$i]['typepartie']==$n[$i]['count'])
{
 
    unset($n[$i]);
}


 }
 */
while($users['typepartie']>$users['count'])
           
           {
             $users->count=$users->count+1;
             $post->save();
              echo 'dekhel'; 
                echo "nizar";        
                   echo $users->count;
                 return view('welcome');
           }
        
           {

            $post->typepartie=$request->input("tp");  
            $post->count=55;
            $post->save();
           
            echo $post->count;
            
            return view('welcome');
           
          
           }
        /* else  if(  $value['typepartie']==$value['count'])
           {  echo "nizar";        
            echo $value['count'];
               echo "eq";
             return view('welcome');
           }
           /*else{
            echo "nizar";    
            echo $value['count'];
            return view('welcome');
           }
          
         
          
       
           else
           {

            $post->typepartie=$request->input("tp");  
            $post->count=55;
            $post->save();
           
            echo $post->count;
            
            return view('welcome');
           
          
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
