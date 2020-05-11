<?php get_header(); ?>

    <div class="nav">
        <div class="nav-top">
            <h2 class="page-title">
                NEWS
            </h2>
        </div> 
        <div class="bread-list">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
        </div>
    </div> <!-- nav-->


<div class="category-page"> 
    <?php
        $paged = (int) get_query_var('paged');
        $the_query = new WP_Query($args);
        if (have_posts()): while (have_posts()):the_post();
    ?>
        <!-- card -->
        <div class="news-card all-post-card">
            <div class="card-top">
                <!-- アイキャッチ img -->
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'news__img', 'alt' => the_title_attribute('echo=0'))); ?>  
                <!-- カテゴリー -->
                <div class="card-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
            </div>
            <div class="news-detail">
                <time class="news-time"><?php the_time('Y年m月d日'); ?><time>
                <h3 class="news-txt"><?php the_title(); ?></h3>
            </div>
            <a href=" <?php the_permalink(); ?> " class="blog-card"></a>
        </div> <!-- news-card !-->
    
    <?php endwhile; endif;?>
    <?php the_posts_navigation( array('prev_text' => '前のページへ','next_text'=>'次のページへ'));?>
    <?php wp_reset_postdata(); ?>

</div>    <!-- category-page-- >
<?php get_footer(); ?>
