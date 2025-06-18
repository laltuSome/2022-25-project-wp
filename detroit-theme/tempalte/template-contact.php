<?php /* Template Name: About Template */ ?>

<?php get_header();?>

<section class="section section-minus mt-0"></section>

<?php /* Template Name: Contact Template */ ?>

<?php get_header();?>


<section class="section section-contact">
    <div class="container">

<div class="row">
      <div class="col-lg-4 col-md-4 col-12">
<div class="contact-holder">
<img src="<?php bloginfo( 'template_url' ); ?>/images/map.png" alt="addres">
<h4>Location</h4>
<p><?php echo $theme_options['address-footer'];?></p>
</div>
      </div>

       <div class="col-lg-4 col-md-4 col-12">
<div class="contact-holder">
<img src="<?php bloginfo( 'template_url' ); ?>/images/email.png" alt="Message">
<h4>Message Us</h4>
<p><a href="mailto:<?php echo $theme_options['email-footer'];?>"><?php echo $theme_options['email-footer'];?></a></p>
</div>
      </div>
<div class="col-lg-4 col-md-4 col-12">
<div class="contact-holder">
<img src="<?php bloginfo( 'template_url' ); ?>/images/ph.png" alt="addres">
<h4>Call Us</h4>
<p><a href="tel:<?php echo $theme_options['phone-footer1'];?>"><?php echo $theme_options['phone-footer1'];?></a></p>
</div>
      </div>
    </div>

</div>
</section>

<section class="section section-contact-form">
    <div class="container">

<div class="row no-gutters ">
     <div class="col-lg-5 col-md-5 col-12">
            <?php 
$image = get_field('contac_img');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="Maria's Nails">
            <?php endif; ?>
      </div>

      <div class="col-lg-7 col-md-7 col-12 bg-colors">
        <div class="form-holder">
            <h3 class="text-center">Get In Touch</h3>
<?php echo do_shortcode('[contact-form-7 id="159" title="Contact page"]');?>
        </div>
      </div>

     
  </div>
</div>
</section>




<?php get_footer();?>


<section class="section section-form overflow-visible">
	<div class="container">
    <div class="row">
    	<div class="col-lg-12 col-12">
    		
    		<div class="body-content text-center">
	<span class="samll-titel ">GET SEO</span>
			<h3 class="testmo-heading">Analysis of your website</h3>
	</div>
	<div class="fomr-home">
		<?php echo do_shortcode('[contact-form-7 id="89" title="Home Form"]');?>
	</div>
	<div class="callus-content">
<strong>or</strong>
<h4>Call Us for fast support to this number</h4>
<a href="#">800 2563 123</a>

	</div>


    	</div>

    </div>
</div>
</section>
	

<?php get_footer();?>