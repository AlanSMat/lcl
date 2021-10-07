<?php
/**
 * Main navigation file
 * 
 * @package ASM
 */

$menu_class = \ASM_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'asm-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

$current_page_title = get_the_title();

?>
<script>
    
</script>
<nav class="topnav" id="myTopnav">
<?php 
    if( ! empty( $header_menus ) && is_array( $header_menus ) ) : 

        foreach( $header_menus as $menu_item ) : 

            if( ! $menu_item->menu_item_parent ) : 
                // get child menu items if applicable
                $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                // set boolean menu item has children
                $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );

                //$current_page_title === $menu_item->title ? print 'active' : print'' ;

                if( ! $has_children ) :
                ?>
                    <a class="nav-link <?php $current_page_title === $menu_item->title ? print ' active' : print '' ; ?>" href="<?php echo esc_url( $menu_item->url ) ?>"><?php echo esc_html( $menu_item->title ) ?></a>
                <?php 
                else :
                ?>  
                    <div class="dropdown">
                        <div class="dropbtn">
                            <?php echo esc_html( $menu_item->title ) ?>
                        </div>
                        <div class="dropdown-content">
                            <?php  
                            foreach( $child_menu_items as $child_menu_item ) : 
                            ?>
                                <a class="dropdown-item" href="<?php echo esc_html( $child_menu_item->url ) ?>">
                                    <?php echo esc_html( $child_menu_item->title ) ?>
                                </a>
                            <?php  
                            endforeach;
                            ?>
                        </div>
                    </div>
                <?php
                endif;
            endif;
        endforeach; 
        ?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <?php
    endif;
?>
</nav>

