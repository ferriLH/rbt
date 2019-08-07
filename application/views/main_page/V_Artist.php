<?php
    $this->load->view('main_page/parts/V_Header');
    $this->load->view('main_page/parts/V_Navigation');
?>
    <!--notification menu end -->
    <!-- //header-ends -->
    <!-- /w3l-agile -->
    <!-- //header-ends -->
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
                        <h3 class="tittle">Artist <span class="new">All </span></h3>
                        <a href="<?php echo base_url('assets/main_page/')?>browse.html"><h4 class="tittle third">See all</h4></a>
                        <div class="clearfix"> </div>
                    </div>


<!--                    <div class="bs-example bs-example-tabs" >-->
<!--                        <ul id="myTab" class="nav nav-tabs" >-->
<!--                            --><?php //foreach($genre as $g) {?>
<!--                            <li ><a data-toggle="tab" href="#--><?php //echo $g->id;?><!--">--><?php //echo $g->genre;?><!--</a></li>-->
<!--                            --><?php //}?>
<!--                        </ul>-->


                        <div class="tab-content">
                            <div id="" class="tab-pane fade in active">
                                <div class="browse-inner">
                                    <!-- /agileits -->
                                    <?php if (isset($data)) {
                                    foreach ($data as $dat) {
                                        $id = $dat->id_artists;
                                        ?>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/foto_artis/');echo $dat->picture_artist;?>" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html"><?php echo $dat->nama_artist;?></a>
                                    </div>
                                    <?php }?>
                                    <?php
                                        //if (++$x == 5) break;
                                    }
                                else {
                                    echo "<div>Kosong.</div>";
                                }
                                ?>
                            </ul>
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
				</div>
						<div class="review-slider">
							<div class="tittle-head">
								<h3 class="tittle">Featured Artist <span class="new"> New</span></h3>
								<div class="clearfix"> </div>
							</div>
							<ul id="flexiselDemo1">
								<?php if (isset($new_a)) {
									foreach ($new_a as $a) {
										$id_a = $a->id_artists;
										?>
										<li>
											<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/<?php echo $a->picture_artist;?>" alt=""/></a>
											<div class="slide-title"><h4><?php echo $a->nama_artist?></div>
											<div class="date-city">
												<h5><?php echo $a->nama_partner?></h5>
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

		</div>
                    </div>
                    <!-- /agileinfo -->

<?php
    $this->load->view('main_page/parts/V_Footer');
?>

