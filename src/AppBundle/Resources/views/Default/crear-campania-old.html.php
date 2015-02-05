<html>
<head>
	<title></title>

	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="/web/bundles/app/tinymce/tinymce.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>	
	
	<script type="text/javascript">
	tinymce.init({
	    selector: "textarea",
	    plugins: "image"
	 });

	$(function() {

		$("#btn-crear").click(function () {

			$.ajax({
				url: 'enviar',
				type: 'POST',
				dataType: 'html',
				data: {contenido: tinyMCE.activeEditor.getContent({format : 'html'}) }
			})
				.done(function(response) {
					console.log(response);
			})

		});

	})

	
	
	
	</script>

	<style type="text/css">
		body {
			padding: 20px;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Del Carmen</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Enviar newsletter <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Administrar miembros</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="page-header">
	 	<h1>Crear nueva campa&ntilde;a <small>Del Carmen Newsletter</small></h1>
	</div>

	<form method="post">
   		<textarea></textarea>
	</form>
	<button id="btn-crear"  class="btn btn-default">Enviar</button>

</body>
</html>