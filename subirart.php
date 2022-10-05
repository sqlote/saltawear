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
 
#	 echo "Conectado" . " <br>";

?>

 <header> 
 	<div class="container-fluid bg-danger py-5 text-white">
 				<div class="container text-white"> 
 		<div class="row">
 			<div class="col-3"> <a  href="index.php"> <img src="img/logo2.png" width="200" height=""> </a></div>
 			<div class="col-6 text-white"><a class="display-4 py-5"> Sube un nuevo <br> Articulo </a></div>
 			<div class="col-3 display-4 "><div class="col-3 display-4 "> <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menú
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="faq.html">Preguntas Frecuentes</a>
    <a class="dropdown-item" href="contacto.html">Contactanos</a>
    <a class="dropdown-item" href="subirart.php">Subir un Articulo</a>
  </div>
</div> </div>
 		</div> </div>
 		</div>
    <ul class="list-inline">
    <li class="list-inline-item"><a href="https://www.facebook.com/bsg.tomi"><kbd>Facebook</kbd></a> </li>
      <li class="list-inline-item"><a href="https://www.instagram.com/bsg.tomi"><kbd> Instagram</kbd> </a> </li>    
</div>
</div>

			</header>
			<center>
				<div class="container">
					<br/> <br/><br/> <br/>
					<h4 class="display-4"> Ingrese un nuevo articulo.</h4>
					<form action="publi.php" method="post" enctype="multipart/form-data">
						<h3>Nombre del producto:</h3> <input type="text" name="name_pub" placeholder="Nombre de la Publicacion" required> <br/> <br/>
						<h3>Descripcion del producto:</h3><input type="text" name="desc_pub" placeholder="Inserte descripcion de la publicacion. (Adjunte estado y precio/permuta)" required> <br/> <br/>
						<h3>Número de contacto:</h3><input type="text" name="num_contac" placeholder="Inserte su Numero de contacto" required> <br/> <br/>
						<h3>IDUser</h3><input type="text" name="iduser" placeholder="Ingrese su ID de Usuario" required> <br/> <br/>
						<h3>Precio: </h3>$<input type="text" name="precio" placeholder="Precio (sin $)" required> <br/> <br/>
								<input type="file" name="img_pub" > <br/> <br/>
								<input type="submit" name="boton" value="Enviar">
					</form>
				</div>
			</center>

			<br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     <?php	



     ?>

     <!--FOOTER-->
            <footer>  
            <div class="container">
              <a href="faq.html">FAQs</a>       <a href="contacto.html">Contactanos</a>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>