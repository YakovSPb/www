<!-- Blog Item -->

<div class="blog">
    <div class="entry-blog">
        <!-- SHORT POST #1 -->
        <div class="blog-post">

            <div class="postfullimg">
                <?php if(get_the_post_thumbnail($post->ID,'post-blogsize')){
                    echo get_the_post_thumbnail($post->ID,'post-blogsize');
                } else { ?>
                    <img src="<?php echo get_template_directory_uri();?>/css/img/empty.png" widht="675px" height="260px" alt="" />
                <?php } ?>
            </div>


            <div class="post-title-postfull">
              <h4 class="posfull_h4"><?php the_title(); ?></h4>
            </div>
            <div>
                <?php the_content(); ?>
            </div>

        </div>


    </div>
</div>