<?php query_posts('category_name=poems&orderby=date&order=ASC'); ?>

<ul>
<li><a href="http://www.theamericanjournalofpoetry.com/v5-schireson.html">God of Mildew</a></li>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li>
	<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php endwhile; else: ?>
<li>No poems at this time</li>
<?php endif; ?>
</ul>
<?php wp_reset_query(); ?>
