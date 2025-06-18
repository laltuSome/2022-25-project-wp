<?php
/**
 * The template for displaying Tag pages
 *
 * @package WordPress
 * @subpackage OrangeSheep
 * @since OrangeSheep 1.0
 */

get_header(); ?>


sasas
   <?php if(have_posts()):?>
<section class="section blog-list-page">
<div class="container">
<!--<div class="row">
  <div class="col-12">
    <h2 class="page-titel-tag"><?php printf( __( 'Tag: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); ?></h2>
  </div>
</div>-->
<div class="row">
  <div class="col-lg-9 col-md-12 col-12">
    <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
        $ls_image2 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );
        ?>
  
       <article class="post-holder">
    <div class="athor-left">
    <?php
    $user = wp_get_current_user();

    if ( $user ) :
    ?>
    <img class="aut-img" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
    <?php else: ?>
    
    <?php endif; ?>

    <div class="link-athotr">
    <div><?php echo get_the_author_meta('nickname', $author_id);?></div>
    <span><?php echo the_author_meta('description');?></span>

    </div>
    </div>
<div class="artical-rigth">

   <div class="data-post">

        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
        <div class="articl-bar">
          
          <ul>
            <li><i class="fa fa-commenting-o" ></i><?php echo get_comments_number(); ?> comments </li>
            <li class="cat-lis"><i class="fa fa-tags" ></i><?php the_category(); ?></li>
            <li><i class="fa fa-calendar" ></i><?php echo date('M');?><?php echo date('j');?>  <?php echo date('Y');?> </li>
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

  
    <?php   endwhile;?>
          <!-- <button type="button" class="btn btn-lg btn-primary gray-button">Newer</button>
          <button type="button" class="btn btn-lg btn-primary find-btn">Older</button> -->
          <?php next_posts_link(__('Newer', 'kubrick')) ?>
          <?php previous_posts_link(__('Older', 'kubrick')) ?>
        </div>
  
      <?php endif;?>
  <div class="col-lg-3 co-md-3 col-12">
<?php get_sidebar();?>
  </div>
    </div>
  </div>
</section>
<!-- Recent Blog Area Close -->
<?php get_footer();?>
