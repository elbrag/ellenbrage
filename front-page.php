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

     //changing texts depending on set language
               if (get_locale() == 'sv_SE') {
                 $title1 = 'Grafisk designer';
                 $title2 = 'Webbutvecklare';
               }//end of swe language check
               if (get_locale() == 'en_GB') {
                 $title1 = 'Graphic designer';
                 $title2 = 'Web developer';
                }//end of eng language check
     /////////////////////////////////////////////////

     ?>

  <section id='frontpage'>

    <div id='textbox'>
        <div class='header1_box'>
            <h1 class='fill'>Ellen Brage</h1>
        </div>
        <div class='titles_box'>
            <p class='title'><?php echo $title1 ." ". "&amp;" . " " . $title2?></p>
        </div>
    </div>

        <div id='front_background'>

          <div class='graphic_elem'>
          </div>


        </div>
  </section>
  <?php
    }
  }
?>

<?php get_footer(); ?>
