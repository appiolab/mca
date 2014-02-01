<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mca
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            
		<div class="site-info">
			<?php do_action( 'mca_credits' ); ?>
                    <div class="left">
                        Copyright &copy; 2014 - MCA
                    </div>
                    <div class="right">                        			
                        <?php printf( __( 'Design by: %1$s %2$s.', 'mca' ), '', '<a href="http://www.thinkrnr.com" rel="designer" >ThinkRNR</a>' ); ?><br>
			<?php printf( __( 'Developed by: %1$s %2$s.', 'mca' ), '', '<a href="http://www.arifulhaque.com" rel="developer" >Ariful Haque</a>' ); ?>
                    </div>			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>