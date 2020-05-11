

<?php get_header(); ?>

<div class="mv">

    <div class="mv-txt">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mv-message.png" alt="mv-message">
        <p>あなたにしかできない<span style="color:#FF7166">人生</span>を</p>
    </div>

</div> <!-- mv -->

    <div class="mv-wrapper">
        <div class="mv-box-half">
            <div class="mv-box mv1">
                <div class="mv-box-txt">
                    <h3>ENGINEER</h3>
                    <p>技術職</p>
                </div>
                <a href="#"></a>
            </div>
            <div class="mv-box mv2">
                <div class="mv-box-txt">
                    <h3>DESIGNER</h3>
                    <p>デザイナー</p>
                </div>
                <a href="#"></a>
            </div>
        </div>
        <div class="mv-box-half">
            <div class="mv-box mv3">
                <div class="mv-box-txt">
                    <h3>PLANNER</h3>
                    <p>サービス企画職</p>
                </div>
                <a href="#"></a>
            </div>
            <div class="mv-box mv4">
                <div class="mv-box-txt">
                    <h3>BUSINESS</h3>
                    <p>企画営業職</p>
                </div>
                <a href="#"></a>
            </div>
        </div>
</div> 



<div class="company">
    <h2>主要取引企業</h2>
        <div class="company-img">
            <div class="company-row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/company-1.png" alt="7street" class="company-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/company-2.png" alt="bangkok" class="company-2">
            </div>
            <div class="company-row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/company-3.png" alt="truehome" class="company-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/company-4.png" alt="don" class="company-4">
            </div>
        </div>
    
</div> <!-- company-->



<div class="points">
    <div class="point-inner">
        <div class="point point1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/point-1.png" alt="">
            <p>スマホから簡単に<br>エントリーできます。</p>
        </div>
        <div class="point point2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/point-2.png" alt="">
            <p>まずは気軽にお話しを<br>聞くことができます。</p>
        </div>
        <div class="point point3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/point-3.png" alt="">
            <p>アメリカ・イギリスなどの<br>海外採用も豊富にあります。</p>
        </div>
    </div>

    <div class="more-button">
        <div class="more">
            <a href="#">VIEW MORE</a>
        </div>
    </div>
</div>  <!-- points -->

<!-- end main -->

<div class="interview">
<div class="heading interview-heading">
    <img src="<?php echo get_template_directory_uri(); ?>/img/h-interview.png" alt="interview">
    <p>インタビュー</p>
</div>
<div class="interview-inner">

    <div class="interview1 interview-card">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/interview-1.jpg" alt="inerview"></a>
        <div class="type">
            <p>企画営業</p>
        </div>
        <div class="interview-detail">
            <p class="when">2016年中途入社</p>
            <p class="name1">小島 菜穂子</p>
            <p class="name2">NAOKO KOJIMA</p>
        </div>
    </div>
    <div class="interview2 interview-card">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/interview-2.jpg" alt="interview"></a>

        <div class="type">
            <p>エンジニア</p>
        </div>
        <div class="interview-detail">
            <p class="when">2018年中途入社</p>
            <p class="name1">後藤 知之</p>
            <p class="name2">TOMOYUKI GOTOU</p>
        </div>

    </div>
    <div class="interview3 interview-card">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/interview-3.jpg" alt=""></a>

        <div class="type">
            <p>デザイナー</p>
        </div>
        <div class="interview-detail">
            <p class="when">2017年新卒採用</p>
            <p class="name1">橋下 かおり</p>
            <p class="name2">KAORI HASHIMOTO</p>
        </div>
    </div>
</div>
</div>  <!-- interview -->

<div class="mission">
<div class="heading mission-heading">
    <img src="<?php echo get_template_directory_uri(); ?>/img/h-ourmission.png" alt="mission">
    <p>私たちのミッション</p>
</div>
<div class="mission-inner">
    <div class="mission-left">
        <p class="mission-ttl">本当になりたい自分へ。</p>
        <p class="mission-txt">ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。</p>
    </div>
    <div class="mission-right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ourmission.jpg" alt="missiongirl">
    </div>
</div>

</div>

<div class="news">
    <div class="news-inner">
    <?php $infoPosts = get_posts('numberposts=3');
        foreach($infoPosts as $post):
    ?>
        <div class="news1 news-card">
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
    
    <?php endforeach; ?>
    
    </div> <!-- news-inner  !-->

    <div class="more-button">
        <div class="more">
            <a href="http://localhost/isara/category/news/">VIEW MORE</a>
        </div>
    </div>
</div>


<div class="contact">
    <div class="contact-inner">
        <div class="contact-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/office-ueno.jpg" alt="ueno">
            <div class="contact-detail">
                <div class="contact-txt">
                    <p class="office-name">上野オフィス</p>
                    <p class="office-address">123-4567 東京都〇〇区〇〇</p>
                </div>
            </div>
        </div>

        <div class="contact-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/office-umeda.jpg" alt="umeda">
            <div class="contact-detail">
                <div class="contact-txt">
                    <p class="office-name">梅田オフィス</p>
                    <p class="office-address">123-4567 大阪府〇〇区〇〇</p>
                </div>
            </div>
        </div>                    
    </div>

</div>


<?php get_footer(); ?>




