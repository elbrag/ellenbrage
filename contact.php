<?php
/*
 * Template Name: Contact
 */
?>

<?php get_header(); ?>


<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
        <div id='contact'>
     <?php
     if (get_locale() == 'en_GB') {
          echo do_shortcode( '[contact-form-7 id="60" title="Contact form"]' );
      }

    ?>
        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
