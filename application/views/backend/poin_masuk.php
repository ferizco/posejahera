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
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Manajemen Poin Masuk</h1>
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-info">KODE Order [<?php echo $tiket[0]['kd_order']; ?>]  </h6>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url().'backend/order_tiket/addpoin' ?>" method="post" enctype="multipart/form-data">
             
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                <?php foreach ($tiket as $row ) { ?>
                    <div class="row form-group">
                        <label for="nama" class="col-sm-4 control-label">Kode Pelanggan</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="kd_pelanggan" value="<?php echo $row['kd_pelanggan'] ?>" readonly>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row form-group">
                        <label for="nama" class="col-sm-4 control-label">Kode Order</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="kd_order" value="<?php echo $tiket[0]['kd_order'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="nama" class="col-sm-4 control-label">Jumlah Transaksi</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="" value="<?php $total =  count($tiket) * $tiket[0]['harga_jadwal'] ; echo number_format($total)?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Jumlah Poin</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="jumlah_poin" value="<?php $total =  count($tiket) * $tiket[0]['harga_jadwal'] / 20000 ; echo number_format($total)?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Tanggal</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="tanggal" value="<?php echo date("Y-m-d")?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="" 
                        value="<?php 
                        if ($sqlcekpoin == null){ 
                            echo ('Belum di input');} 
                            else {
                                echo('sudah di input');} 
                        ?>" readonly>
                        </div>
                    </div>
                    
                  
                          </div>
                 
                </div>
              </div>
              <hr><a class="btn btn-default" href="javascript:history.back()"> Kembali</a>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<?php  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit"  class="btn btn-info">Proses</button>

            
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->
  <!-- Footer -->
  <?php $this->load->view('backend/include/base_footer'); ?>
  <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>
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