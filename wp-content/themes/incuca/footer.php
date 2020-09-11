</div><!-- /.container -->


<!-- FOOTER -->

<footer >
<?php get_template_part( 'template-parts/content' , 'footer' ); ?>
 
<nav class="navbar navbar-inverse navbar-bottom">
  <div class="container">
    
    <?php
    wp_nav_menu( array(
      'container'       => 'div',
      'container_id'    => 'navbar-bottom',
      'container_class' => 'navbar-collapse ',
      'menu_id'         => 'menu-footer',
      'menu_class'      => 'nav navbar-nav','theme_location'    => "footer_menu" // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    ) ); 
    
    ?>
  </div>
</nav>

</footer>
<?php wp_footer(); ?>
</main>
</body>
</html>