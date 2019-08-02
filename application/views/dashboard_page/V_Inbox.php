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
					<div class="card-body dashboard-tabs p-0">
						<ul class="nav nav-tabs px-4" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="unread-tab" data-toggle="tab" href="#unread" role="tab" aria-controls="overview" aria-selected="true">Unreand Message</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="unread" aria-selected="false">Message Has Been Read</a>
							</li>
						</ul>
						<div class="tab-content py-0 px-0">
							<div class="tab-pane fade show active" id="unread" role="tabpanel" aria-labelledby="unread-tab">
								<div class="d-flex flex-wrap justify-content-xl-between">

								</div>
							</div>
							<div class="tab-pane fade" id="read" role="tabpanel" aria-labelledby="read-tab">
								<div class="d-flex flex-wrap justify-content-xl-between">

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
