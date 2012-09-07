<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage flexopotamus
 * @since flexopotamus 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'flexopotamus' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?2" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12777638-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
	<!-- Hook up FitVids-->
	<script type="text/javascript">	
		$(window).load(function() {
			$(".footer-info-container,.entry-content").fitVids();
		});
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<div id="drop-section-nav"> 		
		<div id="drop-nav" class="wrap">
			<ul class="drop-nav-list">			
				<li class="top-agency agrilife"><a href="http://agrilife.org/">Texas A&amp;M AgriLife</a></li>
				<?php 
					wp_nav_menu( array( 
						'container_class' => 'align-right', 
						'theme_location' => 'top-header',
						'container' => '', 
						'items_wrap' => '%3$s',
						'depth' => '1' ) 
					); ?>				
			</ul>				
		</div><!-- #drop-nav -->	
	</div>	
	<div class='wrap clearfix'>
	<header>
		<h1 class="site-title one-of-3 ir">AgriLife.org</h1>
		<!-- <h1 class="site-title one-of-3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>AgriLife</span><img src="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" alt="AgriLife Logo" title="AgriLife Logo" /></a></h1>-->
	</header>
	
	<nav id="access" role="navigation">		
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'agriflex' ); ?>"><?php _e( 'Skip to content', 'agriflex' ); ?></a></div>
		
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>

		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>  
		
	</nav><!-- .access -->