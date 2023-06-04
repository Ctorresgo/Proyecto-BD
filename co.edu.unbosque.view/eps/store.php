<?php
    require_once("c://xampp/htdocs/proyecto/controller/epsController.php");
    $obj = new epsController();
    $obj->guardar($_POST['nombre']);
?>