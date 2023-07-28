<?php

session_start();

include '../Database.php';

$roll = $_SESSION['roll'];
$password = $_SESSION['password'];


$sql=null;
$que=null;
$sql = "select * from student where Roll_no='$roll' and password='$password'";
$que=mysqli_query($con,$sql);


$sql = "DELETE FROM student WHERE Roll_no = '$roll' AND password = '$password';";
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
