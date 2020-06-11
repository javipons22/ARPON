<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Arpon Estructuras S.R.L <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A través de éste medio deseamos proveerles la información que usted necesita para que conozca nuestros servicios, modalidades de trabajos y los proyectos más importantes." name="Description">
<?php wp_head(); ?>
</head>

 
<body <?php body_class();?>>

<header>
<div class="header">
  <div class="container">
    <div class="row justify-content-between">  
      <div class="col-xl-4">
        <div class="row justify-content-between">
          <div class="col-xs-9 logo">
            <!-- INICIO LOGO -->
            <?php include('logo.php');
            echo $logo;

            ?>
            

            <!-- FIN LOGO -->
          </div>
          <div class="col-xs-3 menu-btn">
            <button class="btn-menu" type="submit"><i class="fa fa-bars" aria-hidden="true"></i>MENU</button>
          </div>
        </div>
      </div>

      <div class="col-xl-8 menu-contacto">
        <div class="contacto">
            <div class="cont">
            <i class="telefono fa fa-phone fa-3x "></i>
            <div class="uno">
                <p>(03543) 442745</p>
                <p>ponsc@arponestructuras.com.ar</p>
            </div>
          </div>

          <div class="cont">
            <i class="celular fa fa-mobile fa-3x "></i>
            <div class="uno">
                <p>(0351) 155 553003</p>
                <p>Conrado Pons</p>
            </div>
          </div>

          <div class="cont">
            <i class="casa fa fa-home fa-3x "></i>
            <div class="uno">
                <p>Andres Piñero 6730</p>
                <p>Córdoba, 5147</p>
            </div>
          </div>
        </div>
      </div>
          
    </div>
    
  </div>
</div>
</header>

  <nav class="menu-nav">
    <ul>
      <a href="<?php get_template_directory_uri(); ?>/"><li>INICIO</li></a>
      <a href="<?php get_template_directory_uri(); ?>/proyectos"><li>PROYECTOS</li></a>
      <a href="<?php get_template_directory_uri(); ?>/sobre-nosotros"><li>SOBRE NOSOTROS</li></a>
      <a href="<?php get_template_directory_uri(); ?>/contacto"><li>CONTACTO</li></a>
    </ul>

  </nav> 
