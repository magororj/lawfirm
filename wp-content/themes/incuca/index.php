<?php get_header(); ?>
 

<?php if(is_front_page()):

//  <!-- THE FEATURETTES -->
	
    get_template_part( 'template-parts/content', 'banner' );
   
    get_template_part( 'template-parts/content', 'atuacao' );

    get_template_part( 'template-parts/content', 'citacao' );

    get_template_part( 'template-parts/content', 'quem-somos' );

    get_template_part( 'template-parts/content', 'cta' );

    get_template_part( 'template-parts/content', 'artigos' );

    get_template_part( 'template-parts/content', 'cta-news' );

    get_template_part( 'template-parts/content', 'onde-estamos' );

    

  //  <!-- /END THE FEATURETTES -->

  endif; ?>

<?php // loop vai aqui
if ( have_posts() ) {

  $i = 0;

  while ( have_posts() ) {
    $i++;
    if ( $i > 1 ) {
      echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
    }
    the_post();


    if ( !is_front_page() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			
		}
?>
    <div class="entry-content">

			<?php
			if ( !is_front_page() || is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
        the_excerpt();
       
			} else {
        
			}
			?>

    </div><!-- .entry-content -->
    <?php
  }
}
?>
 

    <?php get_footer(); ?>

    