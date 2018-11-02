    <!-- Footer -->
    </div>
    <div class="clear"></div>


    <footer>
        <div id="ale_footer">
            <div id="ale_contact">
                <h3>Контакты</h3>
                <div class="con"><span><?php echo ale_get_option('footer_address_label'); ?></span> <?php echo ale_get_option('footer_address'); ?></div>
                <div class="con"><span><?php echo ale_get_option('footer_telefon_label'); ?></span> <?php echo ale_get_option('footer_telefon'); ?></div>
                <div class="con"><span><?php echo ale_get_option('footer_email_label'); ?></span> <?php echo ale_get_option('footer_email'); ?></div>
            </div>

            <div id="sitemap">
                <h3>Карта сайта</h3>
               <?php
                if ( has_nav_menu( 'footer_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'footer_menu',
                        'menu'			=> 'Footer Menu',
                        'menu_class'	=> 'footermenu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
            </div>
            <div id="social">
                <h3>Социальные сети</h3>
                <div>
                    <?php if(ale_get_option('vk')){?><a href="<?php echo ale_get_option('vk'); ?>" target="_blank" class="social-icon vk"></a><?php } ?>
                    <?php if(ale_get_option('fb')){?><a href="<?php echo ale_get_option('fb'); ?>" target="_blank" class="social-icon fb"></a><?php } ?>
                    <?php if(ale_get_option('you')){?><a href="<?php echo ale_get_option('you'); ?> "target="_blank" class="social-icon youtube"></a><?php } ?>
                </div>
            </div>
            <div id="ale_footer_logo">
                <?php if(ale_get_option('sitelogofooter')){ ?>
                <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogofooter'); ?>"/></a>
                <php } else{ ?>
                    <a class="logo" href="index.html"></a>
                    <?php } ?>
                <!-- Copy -->
                    <?php if (ale_get_option('copyrights')) : ?>
                        <?php echo ale_option('copyrights'); ?>
                    <?php else: ?>
                       <?php _e('Copyright © 2018 Biomedis <a href="http://prospekt.pro" target="_blank">www.prospekt.pro</a> создание сайтов')?>

                    <?php endif; ?>
            </div>
                <?php echo ale_get_option('footer_description'); ?>

        </div>
        </div>
        <!-- Scripts -->
        <?php wp_footer(); ?>
    </footer>
</body>
</html>