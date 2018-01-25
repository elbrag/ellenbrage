<?php
/*
 * Template Name: Work
 */
?>

<?php get_header(); ?>

<div id='work'>

  <section id='category_area'>


<!--keeping checkbox checked: https://stackoverflow.com/questions/12541419/php-keep-checkbox-checked-after-submitting-form -->

<form method='POST' action=''>

  <?php
    $terms = get_terms(array('taxonomy' => 'project-category', 'hide_empty' => true));

            foreach ($terms as $value) { ?>
            <label class="categories">

             <input type="checkbox" name="checkbox[]"
               <?php
               if ((in_array($value->name, $_POST['checkbox'])) || (!isset($_POST['checkbox']))) echo "checked='checked'";
               ?>
               value='<?php echo $value->name ?>'>
            </input>
            <span class='checkmark'></span>
            <?php echo $value->name ?>
            </label>
          <?php }?>

          <input type='submit' value='filter'></input>
</form>
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

       <?php

// get the category that each post belongs to so we can compare it to what is checked above

       foreach (get_the_terms(get_the_ID(), 'project-category') as $cat) {

         $category = $cat->name;

       }


       if (isset($_POST['checkbox']) && !empty($_POST['checkbox'])) {

         foreach ($_POST['checkbox'] as $check) {
            if ($check == $category) {
              ?>
              <div class='grid_project'>

                <a href='<?php the_permalink(); ?>'>

                   <div class='work_grid_image' style='background-image: url("<?php echo the_post_thumbnail_url('large_thumbnail');?>");'></div>

                   <?php
                   echo "<p>";
                   the_field('project_title');
                   echo "</p>";

                   ?>
                </a>

              </div>

              <?php
            }
         }

//default: all posts showing. Also all checkboxes are checked (see the <input> above)

       } elseif (!isset($_POST['checkbox'])) {
         ?>
         <div class='grid_project'>

           <a href='<?php the_permalink(); ?>'>

              <div class='work_grid_image' style='background-image: url("<?php echo the_post_thumbnail_url('large_thumbnail');?>");'></div>

              <?php

              echo "<p>";
              the_field('project_title');
              echo "</p>";

              ?>
           </a>

         </div>
         <?php
       }
   }
}
?>

</section>

</div><!--end of page specific tag-->


<?php get_footer(); ?>
