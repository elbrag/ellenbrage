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
        <div id='contentmargins_1'>
     <?php
            the_content();

    ?>
        </div>
    <?php

   }
}
?>


<?php get_footer(); ?>
