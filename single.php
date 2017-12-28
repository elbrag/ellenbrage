<?php get_header(); ?>


<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
        <div id='single'>
     <?php

     the_post_thumbnail('single_large');

     echo "<br/>";

     echo "<p>";
     the_field('project_title');
     echo "</p>";

    ?>
        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
