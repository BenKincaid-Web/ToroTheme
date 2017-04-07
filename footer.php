<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ToroAMA
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info clear">
			<div class="related footercol">
                <h5>Related Sites</h5>
                <p><a href = "https://ama.org">ama.org</a></p>
                <p><a href = "https://csudh.edu">CSUDH.edu</a></p>
            </div>
                
            <div class="contact footercol">
                <h5>Contact Us</h5>
                <p>100 E. Victoria St. <br>
                    Carson CA, 90747 <br>
                    toroAMA.info@gmail.com
                </p>
            </div>
            
            <div class="follow footercol">
                <h5>Follow us</h5>
                 <a href="https://twitter.com/toros_ama/"><i class="fa fa-twitter contactlogos fa-2x" aria-hidden="true"></i></a>
                 <a href="https://www.facebook.com/dominguezhillsAMA/"><i class="fa fa-facebook contactlogos fa-2x" aria-hidden="true"></i></a>
                 <a href="https://www.instagram.com/toros_ama/"><i class="fa fa-instagram contactlogos fa-2x" aria-hidden="true"></i></a>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->





</div><!-- #page -->

<?php wp_footer(); ?>



<!-- SCROLLBAR JS CODE -->
 <script type="text/javascript">barWidth = "100%";

$( window ).resize(function() {
  var viewportWidth = $(window).width();

});
     
     
$(window).scroll(function() {
    toTop = $('#scrollbar').offset().top;
    docHeight = $(document).height()
    windowHeight = $( window ).height()
    
    
    barWidth = docHeight - toTop - windowHeight;
    
    barPerc = (barWidth/(docHeight - windowHeight)) * 100;
    if (barPerc < 0) {
        barPerc = 0;
    }
  cssPerc = barPerc + "%";
    console.log(barPerc);
  
    document.getElementById("scrollbar").setAttribute("style", "width:"+cssPerc);
    document.getElementById("scrollbar").style.width = cssPerc;
});
</script>
</body>
</html>
