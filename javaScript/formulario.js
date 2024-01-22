// formulario.js

function confirmSubmit() {
    // Mostrar un cuadro de confirmación antes de enviar el formulario
    var confirmacion = confirm("¿Desea generar un nuevo formulario?");
    
    // Devuelve true si el usuario elige "Aceptar" y false si elige "Cancelar"
    return confirmacion;
}

function generarNuevoFormulario() {
    // Obtener el formulario
    var formulario = document.querySelector('form');

    // Resetea el formulario para generar uno nuevo
    formulario.reset();
}
