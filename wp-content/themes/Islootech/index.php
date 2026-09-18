<?php
/*
Template Name: front Template
 */

?>
<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<style>
    .wrk_p_btn:hover{color:#fff!important}.gray_card{background:#f7f7f7;border-radius:20px;padding:0 10px}.flower_img_new{width:100%;height:190px;border-radius:20px;object-fit:cover}.simple_img_2{height:142px}.color_img_22{width:49vw;width:clamp(1rem,52vw,64rem);height:auto;position:absolute;left:calc(50% - 26.5%);top:4vw;animation:4s ease-in-out infinite animateBanner}@keyframes animateBanner {0%, 100% {transform: rotate(0) translateY(0);}40% {transform: rotate(2deg) translateY(-5px);}}
</style>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=1.3.2">
<div class="clear_div"></div>

<!-- Banner Satrt  -->
<section class="s_1 overflow-hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="banner position-relative">
                    <video class="vidio" muted loop autoplay playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/css/img/baner_vidio.mp4" type="video/mp4">
                    </video>
                    <div class="overlay position-absolute top-0 start-0 w-100 h-100">
                        <img class="img-fluid color_img d-md-none d-block" src="<?php echo get_template_directory_uri(); ?>/css/img/color.png" alt="" loading="lazy">
                        <img class="img-fluid color_img_22 d-md-block d-none" src="<?php echo get_template_directory_uri(); ?>/css/img/color.png" alt="" loading="lazy">
                        <div class="space position-absolute"></div>
                        <div class="space2 position-absolute"></div>
                        <div class="small_mobile position-relative h-100"></div>
                        <img class="img-fluid w-100 ai_img_sm d-lg-none d-lg-none d-block" src="<?php echo get_template_directory_uri(); ?>/css/img/small_aiimg.png" alt="" loading="lazy">
                        <a href="<?php echo home_url('artificial-intelligence'); ?>"> <img class="img-fluid arrow_giff_7" src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy"></a>
                        <div class="sm_space_1"></div>
                        <div class="sm_space_2"></div>
                        <div class="sm_space_3"></div>
                        <div class="sm_space_4"></div>
                    </div>
                </div>
                <ul class="d-flex p-0 ul_1 h-100 w-100 justify-content-between position-absolute top-0 start-0">
                    <div class="mobile_1 ps-lg-4 position-relative">
                        <ul class="p-0 main_ul list-unstyled justify-content-lg-between position-absolute bottom-0 d-flex flex-column">
                            <li>
                                <div class="position-relative loop_div mb-2">
                                    <div class="text_overlay_first d-flex justify-content-center align-items-center position-absolute h-100 start-0">
                                        <p class="text-white m-0">A Creative Loop For</p>
                                    </div>
                                </div>
                                <?php $home_banner = get_field('home_banner');
                                if ($home_banner) : ?>
                                    <h1 class="main_h mb-3"><?php echo $home_banner['title']; ?></h2>
                                    <?php endif; ?>
                                    
                                    <?php $home_banner = get_field('home_banner');
                                    if ($home_banner) : ?>
                                        <p class="main_p align-items-center gap-4 d-flex">
                                            <span>
                                                <?php echo $home_banner['content']; ?>
                                            </span>
                                            <a href="<?php echo home_url('about-us'); ?>">
                                                <img class="img-fluid c_arrow_mobile" src="<?php echo get_template_directory_uri(); ?>/css/img/cross_arrow.png" alt="" loading="lazy">
                                            </a>
                                        </p>
                                    <?php endif; ?>
                            </li>
                            <li>
                                <span style="font-size: 4rem; font-family: 'Inter', sans-serif; font-weight: 300; line-height: 59px;">100+</span>
                                <?php $home_banner = get_field('home_banner');
                                if ($home_banner) : ?>
                                    <p class="customer_text">
                                        <?php echo $home_banner['customer']; ?>
                                    </p>
                                <?php endif; ?>

                            </li>
                        </ul>
                    </div>
                    <div class="mobile_2 position-relative">
                        <p class="position-absolute w-100 text-lg-center ps-2 bottom-0 technoloy_text">
                            Accelerate your growth via Technology
                        </p>
                    </div>
                    <div class="mobile_3 position-relative d-flex align-items-end justify-content-lg-end  pb-3 pe-3">
                        <div class="position-relative vidio_cover">
                            <img class="img-fluid w-100 ai_img position-absolute end-0 bottom-0" src="<?php echo get_template_directory_uri(); ?>/css/img/ai_img.png" alt="" loading="lazy">
                            <div class="vidio_overlay pt-2 ps-2 pe-2  position-absolute w-100 h-100 start-0 top-0">
                                <video class="ai_vidio mb-2" muted loop autoplay playsinline>
                                    <source src="<?php echo get_template_directory_uri(); ?>/css/img/ai-vidio.mp4" type="video/mp4" loading="lazy">
                                </video>
                                <h5 class="ai_h mb-2 text-center">
                                    Empowering AI
                                    <br>
                                    Development
                                </h5>
                                <p class="text-center ai_p mb-2">
                                    with OpenAI,
                                    <br>
                                    and a suite of advanced
                                    <br>
                                    AI tools.
                                </p>
                                <a href="<?php echo home_url('artificial-intelligence'); ?>"><img class="img-fluid arrow_giff" src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy"></a>
                            </div>
                        </div>
                    </div>
            </div>
            </ul>
        </div>
    </div>
    </div>
    </div>
</section>


<section class="my-5">
    <div class="container py-md-5 mt-md-5 contaner_width position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" class="position-absolute bg_svg" fill="none">
            <path d="M0 23.1445C6.12427 22.5981 11.4436 20.1936 15.8108 15.8199C20.1629 11.4612 22.5568 6.16585 23.1094 0C25.227 13.4334 32.9852 21.1512 45.9516 23.2195C32.9822 25.2758 25.251 32.9996 23.1815 45.9707C21.1361 33.0056 13.3899 25.2908 0 23.1445Z" fill="#F5F5F5" />
        </svg>
        <img class="img-fluid d-md-none d-block person_img_sm" src="<?php echo get_template_directory_uri(); ?>/css/img/person.png" alt="" loading="lazy">
        <div class="row">
            <div class="col-md-12 large_col col-xl-8">
                <h1 class="h_2">
                    Top-Tier
                    <span class="px-1 inline-block before position-relative">Software</span>
                    <br>
                    <span class="px-1 inline-block after position-relative"> Engineers</span>
                    at Your
                    <br>
                    Service
                </h1>
                <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button" style="width: fit-content;display: contents;">
                    <div class="position-relative text_main stump_1">
                        <img class="img-fluid circle_giff rotate-image" src="https://islootech.com/wp-content/uploads/2025/01/Rectangle.png" alt="" loading="lazy">
                        <div class="p-md-3 text_overlay d-flex position-absolute justify-content-center align-items-center w-100 h-100 top-0 start-0">

                            <img class="img-fluid right_img" src="<?php echo get_template_directory_uri(); ?>/css/img/right_img.png" alt="" loading="lazy">

                        </div>
                    </div>
                </a>

                <div class="row btn_row">
                    <div class="col-xl-5 col-md-4 mt-md-0 mt-4  mt-md-auto change_p_1">
                        <ul class="p-0">
                            <button class="btn rounded-pill btn_round mb-2">
                                <?php $services = get_field('services');
                                if ($services) : ?>
                                    <?php echo $services['first']; ?>
                                <?php endif; ?>
                            </button>
                            <br>
                            <button class="btn rounded-pill btn_round mb-2">
                                <?php $services = get_field('services');
                                if ($services) : ?>
                                    <?php echo $services['second']; ?>
                                <?php endif; ?>
                            </button>
                            <br>
                            <button class="btn rounded-pill btn_round mb-2">
                                <?php $services = get_field('services');
                                if ($services) : ?>
                                    <?php echo $services['third']; ?>
                                <?php endif; ?>
                            </button>
                            <br>
                            <button class="btn rounded-pill btn_round">
                                <?php $services = get_field('services');
                                if ($services) : ?>
                                    <?php echo $services['fourth']; ?>
                                <?php endif; ?>
                            </button>
                        </ul>
                    </div>
                    <div class="col-xl-7 col-lg-8 mt-md-0 mt-4 col-md-8 change_p_2">
                        <p class="red_text mb-4">
                            <?php $service_details = get_field('service_details');
                            if ($service_details) : ?>
                                <?php echo $service_details['title']; ?>
                            <?php endif; ?>
                        </p>
                        <p class="black_text mb-0">
                            <?php $service_details = get_field('service_details');
                            if ($service_details) : ?>
                                <?php echo $service_details['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 small_col mt-md-4 mt-4 mt-lg-auto">
                <ul class="d-flex gap-4 mb-0 align-items-end list-unstyled p-0">
                    <li class="circular_img_li position-relative">
                        <video class="small_vidio w-100" muted loop autoplay playsinline>
                            <source src="<?php echo get_template_directory_uri(); ?>/css/img/small_vidio (online-video-cutter.com).mp4" type="video/mp4" loading="lazy">
                        </video>

                    </li>
                    <li>
                        <?php $service_details = get_field('service_details');
                        if ($service_details) : ?>
                            <img class="img-fluid person_img" src="<?php echo esc_url($service_details['thumbnsil']['url']); ?>" alt="<?php echo esc_url($service_details['thumbnsil']['url']); ?>">
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Thired section end -->

<section class="pb-md-5 mb-md-5 third_section">
    <div class="container contaner_width">
        <h4 class="pr_heading">How we collaborate with you</h4>
        <div class="row mt-5">
            <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                <ul class="ps-0 d-flex gap-3 collaborate_ul mb-5 mb-md-0">
                    <li class="d-block">
                        <img width="72" src="<?php echo get_template_directory_uri(); ?>/css/img/Group-1000002501.png" alt="" loading="lazy">
                    </li>
                    <li class="d-block">
                        <h5 class="mb-3">Define Your Product Scope </h5>
                        <p class="main_p" style="color: black !important;">Our expert team explores your business challenges and objectives to create a forward-thinking technology roadmap in just 10-14 days.</p>
                        <a class="n_learn_more" href="<?php echo home_url('define-your-product-scope'); ?>">LEARN MORE &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D" />
                                <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                <ul class="ps-0 d-flex gap-3 collaborate_ul mb-5 mb-md-0">
                    <li class="d-block">
                        <img width="72" src="<?php echo get_template_directory_uri(); ?>/css/img/Group-1000002502.png" alt="" loading="lazy">
                    </li>
                    <li class="d-block">
                        <h5 class="mb-3">Build Your MVP </h5>
                        <p class="main_p" style="color: black !important;">Next, we develop a Minimum Viable Product (MVP) for swift market entry, focusing on essential features that provide immediate results and set the stage for future growth.</p>
                        <a class="n_learn_more" href="<?php echo home_url('build-your-mvp'); ?>">LEARN MORE &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D" />
                                <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                <ul class="ps-0 d-flex gap-3 collaborate_ul mb-5 mb-md-0">
                    <li class="d-block">
                        <img width="72" src="<?php echo get_template_directory_uri(); ?>/css/img/Vector-1.png" alt="" loading="lazy">
                    </li>
                    <li class="d-block">
                        <h5 class="mb-3">Scale With Agility </h5>
                        <p class="main_p" style="color: black !important;">As your business evolves, we expand your system’s functionality with a flexible and adaptable approach, ensuring seamless scalability.</p>
                        <a class="n_learn_more" href="<?php echo home_url('scale-with-agility'); ?>">LEARN MORE &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D" />
                                <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>
<!-- Black section -->
<section class="mb-0 mb-0 black_section_main">
    <div class="container contaner_width pb-md-5 mb_container_m">
        <div class="row overflow-hidden">
            <div class="col-md-12 black_section_row">
                <div class="black_section p-1">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 pt-5 ps-4 ps-md-5 p-md-4 pb-0 position-relative">
                            <div class="row align-items-end mt-xl-4 n_mt_0">
                                <div class="col-md-6">
                                    <a href="<?php echo home_url('artificial-intelligence'); ?>" class="btn rounded-pill btn_round_1 mb-3 text-white"> Explore Our Services</a>
                                    <ul class="d-flex flex-wrap host_ul list-unstyled justify-content-between p-0 w-100">
                                        <li>
                                            <h4 class="text-white domain_text gr_colo_text" style="white-space: nowrap;">
                                                <?php $business_consultancy = get_field('business_consultancy');
                                                if ($business_consultancy) : ?>
                                                    <?php echo $business_consultancy['sub_title']; ?>
                                                <?php endif; ?>
                                            </h4>
                                            <div class="d-flex">
                                                <p class="text-white main_p pe-md-0 pe-3">
                                                    <?php $business_consultancy = get_field('business_consultancy');
                                                    if ($business_consultancy) : ?>
                                                        <?php echo $business_consultancy['content']; ?>
                                                    <?php endif; ?>
                                                <div class="position-relative mbl_giff_main d-md-none d-block me-md-0 me-2">
                                                    <a href="<?php echo home_url('artificial-intelligence'); ?>">
                                                    <img class="img-fluid mbl_subtract_img" src="<?php echo get_template_directory_uri(); ?>/css/img/Subtract.png" alt="" loading="lazy">
                                                    <img class="img-fluid arrow_giff_2 position-absolute n_giff_mbl" src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                                                    </a>
                                                </div>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul class="d-flex flex-wrap host_ul list-unstyled justify-content-between p-0 w-100">
                                        <li class="mt-4 pt-1 d-md-block d-none">
                                            <div class="position-relative text_main_2 mb-lg-0 mb-3">
                                                <img class="img-fluid subtract_img" src="<?php echo get_template_directory_uri(); ?>/css/img/Subtract.png" alt="" loading="lazy">
                                                <div class="text_overlay d-flex position-absolute justify-content-center align-items-center w-100 h-100 top-0 start-0">
                                                    <img class="img-fluid arrow_giff_2 position-absolute " src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                                                    <a class="text-white position-absolute main_p text-nowrap" href="<?php echo home_url('artificial-intelligence'); ?>">Discover Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-7 position-absolute end-0 ai_img_mbl" style="bottom: -5px;">
                                    <picture>
                                        <source class="img-fluid green_im" media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle-265.png" loading="lazy">
                                        <img class="img-fluid green_img" src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle-265.png" alt="" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 vidio_col">
                            <div class="parent_vidio position-relative d-grid align-items-md-grid">
                                <a style="position: absolute;bottom: 3%;right: 3%;z-index:12" href="<?php echo home_url('ui-ux'); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="black"></circle>
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2"></path>
                                    </svg>
                                </a>
                                <video class="paint_vidio w-100" muted loop autoplay playsinline>
                                    <source src="<?php echo get_template_directory_uri(); ?>/css/img/paint.mp4" type="video/mp4" loading="lazy">
                                </video>
                                <div class="position-absolute w-100 paint_overlay h-100 top-0 start-0">
                                    <div class="row p-4 py-4 h-100 py-md-5">
                                        <div class="col-lg-7 ps-md-3 ps-0">
                                            <h3 class="h_3 mt-md-0 mt-3 mb-3">
                                                <?php $covering_all_phase = get_field('covering_all_phase');
                                                if ($covering_all_phase) : ?>
                                                    <?php echo $covering_all_phase['title']; ?>
                                                <?php endif; ?>
                                            </h3>
                                            <p class="main_p">
                                                <?php $covering_all_phase = get_field('covering_all_phase');
                                                if ($covering_all_phase) : ?>
                                                    <?php echo $covering_all_phase['content']; ?>
                                                <?php endif; ?>

                                            </p>
                                        </div>
                                        <div class="col-lg-5 ps-md-3 ps-0 mt-lg-0 mt-md-5 pe-0">
                                            <div class="main_btn_div">
                                                <button class="btn rounded-pill btn_round mb-2"> Web
                                                    Redesign</button>
                                                <button class="btn rounded-pill ms-1 btn_round mb-2">UX for
                                                    Startups</button>
                                                <button class="btn rounded-pill btn_round mb-2">UX Research</button>
                                                <button class="btn rounded-pill ms-1 btn_round">Enterprise
                                                    UX</button>
                                                <button class="btn rounded-pill btn_round mb-2">Web App
                                                    design</button>
                                                <button class="btn rounded-pill ms-1 btn_round">UX Audit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="n_services mt-md-0">
    <div class="container contaner_width">
        <div class="row">
            <div class="col-md-6">
                <div class="card py-md-4 py-0">
                    <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                        <h2 class="n_serivces_h2">Custom Software Development</h2>
                        <p class="main_p" style="color: black !important; width: 75%;font-family: 'Inter';">
                            Solve your operational challenges with tailored software designed to streamline processes and boost productivity. Building robust, scalable, and fully customized software solutions that adapt to your unique business requirements, driving efficiency and innovation.
                        </p>
                        <a href="<?php echo home_url('custom-software-development'); ?>" class="n_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="row mt-md-4 mt-1">
                    <div class="col-md-6">
                        <div class="card py-md-4 py-0">
                            <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                                <h2 class="n_serivces_h2">Web Development</h2>
                                <a href="<?php echo home_url('web-development'); ?>" class="n_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card py-md-4 py-0">
                            <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                                <h2 class="n_serivces_h2">Mobile App Development</h2>
                                <a href="<?php echo home_url('mobile-app-development'); ?>" class="n_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="col-md-6">
                <div class="row h-100 mbl_r_h-100">
                    <div class="col-md-6 h-100">
                        <div class="card py-md-4 py-0 black_card h-100 px-3">
                            <div class="card-body px-md-0 px-1 h-100 d-md-block d-flex justify-content-between align-items-center">
                                <h4 class="text-white domain_text n_serivces_h2">DevOps</h4>
                                <p class="text-white main_p">
                                    Streamlining development and operations with expert DevOps practices, enabling seamless collaboration, faster delivery cycles, and enhanced system reliability. Overcome deployment bottlenecks and achieve continuous delivery with our end-to-end DevOps solutions.
                                </p>
                                <a href="<?php echo home_url('devops'); ?>" class="n_arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-md-block d-none" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="white" />
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="black" stroke-width="2" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-md-none d-block" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-12 h-50">
                            <div class="card py-md-4 py-0 h-100">
                                <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                                    <h2 class="n_serivces_h2">CTO as Service</h2>
                                    <a href="<?php echo home_url('chief-technology-officer-services'); ?>" class="n_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                            <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                            <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 h-50 pt-md-4">
                            <div class="card py-md-4 py-0 h-100">
                                <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                                    <h2 class="n_serivces_h2">QA & Software Testing</h2>
                                    <a href="<?php echo home_url('qa-amp-software-testing'); ?>" class="n_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                            <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                            <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div>

            

        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card py-md-4 py-0 black_card">
                    <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                        <h2 class="n_serivces_h2 text-white">IoT & Smart Products</h2>
                        <p class="main_p text-white" style="width: 75%;font-family: 'Inter';">
                            End-to-end connected products — from controller hardware and firmware to cloud and app. We design the device, write the embedded firmware, build the cloud backend, and ship the platform on top, all under one engagement.
                        </p>
                        <a href="<?php echo home_url('iot-smart-products'); ?>" class="n_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="d-md-block d-none" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="white" />
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="black" stroke-width="2" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-md-none d-block" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                        <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                        <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                                    </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card py-md-4 py-0">
                    <div class="card-body px-md-0 px-1 d-md-block d-flex justify-content-between align-items-center">
                        <h2 class="n_serivces_h2">UniFi / IT Infrastructure</h2>
                        <p class="main_p" style="color: black !important; width: 75%;font-family: 'Inter';">
                            End-to-end UniFi networks, Wi-Fi, surveillance, access control, and AV — designed and supported. From consultation, survey, and 2D/3D design through deployment, integration, commissioning, and lifetime support.
                        </p>
                        <a href="<?php echo home_url('unifi-it-infrastructure'); ?>" class="n_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="black" />
                                <path d="M16.2564 11C16.2564 11.53 16.7827 12.3214 17.3154 12.9857C18.0003 13.8429 18.8188 14.5907 19.7571 15.1614C20.4607 15.5893 21.3136 16 22 16M22 16C21.3136 16 20.46 16.4107 19.7571 16.8386C18.8188 17.41 18.0003 18.1579 17.3154 19.0136C16.7827 19.6786 16.2564 20.4714 16.2564 21M22 16L8 16" stroke="white" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Black section -->

<!-- card section start -->
<section class="mt-5 mb-md-5 mb-4">
    <div class="container contaner_width">
        <div class="row mb-5">
            <div class="col-md-7 client_box">
                <button class="btn rounded-pill wrk_p_btn btn_round mb-3">Work Process</button>
                <h1 class="h">
                    <?php $work_process = get_field('work_process');
                    if ($work_process) : ?>
                        <?php echo $work_process['title']; ?>
                    <?php endif; ?>
                </h1>
            </div>
            <div class="col-md-5 pt-lg-5 mt-auto">
                <p class="p_5">
                    Our solutions really take care of our
                    <br>
                    client's business growth
                </p>
                <ul class="d-flex list-unstyled layer_img_ul p-0 justify-content-between">
                    <li>
                        <img class="img-fluid layer_img" style="width: 251px;" src="https://islootech.com/wp-content/uploads/2025/11/Group-1000002604-2.png" alt="" loading="lazy">
                        <a class="ms-2 join" href="<?php echo home_url('contact'); ?>">Join Us!</a>
                    </li>
                    <li class="d-flex gap-0">
                        <a class="text-decoration-none" target="_blank" href="https://pk.linkedin.com/company/isloo-tech-it">
                            <span class="ms-lg-0 ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                    <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_2001_158)" />
                                    <g clip-path="url(#clip0_2001_158)">
                                        <path d="M11.2194 22V12.6589H12.9793V22.001H11.2194V22ZM15.4979 21.9928V12.6568H17.0547L17.0839 12.9918L17.7211 13.2896L17.8035 13.2286C17.8557 13.1893 17.901 13.1562 17.9452 13.1221C18.5341 12.6713 19.2748 12.4232 20.0337 12.4232C20.695 12.4232 21.3171 12.6082 21.8337 12.9577C22.5714 13.4571 23.0237 14.2314 23.2186 15.3253C23.2779 15.6571 23.3081 15.987 23.3101 16.3064C23.3171 17.8159 23.3161 19.3502 23.3151 20.8348V21.9897H21.5261C21.5261 21.5647 21.5282 21.1388 21.5292 20.7139C21.5332 19.4122 21.5372 18.0671 21.5312 16.7427C21.5292 16.3013 21.49 15.9187 21.4106 15.5734C21.1884 14.6067 20.4256 13.9575 19.513 13.9575C18.9864 13.9575 18.4708 14.1808 18.0608 14.585C17.5653 15.074 17.315 15.7068 17.318 16.4667C17.322 17.8056 17.322 19.1672 17.321 20.4843V21.9917H15.4999L15.4979 21.9928ZM12.0657 11.2383C11.4637 11.2383 11.0054 10.7659 10.9993 10.1404C10.9963 9.8271 11.1049 9.53969 11.3039 9.32877C11.5029 9.11993 11.7782 9.0031 12.0797 9H12.0928C12.732 9 13.1652 9.45801 13.1692 10.1404C13.1712 10.4495 13.0707 10.7183 12.8788 10.9168C12.6798 11.1236 12.3903 11.2373 12.0667 11.2383H12.0657Z" fill="#EC310D" />
                                        <path d="M15.4985 21.9928V12.6569H17.0553L17.0845 12.9919L17.7217 13.2896L17.8041 13.2286C17.8564 13.1893 17.9016 13.1562 17.9458 13.1221C18.5348 12.6713 19.2755 12.4232 20.0343 12.4232C20.6956 12.4232 21.3177 12.6083 21.8343 12.9577C22.572 13.4571 23.0243 14.2315 23.2193 15.3253C23.2786 15.6572 23.3087 15.987 23.3107 16.3065C23.3178 17.8159 23.3168 19.3502 23.3158 20.8349V21.9897H21.5268C21.5268 21.5648 21.5288 21.1388 21.5298 20.7139C21.5338 19.4122 21.5378 18.0672 21.5318 16.7428C21.5298 16.3013 21.4906 15.9188 21.4112 15.5734C21.1891 14.6068 20.4263 13.9575 19.5137 13.9575C18.987 13.9575 18.4715 14.1808 18.0614 14.5851C17.5659 15.0741 17.3157 15.7068 17.3187 16.4667C17.3227 17.8056 17.3227 19.1672 17.3217 20.4844V21.9918H15.5005L15.4985 21.9928Z" fill="#EC310D" />
                                        <path d="M12.98 12.6589H11.2202V22.0011H12.98V12.6589Z" fill="#EC310D" />
                                        <path d="M12.0657 11.2383C11.4637 11.2383 11.0054 10.7659 10.9993 10.1404C10.9963 9.8271 11.1049 9.53969 11.3039 9.32877C11.5029 9.11993 11.7782 9.0031 12.0797 9H12.0928C12.732 9 13.1652 9.45801 13.1692 10.1404C13.1712 10.4495 13.0707 10.7183 12.8788 10.9168C12.6798 11.1236 12.3903 11.2373 12.0667 11.2383H12.0657Z" fill="#EC310D" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_2001_158" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#EC310D" />
                                            <stop offset="1" stop-color="#D1D1D1" />
                                        </linearGradient>
                                        <clipPath id="clip0_2001_158">
                                            <rect width="12.3158" height="13" fill="white" transform="translate(11 9)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <!--<span class="ms-2 icon">Linkedin</span>-->
                        </a>
                        <a class="text-decoration-none ms-md-0 ms-3 ms-md-2" href="https://www.facebook.com/islootech.it/">
                            <span class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_1_69)"></circle>
                                        <path d="M17.3131 18.9702C17.3131 19.9242 17.3131 20.8779 17.3131 21.832C17.3131 21.9974 17.3112 21.9998 17.1651 21.9998C16.5337 21.9998 15.9018 22.0002 15.27 21.9998C15.1386 21.9998 15.1382 21.999 15.1382 21.85C15.1349 19.9525 15.1316 18.0546 15.1286 16.1572C15.1286 16.0494 15.0798 15.9953 14.9822 15.9951C14.6907 15.9951 14.3996 15.9922 14.1082 15.9967C14.0305 15.9979 13.9996 15.9774 14 15.8839C14.0029 15.265 14.0026 14.6462 14 14.027C14 13.9437 14.0261 13.9228 14.0968 13.9236C14.4004 13.9273 14.704 13.9252 15.0076 13.9248C15.1213 13.9248 15.1261 13.9191 15.1272 13.791C15.132 13.2202 15.1246 12.6486 15.1448 12.0782C15.1658 11.4934 15.3296 10.9653 15.7362 10.5636C15.9754 10.3272 16.2613 10.1971 16.5686 10.1101C17.0452 9.97553 17.5302 10.0075 18.0134 10.001C18.3015 9.99728 18.59 10.0055 18.8782 10.0022C18.9584 10.0014 18.9852 10.0305 18.9856 10.12C18.9882 10.7421 18.993 11.3646 19 11.9867C19.0011 12.0786 18.9738 12.1123 18.8885 12.1131C18.4899 12.1155 18.0914 12.1205 17.6932 12.1332C17.4095 12.1422 17.3536 12.3027 17.3436 12.5345C17.3245 12.9711 17.3322 13.4094 17.3274 13.8473C17.3267 13.9326 17.3771 13.9256 17.4275 13.9256C17.8905 13.9256 18.3534 13.9256 18.8167 13.9256C18.99 13.9256 18.9926 13.926 18.9783 14.1119C18.9348 14.6807 18.8881 15.2486 18.845 15.8174C18.8373 15.9179 18.7928 15.9528 18.7081 15.9528C18.2942 15.9536 17.8802 15.9565 17.4662 15.9585C17.3289 15.9594 17.3285 15.9585 17.3285 16.1079C17.3285 17.062 17.3285 18.0161 17.3285 18.9697C17.3234 18.9697 17.3179 18.9697 17.3127 18.9697L17.3131 18.9702Z" fill="#EC310D"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1_69" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EC310D"></stop>
                                                <stop offset="1" stop-color="#D1D1D1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                            </span>
                            <!--<span class="ms-2 icon">Twitter</span>-->
                        </a>
                        <a class="text-decoration-none ms-md-0 ms-3 ms-md-2" href="https://www.instagram.com/islootech.it/">
                            <span class="ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_1_70)"></circle>
                                        <path d="M23.0003 16.0266C22.9819 16.9136 22.9839 17.8012 22.9406 18.6875C22.8867 19.7922 22.4809 20.7331 21.5425 21.3827C21.0007 21.7575 20.3808 21.9363 19.7346 21.9534C18.2919 21.9916 16.8485 22.0027 15.4051 21.9995C14.8548 21.9981 14.2979 21.9718 13.7561 21.8837C12.2779 21.6431 11.2817 20.5911 11.0926 19.1005C11.0328 18.6336 11.0026 18.1609 11.0006 17.6914C10.9974 16.3165 11.0066 14.9417 11.0289 13.5675C11.0407 12.8356 11.1845 12.1275 11.5956 11.5042C12.1499 10.6645 12.9523 10.2069 13.9354 10.0971C14.5862 10.0241 15.2448 10.0057 15.9002 10.0017C17.054 9.99451 18.2085 10.0109 19.3623 10.0307C19.8883 10.0399 20.4104 10.1076 20.9048 10.3049C22.0225 10.7513 22.6589 11.5956 22.8683 12.7627C22.9406 13.1644 22.9622 13.5786 22.9721 13.9883C22.9885 14.6668 22.9767 15.3467 22.9767 16.0259C22.9846 16.0259 22.9925 16.0259 23.001 16.0259L23.0003 16.0266ZM12.0533 15.997C12.0599 15.997 12.0665 15.997 12.073 15.997C12.073 16.4678 12.0605 16.9392 12.0763 17.41C12.0947 17.9564 12.1052 18.5067 12.1781 19.0472C12.3061 19.9927 12.9326 20.6397 13.871 20.814C14.2716 20.8883 14.6853 20.9178 15.0938 20.9251C16.0782 20.9435 17.0632 20.9487 18.0476 20.9356C18.6918 20.927 19.3393 20.9126 19.9783 20.8376C20.9469 20.7239 21.6003 20.0874 21.7914 19.1314C21.8426 18.8749 21.8748 18.6106 21.8781 18.3496C21.8951 17.1503 21.9076 15.951 21.903 14.7516C21.901 14.1993 21.884 13.6444 21.8222 13.096C21.7244 12.2268 21.291 11.5699 20.4314 11.301C20.0308 11.1754 19.5947 11.1261 19.1731 11.1143C18.0364 11.082 16.8984 11.082 15.761 11.0834C15.2691 11.084 14.7773 11.1097 14.2861 11.1432C13.764 11.1794 13.2774 11.3247 12.8676 11.6745C12.3147 12.1459 12.1433 12.783 12.1131 13.4662C12.0756 14.3085 12.0711 15.1521 12.0527 15.995L12.0533 15.997Z" fill="#EC310D"></path>
                                        <path d="M13.9124 15.9726C13.8835 14.3446 15.2613 12.9546 16.9378 12.9211C18.6557 12.8869 20.059 14.2526 20.0728 16.0173C20.0853 17.6611 18.7726 19.0728 17.0199 19.0945C15.2836 19.1162 13.8927 17.6966 13.9131 15.9726H13.9124ZM14.9947 15.9838C14.9901 17.1023 15.8667 18.0011 16.9739 18.0123C18.0719 18.0234 18.9965 17.1082 18.9906 16.0167C18.9847 14.9094 18.0988 14.0119 17.0054 14.0053C15.9061 13.9988 14.9993 14.891 14.994 15.9838H14.9947Z" fill="#EC310D"></path>
                                        <path d="M20.1923 12.0847C20.5948 12.0828 20.9114 12.397 20.9133 12.8001C20.9153 13.1966 20.5916 13.524 20.1969 13.5247C19.8029 13.5247 19.4765 13.2005 19.4726 12.8054C19.4693 12.4109 19.7924 12.0874 20.1916 12.0854L20.1923 12.0847Z" fill="#EC310D"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1_70" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EC310D"></stop>
                                                <stop offset="1" stop-color="#D1D1D1"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                            </span>
                            <!--<span class="ms-2 icon">Twitter</span>-->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-12 col-lg-6 mt-auto">
                <?php $planing = get_field('planing');
                if ($planing) : ?>
                    <!-- <video class="crop_vidio mb-3 w-100" muted loop autoplay playsinline>
                        <source src="<?php echo $planing['video_image']; ?>" type="video/mp4" loading="lazy">
                    </video> -->
                    <img class="crop_vidio mb-3 w-100" src="https://islootech.com/wp-content/uploads/2025/01/crop_vidio-ezgif.com-video-to-gif-converter-1.gif" alt="">
                <?php endif; ?>
                <div class="card mb-xl-0 gray_card border-0 mt-md-0 mt-2 mb-3 pb-3">
                    <div class="p-3 w-100 h-100 start-0 top-0">
                        <h4 class="d-flex card_p mb-2 justify-content-between">
                            <?php $planing = get_field('planing');
                            if ($planing) : ?>
                                <?php echo $planing['title']; ?>
                            <?php endif; ?>
                            <span>01</span>
                        </h4>
                        <p class="main_p mb-0">
                            <?php $planing = get_field('planing');
                            if ($planing) : ?>
                                <?php echo $planing['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-lg-6 mt-auto">

                <div class="card mb-3 border-0 gray_card">
                    <div class="p-3 w-100 h-100 start-0 top-0">
                        <h4 class="d-flex card_p mb-2 justify-content-between">
                            <span>
                                <?php $design = get_field('design');
                                if ($design) : ?>
                                    <?php echo $design['title']; ?>
                                <?php endif; ?>
                            </span>
                            <span>02</span>
                        </h4>
                        <p class="main_p mb-0">
                            <?php $design = get_field('design');
                            if ($design) : ?>
                                <?php echo $design['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="card-body px-md-2 pb-2 pt-2 px-2">
                        <?php $design = get_field('design');
                        if ($design) : ?>
                            <img class="img-fluid w-100 px-2 flower_img_new mb-3" src="<?php echo esc_url($design['thumbnail']['url']); ?>" alt="<?php echo esc_url($design['thumbnail']['url']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card mb-xl-0 gray_card border-0 mt-md-0 mt-2 pb-3 mb-3">
                    <div class=" p-3 w-100 h-100 start-0 top-0">
                        <h4 class="d-flex card_p mb-2 justify-content-between">
                            <span>
                                <?php $code = get_field('code');
                                if ($code) : ?>
                                    <?php echo $code['title']; ?>
                                <?php endif; ?></span>
                            </span>
                            <span>03</span>
                        </h4>
                        <p class="main_p mb-0">
                            <?php $code = get_field('code');
                            if ($code) : ?>
                                <?php echo $code['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-lg-6 mt-auto">
                <div class="card mb-xl-3 gray_card border-0 mt-md-0 mt-2 mb-3">
                    <div class="p-3 w-100 h-100 start-0 top-0">
                        <h4 class="d-flex card_p mb-2 justify-content-between">
                            <span>
                                <?php $testing_and_launching = get_field('testing_and_launching');
                                if ($testing_and_launching) : ?>
                                    <?php echo $testing_and_launching['title']; ?>
                                <?php endif; ?>
                            </span>
                            <span>04</span>
                        </h4>
                        <p class="main_p mb-0">
                            <?php $testing_and_launching = get_field('testing_and_launching');
                            if ($testing_and_launching) : ?>
                                <?php echo $testing_and_launching['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <div class="card border-0 gray_card">
                    <div class="p-3 w-100 h-100 start-0 top-0">
                        <h4 class="d-flex card_p mb-2 justify-content-between">
                            <span>
                                <?php $maintenance_support = get_field('maintenance_support');
                                if ($maintenance_support) : ?>
                                    <?php echo $maintenance_support['title']; ?>
                                <?php endif; ?>
                            </span>
                            <span>05</span>
                        </h4>
                        <p class="main_p mb-0">
                            <?php $maintenance_support = get_field('maintenance_support');
                            if ($maintenance_support) : ?>
                                <?php echo $maintenance_support['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="card-body px-md-2 pb-2 pt-2 px-2">
                        <?php $maintenance_support = get_field('maintenance_support');
                        if ($maintenance_support) : ?>
                            <img class="img-fluid w-100 px-2 flower_img_new mb-3" src="<?php echo esc_url($maintenance_support['thumbnail']['url']); ?>" alt="<?php echo esc_url($maintenance_support['thumbnail']['url']); ?>">
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- card section end -->
<!-- last section start -->
<section class="mb-5 mt-md-5 mt-4">
    <div class="container py-md-5 my-md-4 contaner_width">
        <div class="row">
            <div class="col-lg-5 last_ctn_col position-relative">
                <img class="img-fluid vector position-absolute top-0" src="<?php echo get_template_directory_uri(); ?>/css/img/Vector-11.png" alt="" loading="lazy">
                <div class="div d-flex justify-content-center flex-column h-100 align-items-baseline">
                    <button class="btn rounded-pill btn_radiant mb-2 no-hover">Why Choose Isloo Tech?</button>
                    <p class="main_p">
                        <?php $why_choose_isloo_tech = get_field('why_choose_isloo_tech');
                        if ($why_choose_isloo_tech) : ?>
                            <?php echo $why_choose_isloo_tech['content']; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-7 ps-md-0">
                <div class="position-relative">
                    <!--<video class="camera_img position-absolute mb-3 w-100" muted loop autoplay playsinline> 
                        <source src="<?php echo get_template_directory_uri(); ?>/css/img/camera_img (online-video-cutter.com).mp4" type="video/mp4" loading="lazy">
                    </video>-->
                    <!--<h1 class="h_4 position-relative mb-2">
                        <?php $why_choose_isloo_tech = get_field('why_choose_isloo_tech');
                        if ($why_choose_isloo_tech) : ?>
                            <?php echo $why_choose_isloo_tech['title']; ?>
                        <?php endif; ?>
                    </h1>-->
                    <!--<img class="img-fluid hand_img position-absolute" src="<?php echo get_template_directory_uri(); ?>/css/img/hand_img.png" alt="" loading="lazy"> -->
                  <h1 class="h_4 position-relative mb-2 d-flex gap-2">Premium Quality
                  <img class="img-fluid hand_img mt-2" src="<?php echo get_template_directory_uri(); ?>/css/img/hand_img.png" alt="" loading="lazy">
                  </h1>
                  <h1 class="h_4 position-relative mb-2 d-flex gap-2">
                   Technology Innovation
                  </h1>
                  <h1 class="h_4 position-relative mb-2 d-flex gap-2">
                   Modern Systems
                   <video class="camera_img w-100 mt-2" muted loop autoplay playsinline> 
                        <source src="<?php echo get_template_directory_uri(); ?>/css/img/camera_img (online-video-cutter.com).mp4" type="video/mp4" loading="lazy">
                    </video>
                  </h1>
                
                </div>


                <div class="audio-button mt-4" id="audioButton">
                    <div class="progress" id="progressBar"></div>
                    <span class="icon"></span>
                    <span>Get Personalized Advice</span>
                    <audio id="audio1">
                        <source src="https://islootech.com/wp-content/uploads/2025/01/Every_business_is_unique__and_so_are_its_inferred.mp3" type="audio/mp3" loading="lazy">
                    </audio>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>