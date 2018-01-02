<?php

get_header(); ?>

<div id='home'>

<?php

$themeList = array("theme_1", "theme_2", "theme_3", "theme_4", "theme_5");
$themeNames = array("Swiss", "Crystal", "Pint", "Coral", "Steel");


if (isset($_COOKIE['theme'])) {
  $settheme = ($_COOKIE['theme']);

  for ($x = 0; $x <= count($themeList); $x++) {

    if ($themeList[$x] == $settheme) {

      $prev = $themeList[$x-1];
      $next = $themeList[$x+1];

      for ($y = 0; $y <= count($themeNames); $y++) {

        if ($y == $x) {
          $themename = $themeNames[$y];
          $prevname = $themeNames[$y-1];
          $nextname = $themeNames[$y+1];

          if ($prevname == "") {
            $prevname = 'Standard';
          } elseif($nextname == "") {
            $nextname = 'Standard';
          }
        }
      }
    }
  }
} else {
  $themename = 'Standard';
  $prev = $themeList[4];
  $next = $themeList[0];
  $prevname = $themeNames[4];
  $nextname = $themeNames[0];
}

 ?>

 <div id='slider_area'>

   <span class='prev'>
      <form method='POST' action=''>

          <input type='hidden' name='settheme' value='<?php echo $prev ?>'></input>

              <input type='submit' onclick=slideprev(); name='prev' value=''></input>
              <span class='prevbtn_style'></span>

      </form>
    </span>

      <h2 id='prev_theme'><?php echo $prevname;?></h2>
    <span class='theme_title'>
      <h2 id='cur_theme'><?php echo $themename;?></h2>
    </span>
      <h2 id='next_theme'><?php echo $nextname;?></h2>

    <span class='next'>
      <form method='POST' action=''>

          <input type='hidden' name='settheme' value='<?php echo $next ?>'></input>
              <input type='submit' onclick=slidenext(); name='next' value=''></input>
              <span class='nextbtn_style'></span>

      </form>
    </span>

</div>


</div><!--end of page specific tag-->



<?php get_footer(); ?>
