<?php
function defer_js_files($tag, $handle, $src)
{
    if (!is_admin()) {
        $tag = str_replace('src', 'defer="defer" src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'defer_js_files', 10, 3);

function preload_css()
{
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/style.css" as="style">';
}
add_action('wp_head', 'preload_css');



function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
//Main Configruration Function
function learnwp_config()
{


    //Register Our Menu
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu',
        )
    );
    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
    //Start Custom Logo 
    add_theme_support('custom-logo', [
        'header-text'          => ['site-title', 'site-description'],
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
    ]);
    //End Custom Logo
}
add_action('after_setup_theme', 'learnwp_config', 0);


function bootstrapwp_widgets_init()
{

    // custom sidebar
    register_sidebar(
        array(
            'name'          => __('community'),
            'id'            => 'secondary',
            'before_widget' => '<div class="secondary">',
            'after_widget'  => "</div>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}

add_action('init', 'bootstrapwp_widgets_init');


//Fortfolio
function custom_posttype_portfolio()
{

    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add Portfolio',
        'all_items' => 'All Portfolio',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rest_base'          => 'portfolio',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'menu_icon'   => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),


        'exclude_from_search' => false,
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'custom_posttype_portfolio');
//Fortfolio
//start services logo
function custom_posttype_logo()
{

    $labels = array(
        'name' => 'Service Logo',
        'singular_name' => 'Service Logo',
        'add_new' => 'Add Service Logo',
        'all_items' => 'All Service Logo',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search Service Logo',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rest_base'          => 'logo',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'menu_icon'   => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('post_tag'),


        'exclude_from_search' => false,
    );
    register_post_type('logo', $args);
}
add_action('init', 'custom_posttype_logo');
//end service logo


// Start News
function custom_posttype_news()
{

    $labels = array(
        'name' => 'News',
        'singular_name' => 'News',
        'add_new' => 'Add News',
        'all_items' => 'All News',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search News',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rest_base'          => 'news',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        //         'menu_icon'   => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),


        'exclude_from_search' => false,
    );
    register_post_type('news', $args);
}
add_action('init', 'custom_posttype_news');
// End News
// Start News
function custom_posttype_blogs()
{

    $labels = array(
        'name' => 'Blogs',
        'singular_name' => 'Blogs',
        'add_new' => 'Add Blogs',
        'all_items' => 'All Blogs',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search Blogs',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rest_base'          => 'blog',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        //         'menu_icon'   => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),


        'exclude_from_search' => false,
    );
    register_post_type('blog', $args);
}
add_action('init', 'custom_posttype_blogs');
// End News

//careers
function custom_posttype_career()
{

    $labels = array(
        'name' => 'Careers',
        'singular_name' => 'Careers',
        'add_new' => 'Add Careers',
        'all_items' => 'All Careers',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search Careers',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rest_base'          => 'career',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'menu_icon'   => 'dashicons-open-folder',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),


        'exclude_from_search' => false,
    );
    register_post_type('career', $args);
}
add_action('init', 'custom_posttype_career');
//careers


//Technologies We Use
function custom_posttype_technologies()
{

    $labels = array(
        'name' => 'Technologies We Use',
        'singular_name' => 'Technologies We Use',
        'add_new' => 'Add Technologies We Use',
        'all_items' => 'All Technologies We Use',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_items' => 'Search Technologies We Use',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'rest_base'          => 'technologies',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'menu_icon'   => 'dashicons-welcome-view-site',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('category', 'post_tag'),


        'exclude_from_search' => false,
    );
    register_post_type('technologies', $args);
}
add_action('init', 'custom_posttype_technologies');
//End Technologies We Use

// Start Comment Form PlaceHolder

add_filter('comment_form_default_fields', 'wpse_62742_comment_placeholders');

function wpse_62742_comment_placeholders($fields)
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
            . _x(
                'Name*',
                'comment form placeholder',
                'theme_text_domain'
            )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',

        '<input type="email" placeholder="Email*"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',

        '<input placeholder="Website" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}

// End Comment Form Placeholder


function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Remover Wordpress Defult Blog post
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type()
{
    remove_menu_page('edit.php');
}


//Portfolioslider
function portfolio_slider_shortcode()
{
    ob_start(); // Start output buffering
?>

    <section class="mt-5 pt-md-5 pb-md-5 pb-0" style="background-color: #F1F1F1;">
        <div class="container-fluid ps-md-5 mb-5 py-5 pe-md-0">
            <?php
            $count = 0;
            $custom_posttype_portfolio = new WP_Query(
                array(
                    'posts_per_page' => 100,
                    'post_type' => 'portfolio'
                )
            );
            $total_posts = $custom_posttype_portfolio->found_posts;
            ?>
            <!-- Tab Content -->
            <div class="tab-content  ps-md-5">
                <div class="row justify-content-end ps-md-5">
                    <div class="col-md-8 ps-md-5">
                        <h1 class="mb-4 slider_h1 ps-md-0 ps-3">
                            Unlocking Excellence A
                            <br>
                            Showcase of Our Company's
                            <br>
                            Finest Achievements
                        </h1>
                    </div>
                </div>
                <div class="container-fluid ps-md-5 tab-pane fade show active pe-md-0">
                    <div class="row ps-md-5">
                        <!-- Left Section -->
                        <div class="col-lg-4 imtiaz_section">
                            <?php
                            if ($custom_posttype_portfolio->have_posts()) :
                                while ($custom_posttype_portfolio->have_posts()) :
                                    $custom_posttype_portfolio->the_post();
                                    $count++;
                            ?>
                                    <div class="main_detail <?php echo $count == 1 ? 'active' : ''; ?>">
                                        <?php
                                        $portfolio = get_field('portfolio'); // Get ACF portfolio field
                                        if ($portfolio && isset($portfolio['logo'])) : ?>
                                            <img class="img-fluid imtaiz_logo mt-md-0 mt-0" style="height: auto;" src="<?php echo esc_url($portfolio['logo']['url']); ?>" alt="<?php echo esc_attr($portfolio['logo']['alt']); ?>">
                                        <?php endif; ?>
                                        <p><?php the_content(); ?></p>

                                        <?php
                                        $portfolio = get_field('portfolio');
                                        if ($portfolio) :
                                            $page_url = $portfolio['page_url'] ?? ''; // Safely fetch 'page_url' field
                                            if ($page_url) : ?>
                                                <a type="button" href="<?php echo esc_url($page_url); ?>" class="btn mb-2 mt-4" style="border-radius: 13.5px;border: 1px solid #D5D5D5 !important;color: #4B4B4B;font-family: 'Inter';">Case Study</a>
                                            <?php else : ?>
                                                <p>The URL is not available</p>
                                        <?php endif;
                                        endif; ?>

                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                        <!-- Right Section -->
                        <div class="video_slider_col_8 col-lg-8 position-relative pe-md-0">
                            <!-- Video Slider -->
                            <div class="owl-carousel video_slider owl-theme">
                                <?php
                                $count = 0;
                                if ($custom_posttype_portfolio->have_posts()) :
                                    while ($custom_posttype_portfolio->have_posts()) :
                                        $custom_posttype_portfolio->the_post();
                                        $count++;
                                ?>
                                        <div class="item-video gap-4 d-flex">
                                            <?php
                                            $portfolio = get_field('portfolio');
                                            if ($portfolio) :
                                                $page_url = $portfolio['page_url'] ?? ''; // Safely fetch 'page_url' field
                                                if ($page_url) : ?>
                                                    <a type="button" href="<?php echo esc_url($page_url); ?>">
                                                        <img class="w-100 slider_video" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> Video">
                                                    </a>
                                                <?php else : ?>
                                                    <p>The URL is not available</p>
                                            <?php endif;
                                            endif; ?>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                            <!-- Pagination and Counter -->
                            <div class="owl_pagination" style="margin-top: 0.5rem !important;">
                                <!-- <div class="owl_dots"></div> -->
                                <div id="counter">
                                    <span id="current-counter"><?php echo str_pad($count, 2, '0', STR_PAD_LEFT); ?></span>
                                    <span class="ps-1">/</span>
                                    <span id="total-counter" class="ps-1" style="font-weight: 400;"><?php echo str_pad($total_posts, 2, '0', STR_PAD_LEFT); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    return ob_get_clean(); // Return the buffered output
}
add_shortcode('portfolio_slider', 'portfolio_slider_shortcode');



//book now form
function dynamic_contact_form_shortcode()
{
    ob_start(); ?>
    <form id="dynamicContactForm">
        <div class="row g-3">
            <div class="col-md-6 form-floating px-3 my-3">
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required>
                <label for="fullName">Full Name</label>
            </div>
            <div class="col-md-6 form-floating px-3 my-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="col-md-6 form-floating px-3 my-3">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                <label for="phone">Phone Number</label>
            </div>
            <div class="col-md-6 form-floating px-3 my-3">
                <input type="text" class="form-control" id="company" name="company" placeholder="Company" required>
                <label for="company">Company</label>
            </div>
            <div class="col-md-6 form-floating px-3 my-3">
                <select class="form-select" id="budget" name="budget" required>
                    <option value="" disabled selected hidden></option>
                    <option value="Below $5,000">Below $5,000</option>
                    <option value="$5,001 - $10,000">$5,001 - $10,000</option>
                    <option value="$10,001 - $20,000">$10,001 - $20,000</option>
                    <option value="$20,001 - $50,000">$20,001 - $50,000</option>
                    <option value="More than $50,000">More than $50,000</option>
                </select>
                <label for="budget">What is your budget?</label>
            </div>
            <div class="col-md-6 form-floating px-3 my-3">
                <select class="form-select" id="aboutUs" name="aboutUs" required>
                    <option value="" disabled selected hidden></option>
                    <option value="Google">Google</option>
                    <option value="Linkedin">Linkedin</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Website">Website</option>
                    <option value="Other">Other</option>
                </select>
                <label for="aboutUs">How did you hear about us?</label>
            </div>
            <div class="col-12 form-floating px-3 my-3">
                <textarea class="form-control" placeholder="About Project" id="aboutProject" name="aboutProject" style="height: 100px" required></textarea>
                <label for="aboutProject" style="margin-top: -0.5rem;">Tell us about your project?</label>
            </div>
            <div class="col-12 text-start mb-4 pb-3">
                <div class="full_button full_button_2 request_a_quote">
                    <button type="submit" id="submitForm">Request a Quote
                        <img src="https://islootech.com/wp-content/themes/Islootech/css/img/arrow_giff.gif" alt="" loading="lazy" style="margin-top: -2px;">
                    </button>
                </div>
            </div>
        </div>
        <div id="formMessage" style="display:none; color:green;">Your message has been sent successfully!</div>
    </form>
    <script>
        document.getElementById('dynamicContactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            formData.append('action', 'handle_dynamic_form');

            try {

                const response = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                    method: 'POST',
                    body: formData,
                });

                const result = await response.json();

                if (result.success) {
                    document.querySelector('.form_p').style.display = 'none';

                    document.getElementById('dynamicContactForm').style.display = 'none';

                    const thankYouElement = document.querySelector('.thank_you');
                    thankYouElement.style.display = 'block';
                    thankYouElement.innerHTML = '<p style="color:green;">Thank you! Your message has been sent successfully.</p>';

                    this.reset();
                } else {
                    alert(result.data || 'Failed to send your message. Please try again.');
                }
            } catch (error) {
                console.error('Error submitting the form:', error);
                alert('An error occurred. Please try again.');
            }
        });
    </script>
<?php
    return ob_get_clean();
}
add_shortcode('dynamic_contact_form', 'dynamic_contact_form_shortcode');


function handle_dynamic_form_submission()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullName = sanitize_text_field($_POST['fullName']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $company = sanitize_text_field($_POST['company']);
        $budget = sanitize_text_field($_POST['budget']);
        $aboutUs = sanitize_text_field($_POST['aboutUs']);
        $aboutProject = sanitize_textarea_field($_POST['aboutProject']);

        $to = 'asmat2991@gmail.com, support@islootech.com';
        $subject = 'New Quote Request';
        $headers = [
            'From: Islootech <info@islootech.com>',
            'Content-Type: text/html; charset=UTF-8',
        ];
        $message = "
            <h3>New Quote Request</h3>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Company:</strong> $company</p>
            <p><strong>Budget:</strong> $budget</p>
            <p><strong>How did you hear about us:</strong> $aboutUs</p>
            <p><strong>Project Details:</strong> $aboutProject</p>
        ";

        $sent = wp_mail($to, $subject, $message, $headers);

        if ($sent) {
            wp_send_json_success('Message sent successfully.');
        } else {
            wp_send_json_error('Failed to send the message.');
        }
    }
}
add_action('wp_ajax_handle_dynamic_form', 'handle_dynamic_form_submission');
add_action('wp_ajax_nopriv_handle_dynamic_form', 'handle_dynamic_form_submission');


//contact us form
function handle_contact_form() {
    // Validate and sanitize fields
    $name = sanitize_text_field($_POST['name'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (!$name || !$email || !$message) {
        wp_send_json_error('All required fields must be filled out.');
    }

    $to = 'asmat2991@gmail.com, support@islootech.com';
    $headers = ['Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>'];
    $body = "
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Company:</strong> {$company}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Message:</strong></p>
        <p>{$message}</p>
    ";

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success();
    } else {
        wp_send_json_error('Failed to send the email. Please try again.');
    }
}
add_action('wp_ajax_handle_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form');



//Apply Formadd_action('wp_ajax_handle_career_form', 'handle_career_form');
add_action('wp_ajax_nopriv_handle_career_form', 'handle_career_form');
add_action('wp_ajax_handle_career_form', 'handle_career_form');

function handle_career_form() {
    // Validate and sanitize inputs
    $full_name  = sanitize_text_field($_POST['fullName'] ?? '');
    $email      = sanitize_email($_POST['email'] ?? '');
    $phone      = sanitize_text_field($_POST['phone'] ?? '');
    $experience = sanitize_text_field($_POST['experience'] ?? '');

    if (!$full_name || !$email || !$phone || !$experience) {
        wp_send_json_error('All fields are required.');
    }

    // Validate email format
    if (!is_email($email)) {
        wp_send_json_error('Invalid email format.');
    }

    // Handle file upload
    $cv_url = '';
    if (!empty($_FILES['cv']['name'])) {
        $upload = wp_handle_upload($_FILES['cv'], ['test_form' => false]);

        if ($upload && !isset($upload['error'])) {
            $cv_url = $upload['url']; // File URL
        } else {
            wp_send_json_error('Error uploading CV: ' . $upload['error']);
        }
    } else {
        wp_send_json_error('Please upload your CV.');
    }

    // Prepare email
    $to = ['asmat2991@gmail.com', 'support@islootech.com'];
    $subject = 'New Career Application';

    // Table formatted email content
    $message = '
    <html>
    <head>
        <style>
            table { width: 100%; border-collapse: collapse; }
            th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
            th { background-color: #f4f4f4; }
            a { color: #0073aa; text-decoration: none; }
        </style>
    </head>
    <body>
        <h2>New Career Application</h2>
        <table style="width: fit-content !important;">
            <tr>
                <th>Full Name</th>
                <td>' . esc_html($full_name) . '</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>' . esc_html($email) . '</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>' . esc_html($phone) . '</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>' . esc_html($experience) . '</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href="' . esc_url($cv_url) . '" target="_blank">Download CV</a></td>
            </tr>
        </table>
    </body>
    </html>';

    // Email headers
    $headers = [
        'From: Career Form <info@islootech.com>',
        'Reply-To: ' . $email,
        'Content-Type: text/html; charset=UTF-8'
    ];

    // Send email
    if (wp_mail($to, $subject, $message, $headers)) {
        wp_send_json_success(['message' => 'Application submitted successfully.']);
    } else {
        error_log('Career form email failed to send.');
        wp_send_json_error('Failed to send email.');
    }
}


//News Letter
