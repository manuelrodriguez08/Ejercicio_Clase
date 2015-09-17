
<?php 

if(isset($_POST['grado'])){
	$miGrado = $_POST['grado'];
	

	$arrLetraP  = array('A','B','C' );
	$arrletraS = array('A','C');
	
	
	$arrRecorrer;
	

	$miSelect = "<strong><p>Seleccione:</p> </strong>";
	
	
	if($miGrado == 'Primero'){
		$arrRecorrer = $arrLetraP;
	
    
}

	else if ($miGrado == 'Segundo'){
		$arrRecorrer = $arrletraS;
	}

	$miSelect .= "<select id='al' name='al'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$miSelect .= "</select>";


	
	
	echo $miSelect;

}


if (isset( $_POST['letra'])) {
	
	$let = $_POST['letra'];


	$arr1 = array('Danzas','Teatro','Dibujo');
	$arr2 = array('Danzas','Musica');
	$arr3 = array('Teatro','Danzas','Musica');
	$arr4 = array('Teatro','Dibujo');
	$arr5 = array('Teatro','Musica');

$arrletra;
$l = "<strong><p> Seleccione:</p> </strong>";

	if($let == 'A'){ 
 $arrletra = $arr1;
   }
   if($let == 'B'){ 
 $arrletra = $arr2;
   }
   if($let == 'C'){ 
 $arrletra = $arr3;
   }


$l .= "<select id='otro' name='letr'>";
	foreach ($arrletra as $n) {
		$l .= "<option value=".$n.">".$n."</option>";
	}
	$l .= "</select>";	

	echo $l;
	 }
/*
   if(isset($_POST['envio'])){      
         
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
         
   } 
        */ 
         
 ?>