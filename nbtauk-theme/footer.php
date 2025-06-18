 
<?php global $theme_options;?>



<footer>
	<div class="container">
		<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="footer-logo" data-aos="zoom-in" >
			<div class="playfair font-footer">Natural</div>
			   <a class="footerlogo" href="<?php echo home_url();?>">

<img src="<?php echo $theme_options['footer-logo']['url'];?>" alt="Logo" width="171" height="85">
 </a>
 	</div>
		<ul class="footer-social">

<li><a class="facebook"  href="<?php echo $theme_options['social-facebook'];?>"><i class="fa fa-facebook"></i></a></li>
    <li><a  class="twitter" href="<?php echo $theme_options['social-twitter'];?>"><i class="fa fa-twitter"></i> </a></li>
     <li><a class="youtube" href="<?php echo $theme_options['social-youtube'];?>"><i class="fa fa-youtube-play"></i> </a></li>
      <li><a class="instagram" href="<?php echo $theme_options['social-instagram'];?>"><i class="fa fa-instagram"></i> </a></li>
            <li><a class="linkedin" href="<?php echo $theme_options['social-in'];?>"><i class="fa fa-linkedin"></i> </a></li>



</ul>


	
		</div>
		</div>
	</div>
		<div class="foter-nav">
	<div class="container">
		<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


<ul class="footer-menu">
	 <?php
$args = array(
'theme_location'   => '',
'menu'         => 'footer-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
</ul>


		</div>

		</div>
	</div>
	
	</div>
	
		
	<div class="foot-menu-copy">
		<div class="container">
			<div class="row align-items-center">
				<ul class="small-link">
					<li><a href="#">Terms & Conditions </a></li>
					<li><a href="#">Site Map</a></li>
				</ul>
<div class="text-copy">
						<p><?php echo $theme_options['footer-copyright'];?></p>
					</div>

	
					
					
			</div>
		</div>
	</div>
</footer>



<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js" ></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/aos.js" ></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/baguetteBox.js" ></script>
 <script>
     AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
    </script>
<script type="text/javascript">

	//vide popuo
jQuery(document).ready(function() {

var $videoSrc;  
jQuery('.video-btn').click(function() {
    $videoSrc = jQuery(this).data( "src" );
});
console.log($videoSrc);

jQuery('#myModal').on('shown.bs.modal', function (e) {

jQuery("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})

jQuery('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    jQuery("#video").attr('src',$videoSrc); 
}) 

});
//vide popuo

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
 
}

//acordian
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active-ac");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

jQuery(function () {
    jQuery("ul.nav-tabs li:first a").addClass("active");
    jQuery(".tab-content .tab-pane:first").addClass("show active");

});

 baguetteBox.run('.tz-gallery', { animation: 'slideIn'});



function openCrose(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
//mouse



</script>

<?php wp_footer(); ?>
</body>
</html>
