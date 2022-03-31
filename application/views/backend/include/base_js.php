<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/backend/js/demo/datatables-demo.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url() ?>assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
  
  
  <script type="text/javascript">
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
  </script>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tentang PO Sejahtera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        PO Sejahtera <br>
        Aplikasi Pemesanan Tiket dan Pengiriman Barang <br>
        Lantra Wisata Travel
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
