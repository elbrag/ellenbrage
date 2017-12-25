<header>
    <nav class='main-nav'>

      <a href="<?php echo home_url();?>"><div id='logo'></div></a>
      <div id='menu-symb' onclick="openMenu(this)" title="Menu"></div>

      <div class='main-menu'>

        <div class='lang_items'>
          <div class='switch_container'>
                  <?php $languages = pll_the_languages(array('raw'=>1));
                  foreach($languages as $lang) {
                    ?>

                        <a href='<?php echo $lang[url]; ?>' id='<?php echo $lang[slug]; ?>'>
                          <button class='lang_item'>
                              <?php echo $lang[slug]; ?>
                          </button>
                        </a>

                    <?php
                  }
                  ?>

          </div>
        </div>

        <?php wp_nav_menu( array('menu' => 'Menu', 'container' => '', 'items_wrap' => '<ul class="main-ul">%3$s</ul>' )); ?>


      </div>

    </nav>

</header>

<main>
