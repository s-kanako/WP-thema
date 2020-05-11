
<?php 
// Template Name: ENTRY
get_header();
?>

<div class="nav">
    <div class="nav-top">
        <h2>ENTRY</h2>
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


    <p class="entry-p">詳しい資料をお送りしております。まずはお気軽にお問い合わせください。</p>
    <?php echo do_shortcode( '[contact-form-7 id="163" title="ENTRY"]' ); ?>


<?php get_footer();?>