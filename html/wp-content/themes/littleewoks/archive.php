<?php get_header(); ?>

<div id="left">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="info"><?php the_time('l, F jS, Y') ?> at <?php the_time() ?></p>
<?php the_content_limit(500, "Read More"); ?>
</div>
<?php endwhile; else: ?>

<div class="re-post">
<p>Sorry, no posts matched your criteria.</p>
</div>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
