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
      <h1 class="h3 mb-4 text-gray-800">View Pengiriman</h1>
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-info">KODE Pengiriman [<?php echo $kirim['kd_kirim']; ?>]  </h6>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url().'backend/kirim_barang/updatekirim' ?>" method="post" enctype="multipart/form-data">
             
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                <input type="hidden" class="form-control" name="kd_kirim" value="<?php echo $kirim['kd_kirim'] ?>" readonly>
                <input type="hidden" class="form-control" name="nama_pengirim" value="<?php echo $kirim['nama_pengirim'] ?>" readonly>
                <input type="hidden" class="form-control" name="alamat_pickup" value="<?php echo $kirim['alamat_pickup'] ?>" readonly>
                  <label >Kode Pengiriman <b><?php echo $kirim['kd_kirim'] ?></b></label>
                  <p>Nama Pengirim <b><?php echo $kirim['nama_pengirim']; ?></b></p>
                  <p>Alamat Pickup [<b><?php echo $kirim['alamat_pickup']; ?></b>]</p>
                  <hr>

                    <div class="row form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama Penerima</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_penerima" value="<?php echo $kirim['nama_penerima'] ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="nama" class="col-sm-4 control-label">Alamat Penerima</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat_penerima" value="<?php echo $kirim['alamat_penerima'] ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Telepon Penerima</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="telepon" value="<?php echo $kirim['telepon'] ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Jenis Barang</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="jenis_barang" value="<?php echo $kirim['jenis_barang'] ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Keterangan</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="keterangan" value="<?php echo $kirim['keterangan'] ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Tanggal</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control datepicker" name="tanggal" id='date'  value="<?php echo $kirim['tanggal'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Harga</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="harga" value="<?php echo $kirim['harga'] ?>"  >
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="" class="col-sm-4 control-label">Mobil</label>
                        <div class="col-sm-8">
                            <?php if ($kirim['status'] == '1') { ?>
                            <select class="form-control" name="mobil" >
                            <option value="<?php echo $kirim['kd_mobil'] ?>" selected disabled="">-Pilih Mobil-</option>
                            <?php foreach ($mobil as $row ) {?>
                            <option value="<?php echo $row['kd_mobil'] ?>" ><?php echo strtoupper($row['nama_mobil']); ?> -<?php if ($row['status_mobil'] == '1') { ?>
                                Online
                                <?php } else { ?>
                                Offline
                            <?php } ?>- </option>
                            <?php } ?>
                            </select>
                             <?php } elseif($kirim['status'] == '2') { ?>
                                <input type="text" class="form-control" name="mobil" value="<?php echo $kirim['nama_mobil'] ?>" readonly>
                        <?php } ?>
                        </div>
                    </div>
                 
                
                
                
                  <div class="row form-group">
                    <label for="" class="col-sm-4 control-label">Status</label>
                    <div class="col-sm-8">
                       <?php if ($kirim['status'] == '1') { ?>
                      <select class="form-control" name="status" required>
                          <option value='' selected disabled>Belum Bayar</option>
                          <option value='2'>Sudah Bayar dan Approve</option>
                           </select>
                          <?php } elseif($kirim['status'] == '2') { ?>
                            <p class="btn "><b class="btn btn-default">Sudah Bayar dan Approve</b></p>

                        <?php } ?>
                     
                    
                  </div>
                          </div>
                 
                </div>
              </div>
              <hr><a class="btn btn-default" href="<?php echo base_url().'backend/kirim_barang' ?>"> Kembali</a>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<?php if ($kirim['status'] == '1') { ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit"  class="btn btn-info">Proses</button>
            <?php }else{ ?>
              <a class="btn btn-success" href="<?php echo base_url('backend/kirim_barang/cetak/'.$kirim['kd_kirim'])?>"> Cetak Bukti Kirim</a>
                        <?php } ?>
            </div>
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