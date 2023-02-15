import './bootstrap';
/*----------------------------------------------------------------------------------------------------------
--------PÁGINA PRINCIPAL------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------*/

let elementos = document.getElementsByClassName("elemento");

for(let i=0; i<elementos.length;i++) {
    if(elementos[i]==document.URL) {
        elementos[i].setAttribute("class", "blancoBorde");
    }
}

/*----------------------------------------------------------------------------------------------------------
--------DROPDOWN USUARIO------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------*/

let flecha = document.getElementById('flechaArribaAbajo');
flecha.textContent = " ▾"

let dropBtn = document.getElementById('dropbtnUser');
let dropUser = document.getElementById("dropUser");

dropBtn.addEventListener("click", ()=>{
    dropUser.classList.toggle("showDrop")
    if(dropUser.className==="dropUserContent showDrop") {
        flecha.textContent = " ▴";
    } else {
        flecha.textContent = " ▾";
    }
});
