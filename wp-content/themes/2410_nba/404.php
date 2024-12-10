<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
            <div class="pgtype3">
                <section class="pgtype3-breadcrumb breadcrumb">
                    <ul class="breadcrumb__lists">
                        <li class="breadcrumb__list">
                            <a href="<?= home_url(); ?>" class="breadcrumb__link">トップ</a>
                        </li>
                        <li class="breadcrumb__list">404</li>
                    </ul>
                </section>
                <section class="pgtype3-content">
                    <div class="pgtype3-content__inner">
                        <div class="pgtype3__title fl-orange">404</div>
                        <div class="pgtype3__text1">お探しのページは見つかりませんでした。</div>
                        <div class="pgtype3__text2">URLが間違っているか、すでに削除されたページの可能性がございます。</div>
                        <div class="pgtype3__btn btn-type3">
                            <a href="<?= home_url(); ?>" class="btn-type3__link">TOP</a>
                        </div>
                    </div>
                </section>
            </div>
    </div>
</main>

<?php get_footer(); ?>