<?php
/**
 * Page template file
 * 
 * @package ASM
 */

get_header();

?>
<main id="main" class="page-main" role="main">
  <div class="container">
    <div class="row">This is the page template
      <?php the_content() ?>
    </div>
  </div> <!-- end container -->
</main>
<?php
get_footer();