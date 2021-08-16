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

function main(){
    var listRand = rand(4);
    update_reserve_changer('mdba',listRand);
    update_chevalet_changer('mdba',listRand);

}
