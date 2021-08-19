

var chevalet = 'tmfdbwa';

function get_chevalet(){
    return chevalet;
}


function update_chevalet(mot,li){
    for(var i=0; i<mot.length; i++){
        chevalet = chevalet.slice(0, chevalet.indexOf(mot[i]))+li[i].toLowerCase()+chevalet.slice(chevalet.indexOf(mot[i])+1, chevalet.length);
    }
}



function verif_chevalet(mot){
    var i = 0;
    var verif = true;
    var chev = chevalet;
    try{
        while((verif)&&(i<mot.length)){
            if(chev.includes(mot[i])){
                chev = chev.slice(0, chev.indexOf(mot[i]))+chev.slice(chev.indexOf(mot[i])+1, chev.length);
                i++;
            }
            else{
                if(i<mot.length){
                    throw SyntaxError('chevalet ne comporte pas les lettres nécéssaires');
                }
            }
        }
    }
    catch (e){
        console.log(e.message);
        verif = false;
    }
    finally {
        return verif;
    }
}

