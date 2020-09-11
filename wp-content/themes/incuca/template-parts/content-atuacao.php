<?php 
  $args = array( 'post_type' => 'atuacao', 'posts_per_page' => 4, 'order' => 'ASC', );
  $the_query = new WP_Query( $args ); 
  ?>
    <?php if ( $the_query->have_posts() ) : ?>
  
<div id="atuacao" class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-16 col-sm-16">
            <div class=titulo>
                <h2 class="text-center">Áreas de Atuação</h2>
            </div>
          <div class="row">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-xs-8 col-lg-4">
              
        <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive', 'alt' => 'Responsive image') ); ?>
              
            <h3 class="text-center"><?php the_title(); ?></h3>
              <p class="text-center"><?php the_content(); ?> </p>
           </a>
        <?php endif; ?>
      </div>
    <?php wp_reset_postdata(); ?>
  <?php endwhile ?>
  
<?php endif; ?>
        </div>
        <p class="text-center">
          <a id="sabermais" class="btn btn-warning btn-lg" href="/areas-atuacao" role="button">Saber Mais</a>
        </p>
    </div></div></div>