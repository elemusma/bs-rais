<?php
if(is_user_logged_in()){
echo '<footer>';
echo '<section class="pt-5 pb-5 bg-accent-blue-dark">';
echo '<div class="container-fluid">';
echo '<div class="row">';

echo '<div class="col-12 pb-5">';
echo '<hr class="border-white">';
echo '</div>';

echo '<div class="col-lg-2 col-md-3">';
echo '<a href="' . home_url() . '" class="pl-lg-0" style="padding-left:18px;">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options'); 

if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}

echo '</a>';
echo '</div>';

// echo '</div>';
// echo '<div class="row">';

echo '<div class="col-lg-10 col-12 pt-lg-0 pt-md-4">';
echo '<div class="h-100 d-flex align-items-center justify-content-end">';
    wp_nav_menu(array(
        'menu' => 'footer',
        'menu_class'=>'d-md-flex flex-wrap justify-content-start list-unstyled text-white text-uppercase mb-0'
    ));
echo '</div>';
echo '</div>';

echo '<div class="col-12 pt-5">';
echo '<hr class="border-white">';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

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

echo '</footer>';
}

if(get_field('footer', 'options')) { the_field('footer', 'options'); }

wp_footer();

echo '</body>';
echo '</html>';
?>