<?php 
	INCLUDE ("config1.php");
	
	$Nombre = $_POST['nombre'];
	$Apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
	$contra1 = $_POST['contra1'];
	$contra2 = $_POST['contra2'];
	
			
			
	$Insertar = "insert into ComUsuarios (UsNombre,UsApellidos,UsCorreo,UsContrasena,UsContrasena2) values ('$Nombre','$Apellidos','$correo','$contra1','$contra2');";
	$verifacarusu = mysqli_query ($con, "select * from ComUsuarios where UsCorreo = '$correo'");
	if(mysqli_num_rows($verifacarusu) > 0 ){
		echo '<script> 
				alert("Ya hay un un correo registrado");
				window.history.go(-1);
				</script>
				';
		exit;
	}
	if($verifacarusu){
		echo '<script> 
				alert("Se ha registrado correctamente"); 
				</script>
				';
				$ejecutar = mysqli_query($con, $Insertar);
			header("location:login.php");	
	}
	
	

?>

