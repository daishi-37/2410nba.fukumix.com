<?php

//-----------------------------------------------------------------------------------//
// サインアップ欄
//-----------------------------------------------------------------------------------//
// function myshort_slider2_func() {
    
// }
// add_shortcode('myshort_slider2', 'myshort_slider2_func');

//-----------------------------------------------------------------------------------//
// スタッフ一覧出力
//-----------------------------------------------------------------------------------//
function my_staffs_lists_func($atts) {
    $atts = shortcode_atts(array(
        'terms' => 'office01',
        'posts_per_page' => 3
    ),$atts);

    global $has_staff_list;
    $has_staff_list = true;
    
    if($atts['terms'] == 'none') {
        $args = array(
            'post_type'      => 'staffs',
            'posts_per_page' => $atts['posts_per_page'],
            'order'          => 'ASC',
            'orderby'        => 'slug',
        );
    } else {
        $args = array(
            'post_type'      => 'staffs',
            'posts_per_page' => $atts['posts_per_page'],
            'order'          => 'ASC',
            'orderby'        => 'slug',
            'tax_query' => array(
                array(
                    'taxonomy' => 'staffs_category',
                    'field' => 'slug',
                    'terms' => $atts['terms'],
                )
            ),
        );
    }
    $args = array(
        'post_type'      => 'staffs',
        'posts_per_page' => $atts['posts_per_page'],
        'order'          => 'ASC',
        'orderby'        => 'slug',
        'tax_query' => array(
            array(
                'taxonomy' => 'staffs_category',
                'field' => 'slug',
                'terms' => $atts['terms'],
            )
        ),
    );
    $the_query = new WP_Query($args);
    ob_start();
    ?>
    <?php if( $the_query->have_posts() ) : ?>
        <ul class="posts-type3__lists">
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li class="posts-type3__list">
                    <a href="<?php the_permalink(); ?>" class="posts-type3__link" 
                        data-figure= "<?php the_post_thumbnail_url(); ?>"
                        data-name="<?= get_field('staff-name'); ?>"
                        data-postion="<?= get_field('staff-position'); ?>"
                        data-license="<?= get_field('staff-license'); ?>"
                        data-menu="<?= get_field('staff-menu'); ?>"
                        data-hobby="<?= get_field('staff-hobby'); ?>"
                    >
                        <figure class="posts-type3__figure">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="posts-type3__name">
                            <?php if(get_field('staff-position') == "代表") : ?>
                                <span>代表</span>
                            <?php endif; ?>
                            <?= get_field('staff-name'); ?>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; wp_reset_postdata(); ?>
    <?php
    return ob_get_clean();
}
add_shortcode('my_staffs_lists', 'my_staffs_lists_func');


//-----------------------------------------------------------------------------------//
// お客様の声一覧出力
//-----------------------------------------------------------------------------------//
function my_voices_lists_func($atts) {
    $atts = shortcode_atts(array(
        'terms' => 'service02',
        'posts_per_page' => 3
    ),$atts);
    
    if($atts['terms'] == 'none') {
        $args = array(
            'post_type' => 'voices',
            'posts_per_page' => $atts['posts_per_page'],
        );
    } else {
        $args = array(
            'post_type' => 'voices',
            'posts_per_page' => $atts['posts_per_page'],
            'tax_query' => array(
                array(
                    'taxonomy' => 'voices_category',
                    'field' => 'slug',
                    'terms' => $atts['terms'],
                )
            ),
        );
    }
    $the_query = new WP_Query($args);
    ob_start();
    ?>
    <?php if( $the_query->have_posts() ) : ?>
        <ul class="posts-type2__lists">
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
    <?php
    return ob_get_clean();
}
add_shortcode('my_voices_lists', 'my_voices_lists_func');