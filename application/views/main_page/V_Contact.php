<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>

    <div id="page-wrapper">
		<div class="inner-content">
			<div class="tittle-head">
				<h3 class="tittle">Find Us </h3>
				<div class="clearfix"> </div>
			</div>
            <!-- /contact-->
			<div class="contact">
                <div class="contact-left">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.773741593619!2d106.82392451097411!3d-6.238679525053981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ddf8ce9bd1%3A0xdd9d33de0a966a7!2sGedung+Cyber!5e0!3m2!1sid!2sid!4v1564643549245!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="contact-right">
                    <p class="phn">(021) 5290515137-9</p>
                    <p class="phn-bottom">PT. AlphaOmega Wahana Nusantara
                        <span>Jl. Kuningan Barat No.8</span></p>
                    <p class="lom">Cyber Building (Gedung Elektrindo) 5th Floor, Jakarta Selatan 12710</p>
                </div>
                <div class="clearfix"> </div>
				<h3>Contact Us With <span>Any questions</span></h3>
				<form action="<?php echo base_url('contact/kirim')?>" method="post">
					<div style="content: 'center';" class="in-left">
                            <?php if($this->session->flashdata('sukses')){?>
                                <script>
                                    Swal.fire(
                                        'Pesan Berhasil Dikirim!',
                                        'Terimakasih atas masukan anda',
                                        'success'
                                    )
                                </script>
                            <?php }?>
						<p class="your-para">Nama Lengkap :</p>
						<input name="nama" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
						<p class="your-para">Email :</p>
						<input type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
						<p class="your-para">No HP/Telpon:</p>
						<input type="text" name="notelp" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
					</div>
					<div class="in-right">
						<textarea name="pesan" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required=""></textarea>
						<input type="submit" value="Submit">
					</div>
				</form>
				<div class="clearfix"> </div>
                <!-- //contact -->
                <!-- /wthree-agile -->
            </div>
        </div>
        <div class="clearfix"></div>
        <!--body wrapper end-->

    </div>
    <!--body wrapper end-->

<?php
$this->load->view('main_page/parts/V_Footer');
?>

