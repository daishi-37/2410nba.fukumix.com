        <footer class="footer">
            <div class="footer__inner">
                <section class="footer-bg">
                    <div class="footer-bg__inner"></div>
                </section>
                <section class="footer-contact standard-inner type1">
                    <h2 class="footer-contact__title fl-orange">CONTACT</h2>
                    <p class="footer-contact__text">ご相談やご質問など、お気軽にお問い合わせください</p>
                    <div class="footer-contact__links">
                        <div class="footer-contact__btn tel btn-type2">
                            <a href="tel:052-684-5994" class="btn-type2__link">052-684-5994</a>
                        </div>
                        <div class="footer-contact__btn contact btn-type1">
                            <a href="" class="btn-type1__link">お問い合わせフォーム</a>
                        </div>
                    </div>
                </section>
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
        <div class="footer-anime1 anime-type1">
            <div class="footer-anime__obj1 obj animate circle gray "></div>
            <div class="footer-anime__obj2 obj animate circle gray "></div>
            <div class="footer-anime__obj3 obj animate circle gray "></div>
            <div class="footer-anime__obj4 obj animate circle gray "></div>
        </div>
        <div class="pagetop">
            <a href="#top" class="pagetop__link">
            </a>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
