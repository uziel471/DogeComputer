<?php
$nombre= $_POST['nombre'];
$correo = $_POST['correo'];
$motivo= $_POST['motivo'];
$mensaje= $_POST['mensaje'];
 INCLUDE ("config1.php");
   $sql = "insert into ComContactanos (ContNombre ,ContCorreo ,ContMotivo ,ContMensaje) values('$nombre','$correo','$motivo','$mensaje') ;";
   
   $ejecucion = mysqli_query($con,$sql);
   if($ejecucion){
	   echo '<script> 
				alert("Gracias por su comeranrio le responderemos lo mas pronto posible");
				</script>
				';
				 header("location:index.html"); 
   }
mysqli_close($con);
?>