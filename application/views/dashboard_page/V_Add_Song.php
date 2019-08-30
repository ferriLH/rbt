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
						<a href="<?php echo base_url('music/song')?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-arrow-bottom-left"></i> Back</button>&nbsp;
						</a>
						<a href="<?php echo base_url('')."album/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-album"></i> Add New Album</button>&nbsp;
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
						<form class="forms-sample" action="<?php echo base_url('song/add/auth')?>" method="post" enctype="multipart/form-data">
							<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Warning</strong><br>
									<?php echo validation_errors(); ?><br>
									<?php echo $this->session->flashdata('failed'); ?>
								</div>
							<?php }?>
							<div class="form-group">
								<label for="judul_lagu">Judul Lagu</label>
								<input type="text" class="form-control" id="judul_lagu" placeholder="Judul Lagu" name="judul_lagu">
							</div>
							<div class="form-group">
								<label for="bio">Harga XL</label>
								<input type="number" placeholder="Harga XL" class="form-control" id="harga_xl" name="harga_xl">
							</div>
							<div class="form-group">
								<label for="bio">Harga TSEL 3 Hari</label>
								<input type="number" placeholder="Harga TSEL 3 Hari" class="form-control" id="harga_tsel1" name="harga_tsel1">
							</div>
							<div class="form-group">
								<label for="bio">Harga TSEL 7 Hari</label>
								<input type="number" placeholder="Harga TSEL 7 Hari" class="form-control" id="harga_tsel2" name="harga_tsel2">
							</div>
							<div class="form-group">
								<label for="bio">Harga TSEL 14 Hari</label>
								<input type="number" placeholder="Harga TSEL 14 Hari" class="form-control" id="harga_tsel3" name="harga_tsel3">
							</div>
							<div class="form-group">
								<label for="bio">Harga TSEL 30 Hari</label>
								<input type="number" placeholder="Harga TSEL 30 Hari" class="form-control" id="harga_tsel4" name="harga_tsel4">
							</div>
							<div class="form-group">
								<label for="bio">Harga INDOSAT</label>
								<input type="number" placeholder="Harga INDOSAT" class="form-control" id="harga_indosat" name="harga_indosat">
							</div>
							<div class="form-group">
								<label for="kode_registration">Kode Registrasi XL</label>
								<input type="text" placeholder="Kode Registrasi" class="form-control" id="xl" name="xl">
							</div>
							<div class="form-group">
								<label for="kode_registration">Kode Registrasi TSEL 3 Hari</label>
								<input type="text" placeholder="Kode Registrasi Telkomsel 3 Hari" class="form-control" id="tsel1" name="tsel1">
							</div><div class="form-group">
								<label for="kode_registration">Kode Registrasi TSEL 7 Hari</label>
								<input type="text" placeholder="Kode Registrasi" class="form-control" id="tsel2" name="tsel2">
							</div><div class="form-group">
								<label for="kode_registration">Kode Registrasi TSEL 14 Hari</label>
								<input type="text" placeholder="Kode Registrasi" class="form-control" id="tsel3" name="tsel3">
							</div><div class="form-group">
								<label for="kode_registration">Kode Registrasi TSEL 30 Hari</label>
								<input type="text" placeholder="Kode Registrasi" class="form-control" id="tsel4" name="tsel4">
							</div>
							<div class="form-group">
								<label for="kode_registration">Kode Registrasi INDOSAT</label>
								<input type="text" placeholder="Kode Registrasi" class="form-control" id="indosat" name="indosat">
							</div>
							<div class="form-group">
								<label>Upload Music</label>
								<input type="file" name="file_lagu" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Music">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="album">Album</label>
								<select data-live-search="true" class="form-control selectpicker" id="album" name="album">
									<option value="0">- choose -</option>
									<?php foreach ($getAlbum as $a){?>
									<option data-tokens="<?php echo $a->nama_album?>" value="<?php echo $a->id_album?>"><?php echo $a->nama_album." - ".$a->nama_artist?></option>
									<?php }?>
								</select>
							</div>
							<div class="form-group">
								<label for="genre">Genre</label>
								<select data-live-search="true" class="form-control selectpicker" id="genre" name="genre">
									<option value="0">- choose -</option>
									<?php foreach ($getGenre as $g){?>
									<option data-tokens="<?php echo $g->genre?>" value="<?php echo $g->id?>"><?php echo $g->genre?></option>
									<?php }?>
								</select>
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
