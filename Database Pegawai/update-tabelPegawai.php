<?php
    include 'conect.php';
    $id_pegawai = $_POST['id_pegawai'];
    $Nama = $_POST['nama'];
    $id_jabatan = $_POST['id_jabatan'];
    $alamat = $_POST['alamat'];
    echo $id_pegawai,$nama,$id_jabatan,$alamat;
    mysqli_query($conn, "UPDATE pegawai SET Nama='$nama',id_jabatan='$id_jabatan',
    alamat='$alamat' WHERE id_pegawai = $id_pegawai");
    header("location:home.php");
?>