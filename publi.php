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



#$producto= 	$_POST['name_pub'];

#$desc= $_POST['desc_pub'];

#$nombrefoto= $_FILE['img_pub'] ['name'];
#$archivo= $_FILE['img_pub'] ['tmp_name'];
#$ruta= "img";

#$ruta= $ruta."/".$nombrefoto; 

#		move_uploaded_file($producto, $ruta);

#	$sql= mysqli_query("INSERT INTO pubs VALUES ('".$producto."', '".$desc."', '".$ruta."')");
	

#		if($sql){
#			echo"Se guardo correctamente";
#		} else {
#			echo"No se guardo :c";
#		}

//capturamos los datos del fichero subido
$titulo= $_POST["name_pub"];
$desc= $_POST["desc_pub"];
$tel= $_POST["num_contac"];
$user= $_POST["iduser"];
$precio= $_POST["precio"];
$type=$_FILES['img_pub']['type'];
$tmp_name = $_FILES['img_pub']["tmp_name"];
$name = $_FILES['img_pub']["name"];

$nuevo_path="img/".$name;

move_uploaded_file($tmp_name,$nuevo_path);

$array=explode('.',$nuevo_path);

$ext= end($array);
		$consult="INSERT INTO `pubs` (`id_pubs`,`num_contac`,`titulo_pubs`,`desc_pub`,`img_pubs`,`id_user`, `precio`) VALUES (NULL,'$tel','$titulo','$desc','$name','$user', '$precio')";
	$sql= mysqli_query($conn, $consult);
		if($sql){
		echo"Se guardo correctamente";
		} else {
			echo"No se guardo :c";
		}


	header("location:index2.php");
?>