<?php
/*
 * Template Name: Home
 */

get_header(); ?>

<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();

     ?>
  <div class='home_image' style='background-image: url("<?php echo the_post_thumbnail_url('full');?>");'></div>
  <?php
    }
  }
?>

<?php get_footer(); ?>
