<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<section class="section section-abut position-relative">

	<div class="container position-relative">
		<div class="texts-left">NBTA</div>
	<div class="lgo-right">
		<img src="<?php bloginfo( 'template_url' ); ?>/images/Logo-dark.png" alt="Logo" />
	</div>
<div class="row justify-content-between">
 <div class="col-lg-5 col-md-5 col-12" data-aos="fade-right">
 	<div class="home-img-holder">
 		<?php 
$image = get_field('home_about_img');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
 	</div>
 </div>

 <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left">
 	<div class="wel-text-home">
 		<h2><?php the_field('home_about_heading'); ?></h2>
 		<p><?php the_field('home_about_text'); ?></p>
 	</div>
 </div>

 

</div>
</div>
<div class="gallery-abut">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-12 col-12"></div>
	  <div class="col-lg-8 col-md-12 col-12">
	  	<div class="row">
		<?php if( have_rows('home_about_images') ): ?>
  
    <?php while( have_rows('home_about_images') ): the_row(); 
        $image = get_sub_field('page_img');
        ?>
   <div class="col col-holder-5 matchHeight" data-aos="zoom-in">
<img  src="<?php the_sub_field('page_img'); ?>" width="126" height="114" alt="<?php the_sub_field('page_titel'); ?>">

</div>
 <?php endwhile; ?>

<?php endif; ?>
</div>
</div>

</div>
</div>
</div>
</section>



<section class="section section-courses">
<div class="container-fluid margin-top0">

<div class="row">

<?php  

  $cats = get_categories(
  array(
    'orderby' => 'description',
    'order'   => 'ASC',
    'hide_empty' => false
)
);  


  foreach ($cats as $cat) {  
   
    $cat_id= $cat->term_id;  
  ?>  
		  <div class="col-lg-3 col-md-3 col-sm-6 col-12" data-aos="fade-up">
<a href="<?php echo get_category_link( get_cat_ID( $cat->name )); ?>" class="images-holder">
 <div class="pic">
  	  <div class="holder"  style="background:url(<?php the_field('curse_image', 'term_'. $cat_id); ?>);"></div>
  	  <img src="<?php bloginfo( 'template_url' ); ?>/images/empty2.png" alt="empty">
 </div> 
<h4 class="titels roboto"><?php echo $cat->name; ?></h4>	

</a>
     </div>

<?php } wp_reset_query(); ?>


</div>
</div>
</section>


<section class="section section-training-academy">
<div class="container">
<div class="row no-gutters justify-content-between border-buttm align-items-end" data-aos="flip-up">
	<div class="col-lg-6 col-md-12">

		<h3 class="training-titel"><?php the_field('home_training_titel'); ?></h3>

	</div>
<div class="col-lg-4 col-md-12 text-lg-right text-sm-left"><a class="btn-page" href="<?php echo esc_url( get_permalink(114) ); ?>">VIEW COURSES <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
<div class="content-training">
<div class="container">
<div class="row justify-content-between">
	<div class="col-lg-7 col-md-12" data-aos="fade-right">
		<div class="wel-text-home2">
			<?php the_field('home_training_text'); ?>
		
		</div>
	</div>
		<div class="col-lg-5 col-md-12" data-aos="fade-left">
			<div class="home-img-holder">
 		<?php 
$image = get_field('home_training_img');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
 	</div>
		</div>
	</div>
</div>
</div>


<div class="content-training-video" >
<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12" >
		<h3><?php the_field('home_training_videos_titel'); ?></h3>
		<?php 
$image = get_field('home_training_video_img');
if( !empty( $image ) ): ?>
		<div class="vide-poster" data-aos="fade-up" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
			<?php endif; ?>

<button type="button" class="video-btn" data-toggle="modal" data-src="<?php the_field('vide_url'); ?>" data-target="#myModal">
<img  src="<?php bloginfo( 'template_url' ); ?>/images/paly.png" width="120" height="120" alt="play" />
</button>

			
		</div>

<!--video-->
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header-custom">
        
          <button type="button" class="close-btn" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        </div>
        
    
      </div>
    </div>
  </div>
<!--video-->

	</div>
</div>
</div>
</div>

<div class="content-training-brand">
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 col-md-12">
		<p class="flex-center"><span><?php the_field('home_brand_titel'); ?></span></p>
		
	</div>
	</div>
	<div class="brand-list">
	<div class="row justify-content-between">
		<div class="slider-brand owl-carousel owl-theme">
		<?php if( have_rows('home_brand_images') ): ?>
  
    <?php while( have_rows('home_brand_images') ): the_row(); 
        $image = get_sub_field('page_img');
        ?>
<div class="brand-logo" data-aos="zoom-in">
			<img src="<?php the_sub_field('page_img'); ?>" width="200" height="130" alt="<?php the_sub_field('page_titel'); ?>" />
		</div>
		 <?php endwhile; ?>

<?php endif; ?>
		</div>	
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

</section>

<section class="section section-treatments">
<div class="container">
<div class="row justify-content-between align-items-center justify-content-between" data-aos="flip-up">
<div class="col-lg-6 col-md-6">
	<h3 class="training-titel"><?php the_field('treatments'); ?></h3>
</div>
<div class="col-lg-3 col-md-3">
	
	<div class="body-logo"><img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85"></div>
</div>
</div>
<div class="treatments-body" >
	<div class="row justify-content-between">
		<div class="col-lg-6 col-md-6 col-12" data-aos="fade-up">
			<div class="wel-text-home3">
				<?php the_field('treatments_text'); ?>
				
			</div>
		</div>
		<div class="col-lg-5 col-md-6 col-12" data-aos="fade-up">
			<div class="images-holder">
					<?php 
$image = get_field('treatments_img');
if( !empty( $image ) ): ?>
	<img src="<?php echo esc_url($image['url']); ?>" alt="Treatments List">
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</div>
</section>

<section class="section section-clients">
<div class="container">

<div class="row justify-content-between align-items-center justify-content-between" data-aos="fade-up">
<div class="col-lg-7 col-md-7 col-12">
	<h3 class="clients-titel"> <?php echo $theme_options['clients-text'];?></h3>
</div>
<div class="col-lg-3 col-md-3 col-12">
	
	<div class="slide-btn">
			<a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
	<a class="next" href="#"><i class="fa fa-angle-right"></i></a>
	</div>
</div>
</div>

<div class="clients-body">
	<div class="row justify-content-between align-items-center">
		<div class="col-lg-6 col-md-12 col-12" data-aos="fade-up">
			<div class="images-holder2">
				
<img src="<?php echo $theme_options['clients-url']['url'];?>" alt="Logo" width="510" height="658">
			</div>
		</div>
		<div class="col-lg-5 col-md-12 col-12" data-aos="fade-up">
			<div class="clients">
				<div class="slick-client">
					<?php
$a=0;
		 $args = array( 
		 'post_type' => 'review', 
		 'posts_per_page' => -1, 
		 'orderby' => 'menu_order', 
		 'order' => 'DESC' 
		 );

		 query_posts( $args );

		 while ( have_posts() ) : the_post();
$a++;
		  ?> 
		
					<div class="item-testim"> 	
						<span class="date"><i class="fa fa-calendar" ></i><?php echo date('d m, Y'); ?></span>
						<p><?php the_content();?> </p>
						<div class="user-data">
					<div class="user-img"><img src="<?php the_post_thumbnail_url('large');?>" alt=""></div>
							<div class="user-id">
								<p class="user-name"><?php the_title();?></p>
						<p class="designation"><?php the_field('designation'); ?></p>
							</div>
						</div>
					
						
					</div>
						  <?php endwhile; wp_reset_query(); ?>	
					
				</div>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-12"></div>
	</div>
</div>


	</div>
</section>

<?php get_footer();?>