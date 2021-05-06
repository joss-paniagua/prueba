<html>

<head>
    <title>titulo</title></head>

<body>
   

<a href="index.php?pagina=ejercicio1.php">ejercicio1</a>
<a href="index.php?pagina=ejercicio3.php">ejercicio3</a>
<a href="index.php?pagina=ejercicio4.php">ejercicio4</a>
<a href="index.php?pagina=ejercicio8.php">ejercicio8</a>
<a href="index.php?pagina=manejosdeformulario.php">Manejos de formularios</a>
<a href="index.php?pagina=ejercicio1.php">ejer</a>
    

<?php
if(isset($_GET["pagina"]))
{
    include($_GET["pagina"]);
}




?>

</body>
</html>

