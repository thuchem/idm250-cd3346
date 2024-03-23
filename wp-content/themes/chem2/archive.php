<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()) : the_post();
        echo '<h2>' . get_the_title() . '</h2>'; // Added a semicolon at the end of the echo statement
    endwhile;
else:
    echo '<p>No content found</p>';
endif;
?>


<?php get_footer(); ?>