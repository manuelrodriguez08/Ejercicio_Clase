
<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$salario = $_POST['salario'];
$grado = $_POST['selectGrado'];
$materia = $_POST['letr'];





$aux=0;
$sal=0;
$sal2=0;

if($grado == "Primero" ){
 $sal = $salario + 35000;
}
if($grado == "Segundo"){

	$sal = $salario + 70000;
}



if($materia == "Danzas"){
$a1 = 0.20 * $sal;
    $aux =  $a1 + $sal;



}
if($materia == "Teatro"){
    $a2 = 0.25 * $sal;
	$aux = $sal + $a2;
}

if($materia == "Musica"){
    $a3 = 0.30 * $sal;
 $aux = $sal + $a3;
}
if($materia == "Dibujo"){
    $a4 = $sal * 0.35;
 $aux = $sal + $a4;
}
echo "El nombre del estudiante es: ".$nombre." ".$apellido." y el total de la matricula es: $".$aux;

echo "</br>";

echo "<form action='index.php'>
       <input type='submit' value='Regresar'>
        </form>";

?>