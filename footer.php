          </main>
          <footer id='mainfooter'>

            <?php

  //theme slider area---------------------//

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

      <span class='theme_title'>
        <p id='prev_theme'><?php echo $prevname;?></p>
        <p id='cur_theme'><?php echo $themename;?></p>
        <p id='next_theme'><?php echo $nextname;?></p>

      </span>

      <span class='next'>
        <form method='POST' action=''>

            <input type='hidden' name='settheme' value='<?php echo $next ?>'></input>
                <input type='submit' onclick=slidenext(); name='next' value=''></input>
                <span class='nextbtn_style'></span>

        </form>
      </span>

  </div>

  <!--theme slider end-------------------->

          </footer>

          <?php
          $scripts = get_template_directory_uri() . "/js/scripts.js";
          ?>

          <script type="text/javascript" src="<?php echo $scripts;?>"></script>

          <?php wp_footer() ?>
      </body>

</html>
