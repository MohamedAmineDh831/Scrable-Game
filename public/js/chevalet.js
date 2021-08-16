

var chevalet = 'tmfdbwa';

function get_chevalet(){
    return chevalet;
}


function update_chevalet_changer(mot,li){
   // console.log(chevalet);
    //console.log(li);
    var c = '';
    for(var i=0; i<mot.length; i++){
        chevalet = chevalet.slice(0, chevalet.indexOf(mot[i]))+li[i].toLowerCase()+chevalet.slice(chevalet.indexOf(mot[i])+1, chevalet.length);
        //console.log(chevalet);
    }
    //console.log(chevalet);
}
