<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project_db";
    $con = mysqli_connect($servername,$username,$password,$database);
    
    if(!$con)
    {
        die("error detected : Connection to database failed");
        echo "Failed connection";
    }
    else
    {
        // echo "connection ok";
    }

?>