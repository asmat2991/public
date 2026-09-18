<?php
get_header();

?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<div class="isloo-404 pt-3 pb-3">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 col-md-3 it_col">
            </div>

            <div class="col-12 col-md-9">
                <div class="mh-404__content text-center pt-5">

                    <h1 class="isloo-404__title text-start"><?php esc_html_e('404', 'myhome'); ?></h1>
                    <div class="isloo-404__text text-start"><?php esc_html_e('The page you requested could not be found.', 'myhome'); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>