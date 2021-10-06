<div class="container home-text-block-container" id="text-block-<?php echo $this->id ?>">
  <div class="row">
    <div class="col-lg-6 widget-text-block picture-block" 
      style="background-image: url(<?php echo $instance['imageuri'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">

    </div>
    <div class="col-lg-6 text-block">
      <h1><?php echo $instance['title']; ?></h1>
      <p><?php echo nl2br($instance['details']); ?></p>
      <p>
        <?php 
        std_button( $instance['linkuri'], $instance['linktext'] );
        ?>
      </p>
    </div>
  </div>
</div>