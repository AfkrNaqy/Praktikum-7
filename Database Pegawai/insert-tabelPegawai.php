<?php
    include "conect.php";
    $id_pegawai = $_POST['id_pegawai'];
    $nama = $_POST['nama'];
    $id_jabatan  = $_POST['id_jabatan'];
    $alamat  = $_POST['alamat'];
    mysqli_query($conn, "INSERT INTO tb_pegawai VALUES('$id_pegawai','$nama','$id_jabatan','$alamat')");
    header("location:home.php");
?>