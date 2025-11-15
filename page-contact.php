<?php get_header(); ?>
<?php get_template_part('header-dropdown'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Contact</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="/">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<div class="contact-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="contact-info-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-1">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h2 class="title">Address</h2>
                        <p class="para">Lalbag, Dhaka</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-2">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h2 class="title">E-mail</h2>
                        <a href="mailto:yusuf.bdmail@gmail.com">
                            <p class="para">yusuf.bdmail@gmail.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-3">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h2 class="title">Call Me</h2>
                        <!-- <p class="para">+8801672245447</p> -->
                         <div class="ft-link tmp-scroll-trigger animation-order-1 tmp-link-animation">
                            <p>
                                <a href="tel:+8801672245447">+8801672245447</a>
                            </p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapTop">
        <div class="container">
            <div class="contact-get-in-touch-wrap">
                <div class="get-in-touch-wrapper tmponhover">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <span class="subtitle">GET IN TOUCH</span>
                                </div>
                                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate your brand with Me </h2>
                                <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a reader will be
                                    distrol acted bioiiy desig
                                    ished fact that a reader will acted ished fact that a reader will be distrol
                                    acted </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-inner">
                                <!-- Contact Form -->
                                <?php get_template_part('contact-form'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Get In touch End -->

</div>
<?php get_footer(); ?>