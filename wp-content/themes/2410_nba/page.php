<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <?php if ( have_posts() ) : ?>
            <div class="pagetype1">
                <section class="pagetype1-mv mv-type2">
                    <div class="mv-type2__inner">
                        <div class="mv-type2__title">
                            <p class="mv-type2__title-en"></p>
                            <h2 class="mv-type2__title-ja"></h2>
                        </div>
                    </div>
                </section>

                <!-- ここからページコンテンツ -->
                <section class="pagetype1-content">
                    <div class="pagetype1-content__inner">
                        <?php the_content(); ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>