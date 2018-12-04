<?php get_header(); ?>
    <div id="heading">
        <h1>Мой Блог</h1>
    </div>

    <?php get_sidebar(); ?>


    <div class="content">
        <div class="blog-single-caption"><a class="backblog" href="<?php echo home_url(); ?>/blog">< Назад</a></div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="text">

                    <?php ale_part('postfull');?>

                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>








    </div>
<?php get_footer(); ?>