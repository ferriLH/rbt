<?php
$this->load->view('dashboard_page/parts/V_Header');
$this->load->view('dashboard_page/parts/V_Navigation');
?>
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
								<a href="<?php echo base_url().$this->uri->segment(1)."/add"?>"><?php echo $title;?></a>
							</p>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end flex-wrap">
						<a href="<?php echo base_url('')."partner/"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-arrow-bottom-left"></i> Back</button>&nbsp;
						</a>
						<a href="<?php echo base_url('')."artist/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Artist</button>&nbsp;
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"> Form Add <?php echo $title?></h4>
						<form class="forms-sample" action="<?php echo base_url('partner/add/auth')?>" method="post" enctype="multipart/form-data">
							<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Warning</strong><br>
									<?php echo validation_errors(); ?>
									<?php echo $this->session->flashdata('failed'); ?>
								</div>
							<?php }?>
							<div class="form-group">
								<label for="nomor_induk">Nomor Induk</label>
								<input type="text" class="form-control" id="nomor_induk" placeholder="Nomor Induk" name="nomor_induk">
							</div>
							<div class="form-group">
								<label for="nama_partner">Nama Partner</label>
								<input type="text" class="form-control" id="nama_partner" placeholder="Nama Partner" name="nama_partner">
							</div>
							<div class="form-group">
								<label for="email_partner">Email Partner</label>
								<input type="email" class="form-control" id="email_partner" placeholder="Email Partner" name="email_partner">
							</div>
							<div class="form-group">
								<label for="no_telpon">Nomor Telpon</label>
								<input type="text" class="form-control" id="no_telpon" placeholder="Nomor Telpon" name="no_telpon">
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
								<div class="col-sm-4">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="jk" id="pria" value="pria" checked>
											Pria
										</label>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="jk" id="wanita" value="wanita">
											Wanita
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea placeholder="Alamat" class="form-control" id="alamat" name="alamat" rows="4"></textarea>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->
	<!-- Custom js for this page-->
	<script src="<?php echo base_url('assets/dashboard_page/')?>js/file-upload.js"></script>
<?php
$this->load->view('dashboard_page/parts/V_Footer');
