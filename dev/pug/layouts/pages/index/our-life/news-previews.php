<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="news-preview">
		<div class="image"<?php
			if ( $thumbnail_id = get_post_thumbnail_id() ) {
					if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
							printf( ' style="background-image: url(%s);"', $image_src[0] );
			}
		?>></div>
		<div class="text">
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<time class="date"><?php the_date() ?></time>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
<?php endwhile; endif; ?>
