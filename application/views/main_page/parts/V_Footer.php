<?php
$login = $this->session->userdata('isLogin');
?>
<div class="footer">
    <div class="footer-grid">
        <h3>Navigation</h3>
        <ul class="list1">
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li><a href="<?php echo base_url('contact')?>">Contact</a></li>
        </ul>
    </div>
    <div class="footer-grid">
        <h3>Our Account</h3>
        <ul class="list1">
            <?php if ($login == TRUE){?>
            <li><a href="<?php echo base_url('dashboard')?>" >Your Account</a></li>
            <?php } else {?>
            <li><a href="<?php echo base_url('login')?>" >Your Account</a></li>
            <?php  }?>
        </ul>
    </div>
    <div class="footer-grid">
        <h3>Our Support</h3>
        <ul class="list1">
            <li><a href="<?php echo base_url('contact')?>">Site Map</a></li>
            <li><a href="#">Search Terms</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal1">Mobile</a></li>
            <li><a href="<?php echo base_url('contact')?>">Contact  Us</a></li>
        </ul>
    </div>
    <div class="footer-grid">
        <h3>Newsletter</h3>
        <p class="footer_desc">Jika anda ingin kabar terbaru tentang kami, maka silahkan masukan email anda dibawah ini</p>
        <div class="search_footer">
            <form>
                <input type="text" placeholder="Email...." required="">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div class="footer-grid footer-grid_last">
        <h3>About Us</h3>
    <h1><img src="<?php echo base_url('assets/main_page/images/')?>Homelogo.png"></h1>
        <p class="footer_desc">Alpha Omega Wahana Nusantara
            Jl. Kuningan Barat Raya No.8, RT.1/RW.3, Kuningan Bar., Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12710</p>
        <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;(021) 52905137-9</p>
        <p class="email">Email : &nbsp;<span><a href="mailto:support@alpha-omega.co.id">support@alpha-omega.co.id</a></span></p>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<!--footer section start-->
<footer>
    <p>&copy 2019. AlphaOmega All Rights Reserved </p>
</footer>
<!--footer section end-->
<!-- /w3l-agile -->
<!-- main content end-->
</section>

<script src="<?php echo base_url()?>assets/main_page/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/main_page/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>assets/main_page/js/bootstrap.js"></script>
</body>
</html>
