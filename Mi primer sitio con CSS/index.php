<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Aqui toda nuestra descripcion">   <!--Para que el buscador encuentre la pagina-->
		<meta name="keywords" content="Aqui, Palabras, Clave">              <!--Para que el buscaor encuentre a pagina por medio de palabras clave-->
		<link rel="stylesheet" type="text/css" href="css/estilos.css">      <!--Enlazar hoja de estilos -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/slides.min.jquery.js"></script>
		<script>
    		$(function(){
      			$("#slideshow").slides()
    		});
  		</script>
		<title>Titulo de nuestra web</title>
	</head>

	<body>

		<header>
			<div id="subheader">
				<div id="logotipo"><p><a href="">Lua Teatro</a></p></div>
				<nav>
					<ul>
						<li><a href="">Inicio</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="wrap">
			
			<section id="main">
				
				<section id="slideshow">
					<div class="slides_container">
						<div><a href="#"><img src="imagenes/slideshow/zanquera.jpg"></a></div>
					</div>
				</section>

				<section id="bienvenidos">
					<article>
						<hgruop><h2>Bienvenido a nuestro sitio web</h2></hgruop>
						<p>
							<ul>
								<li>+ Phasellus volutpat arcu eu massa fermentum accumsan ut at velit.</li>
								<li>+ Cras at lacus non ligula blandit semper eu sed sem.</li>
								<li>+ Proin tincidunt diam eget mauris vestibulum suscipit.</li>
								<li>+ Duis fermentum diam quis odio luctus suscipit.</li>
							</ul>
						</p>
					</article>
				</section>

				<section id="contenido">
					<article>
						<hgruop><h2 class="titulo">Titulo del articulo</h2></hgruop>
						<p class="fecha">1 de Junlio del 2015</p>
						<img class="thumb" src="imagenes/thumb1.jpg" alt="Clowns">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. </br></br>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>

					<article>
						<hgruop><h2 class="titulo">Titulo del articulo</h2></hgruop>
						<p class="fecha">1 de Junlio del 2015</p>
						<img class="thumb" src="imagenes/thumb2.jpg" alt="Clowns">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. </br></br>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
				</section>

				<aside>
					<section class="widget">
						<h3>Articulos Recientes</h3>
						<ul>
							<li><a href="">Phasellus volutpat arcu eu massa </a></li>
							<li><a href="">Cras at lacus non ligula blandit </a></li>
							<li><a href="">Proin tincidunt diam eget mauris </a></li>
							<li><a href="">Duis fermentum diam quis odio luc</a></li>
						</ul>
					</section>

					<section class="widget">
						<h3>Articulos Recientes</h3>
						<img src="imagenes/publicidad.jpg">
					</section>
				</aside>

			</section>

			<footer>
				<section id="acerca-de">
					<article>
						<hgruop><h3>Acerca de ...</h3></hgruop>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
				</section>

				<section id="redes-s">
					<div class="email"><a href="#"></a></div>
					<div class="twitter"><a href="#"></a></div>
					<div class="youtube"><a href="#"></a></div>
					<div class="facebook"><a href="#"></a></div>
				</section>
			</footer>

			<div id="copyright"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>

		</section>

	</body>
</html>