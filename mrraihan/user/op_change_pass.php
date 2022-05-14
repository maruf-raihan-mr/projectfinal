<?php

include "../auth.php";



$op=$_POST['o_pass'];
$newp=$_POST['n_pass'];
$newp2=$_POST['n_pass2'];

if(empty($op)){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}
if(empty($newp)){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}
if(empty($newp2)){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}

if($newp!=$newp2){
    echo "<script>window.location = './profile.php?log=error'</script>";
    exit();
}

$sql = "SELECT * FROM user where email='". $_SESSION['email'] ."';";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);


if($row['password']==md5($op)){
    $sql = "UPDATE user SET password='".md5($newp)."' where email='". $_SESSION['email'] ."';";
    $result=mysqli_query($conn,$sql);   
    echo "<script>window.location = './profile.php?log=success'</script>";
}
else{
    echo "<script>window.location = 'login.php'</script>";
}

?>