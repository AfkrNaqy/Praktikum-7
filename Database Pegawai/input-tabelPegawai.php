<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
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

    <h2>Tambah Pegawai</h2>
    <form action="insert-tabelPegawai.php" method="POST">
        <table>
            <tr>
                <td>ID Pegawai</td>
                <td><input type="text" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Id Jabatan</td>
                <td><input type="text" name="id_jabatan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
    </form>

</body>

</html>