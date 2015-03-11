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
        
    <!-- Custom styles for this template -->
    <link href="/web/bundles/app/admin/css/style.css" rel="stylesheet">
    <link href="/web/bundles/app/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                      <a href="../newsletter">
                          <i class="fa fa-envelope-o"></i>
                          <span>Nuevo</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-list-ul"></i>
                          <span>Contactos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="a46c470bcf">Salón</a></li>
                          <li><a  href="1bc83ec652">Club</a></li>
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
          	<h3><i class="fa fa-angle-right"></i> Lista de contactos</h3>

			<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Agregar contacto</h4>
                      <div class="form-horizontal style-form" method="get">
            			<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
							  <input type="email" class="form-control" id="email-nuevo">
							</div>
						</div>
            			<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Nombre</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="nombre-nuevo">
							</div>
						</div>
            			<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Apellido</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="apellido-nuevo">
							</div>
						</div>
						<button id="btn-agregar" class="btn btn-theme03">Agregar</button>
					  </div>
					</div>
          		</div><!-- col-lg-12-->      	
          	</div>

			<div class="row">
				<div class="col-md-12 mt">
	              	<div class="form-panel">
	                      <h4><i class="fa fa-angle-right"></i> Listado de contactos</h4><hr><table class="table table-hover">
	              	  	  
	              	  	  
	                          <thead>
	                          <tr>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Email</th>
									<th>Eliminar</th>
	                          </tr>
	                          </thead>
	                          <tbody>
									<?php
								//var_dump($members);die;
									foreach ($members as $m)
									{
								?>		<tr>
											<td><?php echo $m['merges']['FNAME']; ?></td>
											<td><?php echo $m['merges']['LNAME']; ?></td>
											<td><?php echo $m['merges']['EMAIL']; ?></td>
											<td><a href="javascript: eliminar('<?php echo $m['euid']; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></a></td>
										</tr>	
								<?php
									}
								?>
	                          </tbody>
	                      </table>
	              	  </div><!-- --/content-panel ---->
	          	</div>
          	</div>

    	  </section>
			
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

    <!--script for this page-->
	<script>
		function eliminar(eid)
		{
			if (confirm("¿Desea eliminar este contacto?"))
			{
				$.ajax({
					url: '../eliminar_miembros',
					type: 'POST',
					dataType: 'html',
					data: {eid: eid, lista: document.URL.split("/miembros/")[1] },
				})
				.done(function(response) {
					alert(response);
				})
			}
			
		}

		$(function(){

			$("#btn-agregar").click(function(event) {

				var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
				if (testEmail.test($("#email-nuevo").val()))
				{
					$.ajax({
					url: '../agregar_miembros',
					type: 'POST',
					dataType: 'html',
					data: { email: $("#email-nuevo").val(), nombre: $("#nombre-nuevo").val(), apellido: $("#apellido-nuevo").val(), lista: document.URL.split("/miembros/")[1] },
					})
					.done(function(response) {
						alert(response);
					})
				}
				else
				{
					alert("Debe ingresar un email valido");
				}
				
			});

		})
	</script>

  </body>
</html>
