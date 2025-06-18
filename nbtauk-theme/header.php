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
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/aos.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/owl.theme.default.min.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slick.min.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/slick-theme.min.css">

  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/baguetteBox.min.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">


<?php wp_head(); ?>
<style type="text/css">
  :root {
  --themecolor:<?php echo $theme_options['opt-color'];?>;
  }
</style>

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
</div>

<header class="top-head sticky<?php echo $theme_options['opt-switch2'];?>">
  

<!--menubar codisahn-->


   <div class="menubars2">
    <div class="container">
        <div class="row justify-content-between align-items-center">
             <!-- logo -->
  
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
         
     <ul class="header-social">

<li><a class="facebook"  href="<?php echo $theme_options['social-facebook'];?>"><i class="fa fa-facebook"></i></a></li>
    <li><a  class="twitter" href="<?php echo $theme_options['social-twitter'];?>"><i class="fa fa-twitter"></i> </a></li>
     <li><a class="youtube" href="<?php echo $theme_options['social-youtube'];?>"><i class="fa fa-youtube-play"></i> </a></li>
      <li><a class="instagram" href="<?php echo $theme_options['social-instagram'];?>"><i class="fa fa-instagram"></i> </a></li>
            <li><a class="linkedin" href="<?php echo $theme_options['social-in'];?>"><i class="fa fa-linkedin"></i> </a></li>

</ul>
<span class="pus-icon" onclick="openNav()"><i class="fa fa-bars"></i></span>  

    

     
    </div>
</div>
</div>



 
</header>
 





            

<div class="section overflow-visible">
 


  <?php if (is_front_page()) { ?>

    <div class="home-banner">
    
<div class="slider stick-dots">

<?php $i = 0; ?>
    <?php foreach( $theme_options['home-slides'] as $slide ) : ?>
      <?php if ( $i == 0 ) : ?>
       <div class="slide-banner" style="background:url('<?php echo $slide['image']; ?>')">

      <?php else : ?>
              <div class="slide-banner" style="background:url('<?php echo $slide['image']; ?>')">
  
      <?php endif; ?>
         <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 col-md-6 col-12">
            <div class="slide-content">
        <div class="slide-content-headings text-left">
           <h1 class="animated" data-animation-in="fadeInUp" ><?php echo $slide['description']; ?></h1>
       <p class="animated banner-texts" data-animation-in="fadeInUp" data-delay-in="0.3"><?php echo $slide['title']; ?></p>
<p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3"><a class="banner-btn "  href="tel:<?php echo $theme_options['phone-footer1'];?>">Call Us <i class="fa fa-angle-right"></i></a></p>
        </div>
      </div>
        </div>
        <div class="col-lg-5 col-md-6 col-12">
         
        </div>
       
      </div>
     </div>

    
    
 </div>
      <?php $i++; ?>
    <?php endforeach; ?>


  
 



 
  </div>

   <div class="container-fluid">
      <div class="row align-items-center">
<div class="custom-dots">
   <div class="slick-slider-dots"></div>
</div>
</div>
</div>
   
  </div>


  <?php }
else if ( is_home() || is_category() || is_archive()) { ?>
  <!---blog-baner--->
  <?php
$term = get_queried_object();

 ?>

    <div class="inner-banner">
     <div class="container-fluid">
  <div class="row align-items-lg-center">
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-in">
<div class="inner-ban-image">
      <?php if ( get_field( 'curse_image', $term ) ): ?>
<img src="<?php the_field('curse_image', $term); ?>" width="958" height="655" alt="<?php single_cat_title( __( '', 'textdomain' ) ); ?>" />
  <?php else:?>
<img src="<?php bloginfo('template_directory'); ?>/images/inner-banner.png" width="958" height="655" alt="<?php single_cat_title( __( '', 'textdomain' ) ); ?>" />
  <?php endif;  ?>


</div>



</div>
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
<div class="pagae-heading">
    <?php if ( get_field( 'curse_headins', $term ) ): ?>
 <h1><?php the_field('curse_headins', $term); ?></h1> 
  <?php else:?>
  <h1> Courses</h1>
  <?php endif;  ?>
 </div>


</div>
<div class="col-lg-12 col-md-12 col-12" >
   <strong class="page-titel-bigg">Courses</strong>
</div>
  </div>
   </div>
   
  </div>

  <?php } elseif ( is_singular( array( 'blogs' ) )  || is_search() ) { ?>
<?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
//if (!empty($thumbid)) {
//$thumbimg = wp_get_attachment_url($thumbid);
//}
?>

  <div class="inner-banner">
     <div class="container-fluid">
  <div class="row align-items-lg-center">
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-in">
<div class="inner-ban-image">
  <img src="<?php echo $thumbimg; ?>" width="958" height="655" alt="<?php the_title( ); ?>" />
</div>



</div>
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
 <div class="pagae-heading">
    <?php if ( get_field( 'banner_title' ) ): ?>
 <h1><?php the_field('banner_title'); ?></h1> 
  <?php else:?>
  <h1>Blog</h1>
  <?php endif;  ?>
 </div>
</div>
<div class="col-lg-12 col-md-12 col-12" >
   <strong class="page-titel-bigg"><?php the_field('bigg_titel_black'); ?></strong>
</div>
  </div>
   </div>
   
  </div>

    <?php } elseif ( is_single() ) { ?>
  <!---single---->
  <div class="inner-banner">
     <div class="container-fluid">
  <div class="row align-items-lg-center">
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-in">
<div class="inner-ban-image">
<?php if(has_post_thumbnail()) {  ?>
            <img src="<?php the_post_thumbnail_url(); ?>" width="958" height="655" alt=""/>

 <?php  } else{  ?>
       <img src="<?php bloginfo('template_directory'); ?>/images/inner-banner.png" width="958" height="655" alt="" />
<?php } ?>


</div>



</div>
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
<div class="pagae-heading">
    <?php if ( get_field( 'curse_blog_titel' ) ): ?>
 <h1><?php the_field('curse_blog_titel'); ?></h1> 
  <?php else:?>
  <h1> Courses</h1>
  <?php endif;  ?>
 </div>




</div>
<div class="col-lg-12 col-md-12 col-12" >
   <strong class="page-titel-bigg">Courses</strong>
</div>
  </div>
   </div>
   
  </div>

  <!---blog-baner--->

    
<?php } elseif ( is_404() ) { ?>
  
  <?php } elseif ( is_page(array('courses','natural-products','special-offers','about-us','blog','contact-us')) ) { ?>
  
  <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>

  <div class="inner-banner">
     <div class="container-fluid">
  <div class="row align-items-lg-center">
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-in">
<div class="inner-ban-image">
  <img src="<?php echo $thumbimg; ?>" width="958" height="655" alt="<?php the_title( ); ?>" />
</div>



</div>
<div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
 <div class="pagae-heading">
    <?php if ( get_field( 'banner_title' ) ): ?>
 <h1><?php the_field('banner_title'); ?></h1> 
  <?php else:?>
  <h1> <?php the_title( ); ?></h1>
  <?php endif;  ?>
 </div>
</div>
<div class="col-lg-12 col-md-12 col-12" >
   <strong class="page-titel-bigg"><?php the_field('bigg_titel_black'); ?></strong>
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
  <div class="inner-banner-full" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-12 text-center" data-aos="fade-left">
<?php the_title( '<h1>', '</h1>' ); ?>

</div>

  </div>
   </div>
   
  </div>
    
   
    
  <?php } ?>
</div>

