<?php
    session_start();    
    require "Controller/Usuario.php";
    $login = new Usuario();
    $login->checkLogin();
?>