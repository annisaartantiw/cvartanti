<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div class="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="content-wrapper">

		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/skill/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $skill->skill_id ?>" />
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input value="<?php echo $skill->nama ?>" type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>          
                  <div class="form-group">
                    <label for="image">Image</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/skill/'. $skill->image ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $skill->image ?>" />
                        <input type="file" class="custom-file-input <?php echo form_error('image') ? 'is-invalid':'' ?>" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('image') ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
    
</body>
</html>