
<body>

<?php
$name = $this->session->userdata('nama_admin');
?>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="<?php echo base_url()?>dashboard"><img src="<?php echo base_url()?>assets/dashboard_page/images/Homelogo1.png" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="<?php echo base_url()?>dashboard"><img src="<?php echo base_url()?>assets/dashboard_page/images/favicon.png" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
<!--            <ul class="navbar-nav mr-lg-4 w-100">-->
<!--				<li class="nav-item nav-search d-none d-lg-block w-100">-->
<!--					<div class="input-group">-->
<!--						<div class="input-group-prepend">-->
<!--							<span class="input-group-text" id="search">-->
<!--								<i class="mdi mdi-magnify"></i>-->
<!--							</span>-->
<!--						</div>-->
<!--						<input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0"></i>
						<?php if (count($getNewInbox)>0): ?>
							<span class="count"></span>
						<?php endif ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
						<a href="<?php echo base_url('inbox')?>">
							<p class="mb-0 font-weight-normal float-left dropdown-header">Notifications show all</p>
						</a>
						<?php
						$x = 0;
						foreach ($getNewInbox as $ni){
							?>
                        <a class="dropdown-item" href="<?php echo base_url('inbox');echo "/baca/".$ni->id_pesan;?>">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-info">
                                    <i class="mdi mdi-message mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal"><?php echo $ni->nama_pengirim?></h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
									<?php echo $ni->isi_pesan?>
                                </p>
                            </div>
                        </a>
							<?php
							if (++$x == 4) break;
						}
						?>
					</div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="<?php echo base_url()?>assets/dashboard_page/images/faces/user.png" alt="profile"/>
<!--						<div>Icons made by-->
<!--							<a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from-->
<!--							<a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by-->
<!--							<a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>-->
<!--						</div>-->
                        <span class="nav-profile-name"><?php echo $name;?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('dashboard/bio/').$this->session->userdata('id_admin');?>">
                            <i class="mdi mdi-settings text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" onclick="functionLogout()">
                            <i class="mdi mdi-logout-variant text-primary"></i>
                            Logout
                        </a>
                        <script>
                                function functionLogout() {
                                    const href = '<?php echo base_url()?>logout';
                                    Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You will log out from this page!",
                                    type: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: "Yes, i'm sure!"
                                }).then((result) => {
                                    if (result.value) {
                                        document.location.href = href;
                                    }
                                })
                            }
                        </script>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //echo base_url()?><!--dashboard/">-->
<!--                        <i class="mdi mdi-home menu-icon"></i>-->
<!--                        <span class="menu-title">Dashboard</span>-->
<!--                    </a>-->
<!--                </li>-->
				<li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
					<a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
						<i class="mdi mdi-home menu-icon"></i>
						<span class="menu-title">Dashboard</span>
						<i class="menu-arrow"></i>
					</a>
					<div class="collapse" id="auth">
						<ul class="nav flex-column sub-menu">
							<li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>"> <a class="nav-link" href="<?php echo base_url()?>dashboard">Backend</a></li>
							<li class="nav-item"> <a class="nav-link" target="_blank" href="<?php echo base_url()?>">Frontend</a></li>
						</ul>
					</div>
				</li>
				<!--Navbar CRUD Partner-->
				<li class="nav-item <?php if($this->uri->segment(1)=="data_artist"){echo "active";}?>">
					<a class="nav-link" href="<?php echo base_url()?>data_artist">
						<i class="mdi mdi-account menu-icon"></i>
						<span class="menu-title">Artist Pages</span>
					</a>
				</li>
				<!--Navbar CRUD Music-->
				<li class="nav-item <?php if($this->uri->segment(1)=="music"){echo "active";}?>">
					<a class="nav-link" href="<?php echo base_url()?>music/song">
						<i class="mdi mdi-music menu-icon"></i>
						<span class="menu-title">Music Pages</span>
					</a>
				</li>
				<!--Navbar CRUD Promo-->
				<li class="nav-item <?php if($this->uri->segment(1)=="promo"){echo "active";}?>">
					<a class="nav-link" href="<?php echo base_url()?>promo/">
						<i class="mdi mdi-image-area menu-icon"></i>
						<span class="menu-title">Promo Pages</span>
					</a>
				</li>
				<!--Navbar Add Video-->
				<!--Navbar CRUD Pesan-->
				<li class="nav-item <?php if($this->uri->segment(1)=="inbox"){echo "active";}?>">
					<a class="nav-link" href="<?php echo base_url()?>inbox/">
						<i class="mdi mdi-message menu-icon"></i>
						<span class="menu-title">
							Inbox Pages
							<label class="badge badge-primary"><?php echo count($getNewInbox)?></label>
						</span>
					</a>
				</li>
            </ul>
        </nav>
