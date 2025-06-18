

<?php get_header();?>



<section class="section blog-list-page2">
<div class="container">

<div class="row">
    <div class="col-lg-8 co-md-8 col-12">

<?php while ( have_posts() ) : the_post();?>
  
    <article class="post-holder">
    
<div class="artical-rigth">

   <div class="data-post">

        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
        <div class="articl-bar">
          
          <ul>
            <li><i class="fa fa-commenting-o" ></i><?php echo get_comments_number(); ?> comments </li>
            <li class="cat-lis"><i class="fa fa-tags" ></i><?php the_taxonomies();?></li>
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
   <div class="artical-data"><?php the_content();?></div>



<div class="comment-form">
  <?php comments_template();?>
</div>

</div>
      

  
    

  
    
      </article>

  
    <?php endwhile; ?>
      






</div>
    <div class="col-lg-4 co-md-4 col-12">

<?php get_sidebar();?>

    </div>


</div>


</div>

  

</section>



<!-- wraper_search_main -->

<?php get_footer();?>