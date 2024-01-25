<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formcau2024";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario (asegúrate de que los nombres coincidan con los atributos 'name' de tus campos en el formulario)
$categoria = $_POST['categoria'];
$apellidos = $_POST['apellidos'];
$nombres = $_POST['nombres'];
$lugar_nacimiento = $_POST['lugar_nacimiento'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$cedula_identidad = $_POST['cedula_identidad'];
$domicilio = $_POST['domicilio'];
$numero_puerta = $_POST['numero_puerta'];
$apto = isset($_POST['apto']) ? $_POST['apto'] : null;
$barrio = isset($_POST['barrio']) ? $_POST['barrio'] : null;
$asistencia_medica = isset($_POST['asistencia_medica']) ? $_POST['asistencia_medica'] : null;
$enfermedades = isset($_POST['enfermedades']) ? $_POST['enfermedades'] : null;
$medicacion = isset($_POST['medicacion']) ? $_POST['medicacion'] : null;
$vencimientos = isset($_POST['vencimientos']) ? $_POST['vencimientos'] : null;
$aptitud_fisica = isset($_POST['aptitud_fisica']) ? $_POST['aptitud_fisica'] : null;
$otra_actividad = isset($_POST['otra_actividad']) ? $_POST['otra_actividad'] : null;
$cual_otra_actividad = isset($_POST['cual_otra_actividad']) ? $_POST['cual_otra_actividad'] : null;
$horarios_otra_actividad = isset($_POST['horarios_otra_actividad']) ? $_POST['horarios_otra_actividad'] : null;
$madre_tutor_apellidos = $_POST['madre_tutor_apellidos'];
$madre_tutor_nombres = $_POST['madre_tutor_nombres'];
$madre_tutor_lugar_nacimiento = $_POST['madre_tutor_lugar_nacimiento'];
$madre_tutor_fecha_nacimiento = $_POST['madre_tutor_fecha_nacimiento'];
$madre_tutor_cedula_identidad = $_POST['madre_tutor_cedula_identidad'];
$madre_tutor_domicilio = $_POST['madre_tutor_domicilio'];
$madre_tutor_numero_puerta = $_POST['madre_tutor_numero_puerta'];
$madre_tutor_apto = isset($_POST['madre_tutor_apto']) ? $_POST['madre_tutor_apto'] : null;
$madre_tutor_telefono = $_POST['madre_tutor_telefono'];
$madre_tutor_email = $_POST['madre_tutor_email'];
$padre_apellidos = isset($_POST['padre_apellidos']) ? $_POST['padre_apellidos'] : null;
$padre_nombres = isset($_POST['padre_nombres']) ? $_POST['padre_nombres'] : null;
$padre_lugar_nacimiento = isset($_POST['padre_lugar_nacimiento']) ? $_POST['padre_lugar_nacimiento'] : null;
$padre_fecha_nacimiento = isset($_POST['padre_fecha_nacimiento']) ? $_POST['padre_fecha_nacimiento'] : null;
$padre_cedula_identidad = isset($_POST['padre_cedula_identidad']) ? $_POST['padre_cedula_identidad'] : null;
$padre_domicilio = isset($_POST['padre_domicilio']) ? $_POST['padre_domicilio'] : null;
$padre_numero_puerta = isset($_POST['padre_numero_puerta']) ? $_POST['padre_numero_puerta'] : null;
$padre_apto = isset($_POST['padre_apto']) ? $_POST['padre_apto'] : null;
$telefono_contacto = isset($_POST['telefono_contacto']) ? $_POST['telefono_contacto'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$autorizacion = $_POST['autorizacion'];
$documento_identidad = isset($_POST['documento_identidad']) ? $_POST['documento_identidad'] : null;
$certificado_aptitud_fisica = isset($_POST['certificado_aptitud_fisica']) ? $_POST['certificado_aptitud_fisica'] : null;
$firma_padres = $_POST['firma_padres'];
$aclaracion = $_POST['aclaracion'];


/ Obtener datos del formulario (asegúrate de que los nombres coincidan con los atributos 'name' de tus campos en el formulario)
$categoria = $_POST['categoria'];


// Query para insertar datos en la base de datos
$sql = "INSERT INTO tu_tabla (categoria, apellidos, nombres, lugar_nacimiento, fecha_nacimiento, cedula_identidad, domicilio, numero_puerta, apto, barrio, asistencia_medica, enfermedades, medicacion, vencimientos, aptitud_fisica, otra_actividad, cual_otra_actividad, horarios_otra_actividad, madre_tutor_apellidos, madre_tutor_nombres, madre_tutor_lugar_nacimiento, madre_tutor_fecha_nacimiento, madre_tutor_cedula_identidad, madre_tutor_domicilio, madre_tutor_numero_puerta, madre_tutor_apto, madre_tutor_telefono, madre_tutor_email, padre_apellidos, padre_nombres, padre_lugar_nacimiento, padre_fecha_nacimiento, padre_cedula_identidad, padre_domicilio, padre_numero_puerta, padre_apto, telefono_contacto, email, autorizacion, documento_identidad, certificado_aptitud_fisica, firma_padres, aclaracion)
VALUES ('$categoria', '$apellidos', '$nombres', '$lugar_nacimiento', '$fecha_nacimiento', '$cedula_identidad', '$domicilio', '$numero_puerta', '$apto', '$barrio', '$asistencia_medica', '$enfermedades', '$medicacion', '$vencimientos', '$aptitud_fisica', '$otra_actividad', '$cual_otra_actividad', '$horarios_otra_actividad', '$madre_tutor_apellidos', '$madre_tutor_nombres', '$madre_tutor_lugar_nacimiento', '$madre_tutor_fecha_nacimiento', '$madre_tutor_cedula_identidad', '$madre_tutor_domicilio', '$madre_tutor_numero_puerta', '$madre_tutor_apto', '$madre_tutor_telefono', '$madre_tutor_email', '$padre_apellidos', '$padre_nombres', '$padre_lugar_nacimiento', '$padre_fecha_nacimiento', '$padre_cedula_identidad', '$padre_domicilio', '$padre_numero_puerta', '$padre_apto', '$telefono_contacto', '$email', '$autorizacion', '$documento_identidad', '$certificado_aptitud_fisica', '$firma_padres', '$aclaracion')";

// Verificar si los datos están presentes en el array $_POST
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;


// Después de procesar el formulario y realizar las operaciones necesarias
header("Location: nueva_pagina.php");

// Verificar si la consulta fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    // Error en las operaciones
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>






