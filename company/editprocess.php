<?php


session_start();

include '../Database.php';

$name = $_POST['name'];

// $email2 = $_SESSION['email2'];
// $password2 = $_SESSION['password2'];

$sql = "select * from allums where Name ='$name'";
$que = mysqli_query($con, $sql);


if (mysqli_num_rows($que) > 0) {
    echo "data comming";
}


if (isset($_POST['submit2'])) {

    $name = $_POST['name'];
    // $roll = $_POST['roll'];
    $package = $_POST['package'];
    $since = $_POST['since'];
    $mode = $_POST['mode'];
    $cpi = $_POST['cpi'];
    $password = $_POST['password'];


    $sql = "update company set Name = '$name' , Package = '$package', Since = '$since', Mode = '$mode', CPI = '$cpi' , password = '$password' where Name  = '$name'";
    $que = mysqli_query($con, $sql);


    echo "<script>alert('Data Updated')</script>";
    echo "<script>window.open('./welcome.php','_self')</script>";
}
