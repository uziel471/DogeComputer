

<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="container">
			
				
			
			<div class="header-left">		
					<ul>
				       
						<?php
						if(isset( $_SESSION['correo'])):
						?>
						
						<li> <?php echo $_SESSION['correo']  ?> </li>
						<li><a  href='cs.php'>Cerrar Sesion</a></li>
						
						<?php
                        else:						
						
						?>
					
						<li><a href='login.php'>Iniciar sesion</a></li>
						<li><a  href='register.php'>Registrarse</a></li>
						<li><a href='login.php'></a></li>
						
						<?php
                        endif;						
						
						?>

					</ul>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		
		
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Inicio</a></li>	
				      <li><a class="color1" href="products.php">Tienda</a></li>
				      	
				 
				<li><a class="color4" href="blog.php">Opiniones</a></li>				
				<li><a class="color6" href="contact.php">Contactanos</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
					

</div>
</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Carrito</h1>
			<a href="products.php" class="btn btn-default">Productos</a>
			<br><br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from comproductos");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table table-bordered">
<thead>
	<th>Nombre</th>
	<th>Cantidad</th>
	<th>Precio</th>
	<th>total</th>
	<th>Imagen</th>
	<th>Proveedor</th>
	<th>Marca</th>
	<th></th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
$total =0;
foreach($_SESSION["cart"] as $c):
$products = $con->query("select * from comproductos where id=$c[product_id]");
$r = mysqli_fetch_array($products);
	?>
<tr>
<?php
	    $totalprod = $r['ProdPrecio'] * $c['q'];
		$total = $total+ $totalprod;
		
	?>
	<td><?php echo $r['ProdNombre'];?></td>
	<th><?php echo $c['q'];?></th>
	<td><?php echo "$ $r[ProdPrecio]";?> </td>
	<td> <?php echo $totalprod ?> </td>	
	<td> <?php  echo '<img src ="img/'.$r['ProdImagen'].'" width ="50" height = "50">'; ?></td>
	<td><?php echo $r['ProdProveedor'];?></td>
	<td><?php echo $r['ProdModelo'];?></td>
	
	<td style="width:260px;">
	
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r['id']){ $found=true; break; }}
	?>
		<a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger">Eliminar</a>
	</td>
</tr>
<?php endforeach; 

$_SESSION['total']=$total;?>
<tr>
<td></td><td></td><td>Total</td><td><?php  echo "$ $_SESSION[total]"; ?></td>
</tr>
</table>



<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>
<br><br><hr>
<?php 
if(empty($_SESSION['correo'])):
echo 'tienes que iniciar sesion';
else:
?>
<form class="form-horizontal" method="post" action="Venta.php">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>
<?php endif;?>
		</div>
	</div>
</div>
</body>
</html>