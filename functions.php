

<?php
/* CSSとJavaScriptの読み込み */
function my_script_init()
    { wp_enqueue_script( 'script-name', get_template_directory_uri() . '/css/header.js?var1_0_0', array(  ), '1.0.1', true );
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css?ver1_0_9', array(), '1.0.1' );
        wp_enqueue_style( 'style-header', get_template_directory_uri() . '/css/header.css?ver1_0_8', array(), '1.0.1' );
        wp_enqueue_style( 'style-archive', get_template_directory_uri() . '/css/archive.css?ver1_0_3', array(), '1.0.1' );
        wp_enqueue_style( 'style-footer', get_template_directory_uri() . '/css/footer.css?ver1_0_4', array(), '1.0.1' );
        wp_enqueue_style( 'style-post', get_template_directory_uri() . '/css/post.css', array(), '1.0.1' );
        wp_enqueue_style( 'style-about', get_template_directory_uri() . '/css/page-about.css?ver1_0_8', array(), '1.0.1' );
        wp_enqueue_style( 'style-entry', get_template_directory_uri() . '/css/page-entry.css?ver1_0_9', array(), '1.0.1' );
        wp_enqueue_style( 'style-category', get_template_directory_uri() . '/css/category.css?ver1_0_6', array(), '1.0.1' );
        wp_enqueue_style( 'style-single-post', get_template_directory_uri() . '/css/single-post.css?ver1_0_1', array(), '1.0.1' );
    }
    add_action('wp_enqueue_scripts', 'my_script_init');
?>

<?php
    function my_scripts_method() {
        wp_enqueue_script(
            'custom_script',
            get_template_directory_uri() . '/test.js',
        );
    }
    add_action('wp_enqueue_scripts', 'my_scripts_method');
?>

<?php
// title自動出力
    add_theme_support( 'title-tag' );
?>



<?php
//固定ページの画像呼び出しパス
function imagepassshort($arg) {
    $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
    return $content;
    }
    add_action('the_content', 'imagepassshort');
?>

<?php
// アイキャッチ画像を有効化
add_theme_support('post-thumbnails'); 
?>


<?php
// 記事IDを指定して抜粋文を取得
function ltl_get_the_excerpt($post_id){
    global $post;
    $post_bu = $post;
    $post = get_post($post_id);
    setup_postdata($post_id);
    $output = get_the_excerpt();
    $post = $post_bu;
    return $output;
    }
    
    //ブログカード
    function nlink_scode($atts) {
    extract(shortcode_atts(array(
    'url'=>"",
    'title'=>"",
    'excerpt'=>""
    ),$atts));
    
    $id = url_to_postid($url);//URLから投稿IDを取得
    
    
    //タイトルを取得
    if(empty($title)){
    $title = esc_html(get_the_title($id));
    }
    //抜粋文を取得
    if(empty($excerpt)){
    $excerpt = esc_html(ltl_get_the_excerpt($id));
    }
    
    //アイキャッチ画像を取得
    if(has_post_thumbnail($id)) {
    $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'medium');
    $img_tag = "<img src='" . $img[0] . "' alt='{$title}'/>";
    }else{
    $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
    }
    
    $nlink .='
    <div class="blog-card">
    <a href="'. $url .'">
    <div class="blog-card-thumbnail">'. $img_tag .'</div>
    <div class="blog-card-content">
    <div class="blog-card-title">'. $title .' </div>
    <div class="blog-card-excerpt">'. $excerpt .'</div>
    </div>
    <div class="clear"></div>
    </a>
    </div>';
    
    return $nlink;
    }
    
    add_shortcode("nlink", "nlink_scode");
?>

<?php
// カテゴリー記事一覧
function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
    }
    add_shortcode('original_php', 'my_php_Include');

?>

