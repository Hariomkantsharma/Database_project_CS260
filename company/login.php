<?php

session_start();

include '../Database.php';

if(isset($_POST['submit2']))
{
    $company2 = $_POST['company2'];
    $password2 = $_POST['password2'];
    

    
    $sql = "select * from company where Name ='$company2' and password='$password2'";
    $que=mysqli_query($con,$sql);
    $_SESSION['sql'] = $sql;


    if( mysqli_num_rows($que) > 0)
    {
        echo "<script>alert('Login OK')</script>";

        echo "<script>window.open('./welcome.php','_self')</script>";
    
        $row = mysqli_fetch_assoc($que);

        $_SESSION['row']=$row;
        $_SESSION['que']=$que;

        // $_SESSION['roll2'] = $roll2;
        // $_SESSION['password2'] = $spassword2;

        // $fname = $row['Fname'];
        // $lname = $row['Lname'];


        // $_SESSION['email2'] = $email2;
        // $_SESSION['password2'] = $password2;
        // $_SESSION['fname'] = $fname;
        // $_SESSION['lname'] = $lname;
        // header("Location: ./welcome.php");
        exit;

        // echo "<script>window.open('./login.php','_self')</script>";
    }
    else
    {
        echo "<script> alert('Wrong Username or password')</script>";
        // echo "<script>window.open('./Login_register.php','_self')</script>";

        echo $company2;
        echo $password2;
    }
}
