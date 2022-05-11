<?php
    include "conect.php";
    $sql = "CREATE TABLE tb_pegawai(
        id int(8),
        nama VARCHAR(50) NOT NULL,
        id_jabatan VARCHAR(8) NOT NULL,
        alamat varchar(150),
        PRIMARY KEY(id,id_jabatan)
        )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    }else{
        echo "error creating Table: " . 
        mysqli_connection_error($conn);
    }
    mysqli_close($conn);
        
?>