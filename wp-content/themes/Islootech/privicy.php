<?php
/*
Template Name: Privicy Policy Template
*/

?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php endwhile;
endif; ?>
<style>
.navbar_1, footer {
    display: none !important;
    opacity: 0 !important;
}
#demo-pie-2, button{
    display: none !important;
    opacity: 0 !important;
}
body{
  background-color: #80808012;
}
</style>
<div class="clear_div"></div>

<div class="container py-5 bg-white mt-md-5 mt-0 mb-md-5 mb-0">
   <div class="col-12 px-md-5">
      <?php the_content(); ?>
   </div>
</div>


