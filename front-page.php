<?php

get_header(); ?>

<div id='home'>

<?php

if (isset($_COOKIE['theme'])) {
  $settheme = ($_COOKIE['theme']);
}


$themeList = array("theme_1", "theme_2", "theme_3", "theme_4", "theme_5");

for ($x = 0; $x <= count($themeList); $x++) {

  if ($themeList[$x] == $settheme) {

    $prev = $themeList[$x-1];
    $next = $themeList[$x+1];
  }

}

 ?>

 <div id='slider_area'>

    <form id='leftarrow' method='POST' action=''>

        <input type='hidden' name='settheme' value='<?php echo $prev ?>'></input>

        <label class='prev_btn'>
            <input type='submit' name='prev' value=''></input>
            <span class='prevbtn_style'></span>
        </label>

    </form>

    <h2 class='cur_theme'><?php echo $settheme;?></h2>

    <form id='rightarrow' method='POST' action=''>

        <input type='hidden' name='settheme' value='<?php echo $next ?>'></input>
        <label class='next_btn'>
            <input type='submit' name='next' value=''></input>
            <span class='nextbtn_style'></span>
        </label>

    </form>

</div>



</div><!--end of page specific tag-->



<?php get_footer(); ?>
