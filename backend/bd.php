<?php
$link = 'mysql:host=localhost;dbname=api';
$usr = 'root';
$pass = '';

try{

    $pdo = new PDO($link,$usr,$pass);
    
//echo 'connect successfully';

}catch(PDOExeption $e){
    print "Error: " . $e->getMessage() . "<br/>";
    die();
}