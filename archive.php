

    <?php 
    //Template Name:NEWS
    get_header(); ?>

    <div class="nav">
        <div class="nav-top">
            <h2><?php single_post_title(); ?></h2>
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

    <div class="all-post-inner">
        
        <article class="all-post">
            <?php
                $wp_query = new WP_Query();
                $my_posts = array(
                    'post_type' => 'post',
                    'posts_per_page'=> '10',
                );
                $wp_query->query( $my_posts );
                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <a href=" <?php the_permalink(); ?> " class="blog-card">
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
                </div> <!-- news-card !-->
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            <?php the_posts_navigation( array( 'prev_text' => '前のページへ', 'next_text' => '次のページへ' ) ); ?>
        </article>

    </div>                    



    <?php get_footer(); ?>