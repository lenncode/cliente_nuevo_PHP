<?php

include("config/ConnectionDB.php");
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registroCliente"])) {
    // Conexión a la base de datos (modifica los detalles según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "terceriza";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Recupera los valores del formulario
    $telefono = $_POST["numero"];
    $tipoSala = $_POST["tipo_plan_id"];
    $tipoDocumento = $_POST["tipo_documento_id"];
    $numeroDocumento = $_POST["numero_documento"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $nivelUno = $_POST["nivel_1_id"];
    $nivelDos = $_POST["nivel_2_id"];
    $nivelTres = $_POST["nivel_3_id"];
    $nroSn = $_POST["N_SN"];
    $activacionInmediata = $_POST["act_inmediata_id"];
    $observaciones = $_POST["observaciones"];

    // Sentencia SQL para insertar en la tabla clientes
    $sql = "INSERT INTO cliente (telefono, tipo_plan_id, tipo_documento_id, numero_documento, nombres, apellidos, nivel_1_id, nivel_2_id,
                     nivel_3_id, n_sn, act_inmediata_id, observaciones) 
VALUES ('$telefono', '$tipoSala', '$tipoDocumento', '$numeroDocumento', '$nombres', '$apellidos', '$nivelUno', '$nivelDos', '$nivelTres', '$nroSn', '$activacionInmediata', '$observaciones')";

    // Ejecuta la sentencia SQL
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el cliente: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>