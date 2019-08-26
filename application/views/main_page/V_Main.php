<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>
        <!--notification menu end -->
        <!-- //header-ends -->
        <!-- /w3l-agileits -->
        <!-- //header-ends -->
        <div id="page-wrapper">
            <div class="inner-content">

                <div class="music-left">
                    <!--banner-section-->
                    <div class="banner-section">
                        <div class="banner">
                            <div class="callbacks_container">
								<?php if (empty($getPromo)){?>
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner-img">
												<img src="<?php echo base_url()?>assets/foto_promo/empty_promo.jpg" class="img-responsive" alt="">
											</div>
											<div class="banner-info">
												<a class="trend" href="<?php echo base_url();?>">PROMO</a>
												<h3>Belum Ada Promo</h3>
												<p>Periode Promo :</p><span>Belum Ada Promo</span></p>
											</div>
										</li>
									</ul>
									<?php } else { ?>

                                <ul class="rslides callbacks callbacks1" id="slider4">
									<?php foreach ($getPromo as $promo){?>
                                    <li>
                                        <div class="banner-img">
                                            <img src="<?php echo base_url()?>assets/foto_promo/<?php echo $promo->file_promo; ?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="banner-info">
                                            <a class="trend" href="#">PROMO</a>
                                            <h3><?php echo $promo->nama_promo?></h3>
                                            <p>Periode Promo :</p><span><?php echo $promo->periode?></span></p>
                                        </div>
                                    </li>
									<?php }?>
                                </ul>

								<?php }?>
                            </div>
                            <!--banner-->
                            <script src="<?php echo base_url()?>assets/main_page/js/responsiveslides.min.js"></script>
                            <script>
                                // You can also use "$(window).load(function() {"
                                $(function () {
                                    // Slideshow 4
                                    $("#slider4").responsiveSlides({
                                        auto: true,
                                        pager:true,
                                        nav:true,
                                        speed: 500,
                                        namespace: "callbacks",
                                        before: function () {
                                            $('.events').append("<li>before event fired.</li>");
                                        },
                                        after: function () {
                                            $('.events').append("<li>after event fired.</li>");
                                        }
                                    });

                                });
                            </script>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="albums">
                        <div class="tittle-head">
                            <h3 class="tittle">New Releases <span class="new">New</span></h3>
                            <a href="<?php echo base_url('allsong')?>"><h4 class="tittle">See all</h4></a>
                            <div class="clearfix"> </div>
                        </div>


						<?php if (isset($getnewrelease)) {
						foreach ($getnewrelease as $dat) {
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

								<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dat->kode_tsel1."</b>"?></small><br>
								<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
								<small><?php echo "Tarif : ".$dat->harga_tsel1."/lagu"?></small> <br>
								<?php
								if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
								{
									echo "<a href='sms:1212&body=RING SUB ".$dat->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 hari</button></a>";
								}elseif ($this->agent->is_mobile('android'))
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 hari</button></a>";
								}else
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 hari</button></a>";
								}
								?> <br><br>

								<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dat->kode_tsel3."</b>"?></small><br>
								<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
								<small><?php echo "Tarif : ".$dat->harga_tsel2."/lagu"?></small><br>

								<?php
								if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
								{
									echo "<a href='sms:1212&body=RING SUB ".$dat->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 hari</button></a>";
								}elseif ($this->agent->is_mobile('android'))
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 hari</button></a>";
								}else
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 hari</button></a>";
								}
								?><br><br>

								<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dat->kode_tsel3."</b>"?></small><br>
								<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
								<small><?php echo "Tarif : ".$dat->harga_tsel3."/lagu"?></small> <br>
								<?php
								if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
								{
									echo "<a href='sms:1212&body=RING SUB ".$dat->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 hari</button></a>";
								}elseif ($this->agent->is_mobile('android'))
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 hari</button></a>";
								}else
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 hari</button></a>";
								}
								?><br><br>

								<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dat->kode_tsel3."</b>"?></small><br>
								<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
								<small><?php echo "Tarif : ".$dat->harga_tsel3."/lagu"?></small> <br>


								<?php
								if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
								{
									echo "<a href='sms:1212&body=RING SUB ".$dat->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 hari</button></a>";
								}elseif ($this->agent->is_mobile('android'))
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 hari</button></a>";
								}else
								{
									echo "<a href='sms:1212?body=RING SUB ".$dat->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 hari</button></a>";
								}
								?><br><br>

								<small>Untuk Memberikan nada sambung ke teman,</small> <br>
								<small>
									<?php echo "Ketik : <b>RING</b> (spasi)<b> GIFT</b> (spasi) <b>Kode Berlangganan Diatas</b> (spasi)<b> Nomor HP teman</b>"?>
								</small><br>
								<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>

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
                                                        this.pause();
                                                        this.currentTime = 0;
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
                        	<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim"  data-toggle="modal" data-target="#<?php echo $id?>"><img src="<?php echo base_url('assets/foto_album/')?><?php echo $dat->picture_album?>" title="<?php echo $dat->nama_album?>"></a>
								<a class="button play-icon popup-with-zoom-anim" href="" data-toggle="modal" data-target="#<?php echo $id?>">Listen now</a>
								<div class="inner-info"><a href="" data-toggle="modal" data-target="#<?php echo $id?>"><h4><?php echo $dat->judul?></h4></a></div>
							</div>

						<?php }?>
							<?php
							//if (++$x == 5) break;
						}
						else {
							echo "<div>Kosong.</div>";
						}
						?>

                        <div class="clearfix"> </div>
                    </div>

                    <!--//End-albums-->
                    <!--//discover-view-->

                    <div class="albums second">
                        <div class="tittle-head">
                            <h3 class="tittle">Discover <span class="new">View</span></h3>
                            <a href="<?php echo base_url('allsong')?>"><h4 class="tittle two">See all</h4></a>
                            <div class="clearfix"> </div>
                        </div>
				<?php if (isset($getDiscover)) {
					foreach ($getDiscover as $dis) {
							$id = $dis->id_lagu; ?>
						<!--modal music-->
						<div id="<?php echo "discover".$id?>" class="modal fade" role="dialog" tabindex="-1">
							<div class="modal-dialog-scrollable">
								<div class="modal-content">
									<div class="modal-header">
										<div class="row">
											<button type="button" onclick="stopAudioDisc<?php echo $id?>()" class="close btn btn-default" data-dismiss="modal">Close &times;</button>
										</div>
									</div>
									<div class="modal-body" style="padding: 15px 15px;">
										<div class="row">
											<div class="col-sm-4"style="min-height: 150px;max-height: 150px;">
												<img src="<?php echo base_url('assets/foto_album/')?><?php echo $dis->picture_album;?>" style="width: 100%; height: 100%; max-width: 150px; max-height: 150px;">
											</div>
											<div class="col-sm-8">
												<p style="text-align: left; width: 100%; font-size: large; font-weight: bold"><?php echo $dis->judul?></p>
												<p style="text-align: left; width: 100%; font-size: medium; font-style: italic;"><?php echo $dis->nama_artist?></p>
												<audio controls controlsList="nodownload" id="audioDisc<?php echo $id;?>" preload="none">
													Your browser does not support the audio element.
												</audio>
												<h3 style="text-align: left; font-style: italic">Cara Registrasi:</h3>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/xlaxiata.png');?>" alt="XL">
												<br>
												<small><?php echo "Ketik : <b>".$dis->kode_xl."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1818</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dis->harga_xl."/lagu"?></small> <br><br>
												<small>Untuk Memberikan nada sambung ke teman,</small> <br>
												<small>
													<?php echo "Ketik : <b>GIFT</b> (spasi) <b> Nomor XL teman </b>(spasi)<b>".$dis->kode_xl."</b>"?>
												</small><br>
												<small><?php echo "Kirim ke : <b>1818</b>"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:1818&body=".$dis->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:1818?body=".$dis->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}else
												{
													echo "<a href='sms:1818?body=".$dis->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}
												?>
												<br><br>
											</div>
											<div class="col-sm-4">
												<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/telkom.png')?>" alt="TELKOMSEL">
												<br>
												<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dis->kode_tsel1."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dis->harga_tsel1."/lagu"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
												echo "<a href='sms:1212&body=RING SUB ".$dis->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 Hari</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
												echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 Hari</button></a>";
												}else
												{
												echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 Hari</button></a>";
												}
												?>
												<br>
												<br>
												<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dis->kode_tsel3."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dis->harga_tsel2."/lagu"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:1212&body=RING SUB ".$dis->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 Hari</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 Hari</button></a>";
												}else
												{
													echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 Hari</button></a>";
												}
												?>
												<br>
												<br>
												<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dis->kode_tsel3."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dis->harga_tsel3."/lagu"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:1212&body=RING SUB ".$dis->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 Hari</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 Hari</button></a>";
												}else
												{
													echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 Hari</button></a>";
												}
												?>
												<br>
												<br>
												<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$dis->kode_tsel3."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dis->harga_tsel3."/lagu"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:1212&body=RING SUB ".$dis->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 Hari</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 Hari</button></a>";
												}else
												{
													echo "<a href='sms:1212?body=RING SUB ".$dis->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 Hari</button></a>";
												}
												?>
												<br>
												<br>
												<small>Untuk Memberikan nada sambung ke teman,</small> <br>
												<small>
													<?php echo "Ketik : <b>RING</b> (spasi)<b> GIFT</b> (spasi) <b>Kode Berlangganan Diatas</b> (spasi)<b> Nomor HP teman</b>"?>
												</small><br>
												<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>

												<br><br>

											</div>
											<div class="col-sm-4">
												<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/isat.png')?>" alt="INDOSAT">
												<br>
												<small><?php echo "Ketik : <b>SET</b> (spasi) <b>".$dis->kode_indosat."</b>"?></small><br>
												<small><?php echo "Kirim ke : <b>808</b>"?></small> <br>
												<small><?php echo "Tarif : ".$dis->harga_indosat."/lagu"?></small> <br><br>
												<small>Untuk Memberikan nada sambung ke teman,</small> <br>
												<small>
													<?php echo "Ketik : GIFT</b> (spasi) <b>".$dis->kode_indosat."</b> (spasi)<b> Nomor HP teman</b>"?>
												</small><br>
												<small><?php echo "Kirim ke : <b>808</b>"?></small> <br>
												<?php
												if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
												{
													echo "<a href='sms:808&body=SET ".$dis->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}elseif ($this->agent->is_mobile('android'))
												{
													echo "<a href='sms:808?body=SET ".$dis->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}else
												{
													echo "<a href='sms:808?body=SET ".$dis->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
												}
												?>
												<br><br>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" onclick="stopAudioDisc<?php echo $id?>()" class="close btn btn-default" data-dismiss="modal">Close &times;</button>
										<script>
                                            function stopAudioDisc<?php echo $id?>() {
                                                var audioPlayer = document.getElementById("audioDisc<?php echo $id;?>");
                                                audioPlayer.pause();
                                                audioPlayer.currentTime = 0;
                                            }
                                            $('#<?php echo "discover".$id;?>').on('hide.bs.modal', function () {
                                                $('audio').each(function(){
                                                    this.pause(); // Stop playing
                                                    this.currentTime = 0; // Reset time
                                                });
                                            });
                                            $('#<?php echo "discover".$id;?>').on('show.bs.modal', function () {
                                                $('audio').each(function(){
                                                    document.getElementById("audioDisc<?php echo $id;?>").innerHTML = "<source src='<?php echo base_url('assets/file_lagu/')?><?php echo $dis->file?>' type='audio/mpeg'>";

                                                });
                                            });
										</script>
									</div>
								</div>
							</div>
						</div>
						<!--end Modal-->
                        <div class="col-md-3 content-grid">
							<a data-toggle="modal" data-target="#<?php echo "discover".$id?>"><img src="<?php echo base_url('assets/foto_album/')?><?php echo $dis->picture_album?>" title="<?php echo $dis->nama_album;?>"></a>
                            <div class="inner-info"><a href="" data-toggle="modal" data-target="#<?php echo "discover".$id?>"><h4><?php echo $dis->judul?></h4></a></div>
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
                    <!--//discover-view-->
                </div>
                <!--//music-left-->
                <!--/music-right-->
                <div class="music-right">
					<div class="row">
						<div class="col-md-12 ">
							<div class="card">
								<div class="card-image">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="200" height="200" src="https://www.youtube.com/embed/playlist?list=PLaUv1040bw2gS19LfN4wWLu9kpeFdQCJl" frameborder="0" allowfullscreen></iframe>
									</div>

								</div>
							</div>
						</div>
					</div>
					<br><br>
                    <!--/video-main-->
                    <div class="video-main">
                        <div class="video-record-list">
                            <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                                <div class="jp-type-playlist">
									<h1>Charts <span>Lagu</span></h1>
                                    <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;">
									</div>
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
                                        </div>
                                    </div>
                                    <div class="jp-playlist">
                                        <ul style="display: block;">

                                        </ul>
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
                    <link href="<?php echo base_url()?>assets/main_page/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
                    <script type="text/javascript" src="<?php echo base_url()?>assets/main_page/js/jquery.jplayer.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url()?>assets/main_page/js/jplayer.playlist.min.js"></script>
					<script type="text/javascript">
                        //<![CDATA[
                        $(document).ready(function(){

                            new jPlayerPlaylist({
                                jPlayer: "#jquery_jplayer_1",
                                cssSelectorAncestor: "#jp_container_1"
                            }, [
								<?php if (isset($charts)){?>
								<?php foreach ($charts as $detail){?>
                                {
                                    title: "<?php echo $detail->judul?>",
                                    artist: "",
                                    mp3: "<?php echo base_url('assets/file_lagu/'),$detail->file?>",
                                    wav: "<?php echo base_url('assets/file_lagu/'),$detail->file?>",
                                    poster: "<?php echo base_url('assets/foto_album/')?>"
                                },
								<?php }
								} else {?>
                                {
                                    title: "<<KOSONG>>",
                                    artist: "",
                                    mp4: "",
                                    ogv: "",
                                    webmv: "",
                                    poster: ""
                                }
								<?php }?>
                            ], {
                                swfPath: "../../dist/jplayer",
                                supplied: "mp3,wav",
                                useStateClassSkin: true,
                                autoBlur: false,
                                smoothPlayBar: true,
                                keyEnabled: true
                            });

                        });
                        //]]>
					</script>

                    <div class="apps">
                        <h3 class="hd-tittle">Our Apps </h3>
                        <div class="banner-button">
                            <a onclick="ComingSoon()"><img src="<?php echo base_url()?>assets/main_page/images/1.png" alt=""></a>
                        </div>
                        <div class="banner-button green-button">
                            <a onclick="ComingSoon()"><img src="<?php echo base_url()?>assets/main_page/images/2.png" alt=""></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--//app_store-->
                    <!--/start-paricing-tables-->
<!--					<div class="container">-->

<!--					</div>-->
				</div>
                <!--//music-right-->
                <div class="clearfix"></div>
                <!-- /w3l-agile-its -->
            </div>
            <!--body wrapper start-->

			<div class="review-slider">
				<div class="tittle-head">
					<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
					<div class="clearfix"> </div>
				</div>
				<ul id="flexiselDemo1">
					<?php if (isset($featured)) {
						foreach ($featured as $alb) {
							$id_r = $alb->id_album;
							?>
							<li>
								<a href="<?php echo base_url('album/detail/'),$id_r?>"><img src="<?php echo base_url('assets/foto_album/')?><?php echo $alb->picture_album;?>" alt=""/></a>
								<div class="slide-title"><h4><?php echo $alb->nama_album?></div>
								<div class="date-city">
									<h5><?php echo $alb->nama_artist?></h5>
									<div class="buy-tickets">
										<a href="<?php echo base_url('album/detail/'),$id_r?>">READ MORE</a>
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
	</div>
    <!--body wrapper end-->
<?php
$this->load->view('main_page/parts/V_Footer');
