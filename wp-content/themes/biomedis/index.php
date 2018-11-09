<?php get_header(); ?>
    <div id="heading">
        <h1>Мой Блог</h1>
    </div>
    <!-- Content -->

<?php get_sidebar();?>
    <div class="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php ale_part('postpreview' );?>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
        <?php endif; ?>

        <div class="post-pagination">
            <div class="arrow-left"><?php if(get_previous_posts_link()){
                echo get_previous_posts_link();
                } else {?>
                <img src="<?php echo get_template_directory_uri() ?>/css/img/left.png" />
               <?php } ?>
            </div>
            <div class="post-pages-f"><?php ale_page_links();?></div>
            <div class="arrow-right"><?php if(get_next_posts_link()){
                echo get_next_posts_link();
                } else {?>
                <img src="<?php echo get_template_directory_uri() ?>/css/img/right.png" />
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="clear"></div>


<?php get_footer(); ?>