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
									<a href="<?php echo base_url().$this->uri->segment(1)?>"><?php echo $title;?></a>
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
							<a href="<?php echo base_url('')."genre/add"?>">
								<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Genre</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php if($this->session->flashdata('sukses')){ ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Information</strong><br>
					<?php echo $this->session->flashdata('sukses'); ?>
				</div>
			<?php }?>
			<div class="row">
				<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body dashboard-tabs p-0">
							<ul class="nav nav-tabs px-4" role="tablist">
								<li class="nav-item">
									<a class="nav-link <?php if ($flag=='song'||empty($flag)) {echo 'active';}else{echo '';}?>" id="song-tab" data-toggle="tab" href="#song" role="tab" aria-controls="overview" aria-selected="<?php if ($flag=='song'||empty($flag)) {echo 'true';}else{echo 'false';}?>">Song</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if ($flag=='album') {echo 'active';}else{echo '';}?>" id="album-tab" data-toggle="tab" href="#album" role="tab" aria-controls="overview" aria-selected="<?php if ($flag=='album') {echo 'true';}else{echo 'false';}?>">Album</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php if ($flag=='genre') {echo 'active';}else{echo '';}?>" id="genre-tab" data-toggle="tab" href="#genre" role="tab" aria-controls="overview" aria-selected="<?php if ($flag=='genre') {echo 'true';}else{echo 'false';}?>">Genre</a>
								</li>
							</ul>
							<div class="tab-content py-0 px-0">
								<div class="tab-pane fade <?php if ($flag=='song'||empty($flag)) {echo 'show active';}else{echo '';}?>" id="song" role="tabpanel" aria-labelledby="unread-tab">
									<div class="d-flex flex-wrap justify-content-xl-between" style="padding: 10px 10px">
										<table id="table-song" class="table table-hover table-striped" >
											<thead>
											<tr>
												<th>Artist</th>
												<th>Album</th>
												<th>Judul</th>
												<th>Harga</th>
												<th>Genre</th>
												<th>Kode Registrasi</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											<?php
											foreach ($getSong as $s){?>
												<tr>
													<td><?php echo $s->nama_artist?></td>
													<td><?php echo $s->nama_album?></td>
													<td><?php echo $s->judul?></td>
													<td><?php echo "Rp. ".$s->harga?></td>
													<td><?php echo $s->genre?></td>
													<td><?php echo $s->ketik?></td>
													<td>
														<a href="<?php echo base_url('');echo "";?>" class="btn btn-warning btn-icon-split">
															<span class="icon text-white">
																<i class="mdi mdi-playlist-edit"></i>
															</span>
															<span class="text">Edit</span>
														</a>
														<button data-target="<?php echo base_url('');echo "delete-song/".$s->id_lagu;?>"
																class="btn btn-danger btn-icon-split delete-song">
															<span class="icon text-white"><i class="mdi mdi-delete"></i></span>
															<span class="text">Hapus</span>
														</button>
													</td>
												</tr>
												<?php
											}
											?>
											<script>
                                                $(function() {
                                                    $('.delete-song').click(function(e) {
                                                        e.preventDefault();
                                                        var href = $(this).attr('data-target');
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You will delete this forever!",
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: "Yes, i'm sure!"
                                                        }).then((result) => {
                                                            if (result.value) {
                                                                Swal.fire(
                                                                    'Deleted!',
                                                                    'Your file has been deleted.',
                                                                    'success'
                                                                )
                                                                document.location.href = href;
                                                            }
                                                        })
                                                    });
                                                });
											</script>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade <?php if ($flag=='album') {echo 'show active';}else{echo '';}?>" id="album" role="tabpanel" aria-labelledby="read-tab">
									<div class="d-flex flex-wrap justify-content-xl-between" style="padding: 10px 10px">
										<table id="table-album" class="table table-hover table-striped" >
											<thead>
											<tr>
												<th>Artist</th>
												<th>Nama Album</th>
												<th>Picture Album</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											<?php
											foreach ($getAlbum as $a){?>
												<tr>
													<td><?php echo $a->nama_artist?></td>
													<td><?php echo $a->nama_album?></td>
													<td><img src="<?php echo base_url('assets/foto_album/').$a->picture_album?>" alt="Picture Album"></td>
													<td>
														<a href="<?php echo base_url('');echo "";?>" class="btn btn-warning btn-icon-split">
															<span class="icon text-white">
																<i class="mdi mdi-playlist-edit"></i>
															</span>
															<span class="text">Edit</span>
														</a>
														<button data-target="<?php echo base_url('');echo "delete-album/".$a->id_album;?>"
																class="btn btn-danger btn-icon-split delete-album">
															<span class="icon text-white"><i class="mdi mdi-delete"></i></span>
															<span class="text">Hapus</span>
														</button>
													</td>
												</tr>
												<?php
											}
											?>
											<script>
                                                $(function() {
                                                    $('.delete-album').click(function(e) {
                                                        e.preventDefault();
                                                        var href = $(this).attr('data-target');
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You will delete this forever!",
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: "Yes, i'm sure!"
                                                        }).then((result) => {
                                                            if (result.value) {
                                                                Swal.fire(
                                                                    'Deleted!',
                                                                    'Your file has been deleted.',
                                                                    'success'
                                                                )
                                                                document.location.href = href;
                                                            }
                                                        })
                                                    });
                                                });
											</script>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade <?php if ($flag=='genre') {echo 'show active';}else{echo '';}?>" id="genre" role="tabpanel" aria-labelledby="read-tab">
									<div class="d-flex flex-wrap justify-content-xl-between" style="padding: 10px 10px">
										<table id="table-genre" class="table table-hover table-striped" >
											<thead>
											<tr>
												<th>Genre</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											<?php
											foreach ($getGenre as $g){?>
												<tr>
													<td><?php echo $g->genre?></td>
													<td>
														<a href="<?php echo base_url('');echo "";?>" class="btn btn-warning btn-icon-split">
															<span class="icon text-white">
																<i class="mdi mdi-playlist-edit"></i>
															</span>
															<span class="text">Edit</span>
														</a>
														<button data-target="<?php echo base_url('');echo "delete-genre/".$g->id;?>"
																class="btn btn-danger btn-icon-split delete-genre">
															<span class="icon text-white"><i class="mdi mdi-delete"></i></span>
															<span class="text">Hapus</span>
														</button>
													</td>
												</tr>
												<?php
											}
											?>
											<script>
                                                $(function() {
                                                    $('.delete-genre').click(function(e) {
                                                        e.preventDefault();
                                                        var href = $(this).attr('data-target');
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You will delete this forever!",
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: "Yes, i'm sure!"
                                                        }).then((result) => {
                                                            if (result.value) {
                                                                Swal.fire(
                                                                    'Deleted!',
                                                                    'Your file has been deleted.',
                                                                    'success'
                                                                )
                                                                document.location.href = href;
                                                            }
                                                        })
                                                    });
                                                });
											</script>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->

<?php
$this->load->view('dashboard_page/parts/V_Footer');
