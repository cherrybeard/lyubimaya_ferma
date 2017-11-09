<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="news-item">
  <h3><?php the_title(); ?></h3>
  <time><?php echo get_the_date(); ?></time>
	<?php the_content(); ?>
</article>

<?php endwhile; endif; ?>
