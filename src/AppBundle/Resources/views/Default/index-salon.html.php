<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link rel="icon" href="/web/bundles/app/salon/img/favicon.ico">

    <title>Salón del Carmen - Eventos</title>

    <!-- Bootstrap core CSS -->
    <link href="/web/bundles/app/salon/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/web/bundles/app/salon/css/ionicons.min.css" rel="stylesheet">    
    <link href="/web/bundles/app/salon/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/web/bundles/app/salon/css/cubeportfolio.css" />

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
                styles: [ {   featureType:'water',    stylers:[{color:'#03C9A9'},{visibility:'on'}] },{   featureType:'landscape',    stylers:[{color:'#f2f2f2'}] },{   featureType:'road',   stylers:[{saturation:-100},{lightness:45}]  },{   featureType:'road.highway',   stylers:[{visibility:'simplified'}] },{   featureType:'road.arterial',    elementType:'labels.icon',    stylers:[{visibility:'off'}]  },{   featureType:'administrative',   elementType:'labels.text.fill',   stylers:[{color:'#444444'}] },{   featureType:'transit',    stylers:[{visibility:'off'}]  },{   featureType:'poi',    stylers:[{visibility:'off'}]  }]
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
                content: "<b>Salón del Carmen</b><br /><span style='color: #B0B0B0;'>Raquel Español 325, Wilde</span>"
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

      /*
      // Get user location and save it in 'start' variable
      function calculateRoute() {
        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();
        directionsDisplay.setMap(map);
        var start, end, distance, time;

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showRoute);
        } else {
          alert('Unable to get location');
        }
        function showRoute(position) {
          // Execute code in here, because is when I get users location
          start = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          // Create a LatLng variable with parameters and save it 'end' variable
          end = new google.maps.LatLng(-34.7028751,-58.3119145);

          var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC
          };

          directionsService.route(request, function(result, status) {

            if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(result);
              distance = result.routes[0].legs[0].distance.text;
              time = result.routes[0].legs[0].duration.text;
              var template = "Distancia: " + distance + "<br /> Tiempo: " + time;
              alert('Info de ruta:', template);
              //alert("Distancia: " + distance + " Tiempo: " + time);
            }
          });
        }
      }
      */
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/web/bundles/app/salon/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="index.html#home">SALÓN DEL CARMEN</a></h1>
      <i class="ion-android-close menu-close"></i>
      <a href="#home" class="smoothScroll">Inicio</a>
      <a href="#speakers" class="smoothScroll">Servicios</a>
      <a href="#portfolio" class="smoothScroll">Galería</a>
      <a href="#plano-gral" class="smoothScroll">Plano general</a>
      <a href="#location" class="smoothScroll">Locación</a>
      <a href="#amigos" class="smoothScroll">Amigos</a>
      <a href="#contact" class="smoothScroll">Contacto</a>
    </div>
    
    <!-- Menu button -->
    <div id="menuToggle"><i class="ion-grid"></i></div>
  </nav>

   <!-- ********** HEADER ********** -->
   <section id="home"></section>
   <div id="h">
    <div class="container">
      <div class="row">
        <h1>SALÓN DEL CARMEN</h1>
        <h5>Raquel Español 325 - Wilde, Buenos Aires</h5>
        <h2>Construida en el año 1900.<br />Hoy esta casa se alquila para celebrar</h2>
        <p class="mt">
          <a href="#contact" class="btn btn-conf btn-green smoothScroll">Contacto</a>
          <a href="#historia" class="btn btn-conf btn-clear smoothScroll">Saber más</a>
        </p>
      </div><!--/row -->
    </div><!--/container -->
   </div><!--/H -->

    <!-- ********** STAND OUT / CALL TO ACTION ********** -->
    <section class="news" id="historia">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 section-transparent">
            <div class="row">
              <div class="col-sm-9">
                <h6>HISTORIA</h6>
                <h3>Casona de estilo francés diseñada desde sus inicios para encantar a sus visitantes.</h3>
                <p>Su arquitectura, que data del año 1929, ofrece un acogedor espacio con elegantes y sofisticadas terminaciones. Esta especial maison, logra el equilibrio perfecto entre beuté française y el tradicional estilo argentino de principios del siglo XX.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 section-bg-color">
            <div class="row">
              <div class="col-sm-3 mt">
                <div class="circle-icon">
                  <div class="icon ion-ios7-clock-outline"></div>
                </div>
              </div><!--/col-sm-4-->
              <div class="col-sm-9">
                <h5>HORARIOS DE ATENCIÓN</h5>
                <h3>Visitanos todos los días de<br />8:00 a 15:00</h3>
                <p>Hoy completamente renovada, pero manteniendo la delicadeza que caracteriza su historia, Del Carmen ofrece excelencia en eventos sociales y corporativos con la calidad y compromiso que sus clientes merecen.</p>
                <p class="mt"><a href="#speakers" class="btn btn-conf btn-clear smoothScroll">Seguir leyendo</a></p>
              </div>
            </div><!--/row-->
          </div><!-- /col-sm-6-->
        </div><!--/row -->
      </div><!--/container -->
    </section><!--/NEWS -->

    <!-- ********** SPEAKERS ********** -->
    <section id="speakers"></section>
    <div class="container ptb">
      <div class="row">
        <h2 class="centered">SERVICIOS</h2>
        <hr class="aligncenter mb">
        <!-- Speakers First Row -->
        <div class="col-md-2 centered">
          <img src="/web/bundles/app/salon/img/ui-01.jpg" height="120" class="img-circle" alt="">
        </div>
        <div class="col-md-4">
          <h4>CONFIANZA</h4>
          <h6><tg>SERVICIO INTEGRAL PARA TODO SU EVENTO</tg></h6>
          <p>Organización integral del evento.</p>
          <p>Recepción en el lugar a cargo del personal especializado.</p>
          <p>Personal de vigilancia permanente dentro y fuera del salón.</p>
        </div>
        <div class="col-md-2 centered">
          <img src="/web/bundles/app/salon/img/ui-02.jpg" height="120" class="img-circle" alt="">
        </div>
        <div class="col-md-4">
          <h4>BENEFICIOS</h4>
          <h6><tg>AL ELEGIR NUESTRO EXCLUSIVO LUGAR</tg></h6>
          <p>Entrada de autos directa a escalinatas de ingreso.</p>
          <p>Rampa especial de ingreso para personas discapacitadas o impedidas de subir escaleras.</p>
          <p>Posibilidad de proyectar en vivo el ingreso al salón de los Anfitriones.</p>
          <p>Posibilidad de armar y ambientar el salón según necesidad de su evento.</p>
          <p>Equipamiento de mesas y sillas de calidad.</p>
        </div>
        <!--/End Row of Speakers-->
      </div><!--/row-->
      <div class="row mt">
        <!-- Speakers Second Row -->
        <div class="col-md-2 centered">
          <img src="/web/bundles/app/salon/img/ui-03.jpg" height="120" class="img-circle" alt="">
        </div>
        <div class="col-md-4">
          <h4>FACILIDADES</h4>
          <h6><tg>PARA LA COMODIDAD DE LOS INVITADOS</tg></h6>
          <p>Toilette principal individual apto para discapacitados.</p>
          <p>Servicio de sanitarios con personal permanente de atención.</p>
          <p>Servicio de Emergencias Médicas.</p>
          <p>Servicio de guardarropas.</p>
          <p>Aire acondicionado y Calefacción central.</p>
          <p>Grupo electrógeno.</p>
          <p>Pequeña Suite para los Anfitriones.</p>
        </div>
        <div class="col-md-2 centered">
          <img src="/web/bundles/app/salon/img/ui-04.jpg" height="120" class="img-circle" alt="">
        </div>
        <div class="col-md-4">
          <h4>TECNOLOGIA</h4>
          <h6><tg>SONIDO, ILUMINACIÓN, PROYECCIONES Y FOTOGRAFÍA</tg></h6>
          <p>Musicalización de ambientes separados con posibilidad de graduación de música en los distintos sectores del salón.</p>
          <p>Tecnología de punta en sonido e iluminación.</p>
          <p>Entrevista previa con Disc Jockey para selección de música e iluminación.</p>
          <p>Proyector en Salón Central y Salas Laterales.</p>
          <p>Paisajes interiores y exteriores para sets fotográficos.</p>
        </div>
      <!--/End Row of Speakers-->  
      </div><!--/row-->
    </div><!--/container-->

    <!-- ********** PORTFOLIO SECTION ********** -->
    <div id="portfolio">
          <div id="grid-container" class="cbp-l-grid-fullScreen">
             <ul>
                <li class="cbp-item identity">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f01.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f01.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Entrada al Salón</div>
                               <div class="cbp-l-caption-desc">Juegos con fuego</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item web-design">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f02.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f02.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item graphic identity">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f03.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f03.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item graphic">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f04.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f04.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item identity">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f05.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f05.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item graphic">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f06.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f06.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item web-design">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f07.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f07.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- end:Item -->
                <li class="cbp-item identity">
                   <a class="cbp-caption cbp-lightbox" data-title="Image" href="/web/bundles/app/salon/img/portfolio/f08.jpg">
                      <div class="cbp-caption-defaultWrap">
                         <img src="/web/bundles/app/salon/img/portfolio/f08.jpg" alt="" class="img-responsive">
                      </div>
                      <div class="cbp-caption-activeWrap">
                         <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                               <div class="cbp-l-caption-title">Image LightBox</div>
                               <div class="cbp-l-caption-desc">by John Doe</div>
                            </div>
                         </div>
                      </div>
                   </a>
                </li>
             </ul>
          </div>
          <!--/ END PORTFOLIO SECTION -->
    </div><!--/portfolio -->

    <!-- ********** WHITE SECTION - PLANO ********** -->
    <div class="container mt" id="plano-gral">
      <!--
      <h2 class="centered">MAPA DEL SALON</h2>
      <hr class="aligncenter mb">
      -->
      <div class="row mtb">
        <div class="col-md-5 col-md-offset-1 of">
          <img src="/web/bundles/app/salon/img/plano_general.jpg" class="img-responsive aligncenter" alt="" data-effect="slide-left">
        </div><!--/col-md-5-->
        
        <div class="col-md-5 col-md-offset-1">
          <h1 class="centered">PLANO DEL SALÓN</h1>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
          <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
        </div>
      </div><!--/row -->
    </div><!--/plano -->

    <!-- ********** TESTIMONIALS ********** -->
    <section class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6 section-bg-grey centered">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <p>Hemos celebrado ahí nuestra unión y el Bautismo de Lara y todo salio Maravilloso!!! La atención del personal, su amabilidad y calidez, el servicio de catering...todos han elogiado el catering...desde la recepción hasta el final de fiesta. Encantados de celebrar con uds. Encontraremos algún otro evento para volver a festejar!</p>
                  <h5><tgr>FATIMA GOROSITO</tgr></h5>
                </div>
                <div class="item" style="min-height: 157px;">
                  <p>Nos encanta el salón! Celebramos los cumpleaños y bautismo de nuestros dos hijos y fueron fantásticos. Nos vemos pronto en un nuevo evento especial familiar!</p>
                  <h5><tgr>LAS COSAS DE CRISS</tgr></h5>
                </div>
              </div>
            </div><!--/Carousel-->
          </div><!--/col-sm-6-->
        </div><!--/row-->
      </div><!--/container-->
    </section><!--/testimonials-->

        <!-- ********** LOCATION ********** -->
    <section id="location"></section>
    <div id="t">
      <div class="container">
        <div class="row mt">
          <div class="col-lg-8 col-lg-offset-2 centered">
              <!-- Carousel
              ================================================== -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">
                    <!-- <img src="/web/bundles/app/salon/img/ui-05.jpg" class="img-circle aligncenter" width="120" alt="First slide"> -->
                    <h3>PRODUCCIONES DE MODA</h3>
                    <hr class="aligncenter">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
                  <div class="item">
                    <!-- <img src="/web/bundles/app/salon/img/ui-06.jpg" class="img-circle aligncenter" width="120"  alt="Second slide"> -->
                    <h3>LOCACIÓN AUDIOVISUAL</h3>
                    <hr class="aligncenter">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
                </div>
              </div><!-- /.carousel -->
          </div><!--/col-lg-8 -->
        </div><!--/row -->
      </div><!--/container -->
    </div><!--/Backstage -->

    <!-- ********** WHITE SECTION - AMIGOS ********** -->
    <div class="container mt" id="amigos">
      <h2 class="centered">AMIGOS</h2>
      <hr class="aligncenter mb">
      <div class="row mtb">
          <div class="col-md-6">
            <img src="/web/bundles/app/salon/img/logo-salon.jpg" class="img-responsive aligncenter" alt="">
            <h3>Salón del Cármen</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsalondelcarmen%3Ffref%3Dts&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21&amp;appId=347192158797396" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
            <!--<p><a href="#">Continue Reading...</a></p>-->
          </div><!--/col-md-4-->
          <div class="col-md-6">
            <a href="https://www.facebook.com/DelCarmenCasaClub?fref=ts" target="_blank"><img src="/web/bundles/app/salon/img/logo-club.jpg" class="img-responsive aligncenter" alt=""></a>
            <h3>Del Cármen Casa Club</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <h4><a href="https://www.facebook.com/DelCarmenCasaClub?fref=ts" target="_blank">Ver la web...</a></h4>
          </div><!--/col-md-4-->
      </div><!--/row -->
    </div><!--/amigos -->

    <!-- ********** FOOTER ********** -->
    <section id="contact"></section>
    <div id="f">
      <div class="container">
        <div class="row centered">
          <h2>Queres visitar el Salón? Dejanos tu contacto.</h2>
          <div class="col-md-6 col-md-offset-3 mt">
            <form role="form" action="contacto" method="post" enctype="plain">
              <input type="hidden" name="from_web" value="salon">
              <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                  <input type="text" name="name" placeholder="Nombre..." required>
                  <input type="email" name="email" placeholder="E-mail..." required>
                  <input type="text" name="subject" placeholder="Motivo del Contacto..." required>
                </div>
                <div class="col-sm-5">
                  <textarea name="message" placeholder="Mensaje..." required></textarea>
                </div>
              </div>
              <div class="row">
                <input type="checkbox" name="subscribe" id="subscribe" value="yes">
                <label for="subscribe">Subscribirse a Newsletter</label>
              </div>
              <div class="row">
                <button class='btn btn-conf-contact btn-green' type="submit">Enviar</button>
              </div>
            </form>
          </div><!--/col-md-6-->
        </div><!--/row-->
        <div class="row mt">
          <div class="col-md-6 col-md-offset-3">
            <div class="row">
              <div class="col-sm-5 col-sm-offset-1">
                <h3>Información de contacto</h3>
                <h5>
                  Raquel Español 325<br/>
                  Wilde<br/>
                  Buenos Aires.
                </h5>
              </div>
              <div class="col-sm-5">
                <!--<h3>&nbsp;<br/>&nbsp;</h3>-->
                <h3><button id="como-llegar" onclick="getLocation()" class="btn btn-conf btn-clear smoothScroll" style="margin-bottom: 6px;">Cómo llegar</button></h3>
                <h5>
                  4217-2540<br/>
                  <a href="mailto:hola@espaciodelcarmen.com.ar?Subject=Consulta%20de%20la%20Web" target="_top">hola@espaciodelcarmen.com.ar</a>
                  <br />
                  <a href="mailto:reservas@espaciodelcarmen.com.ar?Subject=Reserva%20de%20la%20Web" target="_top">reservas@espaciodelcarmen.com.ar</a>
                </h5>
              </div>
            </div>
          </div><!--/col-md-8-->
        </div><!--/row-->
      </div><!--/container-->
    </div><!--/F-->

    <!-- ********** MAP********** -->
    <div id="map-contact"></div>

    <!-- ********** COPYRIGHT ********** -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>SALÓN DEL CARMEN</h4>
          </div>
          <div class="col-md-4">
            <p class="alignright">
              <a href="https://www.facebook.com/salondelcarmen?fref=ts"><i class="ion-social-facebook"></i></a>
              <!--
              <a href="#"><i class="ion-social-twitter"></i></a>
              <a href="#"><i class="ion-social-instagram"></i></a>
              <a href="#"><i class="ion-social-dribbble"></i></a>
              <a href="#"><i class="ion-social-github"></i></a>
              -->
            </p>
          </div>
        </div><!--/row-->
      </div><!--/container-->
    </div><!--/copyright-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/web/bundles/app/salon/js/jquery.min.js"></script>
    <script src="/web/bundles/app/salon/js/bootstrap.min.js"></script>
    <script src="/web/bundles/app/salon/js/classie.js"></script>
    <script src="/web/bundles/app/salon/js/smoothscroll.js"></script>
    <script src="/web/bundles/app/salon/js/main.js"></script>
    <script src="/web/bundles/app/salon/js/retina-1.1.0.js"></script>
    <script src="/web/bundles/app/salon/js/jquery.cubeportfolio.js"></script>
    <script src="/web/bundles/app/salon/js/theme.js"></script>
  </body>
</html>
