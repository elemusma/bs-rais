<?php 
get_header();

if(is_user_logged_in()){
// start of content plus image
if(have_rows('builder')):
    $builderCounter = 0;
    while(have_rows('builder')): the_row();
    $builderCounter++;
$layout = get_sub_field('layout');

    // if($builderCounter == 1){
    //     echo '<div class="pt-5 pb-5"></div>';
    // }

if($layout == 'Content + Image'){
    if(have_rows('content_image')): while(have_rows('content_image')): the_row();
    $style = get_sub_field('style');
    $classes = get_sub_field('classes');
    $img = get_sub_field('image');

    echo '<section class="position-relative bg-accent-blue-dark text-white ' . $classes . '" style="padding:50px 0;' . $style . '">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-5">';
        echo get_sub_field('content');
    echo '</div>';
    echo '<div class="col-md-7">';
        echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100']);
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    endwhile; endif;
} elseif($layout == 'Column Center'){
    if(have_rows('column_center')): while(have_rows('column_center')): the_row();
    $style = get_sub_field('style');
    $classes = get_sub_field('classes');
    $img = get_sub_field('image');

    echo '<section class="position-relative bg-accent-secondary text-white ' . $classes . '" style="padding:50px 0;' . $style . '">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-lg-9 text-center">';
        echo get_sub_field('content');
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
endwhile; endif;
}
endwhile; endif;
// end of content plus image
}


// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

// // popup trigger
// echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// // popup content
// echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3">';
// echo '<div class="bg-overlay"></div>';
// echo '<div class="bg-content">';
// echo '<div class="bg-content-inner">';
// echo '<div class="close" id="">X</div>';
// echo '<div>';
// echo get_field('popup_content');
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';

get_footer(); ?>