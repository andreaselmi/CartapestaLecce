<div
  class="bg-image h-100 d-flex flex-column"
  style="
    background-image: url('<?php the_post_thumbnail_url(); ?>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
  "
>
<?php get_header(); ?>


<div class="container page-wrap">
    <div class="home_text_container">

    <h1><?php the_title(); ?></h1>


    <?php get_template_part("includes/section", "content") ?>


</div>

</div>

<?php get_footer(); ?> 
</div>




