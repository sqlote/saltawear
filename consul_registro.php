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


 $usuario= $_POST["usuario"];
 $password= $_POST["contraseña"];


	$consult="INSERT INTO `users` (`id_user`,`user`,`pass`) VALUES (NULL,'$usuario','$password')";
	$sql= mysqli_query($conn, $consult);
		if($sql){
		header("location:index.php");
		} else {
			echo"No se guardo :c";
		}



?>