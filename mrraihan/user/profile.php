<?php
include "../auth.php";
if(!isset($_SESSION['email']))
{
  header("location:../login.php");
}

$query="select * from user where email='".$_SESSION['email']."'";
$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);







?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS --> 
    <title>Dashboard(TMS)</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="shortcut icon" href="../images/team.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
  <div class="wrapper">
        <div class="sidebar">
            <h2><i class="fas fa-home" ></i>&nbsp;<span style="font-size:20px">Dashboard</span></h2>
            <ul style="padding-left: 0rem">
                <li><a style="text-decoration: none;" href="../user/index2.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a style="text-decoration: none;" href="../user/profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a style="text-decoration: none;" href="#"><i class="fas fa-address-card"></i>PayBill</a></li>
                <li><a style="text-decoration: none;" href="../areainfo.php"><i class="fas fa-project-diagram"></i>Area Info</a></li>
                
                <li><a style="text-decoration: none;" href="../contact.php"><i class="fas fa-address-book"></i>Complaint</a></li>
                <li><a style="text-decoration: none;" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="../team.php"><i class="fab fa-facebook-f"></i></a>
                <a href="../team.php"><i class="fab fa-twitter"></i></a>
                <a href="../team.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header"><b>Hey <?php echo ($_SESSION['username']); ?>, &nbsp;Have a Nice Day &#128513; </b></div>


        </div>

    </div>
    


    <div class="container my-5 text-center d-float">
        <div class="container" style="margin-left: 150px";>
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="../images/team.png" alt="User"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?php echo $_SESSION['username']; ?></h4><hr>
                            
                                        <p class="text-secondary mb-1"><?php echo $row['occupation'] ?></p>
                                        <hr>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Username</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                       <?php echo $row['username'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Email</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['email'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Phone</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['phone'] ?>
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Address</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['address'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Occupation</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['occupation'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info" href="edit_profile.php">Edit Profile</a>
                                        <a class="btn btn-warning" href="change_pass.php">Change Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>



    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  
  </body>
</html>


