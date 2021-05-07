<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<div class="container page-wrap">

    <?php the_content(); ?>

</div>


<?php endwhile; else: endif; ?>