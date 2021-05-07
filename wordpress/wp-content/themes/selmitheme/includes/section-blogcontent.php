<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <h1><?php the_title(); ?></h1>

        <div class="single_post_subtitle">


            <?php 
            $fname = get_the_author_meta("first_name");
            $lname = get_the_author_meta("last_name");
            ?>

            <p>By <?php echo $fname?> <?php echo $lname ?> - <?php echo get_the_date(); ?></p>
            <?php
                the_tags(
                    "<span class='tag'><i class='fa fa-tag'></i>",
                    "</span><span class='tag'><i class='fa fa-tag'></i>",
                    "</span>"
                );
                ?>
        </div>

    <?php if(has_post_thumbnail()): ?>

    
    
    <img src="<?php the_post_thumbnail_url("blog-large"); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail" />


    <?php endif; ?>

        

        <?php the_content(); ?>

        <?php 
            $categories = get_the_category();
        ?>
            <div class="singlepost_categories">
            <span> Categorie: </span>

        <?php
            if($categories):
                foreach($categories as $category): 
                    ?>
        <a href ="<?php echo get_category_link($category->term_id); ?>" >
                <?php echo $category->name; ?>
            </a>
            
            <?php endforeach; endif; ?>
            
        </div>


                
        <?php 
        if(comments_open()): 
            comments_template();
        endif;
        ?>

<?php endwhile; else: endif; ?>