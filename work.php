<?php
/*
 * Template Name: Work
 */
?>

<?php get_header(); ?>

<div id='work'>

  <section id='category_area'>
<?php
          $terms = get_terms(array('taxonomy' => 'project-category', 'hide_empty' => true));

          foreach ($terms as $value) { ?>

           <span class="categories">

             <input type="checkbox" checked="checked" onclick="check(<?php echo $value->name ?>)" id='<?php echo $value->name ?>'>
             <?php echo $value->name ?>

          </span>

          <?php

              // $checkedCats = array();
              //
              // if (isset($_POST['category'])) {
              //   echo $_POST['category'];
              // }

          ?>

        <?php }
        ?>
  </section>

  <?php

        $args = array(
          'post_type' => 'project',
          'posts_per_page' => -1
        );

        $query = new WP_Query( $args );
  ?>

  <section id='work_grid'>

<?php
if( $query->have_posts() ) {
   while ( $query->have_posts() ) {
     $query->the_post();
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
