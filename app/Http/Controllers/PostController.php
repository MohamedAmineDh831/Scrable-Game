<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\nizar;
use App\Models\play;
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
         $play=new play();
        
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
   
    
    
    return view('welcome');
 }
$users=$n[$c];
{
while($users['typepartie']>$users['count'])
           
           {
            $play->user=$request->input('us');
            $play->idpartie=$users['id'];
            $play->save();
             $users['count']+=1;
             $users->save();
              echo 'dekhel'; 
                echo "nizar";     
                echo $users['id'];   
                   echo $users->count;
                   $p=play::where('id','=','1')->get();
                   $u=$p[0]['idpartie'];
                   $r=nizar::where('id','=',$u)->get();
                   echo $r[0]['count'];

              
                 return view('welcome');
           }
           if($users['typepartie']==$users['count'])
           {
               echo 'play game';
           return view('welcome');
           
           }
          
        
         
        
        

            
           
          
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
