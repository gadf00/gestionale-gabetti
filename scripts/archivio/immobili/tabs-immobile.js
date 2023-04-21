$(document).ready(function () {
    $('#altri_dati_button').click(function(){
        var altri_dati_div = $('#altri_dati_div');
        var generale_div = $('#generale_div');
        var indietro_generale = $('#indietro_generale');
        generale_div.removeClass("show");
        generale_div.addClass("hide");

        altri_dati_div.addClass("show");
        altri_dati_div.removeClass("hide");
        indietro_generale.removeClass("hide");
        indietro_generale.addClass("show");
        $('#progress-bar').css('width','20%');
    })
});