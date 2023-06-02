<?php 

include 'Personas.php';
include 'Conexion.php';


if(isset($_POST["registrar"])){
    $nombre = $_POST["txtnombre"];
    $apellido = $_POST["txtapellido"];
    $nombreacudiente = $_POST["txtedad"];
	$apellidoacudiente = $_POST["txtlastnameAcu"];
	$parentesco = $_POST["txtparentesco"];
    $numero = $_POST["txttelefono"];

    $persona = new Usuarios($nombre, $apellido, $nombreacudiente,$apellidoacudiente,$parentesco, $numero);

    $conex = new Conexion();
    $conex->InsertarPersona($persona);
}
?>
		 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Style.css">
	<title>Formulario</title>
</head>
<body>
<div class="container">
			<form  method="post">
			<h1 class="title">Bienvenidos</h1>
			<div class="for">
					<label  for="name"  id="name" >Nombre:</label>
				<Input type=text name="txtnombre" placeholder="Nombre"required></Input>
			</div>

			<div class="for">
					
				<label  for="lastname"  id="lastname" >Apellido:</label>
				<Input type=text name="txtapellido" placeholder="Apellido" required></Input>
			</div>

			<div class="for">
			<label   for="Acudiente"  id="acudiente" >Nombre Acudiente: </label>
				<Input type=text  name="txtedad" placeholder="NombreAc"required></Input>
			</div>

			<div class="for">
			<label  for="lastnameAcu"  id="lastnameAcu" >Apellido Acudiente:</label>
				<Input type=text name="txtlastnameAcu" placeholder="Apellido" required></Input>
			</div>
			
			<div class="for">
			<label  for="parentesco"  id="parentesco">Parentesco:</label> 
				<input type="text"  name="txtparentesco" placeholder=" Parentesco" required ></input>
			</div>

			<div class="for">
			<label  for="tel"  id="tel">Telefono:</label> 
				<input type="cel" name="txttelefono" placeholder=" Telefono" required  maxlength="10"></input>
			</div>

			
	 	  	<input class="boton" type="submit" name="registrar" value="Registrarme">
			</form>
			
		</div>


	
</body>
</html>
