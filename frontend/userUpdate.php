<?php 


//print_r($_POST);
$Id = $_POST['Id'];
$name = $_POST['name'];
$email = $_POST['email'];
$imagenes = $_FILES['image']['name'];//name image
$image = $_FILES['image']['tmp_name'];//file
$route = '../images'.'/'.$imagenes;


move_uploaded_file($image, $route);

include_once '../backend/bd.php';
$sql = "UPDATE `t_user` SET `name`='$name', `mail`='$email', `image`='$route' WHERE `id`='$Id'";

$result = $pdo->prepare($sql);
$result->execute();
?>

<script>
alert('Successfully updated user')
window.location.href='tableUser.php';
</script>