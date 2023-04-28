$(document).ready(function () {
    $('#altri_dati_button').click(function(){
        $('#anagrafica_div').removeClass("show");
        $('#anagrafica_div').addClass("hide");

        $('#altri_dati_div').addClass("show");
        $('#altri_dati_div').removeClass("hide");
        $('#indietro_anagrafica_div').removeClass("hide");
        $('#indietro_anagrafica_div').addClass("show");
        $('#progress-bar').css('width','25%');

        $('#avanti_altri_dati_div').addClass("hide");
        $('#avanti_altri_dati_div').removeClass("show");

        $('#avanti_documenti_div').addClass("show");
        $('#avanti_documenti_div').removeClass("hide");
    });
    $('#documenti_button').click(function(){
        $('#indietro_anagrafica_div').removeClass("show");
        $('#indietro_anagrafica_div').addClass("hide");

        $('#altri_dati_div').addClass("hide");
        $('#altri_dati_div').removeClass("show");
        
        $('#indietro_altri_dati_div').removeClass("hide");
        $('#indietro_altri_dati_div').addClass("show");

        $('#documenti_div').removeClass("hide");
        $('#documenti_div').addClass("show");

        $('#progress-bar').css('width','50%');

        $('#avanti_documenti_div').addClass("hide");
        $('#avanti_documenti_div').removeClass("show");

        $('#avanti_postit_div').addClass("show");
        $('#avanti_postit_div').removeClass("hide");
    });


    $('#postit_button').click(function(){
        $('#indietro_altri_dati_div').removeClass("show");
        $('#indietro_altri_dati_div').addClass("hide");

        $('#documenti_div').addClass("hide");
        $('#documenti_div').removeClass("show");
        
        $('#indietro_documenti_div').removeClass("hide");
        $('#indietro_documenti_div').addClass("show");

        $('#postit_div').removeClass("hide");
        $('#postit_div').addClass("show");

        $('#progress-bar').css('width','75%');

        $('#avanti_postit_div').addClass("hide");
        $('#avanti_postit_div').removeClass("show");

        $('#salva_cliente_div').addClass("show");
        $('#salva_cliente_div').removeClass("hide");
    });

    $('#indietro_anagrafica_button').click(function(){
        $('#altri_dati_div').addClass("hide");
        $('#altri_dati_div').removeClass("show");
        
        $('#indietro_anagrafica_div').removeClass("show");
        $('#indietro_anagrafica_div').addClass("hide");

        $('#anagrafica_div').removeClass("hide");
        $('#anagrafica_div').addClass("show");

        $('#progress-bar').css('width','1%');

        $('#avanti_documenti_div').addClass("hide");
        $('#avanti_documenti_div').removeClass("show");

        $('#avanti_altri_dati_div').addClass("show");
        $('#avanti_altri_dati_div').removeClass("hide");
    });

    $('#indietro_altri_dati_button').click(function(){
        $('#documenti_div').addClass("hide");
        $('#documenti_div').removeClass("show");
        
        $('#indietro_altri_dati_div').removeClass("show");
        $('#indietro_altri_dati_div').addClass("hide");

        $('#altri_dati_div').removeClass("hide");
        $('#altri_dati_div').addClass("show");

        $('#progress-bar').css('width','25%');

        $('#avanti_postit_div').addClass("hide");
        $('#avanti_postit_div').removeClass("show");

        $('#indietro_anagrafica_div').removeClass("hide");
        $('#indietro_anagrafica_div').addClass("show");


        $('#avanti_documenti_div').addClass("show");
        $('#avanti_documenti_div').removeClass("hide");
    });

    $('#indietro_documenti_button').click(function(){
        $('#postit_div').addClass("hide");
        $('#postit_div').removeClass("show");
        
        $('#indietro_documenti_div').removeClass("show");
        $('#indietro_documenti_div').addClass("hide");

        $('#documenti_div').removeClass("hide");
        $('#documenti_div').addClass("show");

        $('#progress-bar').css('width','50%');

        $('#salva_cliente_div').addClass("hide");
        $('#salva_cliente_div').removeClass("show");

        $('#indietro_altri_dati_div').removeClass("hide");
        $('#indietro_altri_dati_div').addClass("show");


        $('#avanti_postit_div').addClass("show");
        $('#avanti_postit_div').removeClass("hide");
    });
});