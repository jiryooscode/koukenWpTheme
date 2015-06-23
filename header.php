<!DOCTYPE html>
<html lang="ja">
<head>
    
<title><?php if(is_front_page()) : ?><?php bloginfo('name');?><?php else : ?><?php  wp_title(' | ', true, 'right'); ?><?php endif ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<meta name="robots" content="ALL">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/html5reset-1.6.1.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/resp.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/item/respSlider/flickity.css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/item/mmenu/jquery.mmenu.css" type="text/css">
    
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/item/SublimeSlideshow/css/sublimeSlideshow.css" type="text/css">
    
<script src="<?php bloginfo('template_url'); ?>/item/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/item/mmenu/jquery.mmenu.min.all.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/item/respSlider/flickity.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/item/SublimeSlideshow/js/jquery.sublimeSlideshow.js" type="text/javascript"></script>
    

<script type="text/javascript">
jQuery(function($) {

var nav    = $('#header'),
    offset = nav.offset();

$(window).scroll(function () {
  if($(window).scrollTop() > offset.top) {
    nav.addClass('fixed');
  } else {
    nav.removeClass('fixed');
  }
});

});
</script>
    
    <script>
jQuery(function($){
  $('#js-flickity').flickity({
    // ここでオプションを設定します。
      prevNextButtons: false,
pageDots: false,
      autoPlay: 3000,
      cellSelector:'.gallery-cell',
      wrapAround:true
  });
});
</script>
   <script type="text/javascript">
   $(document).ready(function() {
      $("#menu").mmenu();
   });
</script>
    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
    <header id="header">
        <a href="#menu"><img src="<?php bloginfo('template_url'); ?>/item/menuButton.png" alt="menuButton" id="mbutton"></a>
         <a href="<?php echo home_url('/'); ?>"><h1><img src="<?php bloginfo('template_url'); ?>/item/logo2.png" alt="成蹊大学広告研究会" id="logo" ></h1></a>
        
         <img src="<?php bloginfo('template_url'); ?>/item/rankButton.png" alt="rankButton" class="rankButton" width="26">

    <?php
      wp_nav_menu(array(
        'container' => 'nav',
        'container_id' => 'menu',
        'theme_location' => 'place_global',
        ));
      ?>

    </header>
 