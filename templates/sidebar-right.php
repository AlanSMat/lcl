<?php 
/* Template Name:Sidebar Right Layout */
get_header();

// $category_query_args = array(
//   'cat' => $catid;
// );

// $category_query = new WP_Query( $category_query_args );

//if ( $category_query->have_posts() ) : while $category_query->have_posts() : $category_query->the_post():
// Loop output goes here
//endwhile; endif;

//dump($posts);

//$query = new WP_Query( array( 'category_name' => 'the-science' ) );

///$query = get_posts( array( 'category_name' => 'diet' ) );

//echo $query[0];

///dump($query[0]);

//echo $query[0][0]["post_title"];

// foreach( $query as $k => $v ) {
//     echo $k;
//     foreach($v as $x => $y) {
//         echo $x . '<br />';
//     }
// }


?>
<div class="container page-main">
    <div class="row">
        <div class="col-lg-8 mr-4">
            <?php the_content() ?>
        </div>
        <div class="col-lg-4">
            <?php
            get_template_part('template-parts/sidebars/sidebar','right');
            ?>
        </div>
    </div>
</div>
<?php
get_footer();

