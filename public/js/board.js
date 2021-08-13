

function initialiser_grille(){
    var arrayLignes = document.getElementById("tb").rows; //on récupère les lignes du tableau
    var longueur = arrayLignes.length;//on peut donc appliquer la propriété length


    for(var i=0; i<longueur; i++)//on peut directement définir la variable i dans la boucle
    {
        var arrayColonnes = arrayLignes[i].cells;//on récupère les cellules de la ligne
        var largeur = arrayColonnes.length;

        for(var j=0; j<largeur; j++)
        {
            if((i<3)||((i==3)&&(j==0))){
                arrayColonnes[j].innerText = 'A';
            }
            else {
                arrayColonnes[j].childNodes[0].removeChild(arrayColonnes[j].childNodes[0].childNodes[0]);
                arrayColonnes[j].childNodes[0].innerText = 'A';
                //console.log(arrayColonnes[j].childNodes[0]);
            }
        }
    }
}

function integ_mot(mot_obj){

    var id ="BoardSquareOrTile_"+mot_obj.ligne+"x"+mot_obj.colonne;
    if(mot_obj.direction === 'h'){
        for(var i=0;i<mot_obj.mot.length;i++){
            id ="BoardSquareOrTile_"+(mot_obj.colonne+i)+"x"+mot_obj.ligne;
            $('#'+id)[0].innerText = mot_obj.mot[i];
        }
    }
    else {
        for(var i=0;i<mot_obj.mot.length;i++){
            id ="BoardSquareOrTile_"+mot_obj.colonne+"x"+(mot_obj.ligne+i);
            $('#'+id)[0].innerText = mot_obj.mot[i];
        }
    }

}
