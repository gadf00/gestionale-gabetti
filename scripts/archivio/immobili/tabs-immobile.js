$(document).ready(function () {
    $('#altri_dati_button').click(function(){
        $('#generale_div').removeClass("show");
        $('#generale_div').addClass("hide");

        $('#altri_dati_div').addClass("show");
        $('#altri_dati_div').removeClass("hide");
        $('#indietro_generale_div').removeClass("hide");
        $('#indietro_generale_div').addClass("show");
        $('#progress-bar').css('width','20%');

        $('#avanti_altri_dati_div').addClass("hide");
        $('#avanti_altri_dati_div').removeClass("show");

        $('#avanti_immagini_div').addClass("show");
        $('#avanti_immagini_div').removeClass("hide");
    });
    $('#immagini_button').click(function(){
        $('#indietro_generale_div').removeClass("show");
        $('#indietro_generale_div').addClass("hide");

        $('#altri_dati_div').addClass("hide");
        $('#altri_dati_div').removeClass("show");
        
        $('#indietro_altri_dati_div').removeClass("hide");
        $('#indietro_altri_dati_div').addClass("show");

        $('#immagini_div').removeClass("hide");
        $('#immagini_div').addClass("show");

        $('#progress-bar').css('width','40%');

        $('#avanti_immagini_div').addClass("hide");
        $('#avanti_immagini_div').removeClass("show");

        $('#avanti_caratteristiche_div').addClass("show");
        $('#avanti_caratteristiche_div').removeClass("hide");
    });

    $('#caratteristiche_button').click(function(){
        $('#indietro_altri_dati_div').removeClass("show");
        $('#indietro_altri_dati_div').addClass("hide");

        $('#immagini_div').addClass("hide");
        $('#immagini_div').removeClass("show");
        
        $('#indietro_immagini_div').removeClass("hide");
        $('#indietro_immagini_div').addClass("show");

        $('#caratteristiche_div').removeClass("hide");
        $('#caratteristiche_div').addClass("show");

        $('#progress-bar').css('width','60%');

        $('#avanti_caratteristiche_div').addClass("hide");
        $('#avanti_caratteristiche_div').removeClass("show");

        $('#avanti_dati_importanti_div').addClass("show");
        $('#avanti_dati_importanti_div').removeClass("hide");
    });

    $('#dati_importanti_button').click(function(){
        $('#indietro_immagini_div').removeClass("show");
        $('#indietro_immagini_div').addClass("hide");

        $('#caratteristiche_div').addClass("hide");
        $('#caratteristiche_div').removeClass("show");
        
        $('#indietro_caratteristiche_div').removeClass("hide");
        $('#indietro_caratteristiche_div').addClass("show");

        $('#dati_importanti_div').removeClass("hide");
        $('#dati_importanti_div').addClass("show");

        $('#progress-bar').css('width','80%');

        $('#avanti_dati_importanti_div').addClass("hide");
        $('#avanti_dati_importanti_div').removeClass("show");

        $('#salva_immobile_div').addClass("show");
        $('#salva_immobile_div').removeClass("hide");
    });

    $('#indietro_generale_button').click(function(){
        $('#altri_dati_div').addClass("hide");
        $('#altri_dati_div').removeClass("show");
        
        $('#indietro_generale_div').removeClass("show");
        $('#indietro_generale_div').addClass("hide");

        $('#generale_div').removeClass("hide");
        $('#generale_div').addClass("show");

        $('#progress-bar').css('width','1%');

        $('#avanti_immagini_div').addClass("hide");
        $('#avanti_immagini_div').removeClass("show");

        $('#avanti_altri_dati_div').addClass("show");
        $('#avanti_altri_dati_div').removeClass("hide");
    });

    $('#indietro_altri_dati_button').click(function(){
        $('#immagini_div').addClass("hide");
        $('#immagini_div').removeClass("show");
        
        $('#indietro_altri_dati_div').removeClass("show");
        $('#indietro_altri_dati_div').addClass("hide");

        $('#altri_dati_div').removeClass("hide");
        $('#altri_dati_div').addClass("show");

        $('#progress-bar').css('width','20%');

        $('#avanti_caratteristiche_div').addClass("hide");
        $('#avanti_caratteristiche_div').removeClass("show");

        $('#indietro_generale_div').removeClass("hide");
        $('#indietro_generale_div').addClass("show");


        $('#avanti_immagini_div').addClass("show");
        $('#avanti_immagini_div').removeClass("hide");
    });

    
    $('#indietro_immagini_button').click(function(){
        $('#caratteristiche_div').addClass("hide");
        $('#caratteristiche_div').removeClass("show");
        
        $('#indietro_immagini_div').removeClass("show");
        $('#indietro_immagini_div').addClass("hide");

        $('#immagini_div').removeClass("hide");
        $('#immagini_div').addClass("show");

        $('#progress-bar').css('width','40%');

        $('#avanti_dati_importanti_div').addClass("hide");
        $('#avanti_dati_importanti_div').removeClass("show");

        $('#indietro_altri_dati_div').removeClass("hide");
        $('#indietro_altri_dati_div').addClass("show");


        $('#avanti_caratteristiche_div').addClass("show");
        $('#avanti_caratteristiche_div').removeClass("hide");
    });

    $('#indietro_caratteristiche_button').click(function(){
        $('#dati_importanti_div').addClass("hide");
        $('#dati_importanti_div').removeClass("show");
        
        $('#indietro_caratteristiche_div').removeClass("show");
        $('#indietro_caratteristiche_div').addClass("hide");

        $('#caratteristiche_div').removeClass("hide");
        $('#caratteristiche_div').addClass("show");

        $('#progress-bar').css('width','40%');

        $('#salva_immobile_div').addClass("hide");
        $('#salva_immobile_div').removeClass("show");

        $('#indietro_immagini_div').removeClass("hide");
        $('#indietro_immagini_div').addClass("show");


        $('#avanti_dati_importanti_div').addClass("show");
        $('#avanti_dati_importanti_div').removeClass("hide");
    });
});