<?php
//Header transform file php to JSON format
header('Content-Type: application/json');
//Access to external users
header('Access-Control-Allow-Origin: *');

include 'bd.php';

if(empty(($_GET['variable']))){

    $sql = 'SELECT * FROM `t_user`';
    $result = $pdo->prepare($sql);
    $result->execute();
    $dates = $result->fetchAll(PDO::FETCH_OBJ);

    }else{    
    
    $nadaUser = ($_GET['variable']);

    $sql = 'SELECT * FROM `t_user` WHERE `name`='.'"'.$nadaUser.'"'.'';
    
    $result = $pdo->prepare($sql);
    $result->execute();
    $dates = $result->fetchAll(PDO::FETCH_OBJ);
    }


if(empty($dates)){
   echo "No results found";
}else{
    echo json_encode($dates);
}





?>