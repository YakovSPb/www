<?php 
/**
 * Template Name: Template Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
<div class="container contacts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page_content">
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>


<div class="contacts_data cf">
    <div class="third_part">
        <span class="label"><i class="fa fa-phone"></i> <?php echo ale_get_option('footer_telefon_label'); ?></span>
        <span class="value phone_number"><?php echo ale_get_option('footer_telefon'); ?></span>
    </div>
    <div class="third_part">
        <span class="label"><i class="fa fa-globe"></i> <?php echo ale_get_option('footer_address_label'); ?></span>
        <span><?php echo ale_get_option('footer_address'); ?></span>
    </div>
    <div class="third_part">
        <span class="label"><i class="fa fa-at"></i> <?php echo ale_get_option('footer_email_label'); ?></span>
        <span class="value mail"><a href="mailto:<?php echo ale_get_option('footer_email'); ?>"><?php echo ale_get_option('footer_email'); ?></a></span>
    </div>
</div>
    <div class="contact_form">
        <div class="inner_page_title">
            <h2 class="inner_title font_three"><?php echo _e('Контактная форма','aletheme'); ?></h2>
        </div>
        <form method="post" action="<?php the_permalink();?>">
            <?php if (isset($_GET['success'])) : ?>
                <p class="success"><?php _e('Спасибо за ваше сообщение!', 'aletheme')?></p>
            <?php endif; ?>
            <?php if (isset($error) && isset($error['msg'])) : ?>
                <p class="error"><?php echo $error['msg']?></p>
            <?php endif; ?>
            <div class="item_line cf">
                <div class="item_input">
                    <input name="contact[name]" type="text" placeholder="Ваше имя" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                </div>
                <div class="item_input">
                    <input name="contact[phone]" type="text" placeholder="Телефон" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
                </div>
                <div class="item_input">
                    <input name="contact[email]" type="email" placeholder="Почта" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                </div>
            </div>
            <div class="item_line">
                <textarea name="contact[message]"  placeholder="Message..." id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
            </div>
            <div class="item_line">
                <input type="submit" class="submit" value="<?php _e('Отправить', 'aletheme')?>"/>
            </div>
            <?php wp_nonce_field() ?>
        </form>

    </div>
    <div class="contact_map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1f3271aa51fa0fa12b6498369c35972700a874af4ab4bef052542b69f67dba22&amp;source=constructor" width="100%" height="475" frameborder="0"></iframe>
    </div>
</div>
<?php get_footer(); ?>