


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area Info</title>
  <link rel="shortcut icon" href="./images/area.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/area.css">
</head>
<body>

<div class="dtime">
        <p>Date: <span id="datetime"></span></p>
    </div>

    <!--Nav Bar bootstrap v5-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./images/tms.png" alt="Trash Management System" width="25" height="27" class="d-inline-block align-text-top">
                TMS
            </a>
            <ul class="navbar-nav m-auto">

                <li class="nav-item">
                    <a class="nav-link" href="./user/index2.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">COVERAGE AREA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">PACKAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PAY BILL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">LOGOUT</a>
                </li>
                
            </ul>
        </div>
    </nav>




        <!--table-->



<table class="table my-5  table-dark table-striped">



  <thead>
    <tr>
      <th scope="col">Area ID</th>
      <th scope="col">Area</th>
      <th scope="col">Postal Code</th>
      
    </tr>
  </thead>
  <tbody>
  

  
  <?php
include('auth.php');



$selectquery = "select * from area";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){
?>

<tr>

<td><?php echo $res['area_id']; ?></td>
<td><?php echo $res['area_name']; ?></td>
<td><?php echo $res['postal_code']; ?></td>
</tr>

<?php

}

?>
  
  
  </tbody>
</table>

<!--js for date-->

<script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

