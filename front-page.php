<?php get_header(); ?>


<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
        <div id='home'>
     <?php
            the_content();

    ?>
        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
