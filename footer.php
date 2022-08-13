<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gamingrobot
 */

?>

<footer>
    <div class="container">
        <div class="footer_row">
            <div class="logo"><a href="/"><img src="<?php the_field('futer_-_logo',14); ?>"/></a></div>
            <div class="footer_menu">
                <?php
                wp_nav_menu( [
                    'menu'            => 'footer_menu_left',
                    'container'       => '',
                    'menu_class'      => '',
                ] );
                ?>
                <?php
                wp_nav_menu( [
                    'menu'            => 'footer_menu_right',
                    'container'       => '',
                    'menu_class'      => '',
                ] );
                ?>
            </div>
            <div class="footer_contacts">
                <div class="title"><?php the_field('futer_-_kontakty',14); ?></div><a class="email" href="mailto:<?php the_field('futer_-_email',14); ?>"><?php the_field('futer_-_email',14); ?></a><a class="btn orange modal_toggle" href="#faq_modal"><?php the_field('futer_-_knopka',14); ?></a>
            </div>
        </div>
        <div class="copyright">
            <?php
            $link = get_field('politika_konfidenczialnosti', 14);
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                ?>
                <a class="privacy_policy" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            <div class="dev">Сделано в<a href="#">Делаем</a></div>
        </div>
    </div>
</footer>
<div class="modal" id="pre_order_modal">
    <div class="modal_dialog">
        <div class="modal_content">
            <button class="modal_close"></button>
            <div class="modal_body">
                <div class="modal_title">Предзаказ UNIQ</div>
                <div class="modal_form">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Предзаказ"]')?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="faq_modal">
    <div class="modal_dialog">
        <div class="modal_content">
            <button class="modal_close"></button>
            <div class="modal_body">
                <div class="modal_title">Задать вопрос</div>
                <div class="modal_form">
                    <?php echo do_shortcode('[contact-form-7 id="155" title="Вопрос"]')?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="thanks_modal">
    <div class="modal_dialog">
        <div class="modal_content">
            <button class="modal_close"></button>
            <div class="modal_body">
                <picture><img src="<?php echo get_template_directory_uri();?>/img/modal_img.png"/></picture>
                <div class="modal_title">Спасибо за заявку!</div>
                <div class="thanks_modal_desc">Мы свяжемся с вами в ближайшее время! По всем интересующим вопросам вы можете позвонить нам по телефону <a href="mailto:uniqsupport@example.ru">uniqsupport@example.ru</a></div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
