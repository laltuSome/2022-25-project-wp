<?php get_header();?>

<!-- wraper_search_main -->


<div class="section blog-list-page">
<div class="container">
		<!-- row -->
	<div class="row">
       
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog_main_box">
                <?php while ( have_posts() ) : the_post();?>
                <!-- blog-article -->
                <article class="blog-item">
                    <div class="singel-holder">
                         <div class="title-post">
                                <h1><?php the_title();?></h1>
           
                                
                            </div>
                            <div class="postcts">
                          <div class="date">
                                  <i class="fa fa-calendar"></i>
                                    <?php echo date('j');?> <?php echo date('M');?> <?php echo date('Y');?>
                                </div>
                            <div class="date"> 
                                 <i class="fa fa-eye" ></i>
                                            
                                 <?php 
          echo getPostViews(get_the_ID());
?>
                            </div>
                                </div>
                        
                       
                        <div class="post-image" >
                        <?php the_post_thumbnail();?>
                                    
                        </div>
                        
                        
                        <div class="home-welcome-text">
                            <?php the_content();?>
      </div>
                        
                        
                        
                        
                        
                    </div>
                </article>
                <!-- blog-article -->
                </div>
                <?php endwhile;?>
                    <div class="post-nex">
<?php previous_post_link('%link', '<i class="fa fa-long-arrow-left"></i><span>Back to blog</span> '); ?> 
 <?php next_post_link('%link', '<span>Next Post</span> <i class="fa fa-long-arrow-right"></i>'); ?>
            </div>
            </div>
           
        </div>
           <!-- row --> 
			
        
           <!-- related-post-box -->
				<div class="related-post-box">
                    <h3>RELATED POST</h3>
			<div class="row">
		
			<?php
						$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
						if( $related ) foreach( $related as $post ) {
						setup_postdata($post); ?>
                        
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="post-holder">
      <div class="blogpic">
      <img src="<?php bloginfo( 'template_url' ); ?>/images/empty100x67.png" alt="empty">
      <a href="<?php the_permalink();?>" class="holder" style="background:url(<?php the_post_thumbnail_url('large');?>);  "></a>
      <div class="data">
      <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
      </div>
      </div>
      </div>
      </div>
             <?php }
						wp_reset_postdata(); ?>
                
            
   
				
				</div>
		 </div>
				<!-- related-post-box -->
        
		</div>
		
        
        
     
	</div>

<!-- wraper_search_main -->

<?php get_footer();?>