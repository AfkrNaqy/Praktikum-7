<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $conn = mysqli_connect($servername,$username,$pass);
    $sql = "CREATE DATABASE db_pegawai";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    }else{
        echo "error creating database: " . 
        mysqli_connection_error($conn);
    }
        mysqli_close($conn);
?>