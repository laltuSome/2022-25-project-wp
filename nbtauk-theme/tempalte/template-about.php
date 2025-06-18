<?php /* Template Name: About Template */ ?>

<?php get_header();?>

<section class="section section-abut position-relative pt-3 m-0">

	<div class="container position-relative">
		<div class="texts-left">NBTA</div>
	<div class="lgo-right">
		<img src="<?php bloginfo( 'template_url' ); ?>/images/Logo-dark.png" alt="Logo" />
	</div>
<div class="row justify-content-between">
 <div class="col-lg-5 col-md-5 col-12" data-aos="fade-right">
 	<div class="home-img-holder">
 		<?php 
$image = get_field('about_img1');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
 	</div>
 </div>

 <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
 	<div class="wel-text-home">
 		<h2 class="mb-3"><?php the_field('about_heading'); ?></h2>
 		<?php the_field('about_text2'); ?>
 	</div>
 </div>

</div>
<div class="row mt-5">
	<div class="col-lg-6 col-md-6 col-12">
 	<div class="wel-text-home mt-0">
<?php the_field('about_text3'); ?>
 	</div>
 </div>

 <div class="col-lg-6 col-md-6 col-12">
 		<div class="home-img-holder">
 		<?php 
$image = get_field('about_img2');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
 	</div>
 </div>
 <div class="col-lg-12 col-md-12 col-12">
 	<div class="wel-text-home mt-3">
<?php the_field('about_text4'); ?>
 	</div>
 </div>

</div>


<div class="row mt-5">
	 <div class="col-lg-6 col-md-6 col-12">
 		<div class="home-img-holder">
 		<?php 
$image = get_field('about_tab2_img1');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
 	</div>
 </div>
	<div class="col-lg-6 col-md-6 col-12">
 	<div class="wel-text-home about-page mt-0">
<?php the_field('about_tab2_text1'); ?>
 	</div>
 </div>


 <div class="col-lg-12 col-md-12 col-12">
 	<div class="wel-text-home about-page mt-3">
<?php the_field('about_tab2_text2'); ?>
 	</div>
 </div>

</div>
<div class="row mt-2">
 <div class="col-lg-6 col-md-6 col-12">
 	<div class="wel-text-home about-page mt-3">
<?php the_field('about_tab2_text3'); ?>
 	</div>
 </div>
 <div class="col-lg-6 col-md-6 col-12">
 	<div class="wel-text-home about-page mt-3">
<?php the_field('about_tab2_text4'); ?>
 	</div>
 </div>
 <div class="col-lg-12 col-md-12 col-12">
 	<div class="wel-text-home about-page mt-3">
<?php the_field('about_tab2_text5'); ?>
 	</div>
 </div>
	</div>

</div>

</section>


<div class="content-training-brand">
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 col-md-12">
		<p class="flex-center"><span><?php the_field('home_brand_titel'); ?></span></p>
		
	</div>
	</div>
	<div class="brand-list">
	<div class="row justify-content-between">
		<?php if( have_rows('home_brand_images') ): ?>
  
    <?php while( have_rows('home_brand_images') ): the_row(); 
        $image = get_sub_field('page_img');
        ?>
<div class="brand-logo col-lg-2 col-md-2 col-sm-4 col-4" data-aos="zoom-in">
			<img src="<?php the_sub_field('page_img'); ?>" width="200" height="130" alt="<?php the_sub_field('page_titel'); ?>" />
		</div>
		 <?php endwhile; ?>

<?php endif; ?>
			
		</div>
</div>
</div>
</div>
<div class="content-training-batch">
<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12 text-center">
<div class="ipi-batch">
		<?php 
$image = get_field('home_ipi_img');
if( !empty( $image ) ): ?>
	<img src="<?php echo esc_url($image['url']); ?>" alt="Insurance provided by Insync">
			<?php endif; ?>
			<p>Insurance provided by Insync</p>
</div>
	</div>
</div>
</div>
</div>

<?php get_footer();?>