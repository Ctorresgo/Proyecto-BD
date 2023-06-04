<?php
    require_once("c://xampp/htdocs/proyecto/controller/epsController.php");
    $obj = new epsController();
    $obj->delete($_GET['id']);

?>