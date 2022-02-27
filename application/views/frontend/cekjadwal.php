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
		<title>PO Sejahtera</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<?php $this->load->view('frontend/include/base_css'); ?>
		<style>
			/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 640px){
 		 table {
   			 width: 100%;
			font-size: 11px;
  				}
		}
		
			</style>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
						<div class="col-lg-15">
						<!-- Default Card Example -->
						<div class="card mb-5">
							<div class="card-header">
								<i class="fa fa-list-alt"></i> Daftar Berangkat
							</div>
							<div class="card-body">
								<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Trayek [Kode Jadwal]</th>
											<th>Loket Tujuan</th>
											<th scope="col">Hari [jam]</th>
											<th scope="col">Kursi Tersedia</th>
											<th>Harga</th>
											<th scope="col">Tiket</th>
										</tr>
									</thead>
									<tbody>
										<?php for ($i=0; $i < count($jadwal)  ; $i++) { ?>
										<tr>
											<td><?php echo strtoupper($asal['kota_tujuan'])." - ".strtoupper($jadwal[$i]['kota_tujuan'])." [".$jadwal[$i]['kd_jadwal']."]"; ?></td>
											<td><?php echo '['.$jadwal[$i]['nama_loket'].']'.$jadwal[$i]['loket_tujuan'] ?></td>
											<td><?php echo hari_indo(date('N',strtotime($tanggal))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$tanggal.''))).', '.date('H:i',strtotime($jadwal[$i]['jam_berangkat_jadwal'])); ?></td>
											<td><?php echo $jadwal[$i]['kapasitas_mobil']-$kursi[$i][0]['count(no_kursi_order)'] ?></td>
											<td>Rp <?php echo number_format((float)($jadwal[$i]['harga_jadwal']),0,",","."); ?>,-</td>
											<td><a href="<?php echo base_url('tiket/beforebeli/').$jadwal[$i]['kd_jadwal'].'/'.$asal['kd_tujuan'].'/'.$tanggal ?>" class=" btn btn-info">Pilih</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								</div>
								<a href="<?php echo base_url() ?>tiket" class="btn btn-info pull-left">Kembali </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End banner Area -->
				<!-- End Generic Start -->
				<!-- start footer Area -->
				<?php $this->load->view('frontend/include/base_footer'); ?>
				<!-- js -->
				<?php $this->load->view('frontend/include/base_js'); ?>
			</body>
		</html>