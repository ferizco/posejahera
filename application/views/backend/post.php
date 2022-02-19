<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title ?></title>
    <!-- css -->
    <?php $this->load->view('backend/include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">List Informasi</h1>

		<div class="card-header py-3">
          <a href="<?php echo base_url()?>backend/post_info/viewtambahinfo" class="btn btn-primary pull-right" >
          + Tambah Informasi
          </a>
        </div>

			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Created by Admin</th>
						<th style="width: 18%;" class="text-center">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1 ; foreach($post as $row): ?>
					<tr>
						<td>
							<div><?php echo($row['judul']) ?></div>
							<div class="text-gray"><small><?php echo($row['created_at'])  ?><small></div>
						</td>
						<td>
							<div><?php echo($row['nama_user']) ?></div>
						</td>
						<td>
							<div class="action">
								<a href="<?php echo base_url('backend/post_info/showinfo/'.$row['kd_info'])?>" class="btn btn-primary" target="_blank" role="button">Preview</a>
								<a href="#" 
									data-delete-url="<?php echo base_url('backend/post_info/delete/'.$row['kd_info'])?>" 
									class="btn btn-danger" 
									role="button"
									onclick="deleteConfirm(this)">Delete</a>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>

		</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->load->view('backend/include/base_footer'); ?>

<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Apakah yakin akan menghapus informasi ini?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	

</body>
</html>