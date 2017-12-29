<?php

get_header(); ?>

<form method='POST' name='settheme' action=''>
  <select name='settheme'>
    <option value="theme_1">Theme 1</option>
    <option value="theme_2">Theme 2</option>
    <option value="theme_3">Theme 3</option>
    <option value="theme_4">Theme 4</option>
    <option value="theme_5">Theme 5</option>
  </select>
  <input type='submit'></input>
</form>

<?php



if( have_posts() ) {
   while ( have_posts() ) {
     the_post();
     ?>
        <div id='home'>





        </div><!--end of page specific tag-->
    <?php

   }
}
?>


<?php get_footer(); ?>
