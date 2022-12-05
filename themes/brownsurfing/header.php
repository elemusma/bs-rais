<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
if(is_user_logged_in()){
echo '<div class="blank-space"></div>';
echo '<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row align-items-center">';

echo '<div class="col-md-3">';
    echo '<a href="' . home_url() . '">';

    $logo = get_field('logo','options'); 
    if($logo){
        echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
    }

    echo wp_get_attachment_image(128,'full','',['class'=>'position-absolute h-100 w-auto','style'=>'top:0;left:25px;opacity:0;','id'=>'logoIcon']);

    echo '</a>';
echo '</div>';


echo '<div class="col-lg-9 col-md-6 col-7 text-right mobile-hidden">';
wp_nav_menu(array(
'menu' => 'Main Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0 text-white'
));
echo '</div>';
echo '<div class="col-lg-4 col-6 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';
echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white desktop-hidden" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';
echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); 
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';
}

echo '<section class="hero position-relative pt-5 pb-5 overflow-h" style="min-height:100vh;">';
// $globalPlaceholderImg = get_field('global_placeholder_image','options');
// if(is_page()){
// if(has_post_thumbnail()){
// the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
// } else {
// echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
// }
// } else {
// echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
// }

// if(is_front_page()) {
    // echo '<video playsinline autoplay loop muted class="w-100 h-100 position-absolute" style="top:0;left:0;object-fit:cover;" src="' . home_url() . '/wp-content/themes/brownsurfing/assets/Rais3-Video.mp4#t=0.5"></video>';
// }

echo '<div class="position-absolute w-100 h-100" style="background:#0a003b;top:0;left:0;"></div>';

echo '<div class="position-absolute bg-black w-100 h-100" style="opacity:.25;top:0;left:0;"></div>';

echo '<div class="diagonal-left-line position-absolute bg-accent-secondary" style="top:0px;"></div>';
echo '<div class="diagonal-left-line two position-absolute bg-accent-secondary" style="top:0px;"></div>';

// echo '<div class="diagonal-left-line three bg-accent-orange"></div>';
// echo '<div class="diagonal-bottom-left bg-accent-teal"></div>';
// echo '<div class="diagonal-bottom-right bg-accent-teal"></div>';

echo '<div class="diagonal-bottom-left bg-accent-secondary" style="transform: rotate(0deg) translate(100px, 73.50px);"></div>';
echo '<div class="diagonal-bottom-right bg-accent-secondary" style="transform: rotate(0deg) translate(100px, 73.50px);"></div>';

// echo '<div class="text-white hero-content position-relative z-1 d-flex" style="">';
// echo '<h6>' . get_the_field('pretitle') . '</h6>';
echo '<div class="d-flex align-items-center position-relative z-2" style="min-height:100vh;">';
echo '<div class="hero-content p-md-5 p-3">';

echo '<div class="col-lg-6">';
$logo = get_field('logo','options'); 
    if($logo){
        echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:150px;']);
    }
    echo '<h1 class="text-white bold" style="">Strategy and<br>Technology Solution</h1>';
    echo '<h6 class="text-accent-tertiary text-uppercase">where innovation meets impact</h6>';
echo '</div>';

    echo '<div class="col-lg-6 col-md-9">';
    echo '<p class="text-white lead">We partner with leading social enterprises, nonprofits, corporations, and purpose-driven leaders to bring solutions that tackle today\'s urgent challenges. RAIS3 is a team of strategists who match ingenuity with technology to unlock new funding and generate sustainable and scalable impact for the causes and communities our clients champion. From strategy to planning, implementation to execution, we bring expertise to realize exceptional value and transformative impact.</p>';
    // echo '<div class="col-md-9">';
    echo '<span class="btn bg-white text-accent contact-us open-modal" id="contact-us" style="">Send Us a Message</span>';
    echo '<div class="modal-content contact-us position-fixed w-100 h-100 z-3">';
    echo '<div class="bg-overlay"></div>';
    echo '<div class="bg-content">';
    echo '<div class="bg-content-inner">';
    echo '<div class="close" id="">X</div>';
    echo '<div>';
    echo '<h2>Contact Us</h2>';
    echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');
    echo '</div>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
    // echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');
    // echo '</div>';
    echo '</div>';
echo '</div>';
echo '</div>';

// style="height:500px;top:50px;right:0;"
// Layer_2

echo '<div class="position-absolute z-1 d-inline-block" style="top:50%;transform:translate(0px, -50%);">';
echo '<?xml version="1.0" encoding="UTF-8"?>
<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 702.2 628.75" style="height:500px;top:50px;right:0;">
  <defs>
    <style>
      .cls-1 {
        fill: url(#linear-gradient);
      }

      .cls-2 {
        fill: url(#linear-gradient-3);
      }

      .cls-3 {
        fill: url(#linear-gradient-4);
      }

      .cls-4 {
        fill: url(#linear-gradient-2);
      }
    </style>
    <linearGradient id="linear-gradient" x1="144.84" y1="314.38" x2="557.36" y2="314.38" gradientUnits="userSpaceOnUse">
      <stop offset=".12" stop-color="#2b54fc"/>
      <stop offset=".86" stop-color="#0b8ffc"/>
    </linearGradient>
    <linearGradient id="linear-gradient-2" x1="289.69" x2="702.2" xlink:href="#linear-gradient"/>
    <linearGradient id="linear-gradient-3" x1="0" x2="412.52" xlink:href="#linear-gradient"/>
    <linearGradient id="linear-gradient-4" x1="144.85" xlink:href="#linear-gradient"/>
  </defs>
  <g id="Layer_1-2" data-name="Layer 1">
    <g>
      <g id="Layer_2-2" data-name="Layer 2">
        <g id="Layer_1-2" data-name="Layer 1-2">
          <polygon class="cls-1" points="144.84 0 449.78 313.41 144.84 628.75 249.03 628.75 557.36 314.37 253.26 0 144.84 0"/>
          <polygon class="cls-4" points="289.69 0 594.63 313.41 289.69 628.75 393.87 628.75 702.2 314.37 398.11 0 289.69 0"/>
        </g>
      </g>
      <g id="Layer_2-3" data-name="Layer 2">
        <g id="Layer_1-2-2" data-name="Layer 1-2">
          <polygon class="cls-2" points="0 0 304.94 313.41 0 628.75 104.19 628.75 412.52 314.37 108.42 0 0 0"/>
          <polygon class="cls-3" points="144.85 0 449.79 313.41 144.85 628.75 249.03 628.75 557.36 314.37 253.27 0 144.85 0"/>
        </g>
      </g>
    </g>
  </g>
</svg>';
echo '</div>';

// echo '</div>';
// $backgroundImage = get_field('background_image');
// echo '<div class="el" id="elDiv" style="pointer-events:none;background:url(' . wp_get_attachment_image_url($backgroundImage['id'],'full') . ');background-position:35% 25%;"></div>';





if(!is_front_page()) {
echo '<div class="container pt-5 pb-5 text-white text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';
if(is_page() || !is_front_page()){
echo '<h1 class="">' . get_the_title() . '</h1>';
} elseif(is_single()){
echo '<h1 class="">' . get_single_post_title() . '</h1>';
} elseif(is_author()){
echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
} elseif(is_tag()){
echo '<h1 class="">' . get_single_tag_title() . '</h1>';
} elseif(is_category()){
echo '<h1 class="">' . get_single_cat_title() . '</h1>';
} elseif(is_archive()){
echo '<h1 class="">' . get_archive_title() . '</h1>';
}
elseif(!is_front_page() && is_home()){
echo '<h1 class="text-shadow">The Morgan Birgé Blog</h1>';
echo '<h2 class="text-shadow">Welcome to our little corner of the Internet. Kick your feet up and stay a while.</h2>';
}
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
?>