$(document).ready(function () {
    $.ajax({
        url:"../../../comuni/comuni.csv",
        dataType: "text",
        success: function(data){
            var comuni = Papa.parse(data,{
                header: true,
            });
            
            let localita = document.getElementById("localita");

            localita.addEventListener("keyup", (e) =>{
                removeElements();
                for( let i of comuni.data){
                    if(i.comune.toLowerCase().startsWith(localita.value.toLowerCase()) && localita.value != ""){
                        let listItem = document.createElement("li");
                        listItem.classList.add("list-items");
                        listItem.style.cursor = "pointer";
                        listItem.setAttribute("onclick", "displayNamesRichiesta('"+i.comune+"')");
                        let word = "<b>" + i.comune.substr(0,localita.value.length) + "</b>";
                        word += i.comune.substr(localita.value.length);
                        listItem.innerHTML = word;
                        document.querySelector("#list-richiesta").appendChild(listItem);
                    }
                }
            })
        }
    })
});

function displayNamesRichiesta(value){
    let localita = document.getElementById("localita");
    localita.value = value;
    removeElements();
}

function removeElements(){
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
        item.remove();
    });
}