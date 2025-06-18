<?php /* Template Name: Portfolio Template */ ?>

<?php get_header();?>

<section class="section section-minus"></section>

<section class="section section-inner1">
	<div class="container">
		<div class="row align-items-center">
		
		<div class="col-lg-12">
			<div class="body-content text-center">
			
<?php the_field('1s_content'); ?>


			</div>
		</div>
		
		
</div>


<div class="row tz-gallery mt-5">

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
   
        <div class="col-lg-4 col-md-4 col-12 content" >

   <div class="inner-galery borer-radus">
               <div class="pic">

<?php $gal = get_field( 'thumbnails'); ?>
<?php if($gal) { ?>
  <a href="<?php the_field('thumbnails'); ?> " data-toggle="lightbox" data-gallery="gallery" class="lightbox holder"  style="background:url('<?php the_post_thumbnail_url('large');?>');  "></a>
<?php } else { ?>
<a href="<?php the_post_thumbnail_url('large');?>" data-toggle="lightbox" data-gallery="gallery" class="lightbox holder"  style="background:url('<?php the_post_thumbnail_url('large');?>');  "></a>
<?php } ?>

 <img src="<?php bloginfo( 'template_url' ); ?>/images/empty2.png" alt="empty">

  </div> 
   </div>
</div>
 
<?php endwhile; wp_reset_query(); ?>	




  </div>

  <div class="row">
<div class="col-12 text-center mt-5">
  <a href="#" id="loadMore">Loading...</a>
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