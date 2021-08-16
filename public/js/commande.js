var commande ='';
var joueur = 0;
var Joueurs = [
    {'nom': 'Mohamed Amine', 'tour': true, 'score': 0},
    {'nom': 'Nizar', 'tour': false, 'score': 0},
    {'nom': 'Nour', 'tour': false, 'score': 0},
    {'nom': 'Ahmed', 'tour': false, 'score': 0}
];

function changer_tour(){
    Joueurs[joueur].tour =false;
    Joueurs[(joueur+1)%4].tour = true;
}


//.........................BLOC_PASSER.................

        //lorsque la commande passée est passer et après la vérification de syntaxe, ce bloc s'occupe de tous les traitements nécéssaires

        function traitement_passer(){
            changer_tour();
        }

//.........................BLOC_PASSER.................



//.........................BLOC_PLACER.................

        //lorsque la commande passée est placer et après la vérification de syntaxe, ce bloc s'occupe de tous les traitements nécéssaires

        function decode_placer(){
            var s = '!placer g15v bonjour';
            var mot = s.slice(s.lastIndexOf(' ')+1, s.length);
            var ligne = s.charCodeAt(8)-96;
            var colonne = 0;
            var direction = '';
            if((s[10] === 'v')||(s[10] === 'h')){
                colonne = parseInt(s[9]);
                if(s[10] === 'v'){
                    direction = 'v';
                }
                else{
                    direction = 'h';
                }
            }
            else{
                colonne = parseInt(s.slice(9,11));
                if(s[11] === 'v'){
                    direction = 'v';
                }
                else{
                    direction = 'h';
                }
            }
            changer_tour()
            return {'mot': mot, 'ligne': ligne, 'colonne': colonne, 'direction': direction};

        }
        function traitement_placer(){


        }

//.........................BLOC_PLACER.................




//.........................BLOC_CHANGER.................

        //lorsque la commande passée est changer et après la vérification de syntaxe, ce bloc s'occupe de tous les traitements nécéssaires

        function decode_changer(){
            var s = '!changer mwb';
            return s.slice(s.indexOf(' ') + 1, s.length);
        }

        function traitement_changer(mot){
            update_chevalet(mot);
            changer_tour()
        }

//.........................BLOC_CHANGER...............



//.........................BLOC_VERIF_SYNTAXE...............

function verif_syntaxe(mot){
    if(mot === '!passer'){
        commande = 'passer';
    }
    else if((mot.slice(0,8) === '!placer ')&&(mot.length>8)){
        commande = 'placer';
    }
    else if((mot.slice(0,8) === '!changer ')&&(mot.length>8)){
        commande = 'changer';
    }
}
