<!DOCTYPE html>
<html>

<head>
    <title>Update Pegawai</title>
</head>
<style>
p {
    width: 350px;
}

thead {
    background-color: #cccddd;
}
</style>

<body>
    <h2>Update Kepegawaian</h2>
    <form action="update-tabelPegawai.php" method="POST">
        <?php
        $id_pegawai = $_GET['id_pegawai'];
        include "conect.php";        
        $query = mysqli_query($conn, "SELECT nama,id_jabatan,alamat 
        FROM tb_pegawai
        WHERE id_pegawai=$id_pegawai");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <table>
            <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
            <tr>
                <td>Nama</td>
                <td><input type=" text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Id Jabatan</td>
                <td><input type="text" name="id_jabatan" value="<?php echo $data['id_jabatan']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>