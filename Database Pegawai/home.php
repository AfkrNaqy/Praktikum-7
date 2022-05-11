<!DOCTYPE html>
<html>

<head>
    <title>Program Sederhana Kepegawaian</title>
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    thead {
        background-color: #cccddd;
    }

    h2 {
        text-align: center;
    }

    table {
        margin: auto;
    }

    a {
        text-decoration: none;
    }

    .btn-tambah {
        text-decoration: none;
        margin-top: 2rem;
        margin-left: 35rem;
    }
    </style>
</head>

<body>
    <h2>Daftar Pegawai</h2>
    <table>
        <thead>
            <tr>
                <td>ID Pegawai</td>
                <td>Nama</td>
                <td>Id Jabatan</td>
                <td>Jabatan</td>
                <td>Alamat</td>
            </tr>
        </thead>
        <?php
        include "conect.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT *,tb_jabatan.jabatan 
                                FROM tb_pegawai,tb_jabatan
                                WHERE tb_pegawai.id_jabatan=tb_jabatan.id_jabatan');
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['id_jabatan'] ?></td>
            <td><?php echo $data['jabatan'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td class="update">
                <a href="update.php?id_pegawai=<?php echo $data['id_pegawai']; ?>"> Update |</a>
                <a href="delete.php?id_pegawai=<?php echo $data['id_pegawai']; ?>"> | Hapus</a>
            </td>
        </tr>
        <?php 
    }
     ?>
    </table>
    <button class="btn-tambah"><a href="input-tabelPegawai.php">Tambah Pegawai</a></button>
    <button class="btn-tambah"><a href="input-tabelJabatan.php">Tambah Jabatan</a></button>
</body>

</html>