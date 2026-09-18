<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
  get_template_part('template-parts/post/content', get_post_format());
endwhile;
?>

<style>
  .main-header{background-color:#000;position:absolute;top:0;z-index:17;width:100%}.c_first_blg{position:absolute;bottom:0;left:0;background:0 0!important}b,strong{font-weight:600;font-size:22px}.b_newa{font-weight:700;font-size:24px}.social_share_ul{flex-wrap:nowrap}.social_share_ul li{padding:7px;width:-webkit-fill-available}.social_share_ul li a{text-decoration:none}.comment_link{color:#0a5695b8}.comment_link:hover{color:#fff}.c_the_content h1,.c_the_content h2,.c_the_content h3,.c_the_content h4{font-size:22px!important;letter-spacing:1px!important;font-weight:400!important;padding-top:1.5rem}.c_the_content p{color:#000!important;font-weight:400!important;line-height:30px!important;font-size:15px!important;font-family:Poppins,sans-serif!important}.c_recommended{margin-bottom:2.2rem;margin-top:1.5rem;font-weight:400!important;font-size:22px!important;letter-spacing:1px!important}@media(max-width:767px){.c_the_content .row div{margin-bottom:2rem}.m_flex{display:flex;place-content:space-between}}
</style>

<div class="clear_div"></div>

<section style="margin-top: 8rem;">
  <div class="container h-100 mt-4">
    <h1 class="page-title text-black text-center"><?php the_title(); ?></h1>
  </div>
</section>
<div class="container c_about_container" style="margin-top: 5rem;">
  <hr>
</div>


<section class="mt-3">
  <div class="container px-md-5 px-3 py-5">
    <div class="row">
      <div class="col-lg-8 text-dark">
        <img class="w-100 img-fluid" src="<?php the_post_thumbnail_url(); ?>">
        <h6 class="pb-2 bold b_strong_up mt-3"><?php the_time('F. j, Y'); ?></h6>
       <div class="d-flex">    
            <span class="pe-2"><?php $commentscount = get_comments_number(); echo $commentscount; ?> Comment</span>
            <br>
            <a class="comment_link" href="#commentform">Leave a comment</a>
        </div>
        <?php the_content(); ?>

        <div class="col-md-12 col-12 pt-2 px-0">
            <?php comments_template(); ?>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4 ps-2 ps-md-2 pe-lg-0">
        
        <script async="" src="https://static.addtoany.com/menu/page.js"></script>
         <div class="card sticky-md-top top-lg-100px top-md-100px top-sm-10px" style="z-index: auto">
          <div class="card-body">
          <p class="b_newa">Share this news</p>
            <ul class="social_share_ul social_ul d-flex ps-0">
              <li class="d-block" style="background: #3b5998;"><a href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fsignaturehotelislamabad.com.pk%2FBlogs%2Finvestment-opportunities-in-local-getaways%2F%23&amp;linkname=Signature%20Hotels%20Islamabad&amp;linknote=" class="text-white a2a_button_facebook all_sitebar_icon" target="_blank" rel="nofollow noopener">
                  <i class="fa fa-facebook"></i> &nbsp; facebook
                </a>
              </li>
              <li class="d-block" style="background: #007bb5;">
                <a href="https://www.addtoany.com/add_to/linkedin?linkurl=https%3A%2F%2Fsignaturehotelislamabad.com.pk%2FBlogs%2Finvestment-opportunities-in-local-getaways%2F%23&amp;linkname=Signature%20Hotels%20Islamabad&amp;linknote=" class="text-white a2a_button_linkedin all_sitebar_icon " target="_blank" rel="nofollow noopener">
                  <i class="fa fa-linkedin"></i> &nbsp; linkedin
                </a>
              </li>
              <li class="d-block" style="background: black;">
                <a href="/#twitter" class="text-white a2a_button_twitter all_sitebar_icon " target="_blank" rel="nofollow noopener">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                  </svg> &nbsp; twitter
                </a>
              </li>

            </ul>
            <br>
          <?php
         $custom_posttype_news = new WP_Query(array(
        'post_type' => 'newses',
        'posts_per_page' => 10, 
          ));
          ?>
            <p class="b_newa">Related news</p>
            <?php
            while ($custom_posttype_news->have_posts()) {
            $custom_posttype_news->the_post();
            ?>
             <a class="text-dark" style="text-decoration: none;" href="<?php the_permalink(); ?>">
            <ul class="d-flex align-items-start ps-0">
              <li class="d-block" style="width: 40%;">
                <img class="w-100 img-fluid" style="height: 87px;object-fit: cover;" src="<?php the_post_thumbnail_url(); ?>">
              </li>
              <li class="d-block ps-2" style="width: 80%;">
                <div><?php echo wp_trim_words( get_the_title(), 7 ); ?></div>
                <div><?php the_time('F. j, Y'); ?></div>
              </li>
            </ul>
            </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
</section>
<?php get_footer(); ?>