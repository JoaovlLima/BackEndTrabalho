window.onload = function() {
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("senhasDiferentes") === "true") {
        ativarPopUp();
    }
};


function ativarPopUp(){
var popUpAtivar = document.getElementById("popUp")
var divEmbaca = document.getElementById("fundoEmbaca")
  divEmbaca.classList.add("bodyEm")
  popUpAtivar.classList.add("show");
  
}

document.addEventListener("click", function(event) {
    var popUp = document.getElementById("popUp");
    var fundoEmbaca = document.getElementById("fundoEmbaca");

    
    if (!popUp.contains(event.target) && event.target !== document.querySelector(".ativarPopUp")) {
        fundoEmbaca.classList.remove("bodyEm")
        popUp.classList.remove("show");
    }
});