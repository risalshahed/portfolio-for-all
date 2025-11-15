<?php get_header(); ?>
<?php get_template_part('header-dropdown'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab"><?php the_title(); ?></h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<div class="blog-classic-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="blog-details-left-area">

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="img-box">
                                    <?php the_post_thumbnail('large', array('class' => 'img-primary hidden-on-mobile')); ?>
                                    <?php the_post_thumbnail('large', array('class' => 'img-secondary')); ?>
                                </div>
                            <?php endif; ?>

                            <div class="blog-details-discription">
                                <div class="blog-classic-tag">
                                    <h4 class="title">By <?php the_author(); ?></h4>
                                    <ul>
                                        <li><div class="tag-wrap"><i class="fa-solid fa-tag"></i><h4 class="tag-title"><?php the_category(', '); ?></h4></div></li>
                                        <li><div class="tag-wrap"><i class="fa-solid fa-calendar-day"></i><h4 class="tag-title"><?php the_time('F j, Y'); ?></h4></div></li>
                                    </ul>
                                </div>
                                <h3 class="title split-collab"><?php the_title(); ?></h3>
                                <div class="para">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                            <!-- Post Navigation -->
                            <!-- Previous post navigation -->
                            <div class="our-portfolio-swiper-btn-wrap">
                                <?php
                                $prev_post = get_previous_post();
                                if (!empty($prev_post)) :
                                ?>
                                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="next-btn">
                                        <div class="tmp-arrow-btn">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </div>
                                        <div class="btn-content">
                                            <span class="para">Previous post</span>
                                            <h4 class="title"><?php echo esc_html(get_the_title($prev_post->ID)); ?></h4>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <!-- Next post navigation -->
                                <?php
                                $next_post = get_next_post();
                                if (!empty($next_post)) :
                                ?>
                                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-btn">
                                        <div class="btn-content">
                                            <span class="para">Next post</span>
                                            <h4 class="title"><?php echo esc_html(get_the_title($next_post->ID)); ?></h4>
                                        </div>
                                        <div class="tmp-arrow-btn">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <!-- Comments -->
                            <div class="comment-area-main-wrapper mt--30">
                                <?php comments_template(); ?>
                            </div>

                        </div>
                <?php
                    endwhile;
                else :
                    echo '<p>No Post Found</p>';
                endif;
                ?>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>