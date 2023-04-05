$(document).ready(function () {
    $.ajax({
        url:"../../../comuni/comuni.csv",
        dataType: "text",
        success: function(data){
            var comuni = Papa.parse(data,{
                header: true,
            });
            
            let localita = document.getElementById("comune");

            localita.addEventListener("keyup", (e) =>{
                removeElements();
                for( let i of comuni.data){
                    if(i.comune.toLowerCase().startsWith(localita.value.toLowerCase()) && localita.value != ""){
                        let listItem = document.createElement("li");
                        listItem.classList.add("list-items");
                        listItem.style.cursor = "pointer";
                        listItem.setAttribute("onclick", "displayNames('"+i.pro_com_t+"')");
                        let word = "<b>" + i.comune.substr(0,localita.value.length) + "</b>";
                        word += i.comune.substr(localita.value.length);
                        listItem.innerHTML = word;
                        document.querySelector(".list").appendChild(listItem);
                    }
                }
            })
        }
    })
});

function displayNames(value){
    let localita = document.getElementById("comune");
    $.ajax({
        url:"../../../comuni/comuni.csv",
        dataType: "text",
        success: function(data){
            var comuni = Papa.parse(data,{
                header: true,
            });
            
            for( let i of comuni.data){
                if(value === i.pro_com_t){
                    localita.value = i.comune;
                    $.ajax({
                        url:"../../../comuni/comuni_codici-catastali.csv",
                        dataType: "text",
                        success: function(data){
                            var codici_catastali = Papa.parse(data,{
                                header: true,
                            });
                            
                            for( let i of codici_catastali.data){
                                if(value === i.pro_com_t){
                                    let codice = document.getElementById("codice-catastale");
                                    codice.value = i.codice_catastale;
                                }
                            }
                
                        }
                    });
                }
            }

        }
    });
    removeElements();
}

function removeElements(){
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
        item.remove();
    });
}