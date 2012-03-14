<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
</div>
<?php endwhile; else: ?>

<div class="re-post">
<p>Sorry, no posts matched your criteria.</p>
</div>

<?php endif; ?>

<?php get_footer(); ?>
