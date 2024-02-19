<?php get_header(); ?>
<h1 class="">
<div style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>');">
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
</div>
<div class="content">
    <?php echo get_the_content(); ?>
</div>
</h1>
<?php get_footer(); ?>


