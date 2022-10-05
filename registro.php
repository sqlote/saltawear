<!DOCTYPE html>
<head>
	<title>SaltaWear - Registrarse</title>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootsrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <?php
$servername = "localhost";
$database = "salta_wear";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Coneccion Fallida " . mysqli_connect_error());
}
# echo "Conectado" . " <br>";
?>

 <header> 
 	<div class="container-fluid bg-danger py-5 text-white">
 				<div class="container text-white"> 
 		<div class="row">
 			<div class="col-3"> <a  href="index.php"> <img src="img/logo2.png" width="200" height=""> </a></div>
 			<div class="col-6 text-white"><h1> Create  <br> una cuenta </h1></div>
 			<div class="col-3 display-4 "> <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menú
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="faq.html">Preguntas Frecuentes</a>
    <a class="dropdown-item" href="contacto.html">Contactanos</a>
  <!--  <a class="dropdown-item" href="subirart.php">Subir un Articulo</a> -->
  </div>
</div> </div>
 		</div>


</div>
</div>


</header></head>

<body>
	<div class="container">
		<center>
	<form action="consul_registro.php" method="post">
     <h1> Email </h1> <br/> <input type="email" name="pa12312ss" placeholder="Email"> <br/><br/>
	<h1>Nuevo nombre de Usuario:</h1>	<input class="form-control-sm" type="text" name="usuario" placeholder="Nuevo Usuario"> <br/><br/>
	<h1>Nueva Contraseña: </h1>	<input class="form-control-sm" type="password" name="contraseña" placeholder="Nueva Contraseña">  <br/><br/>
  <h1> Repite la Contraseña </h1> <br/> <input type="password" name="pa2ss" placeholder=" Repite la Contraseña"> <br/><br/>
		<input 	type="submit" name="boton" value="Registrar">
		
	</form>
	</center>
	</div>
</body>