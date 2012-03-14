<div class="loop" id="post-<?php the_ID(); ?>">

<?php

if (strlen(the_title('','',false)) > 30) {

  $title_short = substr(the_title('','',false), 0, 30);

  preg_match('/^(.*)\s/s', $title_short, $matches);

  if ($matches[1]) $title_short = $matches[1];

  $title_short = $title_short.' ...';

  }

else

  {

  $title_short = the_title('','',false);

  }

?>

<h2>

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo $title_short ?></a>

</h2>

<?php if(get_post_meta($post->ID, "thumb-2", true)) {

		$size = getimagesize($_SERVER[""].get_post_meta($post->ID, "thumb-2", true)); ?>

		<img src="<?php echo get_post_meta($post->ID, "thumb-2", true); ?>" alt="<?php the_title(); ?>" width="<?php echo $size[0]; ?>" height="<?php echo $size[1]; ?>" class="alignleft" />

		<?php } ?>

<?php 
if ( function_exists('the_content_limit') ) the_content_limit(400, ""); ?>

<div class="meta">

<div class="readmore"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more - <?php the_title_attribute(); ?>">Read More</a></div>

<div class="comment"><?php comments_popup_link('[No Comments]', '[1 Comment]', '[% Comments]'); ?></div>

<div class="clear"></div></div>

</div>

</div>

