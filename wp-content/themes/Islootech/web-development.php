<?php
/*
Template Name: Web Development Template
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<style>
    .baner_contaner_1 {
        height: fit-content;
        position: unset;
        margin-top: 8rem;
    }

    .l_more:hover {
        color: #ec310d !important;
    }

    .baner_contaner_1 h1,
    .dark_btn_1,
    .dark_btn_2,
    .expert_mvp a {
        letter-spacing: -.02em
    }

    .baner_contaner_1 h1 {
        font-size: 72px;
        font-weight: 300;
        line-height: 61px;
        margin-bottom: .5rem !important;
        margin-top: 0;
        font-family: Inter
    }

    .owl-carousel .owl-item img {
        object-fit: cover
    }

    .dragging-slider.owl-theme .owl-nav {
        justify-content: center;
        z-index: 54567678898990453546;
        display: block;
        margin-top: 0;
        position: absolute;
        justify-content: center;
        right: 29%;
        top: 50%;
        transform: translatey(-50%)
    }

    .red_bg h3 {
        width: 100% !important
    }

    .no-data-margin {
        margin-bottom: 10rem
    }

    .red_bg,
    .service_red_box {
        background-color: #ec310d
    }

    .dark_btn_1,
    .dark_btn_2 {
        line-height: 36px;
        font-weight: 600;
        font-size: 20px
    }

    .dragging-slider .item .item-main-dev {
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        border-left: 1px solid #000
    }

    .item-main-dev h1 {
        font-size: 259px;
        font-weight: 100;
        line-height: 246.95px;
        color: #000
    }

    .item-main-dev h3,
    .mvp_choose_ul li:nth-child(2) h3 {
        font-size: 21px;
        font-weight: 600;
        line-height: 25.41px;
        color: #3e3e3e
    }

    .item-main-dev p {
        font-size: 14px;
        line-height: 16.94px;
        color: #393939
    }

    .dragging-slider.owl-carousel .owl-nav button.owl-next span,
    .dragging-slider.owl-carousel .owl-nav button.owl-prev {
        display: none
    }

    .dragging-slider.owl-carousel .owl-nav button.owl-next {
        background: url(<?php echo get_template_directory_uri(); ?>/css/img/click.png) 0 0/cover !important;
        width: 100px;
        height: 100px
    }

    .item-main-dev {
        min-height: 556px !important
    }

    .drag-slider-img {
        height: 255px;
        border: 1px
    }

    .img_mbl_100,
    .service_red_box {
        border-radius: 20px
    }

    .red_bg {
        height: 300px;
        padding: 16px;
        flex-direction: column;
        display: flex;
        justify-content: start;
        align-items: start;
        color: #fff;
        padding-top: 2.5rem;
    }

    .red_bg h3,
    .red_bg p {
        color: #fff !important
    }

    .img_mbl_100 {
        width: 117px !important;
        height: 117px;
        margin-left: auto
    }

    .flex_dev {
        height: 210px
    }

    .gray-card,
    .gray-card-main {
        padding-bottom: 16rem
    }

    .service_red_box h2 {
        font-size: 40px;
        font-weight: 500;
        line-height: 48.41px;
        position: relative;
        z-index: 3234455
    }

    .service_red_box p {
        font-size: 20px;
        font-weight: 400;
        line-height: 24.2px;
        position: relative;
        z-index: 4554344
    }

    .w-fit-content_2 {
        left: 50%;
        width: 380px;
        transform: translateX(-50%)
    }

    .dark_btn_1 {
        width: 380px;
        background: #000
    }

    .arrow_giff_2,
    .arrow_giff_3 {
        width: 40px;
        top: 50%;
        right: 3%;
        transform: translateY(-50%)
    }

    .service_red_box div ul li {
        position: relative;
        z-index: 3455665
    }

    .w-fit-content_3 {
        left: 50%;
        width: 300px;
        transform: translateX(-50%)
    }

    .dark_btn_2 {
        width: 300px;
        background: #fff
    }

    .red-box-container {
        margin-top: -19rem
    }

    .red-box-container_1 {
        margin-top: -18rem
    }

    .expert_mvp a {
        color: #ec310d !important;
        font-size: 14px;
        font-weight: 700;
        line-height: 21.84px
    }

    .expert_mvp h1 {
        font-size: 48px;
        font-weight: 400;
        line-height: 58.09px
    }

    .mvp_choose_ul {
        border-top: 1px solid #e5e5e5;
        border-bottom: 1px solid #e5e5e5
    }

    .mvp_choose_ul li:first-child h1 {
        color: #ec310d
    }

    .cmn_p {
        font-size: 16px;
        font-weight: 400;
        line-height: normal
    }

    .mvp_black_section {
        background: #000
    }

    .mvp_ul_black_section li h1 {
        font-size: 96px;
        font-weight: 800;
        line-height: 116.18px;
        background: linear-gradient(326.24deg, #ec310d 0, #d1d1d1 84.7%);
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center
    }

    .mvp_ul_black_section li p {
        font-size: 24px;
        font-weight: 400;
        line-height: 29.05px;
        text-align: center
    }

    .iot-technology-strip {
        justify-content: flex-start !important
    }

    .iot-technology-strip .iot-technology-track {
        display: flex;
        flex: 0 0 max-content;
        will-change: transform
    }

    .iot-technology-strip .service_logoo {
        flex: 0 0 auto !important;
        width: auto !important;
        padding: 0 36px
    }

    .iot-technology-strip .strip__item {
        align-items: center;
        color: #252525;
        display: inline-flex;
        font-size: 18px;
        font-weight: 600;
        line-height: 1.2;
        white-space: nowrap
    }

    .iot-technology-strip .strip__item i {
        background: #f4512a;
        border-radius: 4px;
        display: inline-block;
        height: 14px;
        margin-right: 18px;
        width: 14px
    }

    .iot-technology-strip .iot-technology-track.is-scrolling-left {
        animation: iot-technology-scroll-left 40s linear infinite
    }

    .iot-technology-strip .iot-technology-track.is-scrolling-right {
        animation: iot-technology-scroll-right 40s linear infinite
    }

    @keyframes iot-technology-scroll-left {
        from {
            transform: translateX(0)
        }

        to {
            transform: translateX(-50%)
        }
    }

    @keyframes iot-technology-scroll-right {
        from {
            transform: translateX(-50%)
        }

        to {
            transform: translateX(0)
        }
    }

    .iot-platform-panels {
        margin: 28px 0 42px
    }

    .iot-platform-panel {
        align-items: center;
        background: #f4f4f4;
        border-left: 5px solid #f4512a;
        border-radius: 0 20px 20px 0;
        display: flex;
        gap: 30px;
        margin-bottom: 18px;
        min-height: 136px;
        padding: 28px 36px
    }

    .iot-platform-panel--cloud {
        background: #101010;
        color: #fff
    }

    .iot-platform-panel__icon {
        align-items: center;
        border: 2px solid #f4512a;
        border-radius: 50%;
        color: #f4512a;
        display: flex;
        flex: 0 0 68px;
        font-size: 28px;
        height: 68px;
        justify-content: center
    }

    .iot-platform-panel__label,
    .iot-platform-panel__text {
        font-family: 'Inter', sans-serif;
        font-size: 1rem
    }

    .iot-platform-panel__label {
        color: #f4512a;
        font-weight: 600;
        letter-spacing: .18em;
        line-height: 1.2;
        margin: 0 0 12px;
        text-transform: uppercase
    }

    .iot-platform-panel__text {
        color: #181818;
        font-weight: 400;
        line-height: 1.35;
        margin: 0
    }

    .iot-platform-panel--cloud .iot-platform-panel__text {
        color: #fff;
        font-weight: 400
    }

    .iot-phase-roadmap {
        font-family: 'Inter', sans-serif;
        margin: 64px 0 12px
    }

    .iot-phase-roadmap__grid {
        display: grid;
        gap: 34px;
        grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .iot-phase-card {
        border: 1px solid #e6e6e6;
        border-top: 5px solid #f4512a;
        border-radius: 0 0 20px 20px;
        min-height: 438px;
        padding: 46px 32px 30px
    }

    .iot-phase-card__eyebrow {
        color: #f4512a;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: .18em;
        line-height: 1.2;
        margin: 0 0 17px;
        text-transform: uppercase
    }

    .iot-phase-card__title {
        color: #161616;
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: -.04em;
        line-height: 1.15;
        margin: 0 0 16px
    }

    .iot-phase-card__subtitle {
        color: #9b9b9b;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.3;
        margin: 0;
        text-transform: uppercase
    }

    .iot-phase-card__list {
        list-style: none;
        margin: 46px 0 0;
        padding: 0
    }

    .iot-phase-card__list li {
        align-items: flex-start;
        border-bottom: 1px solid #e6e6e6;
        color: #6c6c6c;
        display: flex;
        font-size: 18px;
        font-weight: 400;
        gap: 15px;
        line-height: 1.35;
        padding: 15px 0
    }

    .iot-phase-card__list li:first-child {
        padding-top: 0
    }

    .iot-phase-card__list li:last-child {
        border-bottom: 0
    }

    .iot-phase-card__list li::before {
        background: #f4512a;
        content: '';
        display: block;
        flex: 0 0 9px;
        height: 9px;
        margin-top: 7px
    }

    .iot-phase-roadmap__note {
        color: #696969;
        font-size: 17px;
        font-style: italic;
        font-weight: 400;
        line-height: 1.4;
        margin: 28px 0 0;
        text-align: center
    }

    .iot-use-cases {font-family:'Inter',sans-serif;padding:84px 0 70px}.iot-use-cases__heading {color:#111;font-size:58px;font-weight:600;letter-spacing:-.055em;line-height:1.08;margin:0 0 78px;text-align:center}.iot-use-cases__content {min-height:520px}.iot-use-cases .carousel-item,.iot-use-cases__scenario,.iot-use-cases__description,.iot-use-cases__deliveries,.iot-use-cases__delivery h4,.iot-use-cases__delivery p {text-align:left}.iot-use-cases .carousel-item {padding:0 29px}.iot-use-cases__eyebrow {color:#f4512a;display:block;font-size:14px;font-weight:500;letter-spacing:.16em;line-height:1.3;margin-bottom:40px;text-transform:uppercase}.iot-use-cases__scenario {color:#151515;font-size:20px;font-weight:600;letter-spacing:-.045em;line-height:1.3;margin:0 0 26px}.iot-use-cases__description {color:#6a6a6a;font-size:14px;margin:0;max-width:600px}.iot-use-cases__deliveries {padding-left:0}.iot-use-cases__delivery {border-bottom:1px solid #e4e4e4;display:grid;gap:26px;grid-template-columns:54px 1fr;margin-bottom:25px;padding:0 0 25px}.iot-use-cases__delivery:last-child {border-bottom:0;margin-bottom:0}.iot-use-cases__number {color:#f4512a;font-size:29px;font-weight:600;letter-spacing:-.05em;line-height:1}.iot-use-cases__delivery h4 {color:#151515;font-size:20px;font-weight:600;letter-spacing:-.04em;line-height:1.25;margin:0 0 7px}.iot-use-cases__delivery p {color:#6a6a6a;font-size:14px;line-height:1.55;margin:0}.iot-use-cases__nav {align-items:center;display:flex;margin-top:46px}.iot-use-cases__nav button {align-items:center;background:#fff;border:1px solid #e2e2e2;border-radius:50%;color:#151515;display:flex;height:45px;justify-content:center;margin-right:18px;width:45px}.iot-use-cases__nav button:hover {background:#f4512a;border-color:#f4512a;color:#fff}.iot-use-cases__count {color:#6a6a6a;font-size:18px;margin-left:auto}
    .iot-certification-banner {align-items:center;background:#111;border-radius:20px;color:#e9e9e9;display:flex;flex-wrap:wrap;gap:28px;justify-content:center;margin:42px 0 20px;min-height:106px;padding:24px 32px}.iot-certification-banner__label {color:#f4512a;font-family:'Inter',sans-serif;font-size:14px;font-weight:700;letter-spacing:.16em;line-height:1.3;text-transform:uppercase}.iot-certification-banner__items {font-family:monospace;font-size:14px;font-weight:600;letter-spacing:.01em;line-height:1.4;word-spacing:8px}

    @media(max-width:767px) {
        .dragging-slider.owl-theme .owl-nav {
            right: 11% !important;
            top: 121vw !important;
        }

        .mbl_stamp {
            display: grid;
        }

        .mbl_stamp .c_button_22 {
            order: 2;
            margin-bottom: 0 !important;
        }

        .mbl_stamp .main-giff_div {
            margin-top: 0 !important;
            margin-bottom: 1.5rem;
        }

        .no-data-margin {
            margin-bottom: 0 !important
        }

        .baner_contaner_1 p {
            font-size: 4vw;
            font-weight: 400;
            line-height: 4.7vw;
            letter-spacing: -0.02em;
            margin-bottom: 2rem !important;
            color: #000000;
            padding-left: 5px;
            padding-right: 5px;
        }

        .baner_contaner_1 h1 {
            margin-top: 0;
            font-size: 7.9vw;
            font-weight: 400;
            line-height: 10vw;
            letter-spacing: -0.02em;
            margin-bottom: 4.5vw !important;
        }

        .text_main {
            top: 5vw !important;
        }

        .w-fit-content_2 {
            left: 49.3% !important;
            width: 342px;
            transform: translateX(-50%)
        }

        .baner_contaner_1 {
            height: fit-content !important;
            padding-top: 7rem
        }

        .brand_mt_row {
            padding-top: 1rem !important
        }

        .iot-technology-strip .service_logoo {
            padding: 0 20px
        }

        .iot-technology-strip .strip__item {
            font-size: 18px
        }

        .iot-technology-strip .strip__item i {
            height: 12px;
            margin-right: 10px;
            width: 12px
        }

        .iot-platform-panels {
            margin: 22px 0 30px
        }

        .iot-platform-panel {
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 12px;
            min-height: 0;
            padding: 20px 18px
        }

        .iot-platform-panel__icon {
            flex-basis: 52px;
            font-size: 22px;
            height: 52px
        }

        .iot-platform-panel__label,
        .iot-platform-panel__text {
            font-size: 17px
        }

        .iot-platform-panel__label {
            margin-bottom: 8px
        }

        .iot-phase-roadmap {
            margin: 40px 0 0
        }

        .iot-phase-roadmap__grid {
            gap: 18px;
            grid-template-columns: 1fr
        }

        .iot-phase-card {
            min-height: 0;
            padding: 30px 24px 22px
        }

        .iot-phase-card__eyebrow {
            font-size: 13px;
            margin-bottom: 12px
        }

        .iot-phase-card__title {
            font-size: 1rem;
            margin-bottom: 10px
        }

        .iot-phase-card__subtitle {
            font-size: 12px
        }

        .iot-phase-card__list {
            margin-top: 28px
        }

        .iot-phase-card__list li {
            font-size: 14px;
            padding: 13px 0
        }

        .iot-phase-roadmap__note {
            font-size: 15px;
            margin-top: 20px
        }

        .iot-use-cases {padding:48px 0 36px}.iot-use-cases__heading {font-size:37px;line-height:1.08;margin-bottom:42px}.iot-use-cases__content {min-height:0}.iot-use-cases .carousel-item {padding:0}.iot-use-cases__eyebrow {font-size:12px;margin-bottom:22px}.iot-use-cases__scenario {font-size:20px;margin-bottom:16px}.iot-use-cases__description {font-size:14px;margin-bottom:38px}.iot-use-cases__deliveries {padding-left:0}.iot-use-cases__delivery {gap:15px;grid-template-columns:42px 1fr;margin-bottom:18px;padding-bottom:18px}.iot-use-cases__number {font-size:20px}.iot-use-cases__delivery h4 {font-size:19px}.iot-use-cases__delivery p {font-size:16px}.iot-use-cases__nav {margin-top:30px}.iot-use-cases__nav button {height:45px;margin-right:12px;width:45px}.iot-use-cases__count {font-size:16px}
        .iot-certification-banner {align-items:flex-start;border-radius:16px;flex-direction:column;gap:10px;margin:30px 0 12px;min-height:0;padding:24px}.iot-certification-banner__label {font-size:13px}.iot-certification-banner__items {font-size:15px;word-spacing:3px}

        .service_red_box div ul li {
            margin: auto
        }

        .pt_0_mbl {
            padding-top: 0 !important;
        }

        .item-main-dev h1 {
            display: none
        }

        .owl-carousel .owl-item img {
            display: block !important
        }

        .text-main-dev {
            background-color: #ec310d;
            padding: 20px;
            height: 299px;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .item-main-dev h3,
        .item-main-dev p {
            color: #fff !important
        }

        .dragging-slider .item .item-main-dev {
            padding: 0 !important
        }

        .drag-slider-img {
            height: 300px
        }

        .white_bg_span {
            padding-right: 17vw;
        }

        .border_r_0 {
            border-radius: 0 !important;
        }

        .a_shafe {
            width: 31vw !important;
            margin: auto;
            margin-right: 0;
        }

        .expert_mvp h1 {
            font-size: 8.5vw !important;
            line-height: 44.09px !important;
            margin-bottom: 1rem !important;
        }

        .mvp_choose_ul:nth-of-type(1) {
            border: none !important;
        }

        .h_development br {
            display: none;
        }

        .border_nnone {
            border: none !important;
        }

        .c_numbring {
            left: 4.9VW !important;
        }

        .mbl_border {
            border: 1px solid #000 !important;
        }

        .img_mbl_100 {
            height: auto !important;
        }

        .mbl_border h6 {
            font-size: 6vw !important;
        }

        .black_bg_span {
            padding-right: 9vw !important;
        }
    }

    @media(max-width:991px) {
        .baner_contaner_1 {
            height: fit-content !important;
            padding-top: 7rem
        }
    }

    @media (max-width:991px) {
        .mvp_ul_black_section li h1 {
            font-size: 40px;
            line-height: 53.18px
        }

        .service_red_box div ul {
            flex-wrap: wrap;
            gap: 1rem !important
        }
    }

    @media (max-width:1200px) {
        .expert_mvp h1 {
            font-size: 44px;
            line-height: 51.09px
        }

        .mvp_ul_black_section li h1 {
            font-size: 40px;
            line-height: 53.18px
        }
    }

    @media (max-width:767px) {
        .baner_contaner_1 {
            margin-top: 0rem;
            padding-top: 2rem !important;
        }

        .dark_btn_1 {
            width: 301px;
            font-size: 18px
        }

        .slider_h22 {
            margin-bottom: 1rem !important;
        }

        .w-fit-content_2 {
            left: 50%;
            width: 301px;
            transform: translateX(-50%)
        }

        .mvp_ul_black_section {
            flex-wrap: wrap;
            column-gap: 6%
        }

        .mvp_ul_black_section li {
            width: 47%
        }

        .mvp_ul_black_section li p {
            font-size: 20px;
            margin-bottom: 10vw;
        }

        .mvp_choose_section {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .slider_h22 {
            margin-bottom: 3rem
        }

        .dragging-slider .item .item-main-dev {
            border-right: 1px solid #000
        }

        .service_red_box h2 {
            font-size: 9vw;
            font-weight: 400;
            line-height: 11vw;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .service_red_box p {
            font-size: 18px;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .mvp_choose_ul {
            display: grid !important;
            gap: 0 !important;
        }

        .mvp_ul_black_section li h1 {
            font-size: 14vw;
        }
    }
</style>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/webdevelopment.css?v=1.2.3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="clear_div"></div>

<section>
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner_1">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
                <div class="">
                    <h1 class="mb-2"><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                    <div class="mbl_stamp">
                        <div class="full_button m-auto py-2 c_button_22 mt-5 mb-4" style="width: fit-content !important;">
                            <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Get a Quote</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                            </a>
                        </div>

                        <div class="main-giff_div">
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

<!-- banner end -->
<section>
    <div class="container pt-3 mobile_section position-relative contaner_width">
        <div class="row pt-md-4">
            <div class="col-12">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                <?php endwhile;
                endif; ?>
                <h1 class="slider_h2 slider_h22 mt-md-5 mt-4 d-grid">
                    <span style="color: #ec310d;font-size: 14px;font-weight: 700;font-family: 'Poppins', sans-serif;line-height: 28px;">Our Services</span>
                    <?php $services = get_field('services');
                    if ($services) : ?>
                        <?php echo $services['title']; ?>
                    <?php endif; ?>
                </h1>
            </div>
        </div>

        <div class="row c_row_t mb-md-4">
            <div class="col-lg-2 pt-lg-4 pe-4 m-auto text-end">

            </div>
            <div class="col-lg-8 pt-lg-4 pt-1 position-relative ps-md-5 ps-3">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                <?php endwhile;
                endif; ?>
                <p>
                    <?php $services = get_field('services');
                    if ($services) : ?>
                        <?php echo $services['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
            <div class="col-lg-2 pt-lg-4 m-auto">

            </div>
        </div>

        <?php if (is_page('iot-smart-products')) : ?>
            <div class="iot-platform-panels">
                <div class="iot-platform-panel">
                    <div class="iot-platform-panel__icon"><i class="bi bi-layers"></i></div>
                    <div>
                        <p class="iot-platform-panel__label">Layer 2 — Digital Platform</p>
                        <p class="iot-platform-panel__text">Seven purpose-built panels — Admin, Enterprise, Consumer App, Reseller, Field Tech, Developer API, Support</p>
                    </div>
                </div>
                <div class="iot-platform-panel iot-platform-panel--cloud">
                    <div class="iot-platform-panel__icon"><i class="bi bi-cloud"></i></div>
                    <div>
                        <p class="iot-platform-panel__label">Cloud Spine</p>
                        <p class="iot-platform-panel__text">AWS IoT Core · MQTT · Device Provisioning · OTA · Telemetry</p>
                    </div>
                </div>
                <div class="iot-platform-panel">
                    <div class="iot-platform-panel__icon"><i class="bi bi-cpu"></i></div>
                    <div>
                        <p class="iot-platform-panel__label">Layer 1 — Smart Device Foundation</p>
                        <p class="iot-platform-panel__text">Smart controller hardware, embedded firmware, multi-protocol connectivity, Matter &amp; KNX integration</p>
                    </div>
                </div>
            </div>
            <p class="iot-phase-roadmap__note">Every layer is engineered to fit the next. Nothing handed off. Nothing translated through a third vendor.</p>
        <?php endif; ?>

        <div class="row pt-md-5 pt-4">
            <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 mb-md-4 mb-0 mb-lg-0 mb-xl-0 mb-sm-0">
                <div class="row h-100">
                    <div class="col-md-6">
                        <div class="border_gray border_round d-grid align-items-center position-relative">
                            <span class="c_numbring">01</span>
                            <div class="d-grid align-items-center">

                                <h5>
                                    <?php if (have_posts()) :
                                        while (have_posts()) :
                                            the_post(); ?>
                                    <?php endwhile;
                                    endif; ?>
                                    <?php $services_card_1 = get_field('services_card_1');
                                    if ($services_card_1) : ?>
                                        <?php echo $services_card_1['title']; ?>
                                    <?php endif; ?>
                                </h5>
                                <p>
                                    <?php $services_card_1 = get_field('services_card_1');
                                    if ($services_card_1) : ?>
                                        <?php echo $services_card_1['content']; ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 d-md-block d-none mt-md-0">
                        <div class="border_gray border_round bg-white empty-box">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 mt-4 mt-md-0">
                <div class="border_gray border_round p-0">
                    <?php $services_card_1 = get_field('services_card_1');
                    if ($services_card_1) : ?>
                        <img class="w-100 img-fluid gi-img" src="<?php echo esc_url($services_card_1['thumbnail']['url']); ?>" alt="<?php echo esc_url($services_card_1['thumbnail']['url']); ?>">
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4 mt-md-1 mt-xl-4 mt-lg-3 mt-sm-3 mt-3">
                <div class="border_gray border_round d-grid align-items-center position-relative bg-white">
                    <span class="c_numbring">02</span>
                    <h5>
                        <?php $services_card_2 = get_field('services_card_2');
                        if ($services_card_2) : ?>
                            <?php echo $services_card_2['title']; ?>
                        <?php endif; ?>
                    </h5>
                    <p>
                        <?php $services_card_2 = get_field('services_card_2');
                        if ($services_card_2) : ?>
                            <?php echo $services_card_2['content']; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative" style="background-color: #ec310d;">
                    <span class="c_numbring text-white">03</span>
                    <h5 class="text-white">
                        <?php $services_card_3 = get_field('services_card_3');
                        if ($services_card_3) : ?>
                            <?php echo $services_card_3['title']; ?>
                        <?php endif; ?>
                    </h5>
                    <p class="text-white">
                        <?php $services_card_3 = get_field('services_card_3');
                        if ($services_card_3) : ?>
                            <?php echo $services_card_3['content']; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 d-md-block d-none col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">

                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-lx-3 col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative">
                    <span class="c_numbring">04</span>
                    <h5>
                        <?php $services_card_4 = get_field('services_card_4');
                        if ($services_card_4) : ?>
                            <?php echo $services_card_4['title']; ?>
                        <?php endif; ?>
                    </h5>
                    <p>
                        <?php $services_card_4 = get_field('services_card_4');
                        if ($services_card_4) : ?>
                            <?php echo $services_card_4['content']; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lx-3 col-xl-3 col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative">
                    <span class="c_numbring">05</span>
                    <div class="d-grid align-items-center">
                        <h5>
                            <?php $services_card_5 = get_field('services_card_5');
                            if ($services_card_5) : ?>
                                <?php echo $services_card_5['title']; ?>
                            <?php endif; ?>
                        </h5>
                        <p>
                            <?php $services_card_5 = get_field('services_card_5');
                            if ($services_card_5) : ?>
                                <?php echo $services_card_5['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xl-3 d-md-block d-none col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">

                </div>
            </div>

            <div class="col-md-6 col-lx-3 col-xl-3 col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative">
                    <span class="c_numbring">06</span>
                    <div class="d-grid align-items-center">
                        <h5>
                            <?php $services_card_6 = get_field('services_card_6');
                            if ($services_card_6) : ?>
                                <?php echo $services_card_6['title']; ?>
                            <?php endif; ?>
                        </h5>
                        <p>
                            <?php $services_card_6 = get_field('services_card_6');
                            if ($services_card_6) : ?>
                                <?php echo $services_card_6['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative bg-white">
                    <span class="c_numbring">07</span>
                    <div class="d-grid align-items-center">
                        <h5>
                            <?php $services_card_7 = get_field('services_card_7');
                            if ($services_card_7) : ?>
                                <?php echo $services_card_7['title']; ?>
                            <?php endif; ?>
                        </h5>
                        <p>
                            <?php $services_card_7 = get_field('services_card_7');
                            if ($services_card_7) : ?>
                                <?php echo $services_card_7['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative bg-white">
                    <span class="c_numbring">08</span>
                    <div class="d-grid align-items-center">
                        <h5>
                            <?php $services_card_8 = get_field('services_card_8');
                            if ($services_card_8) : ?>
                                <?php echo $services_card_8['title']; ?>
                            <?php endif; ?>
                        </h5>
                        <p>
                            <?php $services_card_8 = get_field('services_card_8');
                            if ($services_card_8) : ?>
                                <?php echo $services_card_8['content']; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-md-4 mt-4">
                <?php $services_card_8 = get_field('services_card_8');
                if ($services_card_8) : ?>
                    <img class="w-100 img-fluid gi-img" src="<?php echo esc_url($services_card_8['thumbnail']['url']); ?>" alt="<?php echo esc_url($services_card_8['thumbnail']['url']); ?>">
                <?php endif; ?>
            </div>

            <div class="col-md-6 col-lg-3 col-xl-3 d-md-block d-none col-sm-12 col-12 mt-4">
                <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">

                </div>
            </div>
            <?php
            $services_card_9 = get_field('services_card_9');
            if ($services_card_9 && !empty($services_card_9['title']) && !empty($services_card_9['content'])) :
            ?>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
                    <div class="border_gray border_round d-grid align-items-center position-relative" style="background-color: #ec310d;">
                        <span class="c_numbring text-white">09</span>
                        <h5 class="text-white">
                            <?php echo $services_card_9['title']; ?>
                        </h5>
                        <p class="text-white">
                            <?php echo $services_card_9['content']; ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>



            <?php
            $services_card_10 = get_field('services_card_10');
            if ($services_card_10 && !empty($services_card_10['title']) && !empty($services_card_10['content'])) :
            ?>
                <div class="col-md-6 col-lx-3 col-xl-3 col-sm-12 col-12 mt-4">
                    <div class="border_gray border_round d-grid align-items-center position-relative" style="background-color: #ec310d;">
                        <span class="c_numbring text-white">10</span>
                        <div class="d-grid align-items-center">
                            <h5 class="text-white">
                                <?php echo $services_card_10['title']; ?>
                            </h5>
                            <p class="text-white">
                                <?php echo $services_card_10['content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 d-md-block d-none col-sm-12 col-12 mt-4">
                    <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">
                    </div>
                </div>
            <?php endif; ?>


            <?php $services_card_11 = get_field('services_card_11'); ?>
            <?php if ($services_card_11 && !empty($services_card_11['title']) && !empty($services_card_11['content'])) : ?>
                <div class="col-md-6 col-lx-3 col-xl-3 col-sm-12 col-12 mt-4">
                    <div class="border_gray border_round d-grid align-items-center position-relative">
                        <span class="c_numbring">11</span>
                        <div class="d-grid align-items-center">
                            <h5>
                                <?php echo $services_card_11['title']; ?>
                            </h5>
                            <p>
                                <?php echo $services_card_11['content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


            <?php $services_card_12 = get_field('services_card_12'); ?>
            <?php if ($services_card_12 && !empty($services_card_12['title']) && !empty($services_card_12['content'])) : ?>
                <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
                    <div class="border_gray border_round d-grid align-items-center position-relative bg-white">
                        <span class="c_numbring">12</span>
                        <div class="d-grid align-items-center">
                            <h5>
                                <?php echo $services_card_12['title']; ?>
                            </h5>
                            <p>
                                <?php echo $services_card_12['content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


        </div>
       <!-- start new section -->
       <?php if (is_page('iot-smart-products')) : ?>
           <div class="iot-certification-banner">
               <span class="iot-certification-banner__label">Certification-ready</span>
               <span class="iot-certification-banner__items">Apple HomeKit · Google Home · Amazon Alexa · Matter · KNX / BMS</span>
           </div>
       <?php endif; ?>
       <!-- end new section -->


    </div>
</section>

<section class="pt-lg-5">
    <?php if (have_rows('development_solutions')): ?>
        <div class="container dragging-slider-contaner contaner_width mt-lg-5 mt-md-0 mt-5 mb-md-5 pb-4">
            <div class="row mb-md-4">
                <div class="col-12">

                    <h1 class="slider_h2 mt-lg-5 mt-2 pb-md-4 slider_h22 d-grid">
                        <span style="color: #ec310d;font-size: 14px;font-weight: 700;font-family: 'Poppins', sans-serif;line-height: 28px;">
                            <?php $web_development_solution_title = get_field('web_development_solution_title');
                            if ($web_development_solution_title) : ?>
                                <?php echo $web_development_solution_title['sub_title']; ?>
                            <?php endif; ?>
                        </span>
                        <?php $web_development_solution_title = get_field('web_development_solution_title');
                        if ($web_development_solution_title) : ?>
                            <?php echo $web_development_solution_title['title']; ?>
                        <?php endif; ?>

                    </h1>
                </div>
            </div>


            <div class="row">

                <div class="col-md-12 pe-md-0">
                    <div class="owl-carousel dragging-slider owl-theme">
                        <?php
                        $count = 1;
                        while (have_rows('development_solutions')): the_row();
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                        ?>
                            <div class="item h-100">
                                <div class="item-main-dev p-4 h-100">
                                    <h1 class="text-center mb-4">
                                        <?php echo sprintf('%2d', $count); ?>
                                    </h1>
                                    <img class="img-fluid drag-slider-img d-none" src="https://islootech.com/wp-content/uploads/2024/10/image-3.png" alt="">
                                    <div class="text-main-dev">
                                        <h3 class="text-start mb-3">
                                            <?php echo wp_kses($title, array('br' => array())); ?>
                                        </h3>
                                        <p class="text-start mb-0">
                                            <?php echo wp_kses_post($content); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $count++;
                        endwhile;
                        ?>
                    </div>
                </div>

            </div>
        </div>

        </div>
    <?php endif; ?>
</section>
<section class="pt-4 mb-5">
    <div class="container contaner_width mt-2 pt-lg-5 pt-2 pb-5">
        <div class="card gray-card-main pt-5" style="background-color: #F1F1F1;border-radius: 18px;">
            <div class="card-body p-md-5 pt-md-4">
                <div class="text-center">
                    <a class="n_learn_more m-auto" href="">Outsourcing Models</a>
                </div>
                <h4 class="h44 text-center mb-4 w-100">

                    <?php $outsourcing_models = get_field('outsourcing_models');
                    if ($outsourcing_models) : ?>
                        <?php echo $outsourcing_models['title']; ?>
                    <?php endif; ?>
                </h4>
                <div class="row justify-content-center pb-3 pt-3 px-lg-5 px-xl-5 mx-lg-3 mx-xl-3">

                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                        <div class="card h-100" style="border-radius: 18px;">
                            <div class="card-body d-grid mb-3 px-4 ">
                                <div class="w-100 pt-3 ">
                                    <b class="size_23">
                                        Augmented Team
                                    </b>
                                     <?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Isloo Tech supplies skilled professionals to enhance your in-house team, offering flexibility for specific tasks or skill gaps.
                                        </p>
                                    <?php endif; ?>
                                    <?php if (is_page('iot-smart-products')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Add embedded, cloud, or mobile specialists to your existing engineering team to cover the layer you don't staff internally.
                                        </p>
                                    <?php endif; ?>
                                    <?php if (is_page('unifi-it-infrastructure')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Isloo Tech supplies network and AV specialists to work alongside your in-house IT team, filling skill gaps for a survey, a rollout, or a single site.
                                        </p>
                                    <?php endif; ?>
                                    <a class="n_learn_more l_more" href="<?php echo home_url('augmented-team'); ?>">LEARN MORE &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                            <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D"></path>
                                            <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2"></path>
                                        </svg> </a>

                                </div>
                                <div class="h-100 d-grid align-items-end">
                                    <img src="https://islootech.com/wp-content/uploads/2024/09/Group-1000002597-1.png" class="w-100 img_mbl_101 mx-auto w-100 px-md-3 pt-md-5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                        <div class="card h-100" style="border-radius: 18px;">
                            <div class="card-body d-grid mb-3 px-4">
                                <div class="w-100 pt-3 ">
                                    <b class="size_23">
                                        Dedicated Teams
                                    </b>
                                    <?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Isloo Tech provides a full-time team that works exclusively on your project.
                                        </p>
                                    <?php endif; ?>
                                    <?php if (is_page('iot-smart-products')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            A full team — hardware, firmware, cloud, mobile, and QA — working only on your product, month after month, with no rotation.
                                        </p>
                                    <?php endif; ?>
                                    <?php if (is_page('unifi-it-infrastructure')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            A full-time team assigned only to your estate — design, deployment, commissioning, and ongoing changes across every branch you operate.
                                        </p>
                                    <?php endif; ?>
                                    <a class="n_learn_more l_more" href="<?php echo home_url('dedicated-teams'); ?>">LEARN MORE &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                            <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D"></path>
                                            <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2"></path>
                                        </svg> </a>

                                </div>
                                <div class="h-100 d-grid align-items-end">
                                    <img src="https://islootech.com/wp-content/uploads/2024/09/Group-1000002600.png" class="w-100 img_mbl_101 mx-auto w-100 px-md-3 pt-md-5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                        <div class="card h-100" style="border-radius: 18px;">
                            <div class="card-body d-grid mb-3 px-4">
                                <div class="w-100 pt-3">
                                    <b class="size_23">
                                        Full Outsourcing
                                    </b>
                                    <?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Isloo Tech takes full control of your project, managing all aspects from start to finish.
                                        </p>
                                    <?php endif; ?>
                                    <?php if (is_page('iot-smart-products')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Hand us the entire stack. We take the product from schematic to app store and stay on to run OTA, telemetry, and support afterwards.
                                        </p>
                                    <?php endif; ?>
                                    <?php if (is_page('unifi-it-infrastructure')) : ?>
                                        <p class="mb-1 pt-1 c_phr_size">
                                            Hand us the whole build. We take responsibility for survey, supply, installation, integration, documentation, training, and the maintenance contract after.
                                        </p>
                                    <?php endif; ?>
                                    <a class="n_learn_more l_more" href="<?php echo home_url('full-outsourcing/'); ?>">LEARN MORE &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                            <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435L10.723 1.53553Z" fill="#EC310D"></path>
                                            <path d="M3.12617 2.06133C3.50094 2.4361 4.43268 2.6236 5.27909 2.71664C6.36949 2.83841 7.47705 2.78849 8.54412 2.52852C9.34418 2.33355 10.2377 2.02086 10.723 1.53553M10.723 1.53553C10.2377 2.02086 9.92451 2.9149 9.73004 3.71444C9.47058 4.78202 9.42066 5.88958 9.54143 6.97897C9.63497 7.82589 9.82348 8.75864 10.1972 9.1324M10.723 1.53553L0.82354 11.435" stroke="#EC310D" stroke-width="2"></path>
                                        </svg> </a>

                                </div>
                                <div class="h-100 d-grid align-items-end">
                                    <img src="https://islootech.com/wp-content/uploads/2024/09/Group-1000002603.png" class="w-100 img_mbl_101 mx-auto w-100 px-md-3 pt-md-5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container contaner_width red-box-container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-11">
            <div class="service_red_box mt-md-4 mt-3 px-md-5 px-2 py-5 position-relative">
                <div class="pt-4 pb-2 px-md-5">
                    <img class="img-fluid position-absolute top-0 end-0" src="https://islootech.com/wp-content/themes/Islootech/css/img/right_top_line.png" alt="" loading="lazy">
                    <?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
                        <h2 class="mb-4 text-white text-center">Not sure which outsourcing model <br> is right for you?</h2>
                    <?php endif; ?>
                    <?php if (is_page('iot-smart-products') || is_page('unifi-it-infrastructure')) : ?>
                        <h2 class="mb-4 text-white text-center">Not sure which model <br class="d-md-block d-none"> is right for you?</h2>
                    <?php endif; ?>
                    <p class="mb-4 text-white text-center">Compare our options in detail or book a call with our experts</p>
                    <ul class="d-flex justify-content-md-around w-100 list-unstyled gap-0 p-0 m-0 mt-5 px-md-4">
                        <li>

                            <div class="full_button_23 m-auto py-2 c_button_23" style="width: fit-content !important;">
                                <a href="<?php echo home_url('outsourcing-models'); ?>"><span class="ps-md-2">Compare Outsourcing Model</span>
                                    <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                                </a>
                            </div>

                        </li>
                        <li>
                            <div class="full_button_23 m-auto py-2 c_button_23" style="width: fit-content !important; background-color: white !important">
                                <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"><span class="white_bg_span ps-md-2" style="color: black !important;">Schedule a Meeting</span>
                                    <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                                </a>
                            </div>

                        </li>
                    </ul>

                    <img class="img-fluid position-absolute start-0 bottom-0" src="https://islootech.com/wp-content/themes/Islootech/css/img/left_bottom_line.png" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>
<section class="mvp_choose_section mb-5 pb-4 pb-lg-5 pb-md-4 pb mt-5">
    <div class="container contaner_width mb-md-5 pt-md-4 pt-2 position-relative">
        <div class="row mt-md-1 justify-content-end">
            <div class="col-lg-7 px-0">
                <div class="mt-lg-5 mt-2 mb-3 expert_mvp py-md-4">
                    <a class="text-decoration-none text-dark" href="#">Why Choose Us</a>
                    <h1 class="mb-1">

                        <?php $why_choose_us = get_field('why_choose_us');
                        if ($why_choose_us) : ?>
                            <?php echo $why_choose_us['title']; ?>
                        <?php endif; ?>
                    </h1>
                </div>

                <?php if (have_rows('benefits_of_hiring')): ?>
                    <?php
                    $count = 1;
                    while (have_rows('benefits_of_hiring')): the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                    ?>
                        <ul class="d-flex list-unstyled py-md-4 mvp_choose_ul m-0 p-md-0 py-4 gap-4">
                            <li class="expert_mvp">
                                <h1 class=""><?php echo sprintf('%02d', $count); ?></h1>
                            </li>
                            <li>
                                <h3>
                                    <?php echo wp_kses($title, array('br' => array())); ?>
                                </h3>
                                <p class="cmn_p mb-0"><?php echo wp_kses_post($content); ?></p>
                            </li>
                        </ul>
                    <?php
                        $count++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="mvp_black_section py-5 mt-3">
    <div class="container contaner_width py-md-5">
        <div class="row">
            <div class="my-5 expert_mvp pb-4">
                <h1 class="mb-1 text-white">We don't just promise <br> results; we deliver them.</h1>
            </div>
            <div class="col-md-12">
                <ul class="d-flex mb-5 align-items-center mvp_ul_black_section justify-content-md-between list-unstyled">
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
<section class="mt-5 pt-md-5 pt-3">
    <div class="container contaner_width pt-lg-5 pt-3">
        <div class="row justify-content-center">
            <div class="col-md-10 last_laptop_section mb-0 text-center">
                <img class="img-fluid confrence_roomimg" src="<?php echo get_template_directory_uri(); ?>/css/img/confrence_room.png" alt="">
                <?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
                    <h1 class="text-uppercase pb-4 mb-5">
                        <span class="text-white">Work with</span>
                        <br>
                        Professional engineers
                        <br>
                        at Isloo tech
                    </h1>
                <?php endif; ?>
                <?php if (is_page('iot-smart-products')) : ?>
                <h1 class="text-uppercase pb-4 mb-5">
                    <span class="text-white">Work with</span>
                    <br>
                    Professional engineers
                    <br>
                    at Isloo tech
                </h1>
                <?php endif; ?>
                <?php if (is_page('unifi-it-infrastructure')) : ?>

                <h1 class="text-uppercase pb-4 mb-5">
                    <span class="text-white">Work with</span>
                    <br>
                    certified network
                    <br>
                    at Isloo tech
                </h1>
                <?php endif; ?>

                
                <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
                    <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Get a Quote</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="" loading="lazy">
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="mt-md-5">
    <div class="container pt-1 contaner_width">
        <div class="row justify-content-center pt-lg-5 mt-lg-5 pt-2 mt-md-3">
            <div class="col-md-12 col-lg-3 col-xl-3 col-sm-12 col-12 pe-lg-0 pe-xl-0 ps-md-0 ps-lg-1 ps-xl-1">
                <img src="https://islootech.com/wp-content/uploads/2024/09/image-3.png" class="w-100 img-fluid h-100 round-3 d-md-block d-none" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/css/img/mbl_process.png" class="w-100 img-fluid mb-3 round-3 d-block d-md-none mt-5 pt-4" alt="">
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                <div class="row h-100 border_top border_bottom c_border_left_md border_nnone">
                    <div class="col-12 pb-5 pt-4 c_p_l">
                        <div class="d-grid align-items-end h-100">

                            <h2 class="mb-0 h_development">
                                <a class="process_a" href="#">Process Flow</a>
                                <br>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['heading']; ?>
                                <?php endif; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 py-5 border_top c_p_l border_nnone pt_0_mbl">
                        <div class="row px-md-0 px-3">
                            <div class="col-md-6 mbl_border">
                                <span class="c_numbring d-md-none d-block position-relative" style="left: -0.1VW !important;padding-bottom: 8vw;">01</span>
                                <h6>
                                    <?php $proess = get_field('proess');
                                    if ($proess) : ?>
                                        <?php echo $proess['title_1']; ?>
                                    <?php endif; ?>
                                </h6>
                                <p class="font_12">
                                    <?php $proess = get_field('proess');
                                    if ($proess) : ?>
                                        <?php echo $proess['content_1']; ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6 position-relative d-md-block d-none">
                                <img src="https://islootech.com/wp-content/uploads/2024/09/image-4.png" class="w-100 img-fluid ai_img_4 round-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 ps-md-0">
                <div class="row h-100">
                    <div class="col-md-12 pb-5 pb-md-0">
                        <div class="mbl_border border_gray border_b_none d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4"> <span class="c_numbring">02</span>
                            <h6>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['title_2']; ?>
                                <?php endif; ?>
                            </h6>
                            <p>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['content_2']; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 pb-5 pb-md-0">
                        <div class="mbl_border border_gray border_b_none d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4"> <span class="c_numbring">03</span>
                            <h6>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['title_3']; ?>
                                <?php endif; ?>
                            </h6>
                            <p>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['content_3']; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 pb-5 pb-md-0">
                        <div class="mbl_border border_gray border_b_none d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4"> <span class="c_numbring">04</span>
                            <h6>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['title_4']; ?>
                                <?php endif; ?>
                            </h6>
                            <p>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['content_4']; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 pb-5 pb-md-0">
                        <div class="mbl_border border_gray d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4"> <span class="c_numbring">05</span>
                            <h6>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['title_5']; ?>
                                <?php endif; ?>
                            </h6>
                            <p>
                                <?php $proess = get_field('proess');
                                if ($proess) : ?>
                                    <?php echo $proess['content_5']; ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 ps-md-0">
                <div class="row h-100">

                    <div class="col-md-12 pb-5 pb-md-0 <?php echo (empty($proess['title_6']) && empty($proess['content_6'])) ? 'no-data-margin' : ''; ?>">
                        <?php $proess = get_field('proess');
                        if (!empty($proess['title_6']) || !empty($proess['content_6'])): ?>
                            <div class="mbl_border border_gray d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4">
                                <span class="c_numbring">06</span>
                                <h6>
                                    <?php if (!empty($proess['title_6'])): ?>
                                        <?php echo esc_html($proess['title_6']); ?>
                                    <?php endif; ?>
                                </h6>
                                <p>
                                    <?php if (!empty($proess['content_6'])): ?>
                                        <?php echo esc_html($proess['content_6']); ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- start Phase -->
        <?php if (is_page('iot-smart-products')) : ?>
            <div class="iot-phase-roadmap">
                <div class="iot-phase-roadmap__grid">
                    <article class="iot-phase-card">
                        <p class="iot-phase-card__eyebrow">Phase A</p>
                        <h3 class="iot-phase-card__title">Foundation</h3>
                        <p class="iot-phase-card__subtitle">Goes live first</p>
                        <ul class="iot-phase-card__list">
                            <li>Smart device foundation (chip + firmware + cloud)</li>
                            <li>Internal admin panel for fleet control</li>
                            <li>Branded consumer app (iOS + Android)</li>
                            <li>Enterprise panel for B2B clients</li>
                        </ul>
                    </article>
                    <article class="iot-phase-card">
                        <p class="iot-phase-card__eyebrow">Phase B</p>
                        <h3 class="iot-phase-card__title">Scale</h3>
                        <p class="iot-phase-card__subtitle">Goes live as ops grow</p>
                        <ul class="iot-phase-card__list">
                            <li>Reseller &amp; distributor panel</li>
                            <li>Field technician mobile app</li>
                            <li>Customer self-service support portal</li>
                            <li>Spare parts &amp; subscriptions store</li>
                        </ul>
                    </article>
                    <article class="iot-phase-card">
                        <p class="iot-phase-card__eyebrow">Phase C</p>
                        <h3 class="iot-phase-card__title">Platform</h3>
                        <p class="iot-phase-card__subtitle">Goes live as ecosystem grows</p>
                        <ul class="iot-phase-card__list">
                            <li>Developer &amp; API portal</li>
                            <li>Webhooks &amp; sandbox environments</li>
                            <li>Third-party integrations layer</li>
                            <li>BMS / KNX integration toolkit</li>
                        </ul>
                    </article>
                </div>
                <p class="iot-phase-roadmap__note">Each phase is independently valuable and independently launchable. The order shifts with your priorities.</p>
            </div>
        <?php endif; ?>
        <!-- end Phase -->
    </div>
</section>
<?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
    <section class="mt-5 pt-md-5">
        <div class="container contaner_width pt-lg-5 pt-3 pb-5">
            <div class="card gray-card pt-5 border_r_0" style="background-color: #F1F1F1;border-radius: 18px;">
                <div class="card-body text-center p-md-5">
                    <a class="n_learn_more" href="">Pricing Models</a>
                    <h4 class="h44 text-center w-100 mb-4">Your budget, your way. Choose the pricing model that fits</h4>
                    <div class="row justify-content-center pt-3 px-lg-4 px-xl-4 mx-lg-3 mx-xl-3">

                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    <div class="h-100 text-end a_shafe">
                                        <img src="https://islootech.com/wp-content/uploads/2024/12/tringle1.png" class="w-100 img_mbl_100 d-md-block d-none" alt="<?php echo esc_attr($title); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle7885.png" class="w-100 img_mbl_100 d-md-none d-block" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="w-100 pt-5 text-start flex_dev d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <b class="size_23 d-inline-block mb-2">Fixed Price</b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                Perfect for clearly defined projects, this model offers a set price for the entire project, ensuring predictable costs with no surprises.
                                            </p>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    <div class="h-100 text-end a_shafe">
                                        <img src="https://islootech.com/wp-content/uploads/2024/12/tringle1.png" class="w-100 img_mbl_100 d-md-block d-none" alt="<?php echo esc_attr($title); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle7885.png" class="w-100 img_mbl_100 d-md-none d-block" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="w-100 pt-5 text-start flex_dev d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <b class="size_23 d-inline-block mb-2">Time and Material</b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                Ideal for evolving projects, you only pay for the time and resources used, giving you the flexibility to adjust scope as needed.
                                            </p>
                                        </li>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    <div class="h-100 text-end a_shafe">
                                        <img src="https://islootech.com/wp-content/uploads/2024/12/tringle1.png" class="w-100 img_mbl_100 d-md-block d-none" alt="<?php echo esc_attr($title); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle7885.png" class="w-100 img_mbl_100 d-md-none d-block" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="w-100 pt-5 text-start flex_dev d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <b class="size_23 d-inline-block mb-2">Retainer-Based</b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                For clients who need continuous support or access to our expert services, our retainer model provides a recurring, predictable payment structure, ensuring that we’re always ready to deliver when you need us.
                                            </p>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if (is_page('unifi-it-infrastructure')) : ?>
    <section class="mt-5 pt-md-5">
        <div class="container contaner_width pt-lg-5 pt-3 pb-5">
            <div class="card gray-card pt-5 border_r_0" style="background-color: #F1F1F1;border-radius: 18px;">
                <div class="card-body text-center p-md-5">
                    <a class="n_learn_more" href="">Pricing Models</a>
                    <h4 class="h44 text-center w-100 mb-4">Your budget, your way. Choose the pricing model that fits</h4>
                    <div class="row justify-content-center pt-3 px-lg-4 px-xl-4 mx-lg-3 mx-xl-3">

                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    <div class="h-100 text-end a_shafe">
                                        <img src="https://islootech.com/wp-content/uploads/2024/12/tringle1.png" class="w-100 img_mbl_100 d-md-block d-none" alt="<?php echo esc_attr($title); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle7885.png" class="w-100 img_mbl_100 d-md-none d-block" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="w-100 pt-5 text-start flex_dev d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <b class="size_23 d-inline-block mb-2">Fixed Price</b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                Best for a defined site or a fixed number of locations. Survey, design, hardware, and installation are quoted as one figure with no surprises.
                                            </p>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    <div class="h-100 text-end a_shafe">
                                        <img src="https://islootech.com/wp-content/uploads/2024/12/tringle1.png" class="w-100 img_mbl_100 d-md-block d-none" alt="<?php echo esc_attr($title); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle7885.png" class="w-100 img_mbl_100 d-md-none d-block" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="w-100 pt-5 text-start flex_dev d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <b class="size_23 d-inline-block mb-2">Time and Material</b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                Suited to phased rollouts and estates that keep growing. You pay for the time and hardware actually used and can adjust scope between phases.
                                            </p>
                                        </li>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    <div class="h-100 text-end a_shafe">
                                        <img src="https://islootech.com/wp-content/uploads/2024/12/tringle1.png" class="w-100 img_mbl_100 d-md-block d-none" alt="<?php echo esc_attr($title); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/css/img/Rectangle7885.png" class="w-100 img_mbl_100 d-md-none d-block" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="w-100 pt-5 text-start flex_dev d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <b class="size_23 d-inline-block mb-2">Retainer / AMC</b>
                                            <p class="mb-1 pt-1 c_phr_size">
                                                An Annual Maintenance Contract with agreed SLAs — monitoring, firmware updates, preventive visits, and on-site response for a predictable monthly cost.
                                            </p>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if (is_page('iot-smart-products')) : ?>
    <style>
        .pricing_ul li {
            font-size: 12.5px;
            color: var(--muted);
            padding: 8px 0 8px 16px;
            position: relative;
        }

        .pricing_ul li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 14px;
            width: 6px;
            height: 6px;
            background: #ec310d;
            border-radius: 1px;
        }

        .tag {
            display: inline-block;
            font-size: 10.5px;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #ec310d;
            border: 1px solid #ec310d;
            border-radius: 999px;
            padding: 4px 11px;
            margin-bottom: 14px;
        }
    </style>
    <section class="mt-5 pt-md-5">
        <div class="container contaner_width pt-lg-5 pt-3 pb-5">
            <div class="card gray-card pt-5 border_r_0" style="background-color: #F1F1F1;border-radius: 18px;">
                <div class="card-body text-center p-md-5">
                    <a class="n_learn_more" href="">Pricing Models</a>
                    <h4 class="h44 text-center w-100 mb-4">Three ways to work with us. The best one is whichever fits how you ship.</h4>
                    <div class="row justify-content-center pt-3 px-lg-4 px-xl-4 mx-lg-3 mx-xl-3">

                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    
                                    <div class="w-100 pt-1 text-start d-flex flex-column justify-content-between">
                                        <li class="d-block">
                                            <span class="tag">Recommended</span>
                                            <br>
                                            <b class="size_23 d-inline-block mb-2">Monthly Retainer</b>
                                            <p class="mb-1 pt-1 c_phr_size">A dedicated Isloo Tech team working exclusively on your product, month after month. </p>
                                        </li>
                                        <ul class="pricing_ul mt-1" style="list-style: none;padding: 0;margin: 18px 0 0;">
                                            <li>Same engineers every month — no rotation</li>
                                            <li>Reprioritise scope monthly against business reality</li>
                                            <li>Frontend, backend, mobile, embedded, and QA included</li>
                                            <li>Bug fixes and refinements at no extra cost</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    
                                    <div class="w-100 pt-1 text-start d-flex flex-column justify-content-start">
                                        <li class="d-block">
                                            <span style="color: #9a9a9a;border: 0;padding: 0;margin-bottom: 10px;display: block;">Project</span>
                                            
                                            <b class="size_23 d-inline-block mb-2">Fixed-Scope Build</b>
                                            <p class="mb-1 pt-1 c_phr_size">A defined deliverable with clear scope, milestones, and acceptance criteria.</p>
                                        </li>
                                        <ul class="pricing_ul mt-1" style="list-style: none;padding: 0;margin: 18px 0 0;">
                                            <li>Suited to tightly-defined hardware or single-panel builds</li>
                                            <li>Milestone-based payments</li>
                                            <li>Fixed timeline and fixed deliverables</li>
                                            <li>Optional extension into a retainer after delivery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 pb-md-0 pb-3">
                            <div class="card h-100" style="border-radius: 18px;">
                                <div class="card-body d-grid mb-md-3 mb-4 mt-md-0 mt-4 px-4">
                                    
                                    <div class="w-100 pt-1 text-start d-flex flex-column justify-content-start">
                                        <li class="d-block">
                                            <span style="color: #9a9a9a;border: 0;padding: 0;margin-bottom: 10px;display: block;">Hybrid</span>
                                            
                                            <b class="size_23 d-inline-block mb-2">Phase-Plus-Retainer</b>
                                            <p class="mb-1 pt-1 c_phr_size">Start with a fixed-scope foundation, then move into a long-term retainer.</p>
                                        </li>
                                        <ul class="pricing_ul mt-1" style="list-style: none;padding: 0;margin: 18px 0 0;">
                                            <li>De-risks the first launch with a defined deliverable</li>
                                            <li>Smooth transition into ongoing development</li>
                                            <li>Predictability and continuity together</li>
                                            <li>Where most large engagements settle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<div class="container contaner_width pb-lg-5 pb-3 red-box-container_1">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <div class="service_red_box mt-md-4 mt-3 px-md-5 px-2 py-5 position-relative">
                <div class="pt-4 pb-2 px-md-5">
                    <img class="img-fluid position-absolute top-0 end-0" src="https://islootech.com/wp-content/themes/Islootech/css/img/right_top_line.png" alt="" loading="lazy">
                    <?php if (is_page('iot-smart-products')) : ?>
                        <h2 class="mb-4 text-white text-center">Still wondering which model<br> fits your product?</h2>
                    <?php endif; ?>
                    <?php if (is_page('unifi-it-infrastructure')) : ?>
                        <h2 class="mb-4 text-white text-center">Still wondering which pricing<br> model fits your rollout?</h2>
                    <?php endif; ?>
                    <?php if (!is_page('iot-smart-products') && !is_page('unifi-it-infrastructure')) : ?>
                        <h2 class="mb-4 text-white text-center">Still wondering which model<br> fits your product?</h2>
                    <?php endif; ?>
                    

                    <p class="mb-4 text-white text-center">Compare our options in detail or book a free discovery session with our experts</p>
                    <ul class="d-flex justify-content-md-around w-100 list-unstyled gap-0 p-0 m-0 mt-5 px-md-5">
                        <li>

                            <div class="full_button_23 m-auto py-2 c_button_23" style="width: fit-content !important;">
                                <a href="<?php echo home_url('pricing-models'); ?>"><span class="black_bg_span ps-md-2">Compare Pricing Models</span>
                                    <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                                </a>
                            </div>

                        </li>
                        <li>
                            <div class="full_button_23 m-auto py-2 c_button_23" style="width: fit-content !important; background-color: white !important">
                                <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"><span class="white_bg_span ps-md-2" style="color: black !important;">Schedule a Meeting</span>
                                    <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                                </a>
                            </div>

                        </li>
                    </ul>
                    <img class="img-fluid position-absolute start-0 bottom-0" src="https://sallahu52.sg-host.com/wp-content/themes/Islootech/css/img/left_bottom_line.png" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- slider section -->
 <?php if (!is_page('iot-smart-products')) : ?>
<?php echo do_shortcode('[portfolio_slider]'); ?>
<?php endif; ?>

<!-- slider section -->
<?php if (is_page('iot-smart-products')) : ?>
    <section class="iot-use-cases" style="background-color: #F1F1F1">
        <div class="container contaner_width">
            <h2 class="iot-use-cases__heading">Three kinds of company need this engagement</h2>
            <div id="iotUseCases" class="carousel" data-bs-interval="false" style="background: none !important;">
                <div class="carousel-inner iot-use-cases__content">
                    <div class="carousel-item">
                        <div class="row g-lg-5">
                            <div class="col-lg-5"><span class="iot-use-cases__eyebrow">Use Case 01 — Hardware Manufacturer</span><h3 class="iot-use-cases__scenario">Their product works. The market wants it connected.</h3><p class="iot-use-cases__description">A 20-year-old appliance brand has a flagship product distributors love. Retailers are now asking for HomeKit and Alexa compatibility on the box. Their internal team is mechanical and electrical, not embedded software — building this in-house means hiring three teams and waiting two years.</p></div>
                            <div class="col-lg-7"><div class="iot-use-cases__deliveries"><span class="iot-use-cases__eyebrow">What We Deliver</span><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">01</span><div><h4>Smart upgrade blueprint</h4><p>We assess existing electronics, define the controller upgrade path, and freeze scope in three weeks.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">02</span><div><h4>Smart controller + firmware</h4><p>ESP32-C6-based controller with RTOS firmware, safety FSM, OTA, and Matter integration.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">03</span><div><h4>AWS cloud + certification prep</h4><p>Production-grade backend plus technical preparation for HomeKit, Google Home, and Alexa.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">04</span><div><h4>Branded consumer app + admin panel</h4><p>Their own iOS and Android app and an internal command centre — full ecosystem ownership.</p></div></div></div></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-lg-5">
                            <div class="col-lg-5"><span class="iot-use-cases__eyebrow">Use Case 02 — IoT Startup</span><h3 class="iot-use-cases__scenario">They have a product idea. They don't have an army.</h3><p class="iot-use-cases__description">A founder has identified a gap in the market for a connected product that doesn't yet exist, and has raised a seed round. They could spend 18 months hiring a hardware team, a firmware team, a cloud architect, and a software team — or compress the whole stack into one engagement and ship in nine.</p></div>
                            <div class="col-lg-7"><div class="iot-use-cases__deliveries"><span class="iot-use-cases__eyebrow">What We Deliver</span><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">01</span><div><h4>End-to-end MVP architecture</h4><p>Hardware, firmware, cloud, and app architected as one system from day one — no integration debt.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">02</span><div><h4>Working build in six weeks</h4><p>ESP32 devkit, sensors, actuators, and live cloud data visible in Apple, Google, or Alexa.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">03</span><div><h4>Production hardware + branded software</h4><p>PCB design, BOM, manufacturing-ready files, a branded consumer app, and an admin panel.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">04</span><div><h4>Investor-ready metrics</h4><p>Real users, real telemetry, real dashboards — what the next round will ask to see.</p></div></div></div></div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row g-lg-5">
                            <div class="col-lg-5"><span class="iot-use-cases__eyebrow">Use Case 03 — Enterprise &amp; B2B</span><h3 class="iot-use-cases__scenario">One fleet. Many sites. Every floor visible at a glance.</h3><p class="iot-use-cases__description">A hotel chain or hospital network runs hundreds of devices across dozens of locations. They need to know which units are offline tonight, which filters are due next week, and which floors have poor air quality — without phoning every site manager. Their IT team treats KNX integration into the existing BMS as non-negotiable.</p></div>
                            <div class="col-lg-7"><div class="iot-use-cases__deliveries"><span class="iot-use-cases__eyebrow">What We Deliver</span><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">01</span><div><h4>Site → building → floor → room hierarchy</h4><p>Multi-site fleet structure with floor-plan pinning and per-room device views.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">02</span><div><h4>KNX / BMS integration layer</h4><p>Device control through existing wall panels and ETS configuration — facility-grade, not consumer-grade.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">03</span><div><h4>Maintenance &amp; consumables management</h4><p>Preventive task scheduling, automated reorder alerts, and monthly reports generated on their own.</p></div></div><div class="iot-use-cases__delivery"><span class="iot-use-cases__number">04</span><div><h4>Executive analytics + ESG reporting</h4><p>Energy splits, air-quality heatmaps, and carbon-avoidance metrics, board-ready out of the box.</p></div></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="iot-use-cases__nav"><button type="button" data-bs-target="#iotUseCases" data-bs-slide="prev" aria-label="Previous use case"><i class="bi bi-arrow-left"></i></button><button type="button" data-bs-target="#iotUseCases" data-bs-slide="next" aria-label="Next use case"><i class="bi bi-arrow-right"></i></button><span class="iot-use-cases__count"><span id="iotUseCasesCurrent">03</span> / 03</span></div>
            </div>
        </div>
    </section>
<?php endif; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var useCases = document.getElementById('iotUseCases');
    var current = document.getElementById('iotUseCasesCurrent');
    if (!useCases || !current) return;

    useCases.addEventListener('slid.bs.carousel', function (event) {
        current.textContent = String(event.to + 1).padStart(2, '0');
    });
});
</script>

<div class="container contaner_width mb-3 px-4 pt-lg-5 pt-3">
    <h1 class="mb-4 slider_h1 text-start mt-md-5">
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
<!--<div class="container contaner_width pt-md-5">
    <h1 class="mb-0 slider_h1 text-center mt-5">
        Want to Achive Your Goals?<br> Book Your Call Now!
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12">
            <div class="calendly-inline-widget position-relative" data-url="https://calendly.com/asmat2991/15min" style="height: 700px">
                <div class="bg_white"></div>
            </div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        </div>
    </div>
</div>-->
<!-- slider section -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
    $(document).ready(function() {
        // dragging
        $('.dragging-slider').owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            dots: false,
            repeat: true,
            lazyLoad: true,
            touchDrag: false,
            mouseDrag: false,
            responsive: {
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4.5
                }
            }
        });

        const activeItems = $(".dragging-slider .owl-item.active");
        const secondActiveItem = activeItems.eq(1);

        if (secondActiveItem.length) {
            secondActiveItem.addClass("item_2");

            const mainDevItem = secondActiveItem.find(".item-main-dev");;
            mainDevItem.removeClass("p-4");

            const img = secondActiveItem.find("img");
            img.removeClass("d-none");

            const mainDevText = secondActiveItem.find(".text-main-dev");
            mainDevText.addClass("red_bg");

            const h1 = secondActiveItem.find("h1");
            h1.addClass("d-none");
        }

        $(".dragging-slider").on("changed.owl.carousel", function(e) {
            $(".dragging-slider .owl-item").each(function() {
                const h1 = $(this).find("h1");
                h1.removeClass("d-none");

                const mainDevItem_1 = $(this).find(".item-main-dev");
                mainDevItem_1.addClass("p-4");

                const img = $(this).find("img");
                img.addClass("d-none");

                const mainDevText = $(this).find(".text-main-dev");
                mainDevText.removeClass("red_bg");
            });

            const activeItems = $(".dragging-slider .owl-item.active");
            const secondActiveItem = activeItems.eq(2);

            if (secondActiveItem.length) {
                secondActiveItem.addClass("item_2");

                const mainDevItem = secondActiveItem.find(".item-main-dev");
                mainDevItem.removeClass("p-4");

                const img = secondActiveItem.find("img");
                img.removeClass("d-none");

                const mainDevText = secondActiveItem.find(".text-main-dev");
                mainDevText.addClass("red_bg");

                const h1 = secondActiveItem.find("h1");
                h1.addClass("d-none");
            }
        });
    });
</script>

<?php get_footer(); ?>
