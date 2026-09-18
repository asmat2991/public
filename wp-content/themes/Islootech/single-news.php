<?php get_header(); ?>
<?php
while (have_posts()) : the_post();
  get_template_part('template-parts/post/content', get_post_format());
endwhile;
?>
<div class="clear_div"></div>
<style>
  @media(min-width:1300px) and (max-width:1400px) {.baner_contaner_b h1{font-size: 42px !important;}}
  .blothoth p {
    text-align: justify;
  }
</style>
<style>
.single_thum{width:50%;}@media(max-width: 767px){.single_thum{width: 100%;}}@media(max-width: 991px){.single_thum{width: 100%;}}.navbar_1{position:absolute;width:100%;z-index:12323344;padding-left:2.5rem!important;padding-right:2.5rem!important}.news_link{padding:0!important;border-radius:0!important;font-size:unset!important;letter-spacing:unset!important;border:none!important;text-decoration:none!important}.menu,.menu_c,.menu_ul li{font-size:14px;letter-spacing:.01em;color:#000}.nav_ul_1{background-color:#000;border-radius:30px;padding:2px;margin-top:-17px;margin-left:3px}.logo_ul_1,.logo_ul_2{width:37%}.canvas_logo,.footer_logo,.logo_top{width:144px}.menu{top:30%;left:44%}.offcanvas{z-index:11221323234}.menu_c{top:24%;left:18%}.menu_ul{width:303px;top:-30%!important;margin-bottom:0}.menu_ul li{text-align:center;width:64px}.baner_contaner_b h1,.baner_contaner_b p,.blothoth h2,.blothoth p,.web_type_ul h1{letter-spacing:-.02em}.c_ul_1{width:63%!important}.baner_contaner_b{height:34vh}.baner_contaner_b h1{font-size:72px;font-weight:300;line-height:61px;color:#000;margin-bottom:2.3rem}.baner_contaner_b p,.n_date{font-size:15px;line-height:18.15px}.n_flower_img{right:6%;top:44%;width:79px}.titly_img{top:-1.8%;left:26%}.web_type_ul h1{font-size:40px;font-weight:400;line-height:60px}.blothoth h2{font-size:39px;font-weight:700;line-height:47.2px;color:#000}.blothoth p{font-size:17.4px;line-height:21.78px;color:#7e7e7e}.blothoth a,.ness_post a{padding:4px 22px;border-radius:140px 0 0;font-size:18px;letter-spacing:-.01em;border:1px solid #000}.main_p,.ness_post h2,.ness_post p{letter-spacing:-.02em}.ness_post h2{font-size:24px;font-weight:500;line-height:29.05px;color:#000}.n_date{color:#000}.ness_post p{font-size:18px;line-height:21.78px;color:#7e7e7e}.post_border{border-top:2px solid #0000008c}.main_p{font-size:14px;line-height:16.94px;color:#000}.f_text_main{width:fit-content;left:50%;transform:translateX(-53%)}.circle_giff{width:142px;height:142px;margin-left:auto}.btn_round{padding:7px,12px;border-radius:140px 0 0;border:1px solid #000;font-size:12px;line-height:12px;letter-spacing:-.01em;color:#000;width:fit-content}@media (max-width:1400px){.contaner_width{max-width:100%;width:90%}.baner_contaner_b{height:50vh}}@media(max-width:1300px){.web_type_ul h1{font-size:34px}.btn_round{font-size:11px}}@media (max-width:1200px){.navbar_1{padding-left:1.2rem!important;padding-right:1.2rem!important}.navbar-light .navbar-toggler{border:0}.menu,.servise_img{display:none}.baner_contaner_b{height:399px}.baner_contaner_b h1{line-height:75px}.n_flower_img{right:50%;top:18%;width:80px;transform:translateX(40px)}.titly_img{top:-1.3%;width:45px;height:auto;left:45%;right:auto}}.lg_line{display:none}@media (max-width:767px){.mbl_scr{overflow-x:auto}.lg_line{display:block}footer .contaner_width{width:95%;margin-bottom:0!important}.web_type_ul{display:flex!important;flex-wrap:nowrap!important;justify-content:start!important}.blothoth h2,.ness_post h2{font-size:34px;font-weight:700;line-height:40.05px;letter-spacing:-.02em;color:#000}.mbl-p,.navbar-light .navbar-toggler{padding:0}.blothoth,footer .col-md-5{order:2}.contaner_width{width:100%;padding-left:8px;padding-right:8px}.baner_contaner_b{height:364px}.web_type_ul h1{font-size:28px;line-height:34px;font-weight:500}.baner_contaner_b h1{font-size:38px;line-height:42px;font-weight:400}.baner_contaner_b p{font-size:19px;font-weight:400;line-height:22px}.baner_contaner_b p br,.blothoth p br{display:none}.n_flower_img{top:21%}.blothoth p{font-size:14.4px}.blothoth a,.ness_post a,footer .btn{font-size:15px}.ness_post p{font-size:14px;line-height:17.78px}footer .client_box h1{font-size:32px;line-height:41px;letter-spacing:-.02em}footer .col-md-4:nth-child(5){order:3;height:30px}footer .col-md-4:nth-child(4){order:4}footer .col-md-7{order:6;padding-right:20px}footer .col-md-4:nth-child(6){order:6}footer .col-md-12:last-child{order:7}.f_text_main{left:79%;top:-114px}.circle_giff{width:117px;height:117px}.right_img{width:86px}.main_p{font-size:14px;line-height:16.94px}.navbar_1 .container-fluid{align-items:flex-start}.navbar-toggler:focus{box-shadow:0 0}}.page-numbers:hover{color:unset}.page-numbers{padding:4px 10px;color:#000}.current{background:#e6553a!important;color:#fff!important}
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
            Welcome to our digital agency's news hub! Stay ahead of the game with our latest insights, trends, and strategies in the ever-evolving
            <br>
            digital landscape. Dive into our curated content and unlock the secrets to digital success.
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
      <div class="row pt-md-5 pt-3 w-100 m-0">

        <div class="col-lg-12 mb-md-5 mb-4 pb-md-4 pb-2 mb-lg-0 blothoth">
          <img class="img-fluid p-0 mb-md-0 mb-4 ms-md-3 ms-0 single_thum" style="float: right;" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <div class="post_border pt-4 lg_line"></div>
          <div class="n_date mb-4">
            <?php the_date('F j, Y'); ?>
          </div>
          <a class="news_link" href="<?php the_permalink(); ?>">
            <h2 class="mb-4">
              <?php the_title(); ?>
            </h2>
          </a>
          <p class="mb-4">
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <?php
      $categories = wp_get_post_categories(get_the_ID());
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3,
        'post__not_in' => array(get_the_ID()),
        'category__in' => $categories,
        'ignore_sticky_posts' => 1
      );
      $related_news = new WP_Query($args);
      ?>

      <?php if ($related_news->have_posts()) : ?>
        <div class="row pt-md-5 pt-3 w-100 m-0">
          <?php while ($related_news->have_posts()) : $related_news->the_post(); ?>
            <div class="col-lg-4 col-md-6 mb-md-5 mb-4 pb-md-4 pb-2 ness_post">
            <a class="p-0" style="border: none;" href="<?php the_permalink(); ?>"> <img class="w-100 related_img" src="<?php the_post_thumbnail_url(); ?>"></a>
              <div class="post_border mt-4 mb-3"></div>
              <a class="news_link" href="<?php the_permalink(); ?>">
                <h2 class="mb-md-4 mb-2">
                  <?php the_title(); ?>
                </h2>
              </a>
              <p class="mb-4">
                <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
              </p>

              <?php
              $post_categories = get_the_category();
              if ($post_categories) {
                foreach ($post_categories as $category) {
                  echo '<a class="btn rounded-pill" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
                }
              }
              ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p>No related news found.</p>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>

</div>


</section>


</div>



<?php get_footer(); ?>