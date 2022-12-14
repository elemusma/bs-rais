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
    $imageSide = get_sub_field('image_side');
    $style = get_sub_field('style');
    $classes = get_sub_field('classes');
    $img = get_sub_field('image');

    echo '<section class="position-relative bg-accent-blue-dark text-white ' . $classes . '" style="padding:50px 0;' . $style . '">';
    echo '<div class="container-fluid">';
    if($imageSide == 'Right'){
        echo '<div class="row">';
        // echo '</div>';
    } else {
        echo '<div class="row flex-lg-row-reverse image-side-left">';
    }
    echo '<div class="col-lg-5">';
        echo get_sub_field('content');
    echo '</div>';
    echo '<div class="col-lg-7 pt-lg-0 pt-5">';
        echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-auto']);
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

    echo '<section class="position-relative bg-accent-blue-dark text-white ' . $classes . '" style="padding:50px 0;' . $style . '">';
    echo '<div class="container-fluid">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-lg-9 text-center">';
        echo get_sub_field('content');
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
endwhile; endif;
} elseif($layout == 'Case Studies'){
    if(have_rows('case_studies')): while(have_rows('case_studies')): the_row();

    echo '<section class="position-relative bg-accent-blue-dark text-white" style="padding:50px 0;">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    // echo '<div class="col-lg-">';
    $caseStudies = get_sub_field('posts');
    
    if( $caseStudies ):
        foreach( $caseStudies as $post ): 
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post);
            echo '<a href="' . get_the_permalink() . '" class="col-lg-4 col-md-6 col-case-study">';
            echo '<div class="img-hover overflow-h">';
            the_post_thumbnail('full',array('class'=>'w-100','style'=>'height:250px;object-fit:cover;'));
            echo '</div>';
            echo '<div class="details pl-3 pr-3 pb-3">';
            echo '<span class="h5 bold pt-3 d-block title">' . get_the_title() . '</span>';
            echo '<div class="small excerpt">';
            echo get_the_excerpt();
            echo '</div>';
            echo '</div>';
            echo '</a>';
        endforeach;
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); 
    endif;

    $link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
echo '<div class="col-lg-4 pt-lg-0 pt-5">';
echo '<div class="h-100 d-flex align-items-center">';
echo '<a class="position-relative d-flex align-items-center" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '<span style="width:35px;height:20px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" class="ml-3"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 88L32 208c-17.7 0-32 14.3-32 32l0 32c0 17.7 14.3 32 32 32l288 0 0 88c0 9.6 5.7 18.2 14.5 22z"/></svg></span></a>';
echo '</div>';
echo '</div>';
endif;
    
// echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
} elseif($layout == 'Testimonials'){
    if(have_rows('testimonials')): while(have_rows('testimonials')): the_row();
        $image = get_sub_field('image');
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $link = get_sub_field('link');

        echo '<section class="position-relative bg-accent-blue-dark text-white" style="padding:50px 0;">';
        echo '<div class="container-fluid">';
        echo '<div class="row justify-content-center">';

        echo '<div class="col-md-4">';
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-auto','style'=>'max-width:150px;']);
            echo '<span class="bold d-block">' . $name . '</span>';
            echo '<span class="d-block">' . $title . '</span>';
        echo '</div>';

        echo '<div class="col-md-8">';
        echo '<div class="lead pb-4">';
        echo $content;
        echo '</div>';

        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            echo '<a class="position-relative d-flex align-items-center" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '<span style="width:35px;height:20px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" class="ml-3"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 88L32 208c-17.7 0-32 14.3-32 32l0 32c0 17.7 14.3 32 32 32l288 0 0 88c0 9.6 5.7 18.2 14.5 22z"/></svg></span></a>';
        endif;

        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</section>';

    endwhile; endif;
} elseif($layout == 'Gallery'){
    if(have_rows('gallery')): while(have_rows('gallery')): the_row();
    $gallery = get_sub_field('logo_gallery');
    if( $gallery ): 
        echo '<section class="position-relative bg-white text-white" style="padding:50px 0;">';
        echo '<div class="container-fluid">';
        echo '<div class="row justify-content-center">';
    foreach( $gallery as $image ):
    echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio mt-3 mb-3 overflow-h">';
    echo '<div class="position-relative">';
    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
    echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-auto'] );
    echo '</a>';
    echo '</div>';
    echo '</div>';
    endforeach; 
    echo '</div>';
        echo '</div>';
        echo '</section>';
    endif;
    endwhile; endif;
} elseif($layout == 'Two Columns'){
    if(have_rows('two_columns')): while(have_rows('two_columns')): the_row();
        echo '<section class="position-relative bg-accent-blue-dark text-white" style="padding:50px 0;">';
        echo '<div class="container-fluid">';
        echo '<div class="row justify-content-center">';

        echo '<div class="col-md-6">';
        echo get_sub_field('column_left');
        echo '</div>';

        echo '<div class="col-md-6">';
        echo get_sub_field('column_right');
        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;

}
endwhile; endif;

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