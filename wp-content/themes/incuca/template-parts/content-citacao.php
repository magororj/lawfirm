<?php 
  $args = array( 'post_type' => 'citacao', 'posts_per_page' => 1);
  $the_query = new WP_Query( $args ); 
  ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php if ( has_post_thumbnail() ) : ?>
            
            <?php endif; ?>
<div id="citacao" class="fundo-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>)">
    <div class="container">
        <div class="col-sm-offset-1 col-sm-14">
            <span class="quotes pull-left">&ldquo;</span>
            <p class="text-center"><?php the_excerpt(); ?></p>
            <span class="quotes pull-right" style="margin-top: -37px;">&rdquo;</span>
            <h3 class="autor pull-right"><?php the_title(); ?></h3>
            

        </div>
    </div>
</div>
<?php wp_reset_postdata(); ?>
  <?php endwhile ?>
<?php endif; ?>