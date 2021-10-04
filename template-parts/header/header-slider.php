<?php 
/**
 * Slick Carousel
 * 
 * @package ASM
 */
?>
<div class="front-page-slider">
<?php
$slider_content = get_option( 'widget_slick_slider' );

foreach($slider_content as $id => $slideshow_item) : 
	if($slideshow_item["title"] != "") :
	?>
		<div class="header-image-container height-40em overlay-black-400">
			<img src="<?php echo $slideshow_item['imageuri']; ?>" alt="" class="static-image">
			<div class="header-text">
				<h1><?php echo $slideshow_item["title"]; ?></h1>
				<p><?php echo $slideshow_item["details"]; ?></p>
			</div>
		</div>
	<?php
	endif;
endforeach;
?>

</div>

