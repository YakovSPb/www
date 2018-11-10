<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>

</head>
<body <?php if(is_page_template('page-home.php')){body_class('home');} else{body_class();}; ?> >
<div id="wrapper">
    <header>

            <?php if(ale_get_option('sitelogo')){ ?>
                <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogo'); ?>"/></a>
                <php } else{ ?>
                 <a class="logo" href="index.html"></a>
            <?php } ?>


        <!-- Search -->


                <?php get_search_form(); ?>

        <!-- Top menu -->
        <div class="ale_topmenu">
            <div class="top-nav">
                <?php
                if(has_nav_menu('header_left_menu')) {
                    wp_nav_menu(array(
                        'theme_location'=> 'header_left_menu',
                        'menu'          => 'Header Left Menu',
                        'menu_class'    => 'top-menu menu menu-right cf',
                        'walker'        =>  new Aletheme_Nav_Walker(),
                        'container'     =>  '',
                    ));
                }
                ?>
            </div>
        </div>

        <?php if(is_page_template('page-home.php')){?>
        <section class="home_slider">
            <div class="flexslider">
                    <ul class="slides">
                        <?php $slider = ale_sliders_get_slider(ale_get_option('homesliderslug'));  ?>
                        <?php if($slider):?>
                            <?php foreach ($slider['slides'] as $slide) : ?>
                                <li>
                                    <figure>
                                        <?php if ($slide['image']) : ?>
                                            <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" />
                                        <?php endif; ?>
                                        <?php if($slide['title'] or $slide['description'] or $slide['html']) { ?>
                                            <figcaption>
                                                <?php if($slide['title']){ echo '<span class="mainslidertitle">'.$slide['title'].'</span>'; } ?><br />
                                                <?php if($slide['description']){ echo '<span class="mainsliderdesc">'.$slide['description'].'</span>'; } ?><br />
                                                <?php if($slide['url']){ echo '<a href="'.$slide['url'].'" class="sliderlinkmore">'.__('Подробнее','aletheme').'</a>'; } ?>
                                            </figcaption>
                                        <?php } ?>
                                    </figure>
                                </li>
                            <?php endforeach; ?>
                        <?php endif;?>
                    </ul>
                </div>
        </section>
        <?php } ?>

    </header>
