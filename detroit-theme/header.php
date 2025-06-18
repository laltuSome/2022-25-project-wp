<?php global $theme_options;?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<!-- COMMON META TAG -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#009de6">
<!-- COMMON META TAG -->
  <!--PAGE TITLE-->
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <!--PAGE TITLE-->
  <!--FAB ICON-->
 
 <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_options['fav-icon']['url'];?>">
  
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_options['app-icon']['url'];?>">

<!--FAB ICON-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slick.min.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slick-theme.min.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/owl.theme.default.min.css">



  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/baguetteBox.min.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<?php wp_head(); ?>


</head>
<body 
      <?php body_class( 'home' ); ?>>



  <!-- scrollup -->
  <div class="scrollup swich<?php echo $theme_options['opt-switch'];?>"><i class="fa fa-arrow-up" ></i></div>
  <!-- scrollup -->



 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul class="mobile-menu">
              <?php
$args = array(
'theme_location'   => '',
'menu'         => 'top-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
            </ul>
            <ul class="header-info-mob">
 <li><a href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a> 
</li>
 <li>
  <a href="mailto:<?php echo $theme_options['email-footer'];?>"><?php echo $theme_options['email-footer'];?></a> </li>


              </ul> 
</div>

<header class="top-head sticky<?php echo $theme_options['opt-switch2'];?>">
  

<!--menubar codisahn-->


   <div class="menubars2">
    <div class="container-fluid ">
        <div class="row justify-content-between align-items-center">
             <!-- logo -->
  
       <div class="top-left">
           <a class="logo" href="<?php echo home_url();?>">

<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">
 </a>
   <div class="menu-right">
   <nav class="nav">
          <ul id="menu-bg">
                   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'top-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
          </ul>
        </nav>
     

      </div>
       </div>
   <ul class="header-info">
 <li>
  <a  class="phones" href="tel:<?php echo $theme_options['phone'];?>"><span>Call Us:</span><?php echo $theme_options['phone'];?></a>
  <a  href="<?php echo esc_url( get_permalink(24) ); ?>" class="db-btn">Book Service</a> 
</li>
 


              </ul>      
   
<span class="pus-icon" onclick="openNav()">&#9776;</span>  

    

     
    </div>
</div>
</div>



 
</header>
 





            

<div class="section overflow-visible ">
 


  <?php if (is_front_page()) { ?>

    <div class="home-banner">
   

<div class="container">
  <div class="row">
  <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.1s" >
    <div class="banner-data">
<h1>Are you looking for <span id="typed" style="white-space:pre;" class="typed"></span> 


</h1>
<h2>Contact Us for a free consultation.</h2>
<p>We do web and mobile app design and development. Our SEO experts  help you to get the desired traffic on your website.</p>
<a class="btn-banner" href="#"><span>Contact today</span></a>
    </div>
  </div>
   <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.5s" >
     <div class="banner-image">
<img src="<?php bloginfo( 'template_url' ); ?>/images/banner-right.png" alt="img">
     </div>

   </div>
  </div>
</div>
   
  </div>


  <?php }
else if ( is_home() || is_category() || is_archive() || is_search()) { ?>
  <!---blog-baner--->
  <div class="inner-banner" style=" background:url('<?php bloginfo('template_directory'); ?>/images/inner-banner.png'); background-position: center center;
                                    background-repeat:no-repeat; background-size:cover;">
 <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3>Blog</h3>

</div>

  </div>
   </div>   
  </div>

  <?php }



elseif ( is_single() ) { ?>
  <!---single---->
  <div class="inner-banner" style=" background:url('<?php bloginfo('template_directory'); ?>/images/inner-banner.png'); background-position: center center;
                                    background-repeat:no-repeat; background-size:cover;">
  <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3> Blog</h3>

</div>

  </div>
   </div>                        
 
  </div>
  <!---blog-baner--->
    
<?php }
elseif ( is_404() ) { ?>
 

<?php }
elseif ( is_page(array('about-us')) ) { ?>
 <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>
 <div class="inner-banner2" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-lg-10 col-md-10 col-12 text-left">



<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>

</div>
<div class="col-lg-2 col-md-2 col-12 text-left">
       <div class="banner-image-inner">

     </div>
</div>

  </div>
   </div>
   
  </div>

 <?php  } else { ?>
  <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>
  <div class="inner-banner" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-lg-7 col-md-7 col-12 text-left">

<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>

</div>
<div class="col-lg-5 col-md-5 col-12 text-left">
     <div class="banner-image-inner">
<?php 
$image = get_field('banner_image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
     </div>
</div>

  </div>
   </div>
   
  </div>
    
   
    
  <?php } ?>
</div>

