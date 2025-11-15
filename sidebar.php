<div class="tmp-sidebar">
    <!-- Recent Posts Widget -->
    <div class="signle-side-bar recent-post-area tmponhover">
        <div class="header">
            <h3 class="title">Recent Posts</h3>
        </div>
        <div class="body">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5,
                'post_status' => 'publish'
            ));
            foreach ($recent_posts as $post) :
            ?>
                <a href="<?php echo get_permalink($post['ID']); ?>" class="single-post">
                    <span class="single-post-left">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span class="post-title"><?php echo esc_html($post['post_title']); ?></span>
                    </span>
                    <span class="post-num">(<?php echo get_comments_number($post['ID']); ?>)</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="signle-side-bar recent-post-area tmponhover">
        <div class="header">
            <h3 class="title">Categories</h3>
        </div>
        <div class="body">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) :
            ?>
                <div class="single-post-card tmp-hover-link">
                    <div class="single-post-right">
                        <div class="single-post-top">
                            <i class="fa-regular fa-folder-open"></i>
                            <p class="post-title"><?php echo esc_html($category->name); ?></p>
                        </div>
                        <h3 class="post-title">
                            <a class="link" href="/blog">
                                View Posts
                            </a>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- About Me Widget -->
    <div class="signle-side-bar tmponhover">
        <div class="header">
            <h3 class="title">About Me</h3>
        </div>
        <div class="body">
            <div class="about-me-details">
                <div class="about-me-details-head">
                    <div class="about-me-img">
                        <!-- assets/images/portfolio/md-yusuf -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/md-yusuf-sidebar.png" alt="md-yusuf" style='border-radius: 50%;'>
                    </div>
                    <div class="about-me-right-content">
                        <h2 class="title">Md. Yusuf</h2>
                        <p class="para">Brand Strategist</p>
                        <div class="social-link">
                            <?php get_template_part('socials'); ?>
                        </div>
                    </div>
                </div>
                <p class="about-me-para">
                    Md. Yusuf aka Marketer Yusuf is the best brand strategist crafting research-backed branding and growth-driven campaigns.
                </p>
            </div>
        </div>
    </div>

    <!-- Tags Widget -->
    <div class="signle-side-bar tmponhover">
        <div class="header">
            <h3 class="title">Tags</h3>
        </div>
        <div class="body">
            <div class="tags-wrapper">
                <?php
                $tags = get_tags();
                foreach ($tags as $tag) :
                ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-link"><?php echo esc_html($tag->name); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>