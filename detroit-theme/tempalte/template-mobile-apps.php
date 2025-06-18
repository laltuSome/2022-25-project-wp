<?php /* Template Name: Mobile Apps Template */ ?>

<?php get_header();?>

<section class="section section-minus"></section>

<section class="section section-inner1">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-12 col-12">
			<div class="image-holder-outgrd1">
<?php 
$image = get_field('1st_image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
			</div>
		
		</div>
		<div class="col-lg-8 col-md-12 col-12">
			<div class="body-content pading-right">
				<span class="samll-titel">Mobile </span>
<?php the_field('1s_content'); ?>
<a class="btn-fill" href="#"><span>Get In Touch</span></a>
			</div>
		</div>
		
		
</div>
</div>
</section>




<section class="section section-proces-color">
	<div class="container">

<div class="row align-items-center">
		<div class="col-lg-12 col-md-12 col-12">
			<div class="body-content text-center pb-5">

	<?php the_field('proces_content'); ?>
</div>
		</div>
		
		
</div>

		<div class="row justify-content-center">
			<div class="custom-col1 col-pro">
				<div class="icon-holder">
					<?php 
$image = get_field('app_icon1');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
	<h4><?php the_field('app_titel1'); ?></h4>
				</div>
			</div>
			<div class="custom-col2 col-pro">
				<div class="icon-holder">
			<?php 
$image = get_field('app_icon2');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
	<h4><?php the_field('app_titel2'); ?></h4>
				</div>
			</div>
			<div class="custom-col3 col-pro">
				<div class="icon-holder">
<?php 
$image = get_field('app_icon3');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
	<h4><?php the_field('app_titel3'); ?></h4>
				
				</div>
			</div>
			<div class="line"></div>
			<div class="custom-col4 col-pro">
				<div class="icon-holder">
							<?php 
$image = get_field('app_icon4');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
	<h4><?php the_field('app_titel4'); ?></h4>
				
				</div>
			</div>
			<div class="custom-col5 col-pro">
				<div class="icon-holder">
					<?php 
$image = get_field('app_icon5');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
	<h4><?php the_field('app_titel5'); ?></h4>
				</div>
			</div>

			</div>
		</div>
	</section>


<section class="section section-ecom-minus2"></section>


<section class="section section-wp1 container-custom">
	<div class="container">
		<div class="row">
			<div class="col-12">
					<div class="body-content text-center">
		<?php the_field('2nd_content'); ?>
</div>
			</div>

			</div>


<div class="row justify-content-center">

<div class="col-12">
<div class="tab custom-tab">
<?php if( have_rows('fremwork_slide') ): ?>
	 <?php while( have_rows('fremwork_slide') ): the_row(); 
        $image = get_sub_field('image');
        ?>
  <button class="tablinks apps-link" onclick="openCity(event, '<?php the_sub_field('name'); ?>')" id="defaultOpen"> <?php the_sub_field('name'); ?></button>
  <?php endwhile; ?>
<?php endif; ?>
</div>

<?php if( have_rows('fremwork_slide') ): ?>
	 <?php while( have_rows('fremwork_slide') ): the_row(); 
        $image = get_sub_field('image');
        ?>
<div id="<?php the_sub_field('name'); ?>" class="tabcontent">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-12">
		 <?php echo wp_get_attachment_image( $image, 'full' ); ?>
</div>
<div class="col-lg-6 col-md-6 col-12">
	<div class="body-content scoilcontent">
		 <h3><?php the_sub_field('name'); ?></h3>
<?php the_sub_field('caption'); ?>	
</div>
</div>
</div>
</div>
   <?php endwhile; ?>
<?php endif; ?>




</div>




</div>

		</div>
	</section>


	<section class="section section-middle-content">
	<div class="container">
		<div class="row">
			<div class="col-12">
					<div class="body-content text-center mb-5">
		<?php the_field('3nd_content'); ?>
</div>
			</div>

			</div>


<div class="row justify-content-center align-items-center">

<div class="col-lg-3 col-md-3 col-12">
	<?php if( have_rows('apptext_lefte') ): ?>
	 <?php while( have_rows('apptext_lefte') ): the_row(); 
        $image = get_sub_field('image');
        ?>
<div class="left-content-line"> <?php the_sub_field('data'); ?></div>

  <?php endwhile; ?>
<?php endif; ?>


</div>

<div class="col-lg-6 col-md-6 col-12">
	
		<div class="center-img text-center">
<?php 
$image = get_field('app_middle');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

		</div>

</div>

<div class="col-lg-3 col-md-3 col-12">
	<?php if( have_rows('apptext_rights') ): ?>
	 <?php while( have_rows('apptext_rights') ): the_row(); 
        $image = get_sub_field('image');
        ?>
<div class="right-content-line"> <?php the_sub_field('data'); ?></div>

  <?php endwhile; ?>
<?php endif; ?>


</div>


</div>

		</div>
	</section>




<section class="section section-project-inner mt-0">
	<div class="container-fluid  m-0 p-0">

<div class="row tz-gallery no-gutters">

 <?php
$count = 0;
		 $args = array( 
		 'post_type' => 'gallery', 
		 'posts_per_page' => -1, 
		 'orderby' => 'menu_order', 
		 'order' => 'DESC' 
		 );

		 query_posts( $args );

		 while ( have_posts() ) : the_post();
 $count++;
		  ?>
   
            <div class="col-lg-2 col-md-4 col-6 p-2" >

   <div class="inner-galery">
               <div class="pic">

<?php $gal = get_field( 'thumbnails'); ?>
<?php if($gal) { ?>
  <a href="<?php the_field('thumbnails'); ?> " data-toggle="lightbox" data-gallery="gallery" class="lightbox holder"  style="background:url('<?php the_post_thumbnail_url('large');?>');  "></a>
<?php } else { ?>
<a href="<?php the_post_thumbnail_url('large');?>" data-toggle="lightbox" data-gallery="gallery" class="lightbox holder"  style="background:url('<?php the_post_thumbnail_url('large');?>');  "></a>
<?php } ?>

 <img src="<?php bloginfo( 'template_url' ); ?>/images/10-11.png" alt="empty">

  </div> 
   </div>
</div>
 
<?php endwhile; wp_reset_query(); ?>	




  </div>
  <div class="row">
<div class="col-12 text-center">
	<a class="btn-fill mt-5" href="#"><span>VIEW MORE</span></a>
</div>
  </div>


		</div>
	</section>









  <section class="section section-minus4"></section>


<section class="section section-testimon">
	<div class="container-fluid">

<div class="row align-items-center">

	
<div class="col-lg-6 col-md-6 col-12">

<div class="logo-bg">
 <img src="<?php bloginfo( 'template_url' ); ?>/images/logo-bg.png" alt="quote">


 <div class="clint-img1">
 	<img src="<?php bloginfo( 'template_url' ); ?>/images/client1.png" alt="quote">
 </div>
  <div class="clint-img2">
 	<img src="<?php bloginfo( 'template_url' ); ?>/images/client2.png" alt="quote">
 </div>
  <div class="clint-img3">
 	<img src="<?php bloginfo( 'template_url' ); ?>/images/client3.png" alt="quote">
 </div>
  <div class="clint-img4">
 	<img src="<?php bloginfo( 'template_url' ); ?>/images/client4.png" alt="quote">
 </div>
  <div class="clint-img5">
 	<img src="<?php bloginfo( 'template_url' ); ?>/images/client5.png" alt="quote">
 </div>
   <div class="clint-img6">
 	<img src="<?php bloginfo( 'template_url' ); ?>/images/client6.png" alt="quote">
 </div>

</div>


</div>

<div class="col-lg-6 col-md-6 col-12">
	<div class="body-content ">
	<span class="samll-titel ">Testimonials</span>
			<h3 class="testmo-heading">What Our Clients Say <?php the_field('testimonials_titel'); ?></h3>
	</div>


				<div class="testmo-holder" >
						 <img src="<?php bloginfo( 'template_url' ); ?>/images/quote.png" alt="quote">
		<div class="testimonials">
		 <?php

		 $args = array( 
		 'post_type' => 'testimonials', 
		 'posts_per_page' => -1, 
		 'orderby' => 'menu_order', 
		 'order' => 'DESC' 
		 );

		 query_posts( $args );

		 while ( have_posts() ) : the_post();

		  ?> 

<div class="items" >
<div class="item-testimo" >
        
   <div class="client-text">

            	<?php the_content() ;?>
            	   <div class="thum-text">
            	<h5><?php the_title() ;?></h5>
<em><?php the_field('sub_titel'); ?></em>

            	
            </div>
            </div>
      </div>
            </div>

 	  <?php endwhile; wp_reset_query(); ?>	
	</div>
</div>
<div class="text-left mt-5">
			<div class="slick-dots2"></div>

		</div>

	</div>

</div>
</div>
</section>


<section class="section section-form overflow-visible">
	<div class="container">
    <div class="row">
    	<div class="col-lg-12 col-12">
    		
    		<div class="body-content text-center">
	<span class="samll-titel ">GET SEO</span>
			<h3 class="testmo-heading">Analysis of your website</h3>
	</div>
	<div class="fomr-home">
		<?php echo do_shortcode('[contact-form-7 id="89" title="Home Form"]');?>
	</div>
	<div class="callus-content">
<strong>or</strong>
<h4>Call Us for fast support to this number</h4>
<a href="#">800 2563 123</a>

	</div>


    	</div>

    </div>
</div>
</section>
	

<?php get_footer();?>