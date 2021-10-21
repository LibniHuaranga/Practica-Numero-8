<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        h2{
            color:brown;
        }
    </style>
    <title> </title>
</head>
<body class="estilo2"> 
    <style>
        .estilotitulo{
            font-size:60px;
            color:brown;
        }
        .estilo2 {
            font-size:20px;
            color:black;
            background-image: url(cute-clouds-pattern-on-blue-background-free-vector.jpg);
        }
    </style>
    <label class="estilotitulo">DATOS DE LA COMPRA</label>
    <form>
    <table>
<?php
echo "Boleta";
echo "<br>";
$nombre = $_POST['nombre'];
$destino = $_POST['destino'];
$fechadenacimiento = $_POST['fechanacimento'];
$today = date("Y-m-d");
$diff = date_diff(date_create($_REQUEST['fechanacimento']), date_create($today));
echo "<h2> "."Nombre:"."</h2>";
echo  $nombre;
echo "<h2> "."Destino:"."</h2>";
echo  $destino;
echo "<h2> "."Fecha de Nacimiento:"."</h2>";
echo  $fechadenacimiento;
if($destino=="Estados Unidos"){
    $precio=600;
}
if($destino=="Francia"){
    $precio=400;
}
if($destino=="Mexico"){
    $precio=300;
}
if($destino=="Indonesia"){
    $precio=400;
}
if ($diff->format('%y')<3 ){
    echo "<h2> "."Precio:"."</h2>";
    echo  $precio*0;
    echo "<br>";
}
if ($diff->format('%y')>2 && $diff->format('%y')<17 ){
    echo "<h2> "."Precio:"."</h2>";
    echo  $precio*75/100;
    echo "<br>";
}
if ($diff->format('%y')>17 ){
    echo "<h2> "."Precio:"."</h2>";
    echo  $precio;
    echo "<br>";
}
            ?>
        </table>
    </form>
</body>
</html>



