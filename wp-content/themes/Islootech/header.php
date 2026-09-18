<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SVG Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon.svg" />
    <!-- Standard favicon (should be stored in root directory) -->
    <link rel="icon" href="https://islootech.com/favicon.ico" type="image/x-icon">
     <!-- PNG Favicon sizes for browsers -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/web-app-manifest-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/web-app-manifest-512x512.png">
   <!-- Apple Touch Icons for iOS/Mac -->
   <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-180x180.png">
    <!-- Home Screen Name -->
    <meta name="apple-mobile-web-app-title" content="Isloo Tech">
    <!-- Windows Tile for pinned sites -->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/css/fav-icon/favicon-144x144.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- PWA Manifest (optional but recommended for PWA support) -->
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/css/fav-icon/site.webmanifest" />

    <!--  Favicon code ends here -->
    <!-- Canonical line code starts here -->
    <link rel="canonical" href="<?php the_permalink(); ?>" />
    <!-- Search Engine Title and Description -->
    <?php $meta_tag = get_field('meta_tag');
    if ($meta_tag) : ?><title><?php echo $meta_tag['meta_title']; ?></title><?php endif; ?>

    <?php $meta_tag = get_field('meta_tag');
    if ($meta_tag) : ?>
        <meta name="description" content="<?php echo $meta_tag['meta_description']; ?>" /><?php endif; ?>

    <!-- Open Graph Tags (og) -->
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:type" content="website" />
    <?php $meta_tag = get_field('meta_tag');
    if ($meta_tag) : ?>
        <meta property="og:title" content="<?php echo $meta_tag['meta_title']; ?>" /><?php endif; ?>


     <?php $meta_tag = get_field('meta_tag');
    if ($meta_tag) : ?>
        <meta property="og:description" content="<?php echo $meta_tag['meta_description']; ?>" /><?php endif; ?>

      <?php 
$meta_tag = get_field('meta_tag'); // Fetch the ACF group

if ($meta_tag && !empty($meta_tag['og_image'])) { 
    // Check if 'og_image' is an array and extract the URL if needed
    $og_image_url = is_array($meta_tag['og_image']) ? $meta_tag['og_image']['url'] : $meta_tag['og_image'];

    // Output the dynamic og:image meta tag
    echo '<meta property="og:image" content="' . esc_url($og_image_url) . '" />';
} else { 
    // Fallback to a default image if the field is empty
    echo '<meta property="og:image" content="https://islootech.com/wp-content/uploads/2025/01/open-graph-services.png" />';
}
?>



    <!-- Twitter tags -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- Use as it is-->
    <?php $meta_tag = get_field('meta_tag');
    if ($meta_tag) : ?>
        <meta name="twitter:title" content="<?php echo $meta_tag['meta_title']; ?>" /><?php endif; ?>

 <?php $meta_tag = get_field('meta_tag');
    if ($meta_tag) : ?>
        <meta name="twitter:description" content="<?php echo $meta_tag['meta_description']; ?>" /><?php endif; ?>
<?php 
$meta_tag = get_field('meta_tag'); // Fetch the ACF group

if ($meta_tag && !empty($meta_tag['og_image'])) { 
    // Check if 'og_image' is an array and extract the URL if needed
    $og_image_url = is_array($meta_tag['og_image']) ? $meta_tag['og_image']['url'] : $meta_tag['og_image'];

    // Output the dynamic twitter:image meta tag
    echo '<meta name="twitter:image" content="' . esc_url($og_image_url) . '" />';
} else { 
    // Fallback to a default image if the field is empty
    echo '<meta name="twitter:image" content="https://islootech.com/wp-content/uploads/2025/01/open-graph-services.png" />';
}
?>

    <!-- Google search console-->
    <meta name="google-site-verification" content="NyqFmUJL2TKVowSLoChRipKJtUlQuWH46RoyGv7ep7o" />
    <!-- End Google search console-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css?v=1.3.4">
	

</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar_1 p-md-4 p-3 ps-4 ps-md-5  navbar-expand-lg navbar-light bg-">
        <div class="container-fluid px-0">
            <ul class="p-0 logo_ul_1">
                <a class="navbar-brand pe-4" href="<?php echo home_url('home'); ?>">
                    <img class="logo_top ms-md-0 ms-2" src="<?php echo get_template_directory_uri(); ?>/css/img/logo_5_2.png" alt="">
                </a>
            </ul>

            <div class="ps-2" id="navbarSupportedContent">
                <div class="position-relative w-50" style="width: fit-content; display: flex; justify-content: center; margin-top: -16px;">

                </div>
                <ul class="w-50 p-0 d-flex justify-content-end list-unstyled ">
                    <li class="nav-item position-relative d-md-block d-none">
                        <div class="full_button full_button_2">
                            <a class="ps-md-2" href="<?php echo home_url('contact'); ?>"><span>CONTACT US</span>
                                <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                            </a>
                        </div>

                    </li>
                    <li class="nav-item position-relative">
                        <a class="toggle navbar-brand position-relative d-inline-block me-0">
                            <svg class="servise_img d-block" xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 35 35" fill="none">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="black" />
                                <path d="M9.5 11.75H15.75C16.0815 11.75 16.3995 11.8817 16.6339 12.1161C16.8683 12.3505 17 12.6685 17 13C17 13.3315 16.8683 13.6495 16.6339 13.8839C16.3995 14.1183 16.0815 14.25 15.75 14.25H9.5C9.16848 14.25 8.85054 14.1183 8.61612 13.8839C8.3817 13.6495 8.25 13.3315 8.25 13C8.25 12.6685 8.3817 12.3505 8.61612 12.1161C8.85054 11.8817 9.16848 11.75 9.5 11.75ZM18.25 21.75H24.5C24.8315 21.75 25.1495 21.8817 25.3839 22.1161C25.6183 22.3505 25.75 22.6685 25.75 23C25.75 23.3315 25.6183 23.6495 25.3839 23.8839C25.1495 24.1183 24.8315 24.25 24.5 24.25H18.25C17.9185 24.25 17.6005 24.1183 17.3661 23.8839C17.1317 23.6495 17 23.3315 17 23C17 22.6685 17.1317 22.3505 17.3661 22.1161C17.6005 21.8817 17.9185 21.75 18.25 21.75ZM9.5 16.75H24.5C24.8315 16.75 25.1495 16.8817 25.3839 17.1161C25.6183 17.3505 25.75 17.6685 25.75 18C25.75 18.3315 25.6183 18.6495 25.3839 18.8839C25.1495 19.1183 24.8315 19.25 24.5 19.25H9.5C9.16848 19.25 8.85054 19.1183 8.61612 18.8839C8.3817 18.6495 8.25 18.3315 8.25 18C8.25 17.6685 8.3817 17.3505 8.61612 17.1161C8.85054 16.8817 9.16848 16.75 9.5 16.75Z" fill="white" />
                            </svg>
                            
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navber -->
<!--<div id="smooth-wrapper">
<div id="smooth-content">-->
    <!-- Menu -->
    <div id="full" class="pt-md-3">
        <div id="cursor" class="d-none"></div>
        <div class="row mb-md-5 mb-4" style="border-bottom: 1px solid #000;">
            <div class="col-md-10 ps-0">
                <h2 class="mainmenu_title mb-md-3">Explore Isloo Tech</h2>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div id="close" class="mb-4">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="53" viewBox="0 0 53 53" fill="none">
            <path d="M26.5 0C11.7357 0 0 11.7357 0 26.5C0 41.2643 11.7357 53 26.5 53C41.2643 53 53 41.2643 53 26.5C53 11.7357 41.2643 0 26.5 0ZM36.7214 39.75L26.5 29.5286L16.2786 39.75L13.25 36.7214L23.4714 26.5L13.25 16.2786L16.2786 13.25L26.5 23.4714L36.7214 13.25L39.75 16.2786L29.5286 26.5L39.75 36.7214L36.7214 39.75Z" fill="black"/>
            </svg>
        </div>
        <div class="container-fluid px_0">
            <div class="row all_menu">
                <div id="menuitem1" class="col-xxl-3 col-md-2 col-12">
                    <!-- <ul>
                        <li class="menu_heading" style="color: gray;font-size: 13px !important;">Menu</li>
                    </ul> -->
                    <?php
                    $custom_posttype_services = new WP_Query(array(
                        'post_type' => 'services',
                        'posts_per_page' => 100,
                    ));
                    ?>
                    <ul class="p-0 mb-0 pb-0">
                        <?php
                        $menu_items = [
                            'Home' => 'home',
                            'About Us' => 'about-us',
                            'Careers' => 'careers',
                            // 'News' => 'latest-news',
                            'Blogs' => 'blogs',
                            // 'Contact Us' => 'contact'
                        ];
                        foreach ($menu_items as $title => $slug) {
                            echo '<li class="d-block mb-0">';
                            echo '<a class="mb-md-0 mb-2 d-inline-block c_home_size" aria-current="page" style="text-decoration: none; color: black;font-weight: 700;font-size: clamp(1.2rem, 2.5vw, 2.5rem);line-height: clamp(1rem, 3.3vw, 3.3rem);" href="' . home_url($slug) . '">';
                            echo $title;
                            echo '</a>';
                            echo '</li>';
                        }

                        ?>
                    </ul>
                </div>

                <div class="col-md-3">
                    <ul class="ps-0 mb-2 mb-md-0 mt-md-0 mt-4">
                        <li class="menu_heading" style="display:block !important; color: #EC310D;font-size: 13px !important;font-weight: 400;font-family: 'Inter';">Outsourcing Models</li>
                    </ul>
                    <ul class="p-0 mb-0 pb-0 margin_b">
                        <?php
                        $menu_items = [
                            'Augmented Team' => 'augmented-team',
                            'Dedicated Teams' => 'dedicated-teams',
                            'Full Outsourcing' => 'full-outsourcing',

                        ];
                        foreach ($menu_items as $title => $slug) {
                            echo '<li class="d-block mb-0" style="margin-bottom: -6px !important;">';
                            echo '<a class="d-inline-block mb-md-0 mb-3" aria-current="page" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="' . home_url($slug) . '">';
                            echo $title;
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>

                    <ul class="mt-md-5 mb-2 mb-md-0 ps-0 mt-4 mt-md-0">
                        <li class="menu_heading" style="display:block !important; color: #EC310D;font-size: 13px !important;font-weight: 400;font-family: 'Inter';">Collaboration Models</li>
                    </ul>
                    <ul class="p-0 mb-0 pb-0 margin_b">
                        <?php
                        $menu_items = [
                            'Define Your Product Scope' => 'define-your-product-scope',
                            'Build Your MVP' => 'build-your-mvp',
                            'Scale With Agility' => 'scale-with-agility',

                        ];
                        foreach ($menu_items as $title => $slug) {
                            echo '<li class="d-block mb-0">';
                            echo '<a class="d-inline-block mb-2 mb-md-0" aria-current="page mb-md-0" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="' . home_url($slug) . '">';
                            echo $title;
                            echo '</a>';
                            echo '</li>';
                        }

                        ?>
                    </ul>
                </div>

                <div id="menuitem2" class="col-md-3">
                    <ul class="ps-0 mb-2 mb-md-0 mt-md-0 mt-1">
                        <li class="menu_heading" style="display:block !important; color: #EC310D;font-size: 13px !important;font-weight: 400;font-family: 'Inter';">Services</li>
                    </ul>
                    <ul class="ps-0 margin_b">
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('artificial-intelligence'); ?>">
                                Artificial Intelligence
                            </a>
                        </li>
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('web-development'); ?>">
                                Web Development
                            </a>
                        </li>
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('mobile-app-development'); ?>">
                                Mobile App Development
                            </a>
                        </li>
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('custom-software-development'); ?>">
                                Custom Software Development
                            </a>
                        </li>
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('qa-amp-software-testing'); ?>">
                                QA & Software Testing
                            </a>
                        </li>

                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('ui-ux'); ?>">
                                UI/UX
                            </a>
                        </li>
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('chief-technology-officer-services'); ?>">
                                CTO as Service
                            </a>
                        </li>
                        <li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('devops'); ?>">
                                DevOps
                            </a>
                        </li>
						<li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('iot-smart-products'); ?>">
                                IoT & Smart Products
                            </a>
                        </li>
						<li class="d-block">
                            <a class="d-inline-block mb-md-0 mb-2" style="text-decoration: none;color: black;font-weight: 700;font-size: clamp(1.2rem, 1vw, 2.1rem);" href="<?php echo home_url('unifi-it-infrastructure'); ?>">
                                UniFi / IT Infrastructure
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-3 col-md-4 col-12 c_story_col">

                    <ul class="ps-0 mb-3 mt-md-0 mt-3 ">
                        <li class="menu_heading" style="display:block !important; color: #EC310D;font-size: 13px !important;font-weight: 400;font-family: 'Inter';">Success Stories</li>
                    </ul>
                    <div class="story">
                        <?php
                        $custom_posttype_portfolio = new WP_Query(
                            array(
                                'posts_per_page' => 100,
                                'post_type' => 'portfolio'
                            )
                        );

                        ?>
                        <div class="story__slider swiper">
                            <div class="story__wrapper swiper-wrapper">
                                <?php
                                while ($custom_posttype_portfolio->have_posts()) :
                                    $custom_posttype_portfolio->the_post();
                                ?>
                                    <div class="story__slide swiper-slide">
                                        <img src="<?php the_post_thumbnail_url(); ?>"  loading="eager" />
                                        <?php
                                        $portfolio = get_field('portfolio');
                                        if ($portfolio) :
                                            $page_url = $portfolio['page_url'] ?? ''; 
                                            if ($page_url) : ?>
                                        <a style="text-decoration: none;" href="<?php echo esc_url($page_url); ?>">
                                        <?php else : ?>
                                                <p>The URL is not available</p>
                                        <?php endif;
                                        endif; ?>
                                        <h2 style="color: black;font-weight: 700;font-size: clamp(1.2rem, 1.3vw, 1.3rem);" class="text-black"><?php the_title(); ?></h2>
                                        </a>
                                        <p style="font-weight: 400 !important;color: black !important; line-height: 17px;"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                        
                                                <a href="<?php echo home_url('case-study') ?>" style="line-height: 33px; color: black;font-weight: 700;font-size: clamp(1rem, 1.1vw, 1.1rem);text-decoration: none; border-bottom: 1px solid black !important; width: fit-content;" class="mt-2 d-flex align-items-center">
                                                    Checkout Our Finest Achievements &nbsp;
                                                    <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="13" viewBox="0 0 13 13" fill="none">
                                                        <path d="M3.83808 2.06133C4.21285 2.4361 5.14459 2.6236 5.991 2.71664C7.08141 2.83841 8.18896 2.78849 9.25604 2.52852C10.0561 2.33355 10.9496 2.02086 11.4349 1.53553M11.4349 1.53553C10.9496 2.02086 10.6364 2.9149 10.442 3.71444C10.1825 4.78202 10.1326 5.88958 10.2533 6.97897C10.3469 7.82589 10.5354 8.75864 10.9092 9.1324M11.4349 1.53553L1.53545 11.435" stroke="black" stroke-width="2" />
                                                    </svg>
                                                    &nbsp;
                                                </a>
                                            
                                        <hr style="opacity: 0;">
                                    </div>
                                <?php endwhile; ?>
                            </div>

                            <div class="story__next swiper-button-next"></div>
                            <div class="story__prev swiper-button-prev"></div>
                            <div class="story__pagination swiper-pagination"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row full_footer align-items-center">
                <div class="col-md-4 d-md-block c_order_3">
                    <p class="main_p text-start mt-md-4 mb-1 mb-md-3" style="color: black !important;">Copyright © <?php echo date('Y'); ?> ISLOO TECH - All Rights Reserved</p>
                </div>
                <div class="col-md-4 d-grid align-items-end text-md-center justify-content-md-center justify-content-start">
                    <div class="full_button_menu mt-0">
                        <a href="<?php echo home_url('contact'); ?>"><span>Send us a Message</span>
                            <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-md-0 mt-4 social_bar">
                    <ul class="ps-0 d-flex align-items-center justify-content-md-end justify-content-start mb-0 w-100 pe-md-0 full_social">
                        <li class="d-block">
                            <a style="text-decoration: none;font-size: 16px;text-transform: capitalize;color: black;" class="facebook" href="https://pk.linkedin.com/company/isloo-tech-it" target="_blank">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_1_68)" />
                                        <g clip-path="url(#clip0_1_68)">
                                            <path d="M11.2194 22V12.6589H12.9793V22.001H11.2194V22ZM15.4979 21.9928V12.6568H17.0547L17.0839 12.9918L17.7211 13.2896L17.8035 13.2286C17.8557 13.1893 17.901 13.1562 17.9452 13.1221C18.5341 12.6713 19.2748 12.4232 20.0337 12.4232C20.695 12.4232 21.3171 12.6082 21.8337 12.9577C22.5714 13.4571 23.0237 14.2314 23.2186 15.3253C23.2779 15.6571 23.3081 15.987 23.3101 16.3064C23.3171 17.8159 23.3161 19.3502 23.3151 20.8348V21.9897H21.5261C21.5261 21.5647 21.5282 21.1388 21.5292 20.7139C21.5332 19.4122 21.5372 18.0671 21.5312 16.7427C21.5292 16.3013 21.49 15.9187 21.4106 15.5734C21.1884 14.6067 20.4256 13.9575 19.513 13.9575C18.9864 13.9575 18.4708 14.1808 18.0608 14.585C17.5653 15.074 17.315 15.7068 17.318 16.4667C17.322 17.8056 17.322 19.1672 17.321 20.4843V21.9917H15.4999L15.4979 21.9928ZM12.0657 11.2383C11.4637 11.2383 11.0054 10.7659 10.9993 10.1404C10.9963 9.8271 11.1049 9.53969 11.3039 9.32877C11.5029 9.11993 11.7782 9.0031 12.0797 9H12.0928C12.732 9 13.1652 9.45801 13.1692 10.1404C13.1712 10.4495 13.0707 10.7183 12.8788 10.9168C12.6798 11.1236 12.3903 11.2373 12.0667 11.2383H12.0657Z" fill="#EC310D" />
                                            <path d="M15.4985 21.9927V12.6568H17.0553L17.0845 12.9918L17.7217 13.2895L17.8041 13.2285C17.8564 13.1893 17.9016 13.1562 17.9458 13.1221C18.5348 12.6713 19.2755 12.4232 20.0343 12.4232C20.6956 12.4232 21.3177 12.6082 21.8343 12.9577C22.572 13.457 23.0243 14.2314 23.2193 15.3253C23.2786 15.6571 23.3087 15.9869 23.3107 16.3064C23.3178 17.8159 23.3168 19.3501 23.3158 20.8348V21.9896H21.5268C21.5268 21.5647 21.5288 21.1388 21.5298 20.7138C21.5338 19.4122 21.5378 18.0671 21.5318 16.7427C21.5298 16.3012 21.4906 15.9187 21.4112 15.5734C21.1891 14.6067 20.4263 13.9574 19.5137 13.9574C18.987 13.9574 18.4715 14.1808 18.0614 14.585C17.5659 15.074 17.3157 15.7068 17.3187 16.4667C17.3227 17.8055 17.3227 19.1672 17.3217 20.4843V21.9917H15.5005L15.4985 21.9927Z" fill="#EC310D" />
                                            <path d="M12.9799 12.6589H11.2201V22.001H12.9799V12.6589Z" fill="#EC310D" />
                                            <path d="M12.0657 11.2383C11.4637 11.2383 11.0054 10.7659 10.9993 10.1404C10.9963 9.8271 11.1049 9.53969 11.3039 9.32877C11.5029 9.11993 11.7782 9.0031 12.0797 9H12.0928C12.732 9 13.1652 9.45801 13.1692 10.1404C13.1712 10.4495 13.0707 10.7183 12.8788 10.9168C12.6798 11.1236 12.3903 11.2373 12.0667 11.2383H12.0657Z" fill="#EC310D" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_1_68" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EC310D" />
                                                <stop offset="1" stop-color="#D1D1D1" />
                                            </linearGradient>
                                            <clipPath id="clip0_1_68">
                                                <rect width="12.3158" height="13" fill="white" transform="translate(11 9)" />
                                            </clipPath>
                                        </defs>
                                    </svg>&nbsp;&nbsp;
                                    <span>Linkedin</span>
                                </div>

                            </a>
                        </li>
                        <li class="d-block ps-md-4 ps-2">
                            <a style="text-decoration: none;font-size: 16px;text-transform: capitalize;color: black;" class="linkedin" href="https://www.facebook.com/islootech.it/" target="_blank">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_1_69)" />
                                        <path d="M17.3131 18.9702C17.3131 19.9242 17.3131 20.8779 17.3131 21.832C17.3131 21.9974 17.3112 21.9998 17.1651 21.9998C16.5337 21.9998 15.9018 22.0002 15.27 21.9998C15.1386 21.9998 15.1382 21.999 15.1382 21.85C15.1349 19.9525 15.1316 18.0546 15.1286 16.1572C15.1286 16.0494 15.0798 15.9953 14.9822 15.9951C14.6907 15.9951 14.3996 15.9922 14.1082 15.9967C14.0305 15.9979 13.9996 15.9774 14 15.8839C14.0029 15.265 14.0026 14.6462 14 14.027C14 13.9437 14.0261 13.9228 14.0968 13.9236C14.4004 13.9273 14.704 13.9252 15.0076 13.9248C15.1213 13.9248 15.1261 13.9191 15.1272 13.791C15.132 13.2202 15.1246 12.6486 15.1448 12.0782C15.1658 11.4934 15.3296 10.9653 15.7362 10.5636C15.9754 10.3272 16.2613 10.1971 16.5686 10.1101C17.0452 9.97553 17.5302 10.0075 18.0134 10.001C18.3015 9.99728 18.59 10.0055 18.8782 10.0022C18.9584 10.0014 18.9852 10.0305 18.9856 10.12C18.9882 10.7421 18.993 11.3646 19 11.9867C19.0011 12.0786 18.9738 12.1123 18.8885 12.1131C18.4899 12.1155 18.0914 12.1205 17.6932 12.1332C17.4095 12.1422 17.3536 12.3027 17.3436 12.5345C17.3245 12.9711 17.3322 13.4094 17.3274 13.8473C17.3267 13.9326 17.3771 13.9256 17.4275 13.9256C17.8905 13.9256 18.3534 13.9256 18.8167 13.9256C18.99 13.9256 18.9926 13.926 18.9783 14.1119C18.9348 14.6807 18.8881 15.2486 18.845 15.8174C18.8373 15.9179 18.7928 15.9528 18.7081 15.9528C18.2942 15.9536 17.8802 15.9565 17.4662 15.9585C17.3289 15.9594 17.3285 15.9585 17.3285 16.1079C17.3285 17.062 17.3285 18.0161 17.3285 18.9697C17.3234 18.9697 17.3179 18.9697 17.3127 18.9697L17.3131 18.9702Z" fill="#EC310D" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_69" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EC310D" />
                                                <stop offset="1" stop-color="#D1D1D1" />
                                            </linearGradient>
                                        </defs>
                                    </svg>&nbsp;&nbsp;
                                    <span>Facebook</span>
                                </div>
                            </a>
                        </li>
                        <li class="d-block ps-md-4 ps-2">
                            <a style="text-decoration: none;font-size: 16px;text-transform: capitalize;color: black;" class="instagram" href="https://www.instagram.com/islootech.it" target="_blank">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <circle cx="16.5" cy="16.5" r="16" fill="white" stroke="url(#paint0_linear_1_70)" />
                                        <path d="M23.0003 16.0266C22.9819 16.9136 22.9839 17.8012 22.9406 18.6875C22.8867 19.7922 22.4809 20.7331 21.5425 21.3827C21.0007 21.7575 20.3808 21.9363 19.7346 21.9534C18.2919 21.9916 16.8485 22.0027 15.4051 21.9995C14.8548 21.9981 14.2979 21.9718 13.7561 21.8837C12.2779 21.6431 11.2817 20.5911 11.0926 19.1005C11.0328 18.6336 11.0026 18.1609 11.0006 17.6914C10.9974 16.3165 11.0066 14.9417 11.0289 13.5675C11.0407 12.8356 11.1845 12.1275 11.5956 11.5042C12.1499 10.6645 12.9523 10.2069 13.9354 10.0971C14.5862 10.0241 15.2448 10.0057 15.9002 10.0017C17.054 9.99451 18.2085 10.0109 19.3623 10.0307C19.8883 10.0399 20.4104 10.1076 20.9048 10.3049C22.0225 10.7513 22.6589 11.5956 22.8683 12.7627C22.9406 13.1644 22.9622 13.5786 22.9721 13.9883C22.9885 14.6668 22.9767 15.3467 22.9767 16.0259C22.9846 16.0259 22.9925 16.0259 23.001 16.0259L23.0003 16.0266ZM12.0533 15.997C12.0599 15.997 12.0665 15.997 12.073 15.997C12.073 16.4678 12.0605 16.9392 12.0763 17.41C12.0947 17.9564 12.1052 18.5067 12.1781 19.0472C12.3061 19.9927 12.9326 20.6397 13.871 20.814C14.2716 20.8883 14.6853 20.9178 15.0938 20.9251C16.0782 20.9435 17.0632 20.9487 18.0476 20.9356C18.6918 20.927 19.3393 20.9126 19.9783 20.8376C20.9469 20.7239 21.6003 20.0874 21.7914 19.1314C21.8426 18.8749 21.8748 18.6106 21.8781 18.3496C21.8951 17.1503 21.9076 15.951 21.903 14.7516C21.901 14.1993 21.884 13.6444 21.8222 13.096C21.7244 12.2268 21.291 11.5699 20.4314 11.301C20.0308 11.1754 19.5947 11.1261 19.1731 11.1143C18.0364 11.082 16.8984 11.082 15.761 11.0834C15.2691 11.084 14.7773 11.1097 14.2861 11.1432C13.764 11.1794 13.2774 11.3247 12.8676 11.6745C12.3147 12.1459 12.1433 12.783 12.1131 13.4662C12.0756 14.3085 12.0711 15.1521 12.0527 15.995L12.0533 15.997Z" fill="#EC310D" />
                                        <path d="M13.9124 15.9726C13.8835 14.3446 15.2613 12.9546 16.9378 12.9211C18.6557 12.8869 20.059 14.2526 20.0728 16.0173C20.0853 17.6611 18.7726 19.0728 17.0199 19.0945C15.2836 19.1162 13.8927 17.6966 13.9131 15.9726H13.9124ZM14.9947 15.9838C14.9901 17.1023 15.8667 18.0011 16.9739 18.0123C18.0719 18.0234 18.9965 17.1082 18.9906 16.0167C18.9847 14.9094 18.0988 14.0119 17.0054 14.0053C15.9061 13.9988 14.9993 14.891 14.994 15.9838H14.9947Z" fill="#EC310D" />
                                        <path d="M20.1923 12.0847C20.5948 12.0828 20.9114 12.397 20.9133 12.8001C20.9153 13.1966 20.5916 13.524 20.1969 13.5247C19.8029 13.5247 19.4765 13.2005 19.4726 12.8054C19.4693 12.4109 19.7924 12.0874 20.1916 12.0854L20.1923 12.0847Z" fill="#EC310D" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_70" x1="30.1765" y1="16.374" x2="11.3839" y2="16.3073" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EC310D" />
                                                <stop offset="1" stop-color="#D1D1D1" />
                                            </linearGradient>
                                        </defs>
                                    </svg>&nbsp;&nbsp;
                                    <span>Instagram</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu -->
