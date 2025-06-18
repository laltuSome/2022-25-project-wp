<?php get_header();?>


<section class="section blog-list-page">
<div class="container">

<div class="row">
	<div class="col-lg-8 col-md-8 col-12">

<?php
		    	   	global $wp_query, $meta ,$paged ,$post;    	    	
		    	   	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		           	$args['paged'] = $paged;
		           	$temp = $wp_query;
				   	$args = array (
				   		'post_type' => 'post',
				   		'cat' => $_GET['catid'],
				   		'paged' => $paged,
				   		'orderby' => 'ID',
				   		'order' => 'ASC',
				   	);
				   	$my_query = null;
				   	$my_query = new WP_Query($args);
				   	if( $my_query->have_posts() ):
		           	while ($my_query->have_posts()) : $my_query->the_post();
				   	?>
  
      <article class="post-holder">
		
<div class="artical-rigth">

   <div class="data-post">

      	<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
      	<div class="articl-bar">
      		
      		<ul>
      			<li><i class="fa fa-commenting-o" ></i><?php echo get_comments_number(); ?> comments </li>
      			<li class="cat-lis"><i class="fa fa-tags" ></i><?php the_category(); ?></li>
      			<li><i class="fa fa-calendar" ></i><?php echo date('M');?> <?php echo date('j');?>  <?php echo date('Y');?> </li>
      		</ul>
      	</div>
           
      
</div>
	<div class="blogpic-holder">
  <div class="pic">
  	  <a href="<?php the_permalink();?>" class="holder" style="background:url(<?php the_post_thumbnail_url('large');?>);  ">
  	  	
  	  </a>
  	  <img src="<?php bloginfo( 'template_url' ); ?>/images/empty-post.png" alt="empty">

  </div> </div>
   <p><?php the_excerpt();?></p>

</div>
      

  
    

  
    
      </article>

  
	<?php endwhile; ?>
					<!-- pagination -->
					<div class="pagination2">
						<?php if (function_exists("pagination")) { pagination($my_query->max_num_pages);} ?>
						<?php endif; $wp_query = null; $wp_query = $temp; ?>
					</div>

      






</div>
	<div class="col-lg-4 col-md-4 col-12">
<?php get_sidebar();?>
	</div>
</div>



</div>  

</section>



<!-- wraper_search_main -->

<?php get_footer();?>