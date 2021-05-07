<?php get_header(); ?>

<div class="container page-wrap">

    <h4>Results for "<?php echo the_search_query(); ?>"</h4>

    <?php get_template_part("includes/section", "searchresults")?>

    <?php the_posts_pagination();?>

</div>





<?php get_footer();?>