<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            
        }

        .nav-link {
            color: green;
            font-family: 'Tapestry', cursive;
        }

        .nav-link:hover {
            color: rgb(16, 17, 17);
        }

        .d-block {
            height: 600px;

        }

        body {
            margin-left: 10%;
            margin-right: 10%;
           box-shadow: 2px 13px 13px 5px rgb(176, 174, 174);
        }

        .recycle {
            height: 200px;
            width: 100%;
            background-color: #024731;

        }

        .rec {
            color: aliceblue;
            font-size: 50px;
            margin-left: 38%;
            padding-top: 40px;
            font-family: 'Tapestry', cursive;
        }

        .re {
            font-family: 'Tapestry', cursive;
            color: white;
            font-size: 20px;
            margin-left: 30px;
        }

        .row {
            margin-top: 50px;
            margin-left: 150px;
        }

        .rule1 {
            color: #024731;
            font-size: 30px;

        }

        p {
            font-size: 20px;
        }

        .basic {
            color: rgb(14, 77, 14);
            font-family: 'Tapestry', cursive;
            font-size: 40px;
            margin-top: 30px;
            margin-left: 450px;
        }

        .vid {
            margin-top: 100px;
            margin-left: 150px;

        }

        footer {
            height: 35px;
            width: 100%;
            background-color: #1b201f;
        }

        footer p {
            color: white;
            margin-left: 450px;
            font-family: 'Tapestry', cursive;
        }

        footer p a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="" width="30" height="26" class="d-inline-block align-text-top">
                <b>&nbsp&nbspTMS</b>
            </a>


            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Coverage Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Pay Bill</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="recycle">
        <h2 class="rec">
            Recycling
        </h2>
        <h4 class="re">
            If you're wondering what is recycling or how to recycle properly, check below to learn everything from
            recycling basics to expert tips.
        </h4>
    </div>
    <h3 class="basic">
        Three Basic Rules
    </h3>

    <div class="row">
        <div class="card" style="width: 20rem;">
            <img src="images/1-rule.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="rule1">Rule 1*:</h6>
                <p class="card-text">Recycle bottles, cans, paper and cardboard.</p>
            </div>
        </div>


        <div class="card" style="width: 20rem;">
            <img src="images/2-rule.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="rule1">Rule 2*:</h6>
                <p class="card-text">Keep food and liquid out of your recycling.</p>
            </div>
        </div>


        <div class="card" style="width: 20rem;">
            <img src="images/3-rule.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="rule1">Rule 3*:</h6>
                <p class="card-text">No loose plastic bags and no bagged recyclables.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="vid"> <iframe width="996" height="560" src="https://www.youtube.com/embed/VQTtg3KgVv4"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <hr>

    <footer>
        <p>Copyright ©2022 &nbsp; <a href="team.php">Fusion-0.2 </a> .&nbspAll Rights
            Reserved.</p>

    </footer>

</body>

</html>