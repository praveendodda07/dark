<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dark Horse Media is a 360° advertising agency where we champion free thinking, in a stress-free work atmosphere where ideas cross-pollinate to produce innovative solutions for brands to connect with their consumers on the web.">
    <meta name="keywords" content="Digital Marketing Company in mumbai, website development company, website development company, website design company in mumbai">
    <link rel="shortcut icon" href="assets/images/DHM-Favicon.png" type="image/x-icon"> -->
    <title>AF Ad agency</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- icon CSS -->
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/elegant-icon-style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

    <!-- other CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/particle.css">
    <link rel="stylesheet" href="assets/css/animated.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/js/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/js/owl-carousel/assets/owl.theme.default.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .client_wrap {
            /*padding: 100px 0 80px;*/
            padding-bottom: 50px;
            background: #ffffff;
            position: relative;
            z-index: 10;
        }

        .client_wrap .container {
            padding: 60px 0 100px 0;
        }

        section.portfolio .gallery-title {
            font-size: 36px;
            color: black;
            text-align: center;
            font-weight: 500;
            margin: 25px;

        }

        section.portfolio-wrap {
            /* padding: 50px 0 50px; */
            padding-bottom: 50px;
            background: #f2f2f2;
            position: relative;
            z-index: 10;
        }

        section.portfolio-wrap .container {
            padding-top: 30px;
        }

        section.testimonial.text-center {
            padding-bottom: 50px;
            /* background: #f2f2f2; */
            position: relative;
            z-index: 10;
        }

        section.portfolio .gallery-title:after {
            content: "";
            position: absolute;

        }

        section.portfolio .filter-button {
            font-size: 18px;
            border: 2px solid black;
            border-radius: 5px;
            text-align: center;
            color: black;
            margin-bottom: 30px;

        }

        section.portfolio .filter-button:hover {
            font-size: 18px;
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: black !important;

        }

        @media only screen and (max-width: 600px) {
            section.portfolio .flogo {
                height: 260px;
                width: 260px;
            }
        }


        section.portfolio .btn-default:active .filter-button:active {
            background-color: black !important;
            color: white;
        }

        section.portfolio .port-image {
            width: 100%;
        }

        section.portfolio .gallery_product {
            margin-bottom: 30px;
        }

        section.portfolio .hct {
            height: 500px;
            width: 400px;
        }

        @media screen and (max-width: 992px) {
            section.portfolio .hct {
                height: 500px;
                max-width: 100%;
                ;
            }
        }


        @media screen and (max-width: 600px) {
            section.portfolio .hct {
                height: 500px;
                width: 600px;
            }
        }
    </style>
    <style>
        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: black;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(img/heading-line.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {

            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /*-----Testimonial-------*/

        .testimonial:after {
            position: absolute;
            top: -0 !important;
            left: 0;
            content: " ";
            background: url(img/testimonial.bg-top.png);
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }

        .testimonial {

            position: relative;


            background-position: center;
            background-size: cover;

        }

        #testimonial4 .carousel-inner:hover {
            cursor: -moz-grab;
            cursor: -webkit-grab;
        }

        #testimonial4 .carousel-inner:active {
            cursor: -moz-grabbing;
            cursor: -webkit-grabbing;
        }

        #testimonial4 .carousel-inner .item {
            overflow: hidden;
        }

        .testimonial4_indicators .carousel-indicators {
            left: 0;
            margin: 0;
            width: 100%;
            font-size: 0;
            height: 20px;
            bottom: 15px;
            padding: 0 5px;
            cursor: e-resize;
            overflow-x: auto;
            overflow-y: hidden;
            position: absolute;
            text-align: center;
            white-space: nowrap;
        }

        .testimonial4_indicators .carousel-indicators li {
            padding: 0;
            width: 14px;
            height: 14px;
            border: none;
            text-indent: 0;
            margin: 2px 3px;
            cursor: pointer;
            display: inline-block;
            background: #ffffff;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }

        .testimonial4_indicators .carousel-indicators .active {
            padding: 0;
            width: 14px;
            height: 14px;
            border: none;
            margin: 2px 3px;
            background-color: #9dd3af;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }

        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
            height: 3px;
        }

        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
            background: #eeeeee;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .testimonial4_control_button .carousel-control {
            top: 175px;
            opacity: 1;
            width: 40px;
            bottom: auto;
            height: 40px;
            font-size: 10px;
            cursor: pointer;
            font-weight: 700;
            overflow: hidden;
            line-height: 38px;
            text-shadow: none;
            text-align: center;
            position: absolute;
            background: transparent;
            border: 2px solid #ffffff;
            text-transform: uppercase;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
            transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
        }

        .testimonial4_control_button .carousel-control.left {
            left: 7%;
            top: 50%;
            right: auto;
        }

        .testimonial4_control_button .carousel-control.right {
            right: 7%;
            top: 50%;
            left: auto;
        }

        .testimonial4_control_button .carousel-control.left:hover,
        .testimonial4_control_button .carousel-control.right:hover {
            color: #000;
            background: #fff;
            border: 2px solid #fff;
        }

        .testimonial4_header {
            top: 0;
            left: 0;
            bottom: 0;
            width: 550px;
            display: block;
            margin: 30px auto;
            text-align: center;
            position: relative;
        }

        .testimonial4_header h4 {
            color: #ffffff;
            font-size: 30px;
            font-weight: 600;
            position: relative;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .testimonial4_slide {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 70%;
            margin: auto;
            padding: 20px;
            position: relative;
            text-align: center;
        }

        .testimonial4_slide img {
            top: 0;
            left: 0;
            right: 0;
            width: 200px;
            height: 100px;
            margin: auto;
            display: block;
            color: #f2f2f2;
            font-size: 18px;
            line-height: 46px;
            text-align: center;
            position: relative;

        }

        .testimonial4_slide p {
            color: black;
            font-size: 15px;
            line-height: 1.4;
            margin: 40px 0 20px 0;
        }

        .testimonial4_slide h4 {
            color: black;
            font-size: 13px;
        }



        .testimonial .carousel-control-next-icon,
        .testimonial .carousel-control-prev-icon {
            width: 35px;
            height: 35px;
        }

        .btn {
            background-color: #3a3b3c;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
        }

        /* Darker background on mouse-over */
        .btn:hover {
            background-color: rgb(34, 33, 33);
            color: white;

        }

        @media (max-width:575px) {
            .portfolio_warp .port_bg_text {
                position: absolute;
                left: 0;
                top: 0;
            }

            .bg_strock_text {
                transform: none !important;
                transition: none !important;
                -webkit-transform: none !important;
                padding-left: 30px;
                font-size: 30px;
            }

            section.testimonial,
            section.portfolio-wrap {
                padding: 10px 0 30px 0;
            }

            .client_wrap {
                padding: 10px 0 30px 0;
            }

            .portfolio_warp {
                padding-left: 0;
                padding-right: 0;
            }

            .about_wrap {
                padding: 10px 0 30px 0;
            }

            .portfolio_item {
                margin-bottom: 0;
            }
        }
    </style>


</head>

<body id='top'>
    <?php include_once('templates/menu-bar.php') ?>


    <!-- end header -->
    <!-- start hero_warp -->
    <section class="hero_warp">
        <div class="particles-js" id="particles-js"></div>
        <!--<div class="container">
            <div class="row d-flex align-items-center height_vh">
                <div class="col-md-12 col-12">
                    <div class="banner_content">
                        <br><br>
                        <img src="assets/images/DHM logo (White).png" alt="Dark Horse Media" title="Dark Horse Media"
                            class=bannar_image>
                        </ul>

                    </div>
                </div>
            </div>
        </div>-->
        <div class="scroll_down">
            <a href="#portfolio_warp">Scroll Down</a>
        </div>
    </section>
    <!-- end hero_warp -->
    <div class="height_vh dark_bg"></div>
    <!-- start portfolio_warp -->
    <section class="about_wrap">
        <div class="bg_text">
            <h1 class="bg_strock_text" data-parallax='{"x": 50}'>About us</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="about_content">
                        <h5 class=" wow fadeInUp" data-wow-delay="0.5s" style="color: #3A3B3C;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure alias vel voluptas quia. Voluptate, perspiciatis? Minima quia suscipit, voluptates, nemo corrupti consectetur molestias harum architecto amet similique sunt incidunt. Rerum?
                        </h5>
                        <br>
                        <a href="assets/document/Dark Horse Media.pdf" target="_blank" download> <button class="btn"><i class="material-icons">download</i>&nbsp; Download Brochure</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio_warp" id="portfolio_warp">
        <div class="port_bg_text">
            <h1 class="bg_strock_text" data-parallax='{"x": -200}'>Services</h1><br>
        </div>
        <br>
    </section>

    <section class="three-column-images">
        <div class="container ">

            <div class="row" style="text-align: center;">

                <div class="col-xs-6 col-sm-4 tilt" style="transform: perspective(1500px) rotateX(0deg) rotateY(0deg) scale(1);
            transition: all 500ms ease 0s;
        ;">
                    <div class="portfolio_item">
                        <a href="Digital Marketing.html" target="_blank">
                            <img src="assets/images/seo.png" class="img-thumbnail img-responsive"></a>
                        <a href="Digital Marketing.html" target="_blank" class="top-left">
                            Digital marketing
                        </a>
                        <a class="exp" href="Digital Marketing.html" target="_blank"><span class="exp_inner"><span class="exp_hover">Explore</span></span></a>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 tilt">
                    <div class="portfolio_item"> <a href="Brand identity.html" target="_blank">
                            <img src="assets/images/digital.png" class="img-thumbnail img-responsive">
                        </a>

                        <a href="Brand identity.html" target="_blank" class="top-left">Brand Identity
                        </a>
                        <a class="exp" href="Brand identity.html" target="_blank"><span class="exp_inner"><span class="exp_hover">Explore</span></span></a>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 tilt">
                    <div class="portfolio_item">
                        <a href="website-design.html" target="_blank">
                            <img src="assets/images/webd.png" class="img-thumbnail img-responsive"> </a>
                        <a href="website-design.html" target="_blank" class="top-left">Website Design
                        </a>
                        <a class="exp" href="website-design.html" target="_blank"><span class="exp_inner"><span class="exp_hover">Explore</span></span></a>
                    </div>
                </div>



                <div class="col-xs-6 col-sm-4 tilt">
                    <div class="portfolio_item">
                        <a href="print-design.html" target="_blank">
                            <img src="assets/images/print-d.png" class="img-thumbnail img-responsive"></a>
                        <a href="print-design.html" target="_blank" class="top-left">Print Design
                        </a>
                        <a class="exp" href="print-design.html" target="_blank"><span class="exp_inner"><span class="exp_hover">Explore</span></a>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 tilt">
                    <div class="portfolio_item">
                        <a href="application-design.html" target="_blank">
                            <img src="assets/images/app-design.png" class="img-thumbnail img-responsive"></a>
                        <a href="application-design.html" target="_blank" class="top-left">

                            Application Design
                        </a>
                        <a class="exp" href="application-design.html" target="_blank"><span class="exp_inner"><span class="exp_hover">Explore</span></span></a>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 tilt">
                    <div class="portfolio_item">
                        <a href="3d-video-design.html" target="_blank">
                            <img src="assets/images/video.png" class="img-thumbnail img-responsive">
                        </a>
                        <a href="3d-video-design.html" target="_blank" class="top-left">
                            3D/Video Design
                        </a>
                        <a class="exp" href="3d-video-design.html" target="_blank"><span class="exp_inner"><span class="exp_hover">Explore</span></span></a>
                    </div>
                </div>


            </div> <!-- Row -->


        </div> <!-- Container -->
    </section>



    <section class="client_wrap" style="
            background: #f2f2f2;
    ">
        <div class="bg_text">
            <h1 class="bg_strock_text" data-parallax='{"x": 50}'>Clientele</h1>
        </div>

        <br>
        <div class="container">
            <div class="logo-carousel">

                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>
            </div>


            <div class="logo-carousel-ltr" dir="ltr">
                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>


                <div class=" item">
                    <div class="client_single_item">
                        <img src="assets/images/client/thermolab.png" alt="thermolab group" width="70%" height="50%">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="testimonial text-center">
        <div class="bg_text">
            <h1 class="bg_strock_text" data-parallax='{"x": 50}'>Testimonials</h1>
        </div>
        <div class="container">
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="assets/images/client/22.png" />
                            <p>Advertsing & Marketing are the two pillars of any business amongst the many. We have
                                trusted them into good hands to Darkhourse Media .</p>
                            <h4>Bharat Shetty (CEO - FARMHOUSE HOTELS & RESTAURANTS)</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="assets/images/client/24.png" />
                            <p>We have been engaged with Dark Horse Media from last four years and is ideal associate for Digital Marketing Activities for all the E-commerce platforms, Website hosting and Print Designing. We appreciate their responsiveness and understanding of our product element and a creative approach to bringing our imagination to life online.</p>
                            <h4>Sayali Mhatre (Director - Thermolab Group of Company)</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="assets/images/client/25.png" />
                            <p>I have had a fantastic experience with Dark Horse Media. They are undoubtedly the best Digital Marketing Agency in Vasai-Virar.
                                DHM’s creativity and guidance in branding and event management made our marketing tasks easy.</p>
                            <h4>Troy D'souza (Director - Founder & Proprietor at BURN.)</h4>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <i class="material-icons" aria-hidden="true" style="color: black;">arrow_back_ios</i>
                    
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <i class="material-icons" aria-hidden="true" style="color: black;">arrow_forward_ios</i>
                </a>
            </div>
        </div>
    </section>

    <?php include_once('templates/footer.php') ?>

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/universal-tilt.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>
    <script type="text/javascript">
        /*
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			autoplay:true,
			autoplayTimeout:2000,
			autoplayHoverPause:true,
			responsive:{
				0:{
					items:1,
					slideBy:1
				},
				600:{
					items:3,
					slideBy:3
				},
				1000:{
					items:5,
					slideBy:5
				}
			}
		})
		*/
        $('.logo-carousel').slick({
            arrows: false,
            autoplay: true,
            infinite: true,
            speed: 9000,
            autoplaySpeed: 0,
            cssEase: 'linear',
            pauseOnFocus: false,
            pauseOnHover: false,
            slidesToShow: 5,
            slidesToScroll: 1
        });
        $('.logo-carousel-ltr').slick({
            arrows: false,
            autoplay: true,
            infinite: true,
            speed: 9000,
            autoplaySpeed: 0,
            cssEase: 'linear',
            pauseOnFocus: false,
            pauseOnHover: false,
            slidesToShow: 5,
            slidesToScroll: -1,
            rtl: false
        });
    </script>
</body>

</html>