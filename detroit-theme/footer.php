 
<?php global $theme_options;?>
<footer id="footer" class="footer">

  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
<a class="f-logo" href="">
  <img src="<?php bloginfo( 'template_url' ); ?>/images/footer-logo.png" alt="footer logo"></a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
    <div class="footer-content matchHeight">
      <h4>Subscribe Our Newsletter</h4>
         
         <div class="news-form">
 <?php echo do_shortcode('[mc4wp_form id="90"]');?>
         </div>
    </div>
    </div>

   

       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
    <div class="footer-content matchHeight">
<h4>Quick Links</h4>
 


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

 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
    <div class="footer-content matchHeight">

<h4>Our Services</h4>

<ul class="footer-menu">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'services-menu',
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
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
    <div class="footer-content matchHeight">
<h4>Get In Touch </h4>
  <ul class="addres-footer">
    
      <li><a class="ph-size" href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a></li>
        <li><a href="mailto:<?php echo $theme_options['email-footer'];?>"><?php echo $theme_options['email-footer'];?></a></li>
     
  </ul>
<ul class="socil-footer">
    <li><a href="<?php echo $theme_options['social-facebook'];?>"><i class="fa fa-facebook" ></i></a></li>
       <li><a href="<?php echo $theme_options['social-twitter'];?>"><i class="fa fa-twitter" ></i></a></li>
         <li><a href="<?php echo $theme_options['social-in'];?>"><i class="fa fa-linkedin" ></i></a></li>
          
</ul>
    </div>
    </div>


  
    </div>
  </div>
  <div class="foot-menu-copy">
    <div class="container">
      <div class="row justify-content-center">
    
<div class="text-copy">
            <p><?php echo $theme_options['footer-copyright'];?></p>
           </div>

     
          
          
      </div>
    </div>
  </div>
</footer>







<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js" ></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/baguetteBox.js" ></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/wow.js" ></script>

<script src='<?php bloginfo( 'template_url' ); ?>/js/typed.min.js'></script>
 <script>
     wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    </script>
<script type="text/javascript">
  //form submit message
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
      el.style.display = 'none';
    });
  }, false );
  //form submit message




    //nav
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




  //tab start
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" activetab", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " activetab";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//tab end

</script>

<?php wp_footer(); ?>
</body>
</html>
