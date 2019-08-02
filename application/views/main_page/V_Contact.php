<?php
$this->load->view('main_page/parts/V_Header');
$this->load->view('main_page/parts/V_Navigation');
?>


<!-- main content start-->
<div class="main-content">
    <!-- header-starts -->
    <div class="header-section">
        <!--toggle button start-->
        <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->
        <!--notification menu start -->
        <div class="menu-right">
            <div class="profile_details">
                <div style="float: right; padding-bottom: 10px" class="col-md-6 login-pop">
                    <div id="loginpop">
                        <a href="<?php echo base_url('login');?>">
                            <span>Login</span></a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-------->
            <!-- /w3l-agile -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!--notification menu end -->
    <!-- //header-ends -->

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
                    <div style="content: 'center';" class="in-left">
                        <form action="<?php echo base_url('contact/kirim')?>" method="post">
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
                        </form>
                    </div>
                    <div class="clearfix"> </div>
<!--                <div class="contact-right1">-->
<!--                    <h3><span>Social Websites</span></h3>-->
<!--                    <h4>Nullam ac urna velit pellentesque in <label>arcu tortor-->
<!--                            Pellentesque nec</label></h4>-->
<!--                    <p>Nullam ac urna velit. Pellentesque in arcu tortor.-->
<!--                        Pellentesque nec est et elit varius pulvinar eget vitae sapien.-->
<!--                        Aenean vehicula accumsan gravida. Cum sociis natoque penatibus-->
<!--                        et magnis dis parturient montes, nascetur ridiculus mus. Phasellus-->
<!--                        et lectus in urna consequat consectetur ut eget risus.</p>-->
<!--                    <ul class=" side-icons con">-->
<!--                        <li><a class="fb" href="#"></a></li>-->
<!--                        <li><a class="twitt" href="#"></a></li>-->
<!--                        <li><a class="goog" href="#"></a></li>-->
<!--                        <li><a class="drib" href="#"></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
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

