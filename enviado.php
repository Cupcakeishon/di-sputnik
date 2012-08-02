<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Diana Hernández: diseño gráfico, web, html, css, planeación, manejo de cuentas." />
<title>Diana Hernández : Diseño Web</title>
<link href="css/estilos.css" media="all" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
<script type="text/javascript" src="js/modernizr.js"></script>
<script src='http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js' type='text/javascript'></script>

<![endif]-->
<script src="js/jquery.js"></script>
<script src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$(".ifPort").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			
		});
	</script>
</head>

<body>	
<header>
	<nav>
		<a href="#aboutMe">Sobre mi</a>
		<a href="#book">Portafolio</a>
		<a href="#contacto">Contacto</a>
	</nav>
</header>	
<section id="aboutMe">
<div class="wrapper">
<hgroup>
<h1>¡Hola!</h1>
<h1>Soy <strong>Diana Hernández</strong></h1>
<h2>Mexicana modelo ‘87, amo leer, escuchar música, vagabundear en la ciudad y en la internet. 
Estudié diseño gráfico y desde ’09 me dedico a la web.</h2>
<h3>
<strong>¿Qué hago?</strong>
Definición gráfica de proyectos web, maquetación avanzada y manejo de proyectos.
</h3>
</hgroup>
<a href="http://dianahernandez.me/descarga/cv_dianahernandez.pdf">Descargar CV</a>
</div>
</section>
<section id="book">
<div class="wrapper">
<h3>Mi trabajo</h3>
	<ul>
		<li>
			<a href="http://google.com" class="ifPort"><img src="images/unicable.jpg" alt="Unicable" title="Unicable" /></a>
		</li>
		<li>
			<a href="http://"><img src="images/universal.jpg" alt="Universal" title="Universal" /></a>
		</li>
		<li>
			<a href="http://"><img src="images/mastretta.jpg" alt="Mastretta cars" title="Mastretta cars" /></a>
		</li>
		<li>
			<a href="http://"><img src="images/cupcakes_by_tom.jpg" alt="Cupcakes by Tom" title="Cupcakes by tom" /></a>
		</li>
		<li>
			<a href="http://"><img src="images/barracriolla.jpg" alt="Barra Criolla" title="Barra Criolla" /></a>
		</li>
		<li>
			<a href="http://"><img src="images/kelloggs.jpg" alt="Kellogg's Pro" title="Kellogg's Pro" /></a>
		</li>
	</ul>
	<h4>Marcas con las que he trabajado</h4>
	<dl class="marcas">
		<dt><img src="imagenes/chevrolet.png" alt="chevrolet" title="chevrolet"></dt>
		<dt><img src="imagenes/coca.png" alt="the coca cola company" title="the coca cola company"></dt>
		<dt><img src="imagenes/universal.png" alt="universal" title="universal"></dt>
		<dt><img src="imagenes/blockbuster.png" alt="blockbuster méxico" title="blockbuster méxico"></dt>
		<dt><img src="imagenes/crisa.png" alt="crisa" title="crisa"></dt>
		<dt><img src="imagenes/grupo alcance.png" alt="grupo alcance" title="grupo alcance"></dt>
		
	</dl>
</div>
</section>
<footer id="contacto">
	<div class="wrapper">
	<h3>Contáctame</h3>
	 <?php 
	$Nombre = $_POST['Nombre'];
	$Mail = $_POST['Mail'];
	
	$header = 'From: ' . $Mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";
	
	$mensaje = "<b>Este mensaje fue enviado por </b>" . $Nombre . " \r\n";
	$mensaje .= "<b>Su e-mail es:</b> " . $Mail . " \r\n";
	$mensaje .= "<b>Comentario: </b>" . $_POST['mensaje'] . " \r\n";
	$mensaje .= "<b>Enviado el </b>" . date('d/m/Y', time());
	
	$para = 'itsme@dianahernandez.me';
	$asunto = 'Contacto';
	
	mail($para, $asunto, utf8_decode($mensaje), $header);
	
	echo '<p>Tu Comentario ha sido enviado Correctamente</p>'
	
	?>
	<div id="social">
		<h4>Social</h4>
		<ul>
			<li>
				<a href="http://twitter.com/di_sputnik" target="_blank" title="mi twitter">twitter</a>
			</li>
			<li>
				<a href="http://www.last.fm/user/Passengera" target="_blank" title="mi lastfm">lastfm</a>
			</li>
			<li>
				<a href="http://mx.linkedin.com/in/dianahernandezfranco" target="_blank" title="mi linkedin">linkedin</a>
			</li>
			<li>
				<a href="http://pinterest.com/di_sputnik/" target="_blank" title="mi pinterest">pinterest</a>
			</li>
			<li>
				<a href="http://www.goodreads.com/di_sputnik" target="_blank" title="mi goodreads">goodreads</a>
			</li>
			<li>
				<a href="mailto:itsme@dianahernandez.me" target="_blank" title="mi mail">Email</a>
			</li>
		</ul>
		<button>twitter</button>
		<button>facebook</button>
		<button>pinterest</button>
	</div>
</div>
</footer>

</body>
</html>
