<?php
/**
 * Template Name: ページタイプ１ - コンテンツ部白枠版
 *
 */
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <?php if ( have_posts() ) : ?>
            <div class="pgtype1">
                <section class="pgtype1-breadcrumb breadcrumb">
                    <ul class="breadcrumb__lists">
                        <li class="breadcrumb__list">
                            <a href="<?= home_url(); ?>" class="breadcrumb__link">トップ</a>
                        </li>
                        <li class="breadcrumb__list">
                            <a href="<?= get_post_type_archive_link(get_post_type()); ?>" class="breadcrumb__link">お知らせ</a>
                        </li>
                        <li class="breadcrumb__list">
                            <?= get_the_title(); ?>
                        </li>
                    </ul>
                </section>
                <section class="pgtype1-mv">
                    <div class="pgtype1-mv__inner">
                        <div class="pgtype1-mv__title-en fl-orange">NEWS</div>
                        <h2 class="pgtype1-mv__title-ja">お知らせ</h2>
                    </div>
                </section>
                
                <section class="pgtype1-content">
                    <div class="pgtype1-content__inner">
                        <div class="pgtype1-content__box standard-inner type1">
                            <div class="post-type1">
                                <div class="post-type1__data"><?= get_the_date('Y.m.d'); ?></div>
                                <h2 class="post-type1__title"><?= get_the_title(); ?></h2>
                                <div class="post-type1__content"><?php the_content(); ?></div>
                                <div class="post-type1__btn btn-type3 gray">
                                    <a href="<?= get_post_type_archive_link(get_post_type()); ?>" class="btn-type3__link">一覧に戻る</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>