<?php /* Template Name: DevOps Template */ ?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>

<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/devops.css?v=1.2.4">
<div class="clear_div"></div>
<style>
   .iot-technology-strip{justify-content:flex-start!important}.iot-technology-strip .iot-technology-track{display:flex;flex:0 0 max-content;will-change:transform}.iot-technology-strip .service_logoo{flex:0 0 auto!important;width:auto!important;padding:0 36px}.iot-technology-strip .strip__item{align-items:center;color:#252525;display:inline-flex;font-size:18px;font-weight:600;line-height:1.2;white-space:nowrap}.iot-technology-strip .strip__item i{background:#f4512a;border-radius:4px;display:inline-block;height:14px;margin-right:18px;width:14px}.iot-technology-strip .iot-technology-track.is-scrolling-left{animation:iot-technology-scroll-left 40s linear infinite}.iot-technology-strip .iot-technology-track.is-scrolling-right{animation:iot-technology-scroll-right 40s linear infinite}@keyframes iot-technology-scroll-left{from{transform:translateX(0)}to{transform:translateX(-50%)}}@keyframes iot-technology-scroll-right{from{transform:translateX(-50%)}to{transform:translateX(0)}}
   .w-fit-content,.w-fit-content_2,.w-fit-content_3{transform:translateX(-50%)}.brand_mt_row{margin-top:3rem}.d_heading{position:absolute;top:20%;left:4%;color:#fff;font-size:2.5rem}.numbering{color:#ec310d;width:fit-content!important;padding-right:.6vw}.benefites-li{width:100%!important}.benefites-li h3{font-size:1.1vw}.h_size{font-size:2.3vw}.nav-tabs .nav-link.active{background:#ec310d!important;color:#fff!important;border:1px solid #ec310d}.w-fit-content{left:50%;width:330px}.w-fit-content_2{left:50%;width:380px}.expert_mvp a{color:#ec310d!important;font-size:14px;font-weight:700;line-height:21.84px;letter-spacing:-.02em}.w-fit-content_3{left:50%;width:300px}.w-fit-content_5{left:50%;transform:translateX(-60%);width:334px}.dark_btn{width:330px;background:#000;font-size:24px;font-weight:600;line-height:36px;letter-spacing:-.02em}.dark_btn_1,.dark_btn_2{font-size:20px;line-height:36px;letter-spacing:-.02em;font-weight:600}.dark_btn_1{width:380px;background:#000}.dark_btn_2{width:300px;background:#fff}.arrow_giff_1{width:40px;top:23%;right:3%}.arrow_giff_2,.arrow_giff_3{width:40px;top:50%;right:3%;transform:translateY(-50%)}.main-giff_div{right:1%;bottom:35%!important}.text_main{width:fit-content;margin-left:auto;top:-13%;right:0}.circle_giff_2{width:102px;height:102px;margin-left:auto}.circle_giff{width:142px;height:142px;margin-left:auto}.services_section .row:first-child p{font-size:16px;line-height:24.96px;letter-spacing:-.02em;color:#000;margin-bottom:4rem}.additional_services .card,.mvp_black_section .card,.services_section .card{border-radius:20px;border:1px solid #e5e5e5!important}.additional_services .card h5,.mvp_black_section .card h5,.mvp_choose_ul li:first-child h3,.mvp_choose_ul li:nth-child(3) h3,.services_section .card h5{font-size:21px;font-weight:600;line-height:25.41px;color:#3e3e3e}.expert_mvp h1{font-weight:400}.additional_services .card p,.devops_gray_section .row .card p,.mvp_black_section .card p,.services_section .card p{font-size:14px;font-weight:400;line-height:16.94px;color:#393939}.mvp_black_section .card h6,.services_section .card h6{font-size:14px;font-weight:700;line-height:16.94px;color:#393939}.devops_gray_section .contaner_width p,.expert_mvp p{font-weight:400;line-height:24.96px;letter-spacing:-.02em;font-size:16px}.btn:focus{box-shadow:0 0}.services_section .card button{width:fit-content!important;color:#ec310d;margin-bottom:.5rem;padding:3px 1px;background:linear-gradient(to left,#ec310d 4.59%,#d1d1d1 75%);transition:.5s;border-radius:20px}.services_section .card button span{padding:3px 15px!important;background-color:#fff;border-radius:20px}.services_section .card button:hover span{background:linear-gradient(120deg,#f5775e 20%,#f75433 25%,#d1d1d1 50%,transparent 55%,transparent);background-size:250% 100%;position:relative;z-index:0;background-position:2% 0;color:#fff}.red_box_section .row,.service_red_box{background-color:#ec310d;border-radius:20px}.devops_gray_section,.mvp_slider_section{background-color:#eaeaea}.devops_gray_section .expert_mvp,.expert_mvp h1{width:fit-content}.devops_gray_section .row .col-lg-2:first-child .card .card-body{background-color:#fdbbc9!important;padding:3px;height:100px}.devops_gray_section .row .col-lg-2:nth-child(2) .card .card-body{background-color:#5f7bc2!important;padding:3px;height:130px}.devops_gray_section .row .col-lg-2:nth-child(3) .card .card-body{background-color:#a1ca54!important;padding:3px;height:220px}.devops_gray_section .row .col-lg-2:nth-child(4) .card .card-body{background-color:#ffc744!important;padding:3px;height:270px}.transparent_bg_img{width:100%;height:388px}.hand_combine-pic,.software-house-pic{height:550px;width:100%;object-fit:cover;border-top-left-radius:20px;border-bottom-right-radius:20px}.red_box_section .contaner_width .row .col-md-4:first-child h1{font-size:54px;font-weight:500;line-height:72.45px}.software-house-pic{border-top-right-radius:20px}.hand_combine-pic{border-bottom-left-radius:20px}.expert_mvp p{color:#000}.devops_gray_section .contaner_width p{width:fit-content}.devops_gray_section .row .card span{font-size:16px;font-weight:600;line-height:19.36px;color:#ec310d;margin-bottom:1rem}.devops_gray_section .row .card h5{font-size:20px;font-weight:600;line-height:25.41px;color:#393939}.mvp_choose_ul li:nth-child(2) h3{font-weight:700;line-height:25.41px;color:#393939}.mvp_choose_ul li:nth-child(2) p{font-size:16px;font-weight:400;line-height:19.36px}.mvp_choose_ul li:first-child{width:23%}.mvp_choose_ul li:nth-child(2){width:45%}.mvp_choose_ul{border-top:1px solid #e5e5e5;border-bottom:1px solid #e5e5e5;padding:2.2rem 0!important}.mvp_black_section{background:#000}.mvp_black_section .col-lg:first-child .card{background-color:#d3f4b6}.mvp_black_section .col-lg:nth-child(2) .card{background-color:#e9e3ff}.mvp_black_section .col-lg:nth-child(3) .card{background-color:#e1ecff}.mvp_black_section .col-lg:nth-child(4) .card{background-color:#f0e0c3}.mvp_black_section .col-lg:nth-child(5) .card{background-color:#ffdae1}.mvp_black_section .col-lg:nth-child(2) .card button{background-color:#b3a7d1}.mvp_black_section .col-lg:nth-child(3) .card button{background-color:#9eb5df}.mvp_black_section .col-lg:nth-child(4) .card button{background-color:#d2b788}.mvp_black_section .col-lg:nth-child(5) .card button{background-color:#ffb1c0}.service_red_box div ul li{position:relative;z-index:3455665}.service_red_box h2{font-size:40px;font-weight:500;line-height:48.41px;position:relative;z-index:3234455}.service_red_box p{font-size:20px;font-weight:400;line-height:24.2px;position:relative;z-index:4554344}.mvp_black_section .col-lg .card button{font-size:14px;font-weight:700;letter-spacing:-.01em;color:#fff;margin-bottom:.5rem;width:fit-content;padding:0 15px!important}.rotate{animation:.5s forwards rotate;transition:.5s}.rotate_1{rotate:(100%);animation:.5s forwards rotate_1;transition:.5s}.n_font{transition:transform .3s ease-out}

    @media (max-width: 767px) {

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

        .baner_contaner{
         margin-top: 0rem !important;
     }
    }
    @media (max-width: 1400px) {
        .contaner_width {
            max-width: 100%;
            width: 90%;
        }

        .services_section .card button {
            padding: 1px 1px !important;
        }

        .main-giff_div {
            bottom: 32% !important;
        }

        .baner_contaner {
            height: fit-content !important;
            padding-top: 2rem !important;
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

        .mvp_ul_black_section li h1 {
            font-size: 40px;
            line-height: 53.18px;
        }

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

        .devops_gray_section .contaner_width div:has(.expert_mvp) {
            position: unset !important;
        }

        .mvp_choose_ul li:nth-child(2) {
            width: 80%;
        }

        .devops_gray_section .row .col-lg-2:first-child .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(2) .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(3) .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(4) .card .card-body {
            height: 190px;
        }

        .devops_gray_section .row .col-lg-2:first-child {
            margin-bottom: 3rem;
        }

        .devops_gray_section .row .col-lg-2:nth-child(2) {
            margin-bottom: 3rem;
        }

        /* Process Flow */
    }

    @media (max-width: 767px) {
        .devops_gray_section .contaner_width p {
            font-size: 4.5vw;
            font-weight: 400;
            line-height: 5.8vw;
            color: black;
        }

        .border_top_none {
            border-top: none !important;
        }

        .mvp_choose_ul li:nth-child(2) h3 {
            font-size: 5.5vw;
            font-weight: 700;
            margin-bottom: 4vw;
        }

        .devops_gray_section .row .card span {
            font-size: 5vw;

        }

        .circle_giff {
            width: 29vw;
            height: 29vw;
            margin-left: auto;
            padding: 0px;
        }

        .mvp_choose_ul li:nth-child(2) p {
            display: grid;
        }



        .software_hand_pic_section h1 {
            text-align: left !important;
            padding-left: 0 !important;
        }

        .software_hand_pic_section .expert_mvp {
            text-align: left !important;
        }

        .full_button_23 span {
            padding-left: 1vw !important;
        }

        .expert_mvp p {
            font-size: 4.5vw;
            line-height: 5.8vw;
            color: #000000;
        }

        .software_hand_pic_section .row .col-lg-6:first-child {
            padding-left: 5vw;
            padding-right: 5vw;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(3) {
            padding-left: 5vw;
            padding-right: 5vw;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(4) {
            padding-left: 5vw;
            padding-right: 5vw;
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

        .devops_gray_section .row .card p {
            text-align: left !important;
        }

        .devops_gray_section .row .card h5 {
            font-size: 6.5vw;
            padding-right: 13vw;
            margin-top: 3vw;
        }

        .additional_services .expert_mvp {
            text-align: left !important;
            margin-top: 6vw !important;
            margin-bottom: 6vw !important;
            padding-left: 0vw !important;
        }

        .baner_contaner_1 {
            height: fit-content !important;
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
            margin-bottom: 3rem !important;
            color: #000000;
            padding-left: 5px;
            padding-right: 5px;
        }

        .services_section .card h5,
        .mvp_black_section .card h5,
        .additional_services .card h5 {
            font-size: 6vw;
        }

        .services_section .card,
        .mvp_black_section .card,
        .additional_services .card {
            padding: 11vw 9vw !important;
        }

        .services_section .card p,
        .mvp_black_section .card p,
        .additional_services .card p {
            font-size: 4vw;
        }

        .services_section .card button {
            padding: 3px 1px !important;
        }

        .expert_mvp a {
            color: #EC310D !important;
            font-size: 4vw;
            font-weight: 700;
            line-height: 10vw;
            letter-spacing: -0.02em;
        }

        .sspan_padding {
            padding-right: 18vw !important;
        }

        .devops_gray_section .expert_mvp h1 {
            font-size: 8vw !important;
            padding: 0 !important;
        }

        .expert_mvp h1 br {
            display: none !important;
        }

        .devops_gray_section .contaner_width p {
            text-align: center;
        }

        .devops_gray_section .contaner_width p br {
            display: none !important;
        }

        .service_red_box h2 {
            font-size: 9vw;
            font-weight: 400;
        }

        .service_red_box p {
            font-size: 5vw;
            font-weight: 300;
            padding-left: 10vw;
            padding-right: 10vw;
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

        .mvp_choose_ul {
            padding: 1rem 0 !important;
            /* margin-bottom: 0 !important; */
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


        /* .baner_contaner .col-md-12 {
            justify-content: end !important;
        } */

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

        .mvp_ul_black_section li {
            width: 47%;
        }

        .last_laptop_section h1 {
            margin-top: -1.5rem;
            font-size: 25px;
            line-height: 26px;
        }

        .mvp_ul_black_section li p {
            font-size: 20px;
            /* text-align: start; */
        }

        .expert_mvp h1 br {
            display: none;
        }

        .expert_mvp h1 {
            font-size: 9vw;
            line-height: 39.09px;
            padding-left: 5vw;
            padding-right: 5vw;
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

        .services_section .row:first-child p br {
            display: none;
        }

        .main_card_part .col-lg {
            width: 99%;
        }

        .additional_services .col-md-3:has(.card) {
            margin-bottom: 1.5rem;
        }

        .additional_services .col-md-3:nth-child(5):has(.card) {
            margin-bottom: 0rem;
        }

        .devops_gray_section .row .col-lg-2:has(.card) {
            margin-bottom: 1.5rem;
        }

        .devops_gray_section .row .col-lg-2:nth-child(4):has(.card) {
            margin-bottom: 0rem;
        }

        .devops_gray_section .row .col-lg-2:first-child .card .card-body {
            height: 128px !important;
        }

        .devops_gray_section .row .col-lg-2:nth-child(2) .card .card-body {
            height: 217px !important;
        }

        .devops_gray_section .row .col-lg-2:nth-child(3) .card .card-body {
            height: 318px !important;
        }

        .devops_gray_section .row .col-lg-2:nth-child(4) .card .card-body {
            height: 395px !important;
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
            text-align: left;
        }

        .mvp_choose_ul li:nth-child(2) {
            width: 100%;
        }

        .mvp_choose_ul li:nth-child(2) p {
            margin-bottom: 6vw !important;
            font-size: 4.5vw;
            line-height: 5.5vw;
            padding-right: 5vw;
        }

        .mvp_choose_ul li:first-child h3,
        .mvp_choose_ul li:nth-child(3) h3 {
            font-size: 6vw;
            line-height: 22.41px;
            width: 100% !important;
            margin-bottom: 11vw;
        }



        .software-house-pic {
            height: 249px;
        }

        .hand_combine-pic {
            height: auto !important;
        }

        .mvp_choose_ul {
            display: grid !important;
            gap: 0 !important;
            border-top: 0 !important;
        }

        .software_hand_pic_section .mbl_red_number h1 {
            font-size: 7vw;
            font-weight: 600;
            color: #ec310d;
            margin-bottom: 0;
        }

        .software_hand_pic_section .mbl_red_number {
            margin-bottom: 1rem !important;
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
            text-align: center;
            line-height: 5.2vw;
            font-size: 4.2vw;
        }

        .devops_gray_section .row .col-lg-2:first-child .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(4) .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(3) .card .card-body,
        .devops_gray_section .row .col-lg-2:nth-child(2) .card .card-body {
            height: 153px;
        }

        .additional_services .card {
            min-height: 149px;
        }

        .software_hand_pic_section .row .col-lg-6 {
            margin-bottom: 1.5rem !important;
        }

        .software_hand_pic_section .row .col-lg-6:nth-child(4) .expert_mvp {
            margin-bottom: 2rem;
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

        .mvp_choose_ul-3 {
            padding-top: 2rem !important;
        }

        /* MVP */
    }
</style>


<section>
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner_1 baner_contaner">
            <div class="col-md-12 text-center d-flex flex-column justify-md-content-end justify-content-start h-100">
                <div class="">
                    <h1 class="mb-4"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="mbl_stamp">
                        <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
                            <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Start Your DevOps Transformation</span>
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
<section class="pt-md-5">
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

<section class="services_section pb-md-5">
    <div class="container contaner_width pb-md-4 pb-3">
        <div class="row">
            <div class="mt-md-5 mb-3 pb-2 expert_mvp pt-md-2">
                <a class="text-decoration-none text-dark" href="#">Services</a>
                <h1 class="mb-1">Accelerate Your Business <br> With Our DevOps Services</h1>
            </div>
            <div class="col-lg-6 offset-lg-3 ps-md-0">
                <p>Our services help clients streamline their software development <br> lifecycle by automating
                    testing,
                    deployment, and code management. <br> We focus on shortening release cycles, reducing downtime,
                    and <br>
                    ensuring efficient deployments.</p>
            </div>
        </div>
        <div class="row gy-4 pt-4">
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Continuous Integration (CI) </h5>
                    <p class="mb-4 pb-md-0 pb-1">Automated building, testing, and integration of code changes.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Jenkins</span></button>
                    <button class="btn border-0"><span>GitLab CI/CD</span></button>
                    <button class="btn border-0"><span>CircleCI</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Continuous Delivery (CD)</h5>
                    <p class="mb-4 pb-md-0 pb-1">Automated deployment of code changes to production environments.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Ansible</span></button>
                    <button class="btn border-0"><span>Chef</span></button>
                    <button class="btn border-0"><span>Puppet</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Infrastructure as Code (IaC)</h5>
                    <p class="mb-4 pb-md-0 pb-1">Managing infrastructure (servers, networks, storage) using code.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Terraform</span></button>
                    <button class="btn border-0"><span>GCloudFormation</span></button>
                    <button class="btn border-0"><span>Ansible</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Configuration Management</h5>
                    <p class="mb-4 pb-md-0 pb-1">Ensuring consistent configurations across environments.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Ansible</span></button>
                    <button class="btn border-0"><span>Jenkins</span></button>
                    <button class="btn border-0"><span>Python scripting</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Containerization</h5>
                    <p class="mb-4 pb-md-0 pb-1">Packaging applications and their dependencies into containers for portability.
                    </p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Docker</span></button>
                    <button class="btn border-0"><span>GKubernetes</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Microservices Architecture</h5>
                    <p class="mb-4 pb-md-0 pb-1">Breaking down applications into smaller, independent services.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Spring Boot</span></button>
                    <button class="btn border-0"><span>Node.js</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Monitoring and Logging</h5>
                    <p class="mb-4 pb-md-0 pb-1">Tracking application performance and identifying issues.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Prometheus</span></button>
                    <button class="btn border-0"><span>Grafana</span></button>
                    <button class="btn border-0"><span>ELK Stack</span></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">Automation</h5>
                    <p class="mb-4 pb-md-0 pb-1">Automating repetitive tasks to improve efficiency.</p>
                    <h6 class="mb-3">Tools: Use of tools like</h6>
                    <button class="btn border-0"><span>Ansible</span></button>
                    <button class="btn border-0"><span>Jenkins</span></button>
                    <button class="btn border-0"><span>Python scripting</span></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mvp_black_section mt-5 mb-md-5 pb-5">
    <div class="container contaner_width py-5">
        <div class="row">
            <div class="my-5 expert_mvp pb-3">
                <h1 class="mb-1 w-100 text-white text-center h_size">Specialized <br> DevOps Services</h1>
            </div>
            <div class="col-12 main_card_part d-flex gap-4">
                <div class="col-lg">
                    <div class="card px-3 px-md-4 h-100 py-4 py-md-5 card-body">
                        <h5 class="mb-3">Cloud DevOps</h5>
                        <p class="mb-4">Implementing DevOps practices on cloud platforms like AWS, Azure, or GCP.
                        </p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card px-3 px-md-4 py-md-5 h-100 py-4 card-body">
                        <h5 class="mb-3">DevSecOps</h5>
                        <p class="mb-4 pb-md-0 pb-1">Integrating security practices into the DevOps lifecycle.</p>
                        <h6 class="mb-3">Tools: Use of tools like</h6>
                        <button class="btn rounded-pill">OWASP ZAP</button>
                        <button class="btn rounded-pill">Burp Suite</button>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card px-3 px-md-4 py-md-5 h-100 py-4 card-body">
                        <h5 class="mb-3">Site Reliability Engineering (SRE)</h5>
                        <p class="mb-4 pb-md-0 pb-1">Focusing on reliability and availability of systems.</p>
                        <h6 class="mb-3">Tools: Use of tools like</h6>
                        <button class="btn rounded-pill">Google SRE playbook</button>
                        <button class="btn rounded-pill">PagerDuty</button>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card px-3 px-md-4 py-md-5 h-100 py-4 card-body">
                        <h5 class="mb-3">Chaos Engineering</h5>
                        <p class="mb-4 pb-md-0 pb-1">Intentionally introducing faults to test system resilience.</p>
                        <h6 class="mb-3">Tools: Use of tools like</h6>
                        <button class="btn rounded-pill">Chaos Monkey</button>
                        <button class="btn rounded-pill">Gremlin</button>
                        <button class="btn rounded-pill">Python scripting</button>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card px-3 px-md-4 py-md-5 h-100 py-4 card-body">
                        <h5 class="mb-3">AI/ML in DevOps</h5>
                        <p class="mb-4 pb-md-0 pb-1">Using AI and ML for predictive analytics and automation.</p>
                        <h6 class="mb-3">Tools: Use of tools like</h6>
                        <button class="btn rounded-pill">TensorFlow</button>
                        <button class="btn rounded-pill">PyTorch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="additional_services py-5 mb-md-5">
    <div class="container contaner_width pt-3">
        <div class="row justify-content-center">
            <div class="expert_mvp">
                <h1 class="mb-4 h_size">Additional Services</h1>
            </div>
            <div class="col-md-3">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">DevOps Consulting</h5>
                    <p class="mb-md-4 mb-0">Providing guidance and expertise on DevOps adoption.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">DevOps Training</h5>
                    <p class="mb-md-4 mb-0">Offering training courses and workshops on DevOps tools and practices.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">DevOps Tool Selection and Implementation</h5>
                    <p class="mb-md-4 mb-0">Helping clients choose and implement the right DevOps tools.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card px-3 h-100 py-4 card-body">
                    <h5 class="mb-3">DevOps Migration</h5>
                    <p class="mb-md-4 mb-0">Assisting in migrating existing applications and infrastructure to a DevOps model.</p>
                </div>
            </div>
            <div class="col-lg-10 mt-md-5 mb-md-4 mb-3 pt-5">
                <div class="service_red_box mt-md-4 mt-3 px-md-5 px-2 py-5 position-relative">
                    <div class="py-4 px-md-5">
                        <img class="img-fluid position-absolute top-0 end-0" src="<?php echo get_template_directory_uri(); ?>/css/img/right_top_line.png" alt="">
                        <h2 class="mb-md-4 mb-3 text-white text-center">Talk To Our Experts</h2>
                        <p class="mb-4 text-white text-center">Compare our options in detail or book a call with our
                            experts</p>

                        <ul class="d-flex justify-content-md-around w-100 list-unstyled gap-0 p-0 m-0 mt-5">
                            <li>

                                <div class="full_button_23 m-auto py-2 c_button_23" style="width: fit-content !important;">
                                    <a href="<?php echo home_url('outsourcing-models'); ?>"><span class="ps-md-2">Compare Outsourcing Model</span>
                                        <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                                    </a>
                                </div>

                            </li>
                            <li>
                                <div class="full_button_23 m-auto py-2 c_button_23" style="width: fit-content !important; background-color: white !important">
                                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"><span class="sspan_padding ps-md-2" style="color: black !important;">Schedule a Meeting</span>
                                        <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                                    </a>
                                </div>

                            </li>
                        </ul>

                        <img class="img-fluid position-absolute start-0 bottom-0" src="<?php echo get_template_directory_uri(); ?>/css/img/left_bottom_line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="devops_gray_section mb-md-5 pt-5">
    <div class="container mt-md-5 mt-4 position-relative contaner_width">
        <div class="position-absolute ps-lg-3 pt-md-3 pt-0 top-0 start-0">
            <div class="mb-4 expert_mvp">
                <h1 class="mb-1">DevOps Organizational <br>Maturity Model</h1>
            </div>
            <p>DevOps is a way of working that brings together software development (Dev) <br> and IT operations
                (Ops)
                teams to deliver software faster and more reliably. A <br> DevOps Maturity Model helps organizations
                understand their current level of <br> DevOps adoption and identify areas for improvement.</p>
        </div>
        <div class="row justify-content-end mt-5 pt-md-5">
            <div class="col-lg-2 col-md-6 mt-auto">
                <div class="card bg-white mt-auto pt-3 px-0">
                    <div class="px-md-3 px-4 pt-3 pt-md-2">
                        <span>Stage 1</span>
                        <h5 class="mb-3">Reactive (No Automation)</h5>
                        <p class="mb-4">This is the starting point where processes are manual and there's little automation. Things often break, and problems are fixed reactively.</p>
                    </div>
                    <div class="card-body px-0"></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mt-auto">
                <div class="card bg-white pt-3 px-0">
                    <div class="px-md-3 px-4 pt-3 pt-md-2">
                        <span>Stage 2</span>
                        <h5 class="mb-3">Defined (Basic Automation Introduced)</h5>
                        <p class="mb-4">Here, processes are defined, and some automation is introduced. Deployment is more repeatable, but there's still room for improvement.</p>
                    </div>
                    <div class="card-body px-0"></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mt-auto">
                <div class="card bg-white pt-3 px-0">
                    <div class="px-md-3 px-4 pt-3 pt-md-2">
                        <span>Stage 3</span>
                        <h5 class="mb-3">Proactive (Widespread Automation)</h5>
                        <p class="mb-4">At this level, there's significant automation, and health checks are integrated. Problems are often anticipated and addressed before they occur.</p>
                    </div>
                    <div class="card-body px-0"></div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mt-auto">
                <div class="card pt-3 px-0 bg-white">
                    <div class="px-md-3 px-4 pt-3 pt-md-2">
                        <span>Stage 4</span>
                        <h5 class="mb-3">Optimized (Continuous Development & Refinement)</h5>
                        <p class="mb-4">This is the highest level where DevOps is deeply ingrained in the culture. Continuous improvement is the norm, and processes are highly efficient.</p>
                    </div>
                    <div class="card-body px-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <?php if (have_rows('team_section')): ?>
            <?php
            $count = 1; // Initialize counter 
            while (have_rows('team_section')): the_row();
                $image = get_sub_field('thumbnail');
                $title = get_sub_field('title');
                $content = get_sub_field('content'); // WYSIWYG Editor content
            ?>
                <div class="card py-3 px-md-0 border-bottom-0 border-end-0 border-start-0" style="border-radius: 0;border-bottom: 1px solid rgba(0,0,0,.125) !important;">
                    <div class="card-header px-0 py-0 border-0" style="background: none;">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 text-center text-md-start">
                                        <?php if ($image): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" class="w-100 img_100" alt="<?php echo esc_attr($title); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-9 ps-md-4 text-center text-md-start">
                                        <p class="mb-0 py-3 py-md-0"><b><?php echo wp_kses($title, array('br' => array())); ?></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 text-center text-md-start">
                                <ul class="list-unstyled accordion_ul d-flex w-100 p-0 m-0 align-items-start justify-md-content-between justify-content-center">
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

    </div>
    </div>
</section>

<section class="red_box_section py-5 mb-md-5 position-relative">
    <div class="container contaner_width position-relative py-md-4 py-3">

        <div class="position-relative d-md-none d-block" style="background: url(<?php echo get_template_directory_uri(); ?>/css/img/mb_bg.png);background-size: cover;border-radius: 18px;">
            <h4 class="text-white text-center pt-5" style="padding: 7vw; font-size: 9vw;font-weight:400;">
                Outsource Your DevOps Needs to Experts
            </h4>
            <img class="w-100" style="padding-left: 17vw;padding-right: 17vw;" src="<?php echo get_template_directory_uri(); ?>/css/img/mbl_dev.png" alt="">

            <div class="meeting_btn pt-3">
                <p class="c_p_color mb-4 ps-lg-2 text-white px-4 text-center">
                    Unlock innovation and accelerate your software delivery with expert DevOps outsourcing. Reduce costs and enhance efficiency while focusing on core business objectives.
                </p>
                <div class="position-relative w-fit-content">
                    <a href="#exampleModalToggle" data-bs-toggle="modal" role="button" class="btn rounded-pill dark_btn ps-4 py-md-3 py-2 text-start d-flex align-items-center text-white fw-bold mb-2">Schedule a Meeting</a>
                    <img class="img-fluid arrow_giff_1 position-absolute" style="top: 12%;right: 10%;width: 13vw;" src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                </div>
                <br><br>
            </div>
        </div>

        <div class="d-md-block d-none">
            <div class="row px-lg-2 position-relative">
                <div class="col-lg-4 col-md-6 m-auto pe-0 ps-md-5">
                    <h1 class="text-white m-auto">
                        Outsource Your DevOps Needs to Experts
                    </h1>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid transparent_bg_img" src="<?php echo get_template_directory_uri(); ?>/css/img/transparent_bg_img.png" alt="">
                </div>
                <div class="col-lg-4 pe-0 position-relative h-100 pe-md-5">
                    <div class="text-end">
                        <img class="img-fluid d-lg-block ms-auto d-none" src="<?php echo get_template_directory_uri(); ?>/css/img/right_top_line.png" alt="">
                    </div>
                    <p class="text-white text-start ps-lg-2">Unlock innovation and accelerate your software delivery with expert DevOps outsourcing. Reduce costs and enhance efficiency while focusing on core business objectives.</p>
                    <div class="full_button_23 m-auto py-2 c_button_23 mx-md-0" style="width: fit-content !important;">
                        <a href="#exampleModalToggle" data-bs-toggle="modal" role="button"><span>Schedule a Meeting</span>
                            <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <section>
        <div class="container software_hand_pic_section contaner_width">
            <div class="row ">
                <div class="col-lg-6 m-auto pe-lg-5">
                    <div class="expert_mvp my-auto py-md-4">
                        <a class="text-decoration-none text-dark" href="#">Why Choose Us?</a>
                        <h1 class="mb-3">Accelerate Your Software Delivery with Isloo Tech's DevOps Expertise</h1>
                        <p class="mb-4">Our DevOps approach ensures rapid development cycles and continuous delivery, so your software is always release-ready. We prioritize quality and efficiency by tracking key metrics and SLAs, ensuring your applications deliver maximum business value.</p>
                        <p>With our expert guidance, implementing DevOps has never been easier. We've successfully helped organizations across industries in the US achieve their goal</p>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-0 d-md-block d-none">
                    <img class="img-fluid software-house-pic" src="<?php echo get_template_directory_uri(); ?>/css/img/software-house-pic.jpeg" alt="">
                </div>
                <div class="col-lg-6 pe-lg-0 pb-md-0 pb-4">
                    <img class="img-fluid hand_combine-pic" src="<?php echo get_template_directory_uri(); ?>/css/img/hand_combine-pic.jpeg" alt="">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="mt-md-5 expert_mvp py-md-4">
                        <a class="text-decoration-none text-dark" href="#">Benefits</a>
                        <h1 class="mb-1">Our DevOps as a <br>Service offers</h1>
                    </div>
                    <ul class="d-flex list-unstyled mvp_choose_ul m-0 p-0 gap-4 mbl_red_number border_top_none">
                        <li class="expert_mvp numbering">
                            <h1 class="">01</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Faster Time to Market</h3>
                            <p class="cmn_p mb-0">Speeds up the development cycle with automated processes and continuous delivery.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">02</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Improved Collaboration</h3>
                            <p class="cmn_p mb-0">Promotes teamwork between development and operations for smoother, faster delivery.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">03</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Better Product Quality</h3>
                            <p class="cmn_p mb-0">Continuous testing and feedback loops ensure more reliable and bug-free releases.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">04</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Greater Scalability</h3>
                            <p class="cmn_p mb-0">Easily scale resources using Infrastructure as Code (IaC) and cloud integration.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">05</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Reduced Downtime</h3>
                            <p class="cmn_p mb-0">Proactive monitoring and automated rollback reduce system outages.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">06</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Cost Efficiency</h3>
                            <p class="cmn_p mb-0">Automation cuts down on manual tasks, reducing operational costs and rework.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">07</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Built-in Security</h3>
                            <p class="cmn_p mb-0">Integrating security early ensures vulnerabilities are addressed from the start.</p>
                        </li>
                    </ul>
                    <ul class="d-flex list-unstyled border-top-0 mvp_choose_ul m-0 p-0 gap-4 mbl_red_number">
                        <li class="expert_mvp numbering">
                            <h1 class="">08</h1>
                        </li>
                        <li class="benefites-li">
                            <h3>Innovation & Agility</h3>
                            <p class="cmn_p mb-0">Enables quick responses to market changes and continuous delivery of new features.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-md-5 pt-1">
        <div class="container pt-5 mt-5">
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
    <section class="pb-md-1">
        <div class="container contaner_width mb-md-5 mt-md-5 mb-2 pb-5">
            <div class="row pt-5">
                <div class="col-md-12">
                    <div class="expert_mvp pb-md-4 mb-3">
                        <div class="text-start">
                            <a class="text-decoration-none text-dark">Process Flow</a>
                            <h1 class="mb-3 text-start ps-0">DevOps Service Pipeline</h1>
                            <p class="text-start">Isloo Tech is committed to delivering high-quality software solutions through <br>a robust DevOps process. Our approach involves the following key stages:</p>
                        </div>
                    </div>
                    <?php if (have_rows('process_flow')): ?>
                        <?php
                        $count = 1; // Initialize counter 
                        while (have_rows('process_flow')): the_row();
                            $title = get_sub_field('title');
                            $content = get_sub_field('content'); // WYSIWYG Editor content
                        ?>
                            <ul class="d-flex list-unstyled justify-content-between mvp_choose_ul mvp_choose_ul-3  m-0 p-0 gap-4">
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


    <div class="container px-4 pt-5">
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

                </div>
            </div>
        </div>
    </div>
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
