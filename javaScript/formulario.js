// formulario.js

function imprimirPagina() {
    window.print();
}

function confirmSubmit() {
    // Agrega la lógica de confirmación que desees.
    var confirmacion = confirm("¿Estás seguro de enviar el formulario?");
    
    // Devuelve true si el usuario hace clic en "Aceptar" y false si hace clic en "Cancelar".
    return confirmacion;

    
}

