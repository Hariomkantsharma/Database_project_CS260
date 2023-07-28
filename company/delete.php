<?php

session_start();

include '../Database.php';

$name = $_SESSION['name'];
$password = $_SESSION['password'];


$sql=null;
$que=null;
$sql = "select * from company where Name = '$name' and password='$password'";
$que=mysqli_query($con,$sql);


$sql = "DELETE FROM company WHERE Name = '$name' AND password = '$password';";
$que = mysqli_query($con, $sql);


if (mysqli_affected_rows($con) > 0) 
{
    echo "<script> alert('Entry Deleted sussesfully')</script>";
    echo "<script>window.open('../Homepage.php','_self')</script>";
}

else
{
    echo "<script> alert('Unable to delete entry')</script>";
    echo "<script>window.open('./welcome.php','_self')</script>";
}


?>
