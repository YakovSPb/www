<!-- Put this script tag to the <head> of your page -->

<script type="text/javascript">
    VK.init({apiId: 6747664, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
    VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>

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