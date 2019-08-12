<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>

<div id="page-wrapper">
	<div class="inner-content">
		<div class="music-browse">
			<!--albums-->
			<!-- pop-up-box -->
			<link href="<?php echo base_url('assets/main_page/')?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
			<script src="<?php echo base_url('assets/main_page/')?>js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
			</script>
			<!--//pop-up-box -->

			<div class="browse">
				<div class="tittle-head two">
					<h3 class="tittle">All Song <span class="new">Realesed</span></h3>
					<a href="<?php echo base_url('assets/main_page/')?>browse.html"><h4 class="tittle third">See all</h4></a>
					<div class="clearfix"> </div>
				</div>
				<?php if (isset($curent_result)) {
					foreach ($curent_result as $dat) {
						$id = $dat->id_lagu;
						?>
						<!--modal music-->
						<div id="<?php echo $id?>" class="modal fade" role="dialog" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<div class="modal-body">
											<div class="col-sm-4"style="min-height: 200px">
												<img src="<?php echo base_url('assets/foto_album/')?><?php echo $dat->picture_album;?>" style="width: 100%; height: 100%; max-width: 150px; max-height: 150px;">
											</div>
											<div class="col-sm-8">
												<p style="text-align: left; width: 100%; font-size: large; font-weight: bold"><?php echo $dat->judul?></p>
												<p style="text-align: left; width: 100%; font-size: medium; font-style: italic;"><?php echo $dat->nama_artist?></p>

												<audio controls>
													<source src="<?php echo base_url('assets/file_lagu/')?><?php echo $dat->file?>" type="audio/mpeg">
													Your browser does not support the audio element.
												</audio>
												<h3 style="text-align: left; font-style: italic">Cara Registrasi:</h3>
												<p style="text-align: left">Kode Registrasi XL 			: <?php echo $dat->kode_xl?></p>
												<p style="text-align: left">Kode Registrasi Telkomsel 	: <?php echo $dat->kode_tsel?></p>
												<p style="text-align: left">Kode Registrasi Indosat 	: <?php echo $dat->kode_indosat?></p>
												<h3 style="text-align: left">Harga : Rp. <?php echo $dat->harga?></h3>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end Modal-->
						<div class="col-md-3 browse-grid">
							<a  data-toggle="modal" data-target="#<?php echo $id?>"><img src="<?php echo base_url('assets/foto_album/') ?><?php echo $dat->picture_album?>" title="allbum-name"></a>
							<a data-toggle="modal" data-target="#<?php echo $id?>"><i class="glyphicon glyphicon-play-circle"></i></a>
							<a href="" class="sing" data-toggle="modal" data-target="#<?php echo $id?>"><?php echo $dat->judul?></a>
						</div>
					<?php }?>
					<?php
				}
				else {
					echo "<div>Kosong.</div>";
				}
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if (isset($pagination)) { ?>
				<?php echo $pagination ?>
			<?php } ?>
		</div>
	</div>

	<!--body wrapper start-->
	<div class="review-slider">
		<div class="tittle-head">
			<h3 class="tittle">Featured Song <span class="new"> New</span></h3>
			<div class="clearfix"> </div>
		</div>
		<ul id="flexiselDemo1">
			<?php if (isset($new_s)) {
				foreach ($new_s as $new) {
					$id_r = $new->id_lagu;
					?>
					<li>
						<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/')?>foto_album/<?php echo $new->picture_album;?>" alt=""/></a>
						<div class="slide-title"><h4><?php echo $new->judul?></div>
						<div class="date-city">
							<h5><?php echo $new->nama_artist?></h5>
							<div class="buy-tickets">
								<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
							</div>
						</div>
					</li>
				<?php }?>
				<?php
				//if (++$x == 5) break;
			}
			else {
				echo "<div>Kosong.</div>";
			}
			?>
		</ul>
		<script type="text/javascript">
            $(window).load(function() {

                $("#flexiselDemo1").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: false,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint:800,
                            visibleItems: 4
                        }
                    }
                });
            });
		</script>
		<script type="text/javascript" src="<?php echo base_url('assets/main_page/')?>js/jquery.flexisel.js"></script>
	</div>
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3l-agile-info -->


<?php
$this->load->view('main_page/parts/V_Footer');
?>


