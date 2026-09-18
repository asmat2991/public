<?php get_header(); ?>
<?php
while (have_posts()) : the_post();
  get_template_part('template-parts/post/content', get_post_format());
endwhile;
?>
<div class="clear_div"></div>
<style>
 .main_content_blog strong{font-size: 18px;}.main_content_blog strong, .main_content_blog b {font-weight: 500 !important;font-family: 'Inter';}.blothoth p{text-align:justify}.related_img{height:fit-content;object-fit:cover}.single_thum{width:50%}@media(max-width:767px){.related_img{height: 30vh;object-fit:cover}@supports (-webkit-touch-callout: none) {.collaborate_img {height: auto !important;max-height: 30vh;object-fit: contain;}} .single_thum{width:100%}}@media(max-width:991px){.single_thum{width:100%}}.navbar_1{position:unset;width:100%;z-index:12323344;padding-left:2.5rem!important;padding-right:2.5rem!important}.news_link{padding:0!important;border-radius:0!important;font-size:unset!important;letter-spacing:unset!important;border:none!important;text-decoration:none!important}.menu,.menu_c,.menu_ul li{font-size:14px;letter-spacing:.01em;color:#000}.nav_ul_1{background-color:#000;border-radius:30px;padding:2px;margin-top:-17px;margin-left:3px}.logo_ul_1,.logo_ul_2{width:37%}.canvas_logo,.footer_logo,.logo_top{width:144px}.menu{top:30%;left:44%}.offcanvas{z-index:11221323234}.menu_c{top:24%;left:18%}.menu_ul{width:303px;top:-30%!important;margin-bottom:0}.menu_ul li{text-align:center;width:64px}.baner_contaner_b h1,.baner_contaner_b p,.blothoth h2,.blothoth p,.main_p,.ness_post h2,.ness_post p,.web_type_ul h1{letter-spacing:-.02em}.c_ul_1{width:63%!important}.baner_contaner_b{height:fit-content;margin-top:8rem}.baner_contaner_b h1{font-size:72px;font-weight:300;line-height:61px;color:#000;margin-bottom:2.3rem}.baner_contaner_b p,.n_date{font-size:15px;line-height:18.15px}.n_flower_img{right:6%;top:44%;width:79px}.titly_img{top:-31.2%;left:26%}.web_type_ul h1{font-size:40px;font-weight:400;line-height:60px}.blothoth h2{font-size:39px;font-weight:700;line-height:47.2px;color:#000}.blothoth p{font-size:17.4px;line-height:21.78px;color:#7e7e7e}.btn_round,.main_p,.n_date,.page-numbers{color:#000}.blothoth a,.ness_post a{padding:4px 22px;border-radius:140px 0 0;font-size:18px;letter-spacing:-.01em;border:1px solid #000}.ness_post h2{font-size:24px;font-weight:500;line-height:29.05px;color:#000}.ness_post p{font-size:18px;line-height:21.78px;color:#7e7e7e}.post_border{border-top:2px solid #0000008c}.main_p{font-size:14px;line-height:16.94px}.f_text_main{width:fit-content;left:50%;transform:translateX(-53%)}.circle_giff{width:142px;height:142px;margin-left:auto}.btn_round{padding:7px,12px;border-radius:140px 0 0;border:1px solid #000;font-size:12px;line-height:12px;letter-spacing:-.01em;width:fit-content}@media (max-width:1400px){.contaner_width{max-width:100%;width:90%}.baner_contaner_b{height:fit-content;padding-left:.5rem;padding-right:.5rem}}@media(max-width:1300px){.web_type_ul h1{font-size:34px}.btn_round{font-size:11px}}@media (max-width:1200px){.navbar_1{padding-left:1.2rem!important;padding-right:1.2rem!important}.navbar-light .navbar-toggler{border:0}.menu,.servise_img{display:none}.baner_contaner_b{height:fit-content;padding-left:.5rem;padding-right:.5rem}.baner_contaner_b h1{line-height:75px}.n_flower_img{right:50%;top:18%;width:80px;transform:translateX(40px)}.titly_img{left:45%;right:auto}}.lg_line{display:none}@media (max-width:767px){.mbl_scr{overflow-x:auto}.lg_line{display:block}footer .contaner_width{width:95%;margin-bottom:0!important}.web_type_ul{display:flex!important;flex-wrap:nowrap!important;justify-content:start!important}.blothoth h2,.ness_post h2{font-size:22px;font-weight:600;line-height:28.05px;letter-spacing:-.02em;color:#000}.mbl-p,.navbar-light .navbar-toggler{padding:0}.blothoth,footer .col-md-5{order:2}.contaner_width{width:100%;padding-left:8px;padding-right:8px}.baner_contaner_b{height:fit-content;margin-top:1rem;padding-left:.5rem;padding-right:.5rem}.web_type_ul h1{font-size:28px;line-height:34px;font-weight:500}.baner_contaner_b h1{font-size:7.9vw;line-height:10vw;font-weight:400;margin-bottom: 3.5vw;}.baner_contaner_b p{font-size:19px;font-weight:400;line-height:22px}.baner_contaner_b p br,.blothoth p br{display:none}.n_flower_img{top:21%;display: none !important;}.blothoth p{font-size:14.4px}.blothoth a,.ness_post a,footer .btn{font-size:15px}.ness_post p{font-size:14px;line-height:17.78px}footer .client_box h1{font-size:32px;line-height:41px;letter-spacing:-.02em}footer .col-md-4:nth-child(5){order:3;height:30px}footer .col-md-4:nth-child(4){order:4}footer .col-md-7{order:6;padding-right:20px}footer .col-md-4:nth-child(6){order:6}footer .col-md-12:last-child{order:7}.f_text_main{left:79%;top:-114px}.circle_giff{width:117px;height:117px}.right_img{width:86px}.main_p{font-size:14px;line-height:16.94px}.navbar_1 .container-fluid{align-items:flex-start}.navbar-toggler:focus{box-shadow:0 0}}.page-numbers:hover{color:unset}.page-numbers{padding:4px 10px}.current{background:#e6553a!important;color:#fff!important}
</style>
<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">-->

<div class="clear_div"></div>
<!-- banner start -->
<section class="pb-md-5 pb-3">
  <div class="container first_section contaner_width position-relative">
    <img class="img-fluid position-absolute n_flower_img" src="<?php echo get_template_directory_uri(); ?>/css/img/NewsImgector.png" alt="">
    <div class="row baner_contaner_b">
      <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
        <div class="">
          <h1 class="mt-4"><?php the_title(); ?></h1>
          <p class="mb-1">
            <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner end -->

<div class="row w-100 m-0" style="overflow: hidden;">

  <section class="mbl-p">
    <div class="container position-relative mt-5 pt-5  border-top contaner_width">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 39 39" fill="none" class="position-absolute titly_img">
        <path d="M19.1823 32.4364C19.0146 30.2481 18.8704 28.1935 18.6893 26.1422C18.6625 25.8515 18.4545 25.5775 18.3304 25.2936C18.0352 25.5141 17.6059 25.6677 17.4617 25.9617C15.845 29.2258 13.8661 32.2493 11.2767 34.8185C9.55608 36.5257 7.66772 38.0458 5.25277 38.7641C2.91497 39.459 0.775051 38.5971 0.161251 36.4622C-0.234533 35.0891 0.151188 33.6859 0.744864 32.4097C2.15023 29.4029 4.41425 27.0977 7.08747 25.2201C9.10663 23.8035 11.2834 22.6041 13.3865 21.3045C13.5005 21.2344 13.5944 21.1341 13.6984 21.0439C13.5307 20.3022 12.937 20.2421 12.3937 20.1887C10.2537 19.9815 8.10711 19.8078 5.96384 19.624C5.77601 19.6073 5.58483 19.604 5.39365 19.5572C8.16078 18.8824 11.1258 19.3534 14.0036 18.1674C13.6749 17.8968 13.5508 17.7431 13.3898 17.6663C10.4583 16.2497 7.79183 14.4156 5.33663 12.3141C3.1028 10.4065 1.09704 8.23822 0.355788 5.27817C0.121001 4.34606 0.14448 3.28699 0.318893 2.33149C0.573805 0.918287 1.76116 0.116469 3.20677 0.0162418C5.35675 -0.134099 7.13442 0.777969 8.76787 1.97736C12.6519 4.83049 15.2882 8.6859 17.4583 12.9088C17.6227 13.2295 18.0587 13.4099 18.3673 13.6572C18.4948 13.3398 18.7094 13.0291 18.7363 12.705C18.9006 10.5134 19.0281 8.3184 19.1656 6.12677C19.2494 6.11674 19.3366 6.10672 19.4205 6.10004C19.8062 8.68256 20.1953 11.2617 20.581 13.8443C20.685 13.8643 20.7923 13.8844 20.8963 13.9077C21.4262 12.9823 21.9461 12.0535 22.4895 11.1381C24.2571 8.15804 26.226 5.32829 28.8623 3.02974C30.214 1.8504 31.6797 0.771287 33.4205 0.30356C34.4334 0.0329463 35.6074 -0.00714462 36.627 0.216696C37.8479 0.483969 38.6831 1.3927 38.8642 2.74242C39.1795 5.06436 38.2538 6.9954 36.9423 8.78947C34.316 12.3743 30.7674 14.8465 26.9236 16.958C26.3232 17.2887 25.7228 17.6262 24.891 18.0872C27.6984 19.3067 30.5595 18.889 33.4104 19.5439C30.9754 19.7944 28.7315 20.0216 26.4876 20.2555C26.2662 20.2789 26.018 20.2722 25.8369 20.3757C25.6356 20.4893 25.431 20.6931 25.3673 20.9036C25.3338 21.0105 25.582 21.2678 25.753 21.3546C28.2652 22.6442 30.6467 24.1343 32.8335 25.9183C35.2149 27.856 37.2945 30.061 38.4785 32.9309C39.0822 34.3942 39.2969 35.9945 38.3779 37.4311C37.1771 39.3087 35.0003 39.2218 33.2662 38.5804C29.684 37.254 27.1618 34.6381 25.0285 31.6313C23.65 29.6869 22.4694 27.6021 21.1915 25.5809C21.0774 25.4005 20.9265 25.2468 20.6145 24.8592C20.4904 25.4539 20.3697 25.8281 20.3395 26.2056C20.1785 28.277 20.041 30.3517 19.1756 32.4398L19.1823 32.4364Z" fill="black" />
      </svg>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-9 mb-md-0 mb-4">
      <div class="col-lg-12 col-md-12">
      <img class=" w-100 single_thum img-fluid p-0 mb-md-0 mb-4 ms-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <div class="post_border pt-4 lg_line"></div>
      <div class="n_date mb-4 mt-md-5 mt-2 d-flex job_apply_d_2 a2a_kit a2a_kit_size_32 a2a_default_style socail_share">
        <a class="d-flex align-items-center text-decoration-none a2a_button_linkedin all_sitebar_icon " target="_blank" rel="nofollow noopener" href="a2a_button_linkdin all_sitebar_icon">
            <span class="ms-lg-0 ms-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                    <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_2001_158)"></circle>
                    <g clip-path="url(#clip0_2001_158)">
                        <path d="M11.2194 22V12.6589H12.9793V22.001H11.2194V22ZM15.4979 21.9928V12.6568H17.0547L17.0839 12.9918L17.7211 13.2896L17.8035 13.2286C17.8557 13.1893 17.901 13.1562 17.9452 13.1221C18.5341 12.6713 19.2748 12.4232 20.0337 12.4232C20.695 12.4232 21.3171 12.6082 21.8337 12.9577C22.5714 13.4571 23.0237 14.2314 23.2186 15.3253C23.2779 15.6571 23.3081 15.987 23.3101 16.3064C23.3171 17.8159 23.3161 19.3502 23.3151 20.8348V21.9897H21.5261C21.5261 21.5647 21.5282 21.1388 21.5292 20.7139C21.5332 19.4122 21.5372 18.0671 21.5312 16.7427C21.5292 16.3013 21.49 15.9187 21.4106 15.5734C21.1884 14.6067 20.4256 13.9575 19.513 13.9575C18.9864 13.9575 18.4708 14.1808 18.0608 14.585C17.5653 15.074 17.315 15.7068 17.318 16.4667C17.322 17.8056 17.322 19.1672 17.321 20.4843V21.9917H15.4999L15.4979 21.9928ZM12.0657 11.2383C11.4637 11.2383 11.0054 10.7659 10.9993 10.1404C10.9963 9.8271 11.1049 9.53969 11.3039 9.32877C11.5029 9.11993 11.7782 9.0031 12.0797 9H12.0928C12.732 9 13.1652 9.45801 13.1692 10.1404C13.1712 10.4495 13.0707 10.7183 12.8788 10.9168C12.6798 11.1236 12.3903 11.2373 12.0667 11.2383H12.0657Z" fill="#EC310D"></path>
                        <path d="M15.4985 21.9928V12.6569H17.0553L17.0845 12.9919L17.7217 13.2896L17.8041 13.2286C17.8564 13.1893 17.9016 13.1562 17.9458 13.1221C18.5348 12.6713 19.2755 12.4232 20.0343 12.4232C20.6956 12.4232 21.3177 12.6083 21.8343 12.9577C22.572 13.4571 23.0243 14.2315 23.2193 15.3253C23.2786 15.6572 23.3087 15.987 23.3107 16.3065C23.3178 17.8159 23.3168 19.3502 23.3158 20.8349V21.9897H21.5268C21.5268 21.5648 21.5288 21.1388 21.5298 20.7139C21.5338 19.4122 21.5378 18.0672 21.5318 16.7428C21.5298 16.3013 21.4906 15.9188 21.4112 15.5734C21.1891 14.6068 20.4263 13.9575 19.5137 13.9575C18.987 13.9575 18.4715 14.1808 18.0614 14.5851C17.5659 15.0741 17.3157 15.7068 17.3187 16.4667C17.3227 17.8056 17.3227 19.1672 17.3217 20.4844V21.9918H15.5005L15.4985 21.9928Z" fill="#EC310D"></path>
                        <path d="M12.98 12.6589H11.2202V22.0011H12.98V12.6589Z" fill="#EC310D"></path>
                        <path d="M12.0657 11.2383C11.4637 11.2383 11.0054 10.7659 10.9993 10.1404C10.9963 9.8271 11.1049 9.53969 11.3039 9.32877C11.5029 9.11993 11.7782 9.0031 12.0797 9H12.0928C12.732 9 13.1652 9.45801 13.1692 10.1404C13.1712 10.4495 13.0707 10.7183 12.8788 10.9168C12.6798 11.1236 12.3903 11.2373 12.0667 11.2383H12.0657Z" fill="#EC310D"></path>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_2001_158" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EC310D"></stop>
                            <stop offset="1" stop-color="#D1D1D1"></stop>
                        </linearGradient>
                        <clipPath id="clip0_2001_158">
                            <rect width="12.3158" height="13" fill="white" transform="translate(11 9)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </span>
            <span class="ms-2 icon text-dark">Linkedin</span>
        </a>
        <a class="d-flex align-items-center text-decoration-none ms-md-2 a2a_button_facebook all_sitebar_icon" target="_blank" rel="nofollow noopener">
            <span class="ms-md-3 ms-2">
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
            <span class="ms-2 icon text-dark">Facebook</span>
        </a>
        <a class="d-flex align-items-center text-decoration-none ms-md-0 ms-md-2 a2a_button_whatsapp" target="_blank" rel="nofollow noopener">
            <span class="ms-2">
                
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 34 34" fill="none">
                      <path d="M17.1758 33C26.0123 33 33.1758 25.8366 33.1758 17C33.1758 8.16344 26.0123 1 17.1758 1C8.33923 1 1.17578 8.16344 1.17578 17C1.17578 25.8366 8.33923 33 17.1758 33Z" fill="white" stroke="url(#paint0_linear_14_17)"/>
                      <g clip-path="url(#clip0_14_17)">
                      <path d="M22.601 11.3261C21.8676 10.5856 20.9941 9.9985 20.0314 9.59915C19.0688 9.1998 18.0362 8.99614 16.994 9.00006C12.627 9.00006 9.068 12.5581 9.064 16.9261C9.064 18.3251 9.43 19.6861 10.121 20.8911L9 25.0001L13.204 23.8981C14.3665 24.5323 15.6698 24.8641 16.994 24.8631H16.998C21.366 24.8631 24.924 21.3051 24.928 16.9331C24.9289 15.8911 24.7237 14.8593 24.3241 13.897C23.9246 12.9347 23.3396 12.061 22.601 11.3261ZM16.994 23.5211C15.8132 23.5201 14.6542 23.2024 13.638 22.6011L13.398 22.4571L10.904 23.1111L11.57 20.6781L11.414 20.4271C10.7538 19.3774 10.4046 18.1621 10.407 16.9221C10.407 13.2961 13.364 10.3381 16.998 10.3381C17.8637 10.3365 18.7212 10.5063 19.521 10.8377C20.3208 11.1692 21.0471 11.6556 21.658 12.2691C22.2709 12.8802 22.7568 13.6066 23.0877 14.4064C23.4186 15.2062 23.5879 16.0635 23.586 16.9291C23.582 20.5681 20.625 23.5211 16.994 23.5211ZM20.609 18.5871C20.412 18.4881 19.439 18.0091 19.256 17.9411C19.074 17.8761 18.941 17.8421 18.811 18.0401C18.678 18.2371 18.298 18.6861 18.184 18.8151C18.07 18.9481 17.952 18.9631 17.754 18.8651C17.557 18.7651 16.918 18.5571 16.162 17.8801C15.572 17.3551 15.177 16.7051 15.059 16.5081C14.945 16.3101 15.048 16.2041 15.147 16.1051C15.234 16.0171 15.344 15.8731 15.443 15.7591C15.543 15.6451 15.576 15.5611 15.641 15.4291C15.706 15.2951 15.675 15.1811 15.626 15.0821C15.576 14.9831 15.181 14.0061 15.014 13.6121C14.854 13.2231 14.691 13.2771 14.569 13.2721C14.455 13.2651 14.322 13.2651 14.189 13.2651C14.0886 13.2676 13.9898 13.2909 13.8987 13.3334C13.8077 13.3759 13.7264 13.4367 13.66 13.5121C13.478 13.7101 12.969 14.1891 12.969 15.1661C12.969 16.1431 13.679 17.0821 13.779 17.2151C13.877 17.3481 15.173 19.3471 17.162 20.2071C17.632 20.4121 18.002 20.5331 18.291 20.6251C18.766 20.7771 19.195 20.7541 19.537 20.7051C19.917 20.6471 20.708 20.2251 20.875 19.7621C21.039 19.2981 21.039 18.9021 20.989 18.8191C20.94 18.7351 20.807 18.6861 20.609 18.5871Z" fill="#EC310D"/>
                      </g>
                      <defs>
                      <linearGradient id="paint0_linear_14_17" x1="30.8523" y1="16.874" x2="12.0597" y2="16.8073" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#EC310D"/>
                      <stop offset="1" stop-color="#D1D1D1"/>
                      </linearGradient>
                      <clipPath id="clip0_14_17">
                      <rect width="16" height="16" fill="white" transform="translate(9 9)"/>
                      </clipPath>
                      </defs>
                      </svg>
            </span>
            <span class="ms-2 icon text-dark">WhatsApp</span>
        </a>
<script async="" src="https://static.addtoany.com/menu/page.js"></script>

      </div>
      <a class="news_link" href="<?php the_permalink(); ?>">
        <div class="blothoth">
          <h2 class="mb-4">
            <?php the_title(); ?>
          </h2>
        </div>
      </a>
      <div class="mb-4 main_content_blog">
        <?php the_content(); ?>
      </div>
      </div>
    </div>
    <div class="col-md-3">
    <?php
    // Query to fetch all blogs except the current one
    $args = array(
        'post_type'           => 'blog',
        'posts_per_page'      => 3, // Limit the number of posts displayed
        'post__not_in'        => array(get_the_ID()), // Exclude the current post
        'ignore_sticky_posts' => 1, // Ignore sticky posts
    );
    $related_blog = new WP_Query($args);

    // Check if there are posts
    if ($related_blog->have_posts()) :
    ?>
        <div class="sticky-md-top top-md-100px top-sm-10px" style="z-index: auto">
          <h2 class="mb-md-4 mb-2" style="margin-top: -8px;">Related Blogs</h2>
            <div class="row pt-md-0 pt-3 w-100 m-0">
                <?php
                // Loop through the posts
                while ($related_blog->have_posts()) : 
                    $related_blog->the_post();
                ?>
                    <div class="col-lg-12 col-md-12 mb-md-0 mb-4 pb-md-4 pb-2 ness_post px-0">
                        <a class="p-0" style="border: none;" href="<?php the_permalink(); ?>">
                            <img class="w-100 related_img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                        </a>
                        <div class="post_border mt-4 mb-3"></div>
                        <a class="news_link" href="<?php the_permalink(); ?>">
                            <h2 class="mb-md-4 mb-2">
                                <?php the_title(); ?>
                            </h2>
                        </a>
                    </div>
                <?php 
                endwhile; 
                ?>
            </div>
        </div>
    <?php 
        else : 
    ?>
        <p>No blogs found.</p>
    <?php 
        endif;

        // Reset post data after the query
        wp_reset_postdata();
    ?>
</div>

  </div>
</div>

</section>


</div>


<?php get_footer(); ?>