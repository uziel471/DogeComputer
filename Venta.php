<?php 
session_start();
include "config1.php";

//Consulta para obtener el ID
$i = mysqli_query($con,"select Usid from ComUsuarios where UsCorreo='$_SESSION[correo]'");
$r=mysqli_fetch_assoc($i);
$id = $r['Usid'];
//


$t="insert into ComVentas (VenUsuario,VenFecha,VenTotal) values($id,now(),$_SESSION[total])";

mysqli_query($con,$t);

$ven=mysqli_query($con,"select max(VenId) as ultventa from ComVentas");
$w=mysqli_fetch_assoc($ven);
$x=$w['ultventa'];
	foreach($_SESSION["cart"] as $c){
		$products = mysqli_query($con,"select * from ComProductos where id=$c[product_id]");
     $r = mysqli_fetch_assoc($products);
	
	$p="insert into ComDetVent (VenID,DetVenIdProd,DetVentCat,DetVentPrecio) 
	values (".$x.",".$r['id'].",".$c['q'].",".$r['ProdPrecio'].")";
mysqli_query($con,$p);
	}
	unset($_SESSION['cart']);
 	header('location:index.php');



	?>