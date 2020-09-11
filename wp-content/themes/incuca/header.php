<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Os nossos conhecimentos são a reunião do raciocínio e experiência de numerosas mentes.">
    <meta name="author" content="Law Firm">
    <meta name="generator" content="">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> data-spy="scroll" data-target="#navbar">
    <header>
    <div class="barra-topo"><?php get_template_part( 'template-parts/header-bar' ); ?></div>
    
    <nav class="navbar navbar-top ">
      <div class="container">
        <div class="navbar-brand col-xs-16 col-sm-3 pull-left">
          <a href="<?php echo esc_url( home_url( '/' )); ?>">
            <img class="logo d-none d-sm-none d-md-none d-lg-block d-xl-block" 
            src="<?php echo get_template_directory_uri(). "/img/logo_main.png"; ?>" 
            alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
          </a>
        </div>
      
        <div class="navbar-header col-xs-16 col-sm-13 ">
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        
        <?php
        wp_nav_menu( array(
          'container'       => 'div',
          'container_id'    => 'navbar',
          'container_class' => 'navbar-collapse pull-right',
          'menu_id'         => 'nav-principal',
          'menu_class'      => 'nav navbar-nav',
          'theme_location'    => "primary_menu" // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
        ) ); 
        ?>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
    
  
  
</header>

<main role="main">

