<?php 
  $args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'order' => 'ASC', );
  $the_query = new WP_Query( $args ); 
  ?>
    <?php if ( $the_query->have_posts() ) : ?>
<!-- <pre><?php // var_export($the_query);?></pre> -->
<div id="artigos" class="container">
    <div class=titulo>
                <h2 class="text-center">Artigos</h2>
            </div>
          <div class="myrow">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="mycol">
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive', 'alt' => 'Responsive image') ); ?>
              <div class="box">
                <h3 class=""><?php the_title(); ?></h3>
              </div>
              <div class="content">
                <p class="data"><?php the_time( 'd' ); ?> de <?php the_time( 'F' ); ?> de <?php the_time( 'Y' ); ?> às <?php the_time( 'G:i' ); ?></p>
              <p class=""><?php the_excerpt(); ?></p>
              
              </div>
              
            </div><?php endif; ?>
            <?php wp_reset_postdata(); ?>
  <?php endwhile ?>
  

            <?php endif; ?>
        </div>
        <p class="text-center">
          <a id="sabermais" class="btn btn-warning btn-lg" href="/artigos" role="button">Ver mais artigos</a>
        </p>
    </div>