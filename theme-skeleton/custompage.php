<?php /* Template name: Template example */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?> - custom page template example</h1>
	<?php the_content(); ?>
<?php endwhile; else: ?>
	<p>Sorry, page not found</p>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>