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
                    <div class="col-md-4 serch-part">
                        <div id="sb-search" class="sb-search">
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
                    <!-- //search-scripts -->
                    <!---->
                    <div class="col-md-4 player">
                        <div class="audio-player">
                            <audio id="audio-player"  controls="controls">
                                <source src="<?php echo base_url()?>assets/main_page/media/Blue Browne.ogg" type="audio/ogg"></source>
                                <source src="<?php echo base_url()?>assets/main_page/media/Blue Browne.mp3" type="audio/mpeg"></source>
                                <source src="<?php echo base_url()?>assets/main_page/media/Georgia.ogg" type="audio/ogg"></source>
                                <source src="<?php echo base_url()?>assets/main_page/media/Georgia.mp3" type="audio/mpeg"></source>
                            </audio>
                        </div>
                        <!---->
                        <script type="text/javascript">
                            $(function(){
                                $('#audio-player').mediaelementplayer({
                                    alwaysShowControls: true,
                                    features: ['playpause','progress','volume'],
                                    audioVolume: 'horizontal',
                                    iPadUseNativeControls: true,
                                    iPhoneUseNativeControls: true,
                                    AndroidUseNativeControls: true
                                });
                            });
                        </script>
                        <!--audio-->
                        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/main_page/css/audio.css">
                        <script type="text/javascript" src="<?php echo base_url()?>assets/main_page/js/mediaelement-and-player.min.js"></script>
                        <!---->


                        <!--//-->
                        <ul class="next-top">
                            <li><a class="ar" href="#"> <img src="<?php echo base_url()?>assets/main_page/images/arrow.png" alt=""/></a></li>
                            <li><a class="ar2" href="#"><img src="<?php echo base_url()?>assets/main_page/images/arrow2.png" alt=""/></i></a></li>

                        </ul>
                    </div>
                    <div class="col-md-4 login-pop">
                        <div id="loginpop">
                            <a href="<?php echo base_url('login')?>">
                                <span>Login
<!--                            <div id="loginBox">-->
<!--                                <form action="#" method="post" id="loginForm">-->
<!--                                    <fieldset id="body">-->
<!--                                        <fieldset>-->
<!--                                            <label for="email">Email Address</label>-->
<!--                                            <input type="text" name="email" id="email">-->
<!--                                        </fieldset>-->
<!--                                        <fieldset>-->
<!--                                            <label for="password">Password</label>-->
<!--                                            <input type="password" name="password" id="password">-->
<!--                                        </fieldset>-->
<!--                                        <input type="submit" id="login" value="Sign in">-->
<!--                                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>-->
<!--                                    </fieldset>-->
<!--                                    <span><a href="#">Forgot your password?</a></span>-->
<!--                                </form>-->
<!--                            </div>-->
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
                                <ul class="rslides callbacks callbacks1" id="slider4">
                                    <li>
                                        <div class="banner-img">
                                            <img src="<?php echo base_url()?>assets/main_page/images/11.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="banner-info">
                                            <a class="trend" href="<?php echo base_url()?>assets/main_page/single.html">TRENDING</a>
                                            <h3>Let Your Home</h3>
                                            <p>Album by <span>Rock star</span></p>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="banner-img">
                                            <img src="<?php echo base_url()?>assets/main_page/images/22.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="banner-info">
                                            <a class="trend" href="<?php echo base_url()?>assets/main_page/single.html">TRENDING</a>
                                            <h3>Charis Brown feet</h3>
                                            <p>Album by <span>Rock star</span></p>
                                        </div>


                                    </li>
                                    <li>
                                        <div class="banner-img">
                                            <img src="<?php echo base_url()?>assets/main_page/images/33.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="banner-info">
                                            <a class="trend" href="<?php echo base_url()?>assets/main_page/single.html">TRENDING</a>
                                            <h3>Let Your Home</h3>
                                            <p>Album by <span>Rock star</span></p>
                                        </div>

                                        <!-- /w3layouts-agileits -->
                                    </li>
                                </ul>
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
                    <!--//End-banner-->
                    <!--albums-->
                    <!-- pop-up-box -->
                    <link href="<?php echo base_url()?>assets/main_page/css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
                    <script src="<?php echo base_url()?>assets/main_page/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
                    <div class="albums">
                        <div class="tittle-head">
                            <h3 class="tittle">New Releases <span class="new">New</span></h3>
                            <a href="<?php echo base_url()?>"><h4 class="tittle">See all</h4></a>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v1.jpg" title="allbum-name"></a>
                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div id="small-dialog" class="mfp-hide">
                            <iframe src="https://player.vimeo.com/video/12985622"></iframe>

                        </div>
                        <div class="col-md-3 content-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v2.jpg" title="allbum-name"></a>

                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v3.jpg" title="allbum-name"></a>

                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div class="col-md-3 content-grid last-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v4.jpg" title="allbum-name"></a>

                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v5.jpg" title="allbum-name"></a>

                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div id="small-dialog" class="mfp-hide">
                            <iframe src="https://player.vimeo.com/video/12985622"></iframe>

                        </div>
                        <div class="col-md-3 content-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v6.jpg" title="allbum-name"></a>

                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v7.jpg" title="allbum-name"></a>

                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div class="col-md-3 content-grid last-grid">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo base_url()?>assets/main_page/images/v8.jpg" title="allbum-name"></a>
                            <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--//End-albums-->
                    <!--//discover-view-->

                    <div class="albums second">
                        <div class="tittle-head">
                            <h3 class="tittle">Discover <span class="new">View</span></h3>
                            <a href="<?php echo base_url()?>assets/main_page/index.html"><h4 class="tittle two">See all</h4></a>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v11.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v22.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v33.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid last-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v44.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v55.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v66.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v11.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="col-md-3 content-grid last-grid">
                            <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v22.jpg" title="allbum-name"></a>
                            <div class="inner-info"><a href="<?php echo base_url()?>assets/main_page/single.html"><h5>Pop</h5></a></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--//discover-view-->
                </div>
                <!--//music-left-->
                <!--/music-right-->
                <div class="music-right">
                    <!--/video-main-->
                    <div class="video-main">
                        <div class="video-record-list">
                            <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                                <div class="jp-type-playlist">
                                    <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="<?php echo base_url()?>assets/main_page/video/play1.png" style="width: 480px; height: 270px; display: inline;"><video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video></div>
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
                                        <ul style="display: block;">
                                            <li class="jp-playlist-current">
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding
                                                        <span class="jp-artist">by Pixar</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown
                                                        <span class="jp-artist">by Pixar</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding
                                                        <span class="jp-artist">by Pixar</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar
                                                        <span class="jp-artist">by Pixar</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams
                                                        <span class="jp-artist">by Pixar
                                                        </span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding
                                                        <span class="jp-artist">by Pixar</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                                    <a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams
                                                        <span class="jp-artist">by Pixar</span>
                                                    </a>
                                                </div>
                                            </li>
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

                                {
                                    title:"1. Ellie-Goulding",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play1.png"
                                },
                                {
                                    title:"2. Mark-Ronson-Uptown",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Mark-Ronson-Uptown.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Mark-Ronson-Uptown.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Mark-Ronson-Uptown.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play2.png"
                                },
                                {
                                    title:"3. Ellie-Goulding",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play1.png"
                                },
                                {
                                    title:"4. Maroon-Sugar",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Maroon-Sugar.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Maroon-Sugar.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Maroon-Sugar.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play4.png"
                                },
                                {
                                    title:"5. Pharrell-Williams",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Pharrell-Williams.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Pharrell-Williams.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Pharrell-Williams.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play5.png"
                                },
                                {
                                    title:"6. Ellie-Goulding",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Ellie-Goulding.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play1.png"
                                },
                                {
                                    title:"7. Pharrell-Williams",
                                    artist:"",
                                    mp4: "<?php echo base_url()?>assets/main_page/video/Pharrell-Williams.mp4",
                                    ogv: "<?php echo base_url()?>assets/main_page/video/Pharrell-Williams.ogv",
                                    webmv: "<?php echo base_url()?>assets/main_page/video/Pharrell-Williams.webm",
                                    poster:"<?php echo base_url()?>assets/main_page/video/play5.png"
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
                    <!--/app_store-->
                    <!-- Modal -->
                    <script>
                        function ComingSoon() {
                            Swal.fire(
                                'Coming Soon!',
                                'we hope we can launch soon',
                                'info'
                            )
                        }
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
                    <div class="price-section">
                        <div class="pricing-inner">
                            <h3 class="hd-tittle">Side Banner</h3>
                            <div class="pricing">
                                <div class="price-top">
                                    <h3><span>$20</span></h3>
                                    <h4>per year</h4>
                                </div>
                                <div class="price-bottom">
                                    <ul>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">No ads unlimited Devices</a><div class="clearfix"></div></li>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
                                    </ul>
                                    <a href="<?php echo base_url()?>assets/main_page/single.html" class="price">Upgrade</a>
                                </div>
                            </div>
                            <div class="pricing two">
                                <div class="price-top">
                                    <h3><span>$30</span></h3>
                                    <h4>per year</h4>
                                </div>
                                <div class="price-bottom">
                                    <ul>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Download unlimited songs</a><div class="clearfix"></div></li>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">No ads unlimited Devices</a><div class="clearfix"></div></li>
                                        <li><a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a><div class="clearfix"></div></li>
                                    </ul>
                                    <a href="<?php echo base_url()?>assets/main_page/single.html" class="price">Upgrade</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--//end-pricing-tables-->
                    </div>
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
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v1.jpg" alt=""/></a>
                        <div class="slide-title"><h4>Adele21 </div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v2.jpg" alt=""/></a>
                        <div class="slide-title"><h4>Adele21</h4></div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v3.jpg" alt=""/></a>
                        <div class="slide-title"><h4>Shomlock</h4></div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v4.jpg" alt=""/></a>
                        <div class="slide-title"><h4>Stuck on a feeling</h4></div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v5.jpg" alt=""/></a>
                        <div class="slide-title"><h4>Ricky Martine </h4></div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v6.jpg" alt=""/></a>
                        <div class="slide-title"><h4>Ellie Goluding </h4></div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>assets/main_page/single.html"><img src="<?php echo base_url()?>assets/main_page/images/v6.jpeg" alt=""/></a>
                        <div class="slide-title"><h4>Fifty Shades </h4></div>
                        <div class="date-city">
                            <h5>Jan-02-16</h5>
                            <div class="buy-tickets">
                                <a href="<?php echo base_url()?>assets/main_page/single.html">READ MORE</a>
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
                <script type="text/javascript" src="<?php echo base_url()?>assets/main_page/js/jquery.flexisel.js"></script>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--body wrapper end-->
        <!-- /w3l-agile -->
    </div>
    <!--body wrapper end-->

<?php
$this->load->view('main_page/parts/V_Footer');