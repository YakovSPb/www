<?php get_header(); ?>
    <div id="heading">
        <h1>Результаты поиска</h1>
    </div>
    <!-- Content -->

<?php get_sidebar();?>
    <div class="content">
        <p class="pagetitlesearch">По вашему запросу <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms"><b>'); echo $key; _e('</span></b>'); _e(' &mdash; '); echo $count . ' '; _e('результат'); wp_reset_query(); ?></p>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php ale_part('postpreview' );?>
        <?php endwhile; else: ?>
           <p>Ничего не найдено!</p> <?php ale_part('notfound')?>
            <img src="<?php echo get_template_directory_uri() ?>/css/img/notfound.jpg" />
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