<?php get_header(); ?>
<?php get_template_part('header-dropdown'); ?>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">My Thoughts</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">My Thoughts</li>
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
                <div class="blog-posts-wrapper">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'paged' => $paged,
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="blog-classic-card">
                            <div class="img-box">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('class' => 'img-primary hidden-on-mobile')); ?>
                                        <?php the_post_thumbnail('large', array('class' => 'img-secondary')); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="blog-classic-content">
                                <div class="blog-classic-tag">
                                    <ul>
                                        <li>
                                            <div class="tag-wrap">
                                                <i class="fa-solid fa-tag"></i>
                                                <h4 class="tag-title"><?php the_category(', '); ?>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tag-wrap">
                                                <i class="fa-regular fa-comment"></i>
                                                <h4 class="tag-title"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tag-wrap">
                                                <i class="fa-solid fa-calendar-day"></i>
                                                <h4 class="tag-title"><?php the_time('F j, Y'); ?>
                                                </h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="para"><?php echo wp_trim_words(get_the_content(), 20); ?></p>

                                <div class="tmp-button-here">
                                    <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md" href="<?php the_permalink(); ?>">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Read More</span>
                                            <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <?php
                    else :
                        echo '<p>No Posts Found</p>';
                    endif;

                    wp_reset_postdata();
                    ?>
                    <div id="page-nav">
                        <?php if( 'pfa_pagenav' ) { pfa_pagenav(); } else { ?>
                        <?php next_posts_link(''); ?>
                        <?php previous_posts_link(''); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar if you want (right column) -->
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>