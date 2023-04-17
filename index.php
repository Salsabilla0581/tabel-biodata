<?php
  // Variabel data biodata
  $nama = "SALSABILLA AZZAHRA DWIPUTERI";
  $prodi = "SISTEM INFORMASI";
  $perguruan = "UNIBI";
  $alamat = "JL. RIUNG PERMAI";
  $telepon = "081 2222 6955";
?>

<!DOCTYPE html>
<html>
 <head>
    <title>BIODATA DIRI</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
 </head>
<body>
    <table style="width: 980px;">
    <tr>
            <td align="center" bgcolor="aqua" width="174"><b>DATA DIRI</b></td>
            <td align="center" bgcolor="aqua" width="353"><b>KETERANGAN</b></td>
            <td align="center" bgcolor="aqua" width="232"><b>FOTO</b></td>
 
        </td>
 </tr>
    <tr>
        <td>NPM</td>
        <td>9882405219121020</td>
        <td rowspan="10" align="center"> <img src="Salsabilla Azzahra.png" width="210px" height="300px"/>
        </tr>
        <tr>
        <td>NAMA LENGKAP</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>PRODI</td>
        <td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td>PERGURUAN TINGGI</td>
        <td><?php echo $perguruan; ?></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>NO HP</td>
        <td><?php echo $telepon; ?></td>
    </tr>
 </table>
 </fieldset>
 </form>
 </body>
 </html>