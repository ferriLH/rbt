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
						<a href="<?php echo base_url('')."partner/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Partner</button>&nbsp;
						</a>
						<a href="<?php echo base_url('')."artist/add"?>">
							<button class="btn btn-primary mt-2 mt-xl-0"><i class="mdi mdi-plus-circle"></i> Add New Artist</button>&nbsp;
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
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<p class="card-title">Data <?php echo $title?></p>
						<div class="table-responsive">
							<table id="data-partner" class="table table-hover table-striped">
								<thead>
								<tr>
									<th>Nomor Induk</th>
									<th>Nama Partner</th>
									<th>Email Partner</th>
									<th>No Telpon</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($getPartner as $p){?>
									<tr>
										<td><?php echo $p->nomor_induk?></td>
										<td><?php echo $p->nama_partner?></td>
										<td><?php echo mb_strimwidth($p->email_partner,0,15,'...')?></td>
										<td><?php echo $p->no_telpon?></td>
										<td><?php echo $p->jk?></td>
										<td><?php echo mb_strimwidth($p->alamat,0,15,'...')?></td>
										<td>
											<a href="<?php echo base_url('data-artist/').$p->id_partner;?>" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="mdi mdi-account"></i>
                                            </span>
												<span class="text">Artist</span>
											</a>
											<a href="<?php echo base_url('partner/edit/');echo $p->id_partner;?>" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="mdi mdi-playlist-edit"></i>
                                            </span>
												<span class="text">Edit</span>
											</a>
											<button data-target="<?php echo base_url('delete-partner/');echo $p->id_partner;?>"
													class="btn btn-danger btn-icon-split delete-partner">
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
                                        $('.delete-partner').click(function(e) {
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
