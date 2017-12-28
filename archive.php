<?php get_header(); ?>



<div id='work'>



<?php
if( have_posts() ) {
?>
  <section id='category_area'>


  <?php echo do_shortcode( '[searchandfilter taxonomies="project-category" types="checkbox" hide_empty="1"]' );
?>

  </section>

  <section id='work_grid'>
<?php

   while ( have_posts() ) {
     the_post();
     ?>
              <div class='grid_project'>

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
    <?php

   }
}
?>

</section>

</div><!--end of page specific tag-->


<?php get_footer(); ?>
