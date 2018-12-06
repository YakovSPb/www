<?php get_header(); ?>
    <div id="heading">
        <h1>Биодобавки</h1>
    </div>

    <!-- Content -->
	<?php get_sidebar();?>
    <div class="content-production cf">
<?php global $query_string; query_posts($query_string.'&posts_per_page=11');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="hd-block">
        <a href="<?php the_permalink(); ?>">  <?php if(get_the_post_thumbnail($post->ID,'post-blogsize')){echo get_the_post_thumbnail($post->ID,'products-thumba'); }?></a>
        <div class="hd-block-text">
            <a href="<?php the_permalink(); ?>"><h3><?php echo the_title();?></h3></a>
            <?php echo ale_trim_excerpt(15); ?>
        </div>
        <div class="block-text-bottom">
            <span class="price"><?php  echo ale_get_meta('prod_prise'); ?></span>
        </div>
    </div>
<?php endwhile;  endif;  ?>
        
        <div class="clear"></div>
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

<?php get_footer(); ?>