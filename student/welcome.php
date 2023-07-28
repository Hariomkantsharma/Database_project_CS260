<?php

session_start();

include '../Database.php';

// $roll2 = $_SESSION['roll2'];
// $password2 = $_SESSION['password2'];

error_reporting(E_ERROR | E_PARSE);

$sql = $_SESSION['sql'];
// $_SESSION['sql'] = $sql;



$que = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($que);


$name = $row['Name'];
$roll = $row['Roll_no'];
$email = $row['Email'];
$mobile = $row['Mobile'];
$age = $row['Age'];
$batch = $row['Batch'];
$class10 = $row['class10'];
$class12 = $row['class12'];
$cpi = $row['cpi'];
$specialisation = $row['Specialisation'];
$aoi = $row['AOI'];
$class10 = $row['Package'];
$password = $row['password'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">


</head>

<body style="background-image: linear-gradient(90deg ,white,skyblue);">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(90deg , white ,white  ); font-size:larger;">
        <div class="container-fluid ">
            <a class="navbar-brand" href="../Homepage.php">
                <header>
                    Welcome to Our Database
                </header>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Homepage.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../student/Login_register.php">Student Login </a></li>
                            <li><a class="dropdown-item" href="../company/Login_register.php">Company Login</a></li>
                            <li><a class="dropdown-item" href="../Allumns/Login_register.php">Allumns Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../query.php">Queries</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./Login_register.php">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5 pb-5" id="login" style="display: block; border: 1px solid black; border-radius: 20px;">
        <h1 style="margin-left: 51%;"> <?php echo $name ?> </h1><br>
        <div class="row">

            <div class="col-md-4">
                <div class="feedback_img" style="justify-content: center;">
                    <img class="login-img" src="../images/profile.png" width="50%" alt="Error" style="margin-left: 25%;">
                </div>
            </div>

            <div class="col-md-8 mt-5">

                <div class="row">
                    <div class="col-md-4">
                        <h5>Roll No. </h5>
                        <h5>Email </h5>
                        <h5>Mob no. </h5>
                        <h5>age </h5>
                        <h5>batch year </h5>
                        <h5>CPI </h5>
                        <h5>Password </h5>


                    </div>
                    <div class="col-md-4">
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                    </div>

                    <div class="col-md-4">
                        <h5> <?php echo $roll ?> </h5>
                        <h5> <?php echo $email ?> </h5>
                        <h5> <?php echo $mobile ?> </h5>
                        <h5> <?php echo $age ?> </h5>
                        <h5> <?php echo $batch ?> </h5>
                        <h5> <?php echo $cpi ?> </h5>
                        <h5> <?php echo $password ?> </h5>


                    </div>
                </div>

                <?php
                session_start();

                $_SESSION['roll'] = $roll;
                $_SESSION['password'] = $password;
                ?>


                <a href="./edit.php">
                    <button type="button" class="btn btn-info mt-3 ms-1 " style="padding: 6px 25px;">Edit</button>
                </a>

                <a href="./delete.php">
                    <button type="button" class="btn btn-danger mt-3 ms-5">Delete</button>
                </a>
                <a href="../query.php">
                    <button type="button" class="btn btn-warning mt-3 ms-5">Query</button>
                </a>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>