<!DOCTYPE html>
<head>
	<title>Admin Login</title>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootsrap.min.css">
	</head>


<body>	
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

<center>

<br>
<div class="container">	
<div class="row"> 
	<div class="col-6"> 
<h1 class="display-4">Inicia Sesion con <br> tu cuenta </h1></div>
<br>
<div class="col-6"> 
<div class="container bg-danger py-5 text-white"> 
 <h1 class="display-4"> Iniciar Sesión </h1>
 <form action="validacion_login.php" method="post">
 	Nombre de Usuario: <input name="user" type="text" placeholder="Nombre de Usuario"> <br><br>
 	Contraseña: <input name="pass" type="password" placeholder="Contraseña"> <br><br>
 	<input class="btn btn-light" name="iniciar" type="submit" value="Iniciar Sesion">
 	</form>
</div> </div></div></div>
</center>
<br>
<br>
<div class="container" >
	<a href="index.php">Volver al Menu</a>
</div>