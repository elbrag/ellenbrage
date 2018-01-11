<?php get_header(); ?>

<script>

document.getElementById('menu-item-36').className += ' active';

</script>

<?php

$value = 1;

if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
        <div id='single'>

              <h1>
               <?php
                the_field('project_title');
                ?>
              </h1>

              <p>
               <?php
                the_field('project_description');
                ?>
              </p>

              <?php
                  //Get the images ids from the post_metadata
                  $images = acf_photo_gallery('image_gallery', $post->ID);
                  //Check if return array has anything in it
                  if( count($images) ):

                    ?>

                    <section class='single_thumbs'>

                    <?php

                      //Cool, we got some data so now let's loop over it
                      foreach($images as $image):

                        if ($image != $bigimage) {



                          $id = $image['id']; // The attachment id of the media
                          $id2 = $value++;
                          $title = $image['title']; //The title
                          $full_image_url= $image['full_image_url']; //Full size image url
                          $full_image_url = acf_photo_gallery_resize_image($full_image_url, 1000, 650); //Resized size to 262px width by 160px height image url
                          $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                          $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)

              ?>

                  <div class="single_image" id='<?php echo $id2 ?>' onclick="enlarge(this.id)">

                          <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">

                  </div>
              <?php
              }
            endforeach; endif; ?>
              </section>

    <?php

   }
}

//get ID for this project
$projectid = get_the_ID();

//check how many posts we can find of each category
  $terms = get_the_terms( $post->ID , 'project-category' );
  foreach ( $terms as $term ) {
    $numberofposts = $term->count;
  }

/*if there's only one project in the category we can't suggest similar projects, so we'll simply suggest "more" projects, meaning we'll display all projects instead of projects from the same category. */

if ($numberofposts > 1) {
  //get the projects from the same category as this one
  $categories = get_the_terms(get_the_ID(), 'project-category');

  foreach($categories as $category) {
    wp_reset_query();
    $args = array(
      'project' => 'custom_post_type',
      'tax_query' => array(
        array(
            'taxonomy' => 'project-category',
            'field' => 'slug',
            'terms' => $category->slug,
            'posts_per_page' => -1
        ),
      ),
    );
  }

} else {
  $args = array(
    'post_type' => 'project',
    'posts_per_page' => -1
  );
}

$query = new WP_Query( $args );
?>

<section class='similar_projects'>

<?php

$count = 0;

  if( $query->have_posts() ) {

    if ($numberofposts > 1) {
      ?>
      <h2>Similar projects</h2>
      <?php
    } else {
      ?>
      <h2>More projects</h2>
      <?php
    }
    ?>
    <div class='similar_thumbs_area'>

    <?php
     while ( $query->have_posts() ) {
       $query->the_post();

       //get the ids for the similar projects
       $sim_id = get_the_ID();

         //fetch 3 projects of this category that aren't this one
         if ( ($projectid != $sim_id) && ($count < 3) ) {

           $count++;
         ?>

         <a href='<?php the_permalink(); ?>'>
             <div class='similar_thumb'>
            <?php
                the_post_thumbnail('similar_thumbnail');

                echo "<p>";
                the_field('project_title');
                echo "</p>";

            ?>
             </div>
          </a>

        <?php
          }
    }
  }
  ?>
    </div>

<a class='browse_all' href='/work'>Browse all projects</a>

</section>

</div><!--end of page specific tag-->

<?php get_footer(); ?>
