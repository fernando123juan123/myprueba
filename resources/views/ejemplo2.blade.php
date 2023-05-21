<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ejemplo2</title>
	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css') ?>">

	<script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo asset('js/jquery.min.js') ?>"></script>

</head>
<body>
	<div class="container"> <!-- div.container -->
		<br>
		<div class="row"> <!-- div.row -->
			<div class="col-lg-6">
				<div class="panel panel-success">
					
					<div class="panel-heading">
						<label>FORMULARIO 2</label>
					</div>

					<div class="panel-body">
						<form id="ejemplo2_res" method="post">
							
							@csrf

							<div class="form-group">
								<label>VALOR1:</label>
								<input type="text" class="form-control" name="valor1" required>
							</div>

							<div class="form-group">
								<label>VALOR2:</label>
								<input type="text" class="form-control" name="valor2" required>
							</div>

							<div class="form-group">
								<label>RESULTADO:</label>
								<input type="text" class="form-control" id="respuesta" disabled>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-success btn-lg">CALCULAR</button>
							</div>

						</form>
					</div>


				</div>
			</div>
		</div>
	</div>


<script>
$("#ejemplo2_res").submit(function(event) {
	event.preventDefault();
	$.ajax({
		url: '<?php echo route('prueba.ejemplo2_res') ?>',
		type: 'POST',
		data: $("form").serialize(),
		success:function(datos){
			var valores=eval(datos)
			$("#respuesta").val(valores[0])
		}
	})
});	
</script>


</body>
</html>