<?php get_header(); ?>
<header class="page-header"><a href="<?php echo home_url(); ?>">
    <h2 class="logo">Любимая ферма</h2></a>
  <h1><?php wp_title(''); ?></h1>
</header>
<section class="page-content">
  <?php $post = get_post(); ?>
  <?php echo apply_filters( 'the_content', $post->post_content ); ?>
  <?php wp_reset_query(); ?>
</section><?php get_footer(); ?>