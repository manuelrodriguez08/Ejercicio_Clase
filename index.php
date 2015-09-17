<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio De Clase</title>
	<script src="js/jquery-1.11.3.js"></script>
       <link href="Diseño.css" type="text/css" rel="stylesheet">
</head>
<body>
    
<center>  <h1> Ingrese Sus Datos </h1> </center>
<center> <div > 

<form action="Calculos.php" method="POST" name="envio">

    <p>Ingrese Su Nombre</p>   
                <input type="text" name="nombre" id="n" required=""></br>
                <p>Ingrese Su Apellido </p>
                <input type="text" name="apellido" required=""></br>
                 <p>Ingrese El valor Base de Salario</p>
		   
                <input type="text" name="salario" required=""> </br>
                
                 <strong> <p>Seleccione un Grado:</p> </strong>
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
			
                </select>
                <div id="resultado"></div>
                <div id="resulB"></div> </br>
                <center> <input type="submit" > </center>
                
                
                 
	</form>

	<script>
		//Funcion de JQuery
		$("#selectGrado").change(function() {
			var gradoVal = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",
				data: { grado: gradoVal}
			})

			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>

	<script>
		//Funcion de JQuery
		$("#resultado").change(function() {
			var letraV = $("#al").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",
				data: { letra: letraV}
			})

			.done(function( msg ) {
				$("#resulB").html(msg);
			});
		});
	</script> 
   
    </div> </center>
</body>
</html>