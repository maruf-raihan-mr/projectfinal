<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "tms";

$conn = mysqli_connect($server, $username, $password, $database);

if (isset($_POST['submit'])) {
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $rpassword = md5($_POST['rpassword']);
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $occupation = $_POST['occupation'];


  $cu = "SELECt * from user where email='$email'";
  $result = mysqli_query($conn, $cu);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
?>
    <script>
      alert("Data already existed");
    </script>
    <?php
  } else {


    $sql = "INSERT INTO `user` ( `username`, `email`, `password`, `rpassword`, `phone`, `address`, `gender`, `occupation`) VALUES ('$name', '$email', '$password', '$rpassword', '$phone', '$address', '$gender', '$occupation')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
    ?>
      <script>
        alert("Data Inserted Successfully");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Data Not Inserted");
      </script>

<?php
    }
  }
}











?>

















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="shortcut icon" href="images/team.png">
  <link rel="stylesheet" href="./css/signup.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">

</head>

<body>

  <form action="signup.php" method="POST">
    <div class="container">
      <h1 class="reg">Register</h1>
      <p>* Please fill in this form to create an account.</p>
      <hr>

      <label for="username"><b>Username*</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="email"><b>Email*</b></label>
      <input type="email" class="email" style=" width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  
  
  
  
  

  
  " placeholder="Email" name="email" id="email" required>


      <!--<div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>-->

      <label for="password"><b>Password*</b></label>
      <input type="password" placeholder="Enter Password&nbsp;(minimum 8 character)" name="password" id="password" required>

      <label for="rpassword"><b>Repeat Password*</b></label>
      <input type="password" placeholder="Repeat Password" name="rpassword" id="rpassword" required>

      <label for="phone"><b>Phone*</b></label>
      <input type="text" placeholder="Enter Phone" name="phone" id="phone" required>

      <label for="address"><b>Address*</b></label>
      <input type="text" placeholder="Enter Address" name="address" id="address" required>

      <label for="gender"><b>Gender*</b></label>
      <input type="text" placeholder="Enter Gender" name="gender" id="gender" required>


      <label for="occupation"><b>Occupation*</b></label>
      <input type="text" placeholder="Enter Occupation" name="occupation" id="occupation" required>


      <hr>

      <p>By creating an account you agree to our <a href="tc.php">Terms & Privacy</a>.</p>
      <button type="submit" name="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a class="sup" href="login.php">Sign in</a>.</p>
    </div>
  </form>


</body>

</html>