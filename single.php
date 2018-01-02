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

                <div id='single_big'>
               <?php
                  the_post_thumbnail('single_large');
              ?>
                </div>

               <section class='single_thumbs'>

               <?php

               $medium = 'medium';
               $singlelarge = 'single_large';

               $image1 = get_field('extra_image');

               $sizedimage1 = $image1['sizes'][ $medium ];
               $width = $image1['sizes'][ $medium . '-width' ];
               $height = $image1['sizes'][ $medium . '-height' ];

               if ($image1) {
                 ?>
                <div class='single_image' style='background-image: url("<?php echo $sizedimage1;?>");'></div>
                <?php }
                ?>

            </section>
        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
