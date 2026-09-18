<?php
/*
Template Name: Software Development Team Template
 */

?>

<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/developmentteam.css?v=1.2.4">
<div class="clear_div"></div>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<style>
.hover_none:hover{color: #EC310D !important;}
   .baner_contaner{height:fit-content;position:unset;margin-top:8rem}.tbl_font_11{font-size:1.2vw;font-weight:200;line-height:28px;letter-spacing:1px;font-family:Inter}.dedicated_img{object-fit:cover;border-radius:16px;height:100%}.nav-tabs .nav-link.active{background:#ec310d!important;color:#fff!important;border:none !important;box-shadow: 0px 0px 1px 1px #ec310d !important;}.main-giff_div{bottom:19%!important}.n_font{transition:transform .3s ease-out}.accordion_ul ol ol,ol ul,ul ol,ul ul{list-style:none;padding-left:0!important}
    @media (max-width: 767px) {
        .border_mbl_none {
            border: none !important;
            padding-top: 8vw !important;
            padding-bottom: 8vw !important;
        }
        .baner_contaner {
            margin-top: 1.5rem !important;
        }

        .accordion_ul {
            justify-content: start !important;
            /* display: grid !important; */
        }
        .accordion_ul_2{
            justify-content: start !important;
            display: grid !important;
        }
        .accordion_ul_2 li{
            width: 100% !important;
        }

        /* .accordion_ul li {
            width: 100% !important;
        } */

        .card-header p b {
            font-size: 5vw !important;
            line-height: 1vw;
        }

        .mbl_stamp {
            display: grid;
        }

        .mbl_stamp .c_button_22 {
            order: 2;
        }

        .mbl_stamp .main-giff_div {
            margin-top: 0 !important;
            margin-bottom: 1.5rem;
        }

        .logo_ul_1,
        .logo_ul_2 {
            width: auto !important;
        }

        .main-giff_div {
            bottom: 26.2% !important;
        }

        .border_gray {
            border: 1px solid #dcdcdc !important;
        }

        .process_card_p {
            padding: 1.5rem 1rem !important;

        }

        .accordion_ul .d-grid b {
            font-size: 6vw;
            font-weight: 500;
        }

        .h44 br {
            display: none;
        }

        .gr_color img {
            width: 41vw !important;
            height: 40vw;
            object-fit: scale-down;
        }

        #myTab .nav-link {
            padding: 13px 12px !important;
            font-size: 5vw !important;
            line-height: 4vw !important;
        }


        .tbl_font_11 {
            font-size: 6vw !important;
            line-height: 8vw !important;
        }

        .border_gray h6 {
            margin-top: 0 !important;
        }

    }
</style>

<section>
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
                <div class="">
                    <h1 class="mb-4"><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                    <div class="mbl_stamp">
                        <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
                            <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>
                                    <?php $cta_button = get_field('cta_button');
                                    if ($cta_button) : ?>
                                        <?php echo $cta_button['name']; ?>
                                    <?php endif; ?>
                                </span>
                                <img src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                            </a>
                        </div>
                        <div class="position-absolute main-giff_div">
                            <div class="position-relative text_main">
                                <img class="img-fluid circle_giff_2" src="<?php echo get_template_directory_uri(); ?>/css/img/giff.gif" alt="">
                                <div class="text_overlay d-flex position-absolute justify-content-center align-items-center w-100 h-100 top-0 start-0">
                                    <img class="img-fluid right_img_first right_img" src="<?php echo get_template_directory_uri(); ?>/css/img/floating.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-block d-none">
            <br><br><br>
        </div>
        <?php
        $custom_posttype_logo = new WP_Query(array(
            'post_type' => 'logo',
            'posts_per_page' => 100,
        ));
        ?>
        <div class="mt-5 d-md-none d-block d-flex border-top border-bottom justify-content-center align-items-center brand_mt_row" style="overflow: hidden;">
            <?php
            while ($custom_posttype_logo->have_posts()) {
                $custom_posttype_logo->the_post(); ?>
                <div class="col-lg-2 text-center col-md-3 col-4 service_logoo">
                    <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
                        <li>
                            <img class="img-fluid type_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </li>

                    </ul>
                </div>
            <?php } ?>

        </div>

    </div>
</section>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<section class="pt-md-5 pt-3 mb-md-0 mb-5 pb-md-0 pb-5">
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-4 mb-md-0 mb-md-0 mb-4">
                <div class="card h-100 py-4 py-md-4" style="background: black;border-radius: 17px;">
                    <div class="card-body d-grid align-items-center px-4 px-md-3 px-lg-5 px-xl-5 py-md-5 py-5">
                        <svg class="pb-md-0 pb-3 svg-comma" xmlns="http://www.w3.org/2000/svg" width="94" height="75" viewBox="0 0 94 75" fill="none">
                            <path d="M7.97474 10.7437C14.5668 3.61406 24.5417 0 37.6177 0H42.3162V13.2141L38.5386 13.9688C32.1017 15.2531 27.624 17.7797 25.2277 21.4875C23.9774 23.485 23.2683 25.7721 23.1698 28.125H37.6177C38.8638 28.125 40.0589 28.6189 40.9401 29.4979C41.8212 30.377 42.3162 31.5693 42.3162 32.8125V65.625C42.3162 70.7953 38.1017 75 32.9192 75H4.72807C3.48194 75 2.28685 74.5061 1.40571 73.6271C0.524565 72.748 0.0295435 71.5557 0.0295435 70.3125V46.875L0.0436392 33.1922C0.00135248 32.6719 -0.891367 20.3438 7.97474 10.7437ZM84.603 75H56.4118C55.1657 75 53.9706 74.5061 53.0895 73.6271C52.2083 72.748 51.7133 71.5557 51.7133 70.3125V46.875L51.7274 33.1922C51.6851 32.6719 50.7924 20.3438 59.6585 10.7437C66.2505 3.61406 76.2255 0 89.3015 0H94V13.2141L90.2224 13.9688C83.7854 15.2531 79.3077 17.7797 76.9115 21.4875C75.6612 23.485 74.952 25.7721 74.8535 28.125H89.3015C90.5476 28.125 91.7427 28.6189 92.6238 29.4979C93.505 30.377 94 31.5693 94 32.8125V65.625C94 70.7953 89.7854 75 84.603 75Z" fill="#EC310D" />
                        </svg>
                        <p class="text-white tbl_font_11 mt-md-5 mb-md-4 mt-3 mb-5">
                            <?php $development = get_field('development');
                            if ($development) : ?>
                                <?php echo $development['content']; ?>
                            <?php endif; ?>
                        </p>

                        <div class="jhon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="2" viewBox="0 0 29 2" fill="none">
                                <line y1="1" x2="29" y2="1" stroke="white" stroke-width="2" />
                            </svg>
                            <h5 class="text-white pb-0 mb-0">
                                <?php $development = get_field('development');
                                if ($development) : ?>
                                    <?php echo $development['name']; ?>
                                <?php endif; ?>
                            </h5>
                            <span class="text-white">
                                <?php $development = get_field('development');
                                if ($development) : ?>
                                    <?php echo $development['designation']; ?>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <?php $development = get_field('development');
                if ($development) : ?>
                    <img class="w-100 img-fluid dedicated_img" src="<?php echo esc_url($development['thumbnail']['url']); ?>" alt="<?php echo esc_url($development['thumbnail']['url']); ?>">
                <?php endif; ?>
            </div>
        </div>

        <div class="row justify-content-end total_number">
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 number_col">
                <div class="card" style="background: #E9E451;border-radius: 15px;">
                    <div class="card-body">
                        <div class="row position-relative line-number">
                            <div class="col-md-6 col-6 text-center pb-md-3 pb-5">
                                <h3 class="weight-700 n_font" data-target="100">0<span>+</span></h3>
                                <span>Projects Done</span>
                            </div>
                            <div class="col-md-6 col-6 text-center pb-md-3 pb-5">
                                <h3 class="weight-700 n_font" data-target="35">0<span>+</span></h3>
                                <span>Top Specialist</span>
                            </div>
                            <div class="col-md-6 col-6 text-center pb-md-2 pt-md-4 pb-2">
                                <h3 class="weight-700 n_font" data-target="95">0<span>%</span></h3>
                                <span>Client Retention Rate</span>
                            </div>
                            <div class="col-md-6 col-6 text-center pb-md-2 pt-md-4 pb-2">
                                <h3 class="weight-700 n_font" data-target="15">0<span>+</span></h3>
                                <span>Countries</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section style="overflow: hidden">
    <div class="container">
        <h4 class="h44 mbl_h44">
            <?php $work_process = get_field('work_process');
            if ($work_process) : ?>
                <?php echo $work_process['title']; ?>
            <?php endif; ?>
        </h4>
        <div class="row justify-content-center pt-4">
            <div class="col-md-4">
                <p class="mb-0 mbl_p1">
                    <?php $work_process = get_field('work_process');
                    if ($work_process) : ?>
                        <?php echo $work_process['content_1']; ?>
                    <?php endif; ?>
                </p> 
            </div>
        </div>
        <div class="row mb-md-2 justify-content-center">
            <div class="col-md-4 ms-md-5">
                <p class="ms-md-5 mbl_p3">
                    <?php $work_process = get_field('work_process');
                    if ($work_process) : ?>
                        <?php echo $work_process['content_2']; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>

        <div class="row pt-5 overflow-hidden">
            <div class="col-md-4 px-0">
                <div class="border_gray d-grid align-items-center position-relative bg-white process_card_p border-start-0">
                    <div class="py-3">
                        <h6 class="process_tit">
                            <?php $process_details = get_field('process_details');
                            if ($process_details) : ?>
                                <?php echo $process_details['title_1']; ?>
                            <?php endif; ?>
                        </h6>
                        <p class="process_phr">
                            <?php $process_details = get_field('process_details');
                            if ($process_details) : ?>
                                <?php echo $process_details['content_1']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-0">
                <div class="border_gray border_r_none border_l_none d-grid align-items-center position-relative bg-white process_card_p">
                    <div class="py-3">
                        <h6 class="process_tit">
                            <?php $process_details = get_field('process_details');
                            if ($process_details) : ?>
                                <?php echo $process_details['title_2']; ?>
                            <?php endif; ?>
                        </h6>
                        <p class="process_phr">
                            <?php $process_details = get_field('process_details');
                            if ($process_details) : ?>
                                <?php echo $process_details['content_2']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-0">
                <div class="border_gray d-grid align-items-center position-relative bg-white process_card_p" style="background: black !important;border: 1px solid black !important;">
                    <div class="py-3">

                        <h6 class="text-white process_tit"><i>
                                <?php $process_details = get_field('process_details');
                                if ($process_details) : ?>
                                    <?php echo $process_details['title_3']; ?>
                                <?php endif; ?>
                            </i></h6>
                        <p class="text-white process_phr"><i>
                                <?php $process_details = get_field('process_details');
                                if ($process_details) : ?>
                                    <?php echo $process_details['content_3']; ?>
                                <?php endif; ?>
                            </i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 mt-md-4 overlow-hidden">
    <div class="container pt-md-5 pt-4">
        <div class="row justify-content-end">
            <div class="col-md-7">
                <h4 class="h44">

                    <?php $dedicated_team = get_field('dedicated_team');
                    if ($dedicated_team) : ?>
                        <?php echo $dedicated_team['heading']; ?>
                    <?php endif; ?>
                </h4>
                <p>
                    <?php $dedicated_team = get_field('dedicated_team');
                    if ($dedicated_team) : ?>
                        <?php echo $dedicated_team['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>

    <div class="container tbl_h_font pt-4">
        <div class="row">
            <div class="col-md-5 px-md-0">
                <div class="border_gray p-0 border-bottom-0 border_r_none">
                    <?php $dedicated_team = get_field('dedicated_team');
                    if ($dedicated_team) : ?>
                        <img class="w-100 img-fluid h-100" src="<?php echo esc_url($dedicated_team['thumbnail']['url']); ?>" alt="<?php echo esc_url($dedicated_team['thumbnail']['url']); ?>">
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-7 mt-md-0 mt-5">
                <div class="row h-100">
                    <div class="col-md-4 col-6 px-md-0 pe-0">
                        <div class="border_gray d-grid align-items-center position-relative border-bottom-0" style="background-color: #ec310d; border: 1px solid #ec310d;">
                            <h5 class="text-white text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_1']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 px-md-0 ps-0">
                        <div class="border_gray d-grid align-items-center position-relative border_r_none border_l_none px-2 border-bottom-0" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_2']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 px-md-0 pe-0">
                        <div class="border_gray d-grid align-items-center position-relative px-2 border-bottom-0" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_3']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 px-md-0 d-md-none d-block ps-0">
                        <div class="border_gray d-grid align-items-center position-relative px-2" style="background: none;border-top: 0 !important;border-left: 0 !important;border-bottom: 0 !important;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_4']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 px-md-0 d-md-none d-block pe-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;border-top: 0 !important;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_5']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-6 px-md-0  d-md-none d-block ps-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;border-left: 0 !important;border-bottom: 0 !important;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_6']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 px-md-0  d-md-none d-block pe-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;border-top: 0 !important;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_7']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 px-md-0  d-md-none d-block ps-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;border-left: 0 !important;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_8']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-md-5 d-md-block d-none">
                <div class="row">
                    <div class="col-md-6 col-6 px-md-0">
                        <div class="border_gray d-grid align-items-center position-relative px-2" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_4']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 px-md-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_5']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 d-md-block d-none">
                <div class="row">
                    <div class="col-md-4 col-6 px-md-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_6']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 px-md-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_7']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 px-md-0">
                        <div class="border_gray d-grid align-items-center border_l_none position-relative px-2" style="background: none;">
                            <h5 class="text-center">
                                <?php $dedicated_team = get_field('dedicated_team');
                                if ($dedicated_team) : ?>
                                    <?php echo $dedicated_team['services_8']; ?>
                                <?php endif; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pt-5 mt-md-4">
    <div class="container pt-md-5 pt-4">
        <h4 class="h44">
            <?php $staff = get_field('staff');
            if ($staff) : ?>
                <?php echo $staff['title']; ?>
            <?php endif; ?>
        </h4>
        <p class="pb-md-5">
            <?php $staff = get_field('staff');
            if ($staff) : ?>
                <?php echo $staff['content']; ?>
            <?php endif; ?>
        </p>

        <?php if (have_rows('team_section')): ?>
            <?php
            $count = 1; // Initialize counter 
            while (have_rows('team_section')): the_row();
                $image = get_sub_field('thumbnail');
                $title = get_sub_field('title');
                $content = get_sub_field('content'); // WYSIWYG Editor content
            ?>
                <div class="card py-3 py-md-4 px-md-0 border-bottom-0 border-end-0 border-start-0 border_mbl_none" style="border-radius: 0;border-bottom: 1px solid rgba(0,0,0,.125) !important;">
                    <div class="card-header px-0 py-0 border-0" style="background: none;">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 text-md-start">
                                        <?php if ($image): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" class="w-100 img_100" alt="<?php echo esc_attr($title); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-9 ps-md-4 text-md-start">
                                        <p class="mb-0 py-3 py-md-0 c_team_h"><b><?php echo wp_kses($title, array('br' => array())); ?></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 text-md-start">
                                <ul class="list-unstyled accordion_ul accordion_ul_2 d-flex w-100 p-0 m-0 align-items-start justify-md-content-between justify-content-center">
                                    <li class="d-flex align-items-center gap-5 d-inline-block" style="width: 90%;">
                                        <div class="d-grid">
                                            <!-- Outputting WYSIWYG content -->
                                            <div class="mb-0"><?php echo wp_kses_post($content); ?></div>
                                        </div>
                                    </li>
                                    <li class="d-flex gap-5 justify-content-end align-items-end d-md-block d-none text-md-end" style="width: 10%;">
                                        <h5><?php echo sprintf('%02d', $count); ?></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $count++; // Increment counter after each iteration
            endwhile; ?>
        <?php endif; ?>






        <!--     </div> -->
    </div>
</section>

<section class="pt-5 mt-md-4">
    <div class="container pt-md-5 pt-4">

        <div class="position-relative d-md-none d-block" style="background: url(<?php echo get_template_directory_uri(); ?>/css/img/mb_bg.png);background-size: cover;border-radius: 18px;">
            <h4 class="text-white text-center pt-5" style="padding: 7vw; font-size: 9vw;">
                <?php $cta = get_field('cta');
                if ($cta) : ?>
                    <?php echo $cta['title']; ?>
                <?php endif; ?>
            </h4>
            <img class="w-100" style="padding-left: 17vw;padding-right: 17vw;" src="<?php echo get_template_directory_uri(); ?>/css/img/mbl_dev.png" alt="">

            <div class="meeting_btn pt-3">
                <p class="c_p_color mb-4 ps-lg-2 text-white px-4 text-center">
                    <?php $cta = get_field('cta');
                    if ($cta) : ?>
                        <?php echo $cta['content']; ?>
                    <?php endif; ?>
                </p>
                <div class="position-relative w-fit-content"> <a href="#exampleModalToggle" data-bs-toggle="modal" role="button" class="btn rounded-pill dark_btn ps-4 py-md-3 py-2 text-start d-flex align-items-center text-white fw-bold mb-2">Schedule a Meeting</a> <img class="img-fluid arrow_giff_1 position-absolute " src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy"></div>
                <br><br>
            </div>
        </div>
        <div class="position-relative d-md-block d-none">
            <div class="position-relative logo_border">
                <img class="w-100" src="https://islootech.com/wp-content/uploads/2024/09/Group-1000002589.png" alt="">
            </div>
            <h4 class="d_heading">
                <?php $cta = get_field('cta');
                if ($cta) : ?>
                    <?php echo $cta['title']; ?>
                <?php endif; ?>
            </h4>
            <div class="meeting_btn">
                <p class="c_p_color mb-4 ps-lg-2">
                    <?php $cta = get_field('cta');
                    if ($cta) : ?>
                        <?php echo $cta['content']; ?>
                    <?php endif; ?>
                </p>
                <div class="position-relative w-fit-content"> <a href="#exampleModalToggle" data-bs-toggle="modal" role="button" class="btn rounded-pill dark_btn ps-4 py-md-3 py-2 text-start d-flex align-items-center text-white fw-bold mb-2">Schedule a Meeting</a> <img class="img-fluid arrow_giff_1 position-absolute " src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy"></div>
            </div>
        </div>
    </div>
</section>


<section class="pt-5 mt-md-4 overflow-hidden">
    <div class="container pt-md-5 pt-4">
        <div class="row justify-content-end">
            <div class="col-md-7">
                <h4 class="h44 pb-4">
                    <?php $benifates = get_field('benifates');
                    if ($benifates) : ?>
                        <?php echo $benifates['title']; ?>
                    <?php endif; ?>
                </h4>

                <?php if (have_rows('benefits_of_hiring')): ?>
                    <?php
                    $count = 1; // Initialize counter 
                    while (have_rows('benefits_of_hiring')): the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content'); // WYSIWYG Editor content
                    ?>
                        <div class="card py-4 py-md-5 px-md-0 border-bottom-0 border-end-0 border-start-0" style="border-radius: 0;border-bottom: 1px solid rgba(0,0,0,.125) !important;">
                            <div class="card-header px-0 py-0 border-0 border-0" style="background: none;">


                                <ul class="list-unstyled accordion_ul accordion_ul_2 d-flex w-100 p-0 m-0 align-items-start justify-content-between">
                                    <li class="d-flex gap-5 justify-content-start align-items-start" style="width: 10%;">
                                        <h3 class="logo_color"><?php echo sprintf('%02d', $count); ?></h3>
                                    </li>
                                    <li class="d-flex align-items-center gap-5 d-inline-block" style="width: 90%">
                                        <div class="d-grid p_m_0">
                                            <b class="pb-2"><?php echo wp_kses($title, array('br' => array())); ?></b>
                                            <?php echo wp_kses_post($content); ?>

                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>

                    <?php
                        $count++;
                    endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</section>

<section class="pt-5 mt-md-4 overflow-hidden">
    <div class="container pt-md-5 pt-4">
        <div class="row align-items-end">
            <div class="col-md-5 pe-md-5 mbl_text_center">
                <img class="img-fluid d-md-block d-none" src="https://islootech.com/wp-content/uploads/2024/09/whimsical-unique-white-robot-dog-futuristic-artistic-setting-generative-ai-1.png" alt="">
                <h4 class="h44  py-3">Tech Stack We<br> Utilize</h4>
                <p>Our developers are skilled at every relevant language or framework. Let us deliver a product for you only using the latest tech stack.</p>
            </div>
            <div class="col-md-7">
                <img class="img-fluid w-100" src="https://islootech.com/wp-content/uploads/2024/09/Rectangle-7742.png" alt="">

            </div>
        </div>


        <?php
        $count = 0;
        $custom_posttype_technologies = new WP_Query(
            array(
                'posts_per_page' => 100,
                'post_type' => 'technologies'
            )
        );
        ?>

        <div class="row pt-5">
            <div class="col-md-5 position-relative col-5-before pt-5 mb-3 mb-md-0">
                <ul class="nav nav-tabs border-bottom-0" id="myTab" role="tablist">
                    <?php
                    while ($custom_posttype_technologies->have_posts()) {
                        $custom_posttype_technologies->the_post();
                        $count++;
                    ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo ($count == 2) ? 'active' : ''; ?>" id="home-tab<?php echo $count; ?>" data-bs-toggle="tab" data-bs-target="#home<?php echo $count; ?>" type="button" role="tab" aria-controls="home<?php echo $count; ?>" aria-selected="<?php echo ($count == 2) ? 'true' : 'false'; ?>">
                                <?php the_title(); ?>
                            </button>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-md-7 position-relative col-7-beforer ps-md-5">
                <div class="tab-content" id="myTabContent">
                    <?php
                    $count = 0;
                    $custom_posttype_technologies->rewind_posts();
                    while ($custom_posttype_technologies->have_posts()) {
                        $custom_posttype_technologies->the_post();
                        $count++;
                    ?>
                        <div class="tab-pane fade <?php echo ($count == 2) ? 'active show' : ''; ?>" id="home<?php echo $count; ?>" role="tabpanel" aria-labelledby="home-tab<?php echo $count; ?>">
                            <h4 class="pb-4"><?php the_title(); ?> Technologies</h4>
                            <div class="row gr_color">
                                <?php
                                $logos = get_field('logos');
                                if ($logos) {
                                    foreach ($logos as $logo) {
                                        $logo_url = esc_url($logo['url']);
                                ?>
                                        <div class="col-md-3 col-6 pb-md-0 pb-3 pb-md-4">
                                            <img class="w-100" src="<?php echo $logo_url; ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo '<p>No logos found.</p>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php wp_reset_postdata();
        ?>


    </div>
</section>

<section class="">
    <div class="container pt-5 pb-5">
        <div class="card py-5" style="background-color: #F1F1F1;border-radius: 18px;">
            <div class="card-body p-md-5">
                <h4 class="h44 text-center w-100">All outsourcing models to compare</h4>
                <p class="w-100 text-center">choose the best fit for your business needs</p>
                <div class="row justify-content-center pt-3 px-lg-5 px-xl-5 mx-lg-3 mx-xl-3">
                    <?php if (have_rows('other_outsourcing_models')): ?>
                        <?php
                        while (have_rows('other_outsourcing_models')): the_row();
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            $link = get_sub_field('link');
                            $image = get_sub_field('thumbnail');
                        ?>
                            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                                <div class="card h-100" style="border-radius: 18px;">
                                    <div class="card-body d-grid mb-3 px-4">
                                        <div class="w-100 pt-3 ">
                                            <b class="size_23"><?php echo wp_kses($title, array('br' => array())); ?></b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                <?php echo wp_kses_post($content); ?>
                                            </p>
                                            <a class="n_learn_more hover_none" href="<?php echo wp_kses($link, array('br' => array())); ?>">LEARN MORE &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                                    <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D"></path>
                                                    <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2"></path>
                                                </svg> </a>

                                        </div>
                                        <div class="h-100 d-grid align-items-end">
                                            <img src="<?php echo esc_url($image['url']); ?>" class="w-100 img_mbl_100" alt="<?php echo esc_attr($title); ?>" class="w-100 px-md-3 pt-md-5" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-md-5 pb-md-5">
    <div class="container pt-5 pb-4">
        <div class="row justify-content-center">
            <div class="col-md-10 last_laptop_section text-center">
                <img class="img-fluid confrence_roomimg" src="<?php echo get_template_directory_uri(); ?>/css/img/confrence_room.png" alt="">
                <h1 class="text-uppercase pb-4 mb-5">
                    <span class="text-white">Work with</span>
                    <br>
                    Professional engineers
                    <br>
                    at Isloo tech
                </h1>
                <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
                    <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Get a Quote</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- last section -->

<!-- slider section -->
<?php echo do_shortcode('[portfolio_slider]'); ?>
<!-- slider section -->

<div class="container px-4 pt-md-5 pt-4">
    <h1 class="mb-4 slider_h1 text-start mt-5">
        Frequently Asked Questions
    </h1>

    <div class="container-fluid pt-4">

        <div class="row">
            <div class="col-ms-12 p-0">

                <div id="accordion">
                    <?php if (have_rows('faq')): // Check if the repeater field has rows 
                    ?>
                        <?php $count = 0; // Initialize counter 
                        ?>
                        <?php while (have_rows('faq')): the_row(); // Loop through repeater rows 
                        ?>
                            <?php
                            $title = get_sub_field('title'); // Get the title subfield
                            $content = get_sub_field('content'); // Get the content subfield
                            $count++; // Increment counter
                            ?>
                            <div class="row align-items-start">
                                <div class="col-md-3 col-1">
                                    <span>
                                        <h4 class="mb-0 mbl_number mt-md-3 d-md-block d-none" style="font-weight:400">
                                            <?php echo str_pad($count, 2, "0", STR_PAD_LEFT); ?>
                                        </h4>
                                    </span>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="card py-3 px-md-0 border-bottom-0 border-end-0 border-start-0" style="border-radius: 0;">
                                        <div class="card-header px-0 py-0 border-0 border-0" style="background: none;">
                                            <ul class="list-unstyled accordion_ul d-flex w-100 p-0 m-0 align-items-md-center align-items-start justify-content-between">
                                                <li class="d-flex align-items-center gap-5 d-inline-block" style="width: 90%;">
                                                    <a class="ps-0 text-decoration-none font_20" href="">
                                                        <?php echo esc_html($title); ?>
                                                    </a>
                                                </li>
                                                <li class="d-flex gap-5 justify-content-end align-items-end" style="width: 10%;">
                                                    <a class="text-dark plus_icon" data-bs-toggle="collapse" href="#collapseOne<?php echo $count; ?>">
                                                        <svg class="bi-dash c_dash" xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                            <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                                            <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16L22 16Z" fill="white" />
                                                            <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="collapseOne<?php echo $count; ?>" class="collapse collapse_1 border-0" data-bs-parent="#accordion">
                                            <div class="card-body px-3">
                                                <p><?php echo wp_kses_post($content); ?></p>
                                                <a class="btn apply_btn text-white" href="">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>No FAQ entries found.</p>
                    <?php endif; ?>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<!--<div class="container pt-md-5 pt-4">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('h3[data-target]');
            const options = {
                root: null,
                threshold: 0.5 // Trigger when 50% of the element is visible
            };

            function animateNumbers(entry) {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const speed = 200; // Adjust the speed of counting
                    const increment = target / speed;

                    let count = 0;
                    const updateCount = () => {
                        if (count < target) {
                            count += increment;
                            counter.childNodes[0].textContent = Math.ceil(count); // Update the number only
                            setTimeout(updateCount, 10); // Adjust the interval as needed
                        } else {
                            counter.childNodes[0].textContent = target; // Ensure the final value matches the target
                        }
                    };
                    updateCount();
                    observer.unobserve(counter); // Stop observing once the animation is done
                }
            }

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(animateNumbers);
            }, options);

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>