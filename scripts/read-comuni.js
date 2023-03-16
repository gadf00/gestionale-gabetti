$(document).ready(function () {
    $.ajax({
        url:"comuni/comuni.csv",
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
                        listItem.setAttribute("onclick", "displayNames('"+i.pro_com_t+"')");
                        let word = "<b>" + i.comune.substr(0,localita.value.length) + "</b>";
                        word += i.comune.substr(localita.value.length);
                        listItem.innerHTML = word;
                        document.querySelector(".list").appendChild(listItem);
                    }
                }
            })
            localita.addEventListener("change", (e) =>{
                console.log("sium");
                if(localita.value == ""){
                    document.getElementById('provincia').value = "";
                    document.getElementById('cap').value = "";
                }
            })
        }
    })
});

function displayNames(value){
    let localita = document.getElementById("localita");
    $.ajax({
        url:"comuni/comuni.csv",
        dataType: "text",
        success: function(data){
            var comuni = Papa.parse(data,{
                header: true,
            });
            
            for( let i of comuni.data){
                if(value === i.pro_com_t){
                    localita.value = i.comune;
                    $.ajax({
                        url:"comuni/cap.csv",
                        dataType: "text",
                        success: function(data){
                            var caps = Papa.parse(data,{
                                header: true,
                            });
                            
                            for( let i of caps.data){
                                if(value === i.pro_com_t){
                                    let cap = document.getElementById("cap");
                                    cap.value = i.cap;
                                }
                            }
                
                        }
                    });
                    let provincia = document.getElementById("provincia");
                    provincia.value = i.sigla;
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


$(document).ready(function () {
    $.ajax({
        url:"comuni/comuni.csv",
        dataType: "text",
        success: function(data){
            var comuni = Papa.parse(data,{
                header: true,
            });
            
            let localita = document.getElementById("richiesta-localita");

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
    let localita = document.getElementById("richiesta-localita");
    localita.value = value;
    removeElements();
}