



function calcul_score(mot_obj){
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
            }
            else if(grille[x][y+i] === 2){
                score += 2*(reserve[lettre].Points);
            }
            else if(grille[x][y+i] === 3){
                multiple_score = 2;
            }
            else if(grille[x][y+i] === 4){
                multiple_score = 3;
            }
        }
    }

    return score*multiple_score;
}

function verifierDictionnaire(mot,dic){
    var i=0;
    var verif=false;
    while ((dic[i] !== mot)&&(i<dic.length)){
        i++;
    }
    if(i<dic.length-1){
        verif=true;
    }

    return verif;
}


function telecharger(){
    var dictionnaire = [];
    for (var i=0;i<mydata.length;i++){
        dictionnaire.push(RemplacerCaractere(mydata[i].label));
    }
    return dictionnaire;
}



function RemplacerCaractere(mot){
    return  mot.normalize('NFD').replace(/[\u0300-\u036f]/g, '');

}

