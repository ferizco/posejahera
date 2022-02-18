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
		<title>Login Page</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<!--
		CSS
		============================================= -->
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body class="">
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div
            class="login100-form-title"
            style="background-image: url(assets/frontend/img/lantrawisata.png)"
          >
            <span class="login100-form-title-1"> Log In </span>
          </div>
          <?php echo $this->session->flashdata('pesan'); ?>
          <form
            action="<?php echo base_url() ?>login/cekuser"
            method="post"
            class="login100-form validate-form"
          >
            <div
              class="wrap-input100 validate-input m-b-26"
              data-validate="Username is required"
            >
              <span class="label-input100">Username</span>
              <input
                class="input100"
                type="text"
                name="username"
                placeholder="Enter username"
              />
              <span class="focus-input100"></span>
            </div>

            <div
              class="wrap-input100 validate-input m-b-18"
              data-validate="Password is required"
            >
              <span class="label-input100">Password</span>
              <input
                class="input100"
                type="password"
                name="password"
                placeholder="Enter password"
              />
              <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">
              <div class="contact100-form-checkbox">
                <input
                  class="input-checkbox100"
                  id="ckb1"
                  type="checkbox"
                  name="remember-me"
                />
                <label class="label-checkbox100" for="ckb1">
                  Remember me
                </label>
              </div>

              <div>
                <a href="#" data-toggle="modal" data-target="#forgotModal" class="txt1"> Forgot Password? </a>
              </div>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
		<!-- start footer Area -->
		<?php $this->load->view('frontend/include/base_footer'); ?>
		<!-- js -->
		<?php $this->load->view('frontend/include/base_js'); ?>

		 <!-- Modal -->
			<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Lupa Password?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Silahkan Hubungi PO Sejahtera untuk mendapatkan password baru
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
			</div>

	</body>
</html>