<?php
/*
 * Template Name: Work
 */
?>

<?php get_header(); ?>

<div id='work'>

  <section id='category_area'>


<!-- echo do_shortcode( '[searchandfilter taxonomies=",project-category" types=",checkbox" hide_empty=",1"]' ); -->


<form method='POST' action=''>

  <?php
    $terms = get_terms(array('taxonomy' => 'project-category', 'hide_empty' => true));

            foreach ($terms as $value) { ?>
             <input class="categories" type="checkbox" name="checkbox[]" <?php if (in_array($value->name, $_POST['checkbox'])) echo "checked='checked'"; ?> value='<?php echo $value->name ?>'>

               <a href="/project-category/<?php echo $value->slug ?>">
             <?php echo $value->name ?>
                </a>
            </input>
          <?php }?>

          <input type='submit'></input>

    </section>

  <?php



  if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {

    foreach ($_POST['checkbox'] as $check) {
      echo $check;
    }


  }


  ?>

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
