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
								<a href="<?php echo base_url('music')?>"><?php echo "Music";?></a>&nbsp;/&nbsp;
							</p>
							<p class="text-primary mb-0 hover-cursor">
								<a href="<?php echo base_url().$this->uri->segment(1)."/add"?>"><?php echo $title;?></a>
							</p>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end flex-wrap">
						<a href="<?php echo base_url('')."song/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-music-circle"></i> Add New Song</button>&nbsp;
						</a>
						<a href="<?php echo base_url('music/album')?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-arrow-bottom-left"></i> Back</button>&nbsp;
						</a>
						<a href="<?php echo base_url('')."genre/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Genre</button>
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
						<form class="forms-sample" enctype="multipart/form-data" method="post" action="<?php echo base_url('album/add/auth')?>">
							<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Warning</strong><br>
									<?php echo validation_errors(); ?><br>
									<?php echo $this->session->flashdata('failed'); ?>
								</div>
							<?php }?>
							<div class="form-group">
								<label for="nama_album">Nama Album</label>
								<input type="text" class="form-control" id="nama_album" placeholder="Nama Album" name="nama_album">
							</div>
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="photo_album" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="artist">Artist</label>
								<select class="form-control" id="artist" name="artist">
									<option value="0">- choose -</option>
									<?php
									foreach ($getArtist as $a){
										?>
										<option
											value="<?php echo $a->id_artists;?>"
											label="<?php echo $a->nama_artist;?>"
										>
										</option>
									<?php } ?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button class="btn btn-light">Cancel</button>
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
