<?php
/*
Template Name: MVP Template
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=1.2.3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
.baner_contaner_1 {height: fit-content;position: unset;margin-top: 8rem;}
.erp_text::before{content:"";position:absolute;border-bottom:2px solid #818181;width:100%;bottom:14%;left:0}.first_section .row:last-child{padding-top:2rem;padding-bottom:1.1rem}.c_ul_1{width:63%!important}.w-fit-content{left:50%;width:375px;transform:translateX(-50%)}.dark_btn{width:374px;background:#000;font-size:24px;font-weight:600;line-height:36px;letter-spacing:-.02em}.arrow_giff_1,.arrow_giff_3{width:40px;top:23%;right:3%}.main-giff_div{right:1%;bottom:35%!important}.text_main{width:fit-content;margin-left:auto;top:-2vw;right:0}.circle_giff_2{width:102px;height:102px;margin-left:auto}.circle_giff{width:142px;height:142px;margin-left:auto}.type_img{filter:grayscale(1)}.erp_content{padding-left:9.4rem}.erp_content span{left:-14%}.main_objective_mvp h1,.slider_h1{font-size:48px;font-weight:400;line-height:58.09px;letter-spacing:-.02em}.erp_content a,.erp_content p,.imtiaz_section h5{line-height:36px;letter-spacing:-.02em}.erp_content p{font-size:18px;font-weight:400}.erp_content a{font-size:17px;font-weight:700;color:#000;text-decoration-line:underline}.imtiaz_section h5{font-family:Inter;font-size:24px;font-weight:600;text-align:left}.imtiaz_section p{font-family:Inter;font-size:16px;font-weight:400;line-height:23.36px;letter-spacing:-.02em;text-align:left}.expert_mvp a,.last_laptop_section h1{font-weight:700;letter-spacing:-.02em}.imtiaz_section button{border-radius:13.5px;border:1px solid #d5d5d5!important;color:#4b4b4b}.last_laptop_section h1{margin-top:-3.5rem;font-size:71px;line-height:58px;color:#000}.black_c_h{color:#000!important}.confrence_roomimg{width:743px;height:377px;object-fit:cover;border-radius:20px}.slider_vidio{height:478px;border-radius:20px;object-fit:fill;background:#f1f1f1}.slider_vidio .item-video{background:#f1f1f1;border-radius:15px!important}.vidio_slider.owl-carousel .owl-dots{text-align:left;margin-top:3rem!important}.vidio_slider.owl-carousel .owl-dots .owl-dot.active span{background-color:#ec310d;width:77px;height:4px}.vidio_slider.owl-carousel .owl-dots .owl-dot span{width:20px;height:4px}.slide{font-size:2rem;text-align:center;background:red}.navbar-light .navbar-toggler:focus{box-shadow:0 0 0!important}.owl-next,.owl-prev{font-size:2rem;color:red}#counter,.banner_carousel_wrapper{color:#cfcfcf!important;line-height:36px!important}.banner_carousel_wrapper{padding:70px 0;top:120px;left:calc(50% + 290px);font-size:24px!important;font-weight:700!important;letter-spacing:-.02em!important}#counter{font-size:23px!important;font-weight:500;letter-spacing:1px}@keyframes fadeTitle{0%,50%{opacity:0}100%{opacity:1}}.bg-image-container{background-image:url('https://islootech.com/wp-content/uploads/2024/12/mvp_bg_image.png');background-size:cover;background-position:center;background-repeat:no-repeat}.bg-image-container .row,.mvp_bg_overlay{background:#f6f6f6ef}.collaborate_img{height:314px;object-fit:cover}.black_box{background-color:#000}.main_sticky_dev{height:77px}.main_objective_mvp{height:236px;width:50%;margin:auto 0 auto auto}.expert_mvp a{color:#ec310d!important;font-size:14px;line-height:21.84px}.expert_mvp h1{font-size:48px;font-weight:400;line-height:58.09px}.main_objective_mvp p{font-size:16px;font-weight:400;line-height:19.36px;letter-spacing:-.02em}.black_box h1,.mvp_activities h1{font-size:24px;font-weight:400;line-height:29.05px}.black_box h3,.mvp_activities p strong{font-size:16px;font-weight:700;line-height:normal}.mvp_activities p strong{width:15vw}.mvp_activities p span{width:100%}.mvp_activities p{border-bottom:1px solid #000}.mvp_activities p:first-child{border-top:1px solid #000}.cmn_p{font-size:16px;font-weight:400;line-height:normal}.mvp_activities{margin-left:1vw;margin-right:1vw;margin-top:2vw!important}.red_sticky_token{background:#ec310d;width:385px;margin-left:-.6vw}.red_sticky_token h2{font-size:24px;font-weight:700;line-height:31px;letter-spacing:-.02em}.red_sticky_token p{font-size:24px;font-weight:100;line-height:38px;letter-spacing:-.02em}.mvp_comparison_section .column_1{background-color:#ec310d}.column_3 h1,.mvp_comparison_section .column_1 h3,.mvp_comparison_section .column_2 h1{font-size:16px;font-weight:700;line-height:18px}.column_1 div,.column_2 div,.column_3 div{height:82px}.column_1 div:first-child,.column_2 div:first-child,.column_3 div:first-child{height:137px}.mvp_comparison_section .column_2{background:#f6f6f6}.mvp_comparison_section .column_3{background:#fff2ef}.mvp_choose_ul li:nth-child(2) h3{font-size:21px;font-weight:600;line-height:25.41px;color:#3e3e3e}.mvp_choose_ul li:first-child h1{color:#ec310d}.mvp_choose_ul{border-bottom:1px solid #e5e5e5;border-top:1px solid #e5e5e5}.mvp_black_section{background:#000}.mvp_ul_black_section li h1{font-size:96px;font-weight:800;line-height:116.18px;background:linear-gradient(326.24deg,#ec310d 0,#d1d1d1 84.7%);background-clip:text;-webkit-text-fill-color:transparent;text-align:center}.mvp_ul_black_section li p{font-size:24px;font-weight:400;line-height:29.05px;text-align:center}.mvp_slider_section{background:#f1f1f1}.accordion_no{font-size:20px;font-weight:400;line-height:31.2px;padding-top:15.6px;padding-bottom:15.6px}.mvp_accordian .accordion-button:focus{border-color:#fff;outline:0;box-shadow:0 0}.mvp_accordian .accordion-button:not(.collapsed){color:#000;background-color:#fff}.mvp_accordian .accordion-header .accordion-button{font-size:20px;font-weight:400;line-height:31.2px;overflow:hidden;position:relative;display:inline-block;text-overflow:ellipsis;white-space:nowrap}.accordion-button::after,.accordion-button:not(.collapsed)::after{background-image:url("")!important}.mvp_accordian .accordion-item ul li:first-child{width:90%}.mvp_accordian .accordion-item ul li:nth-child(2) svg{cursor:pointer}.rotate{animation:.5s forwards rotate;transition:.5s}.rotate_1{rotate:(100%);animation:.5s forwards rotate_1;transition:.5s}

    /* MVP CSS END*/

/* Default: Hide headings except for the first row */
.container-fluid[data-count] .heading {
    display: none;
}

/* Show headings for all rows on mobile screens */
@media (max-width: 768px) {
    .container-fluid[data-count] .heading {
        display: block;
    }
}

/* Show headings only for the first row on desktop screens */
@media (min-width: 769px) {
    .container-fluid[data-count="1"] .heading {
        display: block;
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

    }

    @media (max-width: 1300px) {

        .menu_ul {
            top: -45% !important;
        }
    }

    @media (max-width: 1200px) {

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
            bottom: 76% !important;
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

        .card_yellow_ul li {
            width: 48%;
        }

        .first_section {
            margin-bottom: 2rem;
        }

        .navbar-expand-lg .navbar-collapse {
            display: none !important;
        }

        /* header */


        /* Process Flow */

        .mvp_stage_section .mvp_bg_image {
            object-fit: cover;
        }


        .mvp_ul_black_section li h1 {
            font-size: 40px;
            line-height: 53.18px;
        }

        .expert_mvp h1 {
            font-size: 44px;
            line-height: 51.09px;
        }

        .mvp_activities {
            height: 282px;
        }

        .main_objective_mvp {
            height: 177px;
        }

        .mvp_activities {
            height: 337px;
        }

        /* Process Flow */
    }

    @media (max-width: 767px) {
        .red_sticky_token p {
            font-size: 6vw;
            line-height: normal;
        }

        .main_objective_mvp h1 {
            font-size: 9vw;
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

        .main_objective_mvp {
            width: 100%;
            justify-content: left !important;
            margin-bottom: 1.5rem;
        }

        .column_1 div:first-child {
            height: auto;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .cmn_p {
            font-size: 16px;
            line-height: normal;
            display: grid !important;
            gap: 0 !important;
        }

        .black_box h3,
        .mvp_activities p strong {
            margin-bottom: 0.7rem;
            width: 100% !important;

        }

        .none_border {
            border-top: none !important;
        }

        .black_box h1 {
            line-height: 12vw;
        }

        .mvp_comparison_section .column_1 h3 {
            font-size: 20px;
        }

        .column_2 div,
        .column_3 div {
            height: fit-content !important;
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .mvp_ul_black_section li h1 {
            font-size: 14vw !important;
        }

        .collaborate_img {
            height: 60vw !important;
            margin-top: 6vw;
            object-fit: cover;
            width: 100%; 
        }

        @supports (-webkit-touch-callout: none) {
            .collaborate_img {
                height: auto !important; 
                max-height: 60vw !important;
                object-fit: contain;
            }
        }

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
            font-size: 7.9vw;
            font-weight: 400;
            line-height: 10vw;
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

        /* .baner_contaner {
            height: 161vw !important;
        } */

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

        .main-giff_div {
            bottom: 39.2% !important;
        }

        .first_section .row:last-child {
            margin-top: 4rem;
        }

        .navbar-light .navbar-toggler {
            padding: 0;
        }

        /* MVP */

        .mvp_ul_black_section {
            flex-wrap: wrap;
            column-gap: 6%;
        }

        .mvp_choose_ul {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
            display: grid !important;
        }

        .mvp_choose_ul li:nth-child(2) p {
            margin-bottom: 0 !important;
        }

        .mvp_choose_ul li:nth-child(2) p:last-child {
            display: none;
        }

        .mvp_ul_black_section li {
            width: 47%;
        }

        .mvp_stage_section .mvp_bg_image {
            height: 185vh;
        }

        .red_sticky_token h2 {
            font-size: 20px;
        }

        .red_sticky_token {
            width: 100%;
        }

        .col-md-5:has(.collaborate_img) {
            border-left: 0 !important;
        }

        .last_laptop_section h1 {
            margin-top: -1.5rem;
            font-size: 25px;
            line-height: 26px;
        }

        .mvp_stage_section {
            overflow: hidden !important;
        }

        .bg-image-container .row {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .mvp_activities {
            height: auto;
        }

        .c_button_22 span {
            font-size: 17px !important;
        }

        .mvp_ul_black_section li p {
            font-size: 20px;
            margin-bottom: 10vw;
        }

        .expert_mvp h1 br {
            display: none;
        }

        .expert_mvp h1 {
            font-size: 7vw;
            line-height: 39.09px;
            margin-bottom: -7px;
        }

        .expert_mvp h1 {
            font-size: 8vw !important;
        }

        .mvp_comparison_section .container {
            padding-left: 25px !important;
            padding-right: 25px !important;
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

        .mvp_accordian .accordion-item ul li:first-child {
            width: 85%;
        }

        .accordion-header ul {
            gap: 1rem !important;
        }

        /* MVP */


        /* footer */
        footer .contaner_width {
            margin-bottom: 0 !important;
        }

        /* footer */
        /* footer */
        footer .client_box h1 {
            font-size: 8vw;
            line-height: 41px;
            letter-spacing: -0.02em;
        }

        footer .col-md-5 {
            order: 2;
        }

        footer .col-md-4:nth-child(5) {
            order: 3;
            height: 30px;
        }

        footer .col-md-4:nth-child(4) {
            order: 4;
        }

        footer .col-md-7 {
            order: 6;
            padding-right: 20px;
        }

        footer .col-md-4:nth-child(6) {
            order: 6;
        }

        footer .col-md-12:last-child {
            order: 7;
        }

        .f_text_main {
            left: 86%;
            top: -114px;
            overflow: hidden;
        }

        .circle_giff {
            width: 29vw;
            height: 29vw;
        }

        .right_img {
            width: 22vw;
        }

        .main_p {
            font-size: 14px;
            line-height: 16.94px;
        }

        footer .btn {
            font-size: 15px;
        }

        /* footer */
    }
</style>
<div class="clear_div"></div>

<section>
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner baner_contaner_1">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
                <div class="">
                    <h1 class="mb-4"><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                    <div class="mbl_stamp">
                        <div class="full_button m-auto py-2 c_button_22 mb-md-5" style="width: fit-content !important;">
                            <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span style="padding-left: 0 !important;">
                                    <?php $cta_button = get_field('cta_button');
                                    if ($cta_button) : ?>
                                        <?php echo $cta_button['name']; ?>
                                    <?php endif; ?></span>
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
        <?php
        $custom_posttype_logo = new WP_Query(array(
            'post_type' => 'logo',
            'posts_per_page' => 100,
        ));
        ?>
        <div class="d-flex border-top border-bottom justify-content-center align-items-center brand_mt_row" style="overflow: hidden;">
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
<section class="mvp_stage_section pb-4">
    <div class="container contaner_width px-lg-0 mb-5 pb-md-5 position-relative">
        <div class="row">
            <div class="mt-md-4 mt-4 mb-5 expert_mvp py-2 py-md-5 text-center">
                <a class="text-decoration-none text-dark" href="#">Process Flow</a>
                <h1 class="text-center mb-1">
                    <?php $stage_1 = get_field('stage_1');
                    if ($stage_1) : ?>
                        <?php echo $stage_1['process_heading']; ?>
                    <?php endif; ?>
                </h1>
            </div>
            <div class="col-12 p-0 position-relative">

                <div class="container-fluid px-0 bg-image-container">
                    <div class="row py-4">
                        <div class="col-md-7 mt-auto pb-4">
                            <div class="main_sticky_dev">
                                <div class="red_sticky_token position-absolute top-0 start-0 px-3 px-md-4 py-3">
                                    <p class="text-white mb-0">Stage 1:</p>
                                    <h2 class="text-white mb-0">
                                        <?php $stage_1 = get_field('stage_1');
                                        if ($stage_1) : ?>
                                            <?php echo $stage_1['heading']; ?>
                                        <?php endif; ?>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="main_objective_mvp position-relative d-flex align-items-end justify-content-end">
                                <div>
                                    <h1>
                                        <?php $stage_1 = get_field('stage_1');
                                        if ($stage_1) : ?>
                                            <?php echo $stage_1['title']; ?>
                                        <?php endif; ?>
                                    </h1>
                                    <p class="cmn_p">
                                        <?php $stage_1 = get_field('stage_1');
                                        if ($stage_1) : ?>
                                            <?php echo $stage_1['content']; ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="mvp_activities d-flex flex-column justify-content-end mt-auto">
                                <h1>Activities</h1>
                                <?php
                                $count = 1; // Initialize counter 
                                while (have_rows('activities')): the_row();
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content'); // WYSIWYG Editor content
                                ?>
                                    <p class="py-4 py-md-3 d-flex cmn_p gap-5 mb-0 border-top <?php echo $count === 1 ? 'border-dark none_border' : ''; ?>">
                                        <strong class=""><?php echo wp_kses($title, array('br' => array())); ?></strong>
                                        <span><?php echo wp_kses_post($content); ?></span>
                                    </p>
                                <?php
                                    $count++; // Increment counter after each iteration
                                endwhile;
                                ?>


                            </div>
                        </div>
                        <div class="col-md-5 border-start">
                            <?php
                            $stage_1 = get_field('stage_1');
                            if ($stage_1): ?>
                                <img class="img-fluid w-100 collaborate_img"
                                    src="<?php echo esc_url($stage_1['thumbnail']['url']); ?>"
                                    alt="<?php echo esc_attr($stage_1['thumbnail']['alt']); ?>">
                            <?php endif; ?>

                            <div class="black_box px-3 pb-1 pt-4">
                                <div class="py-2 border-bottom border-white">
                                    <h1 class="text-white">Deliverables</h1>
                                </div>
                                <?php
                                $count = 1;
                                $total = count(get_field('deliverables')); // Get the total number of rows in the repeater field

                                while (have_rows('deliverables')): the_row();
                                    $title = get_sub_field('title');
                                ?>
                                    <div class="py-4 <?php echo $count === $total ? '' : 'border-bottom border-white'; ?>">
                                        <h3 class="text-white mb-0 fw-bold">
                                            <?php echo wp_kses($title, array('br' => array())); ?>
                                        </h3>
                                    </div>
                                <?php
                                    $count++;
                                endwhile;
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                <!--                 </div> -->
            </div>
        </div>
    </div>
</section>

<section class="mvp_stage_section mt-md-3 pb-md-3 pb-4">
    <div class="container contaner_width px-lg-0 mb-5 pb-md-5 position-relative">
        <div class="row">

            <div class="col-12 bg-image p-0 position-relative">

                <div class="container-fluid px-0 bg-image-container">
                    <div class="row py-4">
                        <div class="col-md-7 mt-auto pb-4">
                            <div class="main_sticky_dev">
                                <div class="red_sticky_token position-absolute top-0 start-0  px-3 px-md-4 py-3">
                                    <p class="text-white mb-0">Stage 2:</p>
                                    <h2 class="text-white mb-0">
                                        <?php $stage_2 = get_field('stage_2');
                                        if ($stage_2) : ?>
                                            <?php echo $stage_2['heading']; ?>
                                        <?php endif; ?>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="main_objective_mvp position-relative d-flex align-items-end justify-content-end">
                                <div>
                                    <h1>
                                        <?php $stage_2 = get_field('stage_2');
                                        if ($stage_2) : ?>
                                            <?php echo $stage_2['title']; ?>
                                        <?php endif; ?>
                                    </h1>
                                    <p class="cmn_p">
                                        <?php $stage_2 = get_field('stage_2');
                                        if ($stage_2) : ?>
                                            <?php echo $stage_2['content']; ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="mvp_activities d-flex flex-column justify-content-end mt-auto">
                                <h1>Activities</h1>
                                <?php
                                $count = 1; // Initialize counter 
                                while (have_rows('activities_2')): the_row();
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content'); // WYSIWYG Editor content
                                ?>
                                    <p class="py-4 py-md-3 d-flex cmn_p gap-5 mb-0 border-top <?php echo $count === 1 ? 'border-dark none_border' : ''; ?>">
                                        <strong class=""><?php echo wp_kses($title, array('br' => array())); ?></strong>
                                        <span><?php echo wp_kses_post($content); ?></span>
                                    </p>
                                <?php
                                    $count++; // Increment counter after each iteration
                                endwhile;
                                ?>


                            </div>
                        </div>
                        <div class="col-md-5 border-start">
                            <?php
                            $stage_2 = get_field('stage_2');
                            if ($stage_2): ?>
                                <img class="img-fluid w-100 collaborate_img"
                                    src="<?php echo esc_url($stage_2['thumbnail']['url']); ?>"
                                    alt="<?php echo esc_attr($stage_2['thumbnail']['alt']); ?>">
                            <?php endif; ?>

                            <div class="black_box px-3 pb-1 pt-4">
                                <div class="py-2 border-bottom border-white">
                                    <h1 class="text-white">Deliverables</h1>
                                </div>
                                <?php
                                $count = 1;
                                $total = count(get_field('deliverables_2')); // Get the total number of rows in the repeater field

                                while (have_rows('deliverables_2')): the_row();
                                    $title = get_sub_field('title');
                                ?>
                                    <div class="py-4 <?php echo $count === $total ? '' : 'border-bottom border-white'; ?>">
                                        <h3 class="text-white mb-0 fw-bold">
                                            <?php echo wp_kses($title, array('br' => array())); ?>
                                        </h3>
                                    </div>
                                <?php
                                    $count++;
                                endwhile;
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                <!--                 </div> -->
            </div>
        </div>
    </div>
</section>

<section class="mvp_stage_section mt-md-4 pb-md-2">
    <div class="container contaner_width px-lg-0 mb-md-5 position-relative">
        <div class="row">

            <div class="col-12 p-0 position-relative">
                <div class="container-fluid px-0 bg-image-container">
                    <div class="row py-4">
                        <div class="col-md-7 mt-auto pb-4">
                            <div class="main_sticky_dev">
                                <div class="red_sticky_token position-absolute top-0 start-0  px-3 px-md-4 py-3">
                                    <p class="text-white mb-0">Stage 3:</p>
                                    <h2 class="text-white mb-0">
                                        <?php $stage_3 = get_field('stage_3');
                                        if ($stage_3) : ?>
                                            <?php echo $stage_3['heading']; ?>
                                        <?php endif; ?>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="main_objective_mvp position-relative d-flex align-items-end justify-content-end">
                                <div>
                                    <h1>
                                        <?php $stage_3 = get_field('stage_3');
                                        if ($stage_3) : ?>
                                            <?php echo $stage_3['title']; ?>
                                        <?php endif; ?>
                                    </h1>
                                    <p class="cmn_p">
                                        <?php $stage_3 = get_field('stage_3');
                                        if ($stage_3) : ?>
                                            <?php echo $stage_3['content']; ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="mvp_activities d-flex flex-column justify-content-end mt-auto">
                                <h1>Activities</h1>
                                <?php
                                $count = 1; // Initialize counter
                                while (have_rows('activities_3')): the_row();
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content'); // WYSIWYG Editor content
                                ?>
                                    <p class="py-4 py-md-3 d-flex cmn_p gap-5 mb-0 border-top <?php echo $count === 1 ? 'border-dark none_border' : ''; ?>">
                                        <strong class=""><?php echo wp_kses($title, array('br' => array())); ?></strong>
                                        <span><?php echo wp_kses_post($content); ?></span>
                                    </p>
                                <?php
                                    $count++; // Increment counter after each iteration
                                endwhile;
                                ?>


                            </div>
                        </div>
                        <div class="col-md-5 border-start">
                            <?php
                            $stage_3 = get_field('stage_3');
                            if ($stage_3): ?>
                                <img class="img-fluid w-100 collaborate_img"
                                    src="<?php echo esc_url($stage_3['thumbnail']['url']); ?>"
                                    alt="<?php echo esc_attr($stage_3['thumbnail']['alt']); ?>">
                            <?php endif; ?>

                            <div class="black_box px-3 pb-1 pt-4">
                                <div class="py-2 border-bottom border-white">
                                    <h1 class="text-white">Deliverables</h1>
                                </div>
                                <?php
                                $count = 1;
                                $total = count(get_field('deliverables_3')); // Get the total number of rows in the repeater field

                                while (have_rows('deliverables_3')): the_row();
                                    $title = get_sub_field('title');
                                ?>
                                    <div class="py-4 <?php echo $count === $total ? '' : 'border-bottom border-white'; ?>">
                                        <h3 class="text-white mb-0 fw-bold">
                                            <?php echo wp_kses($title, array('br' => array())); ?>
                                        </h3>
                                    </div>
                                <?php
                                    $count++;
                                endwhile;
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                <!--                 </div> -->
            </div>
        </div>
    </div>
</section>

<section class="mvp_comparison_section mb-3 mt-md-0 mt-3">
    <div class="container px-5 mb-md-5 pb-md-5 position-relative">
        <div class="row">
            <div class="mt-5 mb-3 expert_mvp py-md-4 text-center">
                <a class="text-decoration-none text-dark" href="#">Comparison</a>
                <h1 class="text-center mb-3 mb-md-1">
                    <?php
                    $comparison = get_field('comparison');
                    echo !empty($comparison['title']) ? esc_html($comparison['title']) : 'Comparison Title Missing';
                    ?>
                </h1>
            </div>

            <?php if (have_rows('comparison_table')): ?>
                <?php $count = 1; ?>
                <?php while (have_rows('comparison_table')): the_row(); ?>
                    <div class="container-fluid" data-count="<?php echo $count; ?>">
                        <div class="row">
                            <div class="col-lg-2 px-0 column_1">
                                <div class="ps-4 d-flex justify-content-center flex-column border-bottom border-white">
                                    <h3 class="text-white mb-0">
                                        <?php
                                        $row_heading = get_sub_field('row_heading');
                                        echo !empty($row_heading) ? wp_kses($row_heading, array('br' => array())) : 'Heading Missing';
                                        ?>
                                    </h3>
                                </div>
                            </div>

                            <div class="col-lg-5 px-0 column_2">
                                <div class="ps-4 d-flex justify-content-center flex-column border-bottom">
                                    <h1 class="mb-3 mt-md-2 heading heading-1">
                                        <span class="border-bottom border-dark pb-2 d-inline-block">
                                            <?php
                                            $heading_1 = get_sub_field('heading_1');
                                            echo !empty($heading_1) ? wp_kses($heading_1, array('br' => array())) : 'Heading 1 Missing';
                                            ?>
                                        </span>
                                    </h1>
                                    <p class="mb-0 cmn_p">
                                        <?php
                                        $content_1 = get_sub_field('content_1');
                                        echo !empty($content_1) ? wp_kses_post($content_1) : 'Content 1 Missing';
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-5 px-0 column_3">
                                <div class="ps-4 d-flex justify-content-center flex-column border-bottom">
                                    <h1 class="mb-3 mt-md-2 heading heading-2">
                                        <span class="border-bottom border-dark pb-2 d-inline-block">
                                            <?php
                                            $heading_2 = get_sub_field('heading_2');
                                            echo !empty($heading_2) ? wp_kses($heading_2, array('br' => array())) : 'Heading 2 Missing';
                                            ?>
                                        </span>
                                    </h1>
                                    <p class="mb-0 cmn_p">
                                        <?php
                                        $content_2 = get_sub_field('content_2');
                                        echo !empty($content_2) ? wp_kses_post($content_2) : 'Content 2 Missing';
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $count++; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">No comparison data available.</p>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="mvp_choose_section mb-5 pb-md-5 pb-4">
    <div class="container contaner_width mb-md-5 position-relative">
        <div class="row justify-content-end">
            <div class="col-lg-7 px-0">
                <div class="mt-5 mb-4 expert_mvp pb-md-3">
                    <a class="text-decoration-none text-dark" href="#">Why Choose Us</a>
                    <h1 class="mb-1">
                        <?php $why_choose_us = get_field('why_choose_us');
                        if ($why_choose_us) : ?>
                            <?php echo $why_choose_us['title']; ?>
                        <?php endif; ?>
                    </h1>
                </div>
                <?php if (have_rows('why_choose_us_2')): ?>
                    <?php
                    $count = 1; // Initialize counter 
                    while (have_rows('why_choose_us_2')): the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content'); // WYSIWYG Editor content
                    ?>
                        <ul class="d-flex list-unstyled py-md-4 mvp_choose_ul m-0 p-0 gap-4">
                            <li class="expert_mvp">
                                <h1 class=""><?php echo sprintf('%02d', $count); ?></h1>
                            </li>
                            <li>
                                <h3><?php echo wp_kses($title, array('br' => array())); ?></h3>
                                <p class="cmn_p mb-0"><?php echo wp_kses_post($content); ?></p>
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
<section class="mvp_black_section py-3">
    <div class="container py-md-5">
        <div class="row">
            <div class="my-5 expert_mvp pb-4">
                <h1 class="mb-1 text-white ps-md-0 ps-3 mt-md-0 mt-3">We don't just promise <br> results; we deliver them.</h1>
            </div>
            <div class="col-md-12">
                <ul
                    class="d-flex mb-5 align-items-center mvp_ul_black_section justify-content-md-between list-unstyled">
                    <li>
                        <h1 class="fw-bold counterOne">100+</h1>
                        <p class="text-white">Projects Done</p>
                    </li>
                    <li>
                        <h1 class="fw-bold counterTow">35+</h1>
                        <p class="text-white">Top Specialist</p>
                    </li>
                    <li>
                        <h1 class="fw-bold counterThree">95%</h1>
                        <p class="text-white">Client Retention Rate</p>
                    </li>
                    <li>
                        <h1 class="fw-bold counterFour">15+</h1>
                        <p class="text-white">Countries</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mt-md-5 mt-4 pt-3 pt-md-5 mb-md-5 pb-md-5">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 last_laptop_section text-center">
                <img class="img-fluid confrence_roomimg" src="<?php echo get_template_directory_uri(); ?>/css/img/confrence_room.png" alt="">
                <h1 class="text-uppercase pb-3 mb-5">
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

<div class="container px-4 pt-5 mt-md-5">
    <h1 class="mb-4 slider_h1 text-start mt-md-5 mt-3">
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


    <?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>