<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package AlouetteChildCare
 * @since Alouette 1.0
 */
?>
	<!-- CONTAINER SECTION - BOTTOM CONTENT END -->
	<div id="bottomContainer">
		<div id="bottomBar">
			<div id="bottomContentBar">
				<?php
					$bottom_page_query = new WP_Query( array(
						'pagename' => 'bottom-page-1',
						'post_status' => array( 'private' )) );
						
					// loop through the query (even though it's just one page)
					while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
    					the_content();
					endwhile;

					// reset post data (important, don't leave out!)
					wp_reset_postdata();
				?>
			</div>
			<div id="bottomContentBar">
				<?php
					$bottom_page_query = new WP_Query( array(
						'pagename' => 'bottom-page-2',
						'post_status' => array( 'private' )) );

					// loop through the query (even though it's just one page)
					while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
    					the_content();
					endwhile;

					// reset post data (important, don't leave out!)
					wp_reset_postdata();
				?>
			</div>
			<div id="bottomContentBar">
				<?php
					$bottom_page_query = new WP_Query( array(
						'pagename' => 'bottom-page-3',
						'post_status' => array( 'private' )) );

					// loop through the query (even though it's just one page)
					while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
    					the_content();
					endwhile;

					// reset post data (important, don't leave out!)
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>