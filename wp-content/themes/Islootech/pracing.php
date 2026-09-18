<?php /* Template Name: Outsoursing Pricing Template */ ?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>

<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=1.2.2">
<div class="clear_div"></div>

<style>
    .dark_btn,.expert_mvp a,.expert_mvp p{letter-spacing:-.02em}.baner_contaner{height:fit-content!important; margin-top: 8rem;}.d_heading{position:absolute;top:20%;left:4%;color:#fff;font-size:2.5rem}.tbl_section .col-lg-3:first-child .card .card-header{background-color:#fff!important;border-bottom:1px solid #000}.tbl_section .col-lg-3{border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000}.tbl_section .col-lg-3:first-child{border-left:1px solid #000}.tbl_section .col-lg-3:nth-child(4){border-right:1px solid #000!important}.tbl_section .col-lg-3:nth-child(3) .card .card-header,.tbl_section .col-lg-3:nth-child(4) .card .card-header{background-color:#fef4e3!important;border-bottom:1px solid #000}.tbl_section .col-lg-3:nth-child(2) .card .card-header{background-color:#faf6fe!important;border-bottom:1px solid #000}.tbl_section .card .card-header h3{font-size:16px;font-weight:600;line-height:19.36px;color:#3e3e3e;margin-bottom:0}.tbl_section .card .card-body p{font-size:14px;font-weight:400;line-height:16.94px;color:#3e3e3e;margin-bottom:0}.tbl_section .card .card-body ul li img{width:18px;height:18px}.tbl_section .card .card-body ul li:first-child{width:30px;height:30px}.tbl_section .card .card-body ul li:nth-child(2){width:100%}.tbl_section .card .card-body ul{height:60px}.nav-tabs .nav-link.active{background:#ec310d!important;color:#fff!important;border:1px solid #ec310d}.w-fit-content{left:50%;width:330px;transform:translateX(-50%)}.dark_btn{width:330px;background:#000;font-size:24px;font-weight:600;line-height:36px}.arrow_giff_1{width:40px;top:23%;right:3%}.arrow_giff_2,.arrow_giff_3{width:40px;top:50%;right:3%;transform:translateY(-50%)}.main-giff_div{right:1%;bottom:35%!important}.text_main{width:fit-content;margin-left:auto;top:-13%;right:0}.circle_giff_2{width:102px;height:102px;margin-left:auto}.circle_giff{width:142px;height:142px;margin-left:auto}.expert_mvp p{font-size:16px;font-weight:400;line-height:24.96px;color:#000}.expert_mvp a{color:#ec310d!important;font-size:14px;font-weight:700;line-height:21.84px}.rotate{animation:.5s forwards rotate;transition:.5s}.rotate_1{rotate:(100%);animation:.5s forwards rotate_1;transition:.5s}@keyframes rotate_1{from{transform:rotate(100deg)}to{transform:rotate(0)}}@keyframes rotate{from{transform:rotate(0)}to{transform:rotate(90deg)}}.n_font{transition:transform .3s ease-out}

    @media (max-width: 767px) {
        .baner_contaner{
            height: fit-content !important;
            margin-top: 2rem !important;
            padding-top: 3rem !important;
        }
        .logo_ul_1,
        .logo_ul_2 {
            width: auto !important;
        }
        .tbl_section .col-lg-3:nth-child(2) {
        border-left: 1px solid black;
     }
        .tbl_section .col-lg-3:nth-child(3) {
        border-left: 1px solid black;
     }
        .tbl_section .col-lg-3:nth-child(4) {
        border-left: 1px solid black;
     }

        .main-giff_div {
            bottom: 9.2% !important;
        }

        .border_gray {
            border: 1px solid #dcdcdc !important;
        }
    }

    @media (max-width: 1400px) {
        .contaner_width {
            max-width: 100%;
            width: 90%;
        }

        .main-giff_div {
            bottom: 32% !important;
        }


        .baner_contaner {
            height: fit-content !important;
        }

    }

    @media (max-width: 1300px) {

        .menu_ul {
            top: -45% !important;
        }
    }

    @media (max-width: 991px) {

        .navbar_1 {
            padding-left: 1.2rem !important;
            padding-right: 1.2rem !important;
        }

        .navbar-light .navbar-toggler {
            border: 0;
        }

        /* header */
        .servise_img {
            display: none;
        }

        .navbar-light .navbar-toggler {
            border: 0;
            animation-name: borders;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            animation-delay: 1s;
            animation-direction: normal;
            animation-timing-function: linear;
            padding: 0;
        }

        .menu {
            display: none !important;
        }

        .baner_contaner p br {
            display: none !important;
        }

        .card_wrap {
            flex-wrap: wrap;
        }

        .slider_h1 br {
            display: none !important;
        }

        .white_flower_img {
            right: 41%;
            top: 25%;
        }

        .main-giff_div {
            bottom: 76%;
            right: 50%;
            transform: translateX(50px);
        }

        .imtiaz_section {
            margin-top: 2rem !important;
        }

        .vidio_slider {
            margin-top: 2rem;
        }

        .ux_ul {
            flex-direction: row !important;
            gap: 5%;
            flex-wrap: wrap;
            justify-content: center;
        }

        .dev_lunch_ul {
            justify-content: center;
            margin-top: 2rem;
        }

        .first_section {
            margin-bottom: 2rem;
        }

        .navbar-expand-lg .navbar-collapse {
            display: none !important;
        }

        /* header */


        /* Process Flow */
        .expert_mvp h1 {
            font-size: 44px;
            line-height: 51.09px;
        }

        /* Process Flow */
    }

    @media (max-width: 767px) {

        .owl_pagination {
            display: flex;
            align-items: center;
            justify-content: end;
            width: 100%;
            margin-top: -61px;

            .owl_dots {
                display: flex;
                align-items: center;
                margin-right: 20px;

                .owl-dot {
                    height: 11px;
                    width: 35px;
                    cursor: pointer;
                    position: relative;
                    border: none;
                    background: transparent;

                    &::before {
                        position: absolute;
                        content: '';
                        height: 1px;
                        left: 0;
                        right: 0;
                        top: 50%;
                        transform: translateY(-50%);
                        background-color: white;
                    }

                    &.active {
                        &::before {
                            height: 3px;
                        }
                    }
                }
            }

        }

        #counter {
            color: #CFCFCF !important;
            font-size: 46px !important;
            font-weight: 500;
            font-size: 34px !important;
            letter-spacing: -0.02em !important;
        }

        @keyframes fadeTitle {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .contaner_width {
            width: 92%;
        }

        .num {
            left: 67%;
            font-size: 41px;
            bottom: 3px;
            letter-spacing: 3px;
        }

        .vidio_slider.owl-carousel .owl-dots {
            text-align: right;
            margin-top: 3rem !important;
        }

        .vidio_slider.owl-carousel .owl-dots button:nth-child(2) span,
        .vidio_slider.owl-carousel .owl-dots button:nth-child(3) span,
        .vidio_slider.owl-carousel .owl-dots button:nth-child(4) span {
            display: none;
        }

        .vidio_slider.owl-carousel .owl-dots .owl-dot span {
            margin: 0;
            background-color: #EC310D;
            width: 110px;
        }

        .btn:focus {
            box-shadow: 0 0 0 0;
        }

        .before::before,
        .before::after {
            left: -4.59%;
        }

        .after::before,
        .after::after {
            right: -2%;
        }

        .vidio_slider.owl-carousel .owl-dots .owl-dot.active span {
            background-color: #EC310D;
            margin: 0;
            width: 110px;
        }

        .main_spain {
            background-color: #FFF5F1;
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .ux_ul {
            gap: 0%;
            justify-content: unset;
        }

        .ux_ul li {
            font-size: 16px;
            line-height: 36px;
            letter-spacing: -0.02em;
            text-align: left;

            width: 50%;
        }

        .first_section .row:last-child .col-lg-2:nth-child(4),
        .first_section .row:last-child .col-lg-2:nth-child(5),
        .first_section .row:last-child .col-lg-2:nth-child(6) {
            display: none;
        }

        .arrow_giff_1 {
            top: 18%;
            right: 14%;
        }

        .baner_contaner h1 {
            margin-top: 0;
            font-size: 32px;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: -0.02em;
        }

        .baner_contaner p {
            font-size: 16px;
            font-weight: 400;
            line-height: 19.36px;
            letter-spacing: -0.02em;
            margin-bottom: 14rem;
            color: #000000;
            padding-left: 5px;
            padding-right: 5px;
        }

        .dark_btn {
            font-size: 18px;
            line-height: 21.78px;
            letter-spacing: -0.02em;
            padding: 21px 26px !important;
            width: 84%;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .baner_contaner {
            height: 631px;
        }

        .baner_contaner .col-md-12 {
            justify-content: end !important;
        }

        .dev_lunch_ul li:last-child p br {
            display: none;
        }

        .dev_lunch_ul {
            flex-wrap: wrap;
            margin-top: -8px;
            gap: 31px !important;
        }

        .dev_lunch_ul li:first-child {
            width: 100%;
        }

        .dev_lunch_ul li:first-child h3 {
            margin-top: 6rem !important;
        }

        .dev_lunch_ul li:last-child {
            width: unset;
        }

        .dev_lunch_ul li:nth-child(2) {
            margin: auto;
            margin-bottom: 0;
        }

        .dev_lunch_ul li:last-child {
            width: 100%;
        }


        .main_orl_dev,
        .main_orl_dev img {
            width: 100%;
        }

        .first_section {
            margin-bottom: 2rem;
        }

        .imtiaz_section p {
            font-size: 15px;
            margin-bottom: 25px !important;
        }

        .slider_vidio {
            height: 254px;
        }

        .vidio_slider {
            margin-top: 1.5rem;
        }

        .confrence_roomimg {
            height: 175px;
        }

        .slider_h1 {
            font-size: 32px;
            line-height: 41px;
            letter-spacing: -0.02em;
        }

        .imtiaz_section {
            order: 2;
        }

        .imtaiz_logo {
            width: 138.97px;
            height: 38px;
        }

        .imtiaz_section button {
            width: 125px;
            height: 42px;
        }

        .app_d_p {
            font-size: 16px;
            font-weight: 500;
            line-height: 24.96px;
            letter-spacing: -0.02em;
        }

        .app_d_h {
            font-size: 33px;
            font-weight: 400;
            line-height: 41px;
            letter-spacing: -0.02em;
            margin-bottom: 0 !important;
            margin-top: 0 !important;
            padding-bottom: 15px !important;
        }

        .app_d_h br {
            display: none;
        }

        .right_img_first {
            width: 47px !important;
        }

        .first_section .row:last-child {
            margin-top: 4rem;
        }

        .navbar-light .navbar-toggler {
            padding: 0;
        }

        /* MVP */
        .last_laptop_section h1 {
            margin-top: -1.5rem;
            font-size: 25px;
            line-height: 26px;
        }

        .expert_mvp h1 br {
            display: none;
        }

        .expert_mvp h1 {
            font-size: 31px;
            line-height: 39.09px;
        }

        .accordion-header button {
            display: inline-block;
            /* width: 288px; */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0;
            margin: 0;
        }

        .accordion-header button:hover {
            display: inline-block;
            width: 288px;
            white-space: wrap;
            overflow: unset;
            text-overflow: clip;
        }

        .accordion-button::after {
            position: absolute;
            right: 0%;
            top: 50%;
            transform: translateY(-50%);
        }

        .accordion_no {
            padding-top: 19.7px;
            padding-bottom: 19.7px;
        }

        .mvp_accordian .accordion-item ul li:first-child {
            width: 85%;
        }

        .accordion-header ul {
            gap: 1rem !important;
        }

        .tbl_section .col-lg-3 {
            border-left: 1px solid black;
        }

        .tbl_section .col-lg-3:nth-child(4) {
            border-right: 1px solid black !important;
        }

        /* MVP */
    }
</style>


<section>
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end position-relative h-100">
                <div class="">
                    <h1 class="mb-4"><?php the_title(); ?></h1>

                    <?php the_content(); ?>

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
</section>

<section class="tbl_section pb-md-5 pt-md-2">
    <div class="container contaner_width pb-3 pt-md-0 pt-4">
        <div class="row pt-md-0 pt-3">
            <div class="col-lg-3 col-md-6 p-0">
                <div class="card border-0">
                    <div class="card-header">
                        <h3 class="invisible">
                            Continuous Integration
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <p class="">
                               Best For
                            </p>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <p class="">
                                Payment Structure
                            </p>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <p class="">
                                Key Advantages
                            </p>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <p class="">
                                Considerations
                            </p>
                        </ul>
                       
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="card border-0">
                    <div class="card-header">
                        <h3>
                            Fixed Price
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>Clearly defined projects with fixed scope</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled  py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>One-time, fixed payment based on agreed price</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>- Predictable budget <br>- No cost fluctuations</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>- Less flexibility for scope changes <br>- Requires detailed project planning </p>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="card border-0">
                    <div class="card-header">
                        <h3>
                            Time and Material
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>Evolving projects or ongoing development</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>Pay for actual time spent and resources used (hourly/daily rates)</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p> - Flexibility for scope changes<br>
                                    - Agile development and iteration</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p> - Uncertain final cost <br>
                                    - Requires close monitoring to stay within budget</p>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="card border-0">
                    <div class="card-header">
                        <h3>
                        Retainer-Based
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>Ongoing support, maintenance, or long-term collaboration</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>Recurring payments (monthly/quarterly)</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>- Continuous access to services<br> - Predictable recurring costs</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled py-3 d-flex m-0 gap-3">
                            <li>
                                <img class="img-fluid" src="https://islootech.com/wp-content/uploads/2024/12/Vector-1.png" alt="">
                            </li>
                            <li>
                                <p>- Requires long-term commitment<br>- Ideal for ongoing or fluctuating work needs</p>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="mt-lg-5 mt-md-4 pb-md-5">
    <div class="container pt-5 mt-md-0 mt-4">
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
              <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
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
                    <?php if (have_rows('faq')):
                    ?>
                        <?php $count = 0;
                        ?>
                        <?php while (have_rows('faq')): the_row();
                        ?>
                            <?php
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            $count++;
                            ?>
                            <div class="row align-items-start">
                                <div class="col-md-3 col-1 d-md-block d-none">
                                    <span>
                                        <h4 class="mb-0 mbl_number mt-md-3" style="font-weight:400">
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
<!--<div class="container pt-5">
    <h1 class="mb-4 slider_h1 text-center mt-md-5 mt-3">
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
    <?php wp_footer(); ?>