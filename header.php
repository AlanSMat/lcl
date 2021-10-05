<?php
/**
 * Header file
 * 
 * @package ASM
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" sizes="32x32" /> -->
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<?php 
    if( function_exists( 'wp_body_open' ) ) :
        wp_body_open();
    endif;
?>
<header id="masthead" class="site-header" role="banner">
	<?php get_template_part('template-parts/nav/nav','bootstrap'); ?>    
	<?php if (is_front_page()) : ?>		
		<?php get_template_part('template-parts/header/header','slider'); ?>    
	<?php else : ?>
		<?php get_template_part('template-parts/header/header','page'); ?>    
	<?php endif ?>
</header>




    
