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
							<a href="<?php echo base_url('promo/addpromo')?>">
								<button class="btn btn-primary mt-2 mt-xl-0"> <i class="mdi mdi-plus-circle"></i> Add New <?php echo $title?></button>
							</a>
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
								<table id="data-promo" class="table table-hover table-striped">
									<thead>
									<tr>
										<th>Nama Promo</th>
										<th>Mekanisme</th>
										<th>Periode</th>
										<th>Banner</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php
									foreach ($getPromo as $p){?>
										<tr>
											<td><?php echo $p->nama_promo?></td>
											<td><?php echo mb_strimwidth($p->mekanisme,0,15,'...')?></td>
											<td><?php echo mb_strimwidth($p->periode,0,15,'...')?></td>
											<td><img src="<?php echo base_url('assets/foto_promo/').$p->file_promo?>" alt="Photo Promo"></td>
											<td>
												<a href="<?php echo base_url('');echo "";?>" class="btn btn-warning btn-icon-split">
													<span class="icon text-white">
														<i class="mdi mdi-playlist-edit"></i>
													</span>
													<span class="text">Edit</span>
												</a>
												<button data-target="<?php echo base_url('delete-promo/');echo $p->id_promo;?>"
														class="btn btn-danger btn-icon-split delete-promo">
													<span class="icon text-white">
														<i class="mdi mdi-delete"></i>
													</span>
													<span class="text">Hapus</span>
												</button>
											</td>
										</tr>
										<?php
									}
									?>
									<script>
                                        $(function() {
                                            $('.delete-promo').click(function(e) {
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
		<!-- content-wrapper ends -->

<?php
$this->load->view('dashboard_page/parts/V_Footer');
