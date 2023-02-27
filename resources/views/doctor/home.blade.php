<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ActiveHelp</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <style>
        .owl-dots{
            display: none
        }

        label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}

    </style>
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12">
                       <!--<img src="assets/images/logo.jpg" alt="">-->
                       <h1 style="padding-top: 20px;color: green;">ActiveHelp</h1>
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                            <!-- <li><a href="index.html">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="gallery.html">Gallery</a></li> -->
                            <li><a href="http://127.0.0.1:8000/forum">Forum</a></li> 
                            <li><a href="#doctor-chat">Meet our Doctors</a></li>
                        </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block">
                       <a href="{{route('login')}}">
                        <button class="btn btn-dark">Book an Appointment</button>
                       </a>
                   </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="our-blog container-fluid" style="margin-top: 34rem;">
  		<div class="container" style="margin-top: 34rem;">
          <h1> DOCTOR PAGE</h1>
        </div>
    </section>


    <footer class="footer">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        BlueDart <br>
                        Marthandam (K.K District) <br>
                        Tamil Nadu, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@bluedart.in</a><br>
                        Web: <a href="smart-eye.html" class="">www.bluedart.in</a>
                    </address>

                </div>
            </div> -->
        </div>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            // frameEndpoint: "http://127.0.0.1:8000/views/botpage/chat1",
            title:'Psychbot',
            aboutText: 'Write Something',
            introMessage: "Hello there! My name is PsychBot.",
            mainColor:'#227a1d',
            aboutText:'Powerd by ActiveHealth',
            bubbleBackground:'#186613',
            headerTextColor: '#fff',
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2022 &copy; All Rights Reserved | Designed and Developed by ActiveHelp</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
    </body>
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

<script>

    /*
	Smooth scroll functionality for anchor links (animates the scroll
	rather than a sudden jump in the page)
*/
$('.js-anchor-link').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});

</script>


</html>