<?php get_header(); ?>
    <div id="heading">
        <h1><?php the_title();?></h1>
    </div>

    <?php get_sidebar(); ?>



    <div class="products-single">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div class="text">

                    <?php ale_part('postfull');?>

                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>


    </div>






<?php get_footer(); ?>