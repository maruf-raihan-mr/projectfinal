<?php

session_start();
if(!isset($_SESSION['email']))
{
  header("location:login.php");
}




include('auth.php');

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $complaint = $_POST['complaint'];
    
    $sql = "INSERT INTO `complaint` ( `first_name`, `last_name`, `email`, `country`, `complaint`) VALUES ('$first_name', '$last_name', '$email', '$country', '$complaint')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
    ?>
      <script>
        alert("Data Inserted Successfully");
      
      </script>
      echo "<script>top.window.location = './user/index2.php'</script>";
    <?php
    } else {
    ?>
      <script>
        alert("Data Not Inserted");
      </script>

<?php
    }

}

?>