<?php
include './headers.php';
if ($globalIdirole != 2) {
    include './menu_normal.php';
} else {
    include './menu_gerencial.php';
}
include './footer.php';
?>

<script src="asset/js/menuCharts.js"></script>