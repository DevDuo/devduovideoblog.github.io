          <div class="small-12 footer gray9">
            <!--go to footer.jade file to edit content in the body.-->
            <div class="row">
              <div class="medium-12 columns footer-links"><img src="../../img/logoGray.svg" class="hide-for-small-only footer-logo columns small-1">
                <ul class="inline-list right social-icons">
                  <li><a href="tel:7138880070" class="fa fa-phone"></a></li>
                  <li><a href="mailto:joey@houstonglooringone.com" class="fa fa-globe"></a></li>
                  <li><a href="." data-reveal-id="map" class="fa fa-map"></a></li>
                  <li><a href="" class="fa fa-facebook"></a></li>
                  <li><a href="" class="fa fa-twitter-square"></a></li>
                  <li><a href="" class="fa fa-youtube-play"></a></li>
                  <li><a href="" class="fa fa-google-plus-square"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- close the off-canvas menu--><a class="exit-off-canvas"></a>
      </div>
    </div>
<footer>
      <!-- These are the scripts needed to run all basic plugins for our sites.-->
    </footer>
    <script>
      //This activates foundations Javascripts
      $(document).foundation({
      	tab: {
      		callback : function (tab) {
      			console.log(tab);
      		}
      	}
      });

      //This enables the FastClick javascript which is necessary for Owlcarousel
      window.addEventListener('load', function() {
      	new FastClick(document.body);
      }, false);

      // run foundation.js function
      $(document).foundation();
      $('a[href^="#bottom"], a[href^="#top"]').on('click', function(event) {

      		var target = $( $(this).attr('href') );

      		if( target.length ) {
      				event.preventDefault();
      				$('html, body').animate({
      						scrollTop: target.offset().top
      				}, 1000);
      		}

      });
      // Main Owl Carousel Settings
      	$(document).ready(function(){
      		$(".owl-carousel").owlCarousel();
      	});

      	$('.owl-carousel').owlCarousel({
      		loop: true,
      		margin:0,
      		nav:false,
      		dots: true,
      		autoplay: true,
      		autoplayTimeout: 3000,
      		autoplaySpeed: 4500,
      		responsive:{
      			0:{
      				items:1
      			},
      			600:{
      				items:1
      			},
      			1000:{
      				items:1
      			}
      		}
      	})
    </script>

    <?php wp_footer(); ?>
  </body>
</html>