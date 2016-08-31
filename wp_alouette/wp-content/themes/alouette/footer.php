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
					$bottom_page_query = new WP_Query( 'pagename=bottom-page-1' );

					// loop through the query (even though it's just one page)
					while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
    					the_content();
					endwhile;

					// reset post data (important, don't leave out!)
					wp_reset_postdata();
				?>
				<!-- <p class="bottomBarText bottomBarTextTitle">ALOUETTE CHILDCARE - CROW NEST</p>
				<p class="bottomBarText">3 Rodborough Ave, Crows Nest, NSW 2065</p>
				<p class="bottomBarText">P (02) 8203 4550 / F (02) 9667 0518</p>
				<p class="bottomBarText"><a href="mailto:info@alouette.com.au">info@alouette.com.au</a></p> -->
			</div>
			<div id="bottomContentBar">
				<?php
					$bottom_page_query = new WP_Query( 'pagename=bottom-page-2' );

					// loop through the query (even though it's just one page)
					while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
    					the_content();
					endwhile;

					// reset post data (important, don't leave out!)
					wp_reset_postdata();
				?>
				<!-- <p class="bottomBarText bottomBarTextTitle">ALOUETTE CHILDCARE - EAST LAKES</p>
				<p class="bottomBarText">4 Florence Ave, Eastlakes, NSW 2018</p>
				<p class="bottomBarText">P (02) 8203 4550 / F (02) 9667 0518</p>
				<p class="bottomBarText"><a href="mailto:info@alouette.com.au">info@alouette.com.au</a></p> -->
			</div>
			<div id="bottomContentBar">
				<?php
					$bottom_page_query = new WP_Query( 'pagename=bottom-page-3' );

					// loop through the query (even though it's just one page)
					while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
    					the_content();
					endwhile;

					// reset post data (important, don't leave out!)
					wp_reset_postdata();
				?>
				<!-- <p class="bottomBarText bottomBarTextTitle">ALOUETTE CHILDCARE - CHIFLEY</p>
				<p class="bottomBarText">65 Macquarie St, Chifley, NSW 2036</p>
				<p class="bottomBarText">P (02) 8203 4550 / F (02) 9667 0518</p>
				<p class="bottomBarText"><a href="mailto:info@alouette.com.au">info@alouette.com.au</a></p> -->
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