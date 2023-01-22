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

// echo '<div class="position-fixed w-100" style="
// top:0;
// left:0;
// background: rgb(255,255,255);
// height: 150px;
// z-index: 3;
// margin-top:32px;
// "></div>';
echo '<div class="blank-space"></div>';
echo '<div class="nav position-relative w-100 z-3 pt-3 pb-3 bg-white box-shadow" style="top:0;left:0;">';

echo '<div class="container-fluid">';
echo '<div class="row" style="">';
echo '<div class="col-6 pl-lg-5">';

echo '<a href="' . home_url() . '">';
$logo = get_field('logo','options');
if($logo){
  echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'h-auto','style'=>'max-width:175px;transition:all 1s ease-in-out;','id'=>'logo-main']);
}
echo '</a>';

echo '</div>';

echo '<div class="col-6 d-flex align-items-center justify-content-end">';

echo '<div class="mr-4">';
wp_nav_menu(array(
  'menu' => 'primary',
  'menu_class'=>'menu d-flex flex-wrap justify-content-center list-unstyled mb-0'
)); 
echo '</div>';

echo '<a id="navToggle" class="nav-toggle d-inline-block">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';

echo '</div>';
echo '</div>'; // end of row
echo '</div>';

echo '<div id="navMenuOverlay" class="position-fixed" style="z-index:5;"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white" style="z-index:6;" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close">X</span>';
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
'menu_class'=>'menu list-unstyled mb-0'
)); 

get_field('website_message','options');

echo '</div>';
echo '</div>';



echo '<section class="hero position-relative overflow-h bg-light" style="">';
if(is_page() && !is_front_page()){
  the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;'));
  // echo '<div class="position-absolute w-100 h-100 bg-white" style="opacity:.25;top:0;left:0;"></div>';
}

if(is_front_page()){
  echo '<div class="diagonal-bottom-left bg-accent-secondary" style="transform: rotate(0deg) translate(100px, 0px);"></div>';
  echo '<div class="diagonal-bottom-right bg-accent-secondary" style="transform: rotate(0deg) translate(100px, 0px);"></div>';
}


if(is_front_page()){
  echo '<div class="position-relative pt-5 pb-5" style="">';
  // echo '<div class="hero-content">';

echo '<div class="container-fluid">';
echo '<div class="row">';



echo '<div class="col-12 pl-lg-5">';
$logo = get_field('logo','options');
    
    echo '<h1 class="mb-4 text-accent" style="">' . get_the_title() . '</h1>';
    if(get_field('header_subtitle')){
      echo '<h6 class="text-accent-tertiary text-uppercase bold mb-4">' . get_field('header_subtitle') . '</h6>';
    }
    echo '<div class="col-lg-6 p-0">';

    echo '<div class="text-white">';
    echo get_field('header_content');
    echo '</div>';
    
    
  echo '</div>';
echo '</div>';


    echo '</div>'; // end of row
    echo '</div>'; // end of container

    // echo '</div>';


echo '</div>';

  } elseif(is_page()){
    echo '<div style="padding:600px 0px 50px;">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center text-white">';
    
    
    echo '<h1 class="text-shadow">' . get_the_title() . '</h1>';
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }





if(is_front_page()){
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
}



if(!is_front_page() && !is_page()) {
echo '<div class="container pt-5 pb-5 text-white text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';


if(is_single()){
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