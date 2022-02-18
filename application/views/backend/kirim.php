<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title ?></title>
    <!-- css -->
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Data Kirim Barang</h1>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
           <a href="<?php echo base_url('backend/kirim_barang/viewtambahpengiriman') ?>" class="btn btn-primary pull-right" >
          Tambah Pengiriman
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pengiriman</th>
                  <th>Nama Pengirim</th>
                  <th>Tanggal</th>
                  <th>Alamat Penerima</th>
                  <th>Jenis Barang</th>
                  <th>Ongkos Kirim</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ; foreach ($kirim as $row ) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo strtoupper($row['kd_kirim']); ?></td>
                  <td><?php echo strtoupper($row['nama_pengirim']); ?></td>
                  <td><?php echo strtoupper($row['tanggal']); ?></td>
                  <td><?php echo $row['alamat_penerima'] ?></td>
                  <td><?php echo $row['jenis_barang'] ?></td>
                  <td><a>Rp <?php echo $row['harga'] ?></a></td>
                  <td align="center"><a href="<?php echo base_url('backend/kirim_barang/viewkirim/'.$row['kd_kirim'])?>" class="btn btn btn-primary">View</a></a>
                  <a href="<?php echo base_url('backend/kirim_barang/cetak/'.$row['kd_kirim'])?>" class="btn btn btn-success">Cetak</a></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.container-fluid -->

<!-- End of Main Content -->
<!-- Footer -->
<?php $this->load->view('backend/include/base_footer'); ?>

<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>