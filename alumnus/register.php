<?php

include '../Database.php';

if (isset($_POST['submit_alu'])) 
{
    
    $name = $_POST['name'];
    $roll_no = $_POST['roll'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $company_name = $_POST['company_name'];
    $ctc = $_POST['ctc'];
    $working_tenure = $_POST['working_tenure'];
    $area = $_POST['area'];
    $position = $_POST['position'];
    $location = $_POST['location'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

     
    if( $cpassword == $password && strlen($password) >= 8)
    {
        $chk = "";
        foreach ($password as $chk1) 
        {
            $chk.=$chk1.",";
        }
        $sql = "insert into allums values('$roll_no','$name','$email','$working_tenure','$area','$location','$position','$ctc','$company_name','$batch','$password')";
    
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
        echo "<script>window.open('./Login_register.php','_self')</script>";
    }
}
?>