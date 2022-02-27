<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" href="<?php echo base_url()?>/assets/backend/img/logomobil.png" type="image/gif">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Profile Saya</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<style type="text/css">
		.text-block {
		position: absolute;
		bottom: 20px;
		right: 20px;
		background-color: black;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
		}
		</style>
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<section class="generic-banner relative">
			<div class="container">
				<div class="section-top-border">
					<h3 class="mb-30" align="center">Ganti Password</h3>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6">
							<!-- Default Card Example -->
							<div class="card" align="left">
								<div class="card-header">
									<i class="fa fa-key"></i> Password
								</div>
								<div class="card-body">
									<form ction="<?php echo base_url('admin_po/changepassword') ?>" method="post">
									 <?php echo $this->session->flashdata('gagal'); ?>
									  <div class="form-group">
									  	<div class="form-label-group">
									    <input type="password" class="form-control"  name="currentpassword" placeholder="Password Sebelumnya">
									     <?php echo form_error('currentpassword'),'<small class="text-danger pl-3">','</small>'; ?>
										</div>
									   
									  </div>
									  <div class="form-group">
									  	<div class="form-label md-5">
									    <input type="password" class="form-control" required="" name="new_password1" placeholder="Password Baru"><?php echo form_error('new_password1'),'<small class="text-danger pl-3">','</small>'; ?>
										</div>
									    
									  </div>
									  <div class="form-group">
									  	<div class="form-label md-5">
									    <input type="password" class="form-control" required="" name="new_password2" placeholder="Ulangi Password">
										</div>
									  </div>
									<button type="submit" class="btn btn-info pull-right" >Ganti Password</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- js -->
				<?php $this->load->view('frontend/include/base_js'); ?>
			</body>
		</html>