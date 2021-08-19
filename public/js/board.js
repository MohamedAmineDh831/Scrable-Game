

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
            $('#' + id)[0].innerText = '';
        }
    }
   /* id = "BoardSquareOrTile_" +4+ "x" +6;
    console.log(id);
    $('#' + id)[0].innerText = 'm';*/
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
            grille[x][y+i] = -1;
        }
        else{
            grille[x+i][y] = -1;
        }
    }
}

function verif_board(mot_obj){
    var verif = true;
    var ch = '';
    try {
        if (((mot_obj.direction === 'h') && (mot_obj.colonne + mot_obj.mot.length > 16))||((mot_obj.direction === 'v') && (mot_obj.ligne + mot_obj.mot.length > 16)))
        {
            throw SyntaxError('ligne insufisant our intégrer cette mot');
        }
        for (let i=0; i<mot_obj.mot.length; i++){
            var x = mot_obj.ligne-1;
            var y = mot_obj.colonne-1;
            var id ="BoardSquareOrTile_"+(y+i)+"x"+x;
            if(mot_obj.direction === 'h'){
                id = "BoardSquareOrTile_" + (y + i) + "x" + x;
                if ((grille[x][y + i] === -1) && ($('#' + id)[0].innerText !== mot_obj.mot[i])) {
                    throw SyntaxError('emplacement incorrecte');
                }
                else if(grille[x][y+i] !== -1){
                    ch +=mot_obj.mot[i];
                }
            }
            else{
                id ="BoardSquareOrTile_"+y+"x"+(x+i);
                if((grille[x+i][y] === -1)&&($('#'+id)[0].innerText !== mot_obj.mot[i])){
                     throw SyntaxError('emplacement incorrecte'+i);
                }
                else if(grille[x+i][y] !== -1){
                    ch +=mot_obj.mot[i];
                }
            }
        }
        if(ch.length === mot_obj.mot.length){
            throw SyntaxError('mot nest pas liée');
        }
    }
    catch(e){
        console.log(e.message);
           verif = false;
    }
    finally {
        return {'verif': verif, 'chev': ch};
    }
}




/*
     ### le test de la fonction verif est le code suivant :
        initialiser_grille();
        integ_mot({'mot': 'motus', 'ligne': 1, 'colonne': 11, 'direction': 'h'});
        update_board({'mot': 'motus', 'ligne': 1, 'colonne': 11, 'direction': 'h'});
        console.log(verif_board({'mot': 'atu', 'ligne': 1, 'colonne': 12, 'direction': 'h'}));
     ### on jue avec les valeurs des parametres mot_obj pour tester cette fonction
 */



