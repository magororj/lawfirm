<?php 
  $args = array( 'post_type' => 'quemsomos', 'posts_per_page' => 4, 'order' => 'ASC', );
  $the_query = new WP_Query( $args );
  $active = 'active'; 
  ?>
    
<!-- <pre><?php // var_export($the_query);?></pre> -->
<div id="quem-somos" class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-16 col-sm-16">
            <div class=titulo>
                <h2 class="text-center">Quem Somos</h2>
            </div>
<div class="row">

<!-- Nav tabs -->
<ul class="nav nav-tabs col-sm-10" role="tablist">
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <li role="presentation" class="<?php echo $active ; ?>">
  <?php if ( has_post_thumbnail() ) : ?>

    <a href="#<?php the_ID(); ?>" aria-controls="home" role="tab" data-toggle="tab">
      <div class="caixab">
        <p><?php the_title(); ?></p>
      </div>
      <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive', 'alt' => 'Responsive image') ); ?>
    </a>
  </li>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
  <?php $active = ' ';?>
  <?php endwhile ?>
  

</ul>

<!-- Tab panes -->
<div class="tab-content col-sm-6">
<?php $active = 'active'; ?> 
<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <div role="tabpanel" class="tab-pane <?php echo $active ; ?>" id="<?php the_ID(); ?>">
    <h3><?php the_title(); ?></h3>
    <div class="content">
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
  <?php $active = ' ';?>
  <?php endwhile ?>
</div>

</div>
        
    </div></div></div>
<?php endif; ?>
<?php endif; ?>