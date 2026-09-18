<?php
/*
Template Name: Contact Us Template
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>

<style>
	.menu,.menu_c,.menu_ul li{letter-spacing:.01em}.isloo_img{border-radius:20px;}.c_b_h,.c_b_p{font-weight:300}.c_main_div h5,.menu,.menu_c,.menu_ul li{font-size:14px;color:#000}.btn_round,.c_b_h,.c_b_p,.c_main_div h5,.c_main_div p,.emp_text,.main_p,.menu,.menu_c,.menu_ul li,.plus_text{color:#000}.navbar_1{position:absolute;width:100%;top:0;z-index:12323344;padding-left:2.5rem!important;padding-right:2.5rem!important}.nav_ul_1{background-color:#000;border-radius:30px;padding:2px;margin-top:-17px;margin-left:3px}.logo_ul_1,.logo_ul_2{width:37%}.canvas_logo,.footer_logo,.logo_top{width:144px}.menu{top:30%;left:44%}.offcanvas{z-index:11221323234}.menu_c{top:24%;left:18%}.menu_ul{width:303px;top:-30%!important;margin-bottom:0}.c_ul,.c_ul_1{width:63%!important}.menu_ul li{text-align:center;width:64px}.c_b_h{font-size:72px;line-height:79px;letter-spacing:-.02em}.c_b_p{font-family: 'Inter'; font-size:22px;line-height:26.63px;letter-spacing:-.02em}.c_main_div h5,.isloo_ul li:first-child h4,.plus_text{font-weight:700;letter-spacing:-.02em}.plus_text{font-family:Inter;font-size:50px;line-height:60.51px;margin-bottom:-3px}.c_main_div h5{line-height:16.94px}.c_main_div p{font-size:12px;font-weight:400;line-height:14.52px;letter-spacing:-.02em}.c_form input,.c_form textarea{background-color:inherit;color:#b2b2b2;padding-left:0}.bottom_arow_img{width:22px;height:28px}.bg_line_img{width:76.5%;height:589px;top:11.5%;right:-4%}.text_main{width:fit-content;left:12%;top:2%}.circle_giff_2{width:100px;height:100px;margin-left:auto}.isloo_ul li:first-child{width:30%}.isloo_ul li:first-child h4{font-size:30px;line-height:30.3px;color:#ec310d}.isloo_ul li:first-child p{font-size:19px;font-weight:400;line-height:22.99px;letter-spacing:-.02em;color:#818181}.emp_text{font-size:39px;font-weight:300;line-height:47.2px;letter-spacing:-.02em}.qoutes_span{bottom:200px!important}.gb_col{padding-left:4rem;position:relative;z-index:212}.main_p{font-size:14px;line-height:16.94px;letter-spacing:-.02em}.f_text_main{width:fit-content;left:50%;transform:translateX(-53%)}.circle_giff{width:142px;height:142px;margin-left:auto}.btn_round{padding:7px,12px;border-radius:140px 0 0;border:1px solid #000;font-size:12px;line-height:12px;letter-spacing:-.01em;width:fit-content}.c_form input,.c_form label,.c_form p,.c_form textarea,.cc_ul_1 li a,.cc_ul_2 li a,.form_heading,.submit_btn{letter-spacing:-.02em}.cc_ul_1 li h3,.cc_ul_2 li h3{font-size:32px;line-height:41px;letter-spacing:-.02em;color:#000}.cc_ul_1 li a,.cc_ul_2 li a{line-height:21.76px;color:#818181}.cc_p_1,.cc_p_3,.cc_p_5{gap:17px}.cc_p_2{gap:47px}.cc_p_4{gap:13px}.cc_p_6{gap:37px}.form_btn{width:168px;height:77px;border-radius:80px;background:#f4f4f4;margin-left:8rem;margin-top:0.5rem}.c_form{background:#f6f7f9;border-radius:20px;}.submit_btn{width:185px;height:78px;border-radius:80px;background-color:#000;color:#fff;font-size:24px;font-weight:600;line-height:36px}.submit_btn:hover{color:white}.btn:focus{box-shadow:none}.form_heading{font-size:40px;font-weight:700;line-height:48.41px}.form_giff{width:73px;height:73px;right:0}.c_form input{font-size:22px}.c_form textarea{font-size:21px;resize:unset}.c_form label{font-size:14px;color:#000}.c_form .form-control{border-bottom:1px solid #f6f7f9!important;transition:.5s ease-in-out}.c_form .form-control:focus{box-shadow:none;background:0 0;border-bottom:1px solid #000!important;border-radius:0!important}.c_form p{font-size:22px;line-height:29.92px;border-bottom:1px solid #000;width:90%!important}.form_img{width:182px;height:184px;right:9%;bottom:2%}.form_heading span{border-bottom:3px solid #000}@media (max-width:1400px){.contaner_width{max-width:100%;width:90%}.text_main{width:fit-content;left:10.5%;top:1.5%}}@media(max-width:1300px){.bg_line_img{width:86.5%;height:594px;top:11%;right:-7%}}@media (max-width:1200px){.navbar_1{padding-left:1.2rem!important;padding-right:1.2rem!important}.emp_text{font-size:30px}.c_main_div p br,.servise_img{display:none}.c_form{margin-top:3rem}.cc_ul_1 li:first-child,.cc_ul_2 li:first-child{border-left:1px solid #dee2e6}.bg_line_img{width:100.5%;height:468px;top:36%;right:-4%}.navbar-light .navbar-toggler{border:0;animation-name:borders;animation-duration:10s;animation-iteration-count:infinite;animation-delay:1s;animation-direction:normal;animation-timing-function:linear;padding:0}.menu,.navbar-expand-lg .navbar-collapse{display:none!important}}.say_hello{display:none}@media (max-width:767px){.c_form ul li,.cc_ul_1 li,.cc_ul_2 li,.isloo_ul li{width:100%!important}.say_hello{font-size:33px!important;display:block!important;margin-bottom:1.5rem;margin-top:1rem!important}.form_heading{width:100%}.mbl_p_2{padding:2rem!important}.contaner_width{width:99%}.navbar-light .navbar-toggler{padding:0}.gb_col{padding-left:.7rem}.c_b_h{text-align:center;font-size:38px;line-height:42px;text-align:start;font-weight:400}.bg_line_img{height:247px;right:0;top:63%}.cc_ul_1,.cc_ul_2,.isloo_ul{flex-wrap:wrap}.cc_ul_1 li:first-child,.cc_ul_2 li:first-child{border-top:0!important;border-right:1px solid #dee2e6}.c_b_p{font-size:16px;line-height:19.63px;text-align:start;margin-bottom:2.5rem}.c_main_div div svg{width:16px}.mbl_li_1,footer .col-md-5{order:2}.isloo_ul li:first-child h4{font-size:28px;font-weight:700;line-height:13.3px;letter-spacing:-.02em;color:#ec310d;white-space:pre-line;margin-bottom:1rem}.c_b_p br,.emp_text br,.isloo_ul li h4 br{display:none}.right_img_first{width:47px!important}.emp_text{font-size:24px;line-height:32.2px;font-weight:400}.text_main{display:none!important;width:fit-content;left:50%;transform:translateX(-50px);bottom:-29px!important}.cc_ul_1 li h3,.cc_ul_2 li h3{font-size:24px;line-height:25px}.form_img{width:191px;height:190px;right:4%;bottom:0;margin-bottom:2.4rem!important}.c_form{margin-bottom:3rem}.c_form input{font-size:21px}.c_form p,.c_form textarea{font-size:17px}::placeholder{color:#8080806e!important}.c_form p{padding-bottom:0!important}.form_giff{right: -4px;} .submit_btn{width:190px;height:69px;padding-left:24px!important;margin-bottom:3.6rem!important;z-index:1212}footer .contaner_width{margin-bottom:0!important}footer .client_box h1{font-size:32px;line-height:41px;letter-spacing:-.02em}footer .col-md-4:nth-child(5){order:3;height:30px}footer .col-md-4:nth-child(4){order:4}footer .col-md-7{order:6;padding-right:20px}footer .col-md-4:nth-child(6){order:6}footer .col-md-12:last-child{order:7}.f_text_main{left:83%;top:-114px}.circle_giff{width:117px;height:117px}.right_img{width:86px}.main_p{font-size:14px;line-height:16.94px}footer .btn{font-size:15px}.navbar_1 .container-fluid{align-items:flex-start}.navbar-toggler:focus{box-shadow:0 0}}.text-area{z-index:2;position:relative;background:0 0!important;border:0!important}
</style>

<div class="clear_div"></div>

<section class="my-md-5 pb-0 pt-5 overflow-hidden">
    <div class="container position-relative c_baner py-5 mt-3 contaner_width">
        <div class="position-relative d-lg-none d-block text_main">
            <img class="img-fluid circle_giff_2" src="<?php echo get_template_directory_uri(); ?>/css/img/giff.gif" alt="">
            <div class="text_overlay d-flex position-absolute justify-content-center align-items-center w-100 h-100 top-0 start-0">
                <img class="img-fluid right_img_first right_img" src="<?php echo get_template_directory_uri(); ?>/css/img/floating.png" alt="">
            </div>
        </div>
        <div class="row mb-md-5 mt-md-1 mt-1">
            <img class="img-fluid bg_line_img position-absolute pe-0" src="<?php echo get_template_directory_uri(); ?>/css/img/bg_line.png" alt="">
            <div class="col-lg-4 mt-auto pt-4">
                <h1 class="c_b_h mb-md-3 mb-0">
                    <?php $let’s_collaborate = get_field('let’s_collaborate');
                    if ($let’s_collaborate) : ?>
                        <?php echo $let’s_collaborate['title']; ?>
                    <?php endif; ?>
                </h1>
            </div>
            <div class="col-lg-8 pt-4">
                <p class="c_b_p">
                    <?php $let’s_collaborate = get_field('let’s_collaborate');
                    if ($let’s_collaborate) : ?>
                        <?php echo $let’s_collaborate['content']; ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-3">
                <div class="c_main_div mb-3">
                    <h1 class="plus_text">
                        <?php $project_completed = get_field('project_completed');
                        if ($project_completed) : ?>
                            <?php echo $project_completed['count']; ?>
                        <?php endif; ?>
                    </h1>
                    <h5 class="mb-1">
                        <?php $project_completed = get_field('project_completed');
                        if ($project_completed) : ?>
                            <?php echo $project_completed['title']; ?>
                        <?php endif; ?>
                    </h5>
                    <p>
                        <?php $project_completed = get_field('project_completed');
                        if ($project_completed) : ?>
                            <?php echo $project_completed['content']; ?>
                        <?php endif; ?>
                    </p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" viewBox="0 0 22 28" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8613 27.649C11.6328 27.8738 11.323 28 11 28C10.677 28 10.3672 27.8738 10.1387 27.649L0.387927 18.0487C0.268178 17.9388 0.17213 17.8063 0.105514 17.6591C0.0388956 17.5119 0.00307562 17.353 0.000187883 17.1919C-0.00269795 17.0308 0.0274057 16.8707 0.088706 16.7213C0.150008 16.5718 0.24125 16.4361 0.35699 16.3222C0.47273 16.2082 0.610595 16.1184 0.762362 16.058C0.91413 15.9977 1.07669 15.968 1.24034 15.9709C1.404 15.9737 1.5654 16.009 1.71491 16.0746C1.86442 16.1401 1.99898 16.2347 2.11056 16.3526L9.78116 23.9049L9.78115 1.20005C9.78115 0.881774 9.90957 0.576537 10.1381 0.351485C10.3667 0.126433 10.6767 9.89911e-07 11 9.61651e-07C11.3233 9.3339e-07 11.6333 0.126433 11.8618 0.351485C12.0904 0.576537 12.2188 0.881774 12.2188 1.20005L12.2188 23.9049L19.8894 16.3526C20.001 16.2347 20.1356 16.1401 20.2851 16.0746C20.4346 16.009 20.596 15.9737 20.7597 15.9709C20.9233 15.968 21.0859 15.9977 21.2376 16.058C21.3894 16.1184 21.5273 16.2082 21.643 16.3222C21.7587 16.4361 21.85 16.5718 21.9113 16.7213C21.9726 16.8707 22.0027 17.0308 21.9998 17.1919C21.9969 17.353 21.9611 17.5119 21.8945 17.6591C21.8279 17.8063 21.7318 17.9388 21.6121 18.0487L11.8613 27.649Z" fill="black" />
                        </svg>
                    </div>
                </div>
                <div class="c_main_div mb-3">
                    <h1 class="plus_text">
                        <?php $team_satisfaction = get_field('team_satisfaction');
                        if ($team_satisfaction) : ?>
                            <?php echo $team_satisfaction['count']; ?>
                        <?php endif; ?>
                    </h1>
                    <h5 class="mb-1">
                        <?php $team_satisfaction = get_field('team_satisfaction');
                        if ($team_satisfaction) : ?>
                            <?php echo $team_satisfaction['title']; ?>
                        <?php endif; ?>
                    </h5>
                    <p>
                        <?php $team_satisfaction = get_field('team_satisfaction');
                        if ($team_satisfaction) : ?>
                            <?php echo $team_satisfaction['content']; ?>
                        <?php endif; ?>
                    </p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" viewBox="0 0 22 28" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8613 27.649C11.6328 27.8738 11.323 28 11 28C10.677 28 10.3672 27.8738 10.1387 27.649L0.387927 18.0487C0.268178 17.9388 0.17213 17.8063 0.105514 17.6591C0.0388956 17.5119 0.00307562 17.353 0.000187883 17.1919C-0.00269795 17.0308 0.0274057 16.8707 0.088706 16.7213C0.150008 16.5718 0.24125 16.4361 0.35699 16.3222C0.47273 16.2082 0.610595 16.1184 0.762362 16.058C0.91413 15.9977 1.07669 15.968 1.24034 15.9709C1.404 15.9737 1.5654 16.009 1.71491 16.0746C1.86442 16.1401 1.99898 16.2347 2.11056 16.3526L9.78116 23.9049L9.78115 1.20005C9.78115 0.881774 9.90957 0.576537 10.1381 0.351485C10.3667 0.126433 10.6767 9.89911e-07 11 9.61651e-07C11.3233 9.3339e-07 11.6333 0.126433 11.8618 0.351485C12.0904 0.576537 12.2188 0.881774 12.2188 1.20005L12.2188 23.9049L19.8894 16.3526C20.001 16.2347 20.1356 16.1401 20.2851 16.0746C20.4346 16.009 20.596 15.9737 20.7597 15.9709C20.9233 15.968 21.0859 15.9977 21.2376 16.058C21.3894 16.1184 21.5273 16.2082 21.643 16.3222C21.7587 16.4361 21.85 16.5718 21.9113 16.7213C21.9726 16.8707 22.0027 17.0308 21.9998 17.1919C21.9969 17.353 21.9611 17.5119 21.8945 17.6591C21.8279 17.8063 21.7318 17.9388 21.6121 18.0487L11.8613 27.649Z" fill="black" />
                        </svg>
                    </div>
                </div>
                <div class="c_main_div mb-3">
                    <h1 class="plus_text">
                        <?php $happy_client = get_field('happy_client');
                        if ($happy_client) : ?>
                            <?php echo $happy_client['count']; ?>
                        <?php endif; ?>
                    </h1>
                    <h5 class="mb-1">
                        <?php $happy_client = get_field('happy_client');
                        if ($happy_client) : ?>
                            <?php echo $happy_client['title']; ?>
                        <?php endif; ?>
                    </h5>
                    <p>
                        <?php $happy_client = get_field('happy_client');
                        if ($happy_client) : ?>
                            <?php echo $happy_client['content']; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-9 gb_col">
                <div class="position-relative d-lg-block d-none text_main">
                    <img class="img-fluid circle_giff_2" src="<?php echo get_template_directory_uri(); ?>/css/img/giff.gif" alt="">
                    <div class="text_overlay d-flex position-absolute justify-content-center align-items-center w-100 h-100 top-0 start-0">
                        <img class="img-fluid right_img_first right_img" src="<?php echo get_template_directory_uri(); ?>/css/img/floating.png" alt="">
                    </div>
                </div>
                <ul class="p-0 mt-md-5 mb-5 align-items-end isloo_ul list-unstyled d-flex gap-4">
                    <li class="mbl_li_1">
                        <h4 class="text-uppercase">
                            Your
                            <br>
                            Business
                        </h4>
                        <p class="mb-0">
                            Our Focus.
                        </p>
                    </li>
                    <li class="pt-md-0 pt-5">
                        <img class="img-fluid isloo_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </li>
                </ul>
                <p class="emp_text mb-auto position-relative">
                    <span class="position-absolute start-0 qoutes_span top-0 d-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="31" viewBox="0 0 39 31" fill="none">
                            <path d="M3.30867 4.44075C6.04366 1.49381 10.1822 0 15.6074 0H17.5567V5.46181L15.9894 5.77375C13.3188 6.30463 11.461 7.34894 10.4668 8.8815C9.94807 9.70713 9.65387 10.6525 9.61299 11.625H15.6074C16.1244 11.625 16.6202 11.8291 16.9858 12.1925C17.3514 12.5558 17.5567 13.0486 17.5567 13.5625V27.125C17.5567 29.2621 15.8081 31 13.658 31H1.96164C1.44463 31 0.948801 30.7959 0.58322 30.4325C0.217639 30.0692 0.0122574 29.5764 0.0122574 29.0625V19.375L0.0181056 13.7194C0.000561135 13.5044 -0.369822 8.40875 3.30867 4.44075ZM35.1012 31H23.4049C22.8879 31 22.3921 30.7959 22.0265 30.4325C21.6609 30.0692 21.4555 29.5764 21.4555 29.0625V19.375L21.4614 13.7194C21.4438 13.5044 21.0734 8.40875 24.7519 4.44075C27.4869 1.49381 31.6255 0 37.0506 0H39V5.46181L37.4327 5.77375C34.762 6.30463 32.9043 7.34894 31.9101 8.8815C31.3913 9.70713 31.0971 10.6525 31.0562 11.625H37.0506C37.5676 11.625 38.0635 11.8291 38.429 12.1925C38.7946 12.5558 39 13.0486 39 13.5625V27.125C39 29.2621 37.2514 31 35.1012 31Z" fill="black" />
                        </svg>
                    </span>
                    <span class="d-inline-block ms-5 ps-md-3 ps-2">
                        Ready to talk?
                        <br>
                        We're here to listen
                        <br>
                        Contact us today
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- banner -->
<section class="mb-md-5 mb-2">
    <div class="container pb-5 pt-3 contaner_width">
        <div class="row px-md-0 px-3">
            <div class="col-lg-5 border d-flex align-items-center p-0 mt-md-0 mt-4">
                <img class="img-fluid p-3 pt-0 mbl_p_2" src="<?php echo get_template_directory_uri(); ?>/css/img/dropimg.png" alt="">
            </div>
            <div class="col-lg-7 p-0">
                <ul class="mb-0 cc_ul_1 list-unstyled w-100 p-0 d-flex">
                    <li class="border-top w-50 p-4">
                        <h3 class="mb-2">
                            <?php $visit_us_daily = get_field('visit_us_daily');
                            if ($visit_us_daily) : ?>
                                <?php echo $visit_us_daily['title']; ?>
                            <?php endif; ?>
                        </h3>
                        <a class="text-decoration-none">
                            <?php $visit_us_daily = get_field('visit_us_daily');
                            if ($visit_us_daily) : ?>
                                <?php echo $visit_us_daily['content']; ?>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="border w-50 p-4">
                        <h3 class="mb-2">
                            <?php $call_us = get_field('call_us');
                            if ($call_us) : ?>
                                <?php echo $call_us['title']; ?>
                            <?php endif; ?>
                        </h3>
                        <p class="m-0 d-flex cc_p_1">
                            <a class="text-decoration-none">
                                <?php $call_us = get_field('call_us');
                                if ($call_us) : ?>
                                    <?php echo $call_us['content']; ?>
                                <?php endif; ?>
                            </a>
                        </p>

                    </li>
                </ul>
                <ul class="mb-0 p-0 w-100 cc_ul_2 list-unstyled d-flex">
                    <li class="border-bottom border-top w-50 p-4">
                        <h3 class="mb-2">
                            <?php $email_us = get_field('email_us');
                            if ($email_us) : ?>
                                <?php echo $email_us['title']; ?>
                            <?php endif; ?>
                        </h3>
                        <p class="m-0 d-flex cc_p_3">
                            <a class="text-decoration-none">
                                <?php $email_us = get_field('email_us');
                                if ($email_us) : ?>
                                    <?php echo $email_us['content']; ?>
                                <?php endif; ?>
                            </a>
                        </p>

                    </li>
                    <li class="border-bottom border-start border-end w-50 p-4">
                        <h3 class="mb-2">Stalk Us</h3>
                        <p class="m-0 d-flex cc_p_5">
                            <a href="https://www.facebook.com/islootech.it/" class="text-decoration-none">Facebook</a>
                            <a href="https://www.linkedin.com/company/isloo-tech-it?originalSubdomain=pk" class="text-decoration-none">Linkedin</a>
                            <a href="https://www.instagram.com/islootech.it/" class="text-decoration-none">Instagram</a>
                        </p>
                        <!--<p class="m-0 d-flex cc_p_6">
                            <a class="text-decoration-none" href="">Twitter</a>
                            <a class="text-decoration-none" href="">Instagram</a>
                        </p>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- form section -->
<section>
    <div class="container py-5 contaner_width">
        <div class="row">
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center p-md-0">
                <div class="form_heading me-md-5 pe-md-3">
                    <span class="d-inline-block">Schedule a</span>
                    <br>
                    <span class="d-inline-block">Meeting</span>
                </div>
                <a href="#exampleModalToggle" data-bs-toggle="modal" role="button" class="btn d-flex justify-content-center align-items-center form_btn rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.3431 4.34315C13.8185 4.86782 13.5533 6.1696 13.4204 7.35189C13.2464 8.87499 13.3122 10.4214 13.6714 11.9106C13.9408 13.0271 14.3743 14.2738 15.0503 14.9497M15.0503 14.9497C14.3743 14.2738 13.1269 13.8396 12.0111 13.5709C10.5212 13.2124 8.97479 13.1466 7.4531 13.3192C6.27011 13.4528 4.96691 13.7194 4.44365 14.2426M15.0503 14.9497L1.26167 1.16117" stroke="black" stroke-width="2" />
                    </svg>
                </a>
            </div>
            <div class="col-lg-7 ps-md-5">
            <h1 class="mb-2 pt-md-0 pt-5">Say Hi to Our Team</h1>
            <p>We’d Love to Hear from You</p>

            <form id="contactUsForm" class="c_form px-4 pt-3 pb-5 py-md-5 position-relative">
                <ul class="d-md-flex w-100 mb-md-4 mb-3 list-unstyled p-0">
                    <li class="w-50 mb-md-0 mb-3">
                        <label for="name">Name</label>
                        <input id="name" name="name" class="form-control border-0" type="text" placeholder="Your name" required>
                    </li>
                    <li class="w-50">
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" class="form-control border-0" type="text" placeholder="Choose subject" required>
                    </li>
                </ul>
                <ul class="d-md-flex mb-4 w-100 list-unstyled p-0">
                    <li class="w-50 mb-md-0 mb-3">
                        <label for="company">Company</label>
                        <input id="company" name="company" class="form-control border-0" type="text" placeholder="Your Company">
                    </li>
                    <li class="w-50">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control border-0" type="email" placeholder="Email address" required>
                    </li>
                </ul>
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control mb-md-2 mb-4 border-0 text-area" placeholder="Start typing here" required></textarea>
                <button type="submit" class="btn d-flex ps-4 align-items-center position-relative submit_btn rounded-pill">
                    Submit
                    <img class="form_giff position-absolute" src="<?php echo get_template_directory_uri(); ?>/css/img/fromgiffgif.gif" alt="">
                </button>
                <img class="mb-4 img-fluid form_img position-absolute" src="<?php echo get_template_directory_uri(); ?>/css/img/Vector.png" alt="">
            </form>
            <div id="formMessage" style="display: none;"></div>

            </div>
        </div>
    </div>
</section>
<!-- form section -->
<!-- Footer end -->
<script>
    document.getElementById('contactUsForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    formData.append('action', 'handle_contact_form');

    try {
        const response = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
            method: 'POST',
            body: formData,
        });

        const result = await response.json();

        if (result.success) {
            const messageDiv = document.getElementById('formMessage');
            messageDiv.style.display = 'block';
            messageDiv.innerHTML = '<p>Thank you! Your message has been sent successfully.</p>';
            messageDiv.style.color = 'green';
            document.getElementById('contactUsForm').style.display = 'none';
        } else {
            alert(result.data || 'Failed to send your message. Please try again.');
        }
    } catch (error) {
        console.error('Error submitting the form:', error);
        alert('An error occurred. Please try again.');
    }
});

</script>
<?php get_footer(); ?>