<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" href="<?php echo base_url()?>/assets/backend/img/logomobil.png" type="image/gif">
<title>Bukti Kirim PO Sejahtera(<?php echo $kirim[0]['kd_kirim'];?>)</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
        margin: 2px;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>
<style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        
        font-size: 22px;
        font-weight: normal;
        margin: 0 0 -15px 0;
        padding: 14px 15px 10px 15px;
        text-align: center;
    }

    h2 {
        color: #444;
        background-color: transparent;
        font-size: 20px;
        border-bottom: 3px solid #D0D0D0;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
        text-align: center;
    }

    h4 {
        color: #444;
        background-color: transparent;
        font-size: 15px;
        font-weight: normal;
        margin: 0 0 8px 0;
        padding: 14px 15px 0px 0px;
        text-align: center;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }

    span {
        text-align: center;
        font-size:15px;
    }

    pre {
        font-size: 15px;
    }
    
    img{float:left;padding-right:10px;}
    </style>
</head>

<body onload="window.print()">
  <table width="100%">
    <tr>
        <td align="left">
            
                <h1><b>LANTRA WISATA TRAVEL</b></h1>
                <h2><b>PO SEJAHTERA</b></h2>
                <h4> <b>Bukti Pengiriman Barang No. <?php echo $kirim[0]['kd_kirim'];?> </b></h4>
            <pre>
                <b>Telah diterima kiriman barang : </b><br>
                Berupa : <?php echo $kirim[0]['jenis_barang'];?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Ongkos Kirim : <?php echo 'Rp '.number_format(($kirim[0]['harga'])).',-'; ?></b><br>
                Dari : <?php echo $kirim[0]['nama_pengirim'];?><br>
                Untuk : <?php echo $kirim[0]['nama_penerima'];?><br>
                Tujuan : <?php echo $kirim[0]['alamat_penerima'];?><br>
                Pada Waktu : <?php echo hari_indo(date('N',strtotime($kirim[0]['tanggal']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$kirim[0]['tanggal'].'')));?><br>
                Telepon : <?php echo $kirim[0]['telepon'];?></br>
                <b>Yang membawa paket: </b> <br>
                Sopir: <?php echo $kirim[0]['sopir_mobil'];?><br>
                Plat Mobil: <?php echo $kirim[0]['plat_mobil'];?><br>
                Keterangan: <?php echo $kirim[0]['keterangan'];?>
            </pre>
            <br>
            <p> Petugas loket, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yang menerima,</p><br>
            <p>(&nbsp; <?php echo $kirim[0]['nama_user'];?> &nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</p>

        </td>
    </tr>
  </table>
  <br/>
  

</body>
</html>