<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-home').slicknav({
					prependTo:'#navigation-menu-home'
				});
			});
			$(function(){
				$('#menu-ourteam').slicknav({
					prependTo:'#navigation-menu-ourteam'
				});
			});
			$(function(){
				$('#menu-patientinfo').slicknav({
					prependTo:'#navigation-menu-patientinfo'
				});
			});
			$(function(){
				$('#menu-services').slicknav({
					prependTo:'#navigation-menu-services'
				});
			});
			$(function(){
				$('#menu-patientform').slicknav({
					prependTo:'#navigation-menu-patientform'
				});
			});
			$(function(){
				$('#menu-newbuffalo').slicknav({
					prependTo:'#navigation-menu-newbuffalo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
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
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
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
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.jpg" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site<a href="http://www.skylinephysicians.com/" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="slide1">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2slide.jpeg" alt="slide2">
				       	<p class="caption">"We care"</p>
				      </li>
				      <li>
				        <img src="img/slider-images/3slide.jpg" alt="slide3">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/4slide.jpg" alt="slide4">
				       	<p class="caption">"We care"</p>
				      </li>
				      <li>
				        <img src="img/slider-images/5slide.jpg" alt="slide5">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/6slide.jpg" alt="slide6">
				       	<p class="caption">"We care"</p>
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#secondpage" data-transition="<?php echo $transitionefect ?>">About US</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#secondpage" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#secondpage" data-transition="<?php echo $transitionefect ?>" >By Skyline Physicians</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#secondpage" data-transition="<?php echo $transitionefect ?>" >By Vendors</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#secondpage" data-transition="<?php echo $transitionefect ?>" >Career</a></div>
				</div>
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>
				
							   
		  </div>
		  

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="secondpage" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-home">
						<ul id="menu-home">
							<li><a href="#secondpage" data-transition="<?php echo $transitionefect ?>">About US</a></li>
							<li><a href="#secondpage" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#secondpage" data-transition="<?php echo $transitionefect ?>">By Skyline Physicians</a></li>
							<li><a href="#secondpage" data-transition="<?php echo $transitionefect ?>">By Vendors</a></li>
							<li><a href="#secondpage" data-transition="<?php echo $transitionefect ?>">Career</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>				
						</ul>
					</section>
					<p>
						This is only a <strong>Preview</strong> version of your Mobile Website. Please contact our official Sales Representative for <strong>Full Functional Version</strong> 

					</p>
				</div>
			</div>				
		</div>
		
	<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		

		<!--contact form///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
								<li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
								<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
								<li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
								<li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>	
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!-- contact///////////////////////////////////////////////////////////////// --> 
		


		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" >		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
		</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		
	</body>
</html>
