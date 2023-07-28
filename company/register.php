<?php

include '../Database.php';

if (isset($_POST['submit_cmp'])) 
{
    
    $name = $_POST['name'];
    $pkg = $_POST['package'];
    $since = $_POST['since'];
    $mode_of_interview = $_POST['mode'];
    $cpi = $_POST['cpi'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

     
    if( $cpassword == $password && strlen($password) >= 8)
    {
        $chk = "";
        foreach ($password as $chk1) 
        {
            $chk.=$chk1.",";
        }
        $sql = "insert into company values('$name','$pkg','$since','$mode_of_interview','$cpi','$password')";
    
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
?>