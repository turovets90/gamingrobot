<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gamingrobot
 */

get_header();
?>

<section class="page_content">
    <div class="container">
        <div class="content">
            <h1 class="page_title"><?php the_title(); ?></h1>
           <?php
           the_post();
           the_content();
           ?>
        </div>
    </div>
</section>


<?php

get_footer();
