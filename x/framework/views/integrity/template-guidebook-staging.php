<?php

// =============================================================================
// VIEWS/INTEGRITY/TEMPLATE-GUIDEBOOK.PHP (Guidebook | Header, Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

get_header();
wp_enqueue_style('guidebook-search', 'https://www.senioranswers.org/wp-includes/guidebook-app-stg/styles.45a622b44acf6ea9591c.css');
wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');
?>

  <div class="x-container max width offset">
    <div class="<?php x_main_content_class(); ?>" role="main">
    	<!-- <div class="x-main full" role="main"> -->

		<?php while ( have_posts() ) : the_post(); ?>
			<?php x_get_view( 'integrity', 'content', 'page' ); ?>
	    <?php endwhile; ?>

		<app-root></app-root>
		<script type="text/javascript" src="https://www.senioranswers.org/wp-includes/guidebook-app-stg/main.d51477dc0e1cd8883ebd.js"></script> <script type="text/javascript" src="https://www.senioranswers.org/wp-includes/guidebook-app-stg/polyfills.2b570766fece3f272584.js"></script> <script type="text/javascript" src="https://www.senioranswers.org/wp-includes/guidebook-app-stg/runtime.a66f828dca56eeb90e02.js"></script>


    </div>
    <?php get_sidebar();?>
  </div>

<?php get_footer(); ?>
