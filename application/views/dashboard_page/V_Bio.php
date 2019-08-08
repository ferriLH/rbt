<?php
$sess_data['id_admin'] = $getBio[0]['id_admin'];
$sess_data['nama_admin'] = $getBio[0]['nama_admin'];
$sess_data['email_admin'] = $getBio[0]['email_admin'];
$this->session->set_userdata($sess_data);

$this->load->view('dashboard_page/parts/V_Header');
$this->load->view('dashboard_page/parts/V_Navigation');
?>
<?php if($this->session->flashdata('sukses')){?>
	<script>
        Swal.fire(
            'Update Success',
            ':)',
            'success'
        )
	</script>
<?php }?>
	<!-- partial -->
	<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12 grid-margin">
				<div class="d-flex justify-content-between flex-wrap">
					<div class="d-flex align-items-end flex-wrap">
						<div class="d-flex">
							<i class="mdi mdi-home text-muted hover-cursor"></i>
							<p class="text-muted mb-0 hover-cursor">
								&nbsp;/&nbsp;<a href="<?php echo base_url('dashboard')?>"><?php echo "Dashboard";?></a>&nbsp;/&nbsp;
							</p>
							<p class="text-primary mb-0 hover-cursor">
								<a href="<?php echo base_url().$this->uri->segment(1)."/bio/".$this->session->userdata('id_admin')?>"><?php echo $title;?></a>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"> Profile</h4>
						<form class="forms-sample" action="<?php echo base_url('dashboard/bioAuth/').$getBio[0]['id_admin']?>" method="post" enctype="multipart/form-data">
							<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Warning</strong><br>
									<?php echo validation_errors(); ?>
									<?php echo $this->session->flashdata('failed'); ?>
								</div>
							<?php }?>
							<div class="form-group">
								<label for="nomor_induk">Nama</label>
								<input value="<?php echo $getBio[0]['nama_admin']?>"
									type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
							</div>
							<div class="form-group">
								<label for="email_partner">Email</label>
								<input value="<?php echo $getBio[0]['email_admin']?>"
									type="email" class="form-control" id="email" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Kosongkan Password Jika Tidak Akan di Update" name="password">
							</div>
							<div class="form-group">
								<label for="confirm-password">Confirm Password</label>
								<input type="password" class="form-control" id="confirm-password" placeholder="Kosongkan Password Jika Tidak Akan di Update" name="confirm-password">
							</div>

							<button type="submit" class="btn btn-primary mr-2">Update</button>
							<button type="reset" class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->

<?php
$this->load->view('dashboard_page/parts/V_Footer');
