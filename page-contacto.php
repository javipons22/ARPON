<?php
/* 
	Template Name: CONTACTO
*/

	if ( isset($_POST['submit'])) {

   $mailResult = false;
$mailResult = wp_mail( 'javipons@mail.com', 'test if mail works', 'hurray' );
echo $mailResult;
}
?>
<?php get_header(); ?>

<div class="div-content"></div>

<div class="container">
	
<div class="row">
<div class="col-md-4 presupuestos">
	<h1>Presupuestos</h1>
	<p>Para presupuestos comunicarse a: </p>
	</br>
	<div>
	<i class="fa  fa-home  fa-2x"></i><span>Arpon Estructuras S.R.L</span>
	<p>Andres Piñero 6730</br>
	Cordoba, Arguello. C.P 5147</p>
	</div>
	</br>
	<div>
	<i class="fa  fa-mobile  fa-2x"></i><span>(0351) 155 553003</span>
	</div>
	<div>
	<i class="fa  fa-phone  fa-2x"></i><span>(03543) 442745</span>
	</div>
	<div>
	<i class="fa  fa-fax  fa-2x"></i><span>(03543) 442745</span>
	</div>
	<div>
	<i class="fa  fa-envelope  fa-2x"></i><span>ponsc@arponestructuras.com.ar</span>
	</div>
	</br>
	<div>
	<i class="fa  fa-clock-o  fa-2x"></i><span>Lu - Vie 9.00 - 18.00</span>
	</div>


</div>
</div>
</div>












<div class="div-content"></div>





<?php get_footer(); ?>