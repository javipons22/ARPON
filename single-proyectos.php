<?php get_header(); ?>


<div class="wrapper container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1 class="titulodetalle"> <?php the_title() ?> </h1>
<?php 

$datos = array('fecha_de_construcciòn','ubicaciòn','superficie','luz_libre','informaciòn_adicional');

$count=1;
foreach ($datos as $dato){

    ${"info$count"} = get_field($dato);
    $count++;
}


/*
function fecha() {
    $fecha = get_field('fecha_de_construcciòn');
    return $fecha;
}

function ubicacion() {
    $ubicacion = get_field('ubicaciòn');
    return $ubicacion;
}

function sup() {
    $sup = get_field('superficie');
    return $sup;
}

function luz() {
    $luz = get_field('luz_libre');
    return $luz;
}

function info() {
    $info = get_field('informaciòn_adicional');
    return $info;
}

/*
$fecha = the_field('fecha_de_construcciòn');
$ubicacion = the_field('ubicaciòn');
$sup = the_field('superficie');
$luz = the_field('luz_libre');
$info = the_field('informaciòn_adicional');
*/
?>
<div class="container justify-content-between">
<div class="row">
<div class="contenedor-detalles col-xl-6">
	<div class="detalles">
		<ul class="lista-detalles">
			<?php if (!empty($info1)): ?>
			<li><i class='fa fa-calendar' aria-hidden='true'></i>Fecha de construcción: <strong><?php echo $info1;?></strong></li>
			<?php endif; ?>
			<?php if (!empty($info2)): ?>
			<li><i class='fa fa-map-marker' aria-hidden='true'></i>Ubicación: <strong><?php echo $info2; ?></strong></li>
			<?php endif; ?>
			<?php if (!empty($info3)): ?>
			<li><i class='fa fa-arrows-alt' aria-hidden='true'></i>Superficie: <strong><?php echo $info3;?>m<sup>2</sup></strong></li>
			<?php endif; ?>
			<?php if (!empty($info4)): ?>
			<li><i class='fa fa-lightbulb-o' aria-hidden='true'></i>Luz Libre: <strong><?php echo $info4;?>m</strong></li>
			<?php endif; ?>
			<?php if (!empty($info5)): ?>
			<li><i class='fa fa-info' aria-hidden='true'></i>Información Adicional: <strong><?php echo $info5;?></strong></li>
			<?php endif; ?>
		</ul>
	</div>
		
	</div>
<!-- INICIO SLIDESHOW -->	
<div class="slideshow-container col-xl-6">
    <div id="slider">
        <a href="#" class="control_next">>></a>
        <a href="#" class="control_prev"><<</a>
        <ul class="galeria">


        <?php for ($i=1; $i<=10 ;$i++)://cambiar $i<=10 si se necesitan mas imagenes (acordarse de subir el Custom Field a wordpress)
        ${"image$i"} = get_field("img". $i); //obtiene la imagen del 1 al 10  -- ${"image$i"} se denomina explicit statement es una forma de poner un for como nombre de variable

        if( !empty(${"image$i"}) ): ?>
            <li class="conten"><a href="#img<?php echo $i ?>"><img src="<?php echo ${"image$i"}['url']; ?>" alt="<?php echo ${"image$i"}['alt']; ?>"></a></li>
        <?php endif; endfor; ?>
        </ul>  
    </div>
</div>
<!-- FIN SLIDESHOW  -->
</div><!-- FIN CONTENEDOR -->
<!-- INICIO MODAL -->
<?php 
for ($i=1; $i<=10 ;$i++) ://cambiar $i<=10 si se necesitan mas imagenes (acordarse de subir el Custom Field a wordpress)
		if(!empty(${"image$i"})):
			$j = $i;
		endif; endfor; //cuenta la cantidad de imagenes para que la ultima imagen del modal redireccione a la primera



for ($i=1; $i<=$j ;$i++):
if( !empty(${"image$i"}) ): ?>
    <div class="modal" id="img<?php echo $i; ?>">
        <div class="imagen">   
            <a href="#img<?php if($i == $j){echo 1;}else{echo $i + 1;} ; ?>"><img src="<?php echo ${"image$i"}['url']; ?>"></a>
        </div>
        <a class="cerrar" href="">x</a>
    </div>
<?php endif; endfor; ?>
<!-- FIN MODAL -->


<div class="primary row proyectos-flechas">
            <div class="col-sm-6">
                <div class="proyecto-anterior"><?php previous_post_link('%link', "< PROYECTO ANTERIOR"); ?></div>
            </div>
            <div class="col-sm-6">
                <div class="siguiente-proyecto"><?php next_post_link('%link', "SIGUIENTE PROYECTO >");?></div>
            </div>
        </div>
</div>



</div>

<?php endwhile;?>
<?php endif; wp_reset_postdata(); ?>
<div class="separador-footer">
<?php get_footer(); ?>


