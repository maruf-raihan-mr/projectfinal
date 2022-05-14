<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/team.png">
</head>
<body>


  <form class="formm" action="authentication.php" method="POST" >
 
    <div class="name">
      <h3 class="p">Login</h3>
      <hr>
    </div>
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-4">
     <label for="exampleInputPassword1" class="form-label">Password (8 characters minimum) </label>
      <input type="password" class="form-control" id="password" name="password" minlength="8" required >
    
    
      
  </div>

    </div>
   
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
    <button style="margin-left:150px ;" class="btn btn-danger" name="back" ><a style="text-decoration:none ; color:white;" href="index.php">Back</a> </button>
    <h4 class="new">New Here? <a class="pp" href="signup.php">Registration</a> </h4>
  </form>
  
</body>
</html>