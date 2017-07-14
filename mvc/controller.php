<?php

$t="pessoa";
if(isset($_GET['t'])){
    $t=$_GET['t'];
}

function index(){
    global $tables,$t;
    $dados=$tables[$t]->getall();
    return array('t'=>$t,'dados'=>$dados);
}

function pessoa(){
    global $tables,$t;
    if(isset($_POST['nome'])){
        if(isset($_GET['id'])){
            $_POST['id']=$_GET['id'];
        }
        $tables[$t]->save($_POST);
        $_SESSION['flash']="Salvo com sucesso.";
        header("Location: ../?t=$t");
        die('');
    }
    if(isset($_GET['id'])){
        $dado=$tables[$t]->getone($_GET['id']);
        return array('t'=>$t,'dado'=>$dado);
    }else{
        return array('t'=>$t,'dado'=>array());
    }
}

function excluir(){
    global $tables,$t;
    $tables[$t]->delete($_GET['id']);
    $_SESSION['flash']="Excluído com sucesso.";
    header("Location: ../?t=$t");
    die('');
}


