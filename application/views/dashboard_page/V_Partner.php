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

							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Partner</button>&nbsp;
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Artist</button>
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
								<table id="recent-purchases-listing" class="table">
									<thead>
									<tr>
										<th>Nomor Induk</th>
										<th>Nama Partner</th>
										<th>Email Partner</th>
										<th>No Telpon</th>
										<th>Alamat</th>
										<th>Nama Artist</th>
										<th>Action</th>
									</tr>
									</thead>
									<?php
									foreach ($getPartner as $p){?>
									<tbody>
									<tr>
										<td><?php echo $p->nomor_induk?></td>
										<td><?php echo $p->nama_partner?></td>
										<td><?php echo $p->email_partner?></td>
										<td><?php echo $p->no_telpon?></td>
										<td><?php echo $p->alamat?></td>
										<td><?php echo $p->nama_artist?></td>
										<td>
											<a href="<?php echo base_url('');echo "";?>" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="mdi mdi-account-edit"></i>
                                            </span>
												<span class="text">Edit</span>
											</a>
											<a onclick="functionDelete()" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="mdi mdi-delete"></i>
                                            </span>
												<span class="text">Hapus</span>
											</a>
										</td>
									</tr>
									</tbody>
										<?php
									}
									?>
									<script>
                                        function functionDelete() {
                                            const href = '<?php echo base_url()."partner/delete/".$p->id_partner;?>';
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You will delete this message forever!",
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
                                                        'success',
                                                    )
                                                    document.location.href = href;
                                                }
                                            })
                                        }
									</script>
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
