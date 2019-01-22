<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>¿How to use?</h2>
  <p>The Api provides information of the users</p>
  <p>[id, name, mail, image], and can be consulted as follows</p>
  <p>1) To consult registered users, you must enter the following url <code class="text-danger">http://localhost:8080/Api/backend</code><p>
    <div class="form-group">
      <textarea class="form-control" rows="5" id="comment" name="text">
      {
      "id":"1",
      "name":"carlos",
      "mail":"carlos@gmail.com",
      "image":"..\images\html5.png"
      },
      {
      "id":"2",
      "name":"manuel",
      "mail":"manuel@gmail.com",
      "image":"..\images\html5.png"
      }
      </textarea>
    </div>
</div>
<br>
<div class="container">
  <h2>Consult user by name</h2>
  <p>2) Bring the user by the entered name <code class="text-danger">http://localhost:8080/Api/backend/{name}</code><p>
    <div class="form-group">
      <textarea class="form-control" rows="5" id="comment" name="text">
      {
      "id":"1",
      "name":"carlos",
      "mail":"carlos@gmail.com",
      "image":"..\images\html5.png"
      }
      </textarea>
    </div>
</div>

<div class="container">
  <h2>Consume api</h2>
  <p>3) Consume api with json <p>
    <div class="form-group">
      <textarea class="form-control" rows="5" id="comment" name="text">     $.ajax({
     url: 'http://localhost/Api/backend/tableAll.php',
     dataType: 'json',
     success: function(data) {
     }
    });
      </textarea>
    </div>
</div>
<div class="trans text-center"> 
<a href='tableUser.php'><button type="button" class="btn btn-info">Enter API</button></a>
</div>
</body>
</html>