<?php
if(is_user_logged_in()){
// echo '<footer>';
// echo '<section class="pt-5">';
// echo '<div class="container">';
// echo '<div class="row justify-content-center">';
// echo '<div class="col-md-5 text-center pb-5">';
// echo '<a href="' . home_url() . '">';

// $logo = get_field('logo','options'); 
// $logoFooter = get_field('logo_footer','options'); 

// if($logoFooter){
// echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
// } elseif($logo) {
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
// }

// echo '</a>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</section>';

// echo '<section class="pt-5 bg-accent">';
// echo '<div class="container">';
// echo '<div class="row justify-content-center">';
// echo '<div class="col-12">';

// wp_nav_menu(array(
// 'menu' => 'footer',
// 'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-white text-uppercase'
// ));

// echo '</div>';
// echo '<div class="col-12 text-center text-white">';

// echo get_template_part('partials/si');

// echo '<div class="text-gray-1 pt-4">';

// the_field('website_message','options');

// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</section>';

// echo '</footer>';
}

if(get_field('footer', 'options')) { the_field('footer', 'options'); }

wp_footer();

echo '</body>';
echo '</html>';
?>