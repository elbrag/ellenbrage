<?php
/*
 * Template Name: Work
 */
?>

<?php get_header(); ?>


<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
        <div id='work'>
     <?php
            the_content();

    ?>
        </div>
    <?php

   }
}
?>


<?php get_footer(); ?>
