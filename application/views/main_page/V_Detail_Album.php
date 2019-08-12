<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>

	<div id="page-wrapper">
		<div class="inner-content single">
			<!--/music-right-->
			<div class="tittle-head">
				<h3 class="tittle">Detail Album <span class="new">Page</span></h3>
				<div class="clearfix"> </div>
			</div>
			<div class="single_left">
				<!--/video-main-->
				<div class="video-main">
					<div class="video-record-list">
						<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
							<div class="jp-type-playlist">
								<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="<?php echo base_url('assets/main_page/')?>video/play1.png" style="width: 480px; height: 270px; display: inline;"><video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video></div>
								<div class="jp-gui">
									<div class="jp-video-play" style="display: block;">
										<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
									</div>
									<div class="jp-interface">
										<div class="jp-progress">
											<div class="jp-seek-bar" style="width: 100%;">
												<div class="jp-play-bar" style="width: 0%;"></div>
											</div>
										</div>
										<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
										<div class="jp-duration" role="timer" aria-label="duration">00:18</div>
										<div class="jp-controls-holder">
											<div class="jp-controls">
												<button class="jp-previous" role="button" tabindex="0">previous</button>
												<button class="jp-play" role="button" tabindex="0">play</button>
											</div>
											<div class="jp-volume-controls">
												<button class="jp-mute" role="button" tabindex="0">mute</button>
												<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
												<div class="jp-volume-bar">
													<div class="jp-volume-bar-value" style="width: 100%;"></div>
												</div>
											</div>
											<div class="jp-toggles">

												<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
											</div>
										</div>
										<div class="jp-details" style="display: none;">
											<div class="jp-title" aria-label="title">1. Ellie-Goulding</div>
										</div>
									</div>
								</div>
								<div class="jp-playlist">
									<ul style="display: block;"><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li></ul>
								</div>
								<div class="jp-no-solution" style="display: none;">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- script for play-list -->
				<link href="<?php echo base_url('assets/main_page/')?>css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="<?php echo base_url('assets/main_page/')?>js/jquery.jplayer.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url('assets/main_page/')?>js/jplayer.playlist.min.js"></script>
				<script type="text/javascript">
                    //<![CDATA[
                    $(document).ready(function(){

                        new jPlayerPlaylist({
                            jPlayer: "#jquery_jplayer_1",
                            cssSelectorAncestor: "#jp_container_1"
                        }, [

                            {
                                title:"1. Ellie-Goulding",
                                artist:"",
                                mp4: "video/Ellie-Goulding.mp4",
                                ogv: "video/Ellie-Goulding.ogv",
                                webmv: "video/Ellie-Goulding.webm",
                                poster:"video/play1.png"
                            },
                            {
                                title:"2. Mark-Ronson-Uptown",
                                artist:"",
                                mp4: "video/Mark-Ronson-Uptown.mp4",
                                ogv: "video/Mark-Ronson-Uptown.ogv",
                                webmv: "video/Mark-Ronson-Uptown.webm",
                                poster:"video/play2.png"
                            },
                            {
                                title:"3. Ellie-Goulding",
                                artist:"",
                                mp4: "video/Ellie-Goulding.mp4",
                                ogv: "video/Ellie-Goulding.ogv",
                                webmv: "video/Ellie-Goulding.webm",
                                poster:"video/play1.png"
                            },
                            {
                                title:"4. Maroon-Sugar",
                                artist:"",
                                mp4: "video/Maroon-Sugar.mp4",
                                ogv: "video/Maroon-Sugar.ogv",
                                webmv: "video/Maroon-Sugar.webm",
                                poster:"video/play4.png"
                            },
                            {
                                title:"5. Pharrell-Williams",
                                artist:"",
                                mp4: "video/Pharrell-Williams.mp4",
                                ogv: "video/Pharrell-Williams.ogv",
                                webmv: "video/Pharrell-Williams.webm",
                                poster:"video/play5.png"
                            },
                            {
                                title:"6. Ellie-Goulding",
                                artist:"",
                                mp4: "video/Ellie-Goulding.mp4",
                                ogv: "video/Ellie-Goulding.ogv",
                                webmv: "video/Ellie-Goulding.webm",
                                poster:"video/play1.png"
                            },
                            {
                                title:"7. Pharrell-Williams",
                                artist:"",
                                mp4: "video/Pharrell-Williams.mp4",
                                ogv: "video/Pharrell-Williams.ogv",
                                webmv: "video/Pharrell-Williams.webm",
                                poster:"video/play5.png"
                            }
                        ], {
                            swfPath: "../../dist/jplayer",
                            supplied: "webmv,ogv,mp4",
                            useStateClassSkin: true,
                            autoBlur: false,
                            smoothPlayBar: true,
                            keyEnabled: true
                        });

                    });
                    //]]>
				</script>
				<!-- //script for play-list -->
				<!--//video-main-->
				<!-- /agileinfo -->
			</div>
			<div class="response">
				<h4>Judul Album</h4>
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo base_url('assets/foto_album/as_you_were.jpg')?>" style="max-height: 300px">
				</div>
				<div class="col-md-6">
					<h3 style="font-weight: bold; padding-bottom: 1px">Nama Penyanyi :<text style="color: #2d4278">JUDUL ALBUM</text></h3>
					<h3 style="padding-bottom: 1px; font-weight: bold">Provider</h3>
					<p>Nama Produser</p>
					<h3 style="font-weight: bold; padding-bottom: 1px">genre</h3>
					<h3 style="font-weight: bold">Bio Artis</h3>
					<p>lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
				</div>
			</div>
			<!-- /agileits -->
			<div class="clearfix"> </div>
			<!--//music-right-->
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<!-- /w3l-agileits-->
		<!--body wrapper start-->
		<div class="review-slider">

			<div class="tittle-head">
				<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
				<div class="clearfix"> </div>
			</div>
			<ul id="flexiselDemo1">
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v1.jpg" alt=""/></a>
					<div class="slide-title"><h4>Adele21 </div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v2.jpg" alt=""/></a>
					<div class="slide-title"><h4>Adele21</h4></div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v3.jpg" alt=""/></a>
					<div class="slide-title"><h4>Shomlock</h4></div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v4.jpg" alt=""/></a>
					<div class="slide-title"><h4>Stuck on a feeling</h4></div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v5.jpg" alt=""/></a>
					<div class="slide-title"><h4>Ricky Martine </h4></div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v6.jpg" alt=""/></a>
					<div class="slide-title"><h4>Ellie Goluding </h4></div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v6.jpeg" alt=""/></a>
					<div class="slide-title"><h4>Fifty Shades </h4></div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="<?php echo base_url('assets/main_page/')?>single.html">READ MORE</a>
						</div>
					</div>
				</li>
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
	<!-- /w3layouts-agile -->
</div>
<!--body wrapper end-->

<?php
$this->load->view('main_page/parts/V_Footer');
?>
