<?php

namespace App\Http\Controllers;

use App\Models\Partie;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function jeu(Request $request){
        //$matchthese = ['id' => 1];
       // $partie = Partie::where($matchthese)->get();
        $request->session()->remove('id_partie');
        $request->session()->remove('id_joueur');
        $request->session()->remove('next_id_joueur');
        $request->session()->push('id_partie', 1);
        $request->session()->push('id_joueur', 1);
        $request->session()->push('next_id_joueur', 2);
        return view('Game.game');
    }

    function jeu_post(Request $request){
        $ch = '';
        $reserve = $request->input('reserv');
        $board = $request->input('board');
        for($i=0; $i<sizeof($reserve); $i++){
            for($j=0; $j<$reserve[$i]['Quantity']; $j++){
                $ch .= $reserve[$i]['Lettre'];
            }
        }
        $id_partie = $request->session()->get('id_partie');
        $id_joueur = $request->session()->get('id_joueur');
        $next_id_joueur = $request->session()->get('next_id_joueur');

        $joueur = User::find($id_joueur[0]);
        $joueur->tour = 0;
        $next_joueur = User::find($next_id_joueur[0]);
        $next_joueur->tour = 1;
        $partie = Partie::find($id_partie[0]);
        $partie->reserve = $ch;
        $partie->board = $board;
        $partie->save();
        $joueur->save();
        $next_joueur->save();
        return  $id_partie[0];
    }


}
