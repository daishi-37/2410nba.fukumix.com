<?php
/**
 * Template Name: サンキューページ
 *
 */
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <?php if ( have_posts() ) : ?>
            <div class="pgtype4">
                <section class="pgtype4-breadcrumb breadcrumb">
                    <ul class="breadcrumb__lists">
                        <li class="breadcrumb__list">
                            <a href="<?= home_url(); ?>" class="breadcrumb__link">トップ</a>
                        </li>
                        <li class="breadcrumb__list">
                            <?= get_the_title(); ?>
                        </li>
                    </ul>
                </section>
                <section class="pgtype4-mv">
                    <div class="pgtype4-mv__inner standard-inner type2">
                        <div class="pgtype4-mv__title-en fl-orange"><?= the_field('pagetitle-en'); ?></div>
                        <h2 class="pgtype4-mv__title-ja"><?= the_field('pagetitle-ja'); ?></h2>
                    </div>
                </section>
                
                <section class="pgtype4-content">
                    <div class="pgtype4-content__inner standard-inner type2">
                        <?php the_content(); ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer('contact'); ?>