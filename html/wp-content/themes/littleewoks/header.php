<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/js/focus.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

	<div id="topandmenu">
	<div id="topbariefix"></div>
	<div id="top">
		<div id="logo"></div><!-- {end logo} -->
		<div id="socialdetails">
			<a href="https://www.facebook.com/LittleEwoks">
			<img id="facebookimg">
			</a>
		
			<div id="twittericon">
				<a href="https://twitter.com/LittleEwoks" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @LittleEwoks</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div><!-- {end twittericon} -->
		</div><!-- {end socialdetails} -->	
		
		
	</div><!-- {end top} -->
	
	<div id="nav-pages">
	<ul>
	<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
	</ul>
	</div><!-- {end nav pages} -->
	</div> <!-- {end topandmenu} -->
	
	