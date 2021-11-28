<?php

$errorMSG = "";
//idialumno
if (empty($_POST["idialumno"])) {
    $errorMSG .= "idialumno is required ";
} else {
    $idialumno = $_POST["idialumno"];
}
//archivo
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
    $errorMSG .= "ddd is required ";
} 
//titulo
if (empty($_POST["titulo"])) {
    $errorMSG .= "titulo is required ";
} else {
    $titulo = $_POST["titulo"];
}

if ($errorMSG == "") {
    include './conexion.php';

    // A list of permitted file extensions
    $allowed = array('png', 'jpg', 'gif', 'zip');
    $fileName = uniqid() . '.pdf';
    $archivo = $_FILES["archivo"]["tmp_name"];
    $size = $_FILES["archivo"]["size"];
    $tipo = $_FILES["archivo"]["type"];

    $fp = fopen($archivo, "rb");
    $contenido = fread($fp, $size);
    $contenido = addslashes($contenido);
    fclose($fp);

    $sql = "INSERT INTO archivo (idialumno, nombre, contenido, titulo, tipo) VALUES ('" . $idialumno . "','$fileName','$contenido','$titulo','PDF')";
    //$sql = "INSERT INTO archivo (idialumno, nombre, titulo, tipo) VALUES ('" . $last_id . "','$fileName','perfil','$image_type')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
       
