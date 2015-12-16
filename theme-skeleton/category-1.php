<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <h1><?php single_cat_title(''); ?> - custom category template for taxonomy id - 1</h1>
    <ul>
	<?php while (have_posts()) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="View <?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
			<span>Published: <?php the_time('Y-m-d') ?></span>
			<br />
			<?php the_excerpt(); ?>
		</li>
	<?php endwhile; ?>
	</ul>
	<?php wpbeginner_numeric_posts_nav(); ?>
<?php else : ?>
	<center>
		<h3>Sorry, nothing found.</h3>
	</center>
	<br />
	<center>
		Try using search...	
		<form role="search" method="get" id="searchform" action="#" >
			<input type="text" onFocus="this.value='';"  onblur="this.value=!this.value?'Search':this.value;" value="" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="Search" />
		</form>
	</center>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>