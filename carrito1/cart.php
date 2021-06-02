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
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Carrito</h1>
			<a href="./products.php" class="btn btn-default">Productos</a>
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
	<th>Cantidad</th>
	<th>Nombre</th>
	<th>Precio</th>
	<th>Imagen</th>
	<th>Status</th>
	<th>Proveedor</th>
	<th>Marca</th>
	<th></th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$products = $con->query("select * from comproductos where id=$c[product_id]");
$r = mysqli_fetch_array($products);
	?>
<tr>
<th><?php echo $c['q'];?></th>
	<td><?php echo $r['ProdNombre'];?></td>
	<td><?php echo $r['ProdPrecio'];?> </td> 
	<td> <?php  echo  '<img src ="img/'.$r['ProdImagen'].'" width ="50" height = "50">'; ?></td>
	<td><?php echo $r['ProdDescontinuado'];?></td>
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
<?php endforeach; ?>
</table>

<form class="form-horizontal" method="post" action="./php/process.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email del cliente</label>
    <div class="col-sm-5">
      <input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email del cliente">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>


<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>
<br><br><hr>
<p>Powered by <a href="http://evilnapsis.com/" target="_blank">Evilnapsis</a></p>

		</div>
	</div>
</div>
</body>
</html>