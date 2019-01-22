<?php


    include 'bd.php';
    $sql = 'SELECT * FROM `t_user`';
    $result = $pdo->prepare($sql);
    $result->execute();
    $dates = $result->fetchAll();
    
  
    if(empty($dates)){
        echo "No data found";
    }else{
    echo json_encode($dates);
    }

?>