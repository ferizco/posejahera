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
      <h1 class="h3 mb-2 text-gray-800">Data Bank</h1>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Bank</th>
                  <th>Nama Bank</th>
                  <th>NomRek</th>
                  <th>Atas Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ; foreach ($bank as $row ) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['kd_bank']; ?></td>
                  <td><?php echo $row['nama_bank']; ?></td>
                  <td><?php echo $row['no_rek_bank']; ?></td>
                  <td><?php echo $row['nasabah_bank']; ?></td>
                  <td align="center"><a href="<?php echo base_url('backend/bank/viewbank/'.$row['kd_bank']) ?>" class="btn btn btn-primary">View</a></a>
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

<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
</body>
</html>