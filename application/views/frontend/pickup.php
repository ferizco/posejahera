<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" href="<?php echo base_url()?>/assets/img/logomobil.png" type="image/gif">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Pickup Paket</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-6">
						<!-- Default Card Example -->
						<div class="card ">
							<div class="card-header">
								<i class="fa fa-address-card-o"></i> Pickup Paket
							</div>
							<div class="card-body">
								<form action="<?php echo base_url() ?>pickup/addpickup" method="post">
									<div class="form-group">
										<div class="form-group">
											<label for="nama">Nama Pengirim</label>
												<input type="text" name="nama" class="form-control" required="" placeholder="Nama Anda" value="<?php echo $this->session->userdata('nama_lengkap') ?>" readonly>
										</div>

										<div class=" form-group">
											<label for="alamat pickup">Alamat Pickup</label>
											<div class="form-label-group">
												<input type="text" name="alamat_pickup" class="form-control" required="" placeholder="Alamat Pickup / Jemput"  >
											</div>
										</div>
                                        <div class="form-group">
											<label for="nama penerima">Nama Penerima</label>
											<div class="form-label-group">
												<input type="text" name="nama_penerima" class="form-control" required="" placeholder="Nama Penerima"  >
											</div>
										</div>
                                        <div class="form-group">
											<label for="alamat penerima">Alamat Penerima</label>
											<div class="form-label-group">
												<input type="text" name="alamat_penerima" class="form-control" required="" placeholder="Alamat Lengkap Penerima"  >
											</div>
										</div>
										<div class="form-group">
											<label for="jenis barang">Jenis Barang</label>
											<div class="form-label-group">
												<input type="text" name="jenis_barang" class="form-control" required="" placeholder="Jenis Barang">
											</div>
										</div>
                                        <div class="form-group">
											<label for="telepon penerima">Telepon Penerima</label>
											<div class="form-label-group">
												<input type="text" name="telepon" class="form-control" required="" placeholder="Telepon Penerima">
											</div>
										</div>
                                        <div class="form-group">
                                            <label  class="">Keterangan</label>
                                            <select class="form-control" name="keterangan">
                                            <option value="Diantar ke Tujuan">Diantar Ke Tujuan</option>
                                            <option value="Ambil di Loket">Ambil di Loket</option>
                                            </select>
                                        </div>

									</div>
									<button class="btn btn-info btn-block">Kirim</button>
								</form>
								
							</div>
						</div>
					</div>
				</section>
				<!-- End banner Area -->
				<!-- start footer Area -->
				<?php $this->load->view('frontend/include/base_footer'); ?>
				<!-- js -->
				<?php $this->load->view('frontend/include/base_js'); ?>
			</body>
		</html>