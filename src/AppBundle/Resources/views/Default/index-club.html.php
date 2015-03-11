<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Del Carmen Casa Club - Club</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="/web/bundles/app/club/js/jquery.min.js"></script>
		<script src="/web/bundles/app/club/js/jquery.dropotron.min.js"></script>
		<script src="/web/bundles/app/club/js/skel.min.js"></script>
		<script src="/web/bundles/app/club/js/skel-layers.min.js"></script>
		<script src="/web/bundles/app/club/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/web/bundles/app/club/css/skel.css" />
			<link rel="stylesheet" href="/web/bundles/app/club/css/style.css" />
			<link rel="stylesheet" href="/web/bundles/app/club/css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

	    <!-- Owl Carousel Assets -->
	    <script src="/web/bundles/app/club/owl-carousel/owl.carousel.js"></script>
    	<link href="/web/bundles/app/club/owl-carousel/owl.carousel.css" rel="stylesheet">
    	<link href="/web/bundles/app/club/owl-carousel/owl.theme.css" rel="stylesheet">

    	<!-- Magnific popup -->
    	<script src="/web/bundles/app/club/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    	<link href="/web/bundles/app/club/jquery.magnific-popup/magnific-popup.css" rel="stylesheet">

    	<!-- Smooth Scroll popup -->
    	<script src="/web/bundles/app/club/js/smoothscroll.js"></script>

		<script>
			$(document).ready(function() {
 
			  $("#owl-demo").owlCarousel({
			 
			      navigation : true, // Show next and prev buttons
			      slideSpeed : 300,
			      paginationSpeed : 400,
			      singleItem:true
			 
			      // "singleItem:true" is a shortcut for:
			      // items : 1, 
			      // itemsDesktop : false,
			      // itemsDesktopSmall : false,
			      // itemsTablet: false,
			      // itemsMobile : false
			 
			  });

			  $(".owl-buttons").hide();

  			  $("#owl-demo-2").owlCarousel({
		  	      autoPlay: 3000, //Set AutoPlay to 3 seconds
			      items : 4,
			      itemsDesktop : [1199,3],
			      itemsDesktopSmall : [979,3]
			 
			  });

				$('.gallery-link').magnificPopup({
				    type: 'image',
				    gallery: {
				        enabled: true
				    },
				    image: {
				        titleSrc: 'title'
				    }
				});
			 
			});
		</script>

	    <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
	    <script type="text/javascript">
	        // When the window has finished loading create our google map below
	        google.maps.event.addDomListener(window, 'load', init);
	        var map;
	        function init() {
	            // Basic options for a simple Google Map
	            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

	            //Set de lat lng
	            var myLatlng = new google.maps.LatLng(-34.7028751,-58.3119145); // Raquel Espanol 325
	            var mapOptions = {
	                // How zoomed in you want the map to start at (always required)
	                zoom: 15,
	                
	                scrollwheel: false,

	                // The latitude and longitude to center the map (always required)
	                center: myLatlng,

	                // How you would like to style the map. 
	                // This is where you would paste any style found on Snazzy Maps.
	                styles: [ {   featureType:'water',    stylers:[{color:'#E3746D'},{visibility:'on'}] },{   featureType:'landscape',    stylers:[{color:'#f2f2f2'}] },{   featureType:'road',   stylers:[{saturation:-100},{lightness:45}]  },{   featureType:'road.highway',   stylers:[{visibility:'simplified'}] },{   featureType:'road.arterial',    elementType:'labels.icon',    stylers:[{visibility:'off'}]  },{   featureType:'administrative',   elementType:'labels.text.fill',   stylers:[{color:'#444444'}] },{   featureType:'transit',    stylers:[{visibility:'off'}]  },{   featureType:'poi',    stylers:[{visibility:'off'}]  }]
	            };

	            // Get the HTML DOM element that will contain your map 
	            // We are using a div with id="map" seen below in the <body>
	            var mapElement = document.getElementById('map-contact');

	            // Create the Google Map using out element and options defined above
	            var map = new google.maps.Map(mapElement, mapOptions);

	            // Create Marker
	            var marker = new google.maps.Marker({
	              position: myLatlng,
	              map: map,
	              title: 'Salón del Carmen'
	            });

	            //Create Infowindow
	            var infowindow = new google.maps.InfoWindow({
	                content: "<b style='color: #262932;'>Del Carmen Casa Club</b><br /><span style='color: #B0B0B0;'>Raquel Español 325, Wilde</span>"
	            });
	            google.maps.event.addListener(marker, 'click', function() {
	              infowindow.open(map,marker);
	            });
	        }

	      function getLocation() {
	        if (navigator.geolocation) {
	          navigator.geolocation.getCurrentPosition(showPosition);
	          $( "#como-llegar" ).html("Cargando...");
	        } else {
	          alert('No se pudo obtener su ubicación, verfique los permisos.');
	        }
	      }
	      function showPosition(position) {
	        var win = window.open("https://www.google.es/maps/dir/'" + position.coords.latitude + "," + position.coords.longitude + "'/'-34.7028751,-58.3119145'", '_blank');
	        win.focus();
	        $( "#como-llegar" ).html("Cómo llegar");
	      }
	    </script>

	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper" class="wrapper">
				<div id="header">
					
					<!-- Logo -->
						<div id="logo">
							<img src="/web/bundles/app/club/images/logo.png" alt="" />
							<!--
							<h1><a href="index.html">Escape Velocity</a></h1>
							<p>A free responsive site template by HTML5 UP</p>
							-->
						</div>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#servicios" class="smoothScroll">Servicios</a></li>
								<li><a href="#galeria" class="smoothScroll">Galería</a></li>
								<li><a href="#eventos" class="smoothScroll">Eventos</a></li>
								<li><a href="#amigos" class="smoothScroll">Amigos</a></li>
								<li><a href="#footer" class="smoothScroll">Contacto</a></li>
							</ul>
						</nav>

				</div>
			</div>
		
		<!-- Intro -->
			<div id="intro-wrapper" class="wrapper style1">
				<div class="title">Del Carmen Casa Club</div>
				<section id="intro" class="container">
					<p class="style1">So in case you were wondering what this is all about ...</p>
					<p class="style2">
						Escape Velocity is a free responsive<br class="mobile-hide" />
						site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
					</p>
					<p class="style3">
						Una <strong>casa</strong> de otro tiempo con música de otro tiempo. Un <strong>museo</strong>, una <strong>galería</strong> de arte. Un lugar para estar entre <strong>amigos</strong>. Una carta simple, <strong>brebajes</strong> clásicos.
					</p>
					<ul class="actions">
						<li><a href="#servicios" class="button style3 big">Saber más</a></li>
					</ul>
				</section>
			</div>
		
		<!-- Main -->
			<div class="wrapper style2">
				<div class="title" id="servicios">Servicios</div>
				<div id="main" class="container">

					<!-- OWL Carousel -->
					<div id="owl-demo" class="owl-carousel owl-theme">
 
					  <div class="item"><img src="/web/bundles/app/club/images/banner1.jpg" alt="The Last of us"></div>
					  <div class="item"><img src="/web/bundles/app/club/images/banner2.jpg" alt="GTA V"></div>
					  <div class="item"><img src="/web/bundles/app/club/images/banner3.jpg" alt="Mirror Edge"></div>
					 
					</div>
					
					<!-- Features -->
						<section id="features">
							<header class="style1">
								<h2>Dolor consequat feugiat amet veroeros</h2>
								<p>Feugiat dolor nullam orci pretium phasellus justo</p>
							</header>
							<div class="feature-list">
								<div class="row">
									<div class="6u">
										<section>
											<h3 class="icon fa-comment">Live Shows</h3>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
									<div class="6u">
										<section>
											<h3 class="icon fa-refresh">Tapas & Cocktails</h3>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="6u">
										<section>
											<h3 class="icon fa-picture-o">Summer Party</h3>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
									<div class="6u">
										<section>
											<h3 class="icon fa-cog">One Day Gallery</h3>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
								</div>
							</div>
							<ul class="actions actions-centered">
								<li><a href="#" class="button style1 big">Get Started</a></li>
								<li><a href="#" class="button style2 big">More Info</a></li>
							</ul>
						</section>
				
				</div>
			</div>
			
		<!-- Galeria -->
			<div class="wrapper style3">
				<div class="title" id="galeria">Galería de fotos</div>
				
				<div id="main" class="container">

					<!-- OWL Carousel -->
						<div id="owl-demo-2">

						  	<div class="item">
						  		<a href="/web/bundles/app/club/images/pic08.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic08.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
                        	<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic09.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
                          	<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic10.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
                          	<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic08.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
                    		<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic09.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
                           	<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic10.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
        					<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic08.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
						  	<div class="item">
						  		<a href="/web/bundles/app/club/images/pic09.jpg" class="gallery-link" title="IPA Índico">
                                	<img src="/web/bundles/app/club/images/pic09.jpg" class="img-responsive img-centered" alt="">
                                </a>
                            </div>
						 
						</div>
					
					<!-- Features -->
						<section id="features">
							<header class="style1">
								<h2>Algun texto explicando las imagenes</h2>
								<p>Feugiat dolor nullam orci pretium phasellus justo</p>
							</header>
							<div class="feature-list">
								<div class="row">
									<div class="6u">
										<section>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem laoreet vel velit lorem.</p>
										</section>
									</div>
									<div class="6u">
										<section>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
								</div>
							</div>
						</section>
				
				</div>
			</div>
		
		<!-- Eventos -->
			<div class="wrapper style2">
				<div class="title" id="eventos">Eventos</div>
				<div id="highlights" class="container">
					<div class="row 150%">
						<div class="4u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="/web/bundles/app/club/images/event-example.jpg" alt="" /></a>
								<h3><a href="#">Aliquam diam consequat</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<!--
								<ul class="actions">
									<li><a href="#" class="button style1">Learn More</a></li>
								</ul>
								-->
							</section>
						</div>
						<div class="4u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="/web/bundles/app/club/images/event-example.jpg" alt="" /></a>
								<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button style1">Más información</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="/web/bundles/app/club/images/event-example.jpg" alt="" /></a>
								<h3><a href="#">Mattis tempus lorem</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<!--
								<ul class="actions">
									<li><a href="#" class="button style1">Learn More</a></li>
								</ul>
								-->
							</section>
						</div>
					</div>
				</div>
			</div>

		<!-- Union con salón -->
			<div class="wrapper style3">
				<div class="title" id="amigos">Amigos</div>
				<div id="highlights" class="container">
					<div class="row 150%">
						<div class="6u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="/web/bundles/app/club/images/logo-club.jpg" alt="" /></a>
								<h3><a href="#">Del Cármen Casa Club</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<ul class="actions">
									<li><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FDelCarmenCasaClub&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=347192158797396" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:62px; width: 83px" allowTransparency="true"></iframe></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="/web/bundles/app/club/images/logo-salon.jpg" alt="" /></a>
								<h3><a href="#">Salón del Cármen</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button style1">Ir a la web</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title" id="footer">Contacto</div>
				<div id="footer" class="container">
				    
				    <!-- ********** MAP********** -->
				    <header>
    					<div id="map-contact" style="height: 300px; width: 100%;"></div>
    				</header>
    				<br /><br /><br />

					<!--
					<header class="style1">
						<h2>Ipsum sapien elementum portitor?</h2>
						<p>
							Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
							Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
						</p>
					</header>
					<hr />
					-->
					<div class="row 150%">
						<div class="6u">

							<!-- Contact Form -->
								<section>
									<form method="post" action="contacto">
										<input type="hidden" name="from_web" value="club">
 										<div class="row 50%">
											<div class="6u">
												<input type="text" name="name" id="contact-name" placeholder="Nombre" required />
											</div>
											<div class="6u">
												<input type="text" name="email" id="contact-email" placeholder="Email" required />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" id="contact-message" placeholder="Mensaje" rows="4" required ></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
										 		<input type="checkbox" name="subscribe" id="subscribe" value="yes">
            									<label class="checkbox-label" for="subscribe">Subscribirse a Newsletter</label>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="style1" value="Envir" /></li>
													<li><input type="reset" class="style2" value="Borrar" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

						</div>
						<div class="6u">
						
							<!-- Contact -->
								<section class="feature-list small">
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-home">Dirección</h3>
												<p>
													Raquel Español 325<br />
													Wilde, Buenos Aires<br />
												</p>
												<button id="como-llegar" onclick="getLocation()" class="button style2" style="font-size: 10px; margin-left: 70px; margin-top: 8px;">Cómo llegar</button>
											</section>
										</div>
										<div class="6u">
											<section>
												<h3 class="icon fa-comment">Social</h3>
												<p>
													<a href="http://instagram.com/carmencasaclub" target="_blank">@carmencasaclub</a><br />
													<a href="https://www.facebook.com/DelCarmenCasaClub?fref=ts" target="_blank">/DelCarmenCasaClub</a>
												</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-envelope">Email</h3>
												<p>
													<a href="mailto:hola@carmencasaclub.com.ar?Subject=Contacto%20de%20la%20Web" target="_top">hola@carmencasaclub.com.ar</a>
												</p>
											</section>
										</div>
										<div class="6u">
											<section>
												<h3 class="icon fa-phone">Phone</h3>
												<p>
													(011) 4555-0000
												</p>
											</section>
										</div>
									</div>
								</section>
								
						</div>
					</div>
				</div>
				<div id="copyright">
					<ul>
						<li>&copy; 2015 Del Carmen Casa Club</li><li>Power by: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</div>

	</body>
</html>