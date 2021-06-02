<?php
session_start();
require ('config1.php');
?>

<html>

<head>
<title>Iniciar Sesion</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- start menu -->
	<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/memenu.js"></script>
	<script>$(document).ready(function(){$(".memenu").memenu();});</script>
	<script src="js/simpleCart.min.js"> </script>
</head>

<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<input type "text" name="busqueda" id="busqueda" placeholder="Buscar"></input>
					<input type="submit" value="Buscar" class="btn_search"></input>
					</form>
			
			</div>
			<div class="header-left">		
					<ul>
								<ul>
				       
						
							<?php
						if(isset( $_SESSION['correo'])):
						?>
						
						<li> <?php echo $_SESSION['correo']  ?> </li>
						<li></li>
						<li></li>
						<li></li>
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
					

					</ul>
					<div class="cart box_1">
						<h3> <a href="cart.php">
							<img src="images/cart.png" alt=""/></h3>
						</a>
						
					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.html">Inicio</a></li>	
				      <li><a class="color1" href="products.php">Tienda</a></li>
				      	
				    <li class="grid"><a class="color2" href="#">Categorias</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
								<h4>CATEGORIA</h4>
									<ul>
										<li><a href="Computers.php">Computadoras</a></li>
										<li><a href="Headsets.php">Auriculares</a></li>
										<li><a href="Motherboards.php">Tarjetas madres</a></li>
										<li><a href="GraphicsCard.php">Tarjetas de video</a></li>
										<li><a href="HardDriver.php">Discos duros</a></li>
										<li><a href="Processors.php">Procesadores</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>PATROCINADORES</h4>
									<ul>
										<li><a href="https://www.amd.com/en">AMD</a></li>
										<li><a href="https://www.asus.com/mx/">ASUS</a></li>
										<li><a href="https://www.nvidia.com/es-la/">Nvidia</a></li>
										<li><a href="https://www.msi.com/index.php">MSI</a></li>
										<li><a href="http://www.alienware.com/">Alienware</a></li>
										<li><a href="https://www.razer.com/">Razer</a></li>
										<li><a href="https://www.corsair.com/">Corsair</a></li>
										<li><a href="https://www.hyperxgaming.com/latam">Hyper X</a></li>
										<li><a href="https://www.coolermaster.com/">Cooler Master</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="blog.php">Opiniones</a></li>				
				<li><a class="color6" href="contact.php">Contactanos</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>



	
<!--content-->
<div class="container">
		<div class="account">
		<h1>Iniciar sesion</h1>
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form action="Validar.php" method="post">
				
			<div> 	
				<span>Correo</span>
				<input type="text" name="correo"> 
			</div>
			<div> 
				<span >Contraseña</span>
				<input type="password" name="contra">
			</div>				
				<input type="submit" value="Iniciar" name="inicio"> 
			</form>
								 
		</div>
		<div class="col-md-4 left-account ">
			<a href="single.html"><img class="img-responsive " src="images/s1.jpg" alt=""></a>
			<div class="five">
			<h2>25% </h2><span>discount</span>
			</div>
			<a href="register.html" class="create">Crear una cuenta</a>
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>

<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MAS INFORMACION</h4>
				<ul class="nav-bottom">
						<li><a href="#">Como ordenar</a></li>
						<li><a href="#">Preguntas más frecuentes</a></li>
						<li><a href="contact.html">Locacizacion</a></li>
						<li><a href="#">Envio</a></li>
						<li><a href="#">Membresia</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>REDES SOCIALES</h4>	
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Ponte al dia</h4>
					<p>Registrate para obtener todas las noticias de actualización y promoción</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >2019 © Doge Computer </a> </p>
		</div>
		</div>
</body>
</html>
			