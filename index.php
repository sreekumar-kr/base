<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>
  <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
</title>
<!-- BLOG NAME & DESCRIPTION FOR PAGE TITLE
The bloginfo('name'); code above places the name you typed in when you set up your wordpress site into the Page's SEO Title
This name can be edited in the Settings > General area of your wordpress admin dashboard under Site Title.
It is then follow by the bloginfo('description'); function, which places the site's Tagline found in the same dashboard settings area.
Page Titles are crucial for SEO and should contain important eywords for which you wish to rank the site and specific pages.
-->

<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
<!-- STYLESHEET URL
the get_stylesheet_uri(); function fetches your HTML stylesheet link in the head of your HTML page
this will help wordpress detect the stylesheet url/folder pathway for the currently activated theme
it's necessary because your themes stylesheet is now deeply nested within the wordpress software's many folders

Ensure that echo is added before the function in the php tag as the plain function does not generate the actual url but only fetches it
-->
<!-- GOOGLE FONTS
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

The Link above enables the Dancing Script font from Google fonts so we can set whatever text we want to use that font.
Google fonts are a great way to give your theme some custom typographic style. It just works!
-->

</head>

<body>

	<div id="container">
		
		<div id="header"><!-- Header Begins Here -->
			<h1>
	            <a href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
	            </a>
            </h1>
            <!-- BLOG NAME & URL
                The bloginfo('name'); function above generates the name you typed in when you set up your wordpress site
				This name can be edited in Settings > General within the WordPress admin dashboard
    
                The home_url(); function above generates the site's homepage URL wherever you place it in your code
			-->
			<h2 class="description"><?php bloginfo('description'); ?></h2>
            <!-- BLOG DESCRIPTION
                The bloginfo('description'); function fetches your Tagline the database which is editable in Settings > General
                You'll see I've made use of this function in the <title> in the <head> of the HTML template as well.
            -->
		</div>
		
		<div id="access" role="navigation">
		  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->
		
		<div id="content">		
			<div id="sidebar" class="left"><!-- Left Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
			</div>
			<br>
			<div id="middle-column"><!-- Main Content Begins Here -->
				<h3>Perfect for any blog and the starting point for theme development.</h3>
                <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/base.jpg" width="960" height="200" alt="Training Wheels" /></p>
                <!-- TEMPLATE DIRECTORY
				  The get_stylesheet_directory_uri(); is used to place a full url from the site's root directory all the way to the currently activated theme's directory.
				  It will generate something which looks like "http://www.mysite.com/wp-content/themes/themefoldername"
				  When placing content images using the IMG tag this wordpress function needs to be places just before the images directory
				  within the href as shown in the example above. Be sure to include the forwardslash after the function.
                  This function is used to link to other files in the theme directory like scripts, flash files, additional CSS files etc.
                  
                  Ensure that echo is added before the function in the php tag as the plain function does not generate the actual url but only fetches it
				-->
				<div class="features">
					<h2>Features</h2>
					<ul>
						<li>Custom Menu</li>
					</ul>
				</div>
			</div>
			
			<div id="sidebar" class="right"><!-- Right Sidebar Begins Here -->
				<h4>Sidebar Header</h4>
			</div>
			
			<div style="clear:both;"></div>
			
		</div><!-- Content Ends Here -->
		<hr>
		<div id="footer"><!-- Footer Content Begins Here -->
			<p>&copy; <?php bloginfo('name'); ?></p>
            <!-- BLOG NAME & URL
                Once again the bloginfo('name'); is used, and as illustrated can be used anywhere within your theme code
                to generate the Site Name content which you set in Settings > General within the dashboard.
            -->
		</div>
	
	</div>
	
</body>

</html>

