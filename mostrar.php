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
 
#	 echo "Conectado" . " <br>";


		$sql= "SELECT * FROM pubs WHERE id_pubs=2";
			$result=mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$img= $row["img_pubs"];
        echo "Nombre: " . $row["titulo_pubs"] . "<br/> Descripcion: " . $row["desc_pub"] . "<br/> Imagen : <br/> <img src=img/$img>"; 
            }
} else {
    echo "sin resultados";
}
?>
