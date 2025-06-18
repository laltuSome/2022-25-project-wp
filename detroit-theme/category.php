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

get_header(''); ?>

    <?php if ( have_posts() ) : ?>
<section class="section blog-list-page">
<div class="container">

<div class="row">
  <div class="col-lg-8 col-md-8 col-12">

<?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
        $ls_image2 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );
        ?>
  
       <article class="post-holder">
   
<div class="artical-rigth">

   <div class="data-post">

        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
        <div class="articl-bar">
          
          <ul>
            <li><i class="fa fa-commenting-o" ></i><?php echo get_comments_number(); ?> comments </li>
            <li class="cat-lis"><i class="fa fa-tags" ></i><?php the_category(); ?></li>
         <li><i class="fa fa-calendar" ></i><?php echo get_the_date('M');?> <?php echo get_the_date('j');?>  <?php echo get_the_date('Y');?> </li>
          </ul>
        </div>
           
      
</div>
  <div class="blogpic-holder">
  <div class="pic">
      <a href="<?php the_permalink();?>" class="holder" style="background:url(<?php the_post_thumbnail_url('large');?>);  ">
        
      </a>
      <img src="<?php bloginfo( 'template_url' ); ?>/images/10-6.png" alt="empty">

  </div> </div>
   <p><?php the_excerpt();?></p>

</div>
      

  
    

  
    
      </article>


  
    <?php   endwhile;?>

     <?php else : ?>
<p class="allert">Oh No! No posts found. Try a different search!</p>
<?php endif;?>
            

    






</div>

    <div class="col-lg-4 co-md-4 col-12">

<?php get_sidebar();?>

    </div>
</div>



</div>  

</section>



<!-- wraper_search_main -->

<?php get_footer();?>