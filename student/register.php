<?php

include '../Database.php';

if (isset($_POST['submit'])) 
{
    
    $name = $_POST['name'];
    $roll_no = $_POST['roll'];
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
    $cpassword = $_POST['cpassword'];

     
    if( $cpassword == $password && strlen($password) >= 8)
    {
        $chk = "";
        foreach ($password as $chk1) 
        {
            $chk.=$chk1.",";
        }
        $sql = "insert into student values('$roll_no','$name','$email','$mobile','$age','$batch','$class10','$class12','$cpi','$specialisation','$aoi','$placed','$password')";
    
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('new record inserted')</script>";
            echo "<script>window.open('./Login_register.php','_self')</script>";
        }
        else
        {
            echo "error:" .mysqli_error($con);
        }
        mysqli_close(($con));
    }

    else if($cpassword == $password && strlen($password) < 8)
    {
        echo "<script>alert('WEAK PASSWORD : Should be atleast 8 character')</script>";
        echo "<script>window.open('./form1.php','_self')</script>";
    }
    
    else
    {
        echo "<script>alert('PASSWORD NOT MATCHED')</script>";
        echo "<script>window.open('./form1.php','_self')</script>";
    }
}
