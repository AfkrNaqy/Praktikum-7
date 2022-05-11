<?php
    include "conect.php";
    $id_jabatan = $_POST['id_jabatan'];
    $jabatan = $_POST['jabatan'];
    $insert="INSERT INTO tb_jabatan VALUES('$id_jabatan','$jabatan')";
    if (mysqli_query($conn, $insert)) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $insert ."<br>" . 
        mysqli_error($conn);
    }
    echo " <br> <button><a href=home.php>Home</a></button>";
?>