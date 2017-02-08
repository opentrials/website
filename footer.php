<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Open Trials
 */
?>

    <footer class="site-footer">
        <div>
            <section>
                <a href="https://okfn.org/" class="footer-logo" rel="external">
                    <img alt="Open Knowledge" src="https://a.okfn.org/img/oki/landscape-white-468x122.png" alt="Open Knowledge International">
                </a>
                <a class="footer-logo" >
                    <img src="<?php echo get_template_directory_uri() ?>/img/cos.png" alt="Center for Open Science">
                </a>
                <a class="footer-logo" >
                    <img src="<?php echo get_template_directory_uri() ?>/img/ljaf.png" alt="Laura and John Arnold Foundation">
                </a>
            </section>
            <section>
                <a class="cc" href="https://creativecommons.org/publicdomain/zero/1.0/" rel="external">
                    CC-0
                </a>
            </section>
        </div>
    </footer>
	
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>   
<?php wp_footer(); ?>

</body>
</html>
