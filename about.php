<?php
/*
 * Template Name: About
 */
?>

<?php get_header(); ?>



<?php
if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
     <div id='about'>


<!--Section 1-->
        <section>

            <h1><?php the_field('heading_1'); ?></h1>

            <?php
            $full = 'full';
            $large = 'large';

            $image1 = get_field('image_1');

            $sizedimage1 = $image1['sizes'][ $large ];
            $width = $image1['sizes'][ $large . '-width' ];
            $height = $image1['sizes'][ $large . '-height' ];

            if ($image1) {
              ?>
             <div class='image' style='background-image: url("<?php echo $sizedimage1;?>");'></div>
             <?php }
            ?>

             <p><?php the_field('text_1');?></p>

        </section>
<!--Section 2-->
        <section>

            <h2><?php the_field('heading_2'); ?></h2>

            <?php
            $image2 = get_field('image_2');

            $sizedimage2 = $image2['sizes'][ $singlelarge ];
            $width = $image2['sizes'][ $singlelarge . '-width' ];
            $height = $image2['sizes'][ $singlelarge . '-height' ];

            if ($image2) {
              ?>
             <div class='image' style='background-image: url("<?php echo $sizedimage2;?>");'></div>
             <?php }
            ?>

            <p><?php the_field('text_2');?></p>

        </section>

<!--Section 3-->

<section>

    <h2><?php the_field('heading_3'); ?></h2>

    <?php
    $image3 = get_field('image_3');

    $sizedimage3 = $image3['sizes'][ $singlelarge ];
    $width = $image3['sizes'][ $singlelarge . '-width' ];
    $height = $image3['sizes'][ $singlelarge . '-height' ];

    if ($image3) {
      ?>
     <div class='image' style='background-image: url("<?php echo $sizedimage3;?>");'></div>
     <?php }
    ?>

    <p><?php the_field('text_3');?></p>

</section>

   </div><!--end of page specific tag-->
    <?php
   }
}
?>



<?php get_footer(); ?>
