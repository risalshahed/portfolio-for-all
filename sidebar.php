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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/about-me-user-img.png" alt="about-me-user-img">
                    </div>
                    <div class="about-me-right-content">
                        <h3 class="title">Fatima Afrafy</h3>
                        <p class="para">UI/UX Designer</p>
                        <div class="social-link">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <p class="about-me-para">
                    Aliquam eros justo, posuere loborti viverra ullamcorper posuere viverra. Aliquam eros justo, posuere justo, posuere.
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