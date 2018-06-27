<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer>
		<div class="container">
			<div class="footerLogo">
			 <img src="/wp-content/themes/BCBHTech2018/images/logo_gray.png" />
		  </div>
      <div class="footerSocial">
        <a href="https://www.facebook.com/bcbhtech/">
          <img src="/wp-content/themes/BCBHTech2018/images/fb_icon.svg" />
        </a>
        <a href="https://www.linkedin.com/company/bcbh-technology-services">
          <img src="/wp-content/themes/BCBHTech2018/images/ln_icon.svg" />
        </a>
      </div>
		  <div class="footerNavigation">
			 <ul>
  				<a href="#about">
                <li>
                  About
                </li>
              </a>
              <a href="#websites">
                <li>
                  Work
                </li>
              </a>
              <a href="#wedo">
                <li>
                  Services
                </li>
              </a>
  			</ul>
		  </div>
  		<div class="footerBottom">
  			Copyright 2018 BCBH Technologies
  		</div>
		</div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 50
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } 
          // This next section is for accessibility - add in later if this is desired
          // else {
          //   $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          //   $target.focus(); // Set focus again
          // };
        });
      }
    }
  });
</script>
<script>
  window.onscroll = function() {barFill()};

function barFill() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("bar").style.width = scrolled + "%";
}
</script>
<script>
  var mobileNavActive = false;
  $('#mobileNavButton').click(function(e){
    e.preventDefault();
    if (mobileNavActive === false) {
      $('.navigation').css('display', 'block');
      $('.navBtnContainer').addClass("change");
      mobileNavActive = true;
    } else {
      $('.navigation').css('display', 'none');
      $('.navBtnContainer').removeClass("change");
      mobileNavActive = false;
    }
  });
  $('.navigation a').click(function(e){
    if (mobileNavActive === true) {
      $('.navigation').css('display', 'none');
      $('.navBtnContainer').removeClass("change");
      mobileNavActive = false;
    }
  });
</script>
</body>
</html>
