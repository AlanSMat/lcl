<style>

</style>
<div class="header-image-container overlay-black-600 height-20em">
  <?php if( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'full' ); ?>
  <?php endif ?>
  <div class="page-header-title">
    <h1><?php is_home() && ! is_front_page() ? single_post_title() : the_title() ?></h1>
  </div>
</div>