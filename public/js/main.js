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
        var listRand = [];
        verif_syntaxe(mot);
        if (commande === 'placer') {
            mot_obj = decode_placer(mot);
            if (mot_obj) {
                if ((verif_board(mot_obj).verif) && (verif_chevalet(verif_board(mot_obj).chev)) && verif_reserve(mot_obj.mot)&&(verif_board(mot_obj).verif)) {
                    listRand = rand(verif_board(mot_obj).chev.length);
                    update_reserve_placer(listRand);
                    integ_mot(mot_obj);
                    update_chevalet(verif_board(mot_obj).chev, listRand);
                    update_board(mot_obj);

                }

            }
        }
        console.log('chevalet :'+chevalet);
        console.log('li :'+listRand);
        console.log(reserve);
    });

}
