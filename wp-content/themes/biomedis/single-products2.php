<?php get_header(); ?>
    <div id="heading">
        <h1><?php the_title();?></h1>
    </div>

    <?php get_sidebar(); ?>
<div class="content">


    <div class="products-single">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



    <div class="hd-block">
        <?php if(get_the_post_thumbnail($post->ID,'post-blogsize')){
            echo get_the_post_thumbnail($post->ID,'post-blogsize');}?>
        <div class="block-text-bottom">
            <span class="price"><?php  echo ale_get_meta('prod_prise'); ?></span>

        </div>

    </div>
    <div class="hd-block-text">
        <?php the_content();?>

    </div>

                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>

</div>





</div>
<div class="clear"></div>

<?php get_footer(); ?>