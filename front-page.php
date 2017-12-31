<?php

get_header(); ?>

<div id='home'>

<?php

$themeList = array("theme_1", "theme_2", "theme_3", "theme_4", "theme_5");


if (isset($_COOKIE['theme'])) {
  $settheme = ($_COOKIE['theme']);

  for ($x = 0; $x <= count($themeList); $x++) {

    if ($themeList[$x] == $settheme) {

      $prev = $themeList[$x-1];
      $next = $themeList[$x+1];
    }

  }

} else {
  $settheme = 'Standard';
  $prev = $themeList[4];
  $next = $themeList[0];
}





 ?>

 <div id='slider_area'>

   <span class='prev'>
      <form method='POST' action=''>

          <input type='hidden' name='settheme' value='<?php echo $prev ?>'></input>

              <input type='submit' name='prev' value=''></input>
              <span class='prevbtn_style'></span>

      </form>
    </span>

    <span class='theme_title'>
      <h2 class='cur_theme'><?php echo $settheme;?></h2>
    </span>
    <span class='next'>
      <form method='POST' action=''>

          <input type='hidden' name='settheme' value='<?php echo $next ?>'></input>
              <input type='submit' name='next' value=''></input>
              <span class='nextbtn_style'></span>

      </form>
    </span>

</div>



</div><!--end of page specific tag-->



<?php get_footer(); ?>
