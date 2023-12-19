<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
        <div class="c-section-header--white">
            <h1 class="c-section-header__engtitle">works</h1>
            <p class="c-section-header__jatitle">制作実績</p>
        </div>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part( 'breadcrumb' ); ?>


<section class="l-archive-works p-archive-works">
    <div class="p-archive-works__inner l-inner">
        <div class="p-archive-works__items">
            <!-- ループ -->
            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="p-archive-works__item">
                <div class="p-archive-works__img">
                    <?php if (has_post_thumbnail()): ?>
                    <!-- 投稿にアイキャッチ画像が有る場合の処理 -->
                    <?php the_post_thumbnail(); ?>
                    <!-- アイキャッチ画像がない場合の処理 -->
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/noimage.png" alt="">
                    <?php endif; ?>
                </div>
                <div class="p-archive-works__title">
                    <h2 class="p-archive-works__name"><?php the_title(); ?> 様</h2>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- ループ終了 -->
        </div>
    </div>
</section>

<?php get_footer(); ?>