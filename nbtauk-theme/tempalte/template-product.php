<?php /* Template Name: Prduct Template */ ?>

<?php get_header();?>



<section class="section section-products-page">
<div class="container">
<div class="row">
<?php
$j=0;
     $args = array( 
     'post_type' => 'products', 
     'posts_per_page' => -1, 
     'orderby' => 'menu_order', 
     'order' => 'DESC' 
     );

     query_posts( $args );

     while ( have_posts() ) : the_post();
$j++;
      ?> 

<div class="col-lg-4 col-md-4 col-sm-6 col-12">
<div class="product-holder">
      <div class="holder">
  <div class="pic">
<div class="holder" style="background: url(<?php the_post_thumbnail_url('large');?>);"></div>
 <img src="<?php bloginfo( 'template_url' ); ?>/images/empty2.png" alt="empty">
  </div>
  
</div>
<div class="product-data">
  <h4><?php the_title( ); ?></h4>
  <div class="matchHeight"><?php the_content( ); ?></div>
  <a href="#" class="btn-line">Enquire Now <i class="fa fa-angle-right"></i></a>
</div>
</div>
  </div>

  <?php endwhile; wp_reset_query(); ?>

  </div>




</div>
</section>



<?php get_footer();?>