<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
$term = get_queried_object();
$image1 = get_field('service_promo_image', $term);
$image2 = get_field('service_information_2_image', $term);  


?>

    
<section class="section blog-list-page">
<div class="container">

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="offer-dat2">
   <h2 class="training-titel mb-3"><?php single_cat_title( __( '', 'textdomain') ); ?></h2>
         <?php the_field('category_text', $term); ?>

     </div>
    </div>

 asasasa
   


<?php if ( have_posts() ) : ?>
<?php

        while ( have_posts() ) : the_post();
 $ls_image2 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );
        ?>

        <div class="col-lg-4 col-md-4 col-12">
            <a class="corus-related matchHeight" href="<?php the_permalink();?>" data-aos="fade-up">
                  <div class="blogpic-icn">
 <?php 
$image = get_field('icon');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" width="100" height="100" alt="<?php the_title();?>" >
            <?php endif; ?>
</div>
       <h4><?php the_title();?></h4>
        <p><?php the_field('small_description'); ?></p>
            
            </a>
        </div>
  
      


  
    <?php   endwhile;?>

     <?php else : ?>
<p class="allert">Oh No! No Courses found. Try a different search!</p>
<?php endif;?>
            

    








</div>



</div>  

</section>



<!-- wraper_search_main -->

<?php get_footer();?>