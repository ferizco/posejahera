<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta http-equiv="refresh" content="30" /> -->
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
          <h1 class="h3 mb-4 text-gray-800">Dashboard Panel PO Sejahtera</h1>
          <!-- Content Row -->
          <div class="row">

            <!-- Pending Order Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?php echo base_url('backend/order_tiket') ?>">Pending Order Tiket</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $order[0]['count(kd_order)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Tiket Terjual Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?php echo base_url('backend/tiket') ?>">Total Tiket terjual</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tiket[0]['count(kd_tiket)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-qrcode fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Pengiriman Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?php echo base_url('backend/kirim_barang') ?>">Total Pengiriman</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kirim[0]['count(kd_kirim)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-cart-plus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div>

          <div class="row">


          <!-- List Konfirmasi Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?php echo base_url('backend/konfirmasi') ?>">List Konfirmasi</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $konfirmasi[0]['count(kd_konfirmasi)']; ?></div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- Total Pelanggan Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="#">Total Pelanggan</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pelanggan[0]['count(kd_pelanggan)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- Total Feedback Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?php echo base_url('backend/feedback_plg') ?>">Total Feedback</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $feedback[0]['count(id)']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-envelope fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

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

</body>

</html>
