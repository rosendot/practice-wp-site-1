<footer class="site-footer">
    <div class="footer__grid">
        <div class="footer__contact">
            <h4 class="footer__title">Contact Us</h4>
            <p>3001 Brellon Ln<br>Durham, NC 27703</p>
            <p>(704) 555-0123</p>
            <p>hola@lamesa.com</p>
        </div>

        <div class="footer__brand-col">
            <div class="footer__brand"><?php bloginfo('name'); ?></div>
            <p class="footer__tagline">Authentic Mexican Kitchen</p>
            <div class="footer__social">
                <a href="#" aria-label="Facebook" class="footer__social-link">FB</a>
                <a href="#" aria-label="Instagram" class="footer__social-link">IG</a>
            </div>
        </div>

        <div class="footer__hours">
            <h4 class="footer__title">Opening Hours</h4>
            <p>Monday &ndash; Friday<br>11:00am &ndash; 10:00pm</p>
            <p>Saturday &ndash; Sunday<br>10:00am &ndash; 11:00pm</p>
        </div>
    </div>

    <div class="footer__bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
