<?php

require_once('framework/model.php');
require_once('model.php');
require_once('controller.php');

session_start();

$controller="index";

if(isset($_GET['c'])){
    $controller=$_GET['c'];
}

$flash=null;
if(isset($_SESSION['flash'])){
    $flash=$_SESSION['flash'];
    unset($_SESSION['flash']);
}

$data=call_user_func($controller);

if(@$_GET['f']=='json'){
    header('Content-type: text/json');
    echo json_encode($data);
}else{
    include('view/layout.php');
}

