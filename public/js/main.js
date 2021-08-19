/*(function($) {

    $(".toggle-password").click(function() {

        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });

})(jQuery);*/

function main() {
    initialiser_grille();
    integ_mot({'mot': 'mot', 'ligne': 4, 'colonne': 5, 'direction': 'h'});
    update_board({'mot': 'mot', 'ligne': 4, 'colonne': 5, 'direction': 'h'});
    $('#action').click(function () {
        var mot = $("#commande").val();
        var mot_obj = {};
        //var listRand = [];
        verif_syntaxe(mot);
        if (commande === 'placer') {
            mot_obj = decode_placer(mot);
            traitement_placer(mot_obj)
        }
        else if(commande === 'changer'){
            mot = decode_changer(mot);
            traitement_changer(mot);
        }
        console.log('chevalet :'+chevalet);
       // console.log('li :'+listRand);
        console.log(reserve);
    });

}
