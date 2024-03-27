<!DOCTYPE html>
<html lang="en">

<!-- Basic -->

<!-- Mirrored from themewagon.github.io/city-real-estate/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2024 05:27:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>CITY Real Estate</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->

<?php

include_once("includes/links.php");
?>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->
    <?php

    include_once("includes/header.php");
    ?>
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Request for Contact</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill
                    out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row"
                            action="https://themewagon.github.io/city-real-estate/contact.php" name="contactform"
                            method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Time</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control"
                                        data-style="btn-white">
                                        <option value="selecttime">Select Time</option>
                                        <option value="Weekdays">Weekdays</option>
                                        <option value="Weekend">Weekend</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">What is max price?</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control"
                                        data-style="btn-white">
                                        <option value="$100 - $2000">$100 - $2000</option>
                                        <option value="$2000 - $4000">$2000 - $4000</option>
                                        <option value="$4000 - $10000">$4000 - $10000</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6"
                                        placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Get Appointment</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="right-box-contact">
                        <h4>Phone</h4>
                        <div class="support-info">
                            <div class="info-title">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                + 11 2839 9988
                                <span>Booking Time: 0900 – 2000 Hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-box-contact">
                        <h4>Address</h4>
                        <div class="support-info">
                            <div class="info-title">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Address
                                <span>PO Box 16122 Collins Street West Victoria 8007 Australia</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-box-contact">
                        <h4>Your Feedback</h4>
                        <div class="support-info">
                            <div class="info-title">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                info@yoursite.com
                                <span>Help Us Improve!</span>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="map"></div>

    <div id="testimonials" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Happy Customers</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non
                        aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i
                                        class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>

                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i>
                                </h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i
                                        class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i
                                        class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i>
                                </h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i
                                        class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <?php
    include_once("includes/footer.php");

    ?>


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>

<!-- Mirrored from themewagon.github.io/city-real-estate/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2024 05:27:47 GMT -->

</html>