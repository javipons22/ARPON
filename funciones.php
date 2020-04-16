<?php 

function crear_html_inicio($id,$item){

	$html =
	"<li>"
	."<a href='detalles.php?proyecto=" . $id . "'>"
	."<div class='conten'>"
	."<img src='" . $item["imagen"] . "'/>"
	."</div>"
	."<span class='text-content'><span>" . $item["title"] . "</span></span>"
	."</li>";

	return $html;
}

function crear_html_detalles($id,$item){
	<li><i class="fa fa-calendar" aria-hidden="true"></i>Fecha de construcción:<strong>.$item["fecha"]</strong></li>
	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Ubicación:<strong>.$item["fecha"]</strong></li>
	<li><i class="fa fa-arrows-alt" aria-hidden="true"></i>Superficie:<strong>.$item["fecha"]</strong></li>
	<li><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Luz Libre:<strong>.$item["fecha"]</strong></li>
	<li><i class="fa fa-info" aria-hidden="true"></i>Información Adicional:<strong>.$item["fecha"]</strong></li>


	$html .= "<li>"; 
	if (array_key_exists("ubicacion", $item)){
	$html = $html . '<i class="fa fa-map-marker" aria-hidden="true"></i>' . 'Ubicación: '. "<strong>" .$item["ubicacion"] . "</strong>"; };
	$html .= "</li>";

	$html .= "<li>"; 
	if (array_key_exists("superficie", $item)){
	$html = $html . '<i class="fa fa-arrows-alt" aria-hidden="true"></i>' . 'Superficie: '. "<strong>" .$item["superficie"] . "m" . "<sup>2</sup>" . "</strong>"; };
	$html .= "</li>";

	$html .= "<li>"; 
	if (array_key_exists("luz", $item)){
	$html = $html . '<i class="fa fa-lightbulb-o" aria-hidden="true"></i>' . 'Luz libre: '. "<strong>" .$item["luz"] . "</strong>"; };
	$html .= "</li>";

	$html .= "<li>"; 
	if (array_key_exists("info", $item)){
	$html = $html . '<i class="fa fa-info" aria-hidden="true"></i>' . 'Información Adicional: '. "<strong>" .$item["info"] . "</strong>"; };
	$html .= "</li>";

	return $html;
}

?>

<!--ubicacion
luz libre
superficie
descripcion-->
