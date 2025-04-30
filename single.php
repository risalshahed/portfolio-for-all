<?php
get_header();
?>
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
                            <div class="our-portfolio-swiper-btn-wrap">
                                <div class="nav-previous"><?php previous_post_link('%link', '← Previous Post'); ?></div>
                                <div class="nav-next"><?php next_post_link('%link', 'Next Post →'); ?></div>
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