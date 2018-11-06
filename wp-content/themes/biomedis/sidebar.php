<div class="as">
    <aside>
        <div class="leftnav">
            <?php
            if ( has_nav_menu( 'left_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'left_menu',
                    'menu'			=> 'Left Menu',
                    'menu_class'	=> 'leftmenu cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>
        </div>

        <?php if(ale_get_meta('title_map')) {?><h2><?php echo ale_get_meta('title_map');?></h2><?php } ?>
        <?php if(ale_get_meta('map_display') == 'show'){?>
            <span class="value2"><?php echo ale_get_option('footer_address'); ?></span>
        <?php } ?>
        <p>
            <?php if(ale_get_meta('img_map')){?>
                <img src="<?php echo ale_get_meta('img_map') ?>" width="230" height="180" alt="Мой офис"/>
            <?php } ?>
        </p>

    </aside>
</div>