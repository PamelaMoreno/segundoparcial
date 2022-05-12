<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>
		<h1>Formulario con AJAX</h1>
		<form id="formulario">
			<label for="nombre">Nombre:</label><br>
			<input type="text" name="nombre" id="nombre"><br><br>
			<label for="ciudad">Ciudad:</label><br>
			<input type="text" name="ciudad" id="ciudad"><br><br>
			<button type="submit">Enviar</button>
		</form>
		<script src="./js/jquery-3.6.0.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
		<script src="./js/postajax.js"></script>
	</body>
</html>
