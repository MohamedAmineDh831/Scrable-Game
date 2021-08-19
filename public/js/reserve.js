

var reserve = [
    {'Lettre': 'A', 'Quantity': 9, 'Points': 1},
    {'Lettre': 'B', 'Quantity': 2, 'Points': 3},
    {'Lettre': 'C', 'Quantity': 2, 'Points': 3},
    {'Lettre': 'D', 'Quantity': 3, 'Points': 2},
    {'Lettre': 'E', 'Quantity': 15, 'Points': 1},
    {'Lettre': 'F', 'Quantity': 2, 'Points': 4},
    {'Lettre': 'G', 'Quantity': 2, 'Points': 2},
    {'Lettre': 'H', 'Quantity': 2, 'Points': 4},
    {'Lettre': 'I', 'Quantity': 8, 'Points': 1},
    {'Lettre': 'J', 'Quantity': 1, 'Points': 8},
    {'Lettre': 'K', 'Quantity': 1, 'Points': 10},
    {'Lettre': 'L', 'Quantity': 5, 'Points': 1},
    {'Lettre': 'M', 'Quantity': 3, 'Points': 2},
    {'Lettre': 'N', 'Quantity': 6, 'Points': 1},
    {'Lettre': 'O', 'Quantity': 6, 'Points': 1},
    {'Lettre': 'P', 'Quantity': 2, 'Points': 3},
    {'Lettre': 'Q', 'Quantity': 1, 'Points': 8},
    {'Lettre': 'R', 'Quantity': 6, 'Points': 1},
    {'Lettre': 'S', 'Quantity': 6, 'Points': 1},
    {'Lettre': 'T', 'Quantity': 6, 'Points': 1},
    {'Lettre': 'U', 'Quantity': 6, 'Points': 1},
    {'Lettre': 'V', 'Quantity': 2, 'Points': 4},
    {'Lettre': 'W', 'Quantity': 1, 'Points': 10},
    {'Lettre': 'X', 'Quantity': 1, 'Points': 10},
    {'Lettre': 'Y', 'Quantity': 1, 'Points': 10},
    {'Lettre': 'Z', 'Quantity': 1, 'Points': 10}
]

function get_reserve(){
    return reserve;
}

function update_reserve_placer(li){
    var Lj = [];
    for( var i=0; i<li.length; i++){
        Lj[i] = li[i].charCodeAt(0)-65;
        reserve[Lj[i]].Quantity--;
    }
}



function update_reserve_changer(mot,li){
   // console.log(li);
    var lj = [];
    for( var i=0; i<mot.length; i++){
        lettre = (mot[i].toUpperCase()).charCodeAt(0)-65;
        lj[i] = li[i].charCodeAt(0)-65;
        reserve[lettre].Quantity++;
        reserve[lj[i]].Quantity--;
    }
   // console.log(reserve);
}

function rand(n){
    var rand = Math.floor(Math.random()*(reserve.length));
    var liste_rand =[];
    var liste_disponible = [];
    for(var i=0; i<reserve.length; i++){
        for(var j=0; j<reserve[i].Quantity; j++) {
            liste_disponible.push(reserve[i].Lettre);
        }
    }
    for(i=0; i<n; i++){
        rand = Math.floor(Math.random()*liste_disponible.length);
        liste_rand.push(liste_disponible[rand]);
        liste_disponible.splice(rand,1);
    }
    return liste_rand;
}

function verif_reserve(mot){
    var count = 0;
    var verif = true;
    for(var i = 0; i<reserve.length; i++){
        count+=reserve[i].Quantity;
    }
    console.log(count);

    try{
        if(mot.length > count){
            throw new SyntaxError('reserve is not sufisante');
        }
    }
    catch (e){
        verif = false;
    }
    finally {
        return verif;
    }

}


