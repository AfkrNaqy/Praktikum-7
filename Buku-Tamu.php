<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku tamu</title>
    </head>

    <body>
        <h1 align="center">BUKU TAMU</h1>
        <div class="formulir">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Isi</th>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <form method="POST" action="data-bukuTamu.php">
                <table>
                    <tr>
                        <td width="120">ID</td>
                        <td>
                            <input type="text" name="id" id=""> 
    
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="nama" id="">
    
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            
                            <input type="text" name="email" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Isi</td>
                        <td>
                            <textarea name="isi" id="" cols="20" rows="5">Deskripsi diri anda</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="input" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
    <style>
        .formulir{
            margin: 20px 40px;
            padding: 10px 40px;
            border: 1px solid;
        }
    </style>
</html>