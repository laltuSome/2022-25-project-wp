<?php get_header();?>

<?php while ( have_posts() ) : the_post();?>
<section class="section section-project">

  <div class="container">

    <div class="row">
     
  
<div class="col-lg-8 col-md-12 col-md-12">
<div class="row tz-gallery">

        <div class="col-lg-6 col-md-6 col-12" data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="400">
             <div class="inner-galery">
   <div class="pic">
      <a href="<?php the_post_thumbnail_url('full');?>" data-toggle="lightbox" data-gallery="gallery" class="lightbox holder"  style="background:url(<?php the_post_thumbnail_url('full');?>);  ">
        
      </a>
      <img src="<?php bloginfo( 'template_url' ); ?>/images/eampty-10x8.png" alt="empty">
  </div> 
  </div> 
       
</div>
<?php if( have_rows('portfolios_gallery') ): ?>
  
    <?php while( have_rows('portfolios_gallery') ): the_row(); 
        $image = get_sub_field('image');
        ?>
   
        <div class="col-lg-6 col-md-6 col-12" data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="400">

   <div class="inner-galery">
               <div class="pic">
      <a href="<?php the_sub_field('image'); ?>" data-toggle="lightbox" data-gallery="gallery" class="lightbox holder"  style="background:url(<?php the_sub_field('image'); ?>);  ">
        
      </a>
      <img src="<?php bloginfo( 'template_url' ); ?>/images/eampty-10x8.png" alt="empty">

  </div> 
   </div>



     
       
</div>
 
       <?php endwhile; ?>

<?php endif; ?>




  </div>
</div>

 <div class="col-lg-4 col-md-12 col-md-12">
  <div class="post-wel-tex padding-right" data-aos="fade-left">

<h1><?php the_title();?></h1>
<p ><?php the_content();?></p>
<a target="_blanck" href="<?php the_field('view_url'); ?>" class="btn-viste">Visit Page</a>
<ul class="prot-list">
  <li><strong>Client:</strong> <span><?php the_field('client_name'); ?></span></li>
  <li><strong>Tags:</strong> <div class="tag">

    <?php
    $taxonomyName='post_tag';
    $terms_tags = get_terms($taxonomyName, array('hide_empty' => false));   
      foreach ($terms_tags as $term) {
    ?>
    <span> <?php echo $term->name;?></span>
      <?php } ?>
    </div></li>
  <li><strong>Category:</strong> <span><?php 
$terms = get_the_terms( $post->ID , 'product_categories' );

foreach ( $terms as $term ) {

echo $term->name;

}

?></span> </li>
  <li><strong>Date:</strong> <span><?php echo date('M');?> <?php echo date('j');?>  <?php echo date('Y');?> </span> </li>
</ul>





</div>

</div>

    

  </div>


    </div>
  </section>
<?php endwhile; ?>





<!-- wraper_search_main -->

<?php get_footer();?>