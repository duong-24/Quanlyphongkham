<?php 
    ob_start();
    $action=$_GET['action'];
    include '../db/dbhelp.php';
    $crud= new Action();
    if($action=='login'){
        $login=$crud->login();
        if($login)
            echo $login;
    }
    if($action=='logout'){
        $logout=$crud->logout();
        if($logout)
            echo $logout;
    }
?>