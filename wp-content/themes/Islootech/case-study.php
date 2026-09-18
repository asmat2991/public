<?php /* Template Name: Case Study Template */ ?>
<?php get_header(); ?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=1.2.2">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/casestudy.css?v=1.2.2">

<div class="clear_div"></div>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>

<section class="mt-2 mt-md-0 mb-5 px-2">
    <ul class="d-flex ps-0 gap-md-1 main_caus">
        <li class="d-block px-1">
            <?php $banner = get_field('banner');
            if ($banner) : ?>
                <img class="img-fluid w-100 caus_img" src="<?php echo esc_url($banner['thumbnail_1']['url']); ?>" alt="<?php echo esc_url($banner['thumbnail_1']['url']); ?>">
            <?php endif; ?>
        </li>
        <li class="d-block px-1">
            <?php $banner = get_field('banner');
            if ($banner) : ?>
                <img class="img-fluid w-100 caus_img bg-dark" src="<?php echo esc_url($banner['thumbnail_2']['url']); ?>" alt="<?php echo esc_url($banner['thumbnail_2']['url']); ?>">
            <?php endif; ?>
        </li>
        <li class="d-block px-1 ">
            <?php $banner = get_field('banner');
            if ($banner) : ?>
                <img class="img-fluid w-100 caus_img" src="<?php echo esc_url($banner['thumbnail_3']['url']); ?>" alt="<?php echo esc_url($banner['thumbnail_3']['url']); ?>">
            <?php endif; ?>
        </li>
    </ul>
    <div class="container-fluid first_section overflow-hidden position-relative">
        <div class="row pt-md-4">

            <div class="col-md-12 text-center d-flex flex-column justify-content-center h-100">
                <div class="mt-2">
                    <p class="caus_phr">
                        <?php $a_comprehensive_transformation = get_field('a_comprehensive_transformation');
                        if ($a_comprehensive_transformation) : ?>
                            <?php echo $a_comprehensive_transformation['heading']; ?>
                        <?php endif; ?>
                    </p>
                    <h1 class="mb-4 caus_title mb-md-5">
                        <?php $a_comprehensive_transformation = get_field('a_comprehensive_transformation');
                        if ($a_comprehensive_transformation) : ?>
                            <?php echo $a_comprehensive_transformation['title']; ?>
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="black_section pt-md-5 pt-4 pb-md-0 pb-4 mb-5">
    <div class="container contaner_width pb-3 mt-4 mt-md-5 pt-3 mb_p">
        <div class="row mb-md-5 mb-4 pb-md-4 justify-content-between">
            <div class="col-md-5 mt-md-0 mt-5 mb-md-0 mb-3">
                <h1 class="fw-bold">
                    <?php $case_study = get_field('case_study');
                    if ($case_study) : ?>
                        <?php echo $case_study['title']; ?>
                    <?php endif; ?>
                </h1>
            </div>
            <div class="col-md-4 mt-auto">
                <p class="mb-1">Timeline</p>
                <h2 class="fw-bold">
                    <?php $case_study = get_field('case_study');
                    if ($case_study) : ?>
                        <?php echo $case_study['time_line']; ?>
                    <?php endif; ?>
                </h2>
            </div>
        </div>
        <div class="row pt-4 justify-content-between">
            <div class="col-md-2 colummn_1 pe-0">
                <h3 class="mb-4 fw-bold">Team</h3>
                <?php if (have_rows('team')): ?>
                    <?php
                    $count = 1; // Initialize counter 
                    while (have_rows('team')): the_row();
                        $name = get_sub_field('name');
                    ?>
                        <p class="mb-4"><strong class="fw-bold"><?php echo sprintf('%02d', $count); ?></strong><span class="ps-1 ps-md-2 text-white">
                                <?php echo wp_kses($name, array('br' => array())); ?>
                            </span></p>
                    <?php
                        $count++; // Increment counter after each iteration
                    endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="col-md-7 p-lg-0 my-md-0 my-4">
                <?php $case_study = get_field('case_study');
                if ($case_study) : ?>
                    <img class="img-fluid erp-site-img w-100" src="<?php echo esc_url($case_study['thumbnail']['url']); ?>" alt="<?php echo esc_url($case_study['thumbnail']['url']); ?>">
                <?php endif; ?>
            </div>
            <div class="col-md-2 colummn_1 ps-md-0 ms-0">
                <h3 class="mb-4 fw-bold">Technologies</h3>
                <?php if (have_rows('technologies')): ?>
                    <?php
                    $count = 1; // Initialize counter 
                    while (have_rows('technologies')): the_row();
                        $name = get_sub_field('name');
                    ?>
                        <p class="mb-4"><span class="ps-2 text-white">
                                <?php echo wp_kses($name, array('br' => array())); ?>
                            </span></p>
                    <?php
                        $count++; // Increment counter after each iteration
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container pt-md-5 pt-2 contaner_width mb_p">
        <div class="row mb-4 mb-md-4 pb-3 mt-3 mt-md-4 justify-content-center">
            <div class="col-lg-6 bg-text-col">
                <h3>
                    <?php $background = get_field('background');
                    if ($background) : ?>
                        <?php echo $background['title']; ?>
                    <?php endif; ?>
                </h3>
                <p>
                    <?php $background = get_field('background');
                    if ($background) : ?>
                        <?php echo $background['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 p-lg-0 image-main_ul">
                <ul class="p-md-4 d-flex w-100 list-unstyled gap-md-5 gap-3">
                    <li class="text-end image-main_ul_li_1">
                        <?php $background = get_field('background');
                        if ($background) : ?>
                            <img class="img-fluid w-100 mosque-img" src="<?php echo esc_url($background['thumbnail_1']['url']); ?>" alt="<?php echo esc_url($background['thumbnail_1']['url']); ?>">
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php $background = get_field('background');
                        if ($background) : ?>
                            <img class="img-fluid w-100 radisson-blue-img" src="<?php echo esc_url($background['thumbnail_2']['url']); ?>" alt="<?php echo esc_url($background['thumbnail_2']['url']); ?>">
                        <?php endif; ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-5 pb-2">
    <div class="container mt-5 pt-md-5 pt-2 contaner_width mb_p">
        <div class="row justify-content-between">
            <div class="col-md-3 challenge-img-col">
                <h3 class="mb-3">
                    <?php $challenge_title = get_field('challenge_title');
                    if ($challenge_title) : ?>
                        <?php echo $challenge_title['heading']; ?>
                    <?php endif; ?>
                </h3>
                <h6>
                    <?php $challenge_title = get_field('challenge_title');
                    if ($challenge_title) : ?>
                        <?php echo $challenge_title['content']; ?>
                    <?php endif; ?>
                </h6>
            </div>
            <div class="col-md-8">
                <div class="row project-img-text mb-md-5 mb-4">
                    <?php if (have_rows('challenge')): ?>
                        <?php
                        $count = 1; // Initialize counter 
                        while (have_rows('challenge')): the_row();
                            $title = get_sub_field('title');
                            $content = get_sub_field('content'); // WYSIWYG Editor content
                        ?>
                            <div class="col-lg-6 col-md-9 mb-4">
                                <h5 class="mb-0"><?php echo wp_kses($title, array('br' => array())); ?></h5>
                                <p class="m-0"><?php echo wp_kses_post($content); ?></p>
                            </div>
                        <?php
                            $count++; // Increment counter after each iteration
                        endwhile; ?>
                    <?php endif; ?>

                </div>
                <?php $challenge_thumbnail = get_field('challenge_thumbnail');
                if ($challenge_thumbnail) : ?>
                    <img class="img-fluid w-100 project-img" src="<?php echo esc_url($challenge_thumbnail['thumbnail']['url']); ?>" alt="<?php echo esc_url($challenge_thumbnail['thumbnail']['url']); ?>">
                <?php endif; ?>

            </div>
        </div>
</section>

<section class="py-md-5 py-4">
    <div class="container contaner_width px_0">
        <div class="row black_garay_section mx-0">
            <div class="col-lg-6 challenge-img-col p-5 mb_p">
                <h3 class="mb-3 text-white ps-md-4 pt-md-4">
                    <?php $solution_title = get_field('solution_title');
                    if ($solution_title) : ?>
                        <?php echo $solution_title['title']; ?>
                    <?php endif; ?>
                </h3>
                <p class="text-white ps-md-4">
                    <?php $solution_title = get_field('solution_title');
                    if ($solution_title) : ?>
                        <?php echo $solution_title['content']; ?>
                    <?php endif; ?>
                </p>
            </div>

            <div class="col-lg-6 p-5 mb_p">
            <div class="pt-md-4 ps-md-4">
                <?php if (have_rows('solution')): ?>
                    <?php
                    $count = 1; // Initialize counter 
                    while (have_rows('solution')): the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content'); // WYSIWYG Editor content
                    ?>
                        <div class="project-img-text mb-4">
                            <h5>
                                <?php echo wp_kses($title, array('br' => array())); ?>
                            </h5>
                            <p class="m-0"><?php echo wp_kses_post($content); ?></p>
                        </div>
                    <?php
                        $count++; // Increment counter after each iteration
                    endwhile; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-2 py-5">
    <div class="container mb-4 contaner_width">
        <div class="row">
            <div class="col-md-12 hover_img mb_p">
                <?php $solution_thumbnail = get_field('solution_thumbnail');
                if ($solution_thumbnail) : ?>
                    <img class="img-fluid w-100 humen-freedom-img" src="<?php echo esc_url($solution_thumbnail['thumbnail']['url']); ?>" alt="<?php echo esc_url($solution_thumbnail['thumbnail']['url']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="mt-md-5 pt-md-5 pt-2">
    <div class="container contaner_width">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb_p">


                <ul class="p-0 list-unstyled case-study-ul d-flex gap-md-5">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="80" viewBox="0 0 173 110"
                            fill="none">
                            <g clip-path="url(#clip0_1061_111)">
                                <path
                                    d="M44.064 78.3076C53.2254 76.8101 61.0003 72.8739 67.3248 66.1674C78.6726 54.1448 81.1256 35.758 73.3506 21.0293C65.3304 5.85133 48.7674 -2.25642 31.7351 0.663654C15.684 3.41259 2.4698 16.7615 0.134117 33.0518C-2.71349 52.9147 5.0081 84.244 32.311 100.631C38.7101 104.471 45.9838 106.845 52.8948 109.787C53.62 110.097 54.6332 109.701 55.5078 109.626C55.1772 108.792 55.0172 107.797 54.4733 107.134C48.3834 99.6573 43.8934 91.5281 43.8507 81.5378C43.8507 80.9175 43.8721 80.2864 43.904 79.666C43.9254 79.313 43.9787 78.96 44.0534 78.2969L44.064 78.3076ZM50.3352 106.193C49.3646 105.936 48.874 105.84 48.3941 105.679C20.1207 96.1596 1.42461 69.28 2.14983 39.1915C2.66177 17.66 19.2781 1.9579 40.7472 2.70663C62.6108 3.46607 79.3871 25.265 74.5878 46.6574C71.0896 62.2632 59.9552 72.8739 44.1067 75.5586C42.2509 75.8688 41.3551 76.7245 41.4297 78.4894C41.5897 82.0299 41.5577 85.6238 42.1763 89.0894C43.2855 95.3146 46.4957 100.663 50.3352 106.193Z"
                                    fill="#EC310D" />
                                <path
                                    d="M138.796 78.3938C151.103 76.2438 160.329 70.4786 166.813 60.5311C175.239 47.5887 175.036 30.2715 166.344 17.4146C157.428 4.22615 141.377 -2.41621 126.157 0.803354C110.501 4.11918 98.1719 16.1952 95.5483 31.6727C92.8606 47.471 96.5295 62.3281 104.091 76.1904C113.818 94.0103 129.336 104.428 148.448 109.948C149.088 110.129 149.877 109.798 150.591 109.702C150.357 108.932 150.325 107.99 149.855 107.423C144.896 101.562 141.025 95.1227 139.574 87.4963C139.02 84.5655 139.041 81.5278 138.785 78.4045L138.796 78.3938ZM144.768 106.161C142.731 105.37 140.673 104.632 138.657 103.776C111.439 92.2775 94.1191 63.0126 97.6173 34.4644C99.4091 19.8426 110.394 7.41362 124.75 3.7876C139.478 0.0546182 154.783 5.63805 163.603 17.9708C172.316 30.1324 172.764 46.8078 164.627 59.1941C158.644 68.3073 150.25 73.8158 139.489 75.5272C137.441 75.8481 136.439 76.6503 136.545 78.7575C136.695 81.6882 136.545 84.6511 136.972 87.5284C137.974 94.2777 141.217 100.107 144.768 106.15V106.161Z"
                                    fill="#EC310D" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1061_111">
                                    <rect width="173" height="110" fill="white"
                                        transform="matrix(-1 0 0 1 173 0)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </li>
                    <li>
                        <p class="mb-0 pb-2">
                            <?php $feed_back = get_field('feed_back');
                            if ($feed_back) : ?>
                                <?php echo $feed_back['message']; ?>
                            <?php endif; ?>
                        </p>
                        <ul class="d-flex p-0 mt-4 mb-0 gap-4 align-items-center case-study-ul_1 list-unstyled">
                            <li class="">
                                <div class="p-1 bg-white rounded-circle">
                                    <?php $feed_back = get_field('feed_back');
                                    if ($feed_back) : ?>
                                        <img class="img-fluid developer_img" src="<?php echo esc_url($feed_back['thumbnail']['url']); ?>" alt="<?php echo esc_url($feed_back['thumbnail']['url']); ?>">
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <h2 class="mb-0">
                                    <?php $feed_back = get_field('feed_back');
                                    if ($feed_back) : ?>
                                        <?php echo $feed_back['name']; ?>
                                    <?php endif; ?>

                                </h2>
                                <p class="mb-0">
                                    <?php $feed_back = get_field('feed_back');
                                    if ($feed_back) : ?>
                                        <?php echo $feed_back['designation']; ?>
                                    <?php endif; ?>
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
<section class="py-md-5 py-2 my-5">
    <div class="container pt-2 pb-4 contaner_width px_0">
        <div class="row black_garay_section">
            <div class="col-lg-6 challenge-img-col_1 p-5 pb-md-5 pb-0 mb_p">
                <h3 class="mb-3 text-white ps-md-5 pt-md-4">
                    <?php $journey_title = get_field('journey_title');
                    if ($journey_title) : ?>
                        <?php echo $journey_title['title']; ?>
                    <?php endif; ?>
                </h3>
                <p class="text-white ps-md-5">
                    <?php $journey_title = get_field('journey_title');
                    if ($journey_title) : ?>
                        <?php echo $journey_title['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
            <div class="col-lg-6 p-5 pt-md-5 pb-md-5 pb-4 pt-1 mb_p">
                <?php if (have_rows('journey')): ?>
                    <?php
                    $count = 1; // Initialize counter 
                    while (have_rows('journey')): the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content'); // WYSIWYG Editor content
                    ?>
                    
                        <div class="project-img-text mb-4">
                            <h5><?php echo wp_kses($title, array('br' => array())); ?></h5>
                            <p class="m-0"><?php echo wp_kses_post($content); ?></p>
                        </div>
                    <?php
                        $count++; // Increment counter after each iteration
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="pb-2">
    <div class="container contaner_width mb_p">
        <div class="row mb-3">
            <div class="col-lg-8 challenge-img-col">
                <h3 class="mb-3">
                    <?php $results_title = get_field('results_title');
                    if ($results_title) : ?>
                        <?php echo $results_title['title']; ?>
                    <?php endif; ?>
                </h3>
                <p class="mb-0">
                    <?php $results_title = get_field('results_title');
                    if ($results_title) : ?>
                        <?php echo $results_title['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('results')): ?>
                <?php
                $count = 1; // Initialize counter 
                while (have_rows('results')): the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content'); // WYSIWYG Editor content
                ?>
                    <div class="col-lg-4 col-md-3 py-3 py-md-0 my-md-2">
                        <h2 class="red_h"><?php echo wp_kses($title, array('br' => array())); ?></h2>
                    </div>
                    <div class="col-lg-6 col-md-9 gr_border my-md-2 mb_p">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php
                    $count++; // Increment counter after each iteration
                endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<section class="mt-md-5 mt-3 pt-5">
    <div class="container contaner_width mb_p">
        <div class="row">
            <div class="col-md-12 hover_img">
                <?php $results_image = get_field('results_image');
                if ($results_image) : ?>
                    <img class="img-fluid w-100 rotate-img" src="<?php echo esc_url($results_image['thumbnail']['url']); ?>" alt="<?php echo esc_url($results_image['thumbnail']['url']); ?>">
                <?php endif; ?>

            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 mt-md-5 pt-md-4">
                <h3 class="mb-3">
                    <?php $conclusion = get_field('conclusion');
                    if ($conclusion) : ?>
                        <?php echo $conclusion['title']; ?>
                    <?php endif; ?>
                </h3>
                <p class="mb-0">
                    <?php $conclusion = get_field('conclusion');
                    if ($conclusion) : ?>
                        <?php echo $conclusion['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</section>


<section>

    <section class="mt-md-5 pt-1">
        <div class="container pt-5 mt-5 mb_p">
            <div class="row justify-content-center">
                <div class="col-md-10 last_laptop_section text-center">
                    <img class="img-fluid confrence_roomimg" src="<?php echo get_template_directory_uri(); ?>/css/img/confrence_room.png" alt="">
                    <h1 class="text-uppercase pb-4 mb-5">
                        <span class="text-white">Work with</span>
                        <br>
                        Professional engineers
                        <br>
                        at Islootech
                    </h1>

                    <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
                        <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Let’s Profit Together</span>
                            <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                        </a>
                    </div>
                    <div class="d-md-block d-none"><br><br></div>
                    <!-- <div class="position-relative w-fit-content">
                        <a href="#" class="btn rounded-pill dark_btn ps-4 py-md-3 py-2 text-start d-flex align-items-center text-white fw-bold mb-2">Let’s Profit Together</a>
                        <img class="img-fluid arrow_giff_1 position-absolute " src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Slider -->
    <?php echo do_shortcode('[portfolio_slider]'); ?>
    <!-- Slider -->





    <!--<div class="container pt-5">
        <h1 class="mb-4 slider_h1 text-center mt-5">
            Want to Achive Your Goals?<br> Book Your Call Now!
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12">
                <div class="calendly-inline-widget position-relative" data-url="https://calendly.com/asmat2991/15min" style="height: 700px">
                    <div class="bg_white"></div>
                </div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            </div>
        </div>-->

        <!-- slider section -->

        <?php get_footer(); ?>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->