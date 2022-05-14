<?php
    include "../auth.php";


    $user=$_POST['username'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $occu=$_POST['occu'];

    

    if(empty($user)||empty($phone)||empty($address)||empty($occu)){
        echo "<script>window.location = './profile.php?error'</script>";
        exit();
    }
  

    $sql = "UPDATE user SET username='$user', phone='$phone', address='$address', occupation='$occu' where email='". $_SESSION['email'] ."';";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    $_SESSION['username']=$user;
    echo "<script>window.location = './profile.php'</script>";


?>