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
							<p class="text-muted mb-0 hover-cursor">
								<a href="<?php echo base_url('promo')?>"><?php echo "Promo";?></a>&nbsp;/&nbsp;
							</p>
							<p class="text-primary mb-0 hover-cursor">
								<a href="<?php echo base_url('promo/').$this->uri->segment(2)?>"><?php echo $title; ?></a>
							</p>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end flex-wrap">
					</div>
				</div>
			</div>
					<div class="col-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Tambah Promo Baru</h4>

								<form class="forms-sample" action="<?php echo base_url('promo/confirm')?>" method="post" enctype="multipart/form-data">
									<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong>Warning</strong>
											<?php echo validation_errors(); ?>
											<?php echo $this->session->flashdata('failed'); ?>
										</div>
										<script>
                                            Swal.fire({
                                                type: 'error',
                                                title: 'Oops...',
                                                text: 'Something went wrong!'
                                            })
										</script>
									<?php }?>
									<div class="form-group">
										<label for="nama_promo">Nama Promo</label>
										<input type="text" class="form-control" id="nama_promo" placeholder="Nama Promo" name="nama_promo">
									</div>
									<div class="form-group">
										<label for="mekanisme_promo">Mekanisme Promo</label>
										<textarea class="form-control" id="mekanisme_promo" rows="5" name="mekanisme_promo" placeholder="Tata Cara Klaim Promo
- cara 1
- cara 2
- cara 3"></textarea>
									</div>
										<div class="form-group">
											<label for="periode_promo">Periode Promo</label>
											<input type="text" class="form-control" id="periode_promo" placeholder="e.g 20 Agustus - 30 September" name="periode_promo">
										</div>
									<div class="form-group">
										<label for="status_promo">Status Aktif Promo</label>
										<select class="form-control" id="status_promo" name="status_promo">
											<option value="0">Tidak Aktif</option>
											<option value="1">Aktif</option>
										</select>
									</div>
									<div class="form-group">
										<label>Upload Photo Promo</label>
										<input type="file" name="file_promo" class="file-upload-default">
										<div class="input-group col-xs-12">
											<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
											<span class="input-group-append">
												<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
											</span>
										</div>
									</div>
									<button type="submit" class="btn btn-primary mr-2">Submit</button>
									</form>
							</div>
						</div>
					</div>
		</div>
		<script src="<?php echo base_url('assets/dashboard_page/')?>js/file-upload.js"></script>
<?php
$this->load->view('dashboard_page/parts/V_Footer');
?>
