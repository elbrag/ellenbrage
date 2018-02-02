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

  <section id='frontpage'>

    <div id='textbox'>
        <div class='header1_box'>
            <h1 class='fill'>Ellen Brage</h1>
        </div>
        <div class='titles_box'>
            <p class='title'>Graphic designer</p>
            <p class='title'>Web developer</p>
            <p class='title'>Illustrator</p>
        </div>
    </div>

        <div id='front_background'>

          <div class='graphic_elem'>
          </div>
          <div class='graphic_elem2'>
          </div>

        </div>
  </section>
  <?php
    }
  }
?>

<?php get_footer(); ?>
