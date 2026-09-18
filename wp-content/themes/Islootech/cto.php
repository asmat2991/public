<?php /* Template Name: CTO Template */ ?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>

<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cto.css?v=1.2.3">
<div class="clear_div"></div>
<style>
.baner_contaner_1 {height: fit-content;position: unset;margin-top: 8rem;}
    .iot-technology-strip { justify-content: flex-start !important; }
    .iot-technology-strip .iot-technology-track { display: flex; flex: 0 0 max-content; will-change: transform; }
    .iot-technology-strip .service_logoo { flex: 0 0 auto !important; width: auto !important; padding: 0 36px; }
    .iot-technology-strip .strip__item { align-items: center; color: #252525; display: inline-flex; font-size: 18px; font-weight: 600; line-height: 1.2; white-space: nowrap; }
    .iot-technology-strip .strip__item i { background: #f4512a; border-radius: 4px; display: inline-block; height: 14px; margin-right: 18px; width: 14px; }
    .iot-technology-strip .iot-technology-track.is-scrolling-left { animation: iot-technology-scroll-left 40s linear infinite; }
    .iot-technology-strip .iot-technology-track.is-scrolling-right { animation: iot-technology-scroll-right 40s linear infinite; }
    @keyframes iot-technology-scroll-left { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    @keyframes iot-technology-scroll-right { from { transform: translateX(-50%); } to { transform: translateX(0); } }
 .w-fit-content,.w-fit-content_2,.w-fit-content_3{transform:translateX(-50%)}.c_button_23 span{padding-left:1vw}.lg_font_cto{font-size:clamp(3.2rem, 2.7vw, 2.7rem)}.d_heading{position:absolute;top:20%;left:4%;color:#fff;font-size:2.5rem}.confrence_roomimg{border-radius:20px}.baner_contaner_1 h1{font-size:calc(2.375rem + 1.5vw);font-weight: 300;}.first_section{margin-bottom:1rem}.main-giff_div{position:unset!important;margin-top:-9rem}.nav-tabs .nav-link.active{background:#ec310d!important;color:#fff!important;border:1px solid #ec310d}.hand_combine-pic,.software-house-pic{object-fit:cover;border-top-left-radius:20px;border-bottom-right-radius:20px}.w-fit-content{left:50%;width:330px}.w-fit-content_2{left:50%;width:380px}.w-fit-content_3{left:50%;width:300px}.w-fit-content_5{left:50%;transform:translateX(-60%);width:334px}.dark_btn{width:330px;background:#000;font-size:24px;font-weight:600;line-height:36px;letter-spacing:-.02em}.dark_btn_1,.dark_btn_2{font-size:20px;font-weight:600;line-height:36px;letter-spacing:-.02em}.dark_btn_1{width:380px;background:#000}.dark_btn_2{width:300px;background:#fff}.arrow_giff_1{width:40px;top:23%;right:3%}.arrow_giff_2,.arrow_giff_3{width:40px;top:50%;right:3%;transform:translateY(-50%)}.text_main{width:fit-content;margin-left:auto;top:-13%;right:0}.circle_giff_2{width:102px;height:102px;margin-left:auto}.circle_giff{width:142px;height:142px;margin-left:auto}.red_box_section .row{background-color:#ec310d;border-radius:20px}.transparent_bg_img{width:100%;height:388px}.red_box_section .contaner_width .row .col-md-4:first-child h1{font-size:54px;font-weight:500;line-height:72.45px}.software-house-pic{height:550px;width:100%;border-top-right-radius:20px}.hand_combine-pic{width:100%;border-bottom-left-radius:20px}.expert_mvp p{font-size:16px;font-weight:400;line-height:24.96px;letter-spacing:-.02em;color:#000}.expert_mvp a{color:#ec310d!important;font-size:14px;font-weight:700;line-height:21.84px;letter-spacing:-.02em}.mvp_choose_ul li:nth-child(2) h3{font-size:16px;font-weight:700;line-height:25.41px;color:#393939}.mvp_choose_ul li:nth-child(2) p{font-size:16px;font-weight:400;line-height:19.36px}.mvp_choose_ul li:first-child h3,.mvp_choose_ul li:nth-child(3) h3{font-size:21px;font-weight:600;line-height:25.41px;color:#3e3e3e}.mvp_choose_ul li:first-child{width:11%}.mvp_choose_ul li:nth-child(2){width:45%}.mvp_choose_ul{border-bottom:1px solid #e5e5e5;border-top:1px solid #e5e5e5}.services_section_card_section{background-color:#000!important;border-radius:20px}.services_section_card_section .card{border-radius:20px;background-color:#fff;min-height:470px}.services_section_card_section .card h1{font-size:48px;font-weight:400;line-height:58.09px;color:#000}.services_section_card_section .card p,.services_section_card_section .card ul li{font-size:16px;line-height:24.96px;letter-spacing:-.02em;color:#000}.services_section_card_section .card h3{font-size:21px;font-weight:600;line-height:25.41px;color:#000}.rotate{animation:.5s forwards rotate;transition:.5s}.rotate_1{rotate:(100%);animation:.5s forwards rotate_1;transition:.5s}.n_font{transition:transform .3s ease-out}
    @media (max-width: 1400px) {
        .contaner_width {
            max-width: 100%;
            width: 90%;
        }

        /* .baner_contaner_1 {
            height: 86vh !important;
        } */

        .baner_contaner_1 h1 {
            font-size: calc(1.375rem + 1.5vw);
        }

    }
    @media (max-width: 767px) {
        body{
            overflow-x: hidden !important;
        }
        .mbl_stamp {
            display: grid;
        }
        .brand_mt_row {
            margin-top: 3rem;
        }
        .mbl_stamp .c_button_22 {
            order: 2;
        }

        .mbl_stamp .main-giff_div {
            margin-top: 0 !important;
            margin-bottom: 1.5rem;
        }

            .baner_contaner_1 h1 {
            margin-top: 0;
            font-size: 7.9vw;
            font-weight: 400;
            line-height: 10vw;
            letter-spacing: -0.02em;
        }
            .baner_contaner_1 p br{
                display: none !important;
            }
            .baner_contaner_1 p {
                font-size: 16px;
                font-weight: 400;
                line-height: 19.36px;
                letter-spacing: -0.02em;
                color: #000000;
                padding-left: 5px;
                padding-right: 5px;

                }

        .llgo_main br {
            display: none !important;
        }

        .first_section .row:last-child {
            padding-top: 2rem !important;
        }

        .baner_contaner_1 .col-md-12 {
            flex-direction: row !important;
        }

        .logo_ul_1,
        .logo_ul_2 {
            width: auto !important;
        }

        .border_gray {
            border: 1px solid #dcdcdc !important;
        }

        .services_section_card_section .card h1 {
            font-size: 7vw;
            font-weight: 600;
            margin-bottom: 1vw !important;
        }

        .sspan_padding {
            padding-left: 1.5vw !important;
            padding-right: 18vw !important;
        }

        .red_box_section p {
            font-size: 3.5vw !important;
            padding-left: 2vw;
            padding-right: 4vw;
            margin-top: 2vw;
            margin-bottom: 7vw;
        }

        .right_img {
            width: 22vw !important;
        }
        .mvp_choose_ul li:nth-child(2) p{
            margin-bottom: 1.5rem !important;
        }
        .circle_giff {
            width: 29vw;
            height: 29vw;
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

        .service_red_box div ul {
            flex-wrap: wrap;
            gap: 1rem !important;
        }

        .main_card_part {
            flex-wrap: wrap;
            justify-content: center;
        }

        .main_card_part .col-lg {
            width: 48%;
        }

        .transparent_bg_img {
            height: 303px;
        }

        .software-house-pic {
            height: 550px;
            border-bottom-left-radius: 20px;
        }

        .hand_combine-pic {
            height: 550px;
            border-top-right-radius: 20px;
        }

        .software_hand_pic_section .row .col-lg-6:first-child {
            order: 2;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(2) {
            order: 1;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(3) {
            order: 3;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(4) {
            order: 4;
        }

        .mvp_choose_ul li:nth-child(2) {
            width: 80%;
        }

        /* Process Flow */
    }
    @media(max-width:991px) {
        .baner_contaner_1 {
            height: fit-content !important;
            padding-top: 7rem !important;
        }
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

        .main-giff_div {
            position: unset !important;
            transform: translatex(0) !important;
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .text_main {
            margin-left: unset !important;
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
            width: 100%;
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
            height: 631px !important;
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
            border-radius: 20px;
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

        .navbar-light .navbar-toggler {
            padding: 0;
        }

        .services_section .container .row:nth-child(2) {
            padding-left: 0rem !important;
            padding-right: 0rem !important;
        }

        .services_section_card_section {
            border-radius: 0 !important;
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
            font-size: 9vw;
            line-height: 11vw;
            font-weight: 400;
            margin-top: 4px;
        }

        .mvp_choose_section {
            padding-left: 1rem;
            padding-right: 1rem;
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

        .main_card_part .col-lg {
            width: 99%;
        }

        .w-fit-content_3 {
            width: 269px;
            transform: translateX(-50%);
        }

        .dark_btn_1 {
            width: 338px;
            font-size: 18px;
        }

        .dark_btn_2 {
            width: 268px;
            font-size: 18px;
        }

        .w-fit-content_2 {
            left: 50%;
            transform: translateX(50% - 165px);
            width: 342px;
            transform: translateX(-50%);
        }

        .mvp_choose_ul li:first-child {
            width: 100%;
        }

        .mvp_choose_ul li:nth-child(2) {
            width: 100%;
        }

        .mvp_choose_ul:first-of-type {
            border-top: none !important;
        }

        .mvp_choose_ul li:first-child h3,
        .mvp_choose_ul li:nth-child(3) h3 {
            font-size: 21px;
            line-height: 18.41px;
            color: black;
            margin-bottom: 2.5rem;
            margin-top: 1rem;
        }

        .software-house-pic {
            height: 249px;
        }

        .hand_combine-pic {
            height: auto;
            margin-bottom: 5vw;
        }

        .mvp_choose_ul {
            display: grid !important;
            gap: 0 !important;
        }

        .mvp_choose_ul .expert_mvp h1 {
            margin-bottom: 0 !important;
            font-size: 7vw;
            font-weight: 500;
            color: #ec310d;
        }

        .red_box_section .row {
            padding: 36px 0px;
        }

        .red_box_section .row .col-lg-4 {
            margin-bottom: 1.5rem !important;
        }

        .red_box_section .row .col-lg-4:last-child {
            margin-bottom: 0rem !important;
        }

        .red_box_section .contaner_width:has(.row) {
            padding: 0px 25px;
        }

        .services_section .row:first-child p {
            margin-bottom: 2.7rem;
        }

        .devops_gray_section .row .col-lg-2:first-child .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(4) .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(3) .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(2) .card .card-body {
            height: 153px;
        }

        .software_hand_pic_section .row .col-lg-6 {
            margin-bottom: 1.5rem !important;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(4) .expert_mvp {
            margin-bottom: 0.5rem;
        }

        .service_red_box div ul li {
            width: 100%;
            position: relative;
        }

        .mvp_accordian .accordion-item ul li:first-child {
            width: 85%;
        }

        .accordion-header ul {
            gap: 1rem !important;
        }

        .w-fit-content_5 {
            transform: translateX(-50%);
        }

        .transparent_bg_img {
            height: unset;
            padding-left: 10vw;
            padding-right: 10vw;
            margin-top: 2vw;
        }

        .red_box_section .col-lg-4 h1 {
            font-size: 8vw !important;
            font-weight: 400 !important;
            padding-left: 7vw !important;
            padding-right: 7vw !important;
            line-height: 11vw !important;
        }

        /* MVP */
    }
</style>


<section>
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner_1">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
                <div class="">
                    <h1 class="mb-4"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="mbl_stamp">
                        <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
                            <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Transform Your Vision with a CTO</span>
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

    </div>
</section>
<div class="d-md-block d-none"><br></div>
<section class="llgo_main">
    <div class="container first_section contaner_width position-relative">
        <?php $technology_items = get_field('tools'); ?>
        <?php if ($technology_items) : ?>
            <div class="d-flex border-top border-bottom justify-content-center align-items-center brand_mt_row iot-technology-strip" style="overflow: hidden;">
                <div class="iot-technology-track">
                    <?php foreach (array_merge($technology_items, $technology_items) as $technology_item) : ?>
                        <?php if (!empty($technology_item['name'])) : ?>
                            <div class="col-lg-2 text-center col-md-3 col-4 service_logoo">
                                <ul class="p-0 mt-3 d-flex gap-2 justify-content-center list-unstyled align-items-center">
                                    <li><span class="strip__item"><i></i><?php echo esc_html($technology_item['name']); ?></span></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="services_section mt-md-0 mt-5 pb-md-5 pt-md-0 pt-3">
    <div class="container contaner_width pb-3">
        <div class="row">
            <div class="mt-md-5 mb-3 pb-2 expert_mvp pt-md-4 pe-lg-0">
                <a class="text-decoration-none text-dark" href="#">Services</a>
                <h1 class="mb-1">Achieve your business goals with <br>our CTO services</h1>
            </div>
            <div class="col-lg-7 offset-lg-3 mt-md-2 px-md-0">
                <p>Outsourced CTOs are ideal for a variety of businesses, from startups to established companies. We offer four types of CTO services to address specific needs, including teams facing technical challenges, companies undergoing digital transformation, and projects requiring experienced guidance for creating roadmaps, assessing contractors, and negotiating technology aspects with stakeholders. Additionally, we can assist startups in their early stages and projects struggling with architectural issues, while also providing cost-effective tech leadership solutions.</p>
            </div>
        </div>
        <div class="row gy-4 pt-3 mt-md-4">
            <div class="p-md-4 p-3 services_section_card_section">
                <div class="row gy-4">
                    <div class="col-lg-6 pt-md-0 pt-4">
                        <div class="card p-4">
                            <h1 class="mb-4">Full-time CTO</h1>
                            <p class="mb-md-5 mb-4">We provide the option to bring in a full-time remote specialist at any
                                stage of your project to address all your technical leadership needs. This
                                individual will manage tasks from team management to roadmap creation and
                                infrastructure setup.</p>
                            <h3>You Receive</h3>
                            <ul class="p-0 m-0 ms-4 pb-md-0 pb-4">
                                <li>An affordable alternative to hiring an in-house CTO</li>
                                <li>Rapid access to extensive technical and business expertise</li>
                                <li>A professional dedicated to your tasks for 40 hours per week</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-md-0 pt-4">
                        <div class="card p-4">
                            <h1 class="mb-4">Part-time CTO</h1>
                            <p class="mb-md-5 mb-4">Our part-time CTO service offers your development team access to
                                highly-specific expertise. Working in collaboration with your technical and business
                                departments, we focus on specific areas that require additional support.</p>
                            <h3>You Receive</h3>
                            <ul class="p-0 m-0 ms-4 pb-md-0 pb-4">
                                <li>Reduced workload for your full-time CTO</li>
                                <li>Highly qualified assistance with particular project areas</li>
                                <li>Seamless integration of third-party experts into your development process</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-md-0 pt-4">
                        <div class="card p-4">
                            <h1 class="mb-4">Interim CTO</h1>
                            <p class="mb-md-5 mb-4">Leverage our technical expertise to support your development process
                                while you search for and onboard a full-time CTO.</p>
                            <h3>You Receive</h3>
                            <ul class="p-0 m-0 ms-4 pb-md-0 pb-4">
                                <li>CTO responsibilities covered until a full-time CTO is hired</li>
                                <li>Assistance with full-time CTO recruitment and onboarding</li>
                                <li>Setup and fine-tuning of your development process</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 py-md-0 py-4">
                        <div class="card p-4">
                            <h1 class="mb-4">One-time CTO</h1>
                            <p class="mb-md-5 mb-4">Our One-Time CTO service is perfect for fixed-scope projects that
                                require expert guidance and strategic direction. Whether you're facing critical
                                problems, seeking to transform your organization, or developing a minimum viable
                                product (MVP), our CTO can provide the leadership and insights needed to achieve
                                your project objectives.</p>
                            <h3>You Receive</h3>
                            <ul class="p-0 m-0 ms-4 pb-md-0 pb-4">
                                <li>Coverage of your particular short-term goals from a CTO standpoint</li>
                                <li>Detailed recommendations on further maintenance and development following a tech
                                    audit</li>
                                <li>Assistance with advanced troubleshooting when necessary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="red_box_section py-5 mb-md-5 position-relative">
    <div class="container contaner_width position-relative py-md-4 py-2">

        <div class="row px-lg-2 position-relative px-lg-4">
            <div class="col-lg-4 col-md-6 m-auto pe-0">
                <h1 class="text-white text-md-start text-center m-auto lg_font_cto">
                    Outsource Your CTO Needs to Experts
                </h1>
            </div>
            <div class="col-lg-4 col-md-6">
                <img class="img-fluid transparent_bg_img" src="<?php echo get_template_directory_uri(); ?>/css/img/transparent_bg_img.png" alt="">
            </div>
            <div class="col-lg-4 pe-0 position-relative h-100">
                <div class="text-end">
                    <img class="img-fluid d-lg-block ms-auto d-none" src="<?php echo get_template_directory_uri(); ?>/css/img/right_top_line.png" alt="">
                </div>
                <p class="text-white text-md-start text-center ps-lg-2">Gain strategic leadership that guides your technical team with cutting-edge development practices, delivering innovation, scalability, efficiency, and measurable success to elevate your business growth.
                </p>

                <div class="full_button_23 m-auto py-2 c_button_23 mx-md-0 mx-2" style="width: fit-content !important;">
                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"><span class="sspan_padding">Schedule a Meeting</span>
                        <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <section>
        <div class="container software_hand_pic_section mt-md-0 mt-3 contaner_width">
            <div class="row ">
                <div class="col-lg-6 m-auto pe-lg-5">
                    <div class="expert_mvp my-auto py-md-4">
                        <a class="text-decoration-none text-dark" href="#">Why Choose Us?</a>
                        <h1 class="mb-3">Drive innovation with our experienced CTOs. Proven results, guaranteed success</h1>
                        <p class="mb-4">Our team of experienced CTOs is committed to driving your tech success. With a proven track record of delivering results, we offer tailored solutions that align with your unique business goals. As your trusted partner, we'll provide expert guidance, strategic thinking, and unwavering support throughout your tech journey. Choose us for a CTO who understands your vision and is dedicated to helping you achieve your full potential.</p>

                    </div>
                </div>
                <div class="col-lg-6 ps-lg-0 d-md-block d-none">
                    <img class="img-fluid software-house-pic" src="<?php echo get_template_directory_uri(); ?>/css/img/software-house-pic.jpeg" alt="">
                </div>
                <div class="col-lg-6 pe-lg-0">
                    <img class="img-fluid hand_combine-pic" src="<?php echo get_template_directory_uri(); ?>/css/img/hand_combine-pic.jpeg" alt="">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="mt-md-5 expert_mvp py-md-4">
                        <a class="text-decoration-none text-dark" href="#">Benefits</a>
                        <h1 class="mb-1">Our CTO-as-a-Service model offers</h1>
                    </div>
                    <ul class="d-flex list-unstyled py-4 mvp_choose_ul m-0 p-0 gap-4" style="border-top: none !important;">
                        <li class="expert_mvp">
                            <h1 style="color: #ec310d;">01</h1>
                        </li>
                        <li class="w-100">
                            <h3>Cost efficiency</h3>
                            <p class="cmn_p mb-0">Avoid hiring costs, bonuses, and long-term commitments with our flexible, pay-as-you-go approach.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 py-4 mvp_choose_ul m-0 p-0 gap-4">
                        <li class="expert_mvp">
                            <h1 style="color: #ec310d;">02</h1>
                        </li>
                        <li class="w-100">
                            <h3>Flexibility</h3>
                            <p class="cmn_p mb-0">Choose the engagement model that best suits your needs, with options to scale up or down as your project evolves.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 py-4 mvp_choose_ul m-0 p-0 gap-4">
                        <li class="expert_mvp">
                            <h1 style="color: #ec310d;">03</h1>
                        </li>
                        <li class="w-100">
                            <h3>Speed</h3>
                            <p class="cmn_p mb-0">Access a seasoned CTO within weeks, compared to months of traditional recruitment.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 py-4 mvp_choose_ul m-0 p-0 gap-4">
                        <li class="expert_mvp">
                            <h1 style="color: #ec310d;">04</h1>
                        </li>
                        <li class="w-100">
                            <h3>Domain expertise</h3>
                            <p class="cmn_p mb-0">Benefit from a CTO with deep knowledge in your specific industry and technologies.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 py-4 mvp_choose_ul m-0 p-0 gap-4">
                        <li class="expert_mvp">
                            <h1 style="color: #ec310d;">05</h1>
                        </li>
                        <li class="w-100">
                            <h3>Founder mentality</h3>
                            <p class="cmn_p mb-0">Work with a CTO who understands the challenges and opportunities of startups.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 py-4 mvp_choose_ul m-0 p-0 gap-4">
                        <li class="expert_mvp">
                            <h1 style="color: #ec310d;">06</h1>
                        </li>
                        <li class="w-100">
                            <h3>Executive-level leadership</h3>
                            <p class="cmn_p mb-0">Get strategic guidance from a top-tier tech expert without the high costs.</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="mt-md-0 mt-3">
        <div class="container pt-5">
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
                        <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Get a Quote</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- last section -->
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

    <?php endwhile;
    endif; ?>
    <section class="mt-md-0 mt-3">
        <div class="container contaner_width mb-md-5 pb-md-5 pb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="expert_mvp pb-md-5">
                        <a class="text-decoration-none text-dark" href="#">Process Flow</a>
                        <h1 class="mb-3">CTO as Service Stages</h1>
                        
                    </div>

                    <?php if (have_rows('process_flow')): ?>
                        <?php
                        $count = 1; // Initialize counter 
                        while (have_rows('process_flow')): the_row();
                            $title = get_sub_field('title');
                            $content = get_sub_field('content'); // WYSIWYG Editor content
                        ?>
                            <ul class="d-flex list-unstyled justify-content-between py-4 mvp_choose_ul m-0 p-0 gap-4">
                                <li class="expert_mvp">
                                    <h3 class=""><?php echo wp_kses($title, array('br' => array())); ?></h3>
                                </li>
                                <li class="">
                                    <?php echo wp_kses_post($content); ?>
                                </li>
                                <li class="d-md-block d-none d-lg-block">
                                    <h3><?php echo sprintf('%02d', $count); ?></h3>
                                </li>
                            </ul>
                        <?php
                            $count++; // Increment counter after each iteration
                        endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

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
    <!--<div class="container pt-md-5">
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
                    threshold: 0.5
                };

                function animateNumbers(entry) {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-target');
                        const speed = 200;
                        const increment = target / speed;

                        let count = 0;
                        const updateCount = () => {
                            if (count < target) {
                                count += increment;
                                counter.childNodes[0].textContent = Math.ceil(count);
                                setTimeout(updateCount, 10);
                            } else {
                                counter.childNodes[0].textContent = target;
                            }
                        };
                        updateCount();
                        observer.unobserve(counter);
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
