<?php
/**
 * Footer file
 * 
 * @package asm
 */
?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-col">
        <h5>Icons</h5>
        <?php get_template_part('template-parts/icons/social-media','grey'); ?>
      </div>
      <div class="col-md-4 footer-col">
        <h5>Quick Links</h5>
        <?php get_template_part('template-parts/nav/nav','footer'); ?>
      </div>
      <div class="col-md-4 footer-col">
        <h5>Contact Info</h5>
        <a href="#"></a>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>

</html>