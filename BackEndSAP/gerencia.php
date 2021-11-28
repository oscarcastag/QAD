<?php

$idiuser = $globalIdiUsurio;
getPermisosFromGerencia($idiuser);
getPermisosAdmision($idiuser);
getPermisosAlumnos($idiuser);
getPermisosServicios($idiuser);
getPermisosProfesores($idiuser);

function getPermisosFromGerencia($idiuser) {
    include './dataConect/conexion.php';
    //$sql = "SELECT role.role, role_as_permiso.idipermiso, permiso.descripcion,permiso.permiso FROM role_as_permiso, role, permiso, user WHERE role_as_permiso.idirole = role.idirole AND role_as_permiso.idipermiso = permiso.idipermiso and role_as_permiso.idirole = user.idirole and user.idiuser =$idiuser";
    $sql = "SELECT role.role, role_as_permiso.idipermiso, permiso.descripcion,permiso.permiso FROM role_as_permiso, role, permiso, user WHERE role_as_permiso.idirole = role.idirole AND role_as_permiso.idipermiso = permiso.idipermiso and role_as_permiso.idirole = user.idirole and user.idiuser = $idiuser and permiso.categoria = 'Gerencia'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo '<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-medall"></i><b>G</b></span>
        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Gerencia</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">';
        while ($row = $result->fetch_assoc()) {
            // echo $row["permiso"];
            echo ' <li class="">
            <a href="' . $row["permiso"] . '">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.default">' . $row["descripcion"] . '</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>';
        }
        echo '    </ul>
</li>';
    } else {
        // echo "0 results";
    }
    $conn->close();
}

function getPermisosAdmision($idiuser) {
    include './dataConect/conexion.php';
    $sql = "SELECT role.role, role_as_permiso.idipermiso, permiso.descripcion,permiso.permiso FROM role_as_permiso, role, permiso, user WHERE role_as_permiso.idirole = role.idirole AND role_as_permiso.idipermiso = permiso.idipermiso and role_as_permiso.idirole = user.idirole and user.idiuser = $idiuser and permiso.categoria = 'Admisión'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo '<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-user"></i><b>A</b></span>
        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Admisión</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">';
        while ($row = $result->fetch_assoc()) {
            // echo $row["permiso"];
            echo ' <li class="">
            <a href="' . $row["permiso"] . '">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.default">' . $row["descripcion"] . '</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>';
        }
        echo '    </ul>
</li>';
    } else {
        // echo "0 results";
    }
    $conn->close();
}

function getPermisosAlumnos($idiuser) {
    include './dataConect/conexion.php';
    $sql = "SELECT role.role, role_as_permiso.idipermiso, permiso.descripcion,permiso.permiso FROM role_as_permiso, role, permiso, user WHERE role_as_permiso.idirole = role.idirole AND role_as_permiso.idipermiso = permiso.idipermiso and role_as_permiso.idirole = user.idirole and user.idiuser = $idiuser and permiso.categoria = 'Alumnos'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo '<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>Al</b></span>
        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Alumnos</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">';
        while ($row = $result->fetch_assoc()) {
            // echo $row["permiso"];
            echo ' <li class="">
            <a href="' . $row["permiso"] . '">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.default">' . $row["descripcion"] . '</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>';
        }
        echo '    </ul>
</li>';
    } else {
        // echo "0 results";
    }
    $conn->close();
}

function getPermisosServicios($idiuser) {
    include './dataConect/conexion.php';
    $sql = "SELECT role.role, role_as_permiso.idipermiso, permiso.descripcion,permiso.permiso FROM role_as_permiso, role, permiso, user WHERE role_as_permiso.idirole = role.idirole AND role_as_permiso.idipermiso = permiso.idipermiso and role_as_permiso.idirole = user.idirole and user.idiuser = $idiuser and permiso.categoria = 'Servicios'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo '<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-money"></i><b>S</b></span>
        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Servicios</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">';
        while ($row = $result->fetch_assoc()) {
            // echo $row["permiso"];
            echo ' <li class="">
            <a href="' . $row["permiso"] . '">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.default">' . $row["descripcion"] . '</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>';
        }
        echo '    </ul>
</li>';
    } else {
        // echo "0 results";
    }
    $conn->close();
}

function getPermisosProfesores($idiuser) {
    include './dataConect/conexion.php';
    $sql = "SELECT role.role, role_as_permiso.idipermiso, permiso.descripcion,permiso.permiso FROM role_as_permiso, role, permiso, user WHERE role_as_permiso.idirole = role.idirole AND role_as_permiso.idipermiso = permiso.idipermiso and role_as_permiso.idirole = user.idirole and user.idiuser = $idiuser and permiso.categoria = 'Profesores'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo '<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="ti-ruler-pencil"></i><b>P</b></span>
        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Profesores</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">';
        while ($row = $result->fetch_assoc()) {
            // echo $row["permiso"];
            echo ' <li class="">
            <a href="' . $row["permiso"] . '">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.default">' . $row["descripcion"] . '</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>';
        }
        echo '    </ul>
</li>';
    } else {
        // echo "0 results";
    }
    $conn->close();
}
?>



