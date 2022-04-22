<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()?>/assets/backend/img/logomobil.png" type="image/gif">
    <title><?php echo $title ?></title>
    <!-- css -->
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Data Mobil</h1>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#ModalTujuan">
          Tambah Mobil
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Mobil</th>
                  <th>Nama Mobil</th>
                  <th>Plat Mobil</th>
                  <th>Kapasitas Kursi</th>
                  <th>Nama Sopir</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ; foreach ($mobil as $row ) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo strtoupper($row['kd_mobil']); ?></td>
                  <td><?php echo strtoupper($row['nama_mobil']); ?></td>
                  <td><?php echo strtoupper($row['plat_mobil']); ?></td>
                  <td><?php echo $row['kapasitas_mobil'] ?></td>
                  <td><?php echo $row['sopir_mobil'] ?></td>
                  <?php if ($row['status_mobil'] == '1') { ?>
                    <td class="btn-success"> Online</td> 
                    <?php } else { ?>
                    <td class="btn-danger">Offline</td>
                  <?php } ?>
                  <td align="center"><a href="<?php echo base_url('backend/mobil/viewmobil/'.$row['kd_mobil'])?>" class="btn btn btn-info">View</a></a>
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
</div>
<!-- End of Main Content -->
<!-- Footer -->
<?php $this->load->view('backend/include/base_footer'); ?>
<!-- End of Footer -->
<!-- Modal -->
<div class="modal fade" id="ModalTujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="<?php echo base_url()?>backend/mobil/tambahmobil" method="post">
      <div class="form-group">
        <label for="platmobil" class="">Nama Mobil</label>
        <input type="text" class="form-control" name="nama_mobil" placeholder="Nama Mobil">
      </div>
      <div class="form-group">
        <label for="platmobil" class="">Plat Mobil</label>
        <input type="text" class="form-control" name="plat_mobil" placeholder="Plat Mobil">
      </div>
      <div class="form-group">
        <label for="desc" class="">Nama Sopir</label>
        <input type="text" class="form-control" name="sopir_mobil" placeholder="Nama Sopir">
      </div>
      <div class="form-group">
        <label for="seat" class="">Jumlah Kursi</label>
        <input type="number" class="form-control" id="seat" name="seat" placeholder="Jumlah Kursi">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button class="btn btn-info">Simpan</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>