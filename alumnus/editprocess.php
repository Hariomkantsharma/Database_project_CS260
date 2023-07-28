<?php


session_start();

include '../Database.php';

$roll = $_POST['roll'];

// $email2 = $_SESSION['email2'];
// $password2 = $_SESSION['password2'];

$sql = "select * from allums where Roll_no='$roll'";
$que=mysqli_query($con,$sql);


if( mysqli_num_rows($que) > 0 )
{
    echo "data comming";
}


if(isset($_POST['submit2']))
{

    $name = $_POST['name'];
    // $roll = $_POST['roll'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $company = $_POST['company_name'];
    $ctc = $_POST['ctc'];
    $Working_tenure = $_POST['working_tenure'];
    $area = $_POST['area'];
    $position = $_POST['position'];
    $location = $_POST['location'];
    $password = $_POST['password'];    
    
    $sql = "update allums set Name = '$name' , Email = '$email', working_tenure = '$Working_tenure', Area = '$area', Location = '$location' , Position = '$position', CTC = '$ctc', Company_name = '$company', Batch = '$batch' , password = '$password' where Roll_no = '$roll'";
    $que=mysqli_query($con,$sql);

    echo "<script>window.open('./welcome.php','_self')</script>";

}
