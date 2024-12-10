<?php
/**
 * Template Name: ページタイプ１
 *
 */
?>

<?php get_header(); ?>
<?php
    $terms = get_terms('voices_category',
        array(
            'hide_empty' => 0,
            'orderby' => 'id',
            'order' => 'ASC'
        )
    );
    $term_now = get_queried_object();
?>
<main class="main">
    <div class="main__inner">
        <div class="pgtype1">
            <section class="pgtype1-breadcrumb breadcrumb">
                <ul class="breadcrumb__lists">
                    <li class="breadcrumb__list">
                        <a href="<?= home_url(); ?>" class="breadcrumb__link">トップ</a>
                    </li>
                    <li class="breadcrumb__list">利用者様の声(<?= $term_now->name; ?>)</li>
                </ul>
            </section>
            <section class="pgtype1-mv">
                <div class="pgtype1-mv__inner">
                    <div class="pgtype1-mv__title-en fl-orange">USER’S VOICE</div>
                    <h2 class="pgtype1-mv__title-ja">利用者様の声</h2>
                </div>
            </section>
            
            <section class="pgtype1-content">
                <div class="pgtype1-content__inner standard-inner type1">
                    <div class="posts-type2__header-text">
                        1人1人の健康をデザインするNBAを<br>利用した皆さまの声をお届けします
                    </div>
                    <ul class="posts-type2__categories">
                        <?php foreach($terms as $term) : ?>
                            <?php if($term_now->term_id == $term->term_id) : ?>
                                <li class="posts-type2__category current">
                                    <?= $term->name; ?>
                                </li>
                            <?php else : ?>
                                <li class="posts-type2__category">
                                    <a href="<?= get_term_link($term); ?>" class="posts-type2__category-link"><?= $term->name; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="posts-type2__header">
                        <div class="posts-type2__header-name"><span><?= $term_now->name; ?></span>の記事</div>
                        <div class="posts-type2__header-num"><?= $wp_query->found_posts; ?>件</div>
                    </div>
                    <?php if( have_posts() ) : ?>
                        <ul class="posts-type2__lists">
                            <?php while( have_posts() ) : the_post(); ?>
                                <li class="posts-type2__list">
                                    <div class="posts-type2__icon">
                                        <img src="<?= get_field('voices__icon'); ?>" alt="<?= get_the_title(); ?>">
                                    </div>
                                    <div class="posts-type2__cate"><?= get_the_terms(get_the_ID(),'voices_category')[0]->name; ?></div>
                                    <div class="posts-type2__title"><?= get_the_title(); ?></div>
                                    <div class="posts-type2__text"><?= get_field('voices__text'); ?></div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; wp_reset_postdata(); ?>
                    <?php my_pagination($wp_query->max_num_pages, get_query_var('paged'), 2); ?>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>