        <footer class="footer">
            <div class="footer__inner">
                <section class="footer-row2 standard-inner type1">
                    <div class="footer-row2__inner">
                        <div class="footer-information">
                            <div class="footer-logo">
                                <a href="<?= home_url(); ?>" class="footer-logo__link">
                                    <img src="<?= THEMEIMG; ?>/logo.svg" class="footer-logo__img" alt="">
                                </a>
                            </div>
                            <div class="footer-address">
                                〒461-0005<br>
                                愛知県名古屋市東区東桜1−10−29<br>
                                パークサイドビル栄4A
                            </div>
                            <div class="footer-tel">
                                <a href="tel:052-684-5994" class="footer-tel__link">TEL : 052-684-5994</a>
                            </div>
                            <div class="footer-copyright">
                                ©2024 株式会社NBA
                            </div>
                        </div>
                        <?php
                            wp_nav_menu(array( 
                                'container'       => 'nav', 
                                'container_id'    => 'footer-nav',
                                'container_class' => 'footer-navi',
                                'menu_class'      => 'footer-navi__lists',
                                'add_li_class'    => 'footer-navi__list',
                                'add_a_class'     => 'footer-navi__link',
                                'theme_location'  => 'footer-nav1' 
                            )); 
                        ?>
                        <?php
                            wp_nav_menu(array( 
                                'container'       => 'nav', 
                                'container_id'    => 'footer-nav2',
                                'container_class' => 'footer-navi2',
                                'menu_class'      => 'footer-navi2__lists',
                                'add_li_class'    => 'footer-navi2__list',
                                'add_a_class'     => 'footer-navi2__link',
                                'theme_location'  => 'footer-nav2' 
                            )); 
                        ?>
                    </div>
                </section>
            </div>
        </footer>
        <div class="pagetop">
            <a href="#top" class="pagetop__link">
            </a>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
