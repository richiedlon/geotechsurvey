<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Architecture</title>
		<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-125784534-1', 'auto');
ga('send', 'pageview');
</script>
	<script src="static/js/gtag.js"></script>

    <!-- Favicon -->
   <link rel="icon" href="static/images/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="static/vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="static/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="static/vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="static/vendors/owl_carousel/owl.carousel.css" media="all">
    <!-- Lightbox CSS-->
    <link rel="stylesheet" type="text/css" href="static/vendors/lightbox/css/lightbox.min.css" media="all">


    <style>
        /* Banner Area */
        .banner_area {
          background: url("static/images/architecture.jpg"); 
    </style>

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="static/css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    {% include 'header.php' %}

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>ARCHITECHTURE DIVISION</h2>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#" class="active">Architecture division</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Building Construction Area -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>ARCHITECTURE DIVISION</h2>
                    <img src="static/images/architecurepage.jpg" alt="">
                    <a href="#">ARCHITECTURAL SERVICES</a>
                    <p>Geotech works mutually with fully fledged architectural consortiums which offer a range of specialized services including Architecture, Interior Designing, Structural Engineering, Electrical Engineering, Mechanical Engineering, Quantity Surveying and Project Management</p>
                    <div class="col-md-6 ipsum">
                    <ul class="excavator">
                            <li><i class="fa fa-chevron-circle-right"></i>Architecture</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Master Planning</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Feasibility Studies</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Needs Analysis</li>
                            <li><i class="fa fa-chevron-circle-right"></i>3D Modeling / Rendering</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Project Management</li>
                    </ul>          

                    </div>
                    <div class="col-md-6 ipsum">
                    <ul class="excavator">
                            <li><i class="fa fa-chevron-circle-right"></i>Predesign</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Schematic Design</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Design Development</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Construction Documents</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Space Planning / Programming</li>
                            <li><i class="fa fa-chevron-circle-right"></i>Real estate development</li>
                    </ul>          

                    </div>
                

            </div>

                <div class="col-sm-4 constructing_right">
                    <h2>Quick Links</h2>
                    <ul class="painting">
                        <li><a href="ServiceAerial.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>AERIAL SURVEYING</a></li>
                        <li><a href="ServiceConstruction.php"><i class="fa fa-gavel" aria-hidden="true"></i>CONSTRUCTION SURVEYING</a></li>
                        <li><a href="ServiceTopographic.php"><i class="fa fa-globe" aria-hidden="true"></i>TOPOGRAPHIC SURVEYING</a></li>
                        <li><a href="ServiceGIS.php"><i class="fa fa-map" aria-hidden="true"></i>GIS</a></li>
                    </ul>
                    {% include 'ServiceContact.php' %}
                </div>

          
                  


            </div>


        </div>
    </section>
    <!-- End Building Construction Area -->

    <!-- Our Featured Works Area -->

    <!--
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-1.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-1.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-2.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-2.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-3.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-3.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-4.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-4.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-5.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-5.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-6.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-6.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-7.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-7.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-8.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="images/gallery/gl-8.jpg" data-lightbox="image-1">VIEW PROJECT</a>
                </div>
            </div>
        </div>
    </section>
-->    
    <!-- End Our Featured Works Area -->


{% include 'footer.php' %}

    <!-- jQuery JS -->
    <script src="static/js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="static/js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="static/vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="static/vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="static/vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="static/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="static/vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="static/vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="static/vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="static/vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="static/vendors/stellar/jquery.stellar.js"></script>
    <!-- Lightbox JS -->
    <script src="static/vendors/lightbox/js/lightbox.min.js"></script>
    <!-- Theme JS -->
    <script src="static/js/theme.js"></script>
</body>
</html>
