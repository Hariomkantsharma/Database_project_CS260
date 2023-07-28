<?php
include '../Database.php';

$s = mysqli_query($con, "select * from company");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- customised CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- cdn for fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: linear-gradient(90deg , skyblue , rgb(145, 71, 241));">

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
                </ul>
            </div>
        </div>
    </nav>


    <!-- Registration form -->

    <div class="container mt-4 pt-5" id="register">
        <h2 style="text-align:center;">Enter new details</h2>
        <div class="row">
            <form method="post" action="./editprocess.php">

                <h3>Personal Information</h3>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Name : </label>
                        <input type="text" name="name" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Roll No : </label>
                        <input type="text" name="roll" class="form-control" id="InputX1">
                        <div id="emailHelp" class="form-text">Cannot be change</div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Email : </label>
                        <input type="email" name="email" class="form-control" id="InputX1">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Mobile No : </label>
                        <input type="number" name="mobile" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Age : </label>
                        <input type="number" name="age" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Batch of : </label>
                        <input type="number" name="batch" class="form-control" id="InputX1">
                    </div>
                </div>

                <h3> Academic Details</h3>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Class 10th : </label>
                        <input type="number" name="class10" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Class 12th : </label>
                        <input type="number" name="class12" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">CPI : </label>
                        <input type="number" pattern="^\d*(\.\d{0,2})?$"  name="cpi" class="form-control" id="InputX1">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Specialisation : </label>
                        <input type="text" name="specialisation" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Area of Interest : </label>
                        <input type="text" name="aoi" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Placed Company : </label>
                        <select class="form-select" name="placed" aria-label="Default select example">
                            <option selected>--none--</option>
                            <?php
                            while ($r = mysqli_fetch_array($s)) {
                                $company_name = $r['Name'];
                            ?>
                                <option value=" <?php echo $company_name ?> "> <?php echo $r['Name'];  ?> </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Password : </label>
                        <input type="password" name="password" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password : </label>
                        <input type="password" name="cpassword" class="form-control" id="InputX1">
                    </div>
                </div>



                <button type="reset" class="btn btn-primary mt-5">Clear</button>
                <button type="submit" name="submit3" value="submit" class="btn btn-primary mt-5 ms-5">Submit</button>
                <!--  Error will come when we submit the form  -->
            </form>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Customised JS -->
    <script src="../main.js"></script>

</body>

</html>