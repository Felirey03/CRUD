<html>
<!-- BOOSTRAP -->
<link rel="stylesheet" href="conexion.php">
<link rel="stylesheet" href="bootstrap-4.0.0\dist\css\bootstrap.min.css">
<link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
<head>
	<!-- Nombre titulo e imagen -->
<title>Contacto</title>
<link rel="shortcut icon" href="hulki.jpeg">
<link rel="stylesheet" type="text/css" href="conexion.php" />
</head>

<body>
	<!-- Barra de Navegacion -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="inicio.php">Reyzarra</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pedido.php">Pedido</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
    </div>
  </div>
 <center> 
	<!-- Campo registro -->
  <form action="registrar.php" method="post">
	<div class="form-container">
			<div class="input-row">
				<label style="padding-top: 20px;">Nombre y Apellido</label> <span
					id="userName-info" class="info"></span><br /> <input type="text"
					class="input-field" name="nombre" id="nombre" />
			</div>
			<div class="input-row">
				<label>Email</label> <span id="userEmail-info" class="info"></span><br />
				<input type="text" class="input-field" name="email"
					id="email" />
			</div>
			<div class="input-row">
				<label>Telefono</label> <span id="subject-info" class="info"></span><br />
				<input type="text" class="input-field" name="telefono" id="telefono" />
			</div>
			<br>
			<div>
				<p>
					Producto: 
					<select name="producto">
					<option>Vinilo</option>
					<option>Carteleria</option>
					</select>
				</p>
			</div>
			<div>
				<input type="submit" name="enviar" class=" btn btn-primary" value="✅Enviar" />
			</div>
	</form>
</center>
	</div>
</body>
</html>
