<?php
    require_once("c://xampp/htdocs/proyecto/controller/epsController.php");
    $obj = new epsController();
    $obj->update($_POST['id'],$_POST['nombre']);

?>