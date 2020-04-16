
<?php get_header(); ?>
<?php

	$args3 = array(
	'post_type' => 'slideshow_inicio', //poner el tipo de post
	);
	$query3 = new WP_Query($args3);

	$imagen_slideshow = get_field('img');

?>




<div id="slideshow">
<?php if($query3->have_posts() ) : while($query3 ->have_posts()) : $query3->the_post(); ?>
	<?php $imagen_slideshow = get_field('img'); ?>
   <div>
     <img src="<?php echo $imagen_slideshow['url']; ?>">
   </div>
   <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<div class="abajo-de-banner">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-8">
				<p>¿Estás buscando una Empresa Constructora para tu próximo proyecto?</p>
			</div>
			<div class="col-md-4 boton-abajo-banner">
				<a href="<?php get_template_directory_uri(); ?>/arpon/contacto"><a href="<?php get_template_directory_uri(); ?>/arpon/contacto"><span>CONTACTANOS</span></a>
			</div>
		</div>
	</div>
</div>
<div class="proyectos">

<?php

	$args = array(
	'post_type' => 'proyectos',
	'orderby'	=> 'rand',
	'posts_per_page' => 4, //poner el tipo de post
	);
	$query = new WP_Query($args);

?>

	<div class="barra">
		<div class="titulo">
			<p>PROYECTOS</p>
		</div>
	</div>
	<div class="container proyectos-wrapper">

		<?php if($query->have_posts() ) : while($query ->have_posts()) : $query->the_post(); ?>
			<a href="<?php the_permalink(''); ?>">
			<div class="col-lg-3 contender conten">
				<?php the_post_thumbnail(''); ?>
			<div class="overlay">
				
			</div>
			<div class="textoo"><?php echo strtoupper(get_the_title()); ?></div>
			</div>
			</a>
		



		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
		
</div>

<div class="quienes-somos">
	<div class="container">
		<div class="row ">
		<div class="col-12 titulo-quienes-somos">
			<h1>Quiénes Somos?</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p><strong class="quienes-somos-bold">DESDE TEMPRANO TRABAJANDO PARA EL PAIS!</strong></p>
				<p><strong>Arpon Estructuras S.R.L</strong> es una empresa dedicada al proyecto y ejecución de estructuras metálicas. <strong>Arpon Estructuras S.R.L</strong> ha creado un nuevo concepto espacial que se adapta a las exigencias en tiempo y forma del mercado actual a través del sistema llave en mano.</p>
				<p class="italic">Avalada por la trayectoria del ingeniero <strong>Conrado Pons</strong> con más de 30 años de experiencia y especialización en el proyecto y construcción de Plantas Industriales, Gimnasios , Supermercados y toda obra que requiera de grandes luces.</p>
				<p>Desde Córdoba , Argentina, donde se encuentra la Planta Industrial , se traslada a todo el país , para cubrir múltiples necesidades.</p>
				<div class="conten2"><img src="http://www.arponestructuras.com.ar/wp-content/uploads/2017/07/tapa-1.png"></div>
			</div>
			<div class="col-md-6 feat">
				<h5><i class="fa fa-check-circle" aria-hidden="true"></i> MÁS DE 30 AÑOS DE EXPERIENCIA</h5>
				<p>Con más de 25 años de profesión y una empresa que continuó los pasos de su padre, el arquitecto Osvaldo Pons, Conrado Pons se dedica a realizar obras a grandes luces desde hace 30 años y hoy ofrece un servicio de proyección y construcción de obras a grandes luces.</p>

				<h5><i class="fa fa-check-circle" aria-hidden="true"></i> TENEMOS PASIÓN POR LO QUE HACEMOS</h5>
				<p>Somos una empresa con gran reputación en el país. Nos aseguramos que todos los proyectos se realicen con el más alto profesionalismo utilizando materiales de calidad y ofreciendo a nuestros clientes el soporte y accesibilidad necesarios.</p>

				<h5><i class="fa fa-check-circle" aria-hidden="true"></i> SIEMPRE ESTAMOS MEJORANDO</h5> 
				<p>Nos comprometemos a completar todos los proyectos en el tiempo acordado con nuestros clientes. Disponemos de gran tecnología para asegurarnos que todos los proyectos se realicen rápidamente pero también dando gran atención a los detalles asegurando así que todo se realice correctamente.</p>
 			</div>
		</div>
	</div>
</div>

<div class="divisor"></div>

<?php

	$args2 = array(
	'post_type' => 'clientes', //poner el tipo de post
	);
	$query2 = new WP_Query($args2);

?>
<div class="clientes">
	<div class="container">
		<h1>Clientes</h1>
		<div class="row logos">
<?php if($query2->have_posts() ) : while($query2 ->have_posts()) : $query2->the_post(); ?>
	<?php
$cliente = get_field('imagen_cliente');
?>

			<div class="col-lg-2 cliente-imagen"><img src="<?php echo $cliente['url']; ?>" alt="<?php echo $cliente['title']; ?>"></div>
		
<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
