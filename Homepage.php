<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">


</head>

<body style="background-image: linear-gradient(90deg ,white,skyblue);">


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(90deg , white ,white  ); font-size:larger;">
        <div class="container-fluid ">
            <a class="navbar-brand" href="./Homepage.php">
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
                        <a class="nav-link active" aria-current="page" href="./Homepage.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./student/Login_register.php">Student Login </a></li>
                            <li><a class="dropdown-item" href="./company/Login_register.php">Company Login</a></li>
                            <li><a class="dropdown-item" href="./Allumns/Login_register.php">Allumns Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./query.php">Queries</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container home1">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <div style="width: 100%;">
                    <img src="./images/logo.svg" alt="error" class="img1">
                </div>
            </div>

            <div class="col-md-6 button pt-5" id="show-button">
                <a href="./student/Login_register.php">
                    <button type="button" class="btn btn-primary glow-on-hover" style="padding: 15px 105px;">Student</button>
                </a>
                <br>
                <a href="./company/Login_register.php">
                    <button type="button" class="btn btn-secondary mt-4 glow-on-hover">Company</button>
                </a>
                <br>
                <a href="./Allumns/Login_register.php">
                    <button type="button" class="btn btn-success mt-4 glow-on-hover" style="padding: 15px 110px;">Allums</button>
                </a>

            </div>

            <div class="col-md-6" style="display: none;" id="show-form">

            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>