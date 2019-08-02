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
                        <h3 class="tittle">New Releses <span class="new">New</span></h3>
                        <a href="<?php echo base_url('assets/main_page/')?>browse.html"><h4 class="tittle third">See all</h4></a>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Telugu</a></li>
                            <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Hindi</a></li>
                            <li role="presentation" class="dropdown">
                                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">English <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                    <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Melody</a></li>
                                    <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Classic</a></li>
                                </ul>
                            </li>
                            <li role="presentation"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tamil</a></li>
                            <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Malayalam</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                                <div class="browse-inner">
                                    <!-- /agileits -->

                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a3.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sukhwinder singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a6.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shekhar Ravjiani</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a7.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shalmali</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a4.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sajid-Wajid</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a5.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Atif Aslam</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a1.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">A R Rahman</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a2.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shreya Ghoshal</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a8.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Lata Mangeshkar</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="browse-inner">
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a1.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">A R Rahman</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a2.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shreya Ghoshal</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a3.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sukhwinder singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a6.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shekhar Ravjiani</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a7.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shalmali</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a4.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sajid-Wajid</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a5.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Atif Aslam</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a8.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Lata Mangeshkar</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
                                <div class="browse-inner">

                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a1.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">A R Rahman</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a2.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shreya Ghoshal</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a3.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sukhwinder singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a6.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shekhar Ravjiani</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a7.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shalmali</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a4.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sajid-Wajid</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a5.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Atif Aslam</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a8.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Lata Mangeshkar</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
                                <div class="browse-inner">

                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a1.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">A R Rahman</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a2.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shreya Ghoshal</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a3.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sukhwinder singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a6.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shekhar Ravjiani</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a7.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shalmali</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a4.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sajid-Wajid</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a5.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Atif Aslam</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a8.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Lata Mangeshkar</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                                <div class="browse-inner">

                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a2.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shreya Ghoshal</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a8.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Lata Mangeshkar</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a3.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sukhwinder singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a6.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shekhar Ravjiani</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a7.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shalmali</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a4.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sajid-Wajid</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a5.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Atif Aslam</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a1.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">A R Rahman</a>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="browse-inner">


                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a3.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sukhwinder singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a6.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shekhar Ravjiani</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a7.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shalmali</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a4.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sajid-Wajid</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a5.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Atif Aslam</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a1.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">A R Rahman</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a2.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Shreya Ghoshal</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a8.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Lata Mangeshkar</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a9.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Arijit Sing</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a10.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Sunidhi Chauhan</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a11.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Yo Yo Honey Singh</a>
                                    </div>
                                    <div class="col-md-3 artist-grid">
                                        <a  href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/a12.jpg" title="allbum-name"></a>
                                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
                                        <a class="art" href="<?php echo base_url('assets/main_page/')?>single.html">Neeti Mohan</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /agileinfo -->
                </div>
                <!--//End-albums-->

                <!--//discover-view-->
                <div class="albums fourth">
                    <div class="tittle-head two">
                        <h3 class="tittle">Discover <span class="new">View</span></h3>
                        <a href="<?php echo base_url('assets/main_page/')?>browse.html"><h4 class="tittle third">See all</h4></a>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v11.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v22.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v33.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid last-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v44.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v55.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v66.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v77.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid last-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v88.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v99.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v9.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v21.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="col-md-3 artist-grid">
                        <a href="<?php echo base_url('assets/main_page/')?>single.html"><img src="<?php echo base_url('assets/main_page/')?>images/v5.jpg" title="allbum-name"></a>
                        <div class="inner-info"><h5>Pop</h5></div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//discover-view-->
            <!--//music-left-->
        </div>
        <!--body wrapper start-->
    </div>
<?php
    $this->load->view('main_page/parts/V_Footer');
?>

