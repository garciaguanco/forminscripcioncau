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


/ Obtener datos del formulario (asegúrate de que los nombres coincidan con los atributos 'name' de tus campos en el formulario)
$categoria = $_POST['categoria'];
// Agrega el resto de los campos aquí...

// Query para insertar datos en la base de datos
$sql = "INSERT INTO tu_tabla (categoria, apellidos, nombres, lugar_nacimiento, fecha_nacimiento, cedula_identidad, domicilio, numero_puerta, apto, barrio, asistencia_medica, enfermedades, medicacion, vencimientos, aptitud_fisica, otra_actividad, cual_otra_actividad, horarios_otra_actividad, madre_tutor_apellidos, madre_tutor_nombres, madre_tutor_lugar_nacimiento, madre_tutor_fecha_nacimiento, madre_tutor_cedula_identidad, madre_tutor_domicilio, madre_tutor_numero_puerta, madre_tutor_apto, madre_tutor_telefono, madre_tutor_email, padre_apellidos, padre_nombres, padre_lugar_nacimiento, padre_fecha_nacimiento, padre_cedula_identidad, padre_domicilio, padre_numero_puerta, padre_apto, telefono_contacto, email, autorizacion, documento_identidad, certificado_aptitud_fisica, firma_padres, aclaracion)
VALUES ('$categoria', '$apellidos', '$nombres', '$lugar_nacimiento', '$fecha_nacimiento', '$cedula_identidad', '$domicilio', '$numero_puerta', '$apto', '$barrio', '$asistencia_medica', '$enfermedades', '$medicacion', '$vencimientos', '$aptitud_fisica', '$otra_actividad', '$cual_otra_actividad', '$horarios_otra_actividad', '$madre_tutor_apellidos', '$madre_tutor_nombres', '$madre_tutor_lugar_nacimiento', '$madre_tutor_fecha_nacimiento', '$madre_tutor_cedula_identidad', '$madre_tutor_domicilio', '$madre_tutor_numero_puerta', '$madre_tutor_apto', '$madre_tutor_telefono', '$madre_tutor_email', '$padre_apellidos', '$padre_nombres', '$padre_lugar_nacimiento', '$padre_fecha_nacimiento', '$padre_cedula_identidad', '$padre_domicilio', '$padre_numero_puerta', '$padre_apto', '$telefono_contacto', '$email', '$autorizacion', '$documento_identidad', '$certificado_aptitud_fisica', '$firma_padres', '$aclaracion')";

// Verificar si la consulta fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();

?>



