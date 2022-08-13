<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gamingrobot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="<?php echo(is_front_page())?'home':'page' ?>">
<?php wp_body_open(); ?>
<header>
    <div class="container">
        <div class="m_header">
            <div class="logo"><a href="/"><img src="<?php the_field('logotip_oranzhevyj',14); ?>"/></a></div>
            <div class="mm_btn">
                <button class="hamburger"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div class="mm_menu">
            <div class="header_row">
                <div class="col_left">
                    <?php
                    wp_nav_menu( [
                        'menu'            => 'header_menu',
                        'container'       => '',
                        'menu_class'      => 'menu',
                    ] );
                    ?>
                </div>
                <div class="col_center">
                    <div class="logo">
                        <a href="/">
                            <img class="logo_white" src="<?php the_field('logotip_belyj',14); ?>"/>
                            <img class="logo_orange" src="<?php the_field('logotip_oranzhevyj',14); ?>"/>
                        </a>
                    </div>
                </div>
                <div class="col_right">
                    <div class="lang_block">
                        <a class="lang_btn" href="#">
                            <img class="flag" src="<?php echo get_template_directory_uri(); ?>/img/rus.svg"/>
                            <span class="txt">Ру</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <img class="glag" src="<?php echo get_template_directory_uri(); ?>/img/esp.svg"/>
                                    <span class="txt">Es</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <img class="glag" src="<?php echo get_template_directory_uri(); ?>/img/us.svg"/>
                                    <span class="txt">US</span>
                                </a>
                            </li>
                        </ul>
                    </div><a class="btn modal_toggle" href="#pre_order_modal"><?php the_field('knopka_predzakaz',14); ?></a>
                </div>
            </div>
        </div>
    </div>
</header>




