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
<!--							<p class="text-muted mb-0 hover-cursor">-->
<!--								<a href="--><?php //echo base_url('partner/')?><!--">--><?php //echo "Partner";?><!--</a>&nbsp;/&nbsp;-->
<!--							</p>-->
							<p class="text-primary mb-0 hover-cursor">
								<a href="<?php echo base_url('data_artist')?>"><?php echo $title;?></a>
							</p>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end flex-wrap">
<!--						<a href="--><?php //echo base_url('')."partner/add"?><!--">-->
<!--							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Partner</button>&nbsp;-->
<!--						</a>-->
						<a href="<?php echo base_url('data_artist')?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-arrow-bottom-left"></i> Back</button>&nbsp;
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"> Form Edit <?php echo $title?></h4>
						<form class="forms-sample" action="<?php echo base_url('artist/edit/auth/').$getArtistEdit[0]['id_artists']?>" method="post" enctype="multipart/form-data">
							<?php if(validation_errors()||$this->session->flashdata('failed')){ ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Warning</strong><br>
									<?php echo validation_errors(); ?><br>
									<?php echo $this->session->flashdata('failed'); ?>
								</div>
							<?php }?>
							<div class="form-group">
								<label for="nama_artist">Nama Artist</label>
								<input value="<?php echo $getArtistEdit[0]['nama_artist']?>"
									type="text" class="form-control" id="nama_artist" placeholder="Nama Artist" name="nama_artist">
							</div>
							<div class="form-group">
								<label for="bio">Bio</label>
								<textarea placeholder="Bio" class="form-control" id="bio" name="bio" rows="4"><?php echo $getArtistEdit[0]['bio']?></textarea>
							</div>
							<div class="form-group">
								<label>Upload Photo Artist</label>
								<input type="file" name="photo_artist" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Photo Artist">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
<!--							<div class="form-group">-->
<!--								<label for="partner">Partner</label>-->
<!--								<select class="form-control" id="partner" name="partner">-->
<!--									<option value="--><?php //echo $getArtistEdit[0]['partner_id']?><!--">--><?php //echo $getArtistEdit[0]['nama_partner']?><!--</option>-->
<!--									--><?php
//									foreach ($getPartner as $p){
//										?>
<!--										<option-->
<!--											value="--><?php //echo $p->id_partner;?><!--"-->
<!--											label="--><?php //echo $p->nama_partner;?><!--"-->
<!--										>-->
<!--										</option>-->
<!--									--><?php //} ?>
<!--								</select>-->
<!--							</div>-->
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
