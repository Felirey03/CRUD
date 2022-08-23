<html>
<link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

<head>
<title>Contacto</title>
<link rel="stylesheet" type="text/css" href="conexion.php" />
</head>
<body>
<script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js" ></script>
	<div class="form-container">
		<form name="frmContact" id="" frmContact"" method="post" action=""
			enctype="multipart/form-data" onsubmit="return validateContactForm()">

			<div class="input-row">
				<label style="padding-top: 20px;">Nombre y Apellido</label> <span
					id="userName-info" class="info"></span><br /> <input type="text"
					class="input-field" name="userName" id="userName" />
			</div>
			<div class="input-row">
				<label>Email</label> <span id="userEmail-info" class="info"></span><br />
				<input type="text" class="input-field" name="userEmail"
					id="userEmail" />
			</div>
			<div class="input-row">
				<label>Telefono</label> <span id="subject-info" class="info"></span><br />
				<input type="text" class="input-field" name="subject" id="subject" />
			</div>
			<br>
			<div>
				<p>
					Producto
					<select name="Producto">
					<option>Vinilo</option>
					<option>Carteleria</option>
					</select>
				</p>
			</div>

			<div>
				<input type="submit" name="enviar" class="btn-primary" value="✅Enviar" />
			</div>
		</form>
	</div>

</body>
</html>
