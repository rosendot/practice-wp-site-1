<footer class="site-footer">
    <div class="footer__grid">
        <div class="footer__about">
            <div class="footer__brand"><?php bloginfo('name'); ?></div>
            <p class="footer__description">Authentic Mexican cuisine made with family recipes and the freshest ingredients. Serving the Charlotte community since 2020.</p>
        </div>

        <div class="footer__nav">
            <h4 class="footer__title">Quick Links</h4>
            <ul class="footer__links">
                <li><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/menu')); ?>">Menu</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
            </ul>
        </div>

        <div class="footer__contact">
            <h4 class="footer__title">Contact</h4>
            <p>123 Main Street<br>Charlotte, NC 28202</p>
            <p>(704) 555-0123</p>
            <p>Mon&ndash;Fri: 11am &ndash; 10pm<br>Sat&ndash;Sun: 10am &ndash; 11pm</p>
        </div>
    </div>

    <div class="footer__bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
