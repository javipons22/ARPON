<?php 
$Titulo="PROYECTOS";
include("inc/data.php");
include("inc/funciones.php");



if (isset($_GET["proyecto"])){
	$id = $_GET["proyecto"];
	if (isset($catalog[$id])){
		$item = $catalog[$id];
	}
}

if (!isset($item)){
	header("location:proyectos.php");
	exit;
}

$Titulo = $item["title"];
include("inc/header.php");

?>

<div class="wrapper">

<h1> <?php echo $Titulo; ?> </h1>

<div class="detalles">
	<ul class="lista-detalles">
	<?php 

	echo crear_html_detalles($id,$item);

	?>
	</ul>
</div>
</div>
