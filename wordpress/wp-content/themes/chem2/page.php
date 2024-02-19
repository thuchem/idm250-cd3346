<?php get_header(); ?>

<div style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>
</div>
<div class="content">
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>
