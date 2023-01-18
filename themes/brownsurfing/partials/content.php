<?php

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
    if($img){
        echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
    }
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
    echo '<section class="position-relative bg-white text-white" style="padding:50px 0;">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center pb-4">';
        echo get_sub_field('content');
    echo '</div>';
    echo '</div>';
    if( $gallery ): 
        echo '<div class="row justify-content-center">';
    foreach( $gallery as $image ):
    echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio mt-3 mb-3 overflow-h">';
    echo '<div class="position-relative h-100 d-flex align-items-center justify-content-center">';
    // echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
    echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-auto'] );
    // echo '</a>';
    echo '</div>';
    echo '</div>';
    endforeach; 
    echo '</div>';
endif;
echo '</div>';
echo '</section>';
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

} elseif($layout == 'Columns') {
    if(have_rows('columns_group')): while(have_rows('columns_group')): the_row();

    echo '<section class="position-relative bg-accent-blue-dark text-white" style="padding:50px 0;">';
        echo '<div class="container-fluid">';
        echo '<div class="row justify-content-center">';

        if(have_rows('columns_repeater')): while(have_rows('columns_repeater')): the_row();
            echo '<div class="col-lg-4 col-md-6 ' . get_sub_field('column_classes') . '">';
                echo get_sub_field('content');
            echo '</div>';
        endwhile; endif;

        // echo '<div class="col-md-6">';
        // echo get_sub_field('column_left');
        // echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</section>';

    endwhile; endif;
}
endwhile; endif;

?>