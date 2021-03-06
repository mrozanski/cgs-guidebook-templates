<?php

// =============================================================================
// VIEWS/INTEGRITY/TEMPLATE-GUIDEBOOK.PHP (Guidebook | Header, Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

get_header();
wp_enqueue_style('guidebook-search', 'https://www.senioranswers.org/wp-includes/guidebook-app/styles.45a622b44acf6ea9591c.css');
wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');
?>

 <div class="x-container max width offset">
    <div class="<?php x_main_content_class(); ?>" role="main">
        <!-- <div class="x-main full" role="main"> -->
    <h1 class="entry-title">Search</h1>

    <app-root></app-root>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-141018987-1', 'auto');

    </script>
    <script src="https://www.senioranswers.org/wp-includes/guidebook-app/runtime.a8ef3a8272419c2e2c66.js" defer></script>
    <script src="https://www.senioranswers.org/wp-includes/guidebook-app/polyfills-es5.aa9d1203bc5c38f89695.js" nomodule defer></script>
    <script src="https://www.senioranswers.org/wp-includes/guidebook-app/polyfills.6402ec2183012de39838.js" defer></script>
    <script src="https://www.senioranswers.org/wp-includes/guidebook-app/main.f6b903fc36feb454b20c.js" defer></script>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php x_get_view( 'integrity', 'content', 'page' ); ?>
    <?php endwhile; ?>

    </div>
    <?php get_sidebar();?>
  </div>

<?php get_footer(); ?>
