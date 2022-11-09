import './bootstrap';

/*----------------------------------------------------------------------------------------------------------
--------LOGIN-----------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------*/

let tip = document.getElementById("inputPassword");
let ojo = document.getElementById("ojo");
ojo.addEventListener( "click", ()=> {
    if (tip.type=="password"){
        tip.type="text";
        ojo.style.opacity = 1;
    } else {
        tip.type="password";
        ojo.style.opacity = 0.5;
    }
})

/*----------------------------------------------------------------------------------------------------------
--------PÁGINA PRINCIPAL------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------*/

let elementos = document.getElementsByClassName("elemento")
alert(document.documentURI +", "+ elementos[0].href);

for(let i=0; i<elementos.length;i++) {
    if(elementos[i].href===document.documentURI) {
        elementos[i].class="blancoBorde";
    }
}
