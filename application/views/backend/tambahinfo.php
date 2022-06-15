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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('backend/include/base_nav'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Tulis Informasi</h1>

      <form action="<?php echo base_url()?>backend/post_info/addinfo" method="POST">
               <div class="form-group">
                    <label class="">Judul</label>
                     <input type="text" class="form-control"  id="" name="judul" required="" maxlength="120" placeholder="Judul Informasi">
                  </div>

				<div class="form-group">
                    <label class="">Sub Judul</label>
                     <input type="text" class="form-control"  id="" name="subjudul" required="" maxlength="120" placeholder="SubJudul Informasi">
                  </div>
				
				<div>
					<label for="content">Konten</label>
					<input type="hidden" name="konten" value="<?php echo set_value('konten') ?>">
					<div id="editor"  name="konten" style="min-height: 160px;"><?php echo set_value('konten') ?></div>
				</div>

        
				<div>
					<button type="submit" name="draft" class="btn btn-info pull-rigth mt-2" value="false">Publish</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>
		
</div>
		</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php $this->load->view('backend/include/base_footer'); ?>

<!-- js -->
<?php $this->load->view('backend/include/base_js'); ?>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
			<script>
				var quill = new Quill('#editor', {
					theme: 'snow',
					modules: {
						toolbar: [
								[{ header: [1, 2, 3, 4, 5, 6, false] }],
								[{ font: [] }],
								["bold", "italic"],
								["link", "blockquote", "code-block", "image"],
								[{ list: "ordered" }, { list: "bullet" }],
								[{ script: "sub" }, { script: "super" }],
								[{ color: [] }, { background: [] }],
						]
				},
				});
				quill.on('text-change', function(delta, oldDelta, source) {
					document.querySelector("input[name='konten']").value = quill.root.innerHTML;
				});
</script>

</body>
</html>