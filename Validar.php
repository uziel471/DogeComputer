
<?php
session_start();
 
$correo = $_POST['correo'];
$contra = $_POST['contra'];

   INCLUDE ("config1.php");
   $consulta =mysqli_query($con, "select*from ComUsuarios where UsCorreo = '$correo' and UsContrasena = '$contra';");
   
   $ejecucion =mysqli_fetch_assoc ($consulta);
   
   $filas = count($ejecucion);
   if($filas > 0 ){
	   $_SESSION['correo'] = $ejecucion['UsCorreo'];
	   //$r = mysqli_fetch_array($filas);
	     
	   header('location:index.php'); 
	  echo true;
  
   }
   else{
	   echo '<script> 
				alert("Correo o contraseña incorecta");
				window.history.go(-1);
				</script>
				';
   }
   
   
	
?>