<?php
/**
 * Front page template file
 * 
 * @package ASM
 */
//template-parts/header/header","slider"
get_header();
?>
<!-- <div class="div1"></div>
<div class="div2">
	<div class="square"></div>
</div> -->
<?php
// html pulled from assets/inc/classes/widget-html/text-blocks
dynamic_sidebar("Home Text Blocks");
get_footer();