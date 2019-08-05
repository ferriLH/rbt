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

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<?php foreach ($getInbox as $i){?>
					<div class="card-header">

					</div>
					<div class="card-body">
						<div class="">
							<h5>From : <?php echo $i->nama_pengirim;?></h5>
							<p><?php echo $i->email_pengirim;?><br>
								<?php echo $i->kontak_pengirim;?>
								<span class="pull-right" style="float: right"><?php echo $i->waktu_kirim;?></span>
							</p>
						</div>
						<!-- /.mailbox-read-info -->
						<div class="">
							<p><pre><?php echo $i->isi_pesan;?></pre></p>
						</div>
					</div>
					<div class="card-footer">
						<a href="<?php echo base_url('inbox')?>">
							<button type="button" class="btn btn-primary"><i class="mdi mdi-arrow-left"></i> Back</button>
						</a>
						<button onclick="functionDelete()" type="button" class="btn btn-danger"><i class="mdi mdi-trash-can"></i> Delete</button>
						<script>
                            function functionDelete() {
                                const href = '<?php echo base_url()."inbox/delete/".$i->id_pesan;?>';
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
                                        document.location.href = href;
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                    }
                                })
                            }
						</script>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->

<?php
$this->load->view('dashboard_page/parts/V_Footer');
