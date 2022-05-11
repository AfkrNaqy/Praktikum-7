<?php
    include "conect.php";
    $sql = "CREATE TABLE tb_jabatan(
        id_jabatan int(8),
        jabatan VARCHAR(30) NOT NULL,
        PRIMARY KEY(id_jabatan)
        )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    }else{
        echo "error creating Table: " . 
        mysqli_connection_error($conn);
    }
    mysqli_close($conn);
?>