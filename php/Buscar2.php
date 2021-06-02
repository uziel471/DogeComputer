<!DOCTYPE html>
<html>

<head>
<title>Tienda</title>
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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
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
			
					<form action="php/Buscar.php" method="get" >
					<input type "text" name="busqueda" id="busqueda" placeholder="Buscar"></input>
					<input type="submit" value="Buscar" class="btn_search"></input>
					</form>
			
			<div class="header-left">		
					<ul>
						<li ><a class="lock"  href="login.html">Iniciar sesion</a></li>
						<li><a class="lock" href="register.html">Registrarse</a></li>
						<li>
						</li>
					</ul>
					
					
					
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Vaciar carrito</a></p>

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
				      <li><a class="color1" href="products.html">Tienda</a></li>
				      	
				    <li class="grid"><a class="color2" href="#">Categorias</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
								<h4>CATEGORIA</h4>
									<ul>
										<li><a href="products.html">Computadoras</a></li>
										<li><a href="products.html">Auriculares</a></li>
										<li><a href="products.html">Tarjetas madres</a></li>
										<li><a href="products.html">Tarjetas de video</a></li>
										<li><a href="products.html">Discos duros</a></li>
										<li><a href="products.html">Procesadores</a></li>
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
				<li><a class="color4" href="blog.html">Opiniones</a></li>				
				<li><a class="color6" href="contact.html">Contactanos</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>

	
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="Computers.html">Computadoras </a>
		</li>
		
		
		<li class="item2"><a href="#">Auriculares </a>
		</li>
		
		
		<li class="item3"><a href="#">Tarjetas Madres</a>
		</li>
		
		
		<li class="item4"><a href="#">Tarjetas de Video</a>
		</li>
				
		<li class="item4"><a href="#">Discos Duros</a>
		</li>
		
		<li class="item4"><a href="#">Procesadores</a>
		</li>
	</ul>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Doge Store</h6>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a>PC</a></li>
										<li><a>Gamer</a></li>
										<li><a>Gaming</a></li>
										<li><a>Headset</a></li>
										<li><a>HyperX</a></li>
										<li><a>ASUS</a></li>
										<li><a>i7</a></li>
										<li><a>GTX</a></li>
										<li><a>SSD</a></li>
										<li><a>i9</a></li>
										<li><a>ryzen</a></li>
										<li><a>NVIDIA</a></li>
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Articulos mas vendidos</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a>Tarjeta madre gaming </a></h6>
								
								<span class=" price-in1"> $500.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a>Tarjeta de video gaming </a></h6>
								
								<span class=" price-in1"> $500.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
<div class=" per1">
				<a href="single.html" ><img class="img-responsive" src="images/pro.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				<div class="col-md-9 product1">
				<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
						<?php
						include ('products2.php');
						?>
				
					<div class="clearfix"> </div>
				</div>
				</div>
				</div>
		<div class="clearfix"> </div>
		<nav class="in">
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav>
		</div>
		
		</div>
			
				<!---->

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
			