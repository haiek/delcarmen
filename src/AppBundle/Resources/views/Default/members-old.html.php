<!DOCTYPE html>
<html>
<head>
	<style>
	body {
		padding: 10px;
	}
	</style>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">


</head>
<body>

<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email-nuevo" placeholder="Ingresa un email...">
    <button id="btn-agregar" type="submit" class="btn btn-default">Enviar</button>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Listado de miembros</div>
	<table class="table table-bordered table-striped table-condensed table-hover">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Eliminar</th>
		</tr>
	<?php
	//var_dump($members);die;
		foreach ($members as $m)
		{
	?>		<tr>
				<td><?php echo $m['merges']['FNAME']; ?></td>
				<td><?php echo $m['merges']['LNAME']; ?></td>
				<td><?php echo $m['merges']['EMAIL']; ?></td>
				<td style="text-align: center;"><a href="javascript: eliminar('<?php echo $m['euid']; ?>')"><span class="glyphicon glyphicon-remove"></span></a></td>
			</tr>	
	<?php
		}
	?>
	</table>
</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>	

		<script>
	function eliminar(eid)
	{
		if (confirm("¿Desea eliminar este contacto?"))
		{
			$.ajax({
				url: 'miembros/eliminar',
				type: 'POST',
				dataType: 'html',
				data: {eid: eid},
			})
			.done(function(response) {
				alert(response);
			})
		}
		
	}

	$(function(){

		$("#btn-agregar").click(function(event) {
			
			$.ajax({
				url: 'miembros/agregar',
				type: 'POST',
				dataType: 'html',
				data: { email: $("#email-nuevo").val() },
			})
			.done(function(response) {
				alert(response);
			})
		});

	})
	</script>
</body>
</html>

