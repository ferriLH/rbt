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
								<a href="<?php echo base_url('partner')?>"><?php echo "Partner";?></a>&nbsp;/&nbsp;
							</p>
							<p class="text-primary mb-0 hover-cursor">
								<a href="<?php echo base_url().$this->uri->segment(1)?>"><?php echo $title;?></a>
							</p>
						</div>
					</div>
					<div class="d-flex justify-content-between align-items-end flex-wrap">
						<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-album"></i> Add New Partner</button>&nbsp;
						<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-music-circle"></i> Add New Artist</button>&nbsp;
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<p class="card-title">Data <?php echo $title?></p>
						<div class="table-responsive">
							<table id="data-music" class="table table-hover table-striped">
								<thead>
								<tr>
									<th>Nama Partner</th>
									<th>Nama Artist</th>
									<th>Bio</th>
									<th>Picture Artist</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($getArtistPartner as $a){?>
									<tr>
										<td><?php echo $a->nama_partner?></td>
										<td><?php echo $a->nama_artist?></td>
										<td><?php echo mb_strimwidth($a->bio, 0, 20, "...")?></td>
										<td><?php echo $a->picture_artist?></td>
										<td>
											<a href="<?php echo base_url('');echo "";?>" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="mdi mdi-playlist-edit"></i>
                                            </span>
												<span class="text">Edit</span>
											</a>
											<a href="<?php echo base_url('');echo "";?>" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="mdi mdi-delete"></i>
                                            </span>
												<span class="text">Hapus</span>
											</a>
										</td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->

<?php
$this->load->view('dashboard_page/parts/V_Footer');