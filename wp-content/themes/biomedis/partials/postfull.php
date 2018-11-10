<!-- Blog Item -->

<div class="blog">
    <div class="entry-blog">
        <!-- SHORT POST #1 -->
        <div class="blog-post cf">
            <a href="<?php the_permalink(); ?>">
                <?php if(get_the_post_thumbnail($post->ID,'post-blogsize')){
                    echo get_the_post_thumbnail($post->ID,'post-blogsize');
                } else { ?>
                    <img src="<?php echo get_template_directory_uri();?>/css/img/empty.png" widht="675px" height="260px" alt="" />
                <?php } ?>
            </a>


            <div class="post-title">
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            </div>
            <div>
                <?php the_content(); ?>
            </div>

        </div>


    </div>
</div>