<?php

    $servername = "127.0.0.1:****"; //Use your server name
    $username = "******";      //Use your Username
    $password = "Esport@*****"; //Use your Passwd
    $dbname = "******"; //Use Your db name
    
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    if($conn){
        // echo "Connect to Server Successfully";
    }
    
    else {
        echo "Check Your Internet Connection".mysqli_connect_error();
    }




?>