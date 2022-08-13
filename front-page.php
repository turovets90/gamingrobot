<?php get_header();?>
<section class="first_screen" id="about">
    <div class="container">
        <h1 class="site_title"><?php the_field('pervyj_blok_-_zagolovok'); ?></h1>
        <p class="sub_title"><?php the_field('pervyj_blok_-_podzagolovok'); ?></p>
        <div class="desc">
            <?php the_field('pervyj_blok_-_opisanie'); ?>
        </div>
        <div class="first_screen_row">
            <div class="col_left">
                <?php if( have_rows('pervyj_blok_-_tegi') ): ?>
                    <ul class="adv_list">
                        <?php
                        $i=1;
                        while( have_rows('pervyj_blok_-_tegi') ): the_row();
                            if($i==1){
                                $color='violet';
                            }elseif ($i==2){
                                $color='green';
                            }else{
                                $color='white';
                            }
                        ?>
                            <li>
                                <button class="<?php echo $color;?>"><?php the_sub_field('pervyj_blok_-_teg'); ?></button>
                            </li>
                        <?php
                        $i++;
                        endwhile; ?>
                    </ul>
                <?php endif; ?>
              <a class="btn_default modal_toggle" href="#pre_order_modal"><?php the_field('pervyj_blok_-_knopka'); ?></a>
            </div>
            <div class="col_center">
                <picture><img class="img_desktop" src="<?php the_field('pervyj_blok_-_kartinka_v_czentre'); ?>"/><img class="img_mobile" src="<?php the_field('pervyj_blok_-_kartinka_v_czentre_dlya_mobilnyh'); ?>"/></picture>
            </div>
            <div class="col_right">
                <picture class="gif_amination">
                    <img src="<?php the_field('pervyj_blok_-_video'); ?>"/>
                    <a class="watch_video" href="#video_review">Смотреть обзор<span class="play"></span></a>
                </picture>
            </div>
        </div>
    </div>
</section>
<section class="why_need pb_pt" id="why_need">
    <div class="container">
        <div class="row why_need_header">
            <div class="col_3">
                <div class="box_title"><?php the_field('zachem_nuzhen_uniq_-_zagolovok'); ?></div>
            </div>
            <div class="col_7">
                <div class="desc"><?php the_field('zachem_nuzhen_uniq_-_opisanie'); ?></div>
            </div>
        </div>
        <div class="row why_need_body">
            <div class="col_3">
                <div class="sticky_title1">
                    <p><?php the_field('zachem_nuzhen_uniq_-_tekst_v_sajdbare'); ?></p><img src="<?php echo get_template_directory_uri(); ?>/img/335748.png"/>
                </div>

            </div>
            <div class="col_7">
                <?php if( have_rows('zachem_nuzhen_uniq_-_preimushhestva') ):
                    $i=1;
                    while( have_rows('zachem_nuzhen_uniq_-_preimushhestva') ): the_row(); ?>
                        <div class="why_need_item item<?php echo $i;?>">
                            <div class="why_need_item_content">
                                <div class="why_need_title"><?php the_sub_field('zagolovok'); ?></div>
                                <div class="why_need_desc">
                                    <?php the_sub_field('opisanie'); ?>
                                </div>
                            </div><img src="<?php the_sub_field('kartinka'); ?>"/>
                        </div>
                    <?php
                    $i++;
                    endwhile;
                    endif; ?>
            </div>
        </div>
        <div class="end_sticky"></div>
    </div>
</section>
<section class="block_slider" id="how_does">
    <div class="container">
        <div class="box_title"><?php the_field('kak_delaet_-_zagolovok'); ?></div>
        <div class="slider_row">
            <div class="col">
                <div class="slider_image_container">
                    <?php if( have_rows('kak_delaet_-_slajder') ): ?>
                        <div class="slider_image">
                            <?php
                            $i=1;
                            while( have_rows('kak_delaet_-_slajder') ): the_row(); ?>
                                <div class="item">
                                    <div class="slider_image_item item<?php echo $i;?>">
                                        <picture><span class="tooltip"><?php the_sub_field('podskazka'); ?></span><img src="<?php the_sub_field('kartinka'); ?>"/></picture>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col">
                <div class="slider_txt_container">
                    <?php if( have_rows('kak_delaet_-_slajder') ): ?>
                        <div class="slider_txt">
                            <?php
                            $i=1;
                            while( have_rows('kak_delaet_-_slajder') ): the_row(); ?>
                                <div class="item">
                                    <div class="slider_txt_item">
                                        <div class="count"><?php echo $i;?></div>
                                        <div class="title"><?php the_sub_field('zagolovok'); ?></div>
                                        <div class="desc"><?php the_sub_field('opisanie'); ?></div>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video_review pt" id="video_review">
    <div class="container">
        <div class="box_title mb_40"><?php the_field('videoobzor_-_zagolovok'); ?></div>
        <div class="row">
            <div class="col_3"><img src="<?php echo get_template_directory_uri(); ?>/img/335748.png"/>
                <div class="video_review_desc"><span><?php the_field('videoobzor_-_tekst'); ?></span></div>
            </div>
            <div class="col_7">
                <?php
                $video = get_field('videoobzor_-_video');
                if( $video ): ?>
                    <div class="video_container"><span class="play_btn" id="play_btn"></span>
                        <video id="video" src="<?php echo $video['url']; ?>"></video>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="what_can pt" id="characteristics">
    <div class="container">
        <div class="row">
            <div class="col_3">
                <div class="box_title sticky_title2"><?php the_field('chto_umeet_-_zagolovok'); ?></div>
            </div>
            <div class="col_7">
                <?php if( have_rows('chto_umeet_-_bloki') ): ?>
                    <div class="what_can_list">
                        <?php
                        $i=1;
                        while( have_rows('chto_umeet_-_bloki') ): the_row(); ?>
                            <div class="item item<?php echo $i;?>">
                                <div class="what_can_list_item">
                                    <div class="what_can_list_item_content">
                                        <div class="title"><?php the_sub_field('zagolovok'); ?></div>
                                        <div class="sub_title"><?php the_sub_field('opisanie'); ?></div>
                                    </div><img src="<?php the_sub_field('kartinka'); ?>"/>
                                    <?php if($i==7): ?>
                                        <div class="item7_content">
                                            <div class="square"><span></span><span></span><span></span><span></span></div>
                                            <button>Алиса улыбается</button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php
                        $i++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="prices pt" id="subscription">
    <div class="container">
        <div class="row">
            <div class="col_6">
                <div class="item pre_order">
                    <div class="d_flex">
                        <div class="top">
                            <div class="box_title"><?php the_field('predzakaz_-_zagolovok'); ?></div>
                        </div>
                        <div class="bottom">
                            <div class="price">
                                <div class="current_price"><?php the_field('predzakaz_-_aktualnaya_czena'); ?></div>
                                <div class="old_price"><?php the_field('predzakaz_-_staraya_czena'); ?></div>
                            </div><a class="btn_default modal_toggle" href="#pre_order_modal"><?php the_field('predzakaz_-_knopka'); ?></a>
                        </div>
                    </div>
                    <div class="bg"></div>
                </div>
            </div>
            <div class="col_4">
                <div class="item subscription">
                    <div class="d_flex">
                        <div class="top">
                            <div class="box_title"><?php the_field('podpiska_-_zagolovok'); ?></div>
                            <div class="sub_title"><?php the_field('podpiska_-_podzagolovok'); ?></div>
                        </div>
                        <div class="bottom">
                            <div class="price"><?php the_field('podpiska_-_czena'); ?></div>
                            <p class="bold"><?php the_field('podpiska_-_tekst_pod_czenoj'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col_10">
                <div class="item nfc">
                    <div class="box_title"><?php the_field('3_blok_-_zagolovok'); ?></div>
                    <div class="sub_title"><?php the_field('3_blok_-_podzagolovok'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews pb_pt" id="reviews">
    <div class="container">
        <div class="box_title mb_40"><?php the_field('otzyvy_-_zagolovok'); ?></div>
        <?php if( have_rows('otzyvy_-_spisok') ): ?>
            <div class="reviews_list">
                <?php while( have_rows('otzyvy_-_spisok') ): the_row();
                    ?>
                    <div class="item">
                        <div class="review_item">
                            <div class="review_header">
                                <div class="review_author" style="background-image:url(<?php the_sub_field('foto'); ?>"></div>
                                <div class="review_author_info">
                                    <div class="name"><?php the_sub_field('imya'); ?></div>
                                    <div class="position"><?php the_sub_field('dolzhnost'); ?></div>
                                </div>
                            </div>
                            <div class="review_body">
                                <div class="txt"><?php the_sub_field('otzyv'); ?></div><span class="read_more">Читать полностью</span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="block_slider" id="mobile_app">
    <div class="container">
        <div class="box_title"><?php the_field('mobilnoe_prilozhenie_-_zagolovok'); ?></div>
        <div class="slider_row">
            <div class="col">
                <div class="slider_image_container">
                    <div class="slider_image">
                        <div class="item">
                            <div class="slider_image_item">
                                <picture><img src="<?php the_field('mobilnoe_prilozhenie_-_kartinka'); ?>"/></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="slider_txt_container">
                    <?php if( have_rows('mobilnoe_prilozhenie_-_slajder') ): ?>
                        <div class="slider_txt">
                            <?php
                            $i=1;
                            while( have_rows('mobilnoe_prilozhenie_-_slajder') ): the_row(); ?>
                                <div class="item">
                                    <div class="slider_txt_item">
                                        <div class="count"><?php echo $i;?></div>
                                        <div class="title"><?php the_sub_field('zagolovok'); ?></div>
                                        <div class="desc"><?php the_sub_field('opisanie'); ?></div>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq pt" id="faq">
    <div class="container">
        <div class="box_title mb_40"><?php the_field('voprosy_-_zagolovok'); ?></div>
        <div class="row">
            <div class="col_7">
                <?php if( have_rows('voprosy_-_spisok') ): ?>
                    <div class="faq_list">
                        <?php while( have_rows('voprosy_-_spisok') ): the_row(); ?>
                            <div class="faq_item">
                                <div class="faq_item_header"><?php the_sub_field('vopros'); ?></div>
                                <div class="faq_item_body"><?php the_sub_field('otvet'); ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col_3"><a class="btn_default orange desktop modal_toggle" href="#faq_modal">Задать вопрос</a><a class="btn_default orange mobile modal_toggle" href="#faq_modal">У меня остались вопросы</a></div>
        </div>
    </div>
</section>
<section class="pre_order_bottom pb_pt" id="pre_order_bottom">
    <div class="container">
        <div class="pre_order">
            <div class="d_flex">
                <div class="top">
                    <div class="box_title"><?php the_field('predzakaz_-_zagolovok'); ?></div>
                </div>
                <div class="bottom">
                    <div class="price">
                        <div class="current_price"><?php the_field('predzakaz_-_aktualnaya_czena'); ?></div>
                        <div class="old_price"><?php the_field('predzakaz_-_staraya_czena'); ?></div>
                    </div><a class="btn_default modal_toggle" href="#pre_order_modal"><?php the_field('predzakaz_-_knopka'); ?></a>
                </div>
            </div>
            <div class="bg"></div>
        </div>
    </div>
</section>

<?php get_footer();