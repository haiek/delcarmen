<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>	
	<style type="text/css">
		form {
			padding: 0 20px 20px 20px;
		}
	</style>
</head>


<body>
	<div class="page-header">
	  <h1><small>Seleccione una lista para enviar el newsletter</small></h1>
	</div>
	<form action="../campania/crear" method="post">

		<select name="listId" class="form-control" style="width: 300px;">
			<option value="0">Salon</option>
			<option value="1">Club</option>
		</select>
		<br>
		<input type="submit"  class="btn btn-default" value="Elegir"></input>
	</form>
</body>
</html>