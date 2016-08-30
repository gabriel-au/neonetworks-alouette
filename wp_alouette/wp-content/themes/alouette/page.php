<?php
/* Template Name: Custom Template
MultiEdit: Subcontent,Right,Bottom,Left
*/
?>
<html>
	<head>
		<title>Allouette Child Care</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css"/>
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- MAIN DIV START -->
		<div>
			<!-- CONTAINER SECTION - MAIN CONTENT START -->
			<div id="container">
				<!-- TOP BAR START -->
				<div id="topBar">
					<!-- TOP BAR CONTAINER START -->
					<div id="topBarContainer">
						<!-- TOP BAR TITLE START -->
						<div id="topBarContent">
							<p class="topContentTitle">
								<?php echo get_option('main_phone'); ?>
								<!-- 1300 ALOUETTE (1300 999 999) -->
							</p>
						</div>
						<a class="linkSocialMediaFB" id="linkSocialMedia" href="<?php echo get_option('facebook'); ?>" target="_blank"></a>
						<a class="linkSocialMediaTW" id="linkSocialMedia" href="<?php echo get_option('twitter'); ?>" target="_blank"></a>
						<a class="linkSocialMediaLDN" id="linkSocialMedia" href="<?php echo get_option('instagram'); ?>" target="_blank"></a>
						<!-- TOP BAR TITLE END -->
					</div>
					<!-- TOP BAR CONTAINER END -->
				</div>
				<!-- TOP BAR END -->
				<!-- MENU BAR START -->
				<div id="menuBar">
					<!-- MENU BAR LOGO START -->
					<div id="menuBarLogo">
						<?php mytheme_custom_logo(); ?>
					</div>
					<!-- <div id="menuBarLogoSubtitle">Alouette Child Care</div> -->
					<!-- MENU BAR LOGO END -->
					<!-- MENU BAR LIST START -->
					<div id="menuBarList">
						<div id="menuwrapper">
							<ul>
								<!-- <li><a href="#" style="border-top: none;">HOME</a></li> -->
								<?php wp_list_pages( '&title_li='); ?>
								
							</ul>
						</div>
					</div>
					<!-- MENU BAR LIST END -->
				</div>
				<!-- MENU BAR END -->
				<!-- MAIN CONTENT START -->
				<!-- <div>Test</div> -->
				<div id="mainContent">
					<?php mytheme_post_thumbnail(); ?>

					<div id="mainContentBody">
						<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post();
  								
								get_template_part( 'content', get_post_format() );
  
							endwhile; endif; 
						?>
					</div>
				</div>
				<!-- MAIN CONTENT END -->
			</div>
			<!-- CONTAINER SECTION - MAIN CONTENT END -->
			<!-- CONTAINER SECTION - BOTTOM CONTENT START -->
			</div>
			<div id="container">
				<div id="bottomContent">
					<?php multieditDisplay('Subcontent'); ?>
				</div>
			</div>
			<!-- CONTAINER SECTION - BOTTOM CONTENT END -->
			<!-- CONTAINER SECTION - BOTTOM CONTENT END -->
			<div id="bottomContainer">
				<div id="bottomBar">
					<div id="bottomContent">
						<p class="bottomBarText bottomBarTextTitle">ALOUETTE CHILDCARE - CROW NEST</p>
						<p class="bottomBarText">3 Rodborough Ave, Crows Nest, NSW 2065</p>
						<p class="bottomBarText">P (02) 8203 4550 / F (02) 9667 0518</p>
						<p class="bottomBarText"><a href="mailto:info@alouette.com.au">info@alouette.com.au</a></p>
					</div>
					<div id="bottomContent">
						<p class="bottomBarText bottomBarTextTitle">ALOUETTE CHILDCARE - EAST LAKES</p>
						<p class="bottomBarText">4 Florence Ave, Eastlakes, NSW 2018</p>
						<p class="bottomBarText">P (02) 8203 4550 / F (02) 9667 0518</p>
						<p class="bottomBarText"><a href="mailto:info@alouette.com.au">info@alouette.com.au</a></p>
					</div>
					<div id="bottomContent">
						<p class="bottomBarText bottomBarTextTitle">ALOUETTE CHILDCARE - CHIFLEY</p>
						<p class="bottomBarText">65 Macquarie St, Chifley, NSW 2036</p>
						<p class="bottomBarText">P (02) 8203 4550 / F (02) 9667 0518</p>
						<p class="bottomBarText"><a href="mailto:info@alouette.com.au">info@alouette.com.au</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- MAIN DIV END -->
		<?php wp_footer(); ?>
	</body>
</html>