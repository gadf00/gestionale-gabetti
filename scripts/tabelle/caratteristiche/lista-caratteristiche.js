$(document).ready(function(){
    var caratteristiche;
    const table = document.querySelector('#caratteristiche-table tbody');
    $.ajax({
        url: "../../../control/tabelle/caratteristiche/lista-caratteristiche.php",
        dataType: 'json',
        async: false,
        success: function(response) { 
            caratteristiche = response;
            caratteristiche.forEach(caratteristica =>{
                aggiungiRigaCaratteristica(table,caratteristica);
            }
        );
        },
        error: function (xhr, status, error) {
            // Gestisci eventuali errori
            console.log(xhr.responseText);
          },
    });

    $('.modal-modifica').click(function(){
        var idCaratteristica = $(this).attr('data-id');
        var modifica_div = $('#modifica-caratteristica-div');
        caratteristiche.forEach(caratteristica =>{
            if(idCaratteristica == caratteristica.id_caratteristica){
                const rowHtml = 
                    "<input type='text' class='form-control' id='modifica-caratteristica' value='"+caratteristica.caratteristica+"' data-id='"+caratteristica.id_caratteristica+"' placeholder='Caratteristica' pattern='^[\\p{L} ]+$' required>"+
                    "<label for='modifica-caratteristica'>Caratteristica</label>"+
                    "<div class='valid-feedback'>Inserimento corretto!</div>"+
                    "<div class='invalid-feedback'>Caratteristica non può essere vuoto, contenere caratteri speciali o numeri.</div>"
                modifica_div.append(rowHtml);
            }
        });
    })
});




function aggiungiRigaCaratteristica(table,caratteristica){
    const row = document.createElement('tr');
    row.innerHTML = 
        "<td>" + caratteristica.id_caratteristica + "</td>" +
        "<td>" + caratteristica.caratteristica + "</td>" +
        "<td>"+
            "<div class='dropdown'>"+
                "<button class='btn btn-altblue dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>"+
                    "Operazioni"+
                "</button>"+
                "<ul class='dropdown-menu bg-altblue'>"+
                    "<li><button class='dropdown-item btn text-white modal-modifica' data-bs-target='#modificaCaratteristica' data-bs-toggle='modal' data-id="+caratteristica.id_caratteristica+">Modifica</button></li>"+
                    "<li><button class='elimina-cliente dropdown-item' type='button' data-id='"+caratteristica.id_caratteristica+"'>Elimina</button></li>"+
                "</ul>"+
            "</div>"+
        "</td>";

    table.appendChild(row);
}