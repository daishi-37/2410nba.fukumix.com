<?php
/**
 * Template Name: ページタイプ2
 *
 */
global $has_staff_list;
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <?php if ( have_posts() ) : ?>
            <div class="pgtype2">
                <section class="pgtype2-breadcrumb breadcrumb">
                    <ul class="breadcrumb__lists">
                        <li class="breadcrumb__list">
                            <a href="<?= home_url(); ?>" class="breadcrumb__link">トップ</a>
                        </li>
                        <li class="breadcrumb__list">
                            <?= get_the_title(); ?>
                        </li>
                    </ul>
                </section>
                <section class="pgtype2-mv">
                    <div class="pgtype2-mv__inner">
                        <div class="pgtype2-mv__title">
                            <div class="pgtype2-mv__title-en fl-orange"><?= the_field('pagetitle-en'); ?></div>
                            <h2 class="pgtype2-mv__title-ja"><?= the_field('pagetitle-ja'); ?></h2>
                        </div>
                        <div class="pgtype2-mv__image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="pgtype2-mv__icon">
                            <img src="<?= get_field('pgtype2-icon');?>" class="pgtype2-mv__icon-img w<?= the_field('pgtype2-icon-width'); ?>">
                        </div>
                        <div class="pgtype2-mv__text">
                            <?= the_field('pgtype2-title'); ?>
                        </div>
                    </div>
                </section>
                
                <section class="pgtype2-content">
                    <div class="pgtype2-content__inner">
                        <?php the_content(); ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php if($has_staff_list): ?>
    <section class="staff-modal">
        <div class="staff-modal__inner standard-inner type1">
            <article class="staff-modal__article">
                <a href="" class="staff-modal__close"></a>
                <div class="staff-modal__figure">
                    <img src="https://2410nba.fukumix.com/wp-content/uploads/2024/11/staff01.jpg" class="staff-modal__img">
                </div>
                <div class="staff-modal__row name">
                    <div class="staff-modal__row-th">代表</div>
                    <div class="staff-modal__row-td">猪原 大輝</div>
                </div>
                <div class="staff-modal__row license">
                    <div class="staff-modal__row-th">資格</div>
                    <div class="staff-modal__row-td">柔道整復師 / 鍼灸師 / 按摩マッサージ指圧師 / 食生活アドバイザー</div>
                </div>
                <div class="staff-modal__row menu">
                    <div class="staff-modal__row-th">担当メニュー</div>
                    <div class="staff-modal__row-td">美容鍼 / 刺絡 / 鍼治療 / 深もみ / 訪問医療マッサージ / オーダーメイド治療</div>
                </div>
                <div class="staff-modal__row hobby">
                    <div class="staff-modal__row-th">趣味</div>
                    <div class="staff-modal__row-td">ボディメイク、アート</div>
                </div>
            </article>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>