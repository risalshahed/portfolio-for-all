</main>
<footer class="footer-area footer-style-two-wrapper bg-color-footer bg_images tmp-section-gap">
    <div class="container">
        <div class="footer-main footer-style-two">
            <div class="row g-5">
                <div class="col-md-5 col-sm-6">
                    <div class="single-footer-wrapper border-right mr--20">
                        <div class="logo">
                            <a href="/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/md-yusuf-logo.png" alt="Md Yusuf">
                            </a>
                        </div>
                        <p class="description">Md. Yusuf aka Marketer Yusuf - is the best brand marketer in Bangladesh with <?php echo pfa_get_experience_in_years(); ?>+ years of experience.</p>
                        <div class="social-link footer">
                            <?php get_template_part('socials'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="quick-link-wrap">
                        <h4 class="ft-title">Quick Link</h4>
                        <ul class="ft-link tmp-scroll-trigger animation-order-1 tmp-link-animation">
                            <li>
                                <a href="/">Home</a>
                            </li>
							<li>
                                <a href="/about">About Me</a>
                            </li>
                            <li>
                                <a href="/service">Contact Us</a>
                            </li>
                            <li>
                                <a href="/blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-footer-wrapper contact-wrap">
                        <h4 class="ft-title" id="ft-title-contact">Contact</h4>
                        <ul class="ft-link tmp-scroll-trigger animation-order-1 tmp-link-animation">
                            <li><span class="ft-icon"><i class="fa-solid fa-phone"></i></span><a href="tel:+8801672245447">+8801672245447</a></li>
                            <li><span class="ft-icon"><i class="fa-solid fa-location-dot"></i></span>Lalbag, Dhaka</li>
                            <li><span class="ft-icon"><i class="fa-solid fa-envelope"></i></span><a href="mailto:yusuf.bdmail@gmail.com">yusuf.bdmail@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-wrapper tmp-scroll-trigger animation-order-1">
                    <p class="copy-right-para">© Md. Yusuf <script>
                        document.write(new Date().getFullYear())
                        </script> | All Rights Reserved</p>
                    <ul class="tmp-link-animation">
                        <li><a href="/privacy-policy">Privacy Policy</a></li> 
						<li><a href="/contact">Contact</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scrollToTop" style="display: block;">
    <div class="arrowUp">
        <i class="fa-light fa-arrow-up"></i>
    </div>
    <div class="water" style="transform: translate(0px, 87%);">
        <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
            <use xlink:href="#wave"></use>
        </svg>
        <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
            <use xlink:href="#wave"></use>
        </svg>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 560 20" style="display: none;">
            <symbol id="wave">
                <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z" fill="#"></path>
                <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z" fill="#"></path>
                <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z" fill="#"></path>
                <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z" fill="#"></path>
            </symbol>
        </svg>

    </div>
</div>
<!-- wp_footer -->
<?php wp_footer(); ?>

<!-- Prevent ajax in Contact Form Submit -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Remove class
        const form = document.querySelector("#contact-form");
        if (form) {
            form.classList.remove("tmp-dynamic-form");
        }

        // Kill ANY jQuery AJAX submit handlers for this form
        if (window.jQuery) {
            const $ = jQuery;

            // Remove all submit handlers attached to this form
            $(form).off('submit');

            // ALSO remove delegated handlers on body (theme does this)
            $('body').off('submit', '#contact-form');
            $('body').off('submit', '.tmp-dynamic-form');
        }
    });
</script>


</body>
</html>