<?php

$ID=($_GET['ID']);

include_once '../backend/bd.php';
$sql = 'SELECT * FROM `t_user` WHERE `ID`='.$ID.'';
$result = $pdo->prepare($sql);
$result->execute();
$datos = $result->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>

  
<div class="container">
<br>
  <h2>Form Update</h2>
  <form action="userUpdate.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <input type="text" class="form-control" id="Id"  name="Id" value="<?php echo $ID;?>" hidden>

      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control-file" id="image" name="image" required>
    </div>
    <a href='tableUser.php'><button type="button" class="btn btn-secondary">Previous</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
