<?php

// Template Name:ABOUT

get_header();

?>

<div class="nav">
    <div class="nav-top">
        <h2>ABOUT</h2>
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

<div class="about">
    <div class="about-content">
        <div class="about-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ceo.jpg" alt="">
        </div>
        <div class="about-right">
            <div class="about-right-content"> 
                <h2>代表あいさつ</h2>
                <div class="about-right-txt">
                    <p>ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。ここに挨拶文が入ります。</p>
                </div>
                <div class="ceo">
                    <p class="ceo-type">代表取締役</p>
                    <p class="ceo-name">竹中 登</p>
                </div>
            </div>         
        </div>
    </div>
</div>  <!-- about -->

<div class="summary">
    <div class="summary-heading">
        <h2>会社概要</h2>
    </div>
    <div class="summary-box">
        <div class="summary-item">
            <div class="summary-name">
                会社名
            </div>
            <div class="summary-content">
                株式会社iSara（英: iSara inc.）
            </div>
        </div>
    <hr>
        <div class="summary-item">
            <div class="summary-name">
                資本金
            </div>
            <div class="summary-content">
                10,000,000円
            </div>
        </div>
    <hr>
        <div class="summary-item">
            <div class="summary-name">
                設立
            </div>
            <div class="summary-content summary-date">
                2011年５月
            </div>
        </div>
    <hr>            
        <div class="summary-item address">
            <div class="address-detail">
                <div class="summary-name">
                    所在地
                </div>
                <div class="summary-content">
                    <p>本社オフィス</p>
                    <p>〒123-4567東京都〇〇区〇〇</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3240.487838698632!2d139.6983826!3d35.689611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1580965845710!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    <hr>
        <div class="summary-item">
            <div class="summary-name">
                連絡先
            </div>
            <div class="summary-content">
                0123-45-6789（代表電話）
            </div>
        </div>
    <hr>
        <div class="summary-item">
            <div class="summary-name">
                社員数
            </div>
            <div class="summary-content">
                270名
            </div>
        </div>
    <hr>
        <div class="summary-item service">
            <div class="summary-name ">
                事業内容
            </div>
            <div class="summary-content service-box">
                <div class="service-content">
                    <p>Webサイト制作事業</p>
                    <p>（企画/マーケティング/ブランディング/デザイン/システム開発）</p>
                </div>
                <div class="service-content">
                    <p>Webサイト制作事業</p>
                    <p>（企画/マーケティング/ブランディング/デザイン/システム開発）</p>
                </div>
                <div class="service-content">
                    <p>Webサイト制作事業</p>
                    <p>（企画/マーケティング/ブランディング/デザイン/システム開発）</p>
                </div> 
            </div>
        </div>
    </div> <!-- summary-box -->
</div><!-- summary-->


        
<?php get_footer(); ?>