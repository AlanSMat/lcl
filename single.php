<?php
/**
 * Single post template file
 * 
 * @package ASM
 */

get_header();
?>
<main id="main" class="page-main" role="main">
  <div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="blog-content">

        <?php if(has_post_thumbnail()) : ?>

        <div>
          <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="img-fluid">
        </div>

        <?php endif; ?>
        <div class="blog-header">

          <?php the_title( '<h1>', '</h1>' ); ?>

        </div>
        <?php the_content(); ?>
        <p>
          <?php 
          std_button( wp_get_referer(), 'Back' );
          ?>
        </p>
      </div><!-- .entry-content -->
    </article><!-- #post-<?php the_ID(); ?> -->
  </div> <!-- end container -->
</main>
<?php
get_footer();