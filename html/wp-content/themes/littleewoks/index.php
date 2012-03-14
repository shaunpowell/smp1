<?php get_header(); ?>
<div id="left">

<?php if ( $paged < 2 ) { // Do stuff specific to first page ?> 

<?php // START - FIRST SEVEN POSTS ?>

<?php query_posts($query_string . "&showposts=7"); ?>

<?php if (have_posts()) : ?>

<?php $count = 1; while (have_posts()) : the_post(); ?>

<?php if($count > 1) { if($count%2==0) echo '<div class="lleft">'; else echo '<div class="lright">'; } ?>

<?php if($count > 1) : ?>

	<?php include(TEMPLATEPATH . '/loop/loop-box.php'); ?>

<?php else : ?>
	
	<?php include(TEMPLATEPATH . '/loop/loop-first.php'); ?>


<?php endif; ?>
			
<?php if($count == 7) echo '<div class="clear"></div>'; ?>
<?php $count++; endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php // END - FIRST SEVEN POSTS ?>

<?php // START - REST OF POSTS ?>

<?php query_posts($query_string . "&offset=7&showposts=3"); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<?php include(TEMPLATEPATH . '/loop/loop-3rd.php'); ?>
		
<?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_query(); ?>
		
<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="clear"></div></div>

<?php } else { // Normal loop for second page and onward ?> 
	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<?php include(TEMPLATEPATH . '/loop/loop-2nd-pages.php'); ?>

<?php endwhile; ?>

<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="clear"></div></div>
	
<?php else : ?>

<div class="re-post">
<h2>Not Found</h2>
<p>Sorry, but you are looking for something that isn't here.</p>
</div>

<?php endif; ?>
	
<?php } ?>
	
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>