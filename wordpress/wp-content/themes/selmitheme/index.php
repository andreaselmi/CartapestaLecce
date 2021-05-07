<?php get_header(); ?>

<div class="container page-wrap">

    <h1><?php echo single_cat_title(); ?></h1>

    <?php get_template_part("includes/section", "archive")?>

    <?php the_posts_pagination();?>

</div>





<?php get_footer();?>