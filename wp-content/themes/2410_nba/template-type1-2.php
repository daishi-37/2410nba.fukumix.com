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
                            <?= get_the_title(); ?>
                        </li>
                    </ul>
                </section>
                <section class="pgtype1-mv">
                    <div class="pgtype1-mv__inner">
                        <div class="pgtype1-mv__title-en fl-orange"><?= the_field('pagetitle-en'); ?></div>
                        <h2 class="pgtype1-mv__title-ja"><?= the_field('pagetitle-ja'); ?></h2>
                    </div>
                </section>
                
                <section class="pgtype1-content">
                    <div class="pgtype1-content__inner">
                        <div class="pgtype1-content__box standard-inner type1">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>