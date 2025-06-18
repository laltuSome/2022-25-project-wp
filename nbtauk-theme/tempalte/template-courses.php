<?php /* Template Name: courses Template */ ?>

<?php get_header();?>



<section class="section section-courses-page">
<div class="container">



<?php  
$i = 0;
  $cats = get_categories(
  array(
    'orderby' => 'description',
    'order'   => 'ASC',
    'hide_empty' => false
)
);  


  foreach ($cats as $cat) {  
   
    $cat_id= $cat->term_id; 

    $i++; 
  ?> 
  <div class="row no-gutters align-items-center"> 
		  <div class="col-lg-4 col-md-4 col-sm-12 col-12 custm-order-img<?php echo $i;?>" data-aos="zoom-in">
<div class="images-holder">
 <div class="pic">
  	  <div class="holder"  style="background:url(<?php the_field('curse_image', 'term_'. $cat_id); ?>);"></div>
  	  <img src="<?php bloginfo( 'template_url' ); ?>/images/empty2.png" alt="empty">
 </div> 
</div>
     </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-12 custm-order-content<?php echo $i;?>" data-aos="fade-in">
      	<div class="cat-data">
      		<h4 class="titels roboto"><?php echo $cat->name; ?></h4>	
      	<?php the_field('category_text', 'term_'. $cat_id); ?>
      	<a href="<?php echo get_category_link( get_cat_ID( $cat->name )); ?>" class="btn-line">Read More <i class="fa fa-angle-right"></i></a>
      	</div>
      </div>
</div>
<?php } wp_reset_query(); ?>



</div>
</section>



<?php get_footer();?>