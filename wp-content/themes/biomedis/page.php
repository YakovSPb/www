<?php get_header(); ?>
    <div id="heading">
        <h1><?php the_title();?></h1>
    </div>
<?php get_sidebar();?>
    <div class="page-center">
        <div class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="contact-content">
                    <?php ale_part('pagehead');?>
                    <?php the_content(); ?>
                    <?php ale_part('pagefooter');?>
                </div>
            <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>

            <?php if (is_page('commends')) {
               comments_template();
            }?>

        </div>
    </div>
<?php get_footer(); ?>