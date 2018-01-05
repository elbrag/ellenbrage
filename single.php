<?php get_header(); ?>

<script>

document.getElementById('menu-item-36').className += ' active';

</script>

<?php
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

                    $bigimage = $images[0];
                    $bigid = $bigimage['id'];
                    $bigtitle = $bigimage['title'];
                    $big_full_image_url = $bigimage['full_image_url'];
                    $big_full_image_url = acf_photo_gallery_resize_image($big_full_image_url, 600, 350);
                    ?>

                    <div id='single_big'>

                        <img class='bigone' id='<?php echo $bigid; ?>' src="<?php echo $big_full_image_url; ?>" alt="<?php echo $bigtitle; ?>" title="<?php echo $bigtitle; ?>">

                    </div>
                    <section class='single_thumbs'>

                    <?php

                      //Cool, we got some data so now let's loop over it
                      foreach($images as $image):

                        if ($image != $bigimage) {

                          $id = $image['id']; // The attachment id of the media
                          $title = $image['title']; //The title
                          $caption= $image['caption']; //The caption
                          $full_image_url= $image['full_image_url']; //Full size image url
                          $full_image_url = acf_photo_gallery_resize_image($full_image_url, 600, 350); //Resized size to 262px width by 160px height image url
                          $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                          $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)

              ?>

                  <div class="single_image">

                          <img id='<?php echo $id ?>' onclick="enlarge(this.id)" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">

                  </div>
              <?php
              }
            endforeach; endif; ?>
              </section>

        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
