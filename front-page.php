<?php
/*
 * Template Name: Home
 */

get_header(); ?>
<script>
document.querySelector('body').className = 'body_home';
</script>

<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();

     ?>
  <div id='frontpage_text'>

    <h1>Ellen Brage</h1>
    <h2>Graphic designer</h2>
    <h3>Web developer</h3>
    <h4>Illustrator</h4>

  </div>
  <?php
    }
  }
?>

<?php get_footer(); ?>
