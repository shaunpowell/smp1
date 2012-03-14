<div id="latest"><span class="aleft">Latest Article</span><span class="aright"><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe via RSS">Entries (RSS)</a></span></div><div class="clear"></div>

<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="info"><?php the_time('F jS, Y') ?> by <?php the_author() ?> - <?php comments_popup_link('Leave a comment', '1 comment', '% comments'); ?></p>
<?php if(get_post_meta($post->ID, "thumb-1", true)) {
		$size = getimagesize($_SERVER[""].get_post_meta($post->ID, "thumb-1", true)); ?>
		<img src="<?php echo get_post_meta($post->ID, "thumb-1", true); ?>" alt="<?php the_title(); ?>" width="<?php echo $size[0]; ?>" height="<?php echo $size[1]; ?>" class="alignleft" />
		<?php } ?>
<?php the_content('Read more &raquo;'); ?>
<p class="postmetadata">Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit', '| ', ' | '); ?><?php the_tags('<br />Tags: ', ', ', ''); ?></p>
</div>

<div id="recent"><span class="aleftrecent">Recent Articles</span><span class="aright"><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe via RSS">Entries (RSS)</a></span></div>
<div class="clear"></div>