<?php
/*
 * Template Name: Work
 */
?>

<?php get_header(); ?>

<?php

      $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1
      );

      $query = new WP_Query( $args );
?>

<?php
if( $query->have_posts() ) {
   while ( $query->have_posts() ) {
     $query->the_post();
     ?>
        <div id='work'>

          <div class='project_grid'>

            <a href='<?php the_permalink(); ?>'>
              <?php

               the_post_thumbnail('single_large');

               echo "<br/>";

               echo "<p>";
               the_field('project_title');
               echo "</p>";

               ?>
            </a>

          </div>

        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
