<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">

<div class="clear_div"></div>
<!-- banner start -->
<section class="pb-md-5 pb-3">
    <div class="container first_section contaner_width position-relative">
        <img class="img-fluid position-absolute n_flower_img" src="<?php echo get_template_directory_uri(); ?>/css/img/NewsImgector.png" alt="">
        <div class="row baner_contaner_b">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
                <div class="">
                    <h1 class="mt-4"><?php single_cat_title(); ?></h1>
                    <p class="mb-1">
                        Welcome to our digital agency's news hub! Stay ahead of the game with our latest insights, trends, and strategies in the ever-evolving
                        <br>
                        digital landscape. Dive into our curated content and unlock the secrets to digital success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<div class="container">
    <?php
    // Fetch related news posts
    $current_category = get_queried_object();
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => 6,
        'post__not_in' => array(get_the_ID()),
        'category__in' => array($current_category->term_id),
        'ignore_sticky_posts' => 1
    );
    $related_news = new WP_Query($args);
    ?>

    <?php if ($related_news->have_posts()) : ?>
        <div class="related-news">
            <div class="row pt-md-5 pt-3 w-100 m-0">
                <?php while ($related_news->have_posts()) : $related_news->the_post(); ?>
                    <div class="col-lg-4 col-md-6 mb-md-5 mb-4 pb-md-4 pb-2 ness_post">
                        <div class="post_border pt-4"></div>
                        <div class="n_date mb-md-4 mb-3">
                            <?php echo get_the_date('F j, Y'); ?>
                        </div>
                        <a class="news_link" href="<?php the_permalink(); ?>">
                            <h2 class="mb-md-4 mb-2">
                                <?php the_title(); ?>
                            </h2>
                        </a>
                        <p class="mb-4">
                            <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                        </p>
                        <div class="categories">
                            <?php
                            $post_categories = get_the_category();
                            if ($post_categories) {
                                foreach ($post_categories as $category) {
                                    echo '<a class="btn rounded-pill" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else : ?>
        <p>No related news found.</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <!-- Pagination -->
    <div class="pagination">
        <?php
        // Display pagination
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => __('« Previous', 'textdomain'),
            'next_text' => __('Next »', 'textdomain'),
        ));
        ?>
    </div>
</div>



<?php get_footer(); ?>