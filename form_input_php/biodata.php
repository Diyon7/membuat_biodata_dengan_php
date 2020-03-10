<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            font-size: 19px;
        }

        .bio {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="bio">Biodata</h1>
    <form action="biodata2.php" method="POST">
        <table border="1" align="center" cellpadding="2" cellspacing="2" style="width: 522px">
            <tr>
                <td width="130">Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Alamat</td>
                <td><input type="textarea" name="alamat"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td width="130">Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td width="130">Agama</td>
                <td width="130"><select name="agama" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select></td>
            </tr>
            <tr>
                <td width="130">Tempat Lahir</td>
                <td><input type="text" name="tl"></td>
            </tr>
            <tr>
                <td width="130">Tanggal Lahir</td>
                <td style="width: 261px">
                    <input type="number" name="tang" max="30" style="width: 50px">/<input type="number" name="bul" size="2" min="1" max="12" style="width: 50px">/<input type="number" name="tah" size="2" max="2017" style="width: 50px">dd/mm/yyyy</<input>
                </td>
            </tr>
            <tr>
                <td width="130">Hobi</td>
                <td><input type="text" name="hobi"></td>
            </tr>
            <tr>
                <td width="130">Pendidikan Terakhir</td>
                <td>
                    <select name="pt">
                        <option value="SMP">SMP</option>
                        <option value="SMP">SMA/SMK</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="btnlogin" value="login"></td>
                <td><input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>