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


     <h1><?php the_field('heading_1'); ?></h1>

     <p><?php the_field('text_1');?></p>

     <?php
     $full = 'full';
     $singlelarge = 'single_large';

     $image1 = get_field('image_1');

     $sizedimage = $image1['sizes'][ $singlelarge ];
     $width = $image1['sizes'][ $singlelarge . '-width' ];
     $height = $image1['sizes'][ $singlelarge . '-height' ];

     if ($image1) {
       ?>
      <div class='image' style='background-image: url("<?php echo $sizedimage;?>");'>
      <?php }


     ?>
    </div>
    <?php
   }
}
?>



<?php get_footer(); ?>
