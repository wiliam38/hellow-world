<!DOCTYPE html>
<!-- /*!
* Venta - Landing Page
* Version: 1.0
* Copyright 2014
* Created by: AgileUI
* URL: http://agileui.com/
* Designed and built based on Twitter Bootstrap 3. 
*/ -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>KKK - Web Developer</title>

<!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/styles.css" rel="stylesheet"/>
<link href="assets/css/responsive.css" rel="stylesheet"/>

<!--Components-->
<link href="assets/css/prettyphoto.css" id="prettyphoto-css" rel="stylesheet"/>
<link href="assets/css/animate.css" rel="stylesheet"/>

<!-- Awesome fonts -->
<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

<!-- Google Web fonts -->
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lte IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="assets/css/jquery-ui.css">

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
</head>

<body data-spy="scroll" data-target=".navbar">
<!-- #main_container -->
<div class="container" id="main_container"> 
  <!-- #topnav -->
  <nav id="topnav" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header navbar-right">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>
        </button>
       <!--  <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a> </div> -->
      	<div class="collapse navbar-collapse navbar-ex1-collapse">
	        <ul class="nav navbar-nav">
	          <li><a class="active" href="#home-section">Home</a></li>
	          <li><a href="#services">Services</a></li>
	          <li><a href="#skills-section">Skills</a></li>
	          <li><a href="#works-section">Works</a></li>
	          <li><a href="#pricing-section">Pricing</a></li>
	          <li><a href="#map">Map</a></li>
	          <li><a href="#contact-section">Contact</a></li>
	          <!-- <li><input type="text" id="datepicker" name=""></li> -->
	        </ul>
      	</div>
    </div>
  </nav>
  <!-- /#topnav --> 
  <!-- #home-section -->
  <section id="slider-section">
    <div class="container-fluid">
      <div class="row clearfix col-sm-12 col-md-12">
        <div class="slide show" style="background-image: url('img/1.jpg');"></div>
        <div class="slide" style="background-image: url('img/2.jpg');"></div>
        <div class="slide" style="background-image: url('img/3.jpg');"></div>
        
      </div>
    </div>
  </section>
  <section id="home-section">
    
    <div class="container">
      <div class="row clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="home-features other-content col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="home-features-content">
            <div class="row">
              <h1 class="text-center small">About Me!</h1>
              <p class="text-center small">Thanks for visiting of my profile.</p>  
            </div>
            <div class="row">
              <div class="col-sm-3 col-md-3">
                <img class="img-handsome img-responsive" src="assets/img/handsome.png">
              </div>
              <div class="col-sm-9 col-md-9">
              	<p><small>I am John Doe. I am a web developer with 6 years of experiences.</small></p> 
              	<p><small>High Quality, High Speed, High Skills.</small></p>
              	<p><small>Time and effort are necessary in order to produce the high-quality content that I consistently offer to my clients.</small></p>
               <!--  <ul class="list-unstyled">
                  <li>
                    <h3 class="small">Name: <span>Kim songhak</span></h3>
                  </li>
                  <li>
                    <h3 class="small">Born: <span>August 3, 1992</span></h3>
                  </li>
                  <li>
                    <h3 class="small">Web Developmenter</h3>
                  </li>
                </ul> -->
              </div>
            </div>            
          </div>
        </div>       
      </div>
    </div>  
  </section>
  <!-- /#home-section --> 
  
  <!-- #services -->
  <section class="services" id="services">
   <!--  <div class="container">
      <div class="row clearfix">
        <h1 class="text-center section-title">Main <span>Features</span></h1>
        
        <div class="features-content">
          <div class="feature feature-1 col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="div-center box-image"><img class="img-responsive" src="assets/img/feature-1.png" alt=""></div>
            <h2 class="text-center">JavaScript</h2>
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum dui nec sagittis imperdiet. Nunc quis scelerisque velit. Suspendisse vitae leo malesuada, bibendum magna efficitur.</p>
          </div>
          <div class="feature col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="div-center box-image"><img class="img-responsive" src="assets/img/feature-2.png" alt=""></div>
            <h2 class="text-center">PHP<i class="fa fa-wordpress"></i></h2>
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum dui nec sagittis imperdiet. Nunc quis scelerisque velit. Suspendisse vitae leo malesuada, bibendum magna efficitur.</p>
          </div>
          <div class="feature feature-3 col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="div-center box-image"><img class="img-responsive" src="assets/img/feature-3.png" alt=""></div>
            <h2 class="text-center">Node.JS</h2>
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum dui nec sagittis imperdiet. Nunc quis scelerisque velit. Suspendisse vitae leo malesuada, bibendum magna efficitur.</p>
          </div>
          <div class="feature feature-3 col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="div-center box-image"><img class="img-responsive" src="assets/img/feature-3.png" alt=""></div>
            <h2 class="text-center">AngularJS</h2>
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum dui nec sagittis imperdiet. Nunc quis scelerisque velit. Suspendisse vitae leo malesuada, bibendum magna efficitur.</p>
          </div>
          <div class="feature col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="div-center box-image"><img class="img-responsive" src="assets/img/feature-2.png" alt=""></div>
            <h2 class="text-center">CSS</h2>
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum dui nec sagittis imperdiet. Nunc quis scelerisque velit. Suspendisse vitae leo malesuada, bibendum magna efficitur.</p>
          </div>
          <div class="feature feature-1 col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="div-center box-image"><img class="img-responsive" src="assets/img/feature-1.png" alt=""></div>
            <h2 class="text-center">Laravel</h2>
            <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum dui nec sagittis imperdiet. Nunc quis scelerisque velit. Suspendisse vitae leo malesuada, bibendum magna efficitur.</p>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">
		<div class="row">
			<header class="services-header" style="visibility: visible; ">
				<h2>Services</h2>
				<h3>Things that I work on.</h3>
			</header>
			<div class="col-md-12">
				<div class="widget widget_latte_services_widget">					
					<div class="col-md-4 col-sm-6 text-center service-box" style="visibility: visible; ">
						<div class="service-item">
							<div class="service-icon">
								<a><i class="fa fa-html5"></i> <h3>HTML</h3></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_services_widget">					
					<div class="col-md-4 col-sm-6 text-center service-box" style="visibility: visible; ">
						<div class="service-item">
							<div class="service-icon">
								<a><i class="fa fa-css3"></i> <h3>CSS</h3></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_services_widget">					
					<div class="col-md-4 col-sm-6 text-center service-box" style="visibility: visible; ">
						<div class="service-item">
							<div class="service-icon">
								<a><i class="fa fa-wordpress"></i> <h3>WordPress</h3></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_services_widget">					
					<div class="col-md-4 col-sm-6 text-center service-box" style="visibility: visible; ">
						<div class="service-item">
							<div class="service-icon">
								<a><i class="fa fa-font"></i> <h3>AngularJS</h3></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_services_widget">					
					<div class="col-md-4 col-sm-6 text-center service-box" style="visibility: visible; ">
						<div class="service-item">
							<div class="service-icon">
								<a><i class="fa fa-bold"></i> <h3>Bootstrap</h3></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_services_widget">					
					<div class="col-md-4 col-sm-6 text-center service-box" style="visibility: visible; ">
						<div class="service-item">
							<div class="service-icon">
								<a><i class="fa fa-pencil"></i> <h3>Writing</h3></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>							
			</div>
		</div>
	</div>
  </section>
  <!-- /#services --> 
  <section class="skills" id="skills-section">
	<div class="container">
		<!-- <div class="row"> -->
			<header class="skills-header" style="visibility: visible; ">
				<h2>Skills</h2>
				<h3>Things that I'm good at.</h3>
			</header>
			<div class="col-md-12">
				<div class="widget widget_latte_skills_widget">
					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
						<div class="skillbar clearfix " data-percent="85%">
							<div class="skillbar-title" style="background: #D35400;"><span style="color:;">HTML</span></div>
							<div class="skillbar-bar" style="background: rgb(230, 126, 34); width: 85%;"></div>
							<div class="skill-bar-percent">85%</div>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_skills_widget">					
					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
						<div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title" style="background: #2980B9;"><span style="color:;">CSS</span></div>
							<div class="skillbar-bar" style="background: rgb(52, 152, 219); width: 90%;"></div>
							<div class="skill-bar-percent">90%</div>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_skills_widget">					
					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
						<div class="skillbar clearfix " data-percent="70%">
							<div class="skillbar-title" style="background: #2C3E50;"><span style="color:;">JavaScript</span></div>
							<div class="skillbar-bar" style="background: rgb(44, 62, 80); width: 70%;"></div>
							<div class="skill-bar-percent">70%</div>
						</div>
					</div>
				</div>					
				<div class="widget widget_latte_skills_widget">					
					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
				<div class="skillbar clearfix " data-percent="80%">
					<div class="skillbar-title" style="background: #46465E;"><span style="color:;">PHP</span></div>
					<div class="skillbar-bar" style="background: rgb(90, 104, 165); width: 80%;"></div>
					<div class="skill-bar-percent">80%</div>
				</div>
			</div>
	</div>					<div class="widget widget_latte_skills_widget">					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
				<div class="skillbar clearfix " data-percent="85%">
					<div class="skillbar-title" style="background: #333333;"><span style="color:;">WordPress</span></div>
					<div class="skillbar-bar" style="background: rgb(82, 82, 82); width: 85%;"></div>
					<div class="skill-bar-percent">85%</div>
				</div>
			</div>
	</div>					<div class="widget widget_latte_skills_widget">					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
				<div class="skillbar clearfix " data-percent="40%">
					<div class="skillbar-title" style="background: #27AE60;"><span style="color:;">Bootstrap</span></div>
					<div class="skillbar-bar" style="background: rgb(46, 204, 113); width: 40%;"></div>
					<div class="skill-bar-percent">40%</div>
				</div>
			</div>
	</div>					<div class="widget widget_latte_skills_widget">					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
				<div class="skillbar clearfix " data-percent="40%">
					<div class="skillbar-title" style="background: #124E8C;"><span style="color:;">AngularJS</span></div>
					<div class="skillbar-bar" style="background: rgb(66, 136, 208); width: 40%;"></div>
					<div class="skill-bar-percent">40%</div>
				</div>
			</div>
	</div>					<div class="widget widget_latte_skills_widget">					<div class="col-md-6 col-sm-6 skill-box" style="visibility: visible; ">
				<div class="skillbar clearfix " data-percent="60%">
					<div class="skillbar-title" style="background: #EED800;"><span style="color:;">Writing</span></div>
					<div class="skillbar-bar" style="background: rgb(255, 231, 35); width: 60%;"></div>
					<div class="skill-bar-percent">60%</div>
				</div>
			</div>
	</div>							</div>
		<!-- </div> -->
	</div>
  </section>

  <!-- #works-section -->
  <section id="works-section">
    <div class="container">
      <div class="row clearfix">
        <h1 class="text-center section-title">Latest <span>Works</span></h1>
        <div class="works"> 
          <!-- Image -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="thumbnail">
              <div class="view view-effect"> <img class="img-responsive" src="assets/img/gallery/1.png" alt=""/>
                <div class="mask">
                  <h2>Lorem ipsum</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas.</p>
                  <a href="assets/img/gallery/1.png" class="btn btn-md btn-default prettyPhoto">View</a> </div>
              </div>
            </div>
          </div>
          <!-- /Image --> 
          <!-- Image -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="thumbnail">
              <div class="view view-effect"> <img class="img-responsive" src="assets/img/gallery/2.png" alt=""/>
                <div class="mask">
                  <h2>Lorem ipsum</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas.</p>
                  <a href="assets/img/gallery/2.png" class="btn btn-md btn-default prettyPhoto">View</a> </div>
              </div>
            </div>
          </div>
          <!-- /Image --> 
          <!-- Image -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="thumbnail">
              <div class="view view-effect"> <img class="img-responsive" src="assets/img/gallery/3.png" alt=""/>
                <div class="mask">
                  <h2>Lorem ipsum</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas.</p>
                  <a href="assets/img/gallery/3.png" class="btn btn-md btn-default prettyPhoto">View</a> </div>
              </div>
            </div>
          </div>
          <!-- /Image --> 
          <!-- Image -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="thumbnail">
              <div class="view view-effect"> <img class="img-responsive" src="assets/img/gallery/4.png" alt=""/>
                <div class="mask">
                  <h2>Lorem ipsum</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas.</p>
                  <a href="assets/img/gallery/4.png" class="btn btn-md btn-default prettyPhoto">View</a> </div>
              </div>
            </div>
          </div>
          <!-- /Image --> 
          <!-- Image -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="thumbnail">
              <div class="view view-effect"> <img class="center-block" src="assets/img/gallery/8.jpg" alt=""/>
              <h3>How to Create a Tiled Background Slideshow</h3>
              <h4>By John on August 1, 2016</h4>
              <div class="mask">
                <h2>How to Create a Tiled Background Slideshow</h2>
                <p>A tutorial that shows how to recreate the four tiles slideshow effect seen on the website of Serge Thoroval. Using 3D transforms, transitions and animations, the aim ... </p>
                <a href="samples/FourBoxes/index.html" class="btn btn-md btn-default">View</a> </div>
              </div>
            </div>
          </div>
          <!-- /Image --> 
          <!-- Image -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="thumbnail">
              <div class="view view-effect"> 
                <img class="center-block" src="assets/img/gallery/7.png" alt=""/>
                <h3>Page Proloading Effect</h3>
                <h4>By John on August 4, 2016</h4>
                <div class="mask">
                  <h2>Page Proloading Effect</h2>
                  <p>A tutorial on how to re-create the page preloading effect seen on the website of Fontface Ninja. We are going to use CSS animations, 3D transforms and SVGs. ...</p>
                  <a href="samples/PagePreloadingEffect/index.html" class="btn btn-md btn-default">View</a> 
                </div>              
              </div>
            </div>
          </div>
          <!-- /Image -->
        </div>
      </div>
    </div>
  </section>
  <!-- /#works-section --> 
  
  <!-- #pricing-section -->
  <section id="pricing-section">
    <div class="container">
	    <div class="row">
	        <h1 class="text-center section-title">Our <span>Pricing</span></h1>
	        <div class="plans">
	          	<div class="plan-1 col-xs-12 col-sm-4 col-md-4 col-lg-4">
		            <div class="plan">
		              <h2 class="plan-title">Basic</h2>
		              <p class="plan-price">$15<span>/mo</span></p>
		              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas malesuada. Nam sit amet sem ut nibh laoreet.</p>
		              <a href="#" class="btn btn-success btn-lg">Buy Now</a> 
		            </div>
	        	</div>
		        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		            <div class="plan plan-tall">
		              <h2 class="plan-title">Pro</h2>
		              <p class="plan-price">$34<span>/mo</span></p>
		              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas malesuada. Nam sit amet sem ut nibh laoreet.</p>
		              <a href="#" class="btn btn-success btn-lg">Buy Now</a> 
		            </div>
		        </div>
		        <div class="plan-3 col-xs-12 col-sm-4 col-md-4 col-lg-4">
		            <div class="plan">
		              <h2 class="plan-title">Advanced</h2>
		              <p class="plan-price">$47<span>/mo</span></p>
		              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida mauris id egestas malesuada. Nam sit amet sem ut nibh laoreet.</p>
		              <a href="#" class="btn btn-success btn-lg">Buy Now</a> 
		            </div>
				</div>
		    </div>
		</div>
		<!-- <div class="row clearfix col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
		<!-- <div id="sliderFrame">
	        <div id="slider">	            
	            <img src="images/image-slider-1.jpg" />	            
	            <img src="images/image-slider-2.jpg" />
	            <img src="images/image-slider-3.jpg" />
	            <img src="images/image-slider-4.jpg" />
	            <img src="images/image-slider-5.jpg" />
	        </div> 
    	</div> -->
    	
    </div>
  </section>
  <!-- /#pricing-section --> 

  <section class="map" id="map">
	<!-- <div class="map_overlay" onclick="style.pointerEvents='none'"></div>
	<iframe class="map_frame" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6103.51386438263!2d124.35906400000002!3d40.103132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9548e2fa8201950!2sSanbao+Costume+Shoes+Industry+Supermarket!5e0!3m2!1sen!2sus!4v1483812008748" style="visibility: visible; "></iframe> -->
  </section>
  <!-- #contact-section -->
  <section id="contact-section">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12">
          <h1 class="text-center section-title-white">Contact</h1>
          <!-- .contact-form -->
          <div class="contact-form">
            <div class="contact-form-box">
              
              <form id="contact-form" method="post"  role="form"><!-- action="contact.php" -->

                <div class="messages"></div>

                <div class="controls">

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="form_name">Firstname *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="form_lastname">Lastname *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="form_lastname">Birthday </label>
                        <input class="form-control" type="text" name="calendar" value="" id="datepicker" placeholder="Please enter your Birthday">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <input type="submit" class="btn btn-success btn-send" value="Send message">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-muted"><strong>*</strong> These fields are required. Contact form template by <a href="http://bootstrapious.com" target="_blank">Bootstrapious</a>.</p>
                    </div>
                  </div>
                  
                </div>

              </form>
            </div>
          </div>
          <!-- /.contact-form --> 
        </div>
      </div>
    </div>
  </section>
  <!-- /#contact-section --> 
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row clearfix">
        <div class="footer-copyright col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <p class="copyright">DanDong © 2017. Producted by <a target="_blank" href="#">John Deo</a> </p>
        </div>
        <div class="footer-copyright col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="social">
            <ul class="list-unstyled list-inline">
              <li><a href="#" class="social-icon facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="social-icon twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="social-icon google-plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="social-icon linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer --> 
</div>
<!-- /#main_container --> 
<!-- JavaScript --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- Non-Bootstrap JS --> 
<script src="assets/js/jquery.localscroll.min.js"></script> 
<script src="assets/js/jquery.scrollto.min.js"></script> 
<script src="assets/js/jquery.inview.js"></script> 
<script src="assets/js/jquery.prettyphoto.min.js"></script> 
<script src="assets/js/jquery.placeholder.js"></script> 

<script src="assets/js/scripts.js"></script>

<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="assets/js/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
</script>
<script>

    function cycleBackgrounds() {
      var index = 0;

      $imageEls = $('.slide'); // Get the images to be cycled.

      setInterval(function () {
        // Get the next index.  If at end, restart to the beginning.
        index = index + 1 < $imageEls.length ? index + 1 : 0;
        // Show the next image.
        $imageEls.eq(index).addClass('show');
        // Hide the previous image.
        $imageEls.eq(index - 1).removeClass('show');

      }, 3000);
    };

    // Document Ready.
    $(function () {
      cycleBackgrounds();
    });

</script>

</body>
</html>
