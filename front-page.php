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

  <div id='front_background'>

  <div id='frontpage_text'>

    <div class='header1_box'>
        <!-- <h1 class='stroke'>Ellen Brage</h1> -->
        <h1 class='fill'>Ellen Brage</h1>
        <h1 class='fill_2'>Ellen Brage</h1>
        <h1 class='fill_3'>Ellen Brage</h1>
    </div>

    <!-- <h2 class='stroke'>Graphic designer</h2>
    <h3 class='stroke'>Web developer</h3>
    <h4 class='stroke'>Illustrator</h4> -->

    <p class='title'>
      <span>G</span>
      <span>r</span>
      <span>a</span>
      <span>p</span>
      <span>h</span>
      <span>i</span>
      <span>c</span>

      <span>d</span>
      <span>e</span>
      <span>s</span>
      <span>i</span>
      <span>g</span>
      <span>n</span>
      <span>e</span>
      <span>r</span>
    </p>
    <p class='title'>Web developer</p>
    <p class='title'>Illustrator</p>

  </div>


</div>
  <?php
    }
  }
?>

<?php get_footer(); ?>
