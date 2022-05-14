<?php
session_start();
if(isset($_SESSION['email']))
{
  header("location: ../user/index2.php");
}

$server = "localhost";
$username = "root";
$password = "";
$database = "tms";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submit'])){


  $email = $_POST['email'];
  $password=md5($_POST['password']);
  $query="select * from user where email='$email' and password = '$password'";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    $query2="select username from user where email='$email' and password = '$password'";
    $result2=mysqli_query($conn,$query2);
    $row=mysqli_fetch_assoc($result2);
    $_SESSION['email'] = $email;
    $_SESSION['username']=$row['username'];
    
    header("Location: ./user/index2.php");
  }
  else{
    header("Location: login.php");
        }
    
  }


mysqli_close($conn);
?>
