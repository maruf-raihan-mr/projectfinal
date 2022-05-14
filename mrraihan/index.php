<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS</title>
    <link rel="shortcut icon" href="images/team.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/test.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">


</head>

<body>
    <div class="dtime">
        <p>Date: <span id="datetime"></span></p>
    </div>




    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./images/tms.png" alt="Trash Management System" width="25" height="27" class="d-inline-block align-text-top">
                TMS
            </a>
            <ul class="navbar-nav m-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="load.php">COVERAGE AREA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="load.php">PACKAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="load.php">PAY BILL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="load.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">REGISTRATION</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Carousel-->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1500">
                <img src="images/1.jpg" style="height:500px ;" class="d-block w-100 " alt="TMS">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1500">
                <img src="images/3.jpg" style="height:500px ;" class="d-block w-100 " alt="404 ERROR!">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" style="height:500px ;" class="d-block w-100 " alt="404 ERROR!">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END Carousel-->

    <div class="services">

        <h3 class="ser"> &nbsp;Our Services</h3>
    </div>
    <hr>
    <div class="container m-auto">

        <div class="row" style="margin-left:80px ;">
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="./images/id.jpg" style="height:200px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Business Waste </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="load.php" class="btn btn-primary">Pickup</a>
                    </div>
                </div>


            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="./images/rd.jpg" style="height:200px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Residential Waste</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="load.php" class="btn btn-primary">Pickup</a>
                    </div>
                </div>


            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="./images/1-rule.png" style="height:200px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Recycle</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="recycle.php" class="btn btn-primary">Click</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <hr>



    <div class="row1">
        <div class="row">

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/laptop.svg" style="height:50px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pay Bill Online</h5>

                        <a href="load.php" class="btn btn-info">PayBill</a>
                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/phone-billing.svg" style="height:50px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paperless Bill</h5>

                        <a href="load.php" class="btn btn-info">Paperless Bill</a>
                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/automatic-payment.svg" style="height:50px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enroll in Autopay</h5>

                        <a href="load.php" class="btn btn-info">Autopay</a>
                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/calendar-schedule.svg" style="height:50px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pickup Schedules</h5>

                        <a href="load.php" class="btn btn-info">Schedules</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>


    <div class="recycle">
        <h2 class="re">Recycling

        </h2>

        <h5 class="re1">Recycling is the process of converting waste materials into new materials and objects. The recyclability of a
            material depends on its ability to reacquire the properties it had in its original state. It can also prevent
            the waste of potentially useful materials and reduce the consumption of fresh raw materials, reducing energy use, air pollution and water pollution...
        </h5>


    </div>


    <hr>
    <h3 class="rules">Three Basic Rules:</h3>
    <div class="container m-auto">

        <div class="row" style="margin-left:80px ;">
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="./images/1-rule.png" style="height:200px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="font-size:30px ;" class="card-title">Rule-1: </h5>
                        <p class="card-text">Recycle bottles, cans, paper and cardboard.</p>

                    </div>
                </div>


            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="./images/2-rule.png" style="height:200px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="font-size:30px ;" class="card-title">Rule-2:</h5>
                        <p class="card-text">Keep food and liquid out of your recycling.</p>

                    </div>
                </div>


            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="./images/3-rule.png" style="height:200px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="font-size:30px ;" class="card-title">Rule-3:</h5>
                        <p class="card-text">No loose plastic bags and no bagged recyclables.</p>

                    </div>
                </div>


            </div>
        </div>
        <a href="recycle.php"><button type="button" class="btn btn-dark">MORE</button></a>
    </div>

    

    <hr>



    <div class="row1">
        <h3 class="rules">Accepted For Recycle:</h3>
        <div class="row">

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/plastic.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Bottles & Containers</h5>


                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/food.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food & Beverage Cans</h5>


                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/paper.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paper</h5>


                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/cardboard.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Flattened Cardboard & Paperboard</h5>


                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/beve.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Food & Beverage Containers</h5>


                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/btl.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Glass Bottles & Containers</h5>


                    </div>
                </div>
            </div>

        </div>
    </div>


    <hr>

    <div class="row1">
        <h3 class="rules">Not Accepted For Recycle:</h3>
        <div class="row">

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/bag.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">No Bagged Recyclables</h5>


                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/plas.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">No Plastic Bags</h5>


                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/rap.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">No Plastic Wrap & Film</h5>


                    </div>
                </div>
            </div>

            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/no.png" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">No Flexible Packaging</h5>


                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/cup.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">No Cups with Wax or Plastic Coatings</h5>


                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card" style="width: 13rem;">
                    <img src="./images/poly.jpg" style="height:80px ;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">No Polystyrene Foam & Plastic</h5>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>
    <!--Contact form code-->

    <div class="container">
        <h3 class="complain">Complain Box</h3>
        <form action="index.php">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First Name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last Name">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="bangladesh">Bangladesh</option>

            </select>

            <label for="subject">Complain</label>
            <textarea id="subject" name="subject" placeholder="Write Your Complain here.." style="height:200px"></textarea>
            <a href="load.php" class="btn btn-success">Submit</a>
     

        </form>
    </div>
    <hr>
    <footer>
        <div class="team">
            <h3 class="teamm">Made with <span class="sp">&#10084;</span> by <a href="redirect.php">Fusion-0.2 </a> </h3>
            <p>Copyright ©2022 &nbsp; <a href="mailto:mraihan201196@bscse.uiu.ac.bd">Fusion-0.2 </a> .&nbspAll Rights
                Reserved.</p>
        </div>

    </footer>












    <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>