let test = "action";
function main(){
    let audio = new Audio("cinehub_intro.mp3");
    kl = [];
    addEventListener("keydown", e=>{
        kl.push(e.keyCode)
        if (kl.length > 11)
        kl=kl.slice(-11);
        if (JSON.stringify(kl) == "[38,38,40,40,37,39,37,39,66,65,13]"){
            audio.play();
        }
        })
}
addEventListener("DOMContentLoaded", main);

function genre(){
    if(document.getElementById("element_create").style.display == "block"){
        document.getElementById("element_create").style.display = "none";
    }
    else{
        document.getElementById("element_create").style.display = "block";
        document.getElementById("element_create2").style.display = "none";
        for(let i = 0; i < document.getElementById("element_create").getElementsByTagName("td").length; i += 1){
            result(document.getElementById("element_create").getElementsByTagName("td")[i]);
        }
        function result(value){
            value.addEventListener("click", () =>{
                let valeur = value.innerHTML;
                if(valeur == "Aucun"){
                    valeur = "";
                }
                document.getElementById("genre").value = valeur;
                document.forms["formulaire"].submit();
            })
        }
    }
}
function distributor(){
    if(document.getElementById("element_create2").style.display == "block"){
        document.getElementById("element_create2").style.display = "none";
    }
    else{
        document.getElementById("element_create2").style.display = "block";
        document.getElementById("element_create").style.display = "none";
        for(let j = 0; j< document.getElementById("element_create2").getElementsByTagName("td").length; j += 1){
            result2(document.getElementById("element_create2").getElementsByTagName("td")[j]);
        }
        function result2(value){
            value.addEventListener("click", () =>{
                let valeur = value.innerHTML;
                console.log(valeur);
                if(valeur == "Aucun"){
                    valeur = "";
                }
                else if(valeur == "\"DIA\" Productions GmbH &amp; Co. KG"){
                    valeur = "\"DIA\" Productions GmbH & Co. KG";
                }
                document.getElementById("distributor").value = valeur;
                document.forms["formulaire"].submit();
            })
        }
    }
}
function home(){
    document.getElementById("element_create").style.display = "none";
    document.getElementById("element_create2").style.display = "none";
}