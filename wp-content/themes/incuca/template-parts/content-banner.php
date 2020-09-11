<?php 
  $args = array( 'post_type' => 'banner', 'posts_per_page' => 4, 'order' => 'ASC', );
  $the_query = new WP_Query( $args ); 
  ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php if ( has_post_thumbnail() ) : ?>
            
            <?php endif; ?>
<div id="banner" class="fundo-banner" 
style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>)">
    <div class="container">
        <div class="col-sm-7 fundo-transp">
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
            <a href="/" class="btn btn-default btn-lg">Conhecer</a>

        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>
  <?php endwhile ?>
<?php endif; ?>