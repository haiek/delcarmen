<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Del Cármen Newsletter - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/web/bundles/app/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/web/bundles/app/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/web/bundles/app/admin/js/gritter/css/jquery.gritter.css" />
        
    <!-- Custom styles for this template -->
    <link href="/web/bundles/app/admin/css/style.css" rel="stylesheet">
    <link href="/web/bundles/app/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JS for creating email -->
    <script type="text/javascript" src="/web/bundles/app/tinymce/tinymce.min.js"></script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DEL CARMEN NEWSLETTER</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/web">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="/web/bundles/app/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Ale Billet</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="../newsletter">
                          <i class="fa fa-envelope-o"></i>
                          <span>Nuevo</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-list-ul"></i>
                          <span>Contactos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../miembros">Salón</a></li>
                          <li><a  href="../miembros">Club</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Crear nueva campaña newsletter</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          			<!-- Put sth here -->
          			<form method="post">
				   		<textarea rows="18"></textarea>
					</form>
					<br />
					<button id="btn-crear"  class="btn btn-lg btn-theme03 pull-right">Enviar</button>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - Salondelcarmen.com
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/web/bundles/app/admin/js/jquery.js"></script>
    <script src="/web/bundles/app/admin/js/bootstrap.min.js"></script>
    <script src="/web/bundles/app/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/web/bundles/app/admin/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="/web/bundles/app/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/web/bundles/app/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/web/bundles/app/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!--common script for all pages-->
    <script src="/web/bundles/app/admin/js/common-scripts.js"></script>
    <script type="text/javascript" src="/web/bundles/app/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/web/bundles/app/admin/js/gritter-conf.js"></script>

    <!--script for this page-->
	<script type="text/javascript">
		tinymce.init({
		    selector: "textarea",
		    plugins: "image"
		 });

		$(function() {

			$("#btn-crear").click(function () {

				$.ajax({
					url: '../campania/enviar',
					type: 'POST',
					dataType: 'html',
					data: {contenido: tinyMCE.activeEditor.getContent({format : 'html'}) }
				})
					.done(function(response) {
				        var unique_id = $.gritter.add({
				            // (string | mandatory) the heading of the notification
				            title: 'Newsletter Enviada!',
				            // (string | mandatory) the text inside the notification
				            text: 'Felicitaciones, has enviado la Newsletter al grupo de contactos seleccionado. Podes enviar otra al mismo grupo o dirigirte a <a href="../newsletter" style="color:#ffd777">Inicio</a>.',
				            // (string | optional) the image to display on the left
				            image: '/web/bundles/app/admin/img/ui-sam.jpg',
				            // (bool | optional) if you want it to fade out on its own or just sit there
				            sticky: true,
				            // (int | optional) the time you want it to be alive for before fading out
				            time: '',
				            // (string | optional) the class name you want to apply to that specific message
				            class_name: 'my-sticky-class'
				        });
						console.log(response);
				})

			});

		})
	</script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>