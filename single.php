<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
        <div class="c-section-header--white">
            <h1 class="c-section-header__engtitle">news</h1>
            <p class="c-section-header__jatitle">お知らせ</p>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part( 'breadcrumb' ); ?>

<!-- ループ処理開始 -->
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<section class="l-single-body p-single-body">
    <div class="p-single-body__inner l-inner">
        <div class="p-single-body__title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="p-single-body__meta">
            <div class="p-news-content">
                <div class="p-news-content__meta">
                    <time datetime="<?php the_time('c') ?>"
                        class="p-news-content__date"><?php the_time('Y.m.d') ?></time>
                    <p class="p-news-content__category">
                        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                    </p>
                </div>
            </div>
        </div>
        <?php if (has_post_thumbnail()): ?>
        <div class="p-single-body__image">
            <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <div class="p-single-body__content">
            <?php the_content(); ?>
        </div>

        <div class="c-page-link">
            <div class="c-page-link__inner">
                <div class="c-page-link__flex">
                    <div class="c-page-link__prev">
                        <?php previous_post_link('%link', '%title'); ?>
                    </div>
                    <div class="c-page-link__next">
                        <?php next_post_link('%link', '%title'); ?>
                    </div>
                </div>
                <div class="c-page-link__archive">
                    <a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS一覧</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!-- ループ終了 -->

<?php get_footer(); ?>