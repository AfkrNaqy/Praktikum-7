<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "my_db";
    $conn = mysqli_connect($servername,$username,$pass,$database);
    $sql = "SELECT id_bt, nama, email, isi FROM
    buku_tamu";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<h1 align=center>DATA BUKU TAMU</h1>";
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: " . $row["id_bt"] . "<br> Nama: " . 
            $row["nama"].
            "<br> Email: ". $row["email"]. "<br> isi: 
            ". $row["isi"]. "<br><br>";
        }
    }else{
        echo "0 results";
    }
    mysqli_close($conn);

?>