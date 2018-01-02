<?php
/*
 * Template Name: Home
 */

get_header(); ?>

<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();

  echo "<div id='home_image'>";
  the_post_thumbnail();
  echo "</div>";

    }
  }
?>

<?php get_footer(); ?>
