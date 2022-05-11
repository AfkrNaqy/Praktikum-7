<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan</title>
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

    <h2>Tambah Jabatan</h2>
    <form action="insert-tabelJabatan.php" method="POST">
        <table>
            <tr>
                <td>ID Jabatan</td>
                <td><input type="text" name="id_jabatan"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
    </form>

</body>

</html>