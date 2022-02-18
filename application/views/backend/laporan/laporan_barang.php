<?php
 $judulfile = 'Laporan Pengiriman Barang';
 //MOFIFIKASI HEADER HTTP MENJADI FILE XLS
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=$judulfile $mulai sampai $sampai.xls");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EXPORT LAPORAN</title>
</head>

<body>
<th> <b>----- Laporan Pengiriman Barang dari Tanggal <?php echo $mulai ?> sampai <?php echo $sampai ?> -----</b></th>
<table><tr> </tr></table>
 <table border="1" cellspacing="1" cellpadding="2" width="90%">
    <tr>
        <th width="5%" align="center">No. Pengiriman</th>
        <th width="20%" align="center">Nama Pengirim</th>
        <th width="20%" align="center">Nama Penerima</th>
        <th width="25%" align="center">Alamat Penerima</th>
        <th width="20%" align="center">Jenis Barang</th>
        <th width="20%" align="center">Ongkos Kirim</th>
    </tr>
    <?php foreach ($laporan as $row) { ?>
    <tr>
         <td align="center"><?php echo $row['kd_kirim'];?></td>
         <td align="center"><?php echo $row['nama_pengirim'];?></td>
         <td align="center"><?php echo $row['nama_penerima'];?></td>
         <td align="center"><?php echo $row['alamat_penerima'];?></td>
         <td align="center"><?php echo $row['jenis_barang'];?></td>
         <td align="center"><?php echo $row['harga'];?></td>
    </tr>
   <?php } ?>
</table>
<table>
<tr></tr>
<tr>
        <th>Total Biaya Pengiriman :</th>
        <th align="center"><b><?php echo '=sum(f3:f999)';?></b></th>
</tr>
</table>
</body>
</html>
