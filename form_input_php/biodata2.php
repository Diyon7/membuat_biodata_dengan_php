<?php
include "biodata.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$tl = $_POST['tl'];
$agama = $_POST['agama'];
$tang = $_POST['tang'];
$bul = $_POST['bul'];
$tah = $_POST['tah'];
$hobi = $_POST['hobi'];
$pt = $_POST['pt'];
if (isset($_POST['nama']) && isset($_POST['email'])) {
    if (
        empty($nama) ||
        empty($alamat) ||
        empty($email) ||
        empty($jk) ||
        empty($agama) ||
        empty($tl) ||
        empty($tang) ||
        empty($bul) ||
        empty($tah) ||
        empty($hobi) ||
        empty($pt)
    ) {
        header("location:pesan_error.php");
    } else {
?>
        <br>
        <h1 class="bio">Biodata </h1>
        <table width="522" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="190">Nama Lengkap</td>
                <td width="5">:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td width="190">Alamat</td>
                <td width="5">:</td>
                <td><?= $alamat ?></td>
            </tr>
            <tr>
                <td width="190">Email</td>
                <td width="5">:</td>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <td width="190">Jenis Kelamin</td>
                <td width="5">:</td>
                <td><?= $jk ?></td>
            </tr>
            <tr>
                <td width="190">Agama</td>
                <td width="5">:</td>
                <td><?= $agama ?></td>
            </tr>
            <tr>
                <td width="190">Tempat Lahir</td>
                <td width="5">:</td>
                <td><?= $tl ?></td>
            </tr>
            <tr>
                <td width="190"> Tanggal Lahir</td>
                <td width="5">:</td>
                <td><?= $tang, '-' . $bul, '-' . $tah ?></td>
            </tr>
            <tr>
                <td width="190">Hobi</td>
                <td width="5">:</td>
                <td><?= $hobi ?></td>
            </tr>
            <tr>
                <td width="190">Pendidikan Terakhir</td>
                <td width="5">:</td>
                <td><?= $pt ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center">
                    <?php
                    date_default_timezone_set('Asia/jakarta');
                    echo date("l, d-F-Y, g:i:s a");
                    ?>
                </td>
            </tr>
        </table>
<?php
    }
} else {
    echo "<meta http-equiv='refresh' content='0 url=biodata.php'>";
}
