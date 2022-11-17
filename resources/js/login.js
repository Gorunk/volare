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
