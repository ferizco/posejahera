<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="assets/img/logobus.png">
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
		
		<!-- CSS ============================================= -->
		<style type="text/css">
		.combined {
		-webkit-text-stroke: 1px black;
		color: white;}
		
		</style>
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?> 
        
		<!-- start banner Area -->
		<section class="banner-area relative section-gap relative"  id="home">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center">
					<div class="banner-content col-lg-7 col-md-12">
							<h2 class="combined" >
						PO Sejahtera<br>
                        Lantra Wisata Travel<br>
						Biro Perjalanan Wisata yang Aman, Murah, dan Nyaman<br><br>				
							</h2>
						<a href="<?php echo base_url() ?>tiket" class="primary-btn header-btn text-uppercase">Cari Tiket Travel</a>
					</div>
				</div>
			</div>
		</section>

		<section class=" service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 text-center header-text">
				<h1>INFORMASI DAN EVENT </h1>
				</div>
				</div>

				<?php $i = 1 ; foreach($post as $row): ?>
				<div class="card mt-3">
				<div class="card-header">
					<?php echo $row['created_at'] ?>
				</div>
				<div class="card-body">
					<h5 class="card-title text-info"><?php echo $row['judul'] ?></h5>
					<p class="card-text mb-2"><?php echo $row['subjudul'] ?></p>
					<a href="<?php echo base_url('home/showinfo/'.$row['kd_info'])?>" class="btn btn-info">Detail</a>
				</div>
				</div>
				<?php endforeach ?>

			</div>
		</section>
		
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>PESAN TIKET DENGAN MUDAH</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/a1.png" width="100" height="100" alt="">
							<h4>Langkah Pertama Pilih Tiket
							</h4>
							<p>
								Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/a3.png" width="100" height="100" alt="">
							<h4>Langkah Kedua Pilih Mobil dan Tempat Duduk</h4>
							<p>
								Pilih Mobil, tempat duduk, tempat keberangkatan, tujuan, isi rincian penumpang dan klik 'Pembayaran'
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/a2.png" width="100" height="100" alt="">
							<h4>Langkah Ketiga Lakukan Pembayaran</h4>
							<p>
								Pembayaran dapat dilakukan melalui transfer ATM atau Internet banking.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End service Area -->
		<!-- End feature Area -->
		<!-- End Generic Start -->
		<!-- start footer Area -->
		<?php $this->load->view('frontend/include/base_footer'); ?>
		<!-- js -->
		<?php $this->load->view('frontend/include/base_js'); ?>
	</body>
</html>