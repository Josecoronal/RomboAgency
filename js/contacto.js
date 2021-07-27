
function comenzar(){

    document.form_contact.addEventListener("invalid", validar, true);

    document.getElementById("Enviar").addEventListener("click", enviar, false);

    document.form_contact.addEventListener("input", validar_tiempo_real, false);

}

function validar(e){

    var elemento=e.target;

    elemento.style.background="#ffdddd";

}

function enviar() {

    var correcto=document.form_contact.checkValidity();
    
    if(correcto==true){
        document.form_contact.submit();
    }

}

function validar_tiempo_real(e){

    var elemento=e.target;

    if(elemento.validity.valid==true){

        elemento.style.background="#FFFFFF";

    }else{

        elemento.style.background="#FFDDDD";

    }
}

window.addEventListener("load", comenzar, false);


