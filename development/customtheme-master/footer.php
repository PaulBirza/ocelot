<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package customtheme
 */
?>
		</div><!-- .container -->

	</div><!-- .main-row -->

	<div id="footer">
		<div id="footer-container" class="container-fluid">
			<div id="footer-row" class="row">
				<div class="col-md-3"></div>
				<div class="footer-col footer-col-1 col-md-2">
					<p>2950 N. Harwood Street, Suite 2200  |  Dallas, TX 75201</p>

				</div>
				<div class="footer-col footer-col-2 col-md-4">
					<p class="text-muted">&copy; Copyright <?php echo date('Y'); ?> Ocelot Energy Management. Some Rights Reserved. <?php printf( __( 'Website by %1$s.', 'customtheme' ), '<a href="https://www.enercominc.com/" rel="author" target="_blank">EnerCom, Inc.</a>' ); ?></p>
				</div>
				<div class="col-md-3"></div>
			</div>
			
		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>