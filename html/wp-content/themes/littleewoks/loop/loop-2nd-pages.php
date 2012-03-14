
<div class="re-post" id="post-<?php the_ID(); ?>">
<?php
if (strlen(the_title('','',false)) > 65) {
  $title_short_third = substr(the_title('','',false), 0, 65);
  preg_match('/^(.*)\s/s', $title_short_third, $matches);
  if ($matches[1]) $title_short_third = $matches[1];
  $title_short_third = $title_short_third.' ...';
  }
else
  {
  $title_short_third = the_title('','',false);
  }
?>

<div class="t3rdloop"><div class="releft"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo $title_short_third ?></a></h2></div>
<div class="reright"><?php comments_popup_link('[Leave a comment]', '[1 comment]', '[% comments]'); ?></div><div class="clear"></div></div>
<?php if(get_post_meta($post->ID, "thumb-3", true)) {
		$size = getimagesize($_SERVER[""].get_post_meta($post->ID, "thumb-3", true)); ?>
		<img src="<?php echo get_post_meta($post->ID, "thumb-3", true); ?>" alt="<?php the_title(); ?>" width="<?php echo $size[0]; ?>" height="<?php echo $size[1]; ?>" class="alignleft" />
		<?php } ?>
<?php the_content_limit(500, "Read More"); ?>
</div>	