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

/*document.getElementById('iconVuelos').addEventListener('click', ()=> {
    alert("ha funcionado");
})*/
