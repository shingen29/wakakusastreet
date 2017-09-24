<?php get_header(); ?>
<div class="post">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    /* ループ開始 */ ?>
        <h3><?php the_title(); ?></h3>
        <p class="post-date"><?php the_time("Y年m月j日") ?></p>
        <?php the_content(); ?>

    <?php endwhile; ?>
<?php else : ?>

        <h3>空き店舗情報がありません</h3>
        <p>表示する空き店舗はありませんでした。やったね！</p>

<?php endif; ?>
<?php get_footer(); ?>
