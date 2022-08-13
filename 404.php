<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gamingrobot
 */

get_header();
?>

<section class="content_404">
    <div class="container">
        <div class="content"><img class="img_404" src="<?php echo get_template_directory_uri();?>/img/404.png"/>
            <h1 class="page_title">Страница не найдена :(</h1>
            <div class="desc_404">К сожалению, такой страницы не существует</div><a class="btn_default orange" href="/">Вернуться на сайт</a>
        </div>
    </div>
</section>

<?php
get_footer();
