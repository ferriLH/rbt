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
						<a href="<?php echo base_url('')."album/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-album"></i> Add New Album</button>&nbsp;
						</a>
						<a href="<?php echo base_url('music/genre')?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-arrow-bottom-left"></i> Back</button>
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
						<form class="forms-sample" action="" method="post">
							<div class="form-group">
								<label for="nama_genre">Nama Genre</label>
								<input type="text" name="nama_genre" class="form-control" id="nama_genre" placeholder="Nama Genre">
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

<?php
$this->load->view('dashboard_page/parts/V_Footer');
