            <footer>
                <div class="footer-top">
                    <div class="footer-tell">
                        <div class="footer-tell-content">
                            <div class="tell-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-tell.png" alt="tell">
                            </div>
                            <div class="footer-top-txt">
                                <p class="footer-top-1">お電話でのお問い合わせ</p>
                                <p class="footer-top-2">0123-456-7890</p>
                            </div>
                        </div>
                        <a href="#"></a>
                    </div>
                    <div class="footer-mail">
                        <div class="footer-mail-content">
                            <div class="mail-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-mail.png" alt="tell">
                            </div>
                            <div class="contact-bottom-txt">
                                <p class="footer-top-3">Webページからの<br>お問い合わせ</p>
                            </div>
                        </div>
                        <a href="#"></a>
                    </div>
                </div> <!-- footer-top -->
                <div class="footer-bottom">
                    <div class="footer-bottom1">
                        <div class="footer-left">
                            <h1><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社isara"></h1>
                            <p>東京都〇〇区〇〇1234-567〇〇ビル３階</p>
                        </div>
                        <!-- sns -->
                        <div class="footer-right">
                            <a href="#">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </a>
                            <a href="#">        
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-line fa-lg"></i>
                            </a>
                        </div>
                    </div><!-- footer-bottom -->
                    <p class="copy">Copyright @2020 iSara</p>
                </div><!-- footer-bottom-->
                <?php wp_footer(); ?>
            </footer>
        </div>
    </div> <!-- container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('.l-drawer__icon').click(function(){
            $('body').toggleClass('open');
        });
    </script>
</body>
</html>
