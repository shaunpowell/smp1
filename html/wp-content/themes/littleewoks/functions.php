<?php

function my_render_ie_pie() { ?>
	<!--[if lte IE 8]>
	<style type="text/css" media="screen">
	   #your-css-elements-here {
	          behavior: url('http://smpcomputers.hostzi.com/wp-content/themes/littleewoks/pie/PIE.htc');
	    }
	</style>
	 
	<![endif]-->

	<?php
	}

add_action('wp_head', 'my_render_ie_pie', 8);

if ( function_exists('register_sidebars') )
    register_sidebars(1);
?>