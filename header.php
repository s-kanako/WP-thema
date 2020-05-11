<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fontawsome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>


<body>

    <div class="container">
        
        <!-- ヘッダー -->
        <header>
            <div class="header-img">
                <?php if ( is_single() ) : ?>
                    <p><a href="<?php $url = home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社isara" class="icon"></a></p>
                <?php else: ?>
                    <h1><a href="<?php $url = home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社isara"></a></h1>
                <?php endif; ?>
            </div>
            <div class="header-right">
                <?php // スラッグからIDを取得して表示
                    $page_about = get_page_by_path('about'); // 投稿オブジェクトの取得
                    $page_about = $page_about->ID; // 投稿オブジェクトからIDを取得
                ?>
                <?php 
                    $cat_id = get_cat_ID('news');
                ?>
                <?php // スラッグからIDを取得して表示
                    $page_entry = get_page_by_path('entry'); // 投稿オブジェクトの取得
                    $page_entry = $page_entry->ID; // 投稿オブジェクトからIDを取得
                ?>
                
                
                <a href="<?php echo get_page_link($page_about); ?>">ABOUT</a>
                <a href="<?php echo get_category_link($cat_id); ?>">NEWS</a>
                <div class="header-entry">
                    <a href="<?php echo get_page_link($page_entry); ?>">ENTRY</a>
                </div>
            </div>
            <?php wp_head(); ?>
        </header> 







        <!-- humberger -->
        <header class="l-header">
            <div class="header-img">
                <?php if ( is_single() ) : ?>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社isara"></p>
                <?php else: ?>
                    <h1><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社isara"></h1>
                <?php endif; ?>
            </div>
            <div class="l-drawer">
                <!-- checkboxは表示しない -->
                <input class="l-drawer__checkbox" id="drawerCheckbox" type="checkbox" >
                <!-- アイコン（三本線） -->
                <label class="l-drawer__icon" for="drawerCheckbox">
                    <span class="l-drawer__icon-parts"></span>
                </label>
                <!-- 背景を暗くする -->
                <label class="l-drawer__overlay" for="drawerCheckbox"></label>
                <nav class="l-drawer__menu">
                    <div class="items">
                        <ul>
                            <li class="l-drawer__item">
                                <a class="l-drawer__item-inner" href="<?php echo esc_url( home_url( '/about' ) ); ?>">ABOUT</a>
                            </li>
                            <li class="l-drawer__item">
                                <a class="l-drawer__item-inner" href="http://localhost/isara/category/news/">NEWS</a>
                            </li>
                            <div class="header-entry">
                                <li class="l-drawer__item">
                                    <a class="l-drawer__item-inner" href="<?php echo esc_url( home_url( '/page-entry' ) ); ?>">ENTRY</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
            <?php wp_head(); ?>
        </header>
