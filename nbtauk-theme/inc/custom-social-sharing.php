<?php
/*
	http://stackoverflow.com/questions/12448134/social-share-links-with-custom-icons
	http://petragregorova.com/articles/social-share-buttons-with-custom-icons

	wp_enqueue_style('fontAwesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0', 'all');  

	use in template files:: <?php echo do_shortcode('[social_sharing]') ; ?>
*/

function social_sharing()
{ 
	extract(shortcode_atts(array(), $atts));	
	return'
	<!--<label class="social-sharing-label" for="social-open-link">Share This Article</label>
<input type="checkbox" id="social-open-link">-->
	<div id="social-sharing-container" class="sharing-this">

		<a class="social-sharing-icon social-sharing-icon-facebook" target="_new" href="http://www.facebook.com/share.php?u=' . urlencode(get_the_permalink()) . '&title=' . urlencode(get_the_title()). '"><i class="fa fa-facebook"></i></a>

		<a class="social-sharing-icon social-sharing-icon-twitter" target="_new" href="http://twitter.com/home?status='. urlencode(get_the_title()). '+'. urlencode(get_the_permalink()) . '"><i class="fa fa-twitter"></i></a>

	<a class="social-sharing-icon social-sharing-icon-pinterest" target="_new" href="https://pinterest.com/pin/create/button/?url=' . urlencode(get_the_permalink()) . '&media=' . urlencode(get_template_directory_uri()."/img/logo.png") . '&description=' . urlencode(get_the_title()). '"><i class="fa fa-pinterest"></i></a>

		<a class="social-sharing-icon social-sharing-icon-google-plus" target="_new" href="https://plus.google.com/share?url=' . urlencode(get_the_permalink()) . '"><i class="fa fa-google-plus"></i></a>

		<a class="social-sharing-icon social-sharing-icon-linkedin" target="_new" href="http://www.linkedin.com/shareArticle?mini=true&url=' . urlencode(get_the_permalink()) . '&title=' . urlencode(get_the_title()) . '&source=' . get_bloginfo("url") . '"><i class="fa fa-linkedin"></i></a>

		<a class="social-sharing-icon social-sharing-icon-tumblr" target="_new" href="http://www.tumblr.com/share?v=3&u=' . urlencode(get_the_permalink()) . '&t=' . urlencode(get_the_title()). '"><i class="fa fa-tumblr"></i></a>

		<a class="social-sharing-icon social-sharing-icon-email" target="_new" href="mailto:?subject=' . urlencode(get_the_permalink()) . '&body=Check out this article I came across '. get_the_permalink() .'"><i class="fa fa-share"></i></a>
	</div>

';
}
add_shortcode("social_sharing", "social_sharing");
?>