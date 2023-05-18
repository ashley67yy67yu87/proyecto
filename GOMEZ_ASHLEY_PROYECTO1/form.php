<<?php 
 
$gmail = $_POST['gmail']
$eres = $_POST['SERES']

    $personaje = $_POST['Charles']
    $personaje = $_POST['Alan Turing']
    $personaje = $_POST['OTRAS']

$fecha = $_POST['DATE']
$ada = $_POST['NUM']
$tiempo = $_POST['TIEMPO']
$interesante = $_POST['INTERESANTE']
$relevante = $_POST['GUSTO']
$nogusto = $_POST['relevante']



$MENsaje = "fue echo por" . $gmail . "/r/n";
$MENsaje = " eligio" . $personaje . "/n/r";
$MENsaje = "es un" . $eres . "/n/r";
$MENsaje = " nos vicito" . $fecha . "/n/r";
$MENsaje = " la fecha de ada es" . $ada . "/n/r";
$MENsaje = "cuanto le llevo leer" . $tiempo . "/n/r";
$MENsaje = "le parecio" . $interesante . "/n/r";
$MENsaje = "es relevante" . $relevante . "/n/r";
$MENsaje = " no le agrado" . $nogusto . "/n/r";


$para = '20191213@cobachih.edu.mx';
$asunto = 'encuesta de formulario de la pagina' ;



mail($para, $asunto, $MENsaje, $header);


header ('location : exito.html')
<link rel="stylesheet" type="text/html" href="exito.html"> 



 ?>
