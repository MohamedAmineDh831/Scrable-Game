

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

function calcul_score(mot_obj){
    console.log(grille);
    var lettre = 0;
    var score = 0;
    var multiple_score = 1;
    for (let i=0; i<mot_obj.mot.length; i++){
        lettre = (mot_obj.mot[i].toUpperCase()).charCodeAt(0)-65;
        console.log(reserve[lettre]);
        score += reserve[lettre].Points;
        var x = mot_obj.ligne-1;
        var y = mot_obj.colonne-1;
        if(mot_obj.direction === 'h'){
            if(grille[x][y+i] === 1){
                score += reserve[lettre].Points;
                grille[x][y+i] = 0;
            }
            else if(grille[x][y+i] === 2){
                score += 2*(reserve[lettre].Points);
                grille[x][y+i] = 0;
            }
            else if(grille[x][y+i] === 3){
                multiple_score = 2;
                grille[x][y+i] = 0;
            }
            else if(grille[x][y+i] === 4){
                multiple_score = 3;
                grille[x][y+i] = 0;
            }
        }
    }

    return score*multiple_score;
}

