


<?php get_header(); ?>



<div class="nav">
    <div class="nav-top">
        <?php if ( is_single() ) : ?>
            <h1>NEWS</h1>
        <?php else: ?>
            <h2>NEWS</h2>
        <?php endif; ?>
    </div>  
    
    <div class="bread-list">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </div>
</div>

<div class="news-post">
    <!-- タイトル -->
    <h2 class="news__title"><?php the_title(); ?></h2>
    <div class="news-detail">
        <!-- 日付 -->
        <time class="news__time"><?php the_time('Y年m月d日'); ?></time>
        <!-- カテゴリー -->
        <div class="single-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
    </div>
    <?php the_post_thumbnail('post-thumbnail', array('class' => 'singleimg', 'alt' => the_title_attribute('echo=0'))); ?>
    <?php if (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endif; ?>

    <?php the_post_navigation( array( 'prev_text' => '前のページへ', 'next_text' => '次のページへ' ) ); ?>
</div> <!-- news post -->






<?php get_footer(); ?>