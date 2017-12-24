<header>
    <nav class='main-nav'>

      <a href="<?php echo home_url();?>"><div id='logo'></div></a>
      <div id='menu-symb' onclick="openMenu(this)" title="Menu"></div>

      <div class='main-menu'>

        <?php wp_nav_menu( array('menu' => 'Menu', 'container' => '', 'items_wrap' => '<ul class="main-ul">%3$s</ul>' )); ?>

        <label class="switch">
          <input class='checkinput' type="checkbox" onclick="checklang()">
          <span class="checkslider"></span>
        </label>
        <ul class='lang-ul'>

          <?php $languages = pll_the_languages(array('raw'=>1));
          foreach($languages as $lang) {
            ?>
            <li><a href='<?php echo $lang[url]; ?>' id='<?php echo $lang[slug]; ?>'></a></li>
            <?php
          }

          ?>

        </ul>
<!-- pll_the_languages(array('raw'=>1)); -->
      </div>

    </nav>

</header>

<main>
