<?php
/*
  * Template name: Home
  * */
get_header(); ?>

<div class="home_content">

    <div class="home_about">
        <h2>Обо мне</h2>
        <figure>
                <img src="<?php echo ale_get_meta('fileupload') ?>" width="320" height="175" alt=""/>
        </figure>
        <figure>
            <?php if(ale_get_meta('descr1')){echo ale_get_meta('descr1'); } ?>
            <a class="read" href="/aboutme/">Подробнее</a>
        </figure>
    </div>

    <div class="home-content-production">
        <h2>Продукция</h2>
        <?php $custom_query = new WP_Query( array( 'post_type' => 'products','posts_per_page'=>'3' ) ); ?>
        <?php if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="home-hd-block">
                <a href="<?php the_permalink(); ?>">  <?php if(get_the_post_thumbnail($post->ID,'post-blogsize')){echo get_the_post_thumbnail($post->ID,'products-thumba'); }?></a>
                <div class="home-block-text">
                    <a href="<?php the_permalink(); ?>"><h3><?php echo the_title();?></h3></a>
                    <?php echo ale_trim_excerpt(15); ?>
                    <div class="block-text-bottom">
                        <span class="price"><?php  echo ale_get_meta('prod_prise'); ?></span>

                    </div>
                </div>
            </div>
        <?php endwhile;  endif;  ?>
    </div>


    <div class="home-blog-post">
        <h2>Мой Блог</h2>
<?php global $query_string; query_posts($query_string.'&posts_per_page= 2');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="hd-block">
        <a href="<?php the_permalink(); ?>">  <?php if(get_the_post_thumbnail($post->ID)){echo get_the_post_thumbnail($post->ID); }?></a>
        <div class="post-title">

            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
        </div>
        <div class="post-short">
            <p>
                <?php echo get_the_excerpt(); ?>

            </p>

            <span class="date"><?php echo get_the_date();?></span>
            <a class="read" href="<?php the_permalink(); ?>">Читать все</a>

        </div>

    </div>
<?php endwhile;  endif;  ?>
    </div>
</div>
</div>
    </div>
</div>
<?php get_footer();?>

