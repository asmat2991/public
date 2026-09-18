<?php
/*
Template Name: Blogs Template
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<style>

/* Prevent horizontal scroll */
html, body {overflow-x: hidden;width: 100%;margin: 0;padding: 0;}* {box-sizing: border-box;}
.text_d_nonr{text-decoration:none;}.menu,.menu_c,.menu_ul li{font-size:14px;letter-spacing:.01em;color:#000}.navbar_1{position:unset;width:100%;z-index:12323344;padding-left:2.5rem!important;padding-right:2.5rem!important}.nav_ul_1{background-color:#000;border-radius:30px;padding:2px;margin-top:-17px;margin-left:3px}.logo_ul_1,.logo_ul_2{width:37%}.canvas_logo,.footer_logo,.logo_top{width:144px}.menu{top:30%;left:44%}.offcanvas{z-index:11221323234}.menu_c{top:24%;left:18%}.menu_ul{width:303px;top:-30%!important;margin-bottom:0}.menu_ul li{text-align:center;width:64px}.c_ul_1{width:63%!important}.baner_contaner_b{height: fit-content;margin-top: 8rem;}.baner_contaner_b h1{font-size:72px;font-weight:300;line-height:61px;letter-spacing:-.02em;color:#000;margin-bottom:2.3rem}.baner_contaner_b p{font-size:15px;line-height:18.15px;letter-spacing:-.02em}.date_main_dev{width:81%}.date_main_dev span{font-size:15px;font-weight:400;line-height:18.15px;color:#afafae}.date_main_dev h3{font-size:24px;line-height:29.05px;color:#212121}.date_main_dev p{font-size:14px;line-height:16.94px;color:#7e7e7e}.b_img,.b_li_peronimg{height:360px;object-fit:cover}.b_red_text{font-size:18px;font-weight:600;line-height:21.78px;letter-spacing:.4em;rotate:-90deg;color:#ec310d;width:fit-content;height:fit-content;top:46%;left:47%;transform:translatey(-59px)}.web_type_ul h1{font-size:40px;font-weight:400;line-height:60px;letter-spacing:-.02em}.main_p{font-size:14px;line-height:16.94px;letter-spacing:-.02em;color:#000}.f_text_main{width:fit-content;left:50%;transform:translateX(-53%)}.circle_giff{width:142px;height:142px;margin-left:auto}.btn_round{padding:7px,12px;border-radius:140px 0 0;border:1px solid #000;font-size:12px;line-height:12px;letter-spacing:-.01em;color:#000;width:fit-content}.date_col{width:29.1%}@media (max-width:1400px){.contaner_width{max-width:100%;width:90%}.web_type_ul h1{font-size: 36px;}.baner_contaner_b{height: fit-content; margin-top: 6rem;}}@media(max-width:1300px){.blog_row .col-lg-4:nth-child(6),.blog_row .col-md-6:nth-child(3){border-right:1px solid #dee2e6!important;border-bottom:1px solid #dee2e6!important}.web_type_ul h1{font-size:34px}.btn_round{font-size:11px}.date_col,.date_col_1{width:45%}.blog_row .col-lg-3:nth-child(2){order:2;padding:51px!important;order:2}.blog_row .col-md-6:nth-child(3){order:3;padding:51px!important}.blog_row .col-lg-4:nth-child(4){order:4;width:53.4%}.blog_row .col-lg-8:nth-child(5){order:6;width:53.7%}.blog_row .col-lg-4:nth-child(6){order:5}.blog_row .col-md-1:nth-child(7){order:7;width:0;padding:0}.blog_row .col-md-3:nth-child(8){order:8;border-left:0!important}.blog_row .col-md-4:nth-child(9){order:9;border-top:1px solid #dee2e6;border-left:1px solid #dee2e6}.blog_row .col-lg-4:nth-child(10){order:10;width:54%}}@media (max-width:992px){.blog_row .col-md-4:nth-child(9),.blog_row .col-md-6:nth-child(3),.center_md_7,.center_md_7_2 .row .col-md-6:nth-child(2),.md_col_center{border-right:1px solid #dee2e6}.navbar_1{padding-left:1.2rem!important;padding-right:1.2rem!important}.navbar-light .navbar-toggler{border:0}.menu,.servise_img{display:none}.baner_contaner_b{height:fit-content; margin-top: 2rem;}.baner_contaner_b h1{line-height:75px}.blog_row .col-lg-4:nth-child(6){border-bottom:1px solid #dee2e6}.blog_row .col-lg-4:nth-child(10),.blog_row .col-lg-4:nth-child(4),.blog_row .col-lg-8:nth-child(5),.date_col,.date_col_1{width:50%}.b_red_text{rotate:0deg;left:42%}.md_col_center{border-left:1px solid #dee2e6}.center_md_7_2{border-top:1px solid #dee2e6;padding-left:0}.li_img_row .col-lg-8{order:2}.li_img_row .col-lg-4{order:1}.center_md_7_2 .row{padding-left:13px;padding-right:13px}}@media (max-width:767px){html, body {overflow-x: hidden;width: 100%;} #last-section{margin-top: 0 !important;} .center_md_7_2 .row .col-md-6:first-child,.center_md_7_2 .row .col-md-6:last-child{border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;margin-top:3rem;border-top:1px solid #dee2e6}.mbl_scr{overflow-x:scroll}.contaner_width{width:99%}.navbar-light .navbar-toggler{padding:0}.date_col{width:100%;border-bottom:1px solid #dee2e6;border-top:1px solid #dee2e6;padding-top:1rem;padding-bottom:1rem}.blogImg{padding-left:0;padding-right:0}.blog_row .col-lg-1:first-child{order:0; margin-bottom: 2.5rem;}.blog_row .col-lg-3:nth-child(2){order:2;padding:15px!important}.blog_row .col-md-6:nth-child(3){order:3;padding:15px!important}.blog_row .col-lg-4:nth-child(4){order:4;width:100%;margin-bottom:2rem}.blog_row .col-lg-8:nth-child(5){order:6;margin-bottom:2rem;width:100%;padding-right:0!important}.blog_row .col-lg-4:nth-child(6){order:5}.blog_row .col-md-1:nth-child(7),footer .col-md-12:last-child{order:7}.blog_row .col-md-3:nth-child(8){order:8;margin-bottom:2rem;border-left:1px solid #dee2e6!important}.blog_row .col-md-4:nth-child(9){order:9;border-top:1px solid #dee2e6}.blog_row .col-lg-4:nth-child(10){order:10;width:100%}.date_col_1{width:100%}.date_col:nth-child(2){margin-bottom:2rem}.date_col:nth-child(3){border-top:1px solid #dee2e6;border-left:1px solid #dee2e6;border-right:1px solid #dee2e6}.date_col:nth-child(9){border-top:0;border-left:1px solid #dee2e6;border-right:1px solid #dee2e6}.baner_contaner_b{height:fit-content; margin-top: 2rem;}.web_type_ul h1{font-size:28px;line-height:25px;font-weight:400}.baner_contaner_b h1{font-size:7.9vw;line-height:10vw;font-weight:400;margin-bottom: 3.5vw;}.b_red_text{rotate:unset;position:unset!important;font-size:22px!important;transform: translatey(0px);}.date_main_dev{width:100%!important;padding:12px 9px!important}.baner_contaner_b p{font-size:17px;line-height:20px;font-weight:400}.baner_contaner_b p br{display:none}.red_text_cil{display:flex;justify-content:center}.center_md_7 .row,.center_md_7_2 .row{height:unset!important}.center_md_7 .row .col-md-6:first-child{padding-top:1rem;padding-bottom:1rem;border-top:1px solid #dee2e6;border-bottom:1px solid #dee2e6}.center_md_7 .row .col-md-6:last-child{padding-top:1rem;padding-bottom:1rem;border-left:1px solid #dee2e6;border-right:1px solid #dee2e6}.date_main_dev span{padding-bottom:.7rem}.md_col_center{padding-top:1rem;padding-bottom:1rem;border-left:1px solid #dee2e6;border-right:1px solid #dee2e6;margin-top:0;border-top:1px solid #dee2e6}.center_md_7 .row,.li_img_row{padding-left:13px;padding-right:13px}.center_md_7_2 .row{padding-right:13px;margin-left:-1px}.center_md_7{border-right:0}.center_md_7_2 .row .col-md-6:first-child{padding-top:1rem;padding-bottom:1rem;border-bottom:1px solid #dee2e6}.web_type_ul{flex-wrap:unset!important;justify-content:left!important}.center_md_7_2 .row .col-md-6:last-child{padding-top:1rem;padding-bottom:1rem}.center_md_7_2{border-top:0}.blog_row,.last_row{border-top:0!important;border-bottom:0!important;padding-left:inherit;padding-right:inherit}footer .contaner_width{margin-bottom:0!important}footer .client_box h1{font-size:32px;line-height:41px;letter-spacing:-.02em}footer .col-md-5{order:2}footer .col-md-4:nth-child(5){order:3;height:30px}footer .col-md-4:nth-child(4){order:4}footer .col-md-7{order:6;padding-right:20px}footer .col-md-4:nth-child(6){order:6}.f_text_main{left:79%;top:-114px}.circle_giff{width:117px;height:117px}.right_img{width:86px}.main_p{font-size:14px;line-height:16.94px}footer .btn{font-size:15px}.navbar_1 .container-fluid{align-items:flex-start}.navbar-toggler:focus{box-shadow:0 0}}
</style>
<div class="clear_div"></div>

<!-- banner start -->
<section class="pb-md-5 pb-4">
    <div class="container first_section contaner_width position-relative">
        <div class="row baner_contaner_b">
            <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
                <div class="">
                    <h1 class="mt-4">Explore the World Through Words</h1>
                    <p class="">
                        Dive into a diverse array of topics, from culture and technology to creativity and personal growth. Uncover thought-
                        <br>
                        provoking articles that spark curiosity and ignite your imagination.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<section class="my-md-5 mt-0">
    <div class="container contaner_width">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $custom_posttype_blogs = new WP_Query(array(
            'post_type' => 'blog',
            'posts_per_page' => 8,
            'paged' => $paged
        ));
        $posts_per_page = 5;
        $total_posts = $custom_posttype_blogs->found_posts;
        $current_posts = $custom_posttype_blogs->post_count;
        ?>
        <div class="row border-bottom blog_row border-top">
            <?php
            $count = 0;
            while ($custom_posttype_blogs->have_posts()) {
                $count++;
                $custom_posttype_blogs->the_post();

                // Condition for showing the third design
                if ($current_posts == 1 || in_array($count + ($paged - 1) * $posts_per_page, [6, 11, 16, 21, 26, 31, 36])) {
            ?>
                    <div class="col-lg-8 col-md-6 p-0 pe-1">
                        <a class="text_d_nonr" href="<?php the_permalink(); ?>"><img class="b_li_peronimg w-100 img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                    </div>
                    <div class="col-lg-4 md_col_center col-md-6 py-lg-0 py-md-4 d-flex align-items-center justify-content-center date_col_1">
                        <div class="date_main_dev">
                            <span class="d-inline-block mb-4"><?php the_time('M j, Y'); ?></span>
                            <a class="text_d_nonr" href="<?php the_permalink(); ?>"> <h3 class="mb-3"><?php the_title(); ?></h3></a>
                            <p class="mb-0"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                        </div>
                    </div>
                <?php
                } elseif ($count == 1) {
                    // First design
                ?>
                    <div class="col-lg-1 red_text_cil position-relative">
                        <h2 class="b_red_text position-absolute text-uppercase">Blogs</h2>
                    </div>
                    <div class="col-lg-3 col-md-6 p-md-0 py-lg-0 py-md-4 border-start border-end d-flex justify-content-center align-items-center date_col">
                        <div class="date_main_dev">
                            <span class="d-inline-block mb-4"><?php the_time('M j, Y'); ?></span>
                            <a class="text_d_nonr" href="<?php the_permalink(); ?>"><h3 class="mb-3"><?php the_title(); ?></h3></a>
                            <p class="mb-0"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                        </div>
                    </div>
                <?php
                } elseif ($count == 2) {
                    // Second design
                ?>
                    <div class="col-md-4 col-md-6 d-flex align-items-center justify-content-center date_col">
                        <div class="date_main_dev me-3">
                            <span class="d-inline-block mb-4"><?php the_time('M j, Y'); ?></span>
                            <a class="text_d_nonr" href="<?php the_permalink(); ?>"><h3 class="mb-3"><?php the_title(); ?></h3></a>
                            <p class="mb-0"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 p-md-0 blogImg">
                        <a class="text_d_nonr" href="<?php the_permalink(); ?>"><img class="b_img img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                    </div>
                <?php
                } elseif ($count == 3) {
                    // Third design again for another example (this may be removed if third design is already above)
                ?>
                    <div class="col-lg-8 col-md-6 p-0 pe-1">
                        <a class="text_d_nonr" href="<?php the_permalink(); ?>"><img class="b_li_peronimg w-100 img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                    </div>
                    <div class="col-lg-4 md_col_center col-md-6 py-lg-0 py-md-4 d-flex align-items-center justify-content-center date_col_1">
                        <div class="date_main_dev">
                            <span class="d-inline-block mb-4"><?php the_time('M j, Y'); ?></span>
                            <a class="text_d_nonr" href="<?php the_permalink(); ?>"><h3 class="mb-3"><?php the_title(); ?></h3></a>
                            <p class="mb-0"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                        </div>
                    </div>
                <?php
                } elseif ($count == 4) {
                    // Fourth design
                ?>
                    <div class="col-md-1 d-lg-block d-none position-relative"></div>
                    <div class="col-md-3 py-lg-0 py-md-4 border-start border-end d-flex justify-content-center align-items-center date_col">
                        <div class="date_main_dev">
                            <span class="d-inline-block mb-4"><?php the_time('M j, Y'); ?></span>
                            <a class="text_d_nonr" href="<?php the_permalink(); ?>"><h3 class="mb-3"><?php the_title(); ?></h3></a>
                            <p class="mb-0"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                        </div>
                    </div>
                <?php
                } elseif ($count == 5) {
                    // Fifth design
                ?>
                    <div class="col-md-4 py-lg-0 py-md-4 d-flex align-items-center justify-content-center date_col">
                        <div class="date_main_dev me-3">
                            <span class="d-inline-block mb-4"><?php the_time('M j, Y'); ?></span>
                            <a class="text_d_nonr" href="<?php the_permalink(); ?>"><h3 class="mb-3"><?php the_title(); ?></h3></a>
                            <p class="mb-0"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 p-md-0 blogImg">
                        <a class="text_d_nonr" href="<?php the_permalink(); ?>"><img class="b_img img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <br>
        <!-- Pagination -->
        <?php
        echo '<div class="pagination justify-content-center">';
        echo paginate_links(array(
            'total' => $custom_posttype_blogs->max_num_pages,
            'current' => max(1, get_query_var('paged')),
        ));
        echo '</div>';

        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>
</section>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>

<?php endwhile;
endif; ?>
<section class="mb-md-0 mb-4">
    <div class="container-fluid py-md-5">
        <div class="row">
            <div class="col-md-12 mbl_scr">
                <ul class="d-flex mb-1 justify-content-lg-start justify-content-center list-unstyled web_type_ul flex-wrap p-0 gap-3 scroll_left">
                    <li class="text-nowrap">
                        <h1 class="">
                            <?php $service_provide_2 = get_field('service_provide_2');
                            if ($service_provide_2) : ?>
                                <?php echo $service_provide_2['service_1']; ?>
                            <?php endif; ?>
                            <span class="ps-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_2001_234)">
                                        <path d="M12.0089 0C12.0463 0.256532 12.082 0.512272 12.1209 0.768804C12.5338 3.46397 13.4913 5.93191 15.231 8.06097C16.5037 9.61837 18.0798 10.7759 19.9536 11.5257C21.0962 11.9826 22.253 12.3032 23.9998 12.4632C23.9466 12.4861 23.918 12.502 23.8879 12.5107C23.8561 12.5202 23.8228 12.5218 23.7902 12.5281C23.0049 12.673 22.207 12.7704 21.436 12.9715C18.7039 13.6841 16.4958 15.1892 14.8173 17.4561C13.8304 18.7886 13.1309 20.2645 12.6529 21.8488C12.3591 22.8234 12.1503 23.8139 12.0391 24.8258C12.0328 24.8844 12.0153 24.9422 12.0026 25.0008L11.943 24.9992C11.9288 24.9066 11.9129 24.8139 11.901 24.7213C11.5103 21.6857 10.475 18.92 8.43201 16.5899C7.03141 14.9929 5.30766 13.867 3.28774 13.194C2.36909 12.8876 1.4298 12.6825 0.467479 12.574C0.311062 12.5566 0.15544 12.5249 -0.000976562 12.4687C0.240397 12.4378 0.480977 12.4038 0.72235 12.3753C1.79742 12.2494 2.83834 11.9842 3.84512 11.5922C5.59905 10.9097 7.11161 9.87332 8.36611 8.47189C9.75401 6.92162 10.6933 5.12589 11.2936 3.1441C11.5905 2.1639 11.8001 1.16627 11.9105 0.14806C11.9161 0.0989707 11.9327 0.0514648 11.9446 0.00395883C11.9653 0.00316706 11.9867 0.0023753 12.0074 0.000791766L12.0089 0Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2001_234">
                                            <rect width="24" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                    </li>
                    <li class="text-nowrap">
                        <h1 class="">
                            <?php $service_provide_2 = get_field('service_provide_2');
                            if ($service_provide_2) : ?>
                                <?php echo $service_provide_2['service_2']; ?>
                            <?php endif; ?>
                            <span class="ps-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_2001_234)">
                                        <path d="M12.0089 0C12.0463 0.256532 12.082 0.512272 12.1209 0.768804C12.5338 3.46397 13.4913 5.93191 15.231 8.06097C16.5037 9.61837 18.0798 10.7759 19.9536 11.5257C21.0962 11.9826 22.253 12.3032 23.9998 12.4632C23.9466 12.4861 23.918 12.502 23.8879 12.5107C23.8561 12.5202 23.8228 12.5218 23.7902 12.5281C23.0049 12.673 22.207 12.7704 21.436 12.9715C18.7039 13.6841 16.4958 15.1892 14.8173 17.4561C13.8304 18.7886 13.1309 20.2645 12.6529 21.8488C12.3591 22.8234 12.1503 23.8139 12.0391 24.8258C12.0328 24.8844 12.0153 24.9422 12.0026 25.0008L11.943 24.9992C11.9288 24.9066 11.9129 24.8139 11.901 24.7213C11.5103 21.6857 10.475 18.92 8.43201 16.5899C7.03141 14.9929 5.30766 13.867 3.28774 13.194C2.36909 12.8876 1.4298 12.6825 0.467479 12.574C0.311062 12.5566 0.15544 12.5249 -0.000976562 12.4687C0.240397 12.4378 0.480977 12.4038 0.72235 12.3753C1.79742 12.2494 2.83834 11.9842 3.84512 11.5922C5.59905 10.9097 7.11161 9.87332 8.36611 8.47189C9.75401 6.92162 10.6933 5.12589 11.2936 3.1441C11.5905 2.1639 11.8001 1.16627 11.9105 0.14806C11.9161 0.0989707 11.9327 0.0514648 11.9446 0.00395883C11.9653 0.00316706 11.9867 0.0023753 12.0074 0.000791766L12.0089 0Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2001_234">
                                            <rect width="24" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                    </li>
                    <li class="text-nowrap">
                        <h1 class="">
                            <?php $service_provide_2 = get_field('service_provide_2');
                            if ($service_provide_2) : ?>
                                <?php echo $service_provide_2['service_3']; ?>
                            <?php endif; ?>
                            <span class="ps-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_2001_234)">
                                        <path d="M12.0089 0C12.0463 0.256532 12.082 0.512272 12.1209 0.768804C12.5338 3.46397 13.4913 5.93191 15.231 8.06097C16.5037 9.61837 18.0798 10.7759 19.9536 11.5257C21.0962 11.9826 22.253 12.3032 23.9998 12.4632C23.9466 12.4861 23.918 12.502 23.8879 12.5107C23.8561 12.5202 23.8228 12.5218 23.7902 12.5281C23.0049 12.673 22.207 12.7704 21.436 12.9715C18.7039 13.6841 16.4958 15.1892 14.8173 17.4561C13.8304 18.7886 13.1309 20.2645 12.6529 21.8488C12.3591 22.8234 12.1503 23.8139 12.0391 24.8258C12.0328 24.8844 12.0153 24.9422 12.0026 25.0008L11.943 24.9992C11.9288 24.9066 11.9129 24.8139 11.901 24.7213C11.5103 21.6857 10.475 18.92 8.43201 16.5899C7.03141 14.9929 5.30766 13.867 3.28774 13.194C2.36909 12.8876 1.4298 12.6825 0.467479 12.574C0.311062 12.5566 0.15544 12.5249 -0.000976562 12.4687C0.240397 12.4378 0.480977 12.4038 0.72235 12.3753C1.79742 12.2494 2.83834 11.9842 3.84512 11.5922C5.59905 10.9097 7.11161 9.87332 8.36611 8.47189C9.75401 6.92162 10.6933 5.12589 11.2936 3.1441C11.5905 2.1639 11.8001 1.16627 11.9105 0.14806C11.9161 0.0989707 11.9327 0.0514648 11.9446 0.00395883C11.9653 0.00316706 11.9867 0.0023753 12.0074 0.000791766L12.0089 0Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2001_234">
                                            <rect width="24" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                    </li>
                    <li class="text-nowrap">
                        <h1 class="">
                            <?php $service_provide_2 = get_field('service_provide_2');
                            if ($service_provide_2) : ?>
                                <?php echo $service_provide_2['service_4']; ?>
                            <?php endif; ?>
                            <span class="ps-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_2001_234)">
                                        <path d="M12.0089 0C12.0463 0.256532 12.082 0.512272 12.1209 0.768804C12.5338 3.46397 13.4913 5.93191 15.231 8.06097C16.5037 9.61837 18.0798 10.7759 19.9536 11.5257C21.0962 11.9826 22.253 12.3032 23.9998 12.4632C23.9466 12.4861 23.918 12.502 23.8879 12.5107C23.8561 12.5202 23.8228 12.5218 23.7902 12.5281C23.0049 12.673 22.207 12.7704 21.436 12.9715C18.7039 13.6841 16.4958 15.1892 14.8173 17.4561C13.8304 18.7886 13.1309 20.2645 12.6529 21.8488C12.3591 22.8234 12.1503 23.8139 12.0391 24.8258C12.0328 24.8844 12.0153 24.9422 12.0026 25.0008L11.943 24.9992C11.9288 24.9066 11.9129 24.8139 11.901 24.7213C11.5103 21.6857 10.475 18.92 8.43201 16.5899C7.03141 14.9929 5.30766 13.867 3.28774 13.194C2.36909 12.8876 1.4298 12.6825 0.467479 12.574C0.311062 12.5566 0.15544 12.5249 -0.000976562 12.4687C0.240397 12.4378 0.480977 12.4038 0.72235 12.3753C1.79742 12.2494 2.83834 11.9842 3.84512 11.5922C5.59905 10.9097 7.11161 9.87332 8.36611 8.47189C9.75401 6.92162 10.6933 5.12589 11.2936 3.1441C11.5905 2.1639 11.8001 1.16627 11.9105 0.14806C11.9161 0.0989707 11.9327 0.0514648 11.9446 0.00395883C11.9653 0.00316706 11.9867 0.0023753 12.0074 0.000791766L12.0089 0Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2001_234">
                                            <rect width="24" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                    </li>
                </ul>
                <ul class="d-flex justify-content-lg-end justify-content-center list-unstyled web_type_ul flex-wrap p-0 gap-3 scroll_right">
                    <li class="text-nowrap">
                        <h1 class="">
                            <?php $service_provide_2 = get_field('service_provide_2');
                            if ($service_provide_2) : ?>
                                <?php echo $service_provide_2['service_5']; ?>
                            <?php endif; ?>
                            <span class="ps-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_2001_234)">
                                        <path d="M12.0089 0C12.0463 0.256532 12.082 0.512272 12.1209 0.768804C12.5338 3.46397 13.4913 5.93191 15.231 8.06097C16.5037 9.61837 18.0798 10.7759 19.9536 11.5257C21.0962 11.9826 22.253 12.3032 23.9998 12.4632C23.9466 12.4861 23.918 12.502 23.8879 12.5107C23.8561 12.5202 23.8228 12.5218 23.7902 12.5281C23.0049 12.673 22.207 12.7704 21.436 12.9715C18.7039 13.6841 16.4958 15.1892 14.8173 17.4561C13.8304 18.7886 13.1309 20.2645 12.6529 21.8488C12.3591 22.8234 12.1503 23.8139 12.0391 24.8258C12.0328 24.8844 12.0153 24.9422 12.0026 25.0008L11.943 24.9992C11.9288 24.9066 11.9129 24.8139 11.901 24.7213C11.5103 21.6857 10.475 18.92 8.43201 16.5899C7.03141 14.9929 5.30766 13.867 3.28774 13.194C2.36909 12.8876 1.4298 12.6825 0.467479 12.574C0.311062 12.5566 0.15544 12.5249 -0.000976562 12.4687C0.240397 12.4378 0.480977 12.4038 0.72235 12.3753C1.79742 12.2494 2.83834 11.9842 3.84512 11.5922C5.59905 10.9097 7.11161 9.87332 8.36611 8.47189C9.75401 6.92162 10.6933 5.12589 11.2936 3.1441C11.5905 2.1639 11.8001 1.16627 11.9105 0.14806C11.9161 0.0989707 11.9327 0.0514648 11.9446 0.00395883C11.9653 0.00316706 11.9867 0.0023753 12.0074 0.000791766L12.0089 0Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2001_234">
                                            <rect width="24" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                    </li>
                    <li class="text-nowrap">
                        <h1 class="">
                            <?php $service_provide_2 = get_field('service_provide_2');
                            if ($service_provide_2) : ?>
                                <?php echo $service_provide_2['service_6']; ?>
                            <?php endif; ?>
                            <span class="ps-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_2001_234)">
                                        <path d="M12.0089 0C12.0463 0.256532 12.082 0.512272 12.1209 0.768804C12.5338 3.46397 13.4913 5.93191 15.231 8.06097C16.5037 9.61837 18.0798 10.7759 19.9536 11.5257C21.0962 11.9826 22.253 12.3032 23.9998 12.4632C23.9466 12.4861 23.918 12.502 23.8879 12.5107C23.8561 12.5202 23.8228 12.5218 23.7902 12.5281C23.0049 12.673 22.207 12.7704 21.436 12.9715C18.7039 13.6841 16.4958 15.1892 14.8173 17.4561C13.8304 18.7886 13.1309 20.2645 12.6529 21.8488C12.3591 22.8234 12.1503 23.8139 12.0391 24.8258C12.0328 24.8844 12.0153 24.9422 12.0026 25.0008L11.943 24.9992C11.9288 24.9066 11.9129 24.8139 11.901 24.7213C11.5103 21.6857 10.475 18.92 8.43201 16.5899C7.03141 14.9929 5.30766 13.867 3.28774 13.194C2.36909 12.8876 1.4298 12.6825 0.467479 12.574C0.311062 12.5566 0.15544 12.5249 -0.000976562 12.4687C0.240397 12.4378 0.480977 12.4038 0.72235 12.3753C1.79742 12.2494 2.83834 11.9842 3.84512 11.5922C5.59905 10.9097 7.11161 9.87332 8.36611 8.47189C9.75401 6.92162 10.6933 5.12589 11.2936 3.1441C11.5905 2.1639 11.8001 1.16627 11.9105 0.14806C11.9161 0.0989707 11.9327 0.0514648 11.9446 0.00395883C11.9653 0.00316706 11.9867 0.0023753 12.0074 0.000791766L12.0089 0Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2001_234">
                                            <rect width="24" height="25" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>