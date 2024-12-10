<?php $locale = get_locale(); ?>

<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
    <head prefix="og: http://ogp.me/ns# <?php $type = is_home() ? 'website' : 'article'; echo 'fb: http://ogp.me/ns/fb# '.$type.': http://ogp.me/ns/'.$type.'#'; ?>">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- <title><?php wp_title('|', true, 'right').bloginfo('name'); ?></title> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <?php global $body_class; ?>
    <body <?php body_class($body_class); ?>>
        <div id="top"></div>
        <header class="header">
            <div class="header__inner">
                <h1 class="header-logo">
                    <a href="<?= home_url(); ?>" class="header-logo__link">
                        <img src="<?= THEMEIMG; ?>/logo.svg" class="header-logo__img" alt="">
                    </a>
                </h1>
                <?php
                    wp_nav_menu(array( 
                        'container'       => 'nav', 
                        'container_id'    => 'header-nav',
                        'container_class' => 'header-navi',
                        'menu_class'      => 'header-navi__lists',
                        'add_li_class'    => 'header-navi__list',
                        'add_a_class'     => 'header-navi__link',
                        'theme_location'  => 'global-nav' 
                    )); 
                ?>
                <div class="header-btn">
                    <span class="header-btn__bar"></span>
                </div>
            </div>
        </header>
        <div class="header__dummy"></div>
