
<?php if (have_posts()): while (have_posts()): the_post();?>


    <div class="card mb-3" >
        <div class="row">
            <?php if(has_post_thumbnail()): ?>
            <div class="col-lg-4 d-none d-lg-flex" >
                <img class=" w-100 img-fluid" src="<?php the_post_thumbnail_url("blog-small"); ?>" alt="image">
            </div>   
            <?php endif; ?>
            <div class="d-flex col-md-12 col-lg-8 align-items-center">
                <div class="card-body w-100">
                    <div class="post_card_meta mb-2">
                        <span class="category">
                            
                            <?php the_category(); ?>
                        </span>
                        <span class="date">
                            <?php the_date(); ?>
                        </span>
                    </div>
                    <h5 class="card-title"><?php the_title();?></h5>
                    
                    <div class="card-text ">
                    <?php echo wp_trim_words( get_the_excerpt(), 30 );?>
                    </div>

                    
                    <div class="card_footer pt-3">
                        <a href="<?php the_permalink();?>" class="btn btn-primary"> Read more </a>
                        <span class="comment">
                                <a href="<?php echo get_permalink($comment->comment_post_ID);?>"><?php comments_number(); ?></a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php endwhile;else:endif;?>
