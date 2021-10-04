<main id="main" class="page-main" role="main">
  <?php if( have_posts() ) :  ?>
  <div class="container blog-excerpt-container">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php dump(the_post()) ?>
    <div class="row mb-4" id="post-<?php the_ID(); ?>">
      <div class="col-lg-4">
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="img-fluid">
      </div>
      <div class="col-lg-8">
        <h3><?php the_title() ?></h3>
        <?php the_excerpt() ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-sml btn-primary">Read more</a>
      </div>
    </div>
    <?php endwhile ?>
  </div> <!-- end container -->
  <?php endif  ?>
</main>