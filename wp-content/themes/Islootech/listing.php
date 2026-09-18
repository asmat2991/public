<?php
/*
Template Name: CaseStudy Listing Template
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<div class="clear_div"></div>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=1.2.2">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css?v=1.2.4">

<section class="my-5">
    <div class="container py-md-5 mt-md-5 contaner_width position-relative">
        <div class="row pb-md-5 pb-4 row-bottom-border align-items-center">
            <div class="col-md-7 mb-md-0 mb-4">
                <h1 class="fw-bold text-uppercase caesstudy-main-h">
                    Case Study
                </h1>
            </div>
            <div class="col-md-5 d-flex justify-content-end">
                <div class="main-dev-right">
                    <h2 class="mb-lg-5 mb-4 text-uppercase caesstudy-median-h">
                        Transforming Businesses <br class="d-md-block d-none"> with Innovative IT Solutions 
                    </h2>
                    <img class="img-fluid caesstudy-main-img mb-2" src="https://islootech.com/wp-content/uploads/2025/03/case-study.jpg" alt="">
                    <p class="caesStudy-main-p">
                        Real-World Success Stories of <br class="d-md-block d-none"> How We Empower Businesses with <br class="d-md-block d-none">Custom Software, ERP, and Cutting-Edge Tech
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row py-5 row-bottom-border align-items-center">
            <div class="col-md-12">
                <div class="pdf-slider">
                    <div class="item">
                        <p class="pdf-p d-flex align-items-end mb-4"><span class="me-3">Little time to <br> devote
                                me?</span><span><svg xmlns="http://www.w3.org/2000/svg" width="77" height="68"
                                    viewBox="0 0 77 68" fill="none">
                                    <g clip-path="url(#clip0_1988_31)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M60.4193 9.12791L60.8221 1.69833L63.7952 1.86489L63.3924 9.29447C62.617 23.5901 52.5288 35.6419 38.632 38.8754L29.3587 41.0331L33.1479 57.3181L38.3212 48.9726C38.424 48.8062 38.5588 48.6618 38.7177 48.5477C38.8766 48.4335 39.0565 48.352 39.2471 48.3076C39.4376 48.2633 39.635 48.2571 39.828 48.2893C40.0209 48.3216 40.2056 48.3916 40.3714 48.4955C40.7069 48.7055 40.9456 49.0398 41.0353 49.4253C41.125 49.8108 41.0584 50.2161 40.85 50.5526L33.7797 61.9576C33.6768 62.124 33.5421 62.2684 33.3832 62.3825C33.2243 62.4967 33.0444 62.5782 32.8538 62.6226C32.6633 62.6669 32.4659 62.6731 32.2729 62.6409C32.08 62.6086 31.8953 62.5385 31.7295 62.4347L20.3506 55.3224C20.0151 55.1124 19.7764 54.7781 19.6867 54.3926C19.597 54.0071 19.6636 53.6018 19.872 53.2653C19.9749 53.0991 20.1096 52.9548 20.2685 52.8408C20.4273 52.7268 20.6071 52.6453 20.7975 52.601C20.9879 52.5566 21.1852 52.5504 21.3781 52.5826C21.5709 52.6148 21.7555 52.6847 21.9213 52.7885L30.2483 57.9928L26.4592 41.7078L15.8077 44.1861C11.1443 45.2712 6.4801 42.3554 5.39095 37.6744C4.30201 32.9944 7.20008 28.32 11.8635 27.235L14.4163 26.641C20.4901 25.2277 26.5642 29.0229 27.9826 35.1191L28.6815 38.1229L37.9539 35.9654C50.563 33.0315 59.7163 22.0977 60.4193 9.12791ZM25.782 38.7975L25.0831 35.7938C24.0384 31.3037 19.5658 28.5096 15.0932 29.5503L12.5414 30.144C9.47824 30.8568 7.57429 33.9261 8.28952 37C9.00497 40.0748 12.0683 41.9884 15.1305 41.2759L25.782 38.7975Z"
                                            fill="#EC310D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1988_31">
                                            <rect width="66" height="54" fill="white"
                                                transform="translate(0 14.957) rotate(-13.0984)" />
                                        </clipPath>
                                    </defs>
                                </svg></span></p>
                        <div class="ms-md-5 d-flex justify-content-between align-items-center">
                            <a class="btn pdf-btn text-white ms-md-5" target="_blank" href="https://islootech.com/wp-content/uploads/2025/02/PROFILE-ISLOO-TECH.pdf">Look at this PDF</a>
                            <button class="btn ms-5 scroll-btn text-uppercase">(scroll)</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-md-5 mt-5 c_m_5">
    <div class="container pb-md-4 pt-md-0 pt-4 contaner_width position-relative">
        <?php
        $custom_posttype_portfolio = new WP_Query(
            array(
                'posts_per_page' => 100,
                'post_type'      => 'portfolio'
            )
        );

        if ($custom_posttype_portfolio->have_posts()) :
            $count = 0;
            echo '<div class="row">';
            while ($custom_posttype_portfolio->have_posts()) :
                $custom_posttype_portfolio->the_post();
                $count++;

                // First 2 items (6x6 layout)
                if ($count % 3 === 1 || $count % 3 === 2) {
                    echo '<div class="col-md-6 mb-md-5 mb-5 project-col pb-1">';
                }
                // Every third item (full-width 12)
                elseif ($count % 3 === 0) {
                    echo '<div class="col-md-6 project-col mb-md-5 mb-5 full-section-row">';
                }

                // Image
                echo '<img class="img-fluid mb-4 caseStudyMainSliderImg" src="' . get_the_post_thumbnail_url() . '" alt="">';

                // Title and Button
                echo '<div class="d-flex pt-2 justify-content-between mb-2">';
                echo '<p class="slider-p-1 mb-0">' . get_the_title() . '</p>';
                $portfolio = get_field('portfolio');
                if ($portfolio) :
                    $page_url = $portfolio['page_url'] ?? '';
                    if ($page_url) :
                        echo '<a class="btn pt-0 pe-0" href="' . esc_url($page_url) . '">';
                    else :
                        echo '<p>The URL is not available</p>';
                    endif;
                endif;
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                    <circle cx="21.9203" cy="21.9199" r="15.5" transform="rotate(-45 21.9203 21.9199)" fill="black" />
                    <path d="M19.2746 18.2029C19.6494 18.5777 20.5811 18.7652 21.4275 18.8582C22.5179 18.98 23.6255 18.9301 
                    24.6926 18.6701C25.4926 18.4752 26.3861 18.1625 26.8715 17.6771M26.8715 17.6771C26.3861 18.1625 
                    26.0729 19.0565 25.8785 19.856C25.619 20.9236 25.5691 22.0312 25.6899 23.1206C25.7834 23.9675 
                    25.9719 24.9002 26.3457 25.274M26.8715 17.6771L16.972 27.5766L26.8715 17.6771Z" fill="white"/>
                    <path d="M19.2746 18.2029C19.6494 18.5777 20.5811 18.7652 21.4275 18.8582C22.5179 18.98 23.6255 18.9301 
                    24.6926 18.6701C25.4926 18.4752 26.3861 18.1625 26.8715 17.6771M26.8715 17.6771C26.3861 18.1625 
                    26.0729 19.0565 25.8785 19.856C25.619 20.9236 25.5691 22.0312 25.6899 23.1206C25.7834 23.9675 
                    25.9719 24.9002 26.3457 25.274M26.8715 17.6771L16.972 27.5766" stroke="white" stroke-width="2"/>
                </svg>';
                echo '</a>';
                echo '</div>';

                // Description
                echo '<p class="slider-p-2">' . get_the_excerpt() . '</p>';

                echo '</div>'; // Close column div

            endwhile;
            echo '</div>'; // Close row div
            wp_reset_postdata();
        endif;
        ?>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
<!-- <script>
    $(document).ready(function() {
        $('.pdf-slider').owlCarousel({
            loop: true,
            margin: 40,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    });
</script> -->
<?php get_footer(); ?>