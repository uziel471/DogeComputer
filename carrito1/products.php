<?php
/*
* Este archivo muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Productos</h1>
			<a href="cart.php" class="btn btn-warning">Ver Carrito</a>
			<br><br>
			<div class="form-1-2">
				<form action="php/Buscar.php" method="get" class="form_search">
					<label for "caja_busqueda">Buscar:</label>
					<input type "text" name="busqueda" id="busqueda" placeholder="Buscar"></input>
					<input type="submit" value="Buscar" class="btn_search"></input>
					</form>
					
			</div>
			<div id="datos">
			
			</div>
			<script src="js/jquery-2.0.3.min.js"></script>
			<script src="js/main.js"></script>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select *
from comproductos pr join ComProveedores p 
on pr.ProdProveedor=p.ProvId ");
?>
<div class="col-md-9 product1">
				<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							
							
							
<table class="table table-bordered">
<tr>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
$salto=0;
while($r=mysqli_fetch_assoc($products)):

if($salto==3){
	echo "<tr>";
	$salto=0;
}else {
	 echo '<td> <img class="../img-responsive" src ="img/'.$r['ProdImagen'].'" width ="250" height = "250"><br>';
	 echo " {$r['ProdNombre']}<br>";
	 echo " {$r['ProdModelo']}<br>";
	 echo " $ {$r['ProdPrecio']}<br> "; 
	
	 
	 $salto++;

	 ?>
	
						</div>
											
					</div>
	
	<?php
	$found = false;

	if(isset($_SESSION["cart"]))
	{ 
		foreach ($_SESSION["cart"] as $c) 
		{ 
			if($c["product_id"] == $r["id"])
			{ 	$found=true; 
				break; 
			}
		}
	}
	?>
	<?php if($found):?>
		<a href="cart.php" class="btn btn-info">Agregado</a>
	<?php else:?>
	<form class="form-inline" method="post" action="./php/addtocart.php">
	<input type="hidden" name="product_id" value="<?php echo $r["id"]; ?>">
	  <div class="form-group">
	    <input type="number" name="q" value="1" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
	  </div>
	  <button type="submit" class="btn btn-primary">Agregar al carrito</button>
	</form>	
	<?php endif; ?>
	</td>
<?php } ?>
<?php endwhile; ?>
</table>
<br><br><hr>
<p>Powered by <a href="http://evilnapsis.com/" target="_blank">Evilnapsis</a></p>

		</div>
	</div>
</div>
</body>
</html>