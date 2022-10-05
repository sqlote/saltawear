<!DOCTYPE html>
<head>
	<title>SaltaWear - Inicio</title>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootsrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* contenedor del slider */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* etiqueta de texto */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* numero de texto (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* puntos indicadores */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.5s ease;
}

.active {
  background-color: #717171;
}

/* animacion de degrade */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.0s;
  animation-name: fade;
  animation-duration: 1.5s;
}



@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* responsivo */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
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

<ul class="list-inline">
    <li class="list-inline-item"><a href="https://www.facebook.com/bsg.tomi"><kbd>Facebook</kbd></a> </li>
      <li class="list-inline-item"><a href="https://www.instagram.com/bsg.tomi"><kbd> Instagram</kbd> </a> </li>
</div>
</div>
                          <body>
                            <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/slider3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/slider1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/slider2.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
                            <center>
                              <div class="container bg-dark py-5 display-4 text-white">Inicie sesión para poder continuar.</div> <br><br>
                            <div class="container">
                              <form action="validacion_login.php" method="post">
                 <h4>Usuario</h4>      <input name="user" type="text" placeholder="Usuario"> <br><br>
                 <h4>Contraseña</h4>  <input type="password" name="pass" placeholder="Contraseña"> <br><br>
                                    <input class="btn btn-dark" type="submit" name="enviar" value="Iniciar Sesion">
                              </form>
                              <a href="registro.php"> Crea una cuenta </a>
                            </div>
                          <br><br><br>
<div class="row">
  <div class="col-4"></div>
  <div class="col-4">
                          <h5> En nuestro portal web podrá comprar, vender e intercambiar prendas de ropa con gente de toda la provincia. 
                          ¡Crea una cuenta ahora mismo! </h5> <br><br><br>

<div class="col-4">
                          </div>
                          </div>
                          </div>
</center>
                          </body>
<!--FOOTER-->
            <footer>  
            <div class="container">
              <a href="faq.html">FAQs</a>       <a href="contacto.html">Contactanos</a>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>