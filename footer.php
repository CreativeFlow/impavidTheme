<footer>
  <div class="footerWrapper flex">
  		<div class="footerSocial">
  			<p>
  				<?php 
  				 // Custom widget Area Start
  				 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom Widget Area') ) : ?>
  				<?php endif;
  				// Custom widget Area End
  				?>
  			</p>
  			
  		</div>
  		<div class="footerCopyright"><p>Impavid Theme &copy; <a href="http://www.christinafung.com" target="_blank">Christina Fung</a> &amp; <a href="http://www.timjackwilkins.com" target="_blank">Tim Jack Wilkins</a> <?php echo date('Y'); ?></p>
      <p>Artwork &copy; Nielly Francoise</p></div>
  </div>

</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>