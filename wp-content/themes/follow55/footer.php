        <footer>
            <div class="container">
                <div class="row">
                    <div class="copyright col-sm-7 col-3">
                        <span style="font-size: 14px"><?php the_field('phone'); ?></span>
                        <span>- <?php the_field('email'); ?></span>
                    </div>
                    <nav class="footer-menu col-sm-5 col-9 text-right has-text-align-right">
                        <?php wp_nav_menu(['theme_location' => 'footer_menu'])?>
                    </nav>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>