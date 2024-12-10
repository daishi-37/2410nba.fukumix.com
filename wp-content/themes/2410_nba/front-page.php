<?php get_header(); ?>
<?php
    $topimg = THEMEIMG."/toppage";
?>
<main class="main">
    <div class="top-anime1 anime-type1">
        <div class="top-anime__obj3 obj animate circle white dot"></div>
    </div>
    <div class="main__inner">
        <section class="top-mv">
            <div class="top-mv__inner">
                <div class="top-mv__box">
                    <div class="top-mv__text">
                        <div class="top-mv__text-row type1 fl-orange">DESIGN</div>
                        <div class="top-mv__text-row type2">FOR</div>
                        <div class="top-mv__text-row type1 fl-orange">HEALTH</div>
                        <div class="top-mv__text-ja"><span>一人ひとりの</span><br><span>健康をデザインする</span></div>
                    </div>
                    <div class="top-mv__text2">あらゆる角度から​心と身体の健康をデザインし、<br>ライフスタイルに合わせた柔軟な働き方を目指します。</div>
                </div>
                <div class="top-mv__pictures">
                    <figure class="top-mv__figure">
                        <picture>
                            <img src="<?= $topimg; ?>/top-mv__img1.jpg" alt="" class="top-mv__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-mv__img2.jpg" alt="" class="top-mv__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-mv__img3.jpg" alt="" class="top-mv__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-mv__img1.jpg" alt="" class="top-mv__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-mv__img2.jpg" alt="" class="top-mv__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-mv__img3.jpg" alt="" class="top-mv__img">
                        </picture>
                    </figure>
                </div>
            </div>
            <div class="top-anime2 anime-type1">
                <div class="top-anime__obj1 obj animate circle white"></div>
                <div class="top-anime__obj2 obj animate circle white"></div>
            </div>
        </section>
        <section class="top-about">
            <div class="top-about__inner">
                <div class="top-about__title">
                    <div class="top-about__title-inner"><span>TO CREATE A BETTER SOCIETY</span></div>
                    <div class="top-about__title-inner"><span>TO CREATE A BETTER SOCIETY</span></div>
                </div>
                <div class="top-about__text1">心と身体の<br>健康デザイナー</div>
                <div class="top-about__text2">私たちのミッションは「健康をデザイン」すること。<br>福祉・鍼灸・美容を軸にあらゆる角度から健康をデザインし、<br>心や身体、外見のコンプレックスまで<br>不自由のないライフスタイルを送れるよう、<br>サポートいたします。</div>
                <div class="top-about__btn btn-type7">
                    <a href="<?= my_get_page_url('aboutus'); ?>" class="btn-type7__link">私たちについて</a>
                </div>
            </div>
            <div class="top-about__after">
                <img src="<?= $topimg; ?>/top-about__after.jpg" alt="" class="top-about__after-img">
            </div>
        </section>
        <section class="top-service">
            <div class="top-service__inner standard-inner type1">
                <div class="top-service__box">
                    <div class="top-service__h2 h2-type1">
                        <div class="h2-type1__en fl-orange">SERVICE</div>
                        <div class="h2-type1__ja">事業紹介</div>
                    </div>
                    <div class="top-service__text1">ストレスと上手に共生し、<br>心と身体のバランスを保つ</div>
                    <div class="top-service__text2">「健康」とは、体が自由に動く・規則正しい<br>生活をすることではなく、<br>【ストレスと上手に共生し<br>心と身体のバランスを保つこと】<br>だと私たちは考えています。<br><br>そのためのアプローチは多種多様であり、<br>身体のための施術だけでなく、<br>美容や会話、空間やブランディングなど<br>あらゆる手段を使って健康をデザインします。</div>
                </div>
                <figure class="top-service__figure">
                    <picture>
                        <img src="<?= $topimg; ?>/top-service__img.jpg" alt="" class="top-service__img">
                    </picture>
                </figure>
            </div>
        </section>
        <section class="top-service02">
            <div class="top-service02__before">
                <img src="<?= $topimg; ?>/top-service02__before.jpg" alt="" class="top-service02__before-img">
            </div>
            <div class="top-service02__inner standard-inner type1">
                <div class="top-service02__list list-type4">
                    <ul class="list-type4__lists">
                        <li class="list-type4__list">
                            <div class="list-type4__number">
                                <img src="<?= $topimg; ?>/01.png" alt="" class="list-type4__number-img">
                            </div>
                            <div class="list-type4__figure">
                                <picture>
                                    <img src="<?= $topimg; ?>/top-service02__img1.jpg" alt="" class="list-type4__img">
                                </picture>
                            </div>
                            <div class="list-type4__text">
                                <div class="list-type4__text1">訪問事業</div>
                                <div class="list-type4__text2">介護施設/グループホーム/特別養護老人ホーム/在宅にお伺いし、歩行訓練や、リハビリ、鍼灸マッサージ治療を行います。足の力が残っている患者様には筋力トレーニング等を行い、自分の足で最後まで歩ける身体作りを目指すなど患者に合わせた治療プランを提案しています。</div>
                            </div>
                            <div class="list-type4__btn btn-type7">
                                <a href="<?= my_get_page_url('service02'); ?>" class="btn-type7__link">訪問事業を詳しく見る</a>
                            </div>
                        </li>
                        <li class="list-type4__list">
                            <div class="list-type4__number">
                                <img src="<?= $topimg; ?>/02.png" alt="" class="list-type4__number-img">
                            </div>
                            <div class="list-type4__figure">
                                <picture>
                                    <img src="<?= $topimg; ?>/top-service02__img2.jpg" alt="" class="list-type4__img">
                                </picture>
                            </div>
                            <div class="list-type4__text">
                                <div class="list-type4__text1">福祉事業</div>
                                <div class="list-type4__text2">利用者様の生活をより良くするケアプランの提供を目的とした、居宅介護支援事業所です。ケアプラン作成だけでなく、訪問鍼灸マッサージと連携し訪問鍼灸マッサージと連携し、利用者様の身体状況、メンタル状況を共有しながら最適な生活環境を作ります。</div>
                            </div>
                            <div class="list-type4__btn btn-type7">
                                <a href="<?= my_get_page_url('service03'); ?>" class="btn-type7__link">福祉事業を詳しく見る</a>
                            </div>
                        </li>
                        <li class="list-type4__list">
                            <div class="list-type4__number">
                                <img src="<?= $topimg; ?>/03.png" alt="" class="list-type4__number-img">
                            </div>
                            <div class="list-type4__figure">
                                <picture>
                                    <img src="<?= $topimg; ?>/top-service02__img3.jpg" alt="" class="list-type4__img">
                                </picture>
                            </div>
                            <div class="list-type4__text">
                                <div class="list-type4__text1">店舗事業</div>
                                <div class="list-type4__text2">美容鍼灸/ピーリング等のエステ施術に加え、身体の鍼灸治療で「年齢に負けない美肌づくり」をサポートします。また、医療×美容をテーマにした自社コスメの開発にも力を入れています。アンチエイジングを身近に感じられるサロンを目指します。</div>
                            </div>
                            <div class="list-type4__btn btn-type7">
                                <a href="<?= my_get_page_url('service04'); ?>" class="btn-type7__link">店舗事業を詳しく見る</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="top-service02__after">
                <img src="<?= $topimg; ?>/top-service02__after.jpg" alt="" class="top-service02__after-img">
            </div>
        </section>
        <section class="top-voice">
            <div class="top-anime3 anime-type1">
                <div class="top-anime__obj4 obj animate circle gray"></div>
                <div class="top-anime__obj5 obj animate circle gray"></div>
            </div>
            <div class="top-voice__before">
                <img src="<?= $topimg; ?>/top-voice__before.jpg" alt="" class="top-voice__before-img">
            </div>
            <div class="top-voice__inner standard-inner type1">
                <div class="top-voice__h2 h2-type1 center">
                    <div class="h2-type1__en fl-orange">VOICE</div>
                    <div class="h2-type1__ja">NBAを利用したお客様の声</div>
                </div>
                <div class="top-voice__list">
                    <?php echo do_shortcode('[my_voices_lists terms=none]'); ?>
                </div>
                <div class="top-voice__btn btn-type3">
                    <a href="" class="btn-type3__link">もっと見る</a>
                </div>
            </div>
        </section>
        <section class="top-recruit">
            <div class="top-recruit__inner">
                <div class="top-recruit__pictures">
                    <figure class="top-recruit__figure">
                        <picture>
                            <img src="<?= $topimg; ?>/top-recruit__img1.jpg" alt="" class="top-recruit__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-recruit__img2.jpg" alt="" class="top-recruit__img">
                        </picture>
                        <picture>
                            <img src="<?= $topimg; ?>/top-recruit__img3.jpg" alt="" class="top-recruit__img">
                        </picture>
                    </figure>
                </div>
                <div class="top-recruit__content">
                    <div class="top-recruit__h2 h2-type1 center">
                        <div class="h2-type1__en fl-orange">RECRUIT</div>
                        <div class="h2-type1__ja">採用情報</div>
                    </div>
                    <div class="top-recruit__text">共に高め合える仲間を募集しています</div>
                    <div class="top-recruit__btn btn-type3 blank">
                        <a href="" class="btn-type3__link">採用サイトを見る</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-news">
            <div class="top-news__inner standard-inner type1">
                <?php
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 3,
                    );
                    $the_query = new WP_Query($args);
                ?>
                <div class="top-news__h2 h2-type1">
                    <div class="h2-type1__en fl-orange">NEWS</div>
                    <div class="h2-type1__ja">お知らせ</div>
                </div>
                <div class="top-news__btn btn-type7">
                    <a href="<?= get_post_type_archive_link('news'); ?>" class="btn-type7__link">一覧を見る</a>
                </div>
                <div class="top-news__list">
                    <?php if ($the_query->have_posts()) : ?>
                        <ul class="posts-type1__lists">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li class="posts-type1__list">
                                    <a href="<?php the_permalink(); ?>" class="posts-type1__link">
                                        <div class="posts-type1__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('full'); ?>
                                            <?php else : ?>
                                                <img src="<?= THEMEIMG; ?>/noimg.jpg" alt="" >
                                            <?php endif; ?>
                                        </div>
                                        <div class="posts-type1__date"><?= get_the_date('Y.m.d'); ?></div>
                                        <div class="posts-type1__title"><?php the_title(); ?></div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>