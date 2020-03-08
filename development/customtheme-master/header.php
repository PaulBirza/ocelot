<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package customtheme
 */
$global_keywords = 'global,keywords,go,here';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Styles -->
	<?php wp_head(); ?>
	<meta name="description" content="<?php
		$title_sep = " | ";
		if ( is_single() ) {
			single_post_title('', true);
			echo $title_sep;
			bloginfo('name');
			echo $title_sep;
			bloginfo('description');
		} else if( is_page() ) {
			the_title();
			echo $title_sep;
			bloginfo('name');
			echo $title_sep;
			bloginfo('description');
		} else {
			bloginfo('name');
			echo $title_sep;
			bloginfo('description');
		}
	?>" />
	<meta name="keywords" content="<?php
		if(is_single()) {
			// list tags as keywords
			$metatags = get_the_tags($post->ID);
			if(isset($metatags) && $metatags) {
				foreach ($metatags as $tagpost) {
					$mymetatag = apply_filters('the_tags', $tagpost->name);
					$keyword = utf8_decode($mymetatag); // Your filters...
					echo $keyword.",";
				}
			}
		}
		echo $global_keywords;
	?>" />
	<meta name="author" content="John Doe" />
	<meta name="contact" content="johndoe@domain.com" />
	<meta property="og:url" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="">
	<meta property="og:image" content="">
	<meta property="og:locale" content="en_us">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://use.typekit.net/cja4pij.css">
	
</head>

<body <?php body_class(); ?>>

	<!-- Fixed navbar -->
	<div class="navbar navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	  	<div class="top-links">
	  		<div class="top-links-wrapper">
	  			<div class="header-social-wrapper">
	  				<div class="social-icons social-icon-1"> 
	  					<?php 
	  					$sc_1_image = get_field('social_icon_1', 'option');
	  					if( !empty($sc_1_image) ): ?>
	  						<img src="<?php echo $sc_1_image; ?>" alt="" />
	  					<?php endif; ?>
	  				</div>
	  				<div class="social-icons social-icon-2"> 
	  					<?php 
	  					$sc_2_image = get_field('social_icon_2', 'option');
	  					if( !empty($sc_2_image) ): ?>
	  						<img src="<?php echo $sc_2_image; ?>" alt="" />
	  					<?php endif; ?>
	  				</div>
	  			</div>
	  		</div>

	  	</div>


	  	<div class="navbar-outter">
	  		  	<div class="navbar-wrapper">

	  			    <div id="header-logo" class="navbar-header">
	  			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	  			        <span class="sr-only">Toggle navigation</span>
	  			        <span class="icon-bar"></span>
	  			        <span class="icon-bar"></span>
	  			        <span class="icon-bar"></span>
	  			      </button>

	  			      <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/">
	  			      	<?php 
	  			      	$image = get_field('header_logo', 'option');
	  			      	if( !empty($image) ): ?>
	  			      		<img src="<?php echo $image; ?>" alt="" />
	  			      	<?php endif; ?>
	  			      </a>
	  			    </div>
	  			    <div class="header_text_field_one">
	  			    	<p><?php the_field('header_text_field_one', 'option'); ?></p>
	  			    </div>
	  			    <div class="header_text_field_two">
	  			    	<?php the_field('header_text_field_two', 'option'); ?>
	  			    </div>

	  				<div id="nav-bar-collapse" class="collapse navbar-collapse">
	  					<?php
	  						wp_nav_menu( array(
	  							'menu'              => 'primary',
	  							'theme_location'    => 'primary',
	  							'depth'             => 2,
	  							'container'         => false,
	  							'menu_class'        => 'nav navbar-nav',
	  							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	  							'walker'            => new wp_bootstrap_navwalker())
	  						);
	  					?>
	  				</div>
	  			</div>


	  	</div>




	  </div>
	</div>

	<!-- Page content -->
	<div id="main-container" class="container-fluid">
		<div class="main-row row">