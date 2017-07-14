<?php

$pdo=new PDO('mysql:host=127.0.0.1;dbname=mvc;charset=UTF8;','root','root');
$tables=array(
    'pessoa'=>new Table($pdo,"pessoa"),
    'carro'=>new Table($pdo,"carro")
);

