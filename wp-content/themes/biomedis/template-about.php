<?php
/**
 * Template Name: Template About (team)
 */
get_header(); ?>
    <!-- Content -->
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
        <p>Какие болезни лечит терапевт? Этот врач может лечить самостоятельно без помощи других такие заболевания, как вирусные инфекции, простудные заболевания, гипертония, болезни сердца и многое другое. Если болезни внутренних органов не требуют хирургического вмешательства, то тогда за дело берется врач-терапевт. Он назначает соответствующие обследования. После чего врач самостоятельно принимает решение о назначении того или иного препарата.</p>
        <p>Для эффективного лечения требуется правильная диагностика, основанная на систематическом обследовании пациента, анализе анамнеза, жалоб и объективных признаков заболевания (выявляемых при физикальном обследовании — осмотре, пальпации, перкуссии, аускультации, а также с помощью рутинных лабораторно-инструментальных методов). Выявленные признаки (симптомы) заболевания терапевт объединяет в синдромы (совокупность симптомов, имеющих единый патогенез), на основании которых делает заключение о предполагаемом заболевании. В случае невозможности сделать однозначный вывод об имеющемся заболевании, проводится дифференциальная диагностика нескольких схожих заболеваний с выполнением дополнительных лабораторных и инструментальных исследований. В некоторых сложных для диагностики клинических случаях назначается пробное лечение, позволяющее поставить так называемый лат. diagnosis ex juvantibus (диагноз, основанный на оценке результатов проведённого лечения). После постановки диагноза терапевт назначает лечение. Применяются нелекарственные методы лечения (соблюдение режима труда и быта, питания), лекарственное и физиотерапевтическое лечение, санаторно-курортное лечение.</p>

        <p>Параллельно с дифференциацией научных знаний по внутренним болезням, возрастает роль этого раздела медицины в интеграции научных исследований с общетерапевтической подготовкой врача. Параллельность процессов дифференциации и интеграции научных знаний способствуют формированию тесных связей с рядом естественных и технических наук (биологией, физиологией, физикой, химией и т. д.), что позволяет внедрять в клиническую практику новейшие высокотехнологичные методы обследования пациентов (эндоскопию, мониторное наблюдение, компьютерную, позитронно-эмиссионную и магнитно-резонансную томографию и др.)</p>

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
                       <?php echo get_the_post_thumbnail($post->ID, 'products-min'); ?>
                    </div>
                    <div class="title_product">
                        <?php if(ale_get_meta(prod_title)){?>
                            <h4 class="product"><?php echo ale_get_meta(prod_title); ?></h4>
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
    </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>