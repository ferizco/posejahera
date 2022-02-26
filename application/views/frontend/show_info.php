<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="assets/img/logomobil.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Informasi </title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
		<?php $this->load->view('frontend/include/base_css'); ?>
		<style>
			/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px){
 		 img {
   			 width: 100%;
  				}
		}
			</style>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
        <div class="container-fluid">
		<section class=" section-gap relative">
			<div class="overlay overlay-bg"> </div>
			<div class="container">
				
				<div class="row d-flex justify-content">
	
            <article class="col-lg-10  col-md-4 col-sm-4 article">

		    <h1 style="color: #8490ff" class="post-title"><?php echo $post['judul'] ?></h1>
		    <div class="post-meta mt-3">
			    Di Posting pada <?php echo $post['created_at'] ?>
		    </div>
	        </article>
			
			</div>

            <div class="container">
				<div class="row">
              
                     <div class="col-lg-10  col-md-4 col-sm-4 article">
                         <div style="text-align:justify" class="post-body mt-5">
			            <?php echo $post['konten']?>
		                </div>
					</div>
                </div>

         
			</div>

				</div>
		</section>
        </div>
    
			<!-- End banner Area -->
			<!-- start footer Area -->
			<?php $this->load->view('frontend/include/base_footer'); ?>
			<!-- js -->
			<?php $this->load->view('frontend/include/base_js'); ?>
		</body>
	</html>