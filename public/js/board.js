

var grille = [[4,0,0,1,0,0,0,4,0,0,0,1,0,0,4],
              [0,3,0,0,0,2,0,0,0,2,0,0,0,3,0],
              [0,0,3,0,0,0,1,0,1,0,0,0,3,0,0],
              [1,0,0,3,0,0,0,1,0,0,0,3,0,0,1],
              [0,0,0,0,3,0,0,0,0,0,3,0,0,0,0],
              [0,2,0,0,0,2,0,0,0,2,0,0,0,2,0],
              [0,0,1,0,0,0,1,0,1,0,0,0,1,0,0],
              [4,0,0,1,0,0,0,5,0,0,0,1,0,0,4],
              [0,0,1,0,0,0,1,0,1,0,0,0,1,0,0],
              [0,2,0,0,0,2,0,0,0,2,0,0,0,2,0],
              [0,0,0,0,3,0,0,0,0,0,3,0,0,0,0],
              [1,0,0,3,0,0,0,1,0,0,0,3,0,0,1],
              [0,0,3,0,0,0,1,0,1,0,0,0,3,0,0],
              [0,3,0,0,0,2,0,0,0,2,0,0,0,3,0],
              [4,0,0,1,0,0,0,4,0,0,0,1,0,0,4]

]

function initialiser_grille(){

    for( var j=0; j<15; j++) {
        for (var i = 0; i < 15; i++) {
            id = "BoardSquareOrTile_" +i+ "x" +j;
            //console.log(id);
            $('#' + id)[0].innerText = 'A';
        }
    }
}

function integ_mot(mot_obj){

    var id ="BoardSquareOrTile_"+mot_obj.ligne+"x"+mot_obj.colonne;
    if(mot_obj.direction === 'h'){
        for(var i=0;i<mot_obj.mot.length;i++){
            id ="BoardSquareOrTile_"+(mot_obj.colonne+i-1)+"x"+(mot_obj.ligne-1);
            $('#'+id)[0].innerText = mot_obj.mot[i];
        }
    }
    else {
        for(var i=0;i<mot_obj.mot.length;i++){
            id ="BoardSquareOrTile_"+(mot_obj.colonne-1)+"x"+(mot_obj.ligne+i-1);
            $('#'+id)[0].innerText = mot_obj.mot[i];
        }
    }

}


function update_board(mot_obj){
    for (let i=0; i<mot_obj.mot.length; i++){
        var x = mot_obj.ligne-1;
        var y = mot_obj.colonne-1;
        if(mot_obj.direction === 'h'){
            grille[x][y+i] = 0;
        }
        else{
            grille[x+i][y] = 0;
        }
    }
}


