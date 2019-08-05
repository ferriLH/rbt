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
                    <h3 class="tittle">New Releses <span class="new">New</span></h3>
                    <a href="<?php echo base_url('assets/main_page/')?>browse.html"><h4 class="tittle third">See all</h4></a>
                    <div class="clearfix"> </div>
                </div>
                <?php foreach ($album as $a){?>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/<?php echo $a->picture_album?>" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html"><?php echo $a->nama_album?></a>
                </div>
                <?php } ?>
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v22.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Jaremy Cam</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v33.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Selah</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v44.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Jim Brickman</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v1.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Adele21</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v55.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Party Night</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v6.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Ellie Goluding</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v66.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Diana</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v6.jpeg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Fifty Shades</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v2.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Shomlock</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v3.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Lootera</a>-->
<!--                </div>-->
<!--                <div class="col-md-3 browse-grid">-->
<!--                    <a  href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><img src="--><?php //echo base_url('assets/main_page/')?><!--images/v4.jpg" title="allbum-name"></a>-->
<!--                    <a href="--><?php //echo base_url('assets/main_page/')?><!--single.html"><i class="glyphicon glyphicon-play-circle"></i></a>-->
<!--                    <a class="sing" href="--><?php //echo base_url('assets/main_page/')?><!--single.html">Stuck on a feeling</a>-->
<!--                </div>-->
                <div class="clearfix"> </div>
            </div>
            <!--//End-albums-->

            <div class="browse">
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v10.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Fifty Shades</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v9.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Alan Jackson</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v77.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Cheristina aguilera</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v88.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Samsmith</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v1.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Adele21</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v99.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Big Duty</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v6.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Ellie Goluding</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v66.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Diana</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v6.jpeg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Fifty Shades</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v21.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Joe</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v3.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Lootera</a>
                </div>
                <div class="col-md-3 browse-grid">
                    <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v4.jpg" title="allbum-name"></a>
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                    <a class="sing" href="<?php echo base_url('assets/main_page/')?>single.html">Stuck on a feeling</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--//End-albums-->
            <!--//discover-view-->
            <!--//music-left-->
        </div>

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
                    <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v21.jpg" alt=""/></a>
                    <div class="slide-title"><h4>Joe</h4></div>
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
                    <div class="slide-title"><h4>Ellie Goluding</h4></div>
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
    <!-- /w3l-agile-info -->
</div>

<?php
$this->load->view('main_page/parts/V_Footer');
?>


