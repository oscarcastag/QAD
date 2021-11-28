<?php

//error_reporting(0);
$errorMSG = "";
//Nombre
if (empty($_POST["usuario"])) {
    $errorMSG .= "usuario is required ";
} else {
    $usuario = $_POST["usuario"];
}
//Nombre
if (empty($_POST["Password"])) {
    $errorMSG .= "Password is required ";
} else {
    $Password = $_POST["Password"];
}

if ($errorMSG == "") {
    include '../dataConect/conexion.php';
    //$sql = "SELECT * FROM user where user = '" . $usuario . "' and password = '" . $Password . "'";
    $sql = "SELECT Nombre, apellido_paterno, apellido_materno, idiuser, idirole , email , nombre FROM user where estatus='Activo' and user = '" . xss($usuario) . "' and password = '" . xss($Password) . "'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        // output data of each row
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1000000 * 1000000);
        while ($row = $result->fetch_assoc()) {
            $_SESSION['idiuser'] = $row["idiuser"];
            $_SESSION['idirole'] = $row["idirole"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['nombre'] = $row["Nombre"] . ' ' . $row["apellido_paterno"] . ' ' . $row["apellido_materno"];
        }
        print_r("success");
    } else {
        print_r("Datos Incorrectos");
    }
    $conn->close();
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

function xss($data) {
    $data = htmlspecialchars(addslashes(stripslashes(strip_tags(trim($data)))));
    return $data;
}
