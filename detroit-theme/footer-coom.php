 
<?php global $theme_options;?>
<footer id="footer">

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
<script src="<?php bloginfo( 'template_url' ); ?>/js/aos.js" ></script>
 <script>
     AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
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

 <?php if (is_front_page()) { ?>
//homepage content
var counted = 0;
jQuery(window).scroll(function() {


  var oTop = jQuery('#counter').offset().top - window.innerHeight;
  if (counted == 0 && jQuery(window).scrollTop() > oTop) {
    jQuery('.count').each(function() {
      var $this = jQuery(this),
        countTo = $this.attr('data-count');
      jQuery({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});

//homepage content
  <?php } ?>


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
