<?php
/*
* Este archivo muestra los productos en una tabla.
*/
session_start();
include "conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Productos</h1>
			<a href="../cart.php" class="btn btn-warning">Ver Carrito</a>
			<br><br>
			<div class="form-1-2">
			<?php 
			$busqueda = strtolower( $_REQUEST['busqueda']);
			if(empty($busqueda)){
				header("location: ../products.php");
			}
			
			?>
				<form action="Buscar.php" method="get" class="form_search">
					<label for "caja_busqueda">Buscar:</label>
					<input type "text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>"></input>
					<input type="submit" value="Buscar" class="btn_search" ></input>
					</form>
					
			</div>
			
		
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from ComProductos where ProdNombre like '%".$busqueda."%';");

?>
<table class="table table-bordered">
<thead>
	<th>Producto</th>
	<th>Precio</th>
	<th>Imagen</th>
	<th>Status</th>
	<th>Proveedor</th>
	<th>Marca</th>
	<th></th>
</thead>
<tr>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/


while($r=mysqli_fetch_assoc($products)):



	 echo "<td> {$r['ProdNombre']}</td>";
	 echo "<td> {$r['ProdPrecio']}</td>"; 
	 echo  '<td> <img src ="../img/'.$r['ProdImagen'].'" width ="50" height = "50"></td>';
	 echo "<td> {$r['ProdDescontinuado']}</td>";
	 echo "<td> {$r['ProdProveedor']}</td>";
	 echo "<td> {$r['ProdModelo']}</td>";
	 ?>
	<td style="width:260px;">
	
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
		<a href="../cart.php" class="btn btn-info">Agregado</a>
	<?php else:?>
	<form class="form-inline" method="post" action="../php/addtocart.php">
	<input type="hidden" name="product_id" value="<?php echo $r["id"]; ?>">
	  <div class="form-group">
	    <input type="number" name="q" value="1" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
	  </div>
	  <button type="submit" class="btn btn-primary">Agregar al carrito</button>
	</form>	
	<?php endif; ?>
	</td>
</tr>
<?php endwhile; ?>
</table>
<br><br><hr>
<p>Powered by <a href="http://evilnapsis.com/" target="_blank">Evilnapsis</a></p>

		</div>
	</div>
</div>
</body>
</html>