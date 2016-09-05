<?php
/* Template Name: Custom Template
MultiEdit: MenuContent,Right,Bottom,Left
*/
?>
<!-- <html>
	<head>
		<title>Allouette Child Care</title> -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css"/>
		<?php wp_head(); ?>
	<!-- </head>
	<body> -->
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
							</p>
						</div>
						<?php

							$output = get_option('facebook');

							if (trim($output) != "") {
								echo '<a class="linkSocialMediaFB" id="linkSocialMedia" href="';
								echo $output;
								echo '" target="_blank"></a>';
							}

							$output = get_option('twitter');

							if (trim($output) != "") {
								echo '<a class="linkSocialMediaTW" id="linkSocialMedia" href="';
								echo $output;
								echo '" target="_blank"></a>';
							}

							$output = get_option('instagram');

							if (trim($output) != "") {
								echo '<a class="linkSocialMediaLDN" id="linkSocialMedia" href="';
								echo $output;
								echo '" target="_blank"></a>';
							}

						?>
						<!-- TOP BAR TITLE END -->
					</div>
					<!-- TOP BAR CONTAINER END -->
				</div>
				<!-- TOP BAR END -->
				<div id="containerMenu">
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
							<div id="menu">
								<ul id="accordion">
									<!-- <li><a href="#" style="border-top: none;">HOME</a></li> -->
									<?php wp_list_pages( '&title_li='); ?>
									
								</ul>
							</div>
						</div>
						<div id="menuBarContentTop">
							<?php multieditDisplay('MenuContent'); ?>
						</div>
						<!-- MENU BAR LIST END -->
					</div>
					<!-- MENU BAR END -->
					<!-- MENU BAR CONTENT START -->
					<?php 
						$output = multieditDisplay('Left', true);

						if (trim($output) != "") {
							$contentVal = substr($output, 0, 2);

							echo '<div id="menuBarContentBottom">';

							if (trim($contentVal) == "<p" || trim($contentVal) == "<h") {
								echo '<div class="contentText">';
								echo $output;
								echo '</div>';
							} else {
								echo $output;
							}

							echo '</div>';
						}
					?>
					<!-- MENU BAR CONTENT END -->
				</div>
				<!-- MAIN CONTENT START -->
				<div id="mainContent">
					<div id="mainContentBody">
						<?php
							$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );

						    echo get_the_post_thumbnail($current_page->ID);
						    echo '</div>';

						    echo '<div id="mainContentBody">';
						    echo $current_page->post_content;
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
					<?php multieditDisplay('Bottom'); ?>
				</div>
			</div>
		<?php get_footer(); ?>
	</body>
</html>