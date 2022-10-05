<!DOCTYPE html>
<head>
	</head>


<body>	
<?php
$servername = "localhost";
$database = "salta_wear";
$username = "root";
$password = "";
// Cse crea la coneccion
$conn = mysqli_connect($servername, $username, $password, $database);
// comprobamos coneccion
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Conectado" . " <br>";

$user= $_POST["user"];
$pass= $_POST["pass"];

$sql="SELECT * FROM `users` WHERE user = '$user' and pass = '$pass'";
$result=mysqli_query($conn, $sql);

 $filas=mysqli_num_rows($result);
 	if($filas>0) {
 	session_start();
 	$_SESSION['user'] = '$sesuser';
 	header("location:index2.php");
 }
 else
 	header("location:login-error.html");
?>