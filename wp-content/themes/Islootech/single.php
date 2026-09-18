<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
  get_template_part('template-parts/post/content', get_post_format());
endwhile;
?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css">
<style>
	.baner_contaner{
		height: 60vh !important;
	}
	
	.confrence_roomimg{
		border-radius:20px;
	}
	
	@media(max-width:1400px){
		.baner_contaner {
    height: 83vh !important;
}
	}
	
@media(max-width: 767px){
.logo_ul_1, .logo_ul_2{
  width: auto !important;
}
	.last_laptop_section {
        margin-bottom: 1rem;
        margin-top: -1rem;
    }
}
</style>
<div class="clear_div"></div>


<section>
  <div class="container first_section contaner_width position-relative">
    <div class="row baner_contaner">
      <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
        <div class="">
          <h1 class="mb-4"><?php the_title(); ?></h1>
          <?php $services_details = get_field('services_details');
          if ($services_details) : ?>
            <p><?php echo $services_details['content']; ?></p>
          <?php endif; ?>
          <div class="position-relative w-fit-content">
            <a href="#" class="btn rounded-pill dark_btn ps-4 py-md-3 py-2 text-start d-flex align-items-center text-white fw-bold mb-2">Let’s Profit Together</a>
            <img class="img-fluid arrow_giff_1 position-absolute " src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="">
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
    <div class="row border-top border-bottom justify-content-center align-items-center brand_mt_row">
      <div class="col-lg-2 text-center col-md-3 col-4">
        <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
          <li>
            <img class="img-fluid type_img" src="<?php echo get_template_directory_uri(); ?>/css/img/andriod.png" alt="">
          </li>

        </ul>
      </div>
      <div class="col-lg-2 text-center col-md-3 col-4">
        <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
          <li>
            <img class="img-fluid type_img" src="<?php echo get_template_directory_uri(); ?>/css/img/ios2.png" alt="">
          </li>
        </ul>
      </div>
      <div class="col-lg-2 text-center col-md-3 col-4">
        <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
          <li>
            <img class="img-fluid type_img" src="<?php echo get_template_directory_uri(); ?>/css/img/swift2.png" alt="">
          </li>

        </ul>
      </div>
      <div class="col-lg-2 text-center col-md-3 col-4">
        <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
          <li>
            <img class="img-fluid type_img" src="<?php echo get_template_directory_uri(); ?>/css/img/fluter2.png" alt="">
          </li>

        </ul>
      </div>
      <div class="col-lg-2 text-center col-md-3 col-4">
        <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
          <li>
            <img class="img-fluid type_img" src="<?php echo get_template_directory_uri(); ?>/css/img/reactnative.png" alt="">
          </li>

        </ul>
      </div>
      <div class="col-lg-2 text-center col-md-3 col-4">
        <ul class="p-0 d-flex gap-2 justify-content-center list-unstyled align-items-center">
          <li>
            <img class="img-fluid type_img" src="<?php echo get_template_directory_uri(); ?>/css/img/figmaimg.png" alt="">
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>

<!-- banner end -->
<section>
  <div class="container mobile_section position-relative contaner_width">
    <div class="row">
      <div class="col-lg-4 pt-5">
        <div class="pt-md-5">
          <?php $services = get_field('services');
          if ($services) : ?>
            <h4 class="pb-4 mt-3 app_d_h"><?php echo $services['title']; ?></h4>
          <?php endif; ?>
          <?php $services = get_field('services');
          if ($services) : ?>
            <p class="mb-4 app_d_p"><?php echo $services['content']; ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-8 pb-4 ps-lg-4 pt-lg-5 border-start cc_the_content wp_main">
        <div class="ps-md-5 pt-md-5">
          <?php the_content(); ?>
          <img class="img-fluid d-block circle_mobile_img" src="https://islootech.com/wp-content/themes/Islootech/css/img/circle_mobile_img.png" alt="">
        </div>
      </div>
    </div>
    <div class="row c_row_t">
      <div class="col-lg-4 pt-lg-4 pe-4 m-auto text-end">
        <h1 class="mb-4 text-start">
          We Strive
          <span class="main_spain">
            <span class="pe-3 before ps-1 position-relative d-inline-block">to</span>
            <br>
            <span class="ps-1 after pe-3 position-relative d-inline-block">Innovate</span>
          </span>
        </h1>
        <p class="text-start">
          We are not looking for clients - We are looking for like-minded individuals, who are willing to take on challenges and create something truly unique and meaningful, together.
        </p>
        <a href="#" class="btn rounded-pill pt-md-3 py-2 text-start d-flex align-items-center text-white fw-bold pb-0 ps-0">
          <img class="img-fluid border-dark" src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_up.png" alt="">
        </a>
      </div>
      <div class="col-lg-6 ps-3 pt-lg-4 position-relative border-start border-end">
        <img class="img-fluid c_thumbnail pt-4" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <svg class="position-absolute black_flower" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
          <path d="M19.1823 32.4364C19.0146 30.2481 18.8704 28.1935 18.6893 26.1422C18.6625 25.8515 18.4545 25.5775 18.3304 25.2936C18.0352 25.5141 17.6059 25.6677 17.4617 25.9617C15.845 29.2258 13.8661 32.2493 11.2767 34.8185C9.55608 36.5257 7.66772 38.0458 5.25277 38.7641C2.91497 39.459 0.775051 38.5971 0.161251 36.4622C-0.234533 35.0891 0.151188 33.6859 0.744864 32.4097C2.15023 29.4029 4.41425 27.0977 7.08747 25.2201C9.10663 23.8035 11.2834 22.6041 13.3865 21.3045C13.5005 21.2344 13.5944 21.1341 13.6984 21.0439C13.5307 20.3022 12.937 20.2421 12.3937 20.1887C10.2537 19.9815 8.10711 19.8078 5.96384 19.624C5.77601 19.6073 5.58483 19.604 5.39365 19.5572C8.16078 18.8824 11.1258 19.3534 14.0036 18.1674C13.6749 17.8968 13.5508 17.7431 13.3898 17.6663C10.4583 16.2497 7.79183 14.4156 5.33663 12.3141C3.1028 10.4065 1.09704 8.23822 0.355788 5.27817C0.121001 4.34606 0.14448 3.28699 0.318893 2.33149C0.573805 0.918287 1.76116 0.116469 3.20677 0.0162418C5.35675 -0.134099 7.13442 0.777969 8.76787 1.97736C12.6519 4.83049 15.2882 8.6859 17.4583 12.9088C17.6227 13.2295 18.0587 13.4099 18.3673 13.6572C18.4948 13.3398 18.7094 13.0291 18.7363 12.705C18.9006 10.5134 19.0281 8.3184 19.1656 6.12677C19.2494 6.11674 19.3366 6.10672 19.4205 6.10004C19.8062 8.68256 20.1953 11.2617 20.581 13.8443C20.685 13.8643 20.7923 13.8844 20.8963 13.9077C21.4262 12.9823 21.9461 12.0535 22.4895 11.1381C24.2571 8.15804 26.226 5.32829 28.8623 3.02974C30.214 1.8504 31.6797 0.771287 33.4205 0.30356C34.4334 0.0329463 35.6074 -0.00714462 36.627 0.216696C37.8479 0.483969 38.6831 1.3927 38.8642 2.74242C39.1795 5.06436 38.2538 6.9954 36.9423 8.78947C34.316 12.3743 30.7674 14.8465 26.9236 16.958C26.3232 17.2887 25.7228 17.6262 24.891 18.0872C27.6984 19.3067 30.5595 18.889 33.4104 19.5439C30.9754 19.7944 28.7315 20.0216 26.4876 20.2555C26.2662 20.2789 26.018 20.2722 25.8369 20.3757C25.6356 20.4893 25.431 20.6931 25.3673 20.9036C25.3338 21.0105 25.582 21.2678 25.753 21.3546C28.2652 22.6442 30.6467 24.1343 32.8335 25.9183C35.2149 27.856 37.2945 30.061 38.4785 32.9309C39.0822 34.3942 39.2969 35.9945 38.3779 37.4311C37.1771 39.3087 35.0003 39.2218 33.2662 38.5804C29.684 37.254 27.1618 34.6381 25.0285 31.6313C23.65 29.6869 22.4694 27.6021 21.1915 25.5809C21.0774 25.4005 20.9265 25.2468 20.6145 24.8592C20.4904 25.4539 20.3697 25.8281 20.3395 26.2056C20.1785 28.277 20.041 30.3517 19.1756 32.4398L19.1823 32.4364Z" fill="black" />
        </svg>
      </div>
      <div class="col-lg-2 pt-lg-4 m-auto">
        <ul class="p-0 list-unstyled ps-lg-3 ux_ul d-flex flex-column">
          <li>Product</li>
          <li>Innovations</li>
          <li>User Experience</li>
          <li>Insights</li>
          <li>Visual Design</li>
          <li>Development</li>
          <li>Optimisation</li>
          <li>Experiments</li>
          <li>A/B Testing</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="main-section_card">
  <div class="conatiner-fluid overflow-hidden gray_section py-5">
    <div class="row py-5 mt-4">
      <div class="col-md-12 pt-5 p-0">
        <div class="container card_section position-relative contaner_width">
          <div class="row">
            <div class="col-lg-12 pe-lg-0">
              <div class="text-center d_stages">
                <div class="position-relative">
                  <?php $development_services = get_field('development_services');
                  if ($development_services) : ?>
                    <h1 class="text-uppercase"><?php echo $development_services['title']; ?></h1>
                  <?php endif; ?>

                  <a class="btn text-uppercase rounded-pill text-white" href="">Process Flow</a>
                </div>
                <?php $development_services = get_field('development_services');
                if ($development_services) : ?>
                  <p><?php echo $development_services['content']; ?></p>
                <?php endif; ?>

              </div>
              <img class="mb-4 img-fluid position-absolute white_flower_img" src="<?php echo get_template_directory_uri(); ?>/css/img/Vector.png" alt="">
              <img class="mb-4 img-fluid position-absolute boys_img" src="<?php echo get_template_directory_uri(); ?>/css/img/sad.png" alt="">
              <div class="d-flex card_wrap gap-2">
                <ul class="p-0 m-0 card_wrap list-unstyled card_yellow_ul">
                  <ul class="p-0 d-flex list-unstyled gap-3">
                    <li>
                      <div class="position-relative main_orl_dev">
                        <img class="mb-4 img-fluid" src="<?php echo get_template_directory_uri(); ?>/css/img/whote_card.png" alt="">
                        <div class="position-absolute d-flex flex-column justify-content-center white_card_overlay top-0 start-0 w-100 h-100">

                          <?php $services_card_1 = get_field('services_card_1');
                          if ($services_card_1) : ?>
                            <h3 class="text-center"><?php echo $services_card_1['title']; ?></h3>
                          <?php endif; ?>

                          <?php $services_card_1 = get_field('services_card_1');
                          if ($services_card_1) : ?>
                            <p class="text-center mb-0 px-3"><?php echo $services_card_1['content']; ?></p>
                          <?php endif; ?>

                        </div>
                      </div>
                      <div class="position-relative main_orl_dev">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/css/img/white_card2.png" alt="">
                        <div class="position-absolute p-4 d-flex flex-column justify-content-center white_card_overlay top-0 start-0 w-100 h-100">

                          <?php
                          $post_id = get_the_ID();
                          $services_card_2 = get_field('services_card_2');

                          if ($post_id == 319 && $services_card_2) :
                            // Show dynamic content only if the post ID is 319
                          ?>
                            <h3 class="text-center mb-4"><?php echo $services_card_2['title']; ?></h3>
                            <p class="text-center mb-0 mt-0"><?php echo $services_card_2['content']; ?></p>
                          <?php
                          else :
                            // Show static content for any other post ID
                          ?>
                            <ul class="mb-0 d-flex card_btn_ul flex-column gap-0 p-0 list-unstyled">
                              <li>
                                <button class="btn rounded-pill btn_round">Wireframing</button>
                              </li>
                              <li class="align-self-end">
                                <button class="btn rounded-pill btn_round">User testing</button>
                              </li>
                              <li>
                                <button class="btn rounded-pill btn_round mb-2">Visual design</button>
                              </li>
                              <li class="align-self-center">
                                <button class="btn rounded-pill ms-auto btn_round">Prototyping</button>
                              </li>
                            </ul>
                          <?php
                          endif;
                          ?>

                        </div>
                      </div>
                    </li>
                    <li class="align-self-end">
                      <div class="position-relative main_orl_dev">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/css/img/thirdcard.png" alt="">
                        <div class="position-absolute d-flex flex-column justify-content-center white_card_overlay top-0 start-0 w-100 h-100">
                          <h3 class="text-center black_c_h">
                            <?php $services_card_3 = get_field('services_card_3');
                            if ($services_card_3) : ?>
                              <?php echo $services_card_3['title']; ?>
                            <?php endif; ?>
                          </h3>

                          <p class="text-center mb-0 px-3">
                            <?php $services_card_3 = get_field('services_card_3');
                            if ($services_card_3) : ?>
                              <?php echo $services_card_3['content']; ?>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </ul>
                <ul class="p-0 m-0 card_wra list-unstyled gap-4">
                  <ul class="p-0 d-flex card_wra dev_lunch_ul list-unstyled h-100 gap-5">
                    <li class="align-self-lg-center align-self-end">
                      <div class="position-relative main_orl_dev">
                        <picture>
                          <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/css/img/yellowimag.png">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/css/img/yellows-crop.png" alt="">
                        </picture>
                        <div class="position-absolute p-4 d-flex flex-column justify-content-center white_card_overlay top-0 start-0 w-100 h-100">
                          <h3 class="text-center black_c_h mt-5 mb-3 mbl_line_h" style="line-height: 11.78px;">
                            <?php $services_card_4 = get_field('services_card_4');
                            if ($services_card_4) : ?>
                              <?php echo $services_card_4['title']; ?>
                            <?php endif; ?>
                          </h3>
                          <ul class="mb-0 d-flex card_btn_ul flex-column gap-3 p-0 list-unstyled">
                            <p class="text-center">
                              <?php $services_card_4 = get_field('services_card_4');
                              if ($services_card_4) : ?>
                                <?php echo $services_card_4['content']; ?>
                              <?php endif; ?>
                            </p>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="align-self-lg-center">
                      <div class="position-relative main_orl_dev">
                        <picture>
                          <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/css/img/small.png">
                          <img class="img-fluid girls_img" src="<?php echo get_template_directory_uri(); ?>/css/img/girls.png" alt="">
                        </picture>
                      </div>
                    </li>
                    <li class="align-self-end">
                      <div class="position-relative main_orl_dev">
                        <picture>
                          <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/css/img/file.png">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/css/img/mesilecrop.png" alt="">
                        </picture>
                        <div class="position-absolute d-flex flex-column pt-5 white_card_overlay top-0 start-0 w-100 h-100">
                          <h3 class="text-center text-white pt-md-3">
                            <?php $services_card_5 = get_field('services_card_5');
                            if ($services_card_5) : ?>
                              <?php echo $services_card_5['title']; ?>
                            <?php endif; ?>
                          </h3>
                          <p class="text-center text-white mb-0 px-3">
                            <?php $services_card_5 = get_field('services_card_5');
                            if ($services_card_5) : ?>
                              <?php echo $services_card_5['content']; ?>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- slider section -->
<div class="container py-5">
  <div class="row pb-4 ptmd-4 pt-3">
    <div class="col-lg-8">
      <h1 class="mb-4 slider_h1">
        Unlocking Excellence A
        <br>
        Showcase of Our Company's
        <br>
        Finest Achievements
      </h1>
    </div>
    <div class="col-lg-4 m-auto erp_content">
      <?php
      $count = 0;
      $custom_posttype_portfolio = new WP_Query(
        array(
          'posts_per_page' => 100,
          'post_type' => 'portfolio'
        )
      );

      ?>
      <ul class="nav border-0 nav-tabs flex-column" role="tablist">
        <?php
        while ($custom_posttype_portfolio->have_posts()) {
          $custom_posttype_portfolio->the_post();
          $count++;
        ?>
          <li class="nav-item">
            <a class="nav-link position-relative p-0 text-decoration-none 
            <?php if ($count == 2) {
              echo "active";
            } ?>" data-bs-toggle="tab" id="home-tab" data-bs-toggle="tab" data-bs-target="#home<?php echo $count; ?>" type="button">
              <span class="position-absolute">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path d="M12.0099 0C12.0472 0.256532 12.083 0.512272 12.1219 0.768804C12.5348 3.46397 13.4923 5.93191 15.2319 8.06097C16.5047 9.61837 18.0808 10.7759 19.9546 11.5257C21.0972 11.9826 22.254 12.3032 24.0008 12.4632C23.9476 12.4861 23.919 12.502 23.8888 12.5107C23.8571 12.5202 23.8237 12.5218 23.7912 12.5281C23.0059 12.673 22.208 12.7704 21.437 12.9715C18.7049 13.6841 16.4968 15.1892 14.8183 17.4561C13.8313 18.7886 13.1318 20.2645 12.6539 21.8488C12.3601 22.8234 12.1513 23.8139 12.0401 24.8258C12.0337 24.8844 12.0163 24.9422 12.0036 25.0008L11.944 24.9992C11.9297 24.9066 11.9139 24.8139 11.9019 24.7213C11.5113 21.6857 10.4759 18.92 8.43299 16.5899C7.03239 14.9929 5.30863 13.867 3.28872 13.194C2.37007 12.8876 1.43077 12.6825 0.468455 12.574C0.312039 12.5566 0.156416 12.5249 0 12.4687C0.241374 12.4378 0.481953 12.4038 0.723327 12.3753C1.79839 12.2494 2.83932 11.9842 3.8461 11.5922C5.60003 10.9097 7.11258 9.87332 8.36709 8.47189C9.75499 6.92162 10.6943 5.12589 11.2945 3.1441C11.5915 2.1639 11.8011 1.16627 11.9115 0.14806C11.917 0.0989707 11.9337 0.0514648 11.9456 0.00395883C11.9663 0.00316706 11.9877 0.0023753 12.0083 0.000791766L12.0099 0Z" fill="black" />
                </svg>
              </span>
              <?php the_title(); ?>
            </a>
          </li>
        <?php } ?>
      </ul>

    </div>
  </div>


  <?php
  $count = 0;
  $custom_posttype_portfolio = new WP_Query(
    array(
      'posts_per_page' => 100,
      'post_type' => 'portfolio'
    )
  );

  ?>


  <!-- tab  content-->
  <div class="tab-content">
    <?php
    while ($custom_posttype_portfolio->have_posts()) {
      $custom_posttype_portfolio->the_post();
      $count++;
    ?>
      <div id="home<?php echo $count; ?>" class="container tab-pane fade 
      <?php if ($count == 2) {
        echo "show active";
      } ?>" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
          <div class="col-lg-4 m-auto imtiaz_section">
            <img class="img-fluid imtaiz_logo mb-4" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php the_content(); ?>
            <button class="btn mb-2 mt-4">Case Study</button>
          </div>
          <div class="col-lg-8 position-relative">
            <?php
            $images = get_field('portfolio');
            if ($images) : ?>
              <div class="owl-carousel vidio_slider owl-theme">
                <?php foreach ($images as $image) : ?>
                  <div class="item-video gap-4 d-flex bg-white">
                    <img class="w-100 slider_vidio" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            <div class="owl_pagination">
              <div class="owl_dots"></div>
              <div id="counter"><span id="current-counter">01</span><span class="ps-1">/</span> <span id="total-counter" style="font-weight: 400 !important;" class="ps-1"><?php echo str_pad(count($images), 2, '0', STR_PAD_LEFT);                                                                                                                                                                  ?></span></div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <?php wp_reset_postdata(); // Reset the global post object after the query loop 
    ?>

  </div>


  <!-- slider section -->
  <!-- last section -->
  <section>
    <div class="container mt-5 pt-5">
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
          <div class="position-relative w-fit-content">
            <a href="#" class="btn rounded-pill dark_btn ps-4 py-md-3 py-2 text-start d-flex align-items-center text-white fw-bold mb-2">Let’s Profit Together</a>
            <img class="img-fluid arrow_giff_1 position-absolute " src="<?php echo get_template_directory_uri(); ?>/css/img/arrow_giff.gif" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- last section -->
  <?php get_footer(); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      $(".vidio_slider").owlCarousel({
        items: 1.3,
        loop: !0,
        autoplay: !0,
        margin: 10,
        video: !0,
        lazyLoad: !0,
        center: !1,
        responsive: {
          480: {
            items: 1.3
          },
          600: {
            items: 1.3
          },
          1e3: {
            items: 1.3
          }
        }
      }), $(".vidio_slider").on("initialized.owl.carousel changed.owl.carousel", function t(e) {
        var i = e.item.count,
          n = e.item.index + 1;
        0 == (n %= i) && (n = i), $("#current-counter").text(n.toString().padStart(2, "0")), $("#total-counter").text(i.toString().padStart(2, "0"))
      })
    }), $(".nav-tabs .nav-link").on("click", function() {
      $(".nav-tabs .nav-link").removeClass("erp_text"), $(this).addClass("erp_text")
    });
  </script>