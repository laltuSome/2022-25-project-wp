


<?php get_header();?>



<section class="section blog-list-page">
<div class="container">

<div class="row">
    <div class="col-lg-12 co-md-12 col-12">

<?php while ( have_posts() ) : the_post();?>
  
<article class="courses-holder">
<h1><?php the_title();?></h1>
<div class="artical-data"><?php the_content();?></div>
</article>

 <?php endwhile; ?>
      
</div>
</div>
</div>
</section>



<!-- wraper_search_main -->

<?php get_footer();?>