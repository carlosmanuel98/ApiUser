<?php

$ID = $_GET['ID'];


include_once 'bd.php';

$sql = 'DELETE FROM `t_user` WHERE `ID`='.$ID.'';
$result = $pdo->prepare($sql);
$result->execute();
$dates = $result->fetchAll();

?>

<script>
alert('User Deleted')
window.location.href='http://localhost:8080/Api/frontend/tableUser.php';
</script>