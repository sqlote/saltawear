<?php
 	session_start();
 	  $sesion= $_SESSION['user'];

  if($sesion == null || $sesion = '') {
    echo "Sesion perdida.";
    die();
  }
  ?>

<!DOCTYPE html>
<head>
	<title>SaltaWear - Inicio</title>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootsrap.min.css">
	</head>

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
 			<div class="col-6 text-white"><a class="display-4 py-5"> ¡Bienvenidos a <br> SaltaWear ! </a></div>
 			<div class="col-3 display-4 ">
      <div class="col-3 display-4 "> <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menú
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="faq.html">Preguntas Frecuentes</a>
    <a class="dropdown-item" href="contacto.html">Contactanos</a>
    <a class="dropdown-item" href="subirart.php">Subir un Articulo</a>
  </div>
</div> </div>
    </div> </div> <br><br>
 		</div>

<ul class="list-inline">
    <li class="list-inline-item"><a href="https://www.facebook.com/bsg.tomi"><kbd>Facebook</kbd></a> </li>
      <li class="list-inline-item"><a href="https://www.instagram.com/bsg.tomi"><kbd> Instagram</kbd> </a> </li>
</div>
</div>


<br>	

		<div class="container-fluid bg-dark	py-5 text-white">

			<div class="display-4"> Productos destacados: </div>
			
		</div>

  <center>
	<?php 

$sql= "SELECT * FROM pubs ";
      $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
  $img= $row["img_pubs"];
        echo "<div class='container'><div class='col-3'><h4>" . $row["titulo_pubs"] . "</h4> <br/> <div class='text-dark'> " . $row["desc_pub"] ."<h4>$".$row['precio']. "<h4> Contacto: </h4> ".$row["num_contac"]."  <br/> <img src=img/$img width='300px' height='300px'></div>
        </div></div> <br><br> 
          
        <br>"; 
            }
} else {
    echo "sin resultados";
}
		 ?>
     </center>
</div>
     <!--FOOTER-->
            <footer>  
            <div class="container">
              <a href="faq.html">FAQs</a>       <a href="contacto.html">Contactanos</a>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>