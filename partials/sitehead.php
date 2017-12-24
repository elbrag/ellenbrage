<header>
    <nav class='main-nav'>

      <a href="<?php echo home_url();?>"><div id='logo'></div></a>
      <div id='menu-symb' onclick="openMenu(this)" title="Menu"></div>

      <div class='main-menu'>

        <?php wp_nav_menu( array('menu' => 'Menu', 'container' => '', 'items_wrap' => '<ul class="main-ul">%3$s</ul>' )); ?>

        <!-- <label class="switch">
          <input class='checkinput' type="checkbox">
          <span class="checkslider"></span>
        </label> -->

<div class='lang_items'>
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

<!-- pll_the_languages(array('raw'=>1)); -->
      </div>

    </nav>

</header>

<main>
