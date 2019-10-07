<?php
/**
 * Template Name: Front Page Template
 */
get_header('front');
?>


<div class="clearfix"></div>
<section class="banner-wrap">
    <div class="banner">
        <div class="tp-banner-container " style="">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" > 
                        <!-- MAIN IMAGE --> 
                        <img src="<?php echo bloginfo('template_url'); ?>/images/parallax2.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
                        <div class="sl_text">
                            <h1>СТРОИТЬ С НАМИ ВЫГОДНО!</h1>
                            У нас Вы всегда можете приобрести пиломатериалы стандартных и нестандартных форм и размеров.
                            Обрезная доска и брус, всё для обшивки, необрезная доска и профилированный брус. 
                            В сжатые сроки мы доставим весь объем заказанной продукции на Ваш адрес.
                        </div>
                    </li>
                    <!-- SLIDE  -->
                   
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" > 
                        <!-- MAIN IMAGE --> 
                        <img src="<?php echo bloginfo('template_url'); ?>/images/top_bg_2.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
                        <div class="sl_text">
                            <h1>Выбирай свою акцию!</h1>
                            При покупке пиломатериалов ГОСТ по цене 6500руб\м3 + 10л огнебиозащиты или 10л антижук в подарок!!! 
                            Спешите количество подарков ограничено!!! ВНИМАНИЕ!!! ТОЛЬКО У НАС! 
                            Новый завоз: Обрезная доска 25х150х6000 2 сорт по 3500 р. Подробности у менеджера по телефону!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ: Обрезной брус 100х150x3м и обрезная доска 50х200х3м свежего распила за 5600 р.Предложение ограничено Предлагаем ограниченное количество досок 25x100x3000 и 25x150x3000 1-го сорта по САМЫМ-САМЫМ низким ценам.
                            Ждите новых сюрпризов! Количество материала по акции ограничено, не упустите свой шанс!!!
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" > 
                        <!-- MAIN IMAGE --> 
                        <img src="<?php echo bloginfo('template_url'); ?>/images/top_bg_3.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
                        <div class="sl_text">
                            <h1>Внимание акция!!!!</h1>
                            1 КГ гвоздей в ПОДАРОК за каждый кубометр купленного пиломатериала! <br/>СТРОИТЬ С НАМИ ВЫГОДНО!
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>
            </div>
        </div>
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function () {

                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 5000,
                            hideThumbs: 10,
                            fullWidth: "off",
                            fullScreen: "off",
                            fullScreenOffsetContainer: "",
                            hideTimerBar: "on",
                            navigationType: "none",
                            stopAtSlide: 1

                        });

            });	//ready

        </script> 

        <!-- END REVOLUTION SLIDER --> 

        <!-- Content End --> 

    </div>
</section>
<section class="message-wrap">
    <div class="container">
        <div class="row">
            <h2 class="col-lg-8 col-md-7 col-sm-12 col-xs-12 xs-padding-left-15">Время работы ежедневно с 8.00 до 21.00 ч. <span class="alternate-font">  </span></h2>
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 xs-padding-right-15"> <a href="#" class="default-btn pull-right action_button lg-button">Бесплатный звонок менеджеру</a> </div>
        </div>
    </div>
    <div class="message-shadow"></div>
</section>

<!--message-wrap ends-->
<section class="content">
    <div class="container">
        <div class="inner-page homepage margin-bottom-none">
            
            <section class="car-block-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                           <?php
                                $args = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => -1
                                );
                                $the_query = new WP_Query( $args );

                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            ?>
                            
                            <h4 class="front-cat-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                            
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            
                        <div class="row">
                            <?php
                                $args = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => 12
                                );
                                $the_query = new WP_Query( $args );

                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post(); 

                                    $shortTxt = substr( get_the_excerpt(), 0, strrpos(substr(get_the_excerpt(), 0, 130), ' '));
                                    $link = get_post_type_archive_link( 'products' );

                            ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                                    <div class="flip ">
                                        <div class="card">
                                            <div class="face front">
                                                <?php the_post_thumbnail(array(170, 200), array('class' => 'img-responsive')); ?>
                                                <!--<img class="img-responsive" src="http://demo.themesuite.com/automotive/images/car1.jpg" alt="">-->
                                            </div>
                                                <div class="face back">
                                                    <div class='hover_title'>&nbsp;</div>
                                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-link button_icon"></i></a> 
                                                    <a href="#" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> 
                                                </div>
                                        </div>
                                    </div>
                                    <h4 class="front-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p class="margin-bottom-none"><?php echo $shortTxt . "..."; ?></p>
                                </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                                <?php else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-more-right">
                            <a href="<?php echo $link; ?>">показать все &gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--car-block-wrap ends-->
            <div class="row parallax_parent design_2 margin-top-30 ">
                <div class="parallax_scroll clearfix customBgFixed" 
                     data-image="<?php echo bloginfo('template_url'); ?>/images/parallax1.jpg">
                    <div class="overlay bleck">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12 xs-margin-bottom-none xs-padding-top-30 scroll_effect bounceInLeft" data-wow-delay=".2s"> 
                                    <span class="align-center"><i class="fa fa-6x fa-gift"></i></span>
                                    <h3>Выбирай свою акцию!</h3>
                                    <p>
                                       При покупке пиломатериалов ГОСТ по цене  6500руб\м3 + 10л огнебиозащиты или 10л антижук в подарок!!!
                                       Спешите количество подарков ограничено!!!       
                                       ВНИМАНИЕ!!! ТОЛЬКО У НАС! <br/>
                                       Новый завоз: Обрезная доска 25х150х6000 2 сорт по 3500 р. Подробности у менеджера по телефону!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                                       
                                       СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ: Обрезной брус 100х150x3м и обрезная доска 50х200х3м свежего распила за 5600 р.Предложение ограничено 
                                       Предлагаем ограниченное количество досок
                                       25x100x3000 и 25x150x3000 1-го сорта  по САМЫМ-САМЫМ низким ценам.
                                       Ждите новых сюрпризов! 
                                       Количество материала по акции ограничено, не упустите свой шанс!!!
                                       
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--car-info-wrap ends-->


        </div>
    </div>
</section>





<?php get_footer(); ?>