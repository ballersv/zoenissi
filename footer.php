<!-- footer -->
</div>  
<footer>

<div class="container">
	<div class="row">
        <div class="col-lg-12">
            <ul class="nav-justified text-center">
                <li><a href="/" class="white"><p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p></a></li>
                <li><a href="#" class="white">Terms of Service</a></li>
                <li><a href="#" class="white">Privacy</a></li>
            </ul>
        </div>
    </div>

</div>
</footer>
<?php wp_footer(); ?>
<!-- /footer -->

  <a href="#" class="scrollup hidden-sm hidden-xs"></a>
  
  
  
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button  class="btn btn-raised btn-primary" style="will-change: inherit">Search</button>
    </form>
</div>

<!--end id wrapper-->  
</div>
     
    
     
   
     
    
     
     
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/material.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/ripples.min.js"></script>
   
    
      <!--nav-scroll-left-->
      <script>
     $(document).ready(function () {
		var trigger = $('.hamburger'),
			overlay = $('.overlay'),
		   isClosed = false;
	  
		  trigger.click(function () {
			hamburger_cross();      
		  });
	  
		  function hamburger_cross() {
	  
			if (isClosed == true) {          
			  overlay.hide();
			  trigger.removeClass('is-open');
			  trigger.addClass('is-closed');
			  isClosed = false;
			} else {   
			  overlay.show();
			  trigger.removeClass('is-closed');
			  trigger.addClass('is-open');
			  isClosed = true;
			}
		}
		
		$('[data-toggle="offcanvas"]').click(function () {
			  $('#wrapper').toggleClass('toggled');
		});  
	  });
     </script>
      <!--search-->
      
	  <script>
      $(function () {
			$('a[href="#search"]').on('click', function(event) {
				event.preventDefault();
				$('#search').addClass('open');
				$('#search > form > input[type="search"]').focus();
			});
			
			$('#search, #search button.close').on('click keyup', function(event) {
				if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
					$(this).removeClass('open');
				}
			});
			
			
			//Do not include! This prevents the form from submitting for DEMO purposes only!
			$('form').submit(function(event) {
				event.preventDefault();
				return false;
			})
		});
      
      
      </script>
      <!--dropdown animate--> 
      <script>
    $(function(){
    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function(e){
        e.preventDefault();
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500, function(){
            //On Complete, we reset all active dropdown classes and attributes
            //This fixes the visual bug associated with the open class being removed too fast
            $('.dropdown').removeClass('open');
            $('.dropdown').find('.dropdown-toggle').attr('aria-expanded','false');
        });
    });
	});
     
     </script>
      <!--carousel-->
  	  <script>
    /* Demo Scripts for Bootstrap Carousel and Animate.css article
		* on SitePoint by Maria Antonietta Perna
		*/
		(function( $ ) {
		
			//Function to animate slider captions 
			function doAnimations( elems ) {
				//Cache the animationend event in a variable
				var animEndEv = 'webkitAnimationEnd animationend';
				
				elems.each(function () {
					var $this = $(this),
						$animationType = $this.data('animation');
					$this.addClass($animationType).one(animEndEv, function () {
						$this.removeClass($animationType);
					});
				});
			}
			
			//Variables on page load 
			var $myCarousel = $('#carousel-example-generic'),
				$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
				
			//Initialize carousel 
			$myCarousel.carousel();
			
			//Animate captions in first slide on page load 
			doAnimations($firstAnimatingElems);
			
			//Pause carousel  
			$myCarousel.carousel('pause');
			
			
			//Other slides to be animated on carousel slide event 
			$myCarousel.on('slide.bs.carousel', function (e) {
				var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
				doAnimations($animatingElems);
			});  
			
		})(jQuery);
    
    </script>
    
    <!--scroll to top--> 
    <script>
	  $(document).ready(function () {
	  
	  $(window).scroll(function () {
		  if ($(this).scrollTop() > 100) {
			  $('.scrollup').fadeIn();
		  } else {
			  $('.scrollup').fadeOut();
		  }
	  });
	  
	  $('.scrollup').click(function () {
		  $("html, body").animate({
			  scrollTop: 0
		  }, 600);
		  return false;
	  });
	  
	  });
    
    </script>
    
    
    
    
     
    
 </body>
</html>