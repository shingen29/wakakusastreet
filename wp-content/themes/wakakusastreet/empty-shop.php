<?php
/* Template Name:空き店舗 */
get_header();

$args = array(
     'post_type' => 'empty-shop', /* 投稿タイプを指定 */
); ?>
<?php query_posts($args); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    /* ループ開始 */ ?>
    <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="post-date"><?php the_time("Y年m月j日") ?></p>
        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>     
<?php else : ?>
    <div class="post">
        <h3>空き店舗情報がありません</h3>
        <p>表示する空き店舗はありませんでした。やったね！</p>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
