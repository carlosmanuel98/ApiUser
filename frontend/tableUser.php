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
<title>Table User</title>
</head>
<body>
        <div class="container">
                <h2>Profile User Basic</h2>
                <p>API Profile User</p>
                <p><a href='index.php'><button type="button" class="btn btn-outline-info">Home</button></a></p>
                <table class="table" id="dates">
                <thead class="thead-dark">
                    <tr>
                      <th>Image</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr> 

    <script>
   fetch('http://localhost:8080/Api/backend/tableAll.php')
    .then(dates=>dates.json())
    .then(dates=>{console.log(dates)
      for(let variable of dates){
        //console.log(variable);  	      
      document.getElementById('dates').innerHTML += `
                      <td><img src="${variable.image}" class="img-thumbnail" alt="ImageUser" width="80px"></td>
                      <td id="id">${variable.id}</td>
                      <td>${variable.name}</td>
                      <td>${variable.mail}</td>
                      <td><a href='userEdit.php?ID=${variable.id}'>
                      <button type="button" class="btn btn-light">Edit</button></td>
                     <td><a href='userDelete.php?ID=${variable.id}'><button type="button"class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Delete</button></td>
                     
                    </tr>
                    </tbody>
                </table>              
      `;
      }
     
    })
    
      
</script>
 
</body>
</html>
