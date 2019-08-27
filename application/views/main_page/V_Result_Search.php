<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>
<br><br>
<div class="container">
	<hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"><?php echo count($result)?></strong> results were found for the search for <strong class="text-danger"><?php echo $key?></strong></h2>
	</hgroup>

	<section class="col-xs-12 col-sm-6 col-md-12">
		<?php
		if(isset($result)){
			foreach ($result as $r){?>
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="<?php echo $r->nama_artist;?>" class="thumbnail">
					<img class="img-responsive" style="max-height: 300px" src="<?php echo base_url('assets/foto_artis/').$r->picture_artist;?>" alt="<?php echo $r->nama_artist;?>" />
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						<a href="<?php echo base_url('artist/detail/'),$r->id_artists?>">
							<i class="glyphicon glyphicon-user"> </i><?php echo "&nbsp;".$r->nama_artist;?>
						</a>
					</li>
					<li class="list-group-item">
						<a href="<?php echo base_url('album/detail/').$r->id_album?>">
							<i class="glyphicon glyphicon-cd"> </i><?php echo "&nbsp;".$r->nama_album;?>
						</a>
					</li>
					<li class="list-group-item">
						<a href="<?php echo base_url('search?search=').$r->genre?>">
							<i class="glyphicon glyphicon-tags""> </i><?php echo "&nbsp;&nbsp;".$r->genre;?>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><?php echo $r->judul;?></h3>
				<div class="row">
					<div class="col-sm-4">
						<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/xlaxiata.png');?>" alt="XL">
						<br>
						<small><?php echo "Ketik : <b>".$r->kode_xl."</b>"?></small><br>
						<small><?php echo "Kirim ke : <b>1818</b>"?></small> <br>
						<small><?php echo "Tarif : ".$r->harga_xl."/lagu"?></small> <br><br>
						<small>Untuk Memberikan nada sambung ke teman,</small> <br>
						<small>
							<?php echo "Ketik : <b>GIFT</b> (spasi) <b> Nomor XL teman </b>(spasi)<b>".$r->kode_xl."</b>"?>
						</small><br>
						<small><?php echo "Kirim ke : <b>1818</b>"?></small> <br>
						<?php
						if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
						{
							echo "<a href='sms:1818&body=".$r->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
						}elseif ($this->agent->is_mobile('android'))
						{
							echo "<a href='sms:1818?body=".$r->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
						}else
						{
							echo "<a href='sms:1818?body=".$r->kode_xl."'><button class='btn btn-default'>Kirim SMS</button></a>";
						}
						?>
						<br><br>
					</div>
					<div class="col-sm-4">
						<img style="max-height: 25px;" src="<?php echo base_url('assets/main_page/images/telkom.png')?>" alt="TELKOMSEL">
						<br>

						<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$r->kode_tsel1."</b>"?></small><br>
						<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
						<small><?php echo "Tarif : ".$r->harga_tsel1."/lagu"?></small> <br>
						<?php
						if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
						{
							echo "<a href='sms:1212&body=RING SUB ".$r->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 hari</button></a>";
						}elseif ($this->agent->is_mobile('android'))
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 hari</button></a>";
						}else
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel1."'><button class='btn btn-default'>Berlangganan 3 hari</button></a>";
						}
						?> <br><br>

						<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$r->kode_tsel3."</b>"?></small><br>
						<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
						<small><?php echo "Tarif : ".$r->harga_tsel2."/lagu"?></small><br>

						<?php
						if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
						{
							echo "<a href='sms:1212&body=RING SUB ".$r->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 hari</button></a>";
						}elseif ($this->agent->is_mobile('android'))
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 hari</button></a>";
						}else
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel2."'><button class='btn btn-default'>Berlangganan 7 hari</button></a>";
						}
						?><br><br>

						<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$r->kode_tsel3."</b>"?></small><br>
						<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
						<small><?php echo "Tarif : ".$r->harga_tsel3."/lagu"?></small> <br>
						<?php
						if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
						{
							echo "<a href='sms:1212&body=RING SUB ".$r->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 hari</button></a>";
						}elseif ($this->agent->is_mobile('android'))
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 hari</button></a>";
						}else
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel3."'><button class='btn btn-default'>Berlangganan 14 hari</button></a>";
						}
						?><br><br>

						<small><?php echo "Ketik : <b>RING</b> (spasi)<b> SUB</b> (spasi) <b>".$r->kode_tsel3."</b>"?></small><br>
						<small><?php echo "Kirim ke : <b>1212</b>"?></small> <br>
						<small><?php echo "Tarif : ".$r->harga_tsel3."/lagu"?></small> <br>


						<?php
						if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
						{
							echo "<a href='sms:1212&body=RING SUB ".$r->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 hari</button></a>";
						}elseif ($this->agent->is_mobile('android'))
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 hari</button></a>";
						}else
						{
							echo "<a href='sms:1212?body=RING SUB ".$r->kode_tsel4."'><button class='btn btn-default'>Berlangganan 30 hari</button></a>";
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
						<small><?php echo "Ketik : <b>SET</b> (spasi) <b>".$r->kode_indosat."</b>"?></small><br>
						<small><?php echo "Kirim ke : <b>808</b>"?></small> <br>
						<small><?php echo "Tarif : ".$r->harga_indosat."/lagu"?></small> <br><br>
						<small>Untuk Memberikan nada sambung ke teman,</small> <br>
						<small>
							<?php echo "Ketik : GIFT</b> (spasi) <b>".$r->kode_indosat."</b> (spasi)<b> Nomor HP teman</b>"?>
						</small><br>
						<small><?php echo "Kirim ke : <b>808</b>"?></small> <br>
						<?php
						if ($this->agent->is_mobile('iphone')||$this->agent->is_mobile('ipod')||$this->agent->is_mobile('ipad'))
						{
							echo "<a href='sms:808&body=SET ".$r->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
						}elseif ($this->agent->is_mobile('android'))
						{
							echo "<a href='sms:808?body=SET ".$r->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
						}else
						{
							echo "<a href='sms:808?body=SET ".$r->kode_indosat."'><button class='btn btn-default'>Kirim SMS</button></a>";
						}
						?>
						<br><br>
					</div>
				</div>
			</div>
			<span class="clearfix borda"></span>
		</article>
			<?php
			}
		}
		?>
	</section>
</div>

<br><br><br><br><br>

<?php
$this->load->view('main_page/parts/V_Footer');
?>
