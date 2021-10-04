<?php

/**
 * Text Box Widget
 * Displays a text text box with an associated image
 * Instantiated by Sidebars class
 * 
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;
use WP_Widget;

class Widget_Slider extends WP_Widget {
    use Singleton;
    /**
     * Register widget with WordPress.
     */
    public function __construct() {

        parent::__construct(
            'slick_slider', // Base ID
            esc_html__( 'Slider', 'slider' ), // Name
            [ 'description' => esc_html__( 'Information to display on the front page slider', 'asm' ), ] // Args
        );
        $this->widget_html = 'widget-html/slider/slider-';
    }
    
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$instance = $this->instanceDefaults($instance);
		$bgimg = $instance['imageuri'];
		include( $this->widget_html . 'view.php');
	}

	/**
	 * Set defaults on an instance object
	 * 
	 * @param object $instance The instance object to scan/modify
	 */
	public function instanceDefaults($instance) {
        $instance['title'] = !empty( $instance['title'] ) ? $instance['title'] : 'Title';
		$instance['details'] = !empty( $instance['details'] ) ? $instance['details'] : 'Details...';		
		$instance['linktext'] = !empty( $instance['linktext'] ) ? $instance['linktext'] : 'Read more';
		$instance['linkuri'] = !empty( $instance['linkuri'] ) ? $instance['linkuri'] : '/';
		$instance['imageuri'] = !empty( $instance['imageuri'] ) ? $instance['imageuri'] : get_template_directory_uri() . "/assets/images/placeholder.svg";
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$instance = $this->instanceDefaults($instance);
		include( $this->widget_html . 'form.php');
	}
 
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
 
} // class Text_Box_Widget