<?php get_header(); ?>
    <div id="heading">
        <h1>Продукция</h1>
    </div>
<?php get_sidebar();?>
    <!-- Content -->
    <div class="content-production">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php ale_part('postfull' );?>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
        <?php endif; ?>

        <div class="hd-block">
            <a href="#"><img src="images/spain.jpg" alt="" /></a>
            <div class="hd-block-text">
                <a href="#"><h3>Spain</h3></a>
                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
                <div class="block-text-bottom">
                    <span class="price">$500</span>
                    <span><img src="images/bus.png" alt="" /></span>
                    <span class="date">5 days</span>
                </div>
            </div>
        </div>

    </div>

        <!-- Blog Content -->
        <div class="blog-content">

        </div>

        <!-- Blog Nav  -->
        <div class="blog-nav">
            <span class="left"><?php echo get_previous_posts_link(__('&lt; Newer Posts','aletheme')); ?></span>
            <span class="right"><?php echo get_next_posts_link(__('Older Posts &gt;','aletheme')); ?></span>
            <div class="center"><?php _e('page','aletheme'); ?> <?php echo $paged; ?> <?php _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; ?></div>
        </div>

        <!-- Blog Nav -->
        <div class="blog-line"></div>

        <!-- Blog Footer  -->
        <div class="blog-footer">
            <?php ale_part('archives'); ?>
        </div>

    </div>
<?php get_footer(); ?>