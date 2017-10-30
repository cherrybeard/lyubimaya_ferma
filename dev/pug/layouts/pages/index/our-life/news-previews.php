<?php
	$args = array('numberposts' => '3',
			          'post_type'   => 'post',
			          'post_status' =>'publish'
								);
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
?>
	<div class="news-preview">
		<div class="image"<?php
			if ( $thumbnail_id = get_post_thumbnail_id($recent["ID"]) ) {
					if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
							printf( ' style="background-image: url(%s);"', $image_src[0] );
			}
		?>></div>
		<div class="text">
			<a href="<?php echo get_post_type_archive_link( 'post' ); ?>">
				<h3><?php echo $recent["post_title"]; ?></h3>
			</a>
			<time class="date"><?php echo get_the_date('', $recent['ID']); ?></time>
			<p><?php echo get_the_excerpt($recent['ID']); ?></p>
		</div>
	</div>
<?php
	};
	wp_reset_query();
?>
