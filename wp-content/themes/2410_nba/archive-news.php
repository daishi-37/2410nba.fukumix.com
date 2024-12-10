<?php
/**
 * Template Name: ページタイプ１
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
                        <li class="breadcrumb__list">お知らせ</li>
                    </ul>
                </section>
                <section class="pgtype1-mv">
                    <div class="pgtype1-mv__inner">
                        <div class="pgtype1-mv__title-en fl-orange">NEWS</div>
                        <h2 class="pgtype1-mv__title-ja">お知らせ</h2>
                    </div>
                </section>
                
                <section class="pgtype1-content">
                    <div class="pgtype1-content__inner standard-inner type1">
                        <div class="posts-type1__header">
                            <div class="posts-type1__header-name">すべての記事</div>
                            <div class="posts-type1__header-num"><?= $wp_query->found_posts; ?>件</div>
                        </div>
                        <?php if( have_posts() ) : ?>
                            <ul class="posts-type1__lists">
                                <?php while( have_posts() ) : the_post(); ?>
                                    <li class="posts-type1__list">
                                        <a href="<?= get_the_permalink(); ?>" class="posts-type1__link">
                                            <div class="posts-type1__img">
                                                <?php if( has_post_thumbnail() ) : ?>
                                                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>">
                                                <?php else : ?>
                                                    <img src="<?= THEMEIMG; ?>/noimg.jpg" alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="posts-type1__date"><?= get_the_date('Y.m.d'); ?></div>
                                            <div class="posts-type1__title"><?= get_the_title(); ?></div>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; wp_reset_postdata(); ?>
                        <?php my_pagination($wp_query->max_num_pages, get_query_var('paged'), 2); ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>