<?php
/**
 * Template Name: Template About (team)
 */
get_header(); ?>
    <div id="heading">
        <h1><?php the_title();?></h1>
    </div>
    <!-- Content -->
<?php get_sidebar();?>

    <div class="content">

        <?php if(ale_get_meta('descr_about')) {?>
                <section>
                    <blockquote>
                        <p><?php echo ale_get_meta('descr_about');?></p>
                        <cite><?php echo ale_get_meta('who_qoute');?></cite>
                    </blockquote>
                </section>
        <?php } ?>
        <div class="fig">
           <figure>
                <?php if(ale_get_meta('img_about1')){?>
                <img src="<?php echo ale_get_meta('img_about1') ?>" width="320" height="175" alt=""/>
                <?php } ?>
            </figure>
                <figure>
                    <?php if(ale_get_meta('img_about2')){?>
                        <img src="<?php echo ale_get_meta('img_about2') ?>" width="320" height="175" alt=""/>
                    <?php } ?>
            </figure>
        </div>
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page_content">
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>

        <div class="production_footer">
           <h2>Продукция</h2>

                <span class="left">
                <i class="fa fa-angle-left"></i>
                </span>


            <div class="pro_list">
               <?php

                $args = array(
                    'post_type' =>'products',
                    'posts_per_page' => -1
                );

                $my_production = new WP_Query($args);

                if ( $my_production->have_posts()) : while ( $my_production->have_posts()) :  $my_production->the_post();?>

                <div class="item_product cf">
                    <div class="image_product">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'products-min'); ?></a>
                    </div>
                    <div class="title_product">
                        <?php if(ale_get_meta(prod_title)){?>
                            <a href="<?php the_permalink(); ?>"><h4 class="product"><?php echo ale_get_meta(prod_title); ?></h4></a>
                        <?php } ?>
                       <?php if(ale_get_meta('prod_prise')) {?>
                            <span class="price"><?php  echo ale_get_meta('prod_prise'); ?></span>
                        <?php } ?>
                    </div>
                </div>
            </a>
            <?php  endwhile;  endif; ?>
            </div>

        <span class="right"><i class="fa fa-angle-right"></i></span>
        </div>

        </div>

<?php get_footer(); ?>