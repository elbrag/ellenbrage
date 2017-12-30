<?php

get_header(); ?>

<div id='home'>

<form method='POST' name='settheme' action=''>

    <input type='submit' name ='settheme' value='theme_1'></input>
    <input type='submit' name ='settheme' value='theme_2'></input>
    <input type='submit' name ='settheme' value='theme_3'></input>
    <input type='submit' name ='settheme' value='theme_4'></input>
    <input type='submit' name ='settheme' value='theme_5'></input>

  <!-- <input type='submit'></input> -->
</form>

<?php

if (isset($_COOKIE['theme'])) {
  echo "current theme: ". ($_COOKIE['theme']);
}

 ?>

<br/>
<br/><br/><br/>

<?php


?>


</div><!--end of page specific tag-->



<?php get_footer(); ?>
