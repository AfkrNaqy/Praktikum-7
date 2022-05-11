<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "my_db";
    $conn = mysqli_connect($servername,$username,$pass,$database);
    $id = intval($_POST['id']);
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $input = "INSERT INTO buku_tamu(id_bt, nama, email, isi)
            VALUES ('$id','$nama','$email','$isi')";
    if (mysqli_query($conn, $input)) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $input ."<br>" . 
        mysqli_error($conn);
    }
    echo " <br> <button><a href=Buku-Tamu.php>Kembali</a></button>";
?>