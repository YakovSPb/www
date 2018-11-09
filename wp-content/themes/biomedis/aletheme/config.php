<?php
/**
 * Get current theme options
 *
 * @return array
 */
function aletheme_get_options() {
    $comments_style = array(
        'wp'  => 'Alethemes Comments',
        'fb'  => 'Facebook Comments',
        'dq'  => 'DISQUS',
        'lf'  => 'Livefyre',
        'off' => 'Disable All Comments',
    );

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );


    $imagepath =  ALETHEME_URL . '/assets/images/';

    $options = array();

    $options[] = array("name" => "Theme",
        "type" => "heading");

    $options[] = array( "name" => "Site Logo",
        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
        "id" => "ale_sitelogo",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Insert The Slider Slug",
        "desc" => "Get the slug on the Sliders Setting Page.",
        "id" => "ale_homesliderslug",
        "std" => "",
        "type" => "text",
    );

    $options[] = array( 'name' => "Manage Background",
        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
        'id' => 'ale_background',
        'std' => $background_defaults,
        'type' => 'background');

    $options[] = array( "name" => "Show Site Preloader",
        "desc" => "Description kakoito.",
        "id" => "ale_backcover",
        "std" => "1",
        "type" => "checkbox");

    $options[] = array( "name" => "Uplaod a favicon icon",
        "desc" => "Upload or put the link of your favicon icon",
        "id" => "ale_favicon",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Comments Style",
        "desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
        "id" => "ale_comments_style",
        "std" => "wp",
        "type" => "select",
        "options" => $comments_style);

    $options[] = array( "name" => "AJAX Comments",
        "desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
        "id" => "ale_ajax_comments",
        "std" => "1",
        "type" => "checkbox");

    $options[] = array( "name" => "Social Sharing",
        "desc" => "Enable social sharing for posts.",
        "id" => "ale_social_sharing",
        "std" => "1",
        "type" => "checkbox");


    $options[] = array( "name" => "Home Page Slider slug",
        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
        "id" => "ale_homeslugfull",
        "std" => "",
        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
        "id" => "ale_blogslugfull",
        "std" => "",
        "type" => "text");

    $options[] = array( "name" => "Footer Option",
        "type" => "heading");

    $options[] = array( "name" => "Footer Address Label",
        "desc" => "Insert footer address label",
        "id" => "ale_footer_address_label",
        "std" => "Адрес офиса:",
        "type" => "text");

    $options[] = array( "name" => "Footer Adress",
        "desc" => "Insert the adress",
        "id" => "ale_footer_address",
        "std" => "г. Уфа, ул. 50 лет СССР, д.5",
        "type" => "text");

    $options[] = array( "name" => "Footer Telefon Number Label",
        "desc" => "Insert footer address label",
        "id" => "ale_footer_telefon_label",
        "std" => "Телефон:",
        "type" => "text");

    $options[] = array( "name" => "Footer Telefon Number",
        "desc" => "Insert the telefon number",
        "id" => "ale_footer_telefon",
        "std" => "+7-987-104-98-98",
        "type" => "text");

    $options[] = array( "name" => "Footer Email Label",
        "desc" => "Insert footer email label",
        "id" => "ale_footer_email_label",
        "std" => "Почта:",
        "type" => "text");

    $options[] = array( "name" => "Footer Email",
        "desc" => "Insert the email",
        "id" => "ale_footer_email",
        "std" => "doctorlila1959@gmail.com",
        "type" => "text");

    $options[] = array( "name" => "Site Footer Logo",
        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
        "id" => "ale_sitelogofooter",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Copyrights",
        "desc" => "Your copyright message.",
        "id" => "ale_copyrights",
        "std" => "",
        "type" => "editor");


    $options[] = array( "name" => "Typography",
        "type" => "heading");

    $options[] = array( "name" => "Select Font Two from Google Library",
        "desc" => "The default Font is - Oswald",
        "id" => "ale_font_two",
        "std" => "Oswald",
        "type" => "select",
        "options" => $headerfont);

    $options[] = array( "name" => "Select Font Two (Extended) from Google Library",
        "desc" => "The default Font (extended) is - 300,400",
        "id" => "ale_font_two_ex",
        "std" => "300,400",
        "type" => "text",
    );

    $options[] = array( 'name' => "H1 Style",
        'desc' => "Change the h1 style",
        'id' => 'ale_h1sty',
        'std' => array('size' => '22px','face' => 'Oswald','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
        'desc' => "Change the h2 style",
        'id' => 'ale_h2sty',
        'std' => array('size' => '20px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
        'desc' => "Change the h3 style",
        'id' => 'ale_h3sty',
        'std' => array('size' => '18px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
        'desc' => "Change the h4 style",
        'id' => 'ale_h4sty',
        'std' => array('size' => '16px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
        'desc' => "Change the h5 style",
        'id' => 'ale_h5sty',
        'std' => array('size' => '14px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
        'desc' => "Change the h6 style",
        'id' => 'ale_h6sty',
        'std' => array('size' => '12px','face' => 'Oswald','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
        'desc' => "Change the body font style",
        'id' => 'ale_bodystyle',
        'std' => array('size' => '12px','face' => 'Tahoma','style' => 'normal','color' => '#7e7e7e'),
        'type' => 'typography');

    $options[] = array( "name" => "Social",
        "type" => "heading");

    $options[] = array( "name" => "Vkontakte",
        "desc" => "Your VK profile URL.",
        "id" => "ale_vk",
        "std" => "http://vk.com/",
        "type" => "text");
    $options[] = array( "name" => "Facebook",
        "desc" => "Your facebook profile URL.",
        "id" => "ale_fb",
        "std" => "http://facebook.com/",
        "type" => "text");

    $options[] = array( "name" => "Youtube",
        "desc" => "Your Youtube profile URL.",
        "id" => "ale_you",
        "std" => "https://www.youtube.com/",
        "type" => "text");

    $options[] = array( "name" => "Advanced Settings",
        "type" => "heading");


    $options[] = array( "name" => "Google Analytics",
        "desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
        "id" => "ale_ga",
        "std" => "",
        "type" => "text");

    $options[] = array( "name" => "Footer Code",
        "desc" => "If you have anything else to add in the footer - please add it here.",
        "id" => "ale_footer_info",
        "std" => "",
        "type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
        "id" => "ale_customcsscode",
        "std" => "",
        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
        "desc" => "Insert the footer menu title",
        "id" => "ale_footermenutitle",
        "std" => "Select a category",
        "type" => "text");

    $options[] = array( "name" => "Footer menu title",
        "desc" => "Insert the footer menu title",
        "id" => "ale_footermenutitle_1",
        "std" => "",
        "type" => "images",
        "options" => array(
            'image_1' => $imagepath.'/1col.png',
            'image_2' => $imagepath.'/2cl.png',
            'image_3' => $imagepath.'/2cr.png', ),
    );

    return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
    ?>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#ale_commentongallery').click(function() {
                jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
            });
            if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
                jQuery('#section-ale_gallerycomments_style').show();
            }
        });
    </script>

    <?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array
 */
function aletheme_metaboxes($meta_boxes) {

    $meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'home_page_metabox',
        'title'      => 'Home Meta Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox

        'fields' => array(
            array(
                'name' => 'First Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Second Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr2',
                'type' => 'text',
            ),
            array(
                'name' => 'File Upload',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'fileupload',
                'type' => 'file',
            ),
            array(
                'name' => 'Text Date',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'datefield',
                'type' => 'wysiwyg',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'products_page_metabox',
        'title'      => 'Products Meta Options',
        'pages'      => array( 'products', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
      //  'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox

        'fields' => array(
            array(
                'name' => 'Products short title',
                'desc' => 'Type here the short title',
                'id'   => $prefix . 'prod_title',
                'type' => 'text_small',
            ),
            array(
                'name' => 'Products price',
                'desc' => 'Type here product prise',
                'id'   => $prefix . 'prod_prise',
                'type' => 'text_money',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Press title #1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #1',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #1',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #1',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo1',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #2',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #2',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #2',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo2',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #3',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #3',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #3',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo3',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #4',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #4',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #4',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo4',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #5',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit5',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #5',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #5',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #5',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo5',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #6',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit6',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #6',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #6',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #6',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo6',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #7',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit7',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #7',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #7',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #7',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo7',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #8',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit8',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #8',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #8',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #8',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo8',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #9',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit9',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #9',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #9',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #9',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo9',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #10',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit10',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #10',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #10',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #10',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo10',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(

            array(
                'name' => 'Quote Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr_about',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Whose quote is this',
                'desc' => '',
                'id'   => $prefix . 'who_qoute',
                'type' => 'text',
            ),
            array(
                'name' => 'Image Upload 1',
                'desc' => 'Upload Myfoto1',
                'id'   => $prefix . 'img_about1',
                'type' => 'file',
            ),
                        array(
                'name' => 'Image Upload 2',
                'desc' => 'Upload Myfoto2',
                'id'   => $prefix . 'img_about2',
                'type' => 'file',
            ),
            array(
                'name' => 'Title h2',
                'desc' => 'Мой офис',
                'id'   => $prefix . 'title_map',
                'type' => 'text',
            ),
            array(
                'name' => __('Show Map','aletheme'),
                'desc' => 'Select to show the Map',
                'id'   => $prefix . 'map_display',
                'type' => 'select',
                'options' => array(
                    array('name'=>'Show Block','value'=>'show'),
                    array('name'=>'Hide Block','value'=>'hide'),
                )
            ),
                        array(
                'name' => 'Image Upload 3',
                'desc' => 'Upload Map width="230" height="180"',
                'id'   => $prefix . 'img_map',
                'type' => 'file',
            ),

        )
    );

    return $meta_boxes;
}

/**
 * Get image sizes for images
 *
 * @return array
 */
function aletheme_get_images_sizes() {
    return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 260,
                'height'    => 260,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
          /*  array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-minibox',
                'width'     => 500,
                'height'    => 200,
                'crop'      => true,
            ),    */
            array(
                'name'      => 'post-blogsize',
                'width'     => 675,
                'height'    => 260,
                'crop'      => false,
            ),
        ),
        'products' => array(
            array(
                'name'      => 'products-min',
                'width'     => 96,
                'height'    => 96,
                'crop'      => true,
            ),
            array(
                'name'      => 'products-thumba',
                'width'     => 284,
                'height'    => 284,
                'crop'      => true,
            ),
        ),


    );
}

/**
 * Add post types that are used in the theme
 *
 * @return array
 */
function aletheme_get_post_types() {
    return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-image',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
        'products' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'comments'
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Продукция',
            'multiple' => 'Продукция',
            'columns'    => array(
                'first_image',
            )
        ),
        'services' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-audio',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Сервис',
            'multiple' => 'Сервисы'
        ),

    );
}

/**
 * Add taxonomies that are used in theme
 *
 * @return array
 */
function aletheme_get_taxonomies() {
    return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),


        'services-category'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Категория',
            'multiple'    => 'Категории',
        ),
        'price'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Цена сервиса',
            'multiple'    => 'Цены сервисов',
        ),

    );
}

/**
 * Add post formats that are used in theme
 *
 * @return array
 */
function aletheme_get_post_formats() {
    return array();
}

/**
 * Get sidebars list
 *
 * @return array
 */
function aletheme_get_sidebars() {
    $sidebars = array();
    return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
    return array(
        'sneak-peek' => array(
            'title'		=> 'Sneak Peek',
        ),
    );
}

/**
 * Post types where metaboxes should show
 *
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
    return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
    return array();
}