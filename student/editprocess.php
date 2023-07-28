<?php


session_start();

include '../Database.php';

$roll = $_POST['roll'];

// $email2 = $_SESSION['email2'];
// $password2 = $_SESSION['password2'];

$sql = "select * from student where Roll_no='$roll'";
$que=mysqli_query($con,$sql);


if( mysqli_num_rows($que) > 0 )
{
    echo "data comming";
}


if(isset($_POST['submit3']))
{

    $name = $_POST['name'];
    // $roll = $_POST['roll'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $batch = $_POST['batch'];
    $class10 = $_POST['class10'];
    $class12 = $_POST['class12'];
    $cpi = $_POST['cpi'];
    $specialisation = $_POST['specialisation'];
    $aoi = $_POST['aoi'];
    $placed = $_POST['placed'];
    $password = $_POST['password'];
    
    
    $newpassword = $_POST['password3'];
    $sql = "update student set Name = '$name' , Email = '$email', Mobile = '$mobile', Age = '$age', Batch = '$batch' , class10 = '$class10', class12 = '$class12', cpi = '$cpi', Specialisation = '$specialisation' , AOI = '$aoi' , Placed_in = '$placed' , password = '$password' where Roll_no = '$roll'";
    $que=mysqli_query($con,$sql);

    echo "<script>window.open('./welcome.php','_self')</script>";

}
