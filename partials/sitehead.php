<header>
    <nav class='main-nav'>

      <a href="<?php echo home_url();?>"><div id='logo'></div></a>
      <div id='menu-symb' onclick="openMenu(this)" title="Menu"></div>

      <div class='main-menu'>

        <?php wp_nav_menu( array('menu' => 'Menu', 'container' => '', 'items_wrap' => '<ul class="main-ul">%3$s</ul>' )); ?>

        <ul class='lang-ul'><?php pll_the_languages();?></ul>

      </div>

    </nav>

</header>

<main>
