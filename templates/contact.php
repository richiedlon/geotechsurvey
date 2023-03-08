{% from "_render_field.html" import render_field, render_radio_fields %}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	

    <title>Contact</title>
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


    <style>
        /* Banner Area */
        .banner_area {
        background: url("static/images/contact.jpg"); 
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
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map 
   <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=o,o&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe></div><br />
    End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p>Don't hesitate to tell us about your project's timeline and budget. We're straightforward with our abilities and pricing, and knowing where you're coming from helps us hit your requirements.
                    </p>
                    <p> We meet personally with many clients, speak at higher level meetings. If you wish to seek our services please send a quick message and our project department will contact you within 24h</p>
                    
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" >location</a>
                            <a>phone</a>
                            <a>email</a>
                        </div>
                        <div class="address">
                            <a>84/A, Isipathana Road,Wewala,<br> Horana 12400, Sri Lanka  </a>
                            <a>+94 0 713 599 558</a>
                            <a>info@geotechsurvey.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>
                        <form id="upload-form" action="{{ url_for('contact') }}" method="POST" enctype="multipart/form-data">
                                    {{ contact.csrf_token }}                 
                                          <fieldset>
                                             <!--<p style="color:red;">{{errors}}</p>  -->
                                             <br>              
                                            {{ render_field(contact.fname) }}
                                            {{ render_field(contact.lname) }}
                                            {{ render_field(contact.email) }}
                                            
                                            {{ render_field(contact.subject) }}
                                            {{ render_field(contact.message) }}

                                            <div class="form-group">
                                              <div class="col-md-6 col-lg-offset-2">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
                                                
                                              </div>
                                            </div>
                                          </fieldset>
                                      </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

{% include 'footer.php' %}?>

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
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="static/vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="static/js/theme.js"></script>
</body>
</html>
