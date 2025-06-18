<?php /* Template Name: Contact Template */ ?>

<?php get_header();?>

<section class="section section-contact">
	<div class="container">

<div class="row align-items-center">
    <div class="col-12">
             <div class="wel-text-contact">

        <h1><?php the_field('page_heading'); ?></h1>
             </div>
    </div>
     <div class="col-lg-6 col-md-12 col-12" data-aos="fade-right" data-aos-easing="ease" data-aos-delay="200">
        <div class="wel-text-contact">
    
     
        <div class="forms">
            <?php echo do_shortcode('[contact-form-7 id="519" title="contact"]');?>
        </div>
    </div>
  </div>
 <div class="col-lg-6 col-md-12 col-12" data-aos="fade-left" data-aos-easing="ease" data-aos-delay="200">
<div class="wel-text-contact">
  <p> <?php the_field('page_desc'); ?> </p>

<ul class="contact-info">
    <li>
<div class="info-icon"><i class="fa fa-phone"></i></div>
       <div class="info-data"> 
        <strong> Pam CEO (Sutton Coldfield)</strong> <a href="tel:<?php the_field('england'); ?>"><?php the_field('england'); ?></a> - England Lead IQA  
    </div>

    </li>

<li>
<div class="info-icon"><i class="fa fa-phone"></i></div>
      <div class="info-data">   <strong> Kiran (Leicester)</strong>  <a href="tel:<?php the_field('spain'); ?>"><?php the_field('spain'); ?></a>  - Spain Branch
      </div> </li>

<li>
<div class="info-icon"><i class="fa fa-phone"></i></div>
    <div class="info-data">   <strong> Grace (NowBrow)</strong> <a href="tel:<?php the_field('poland'); ?>"><?php the_field('poland'); ?></a> - Poland Branch </div>
</li>

<li>
<div class="info-icon"><i class="fa fa-phone"></i></div>
   <div class="info-data">    <strong> Tina (Lichfeild)</strong> <a href="tel:<?php the_field('england__vtct'); ?>"><?php the_field('england__vtct'); ?></a> -  England  VTCT Tutor  </div></li>

<li>
    <div class="info-icon"><i class="fa fa-envelope"></i></div>
     <div class="info-data">  <strong> E-mail address</strong> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div></li>
</ul>

<ul class="footer-social text-left justify-content-start">

<li><a class="facebook"  href="<?php echo $theme_options['social-facebook'];?>"><i class="fa fa-facebook"></i></a></li>
    <li><a  class="twitter" href="<?php echo $theme_options['social-twitter'];?>"><i class="fa fa-twitter"></i> </a></li>
     <li><a class="youtube" href="<?php echo $theme_options['social-youtube'];?>"><i class="fa fa-youtube-play"></i> </a></li>
      <li><a class="instagram" href="<?php echo $theme_options['social-instagram'];?>"><i class="fa fa-instagram"></i> </a></li>
            <li><a class="linkedin" href="<?php echo $theme_options['social-in'];?>"><i class="fa fa-linkedin"></i> </a></li>



</ul>


</div>
 </div>
 
</div>
</div>

</section>






<?php get_footer();?>