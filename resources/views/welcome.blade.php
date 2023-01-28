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
                       <h1 style="padding-top: 20px;color: #16b0a6;">ActiveHelp</h1>
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                            <!-- <li><a href="index.html">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="gallery.html">Gallery</a></li> -->
                            <li><a href="https://activehelp.site/forum">Forum</a></li> 
                            <li><a href="#doctor-chat">Meet our Doctors</a></li>
                        </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block">
                       <a href="{{route('login')}}">
                        <button class="btn btn-success">Book an Appointment</button>
                       </a>
                   </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">Feeling stress or anxious?</h1>
                                    <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                    <!-- <a href="#" class="btn btn-success hidden-xs">View All Therapies</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                <!-- <a href="#" class="btn btn-success hidden-xs">Schedule A Visit</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="assets/images/slider/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Meet our psychiatrists</h1>
                                <p class="slider-text hidden-xs">Our psychiatrists are highly skilled to meet your unique needs.</p>
                                <!-- <a href="#" class="btn btn-success hidden-xs">Meet Psychiatrists</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="our-blog container-fluid">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Our Services</h2>
  		    <p></p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-1.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>DEPRESSION</h6>
								<!--<p>Not the answer you're looking for?</p>-->
								<a href="blog_single.html">
									<!-- <button class="btn btn-success btn-sm">More Detail</button> -->
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-2.jpg" alt="">

							<div class="blog-single-det">
								
								<h6>ANXIETY</h6>
								<!--<p>Not the answer you're looking for?</p>-->
								<a href="blog_single.html">
									<!-- <button class="btn btn-success btn-sm">More Detail</button> -->
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-3.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Relationship Issue</h6>
								<!--<p>Not the answer you're looking for?</p>-->
								<a href="blog_single.html">
									<!-- <button class="btn btn-success btn-sm">More Detail</button> -->
								</a>
							</div>
						</div>
					</div>
					
					
					
				
					
					
  				</div>
  			</div>
  			
  		</div>
  	</section>  
  	
  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message" style=" background-image: url("homepage.png"); ">
        <img src="/assets/images/homepage.png" alt="">
        <div class="inner-lay">
            <div class="container">
                <div class="row">

                    
                    <!--<div class="col-md-6 col-sm-12 doc-img">-->
                    <!--    <img  src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="">-->
                    <!--</div>-->
                    <!--<div class="col-md-6 col-sm-12 doc-det">-->
                    <!--    <h2>Hello, I’m Doctor Silva Tsuchiya</h2>-->
                    <!--    <span>Expert Clinical Psychologist in Manhattan</span>-->

                    <!--    <p>A psychiatry family physician available at a flexible time, offers General Consultation, Psychotherapy, Counselling, Neuropsychiatry Testing Services </p>-->

                    <!--    <h4>Call me on : +123 98 8887</h4>-->
                    <!--</div>-->
                </div>
            </div>

        </div>

    </div>

      	<!-- ################# Mission Vision Starts Here#######################--->
  	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Our Mission</h4>
  	                    <p>The mission of the Active Help Psychiatric Association is to promote universal and equitable access to the highest quality care for all people affected by mental disorders, including substance use disorders.</p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Our Vision</h4>
  	                    <p>The Active Help Psychiatric Association is to be the premier psychiatric organization that advances mental health as part of general health and well-being. </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    <p>To promote the rights and best interests of patients and those actually or potentially making use of psychiatric services for mental illness, including substance use disorders.</p>
  	                    
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>
  	
 	<!-- ################# Our Session Starts Here#######################--->  	
  	
  	<section class="sesion-type" id="doctor-chat">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Doctors</h2>
  		    <p>Chat with a Doctor</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Karen N. Balanza</p>
                        <p>Chat code: karen</p>
                        <p>Clinic Address: PMHA</p>
                        <p>09209029266 /09175172083 (PMHA)</p>
                        <p>SCHEDULE Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <!--<table style="margin: auto;">-->
                        <!--<tr>-->
                        <!--<th>SCHEDULE Fridays: </th>-->
                        <!--<td>08:00 A.M. </td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--<th></th>-->
                        <!--<td>10:00 A.M</td>-->
                        <!--</tr>-->
                        <!--<tr>    -->
                        <!--<th></th>-->
                        <!--<td>01:00 P.M.</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--<th></th>-->
                        <!--<td>03:00 P.M.</td>-->
                        <!--</tr>-->
                        
                        <!--</table>-->
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Noemi Angeline E. Jularbal</p>
                        <p>Chat code: noemi</p> 
                        <p>Clinic Address: 2
                        nd Flr Baguio
                        Technical Vocational
                        Skills Center, 179
                        Magsaysay Ave. BC</p> 
                        <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>  
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Teresita H. Sison</p>
                        <p>Chat code: teresita</p>
                        <p>Clinic Address: Family Polyclinic and
                        Laboratory, Laperal
                        Bldg, Session Road,
                        BC</p> 
                        <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>  
                       
  	                </div>
  	            </div>
                <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn4.vectorstock.com/i/1000x1000/34/53/default-placeholder-doctor-half-length-portrait-vector-20773453.jpg" alt="">
  	                    <p>Dr. Wilson S. Tibayan</p>
                        <p>Chat code: wilson</p>  
                        <p>Clinic Address: -Roseville Park
                        Center, 59 Balacbac
                        Rd, BC
                        - Notre Dame De Chartres Hospital</p> 
                        <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
  	                </div>
  	            </div>
                  <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Mary Gomez</p>
                        <p>Chat code: mary</p>  
                        <p>Clinic Address: PMHA</p> 
                        <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
  	                </div>
  	            </div>  
                  <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Genna Hipolito</p>
                        <p>Chat code: genna</p>  
                        <p>Clinic Address: PMHA</p>
                        <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
  	                </div>
  	            </div>  
                  <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Gwendolyn Cayad</p>
                          <p>Chat code: gwen</p> 
                          <p>Clinic Address: PMHA</p> 
                          <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                       <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
  	                </div>
  	            </div>  
                  <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
  	                    <p>Dr. Jovelyn Tangalin</p>
                        <p>Chat code: jovelyn</p>    
                        <p>Clinic Address: PMHA</p> 
                        <p>SCHEDULE Mondays -Fridays: <br>	
                            08:00 A.M.<br>
                        	10:00 A.M<br>
                        	01:00 P.M.<br>
                        	03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
  	                </div>
  	            </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-sess">
                        <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
                        <p>Dra. Silva Tsuchiya</p>
                        <p>Chat code: silva</p>    
                        <p>Clinic Address: Benguet Laboratories  SM Cyberbuilding (Sitel), Harrison Rd.  Baguio City
                        </p> 
                        <p>SCHEDULE Mondays -Fridays: <br>  
                            08:00 A.M.<br>
                            10:00 A.M<br>
                            01:00 P.M.<br>
                            03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-sess">
                        <img src="https://cdn.vectorstock.com/i/1000x1000/75/68/default-placeholder-doctor-half-length-portrait-vector-20847568.webp" alt="">
                        <p>Dra. Beatriz Inumpa </p>
                        <p>Chat code: beatriz</p>    
                        <p>Clinic Address: Pay constitution Office  Thursday, at Rm 906,  Doctor’s Clinics, Pines  City Doctor’s Hospital</p> 
                        <p>SCHEDULE Mondays -Fridays: <br>  
                            08:00 A.M.<br>
                            10:00 A.M<br>
                            01:00 P.M.<br>
                            03:00 P.M.
                        </p>
                        <a href="{{route('login')}}" style="display: block;margin: auto;width: 250px;">
                            <button class="btn btn-success" style="width: 100%;">Book an Appointment</button>
                        </a>  
                        <br>
                    </div>
                </div>
  	            <!-- <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-4.jpg" alt="">
  	                    <p>Group Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-5.jpg" alt="">
  	                    <p>All Age Group</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess sess-ok">
  	                   <h4>Start Your Session today</h4>
  	                    <p>Take the first step on your journey to feeling better. </p>
  	                    <button class="btn btn-success">Book an Appointment</button>
  	                </div>
  	            </div> -->
  	        </div>
  	    </div>
  	</section>
     
  	
  	<!-- ################# Testimonial Starts Here#######################--->
    

      <!-- ################# Footer Starts Here#######################--->


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
            mainColor:'#408591',
            aboutText:'Powerd by ActiveHealth',
            bubbleBackground:'#408591',
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