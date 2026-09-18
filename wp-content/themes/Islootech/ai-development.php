<?php
/*
Template Name: AI Development Consultant Template
 */

?>
<?php get_header(); ?>

<?php if (have_posts()) :
  while (have_posts()) :
    the_post(); ?>

<?php endwhile;
endif; ?>

<style>
  .baner_contaner_1 {height: fit-content;position: unset;margin-top: 8rem;}
  .baner_contaner_1 h1 {font-size: calc(2.375rem + 1.5vw) !important;font-weight: 400;}
  .baner_contaner p {margin-bottom: 4.6rem !important}
  .btn:focus {box-shadow: 0 0 !important}
  .iot-technology-strip {
    justify-content: flex-start !important;
  }
  .iot-technology-strip .iot-technology-track {
    display: flex;
    flex: 0 0 max-content;
    will-change: transform;
  }
  .iot-technology-strip .service_logoo {
    flex: 0 0 auto !important;
    width: auto !important;
    padding: 0 36px;
  }
  .iot-technology-strip .iot-technology-track.is-scrolling-left {
    animation: iot-technology-scroll-left 40s linear infinite;
  }
  .iot-technology-strip .iot-technology-track.is-scrolling-right {
    animation: iot-technology-scroll-right 40s linear infinite;
  }
  @keyframes iot-technology-scroll-left {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }
  @keyframes iot-technology-scroll-right {
    from { transform: translateX(-50%); }
    to { transform: translateX(0); }
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

    .iot-technology-strip .strip__item {
            font-size: 18px
        }

        .iot-technology-strip .strip__item i {
            height: 12px;
            margin-right: 10px;
            width: 12px
        }
  @media(max-width:767px) {
    .baner_contaner_1 {
         margin-top: 0rem;
         padding-top: 2rem !important;
         padding-bottom: 2rem !important;
        }
    .border_nnone{
      border: none !important;
    }
    .first_section br {
      display: none;
    }

    .mbl_stamp {
      display: grid;
    }
    .mbl_border{
      border: 1px solid black !important;
    }
    .baner_contaner_1 h1 {
        margin-top: 0;
        font-size: 7.9vw !important;
        font-weight: 400;
        line-height: 10vw;
        letter-spacing: -0.02em;
        margin-bottom: 4.5vw !important;
    }
    .baner_contaner_1 p {
      font-size: 16px;
        font-weight: 400;
        line-height: 19.36px;
        letter-spacing: -0.02em;
        margin-bottom: 3rem !important;
        color: #000000;
        padding-left: 5px;
        padding-right: 5px;
    }

    .brand_mt_row {
      margin-top: 1rem !important;
    }
    .slider_h22 {
        margin-bottom: 1rem !important;
    }

    .mbl_stamp .c_button_22 {
      order: 2;
    }

    .mbl_stamp .main-giff_div {
      margin-top: 0 !important;
      margin-bottom: 1.5rem;
    }

    .first_section .row:last-child {
      margin-top: 4rem;
      padding-top: 2rem !important
    }

    .baner_contaner_1 .col-md-12 {
      flex-direction: row !important
    }

    .last_laptop_section {
      margin-bottom: 0 !important
    }
  }
  @media(max-width:1400px) {
    .baner_contaner_1 h1 {
      font-size: calc(2.375rem + 1.5vw)
    }
  }
</style>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?v=1.2.2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<div class="clear_div"></div>

<section>
  <div class="container first_section contaner_width position-relative">
    <div class="row baner_contaner_1 pb-1">
      <div class="col-md-12 text-center d-flex flex-column justify-content-end h-100">
        <div class="">
          <h1 class="mb-4"><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="mbl_stamp">
            <div class="full_button m-auto py-2 c_button_22" style="width: fit-content !important;">
              <a href="#exampleModalToggleContact" data-bs-toggle="modal" role="button"><span>Elevate Your Business with AI</span>
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
    <br><br>
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
  <div class="container mobile_section position-relative contaner_width">
    <div class="row">
      <div class="col-12">
        <h1 class="slider_h2 slider_h22">
          Command the World's Attention with <br>Cutting-Edge AI Services
        </h1>
      </div>
    </div>
    <div class="row c_row_t">
      <div class="col-lg-4 pt-lg-4 pe-4 m-auto text-end">

      </div>
      <div class="col-lg-6 ps-3 pt-lg-4 position-relative">
        <p>Unlock your company's full potential and gain a competitive edge with our expert AI development team. Our expert team leverages advanced machine learning and artificial intelligence to optimize your operations, enhance decision-making, and gain a competitive edge.</p>

      </div>
      <div class="col-lg-2 pt-lg-4 m-auto">

      </div>
    </div>

    <div class="row pt-5 mt-md-4">
      <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 col-12 mb-md-4 mb-0 mb-lg-0 mb-xl-0 mb-sm-0">
        <div class="row h-100">
          <div class="col-md-6">
            <div class="border_gray border_round d-grid align-items-center position-relative">
              <span class="c_numbring">01</span>
              <div class="d-grid align-items-center">
                <h5>Generative AI</h5>
                <p>Unlock the future with our Generative AI solutions, powered by cutting-edge technologies like GPT-4 and Transformer models. We create innovative, data-driven content and automate complex tasks with unparalleled precision.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0 d-md-block d-none"> 
            <div class="border_gray border_round bg-white empty-box">

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 mt-4 mt-md-0">
        <div class="border_gray border_round p-0">
          <img class="w-100 img-fluid gi-img" src="https://islootech.com/wp-content/uploads/2024/09/image.png" alt="">
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4 mt-md-1 mt-xl-4 mt-lg-3 mt-sm-3 mt-3">
        <div class="border_gray border_round d-grid align-items-center position-relative bg-white">
          <span class="c_numbring">02</span>
          <h5>Deep Learning</h5>
          <p>Dive into advanced insights with our Deep Learning services. We utilize sophisticated neural networks to analyze vast datasets and uncover patterns that drive smarter decision-making.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
        <div class="border_gray border_round d-grid align-items-center position-relative" style="background-color: #ec310d;">
          <span class="c_numbring text-white">03</span>
          <h5 class="text-white">Machine Learning</h5>
          <p class="text-white">Harness the power of data with our Machine Learning services. We build intelligent systems that learn and adapt from your data, optimizing processes and predicting outcomes with precision.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4 d-md-block d-none">
        <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">

        </div>
      </div>

      <div class="col-md-6 col-lg-3 col-lx-3 col-sm-12 col-12 mt-4">
        <div class="border_gray border_round d-grid align-items-center position-relative">
          <span class="c_numbring">04</span>
          <h5>Natural Language Processing</h5>
          <p>Transform how you interact with language using our Natural Language Processing (NLP) services.</p>
        </div>
      </div>

      <div class="col-md-6 col-lx-3 col-xl-3 col-sm-12 col-12 mt-4">
        <div class="border_gray border_round d-grid align-items-center position-relative">
          <span class="c_numbring">05</span>
          <div class="d-grid align-items-center">
            <h5>AI-Driven Mobile &<br> Web Apps</h5>
            <p>Transform your ideas into intelligent, user-centric experiences. Our AI-powered development team creates innovative mobile and web applications that learn and adapt.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4 d-md-block d-none">  
        <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">

        </div>
      </div>

      <div class="col-md-6 col-lx-3 col-xl-3 col-sm-12 col-12 mt-4">
        <div class="border_gray border_round d-grid align-items-center position-relative">
          <span class="c_numbring">06</span>
          <div class="d-grid align-items-center">
            <h5>Data Engineering<br> for AI/ML</h5>
            <p>Transform your raw data into actionable insights with our expert data support services.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
        <div class="border_gray border_round d-grid align-items-center position-relative bg-white">
          <span class="c_numbring">07</span>
          <div class="d-grid align-items-center">
            <h5>AI Consulting & <br> Development</h5>
            <p>Accelerate your business transformation with our AI consulting and development expertise.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4 mt_col">

      </div>
      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-md-4 mt-4">
        <img src="https://islootech.com/wp-content/uploads/2024/09/image-1.png" class="w-100 img-fluid gi-img" alt="">
      </div>

      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4 d-md-block d-none">
        <div class="border_gray border_round d-grid align-items-center position-relative bg-white empty-box">

        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-xl-3 col-sm-12 col-12 mt-4">
        <div class="border_gray border_round d-grid align-items-center position-relative" style="background-color: #ec310d;">
          <span class="c_numbring text-white">08</span>
          <h5 class="text-white">Generative AI</h5>
          <p class="text-white">Keep your AI solutions running at peak performance with our expert support and optimization services.</p>
        </div>
      </div>

    </div>
    <div class="row justify-content-center mt-md-4">
      <div class="col-md-6">
        <h1 class="slider_h2 slider_h22 headingh_3">
          Pushing the Boundaries of<br>
          Creativity and Technology -<br>
          Your 360° AI Partner
        </h1>
        <p class="pt-4 pb-4 mb-0 nb-md-4">Our AI experts deliver end-to-end AI solutions tailored to your specific business needs. We specialize in developing innovative AI strategies that drive growth and achieve your business goals. Our focus is on maximizing ROI and minimizing risk through a phased approach: start small and scale rapidly.</p>
        <img class="w-100 mt-3 img-fluid gi-img h-auto" src="https://islootech.com/wp-content/uploads/2024/09/image-2.png" alt="">
      </div>
    </div>
    <br><br><br>
    <?php if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>

    <?php endwhile;
    endif; ?>
    <div class="container pt-1 contaner_width">
      <div class="row justify-content-center pt-lg-5 mt-lg-5 pt-2 mt-md-3">
        <div class="col-md-12 col-lg-3 col-xl-3 col-sm-12 col-12 pe-lg-0 pe-xl-0 ps-md-0 ps-lg-1 ps-xl-1 d-md-block d-none">
          <img src="https://islootech.com/wp-content/uploads/2024/09/image-3.png" class="w-100 img-fluid h-100 round-3" alt="">
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
            <div class="col-12 py-md-5 pt-0 pb-4 border_top c_p_l border_nnone px-md-3 px-4">
              <div class="row p-md-0 p-3 mbl_border ps-md-2">
                <div class="col-md-6 ps-md-4">
                  <span class="c_numbring d-md-none d-block pb-3" style="position: unset;">01</span>
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
            <div class="col-md-12 pb-md-0 pb-4">
              <div class="mbl_border border_gray border_b_none d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4 mb-md-0 mb-4"> <span class="c_numbring">02</span>
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
            <div class="col-md-12 pb-md-0 pb-4">
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
            <div class="col-md-12 pb-md-0 pb-4">
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
            <div class="col-md-12">
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

            <div class="col-md-12 <?php echo (empty($proess['title_6']) && empty($proess['content_6'])) ? 'no-data-margin' : ''; ?>">
              <?php $proess = get_field('proess');
              if (!empty($proess['title_6']) || !empty($proess['content_6'])): ?>
                <div class="border_gray d-grid align-items-center position-relative bg-white px-3 pt-5 pb-4">
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
    </div>

  </div>
</section>
<div class="br-main"> <br><br><br><br><br><br><br><br><br><br></div>
<!-- last section -->
<section class="pb-md-5 pb-4 mt-md-0 mt-4 pt-md-0 pt-3">
  <div class="container mb-md-5 pt-5">
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

<!-- slider section -->
<?php echo do_shortcode('[portfolio_slider]'); ?>
<!-- slider section -->

<div class="container px-4 pt-md-5 pt-3 mt-md-5">
  <h1 class="mb-4 slider_h1 text-start mt-md-5 mt-4">
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
        <br>
      </div>
    </div>
  </div>
</div>
<!--<div class="container pt-5 mt-4">
  <h1 class="mb-4 slider_h1 text-center mt-md-5">
    Want to Achive Your Goals?<br> Book Your Call Now!
  </h1>

  <div class="row pb-2 justify-content-center">
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
