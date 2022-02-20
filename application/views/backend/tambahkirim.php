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
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/timepicker') ?>/css/bootstrap-material-datetimepicker.css" />
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Pengiriman</h6>
        </div>
        <div class="card-body">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <form action="<?php echo base_url()?>backend/kirim_barang/tambahpengiriman" method="post">
                  <div class="form-group">
                    <label class="">Nama Pengirim</label>
                     <input type="text" class="form-control"  id="" name="nama_pengirim" required="" placeholder="Nama Pengirim">
                  </div>
                  <div class="form-group">
                    <label class="">Nama Penerima</label>
                     <input type="text" class="form-control"  id="" name="nama_penerima" required="" placeholder="Nama Penerima">
                  </div>
                  <div class="form-group">
                    <label class="">Alamat Penerima</label>
                     <input type="text" class="form-control"  id="" name="alamat_penerima" required="" placeholder="Alamat Penerima">
                  </div>
                  <div class="form-group">
                    <label class="">Jenis Barang</label>
                     <input type="text" class="form-control"  id="" name="jenis_barang" required="" placeholder="Jenis Barang">
                  </div>
                  <div class="form-group">
                    <label class="">Nomor Telepon Penerima</label>
                     <input type="text" class="form-control"  id="" name="telepon" required="" placeholder="Nomor Telepon Penerima">
                  </div>
                  <div class="form-group">
                    <label  class="">Mobil</label>
                    <select class="form-control" name="mobil">
                      <option value="" selected disabled="">-Pilih Mobil-</option>
                      <?php foreach ($mobil as $row ) {?>
                      <option value="<?php echo $row['kd_mobil'] ?>" ><?php echo strtoupper($row['nama_mobil']); ?> -<?php if ($row['status_mobil'] == '1') { ?>
                        Online
                        <?php } else { ?>
                        Offline
                      <?php } ?>- </option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label  class="">Tanggal Pengiriman</label>
                    <input type="text" class="form-control datepicker"  id="date" name="tanggal" required="" placeholder="Tanggal">
                  </div>
                  <div class="form-group">
                    <label  class="">Harga</label>
                    <input type="number" class="form-control" name="harga" required="" placeholder="Harga">
                  </div>
                  <div class="form-group">
                    <label  class="">Keterangan</label>
                    <input type="number" class="form-control" name="harga" required="" placeholder="Ambil diloket/Diantar ke tujuan">
                  </div>
                </div>
              </div>
              <hr>
              <a class="btn btn-default" href="javascript:history.back()"> Kembali</a>
              <input  type="submit" class="btn btn-primary pull-rigth" value="Tambah Pengiriman">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Main Content -->
    <!-- The Modal -->
    <!-- Footer -->
    <?php $this->load->view('backend/include/base_footer'); ?>
    <!-- End of Footer -->
    <!-- js -->
        <?php $this->load->view('backend/include/base_js'); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
        <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frontend/timepicker') ?>/js/bootstrap-material-datetimepicker.js"></script>
        <script type="text/javascript">
			 $(function(){
			 	var date = new Date();
				date.setDate(date.getDate());

			  $(".datepicker").datepicker({
			  		startDate: date,
			      format: 'yyyy-mm-dd',
			      autoclose: true,
			      todayHighlight: true,
			  });
			 });
			</script>

      </body>
    </html>