<?php
$islogin =  $this->session->userdata('isLogin');
?>
<body class="sticky-header left-side-collapsed" onload="initMap()">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo" style="padding-bottom: 8px">
            <a href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/main_page/images/logotatitut.png')?>">
        </div>
        <div class="logo-icon text-center">
            <a href="<?php echo base_url()?>">T</a>
        </div>
        <!-- /w3l-agile -->
        <!--logo and iconic logo end-->
        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="<?php echo base_url()?>"><i class="lnr lnr-home"></i><span>Home</span></a></li>
<!--                <li><a href="--><?php //echo base_url()?><!--assets/main_page/radio.html"><i class="camera"></i> <span>Radio</span></a></li>-->
                <li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-th"></i><span>Apps</span></a></li>
                <li><a href="<?php echo base_url('artist')?>"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>
                <li><a href="<?php echo base_url('album')?>"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>
                <li class="menu-list"><a href="<?php echo base_url('album')?>"><i class="lnr lnr-indent-increase"></i> <span>Browser</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo base_url()?>assets/main_page/browse.html">Artists</a> </li>
                        <li><a href="<?php echo base_url()?>assets/main_page/404.html">Services</a> </li>
                    </ul>
                </li>
<!--                <li><a href="--><?php //echo base_url()?><!--assets/main_page/blog.html"><i class="lnr lnr-book"></i><span>Blog</span></a></li>-->
<!--                <li><a href="--><?php //echo base_url()?><!--assets/main_page/typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>-->
                <li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo base_url()?>assets/main_page/radio.html">All Songs</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="<?php echo base_url()?>contact"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo base_url()?>contact">Location</a> </li>
                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- /w3layouts-agile -->
    <!-- app-->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog facebook" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="app-grids">
                        <div class="app">
                            <div class="col-md-5 app-left mpl">
                                <h3>Mosaic mobile app on your smartphone!</h3>
                                <p>Download and Avail Special Songs Videos and Audios.</p>
                                <div class="app-devices">
                                    <h5>Gets the app from</h5>
                                    <a onclick="ComingSoon()" href="#"><img src="<?php echo base_url()?>assets/main_page/images/1.png" alt=""></a>
                                    <a onclick="ComingSoon()" href="#"><img src="<?php echo base_url()?>assets/main_page/images/2.png" alt=""></a>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-7 app-image">
                                <img src="<?php echo base_url()?>assets/main_page/images/apps.png" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //app-->
    <!-- /w3l-agile -->
    <!-- signup -->
<!--    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--        <div class="modal-dialog" role="document">-->
<!--            <div class="modal-content modal-info">-->
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                </div>-->
<!--                <div class="modal-body modal-spa">-->
<!--                    <div class="sign-grids">-->
<!--                        <div class="sign">-->
<!--                            <div class="sign-left">-->
<!--                                <ul>-->
<!--                                    <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>-->
<!--                                    <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>-->
<!--                                    <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="sign-right">-->
<!--                                <form action="#" method="post">-->
<!---->
<!--                                    <h3>Create your account </h3>-->
<!--                                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">-->
<!--                                    <input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">-->
<!--                                    <input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">-->
<!--                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">-->
<!---->
<!--                                    <input type="submit" value="CREATE ACCOUNT" >-->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- //signup -->
    <!-- /w3l-agile -->
    <!-- left side end-->
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
                    <div style="" class="col-md-4 serch-part">
                        <div  id="sb-search" class="sb-search">
                            <form action="#" method="post">
								<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!-- search-scripts -->
                    <script src="<?php echo base_url()?>assets/main_page/js/classie.js"></script>
                    <script src="<?php echo base_url()?>assets/main_page/js/uisearch.js"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <?php if ($islogin == FALSE) {?>
                    <div style="padding-right: 20%;float: right; padding-bottom: 10px;clear: right;" class="col-md-4 login-pop">
                        <div id="loginpop">
                            <a href="<?php echo base_url('login')?>">
                                <span>Login
                    <?php } else{?>
                            <div style="padding-right: 0%;float: right; padding-bottom: 10px;clear: right;" class="col-md-4 login-pop">
                        <div id="loginpop">
                            <a href="<?php echo base_url('dashboard')?>">
                                <span>Dashboard
                                    <?php }?>
                                </span>
                            </a>
                        </div>
                    </div>
                                     <div class="clearfix"> </div>
                        </div>
                        <!-------->
                    </div>
                    <div class="clearfix"></div>
                </div>
</body>
