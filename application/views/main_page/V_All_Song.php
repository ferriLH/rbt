<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>

<div id="page-wrapper">
	<div class="inner-content">
		<div class="music-browse">
			<!--albums-->
			<!-- pop-up-box -->
<!--			<link href="--><?php //echo base_url('assets/main_page/')?><!--css/popuo-box.css" rel="stylesheet" type="text/css" media="all">-->
<!--			<script src="--><?php //echo base_url('assets/main_page/')?><!--js/jquery.magnific-popup.js" type="text/javascript"></script>-->
<!--			<script>-->
<!--                $(document).ready(function() {-->
<!--                    $('.popup-with-zoom-anim').magnificPopup({-->
<!--                        type: 'inline',-->
<!--                        fixedContentPos: false,-->
<!--                        fixedBgPos: true,-->
<!--                        overflowY: 'auto',-->
<!--                        closeBtnInside: true,-->
<!--                        preloader: false,-->
<!--                        midClick: true,-->
<!--                        removalDelay: 300,-->
<!--                        mainClass: 'my-mfp-zoom-in'-->
<!--                    });-->
<!--                });-->
<!--			</script>-->
			<!--//pop-up-box -->

			<div class="browse">
				<div class="tittle-head two">
					<h3 class="tittle">All Song <span class="new">Realesed</span></h3>
<!--					<a href="--><?php //echo base_url('assets/main_page/')?><!--browse.html"><h4 class="tittle third">See all</h4></a>-->
					<div class="clearfix"> </div>
				</div>
				<?php if (isset($curent_result)) {
					foreach ($curent_result as $dat) {
						$id = $dat->id_lagu;
						?>
						<!--modal music-->
						<div id="<?php echo $id?>" class="modal fade" role="dialog" tabindex="-1">
							<div class="modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<div class="row">
											<button type="button" onclick="stopAudio<?php echo $id?>()" class="close btn btn-default" data-dismiss="modal">Close &times;</button>
										</div>
									</div>
									<div class="modal-body" style="padding: 15px 15px;">
										<div class="row">
											<div class="col-sm-4"style="min-height: 150px;max-height: 150px;">
												<img src="<?php echo base_url('assets/foto_album/')?><?php echo $dat->picture_album;?>" style="width: 100%; height: 100%; max-width: 150px; max-height: 150px;">
											</div>
											<div class="col-sm-8">
												<p style="text-align: left; width: 100%; font-size: large; font-weight: bold"><?php echo $dat->judul?></p>
												<p style="text-align: left; width: 100%; font-size: medium; font-style: italic;"><?php echo $dat->nama_artist?></p>
												<audio controls controlsList="nodownload" id="audio<?php echo $id;?>" preload="none">
													Your browser does not support the audio element.
												</audio>
												<h3 style="text-align: left; font-style: italic">Cara Registrasi:</h3>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/xlaxiata.png');?>" alt="XL">
												<br>
												<small><?php echo "Ketik : <b>".$dat->kode_xl."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1818</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dat->harga_xl."/lagu"?></small> <br><br>
												<small>Untuk Memberikan nada sambung ke teman,</small> <br>
												<small>
													<?php echo "Ketik : <b>GIFT</b> (spasi) <b> Nomor XL teman </b>(spasi)<b>".$dat->kode_xl."</b>"?>
												</small><br>
												<small><?php echo "Kirim ke : <b>1818</b>"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:1818&body=".$dat->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:1818?body=".$dat->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}else
												{
													echo "<a href='sms:1818?body=".$dat->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}
												?>
												<br><br>
											</div>
											<div class="col-sm-4">
												<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/telkom.png')?>" alt="TELKOMSEL">
												<br>
												<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dat->kode_tsel."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dat->harga_tsel."/lagu"?></small> <br><br>
												<small>Untuk Memberikan nada sambung ke teman,</small> <br>
												<small>
													<?php echo "Ketik : <b>RING</b> (spasi)<b> GIFT</b> (spasi) <b>".$dat->kode_tsel."</b> (spasi)<b> Nomor HP teman</b>"?>
												</small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:1212&body=RING SUB ".$dat->kode_tsel."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}else
												{
													echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}
												?>
												<br><br>
											</div>
											<div class="col-sm-4">
												<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/isat.png')?>" alt="INDOSAT">
												<br>
												<small><?php echo "Ketik : <b>SET</b> (spasi) <b>".$dat->kode_indosat."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>808</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dat->harga_indosat."/lagu"?></small> <br><br>
												<small>Untuk Memberikan nada sambung ke teman,</small> <br>
												<small>
													<?php echo "Ketik : GIFT</b> (spasi) <b>".$dat->kode_indosat."</b> (spasi)<b> Nomor HP teman</b>"?>
												</small><br>
												<small><?php echo "Kirim ke : <b>808</b>"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:808&body=SET ".$dat->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:808?body=SET ".$dat->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}else
												{
													echo "<a href='sms:808?body=SET ".$dat->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}
												?>
												<br><br>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" onclick="stopAudio<?php echo $id?>()" class="close btn btn-default" data-dismiss="modal">Close &times;</button>
										<script>
                                            function stopAudio<?php echo $id?>() {
                                                var audioPlayer = document.getElementById("audio<?php echo $id;?>");
                                                audioPlayer.pause();
                                                audioPlayer.currentTime = 0;
                                            }
                                            $('#<?php echo $id;?>').on('hide.bs.modal', function () {
                                                $('audio').each(function(){
                                                    this.pause(); // Stop playing
                                                    this.currentTime = 0; // Reset time
                                                });
                                            });
                                            $('#<?php echo $id;?>').on('show.bs.modal', function () {
                                                $('audio').each(function(){
                                                    document.getElementById("audio<?php echo $id;?>").innerHTML = "<source src='<?php echo base_url('assets/file_lagu/')?><?php echo $dat->file?>' type='audio/mpeg'>";

                                                });
                                            });
										</script>
									</div>
								</div>
							</div>
						</div>
						<!--end Modal-->
						<div class="col-md-3 browse-grid ">
							<a data-toggle="modal" data-target="#<?php echo $id?>"><img src="<?php echo base_url('assets/foto_album/') ?><?php echo $dat->picture_album?>" title="allbum-name"></a>
							<a data-toggle="modal" data-target="#<?php echo $id?>"><i class="glyphicon glyphicon-play-circle"></i></a>
							<a href="" class="sing" data-toggle="modal" data-target="#<?php echo $id?>"><?php echo $dat->judul?></a>
						</div>
					<?php }?>
					<div class="clearfix"> </div>
					<?php
				} else {
					echo "<div>Kosong.</div>";
				}
				?>
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
						<a href="<?php echo base_url('album/detail/').$new->id_album?>"><img src="<?php echo base_url('assets/')?>foto_album/<?php echo $new->picture_album;?>" alt=""/></a>
						<div class="slide-title"><h4><?php echo $new->judul?></div>
						<div class="date-city">
							<h5><?php echo $new->nama_artist?></h5>
							<div class="buy-tickets">
								<a href="<?php echo base_url('album/detail/').$new->id_album ?>">READ MORE</a>
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


