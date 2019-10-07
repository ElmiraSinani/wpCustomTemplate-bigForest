<?php get_header(); ?>


<section class="content">
    <div class="container">
        <div class="inner-page clearfix"> 
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--OPEN OF SLIDER-->
            <div class="slider rowpadding-left-none padding-right-none padding-bottom-40">
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
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 order-roduct-form">  
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 ">
                             <?php the_post_thumbnail( 'full', array('class' => 'image responsive')); ?>                            
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style="padding: 0;">                        
                            <a href="<?php echo home_url().'/order-product-form';?>" target="_blank" >
                                ОФОРМЛЕНИЕ ЗАКАЗА<br/>
                                <img src="<?php echo bloginfo('template_url'); ?>/images/korzina.png" />
                            </a>
                            <div class="single-order-prod" >
                                Для того, чтобы заказать товар, Вам необходимо позвонить по телефону или отправить заявку по электронному адресу 
                                info@bigforest.ru <br/>
                                При оформлении заказа по электронной почте необходимо указать <strong>имя, адрес доставки, телефон для связи, 
                                электронный адрес, наименование товара и его количество</strong>. 
                                <br/>Наши менеджеры оперативно свяжутся с Вами для уточнения 
                                деталей заказа и его оформления. <br/>
                                С условиями доставки можете ознакомиться в разделе Доставка. 
                                <br/>
                                <strong><i>ВНИМАНИЕ!!! ПРИ ОФОРМЛЕНИИ ЗАКАЗА ЧЕРЕЗ ЭЛЕКТРОННУЮ ПОЧТУ ВЫ ПОЛУЧИТЕ СКИДКУ НА 1% ЗА ЭКОНОМИЮ ВРЕМЕНИ НАШИХ ОПЕРАТОРОВ.</i></strong>
                            </div>
                        </div>
                    </div>
                    
                    <div class="job margin-top-30 sm-padding-bottom-40 xs-padding-bottom-40">
                        <h2 class="single-prod-title"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                    
                </div>
            </div>
            <?php  //do_shortcode('[table id=1 /]');  ?>

            
            
                 <?php endwhile; endif; ?>
                
                
                
            </div>
            
           

            <div class="row margin-top-30">
                <div class="project_wrapper clearfix">
                    <h4 class="related_project_head margin-bottom-10 padding-bottom-15 margin-top-none">Related Products</h4>
					
					<?php $args = array(
							'numberposts' => 4,
							'offset' => 0,
							'category' => 0,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'include' => '',
							'exclude' => '',
							'meta_key' => '',
							'meta_value' => '',
							'post_type' => 'products',
							'post_status' => 'draft, publish, future, pending, private',
							'suppress_filters' => true,
							);

							$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
							//var_dump($recent_posts);
						?>

                    <div class="related_post margin-top-30 clearfix">
                        
						<?php foreach( $recent_posts as $k => $val ) { ?>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInRight">
								<div class="car-block margin-bottom-10">
									<a href="<?php echo get_permalink( $val['ID'] ); ?>">
										<div class="img-flex"> <span class="align-center">
											<i class="fa fa-3x fa-plus-square-o"></i></span> 
											<?php echo get_the_post_thumbnail( $val['ID'], array(270,140) , array('class'	=> 'img-responsive' ) ); ?>
											<!-- <img src="http://wp.bigforest/wp-content/uploads/2015/09/Sux-strogannii-600x431-270x140.jpg" alt="" class="img-responsive"> -->
										</div>
										<div class="car-block-bottom">
											<h2><?php echo $val['post_title']; ?></h2>										
										</div>
									</a> 
								</div>
							</div>						
						<?php }?>
						
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--container ends--> 
</section>






	

		

	

<?php get_footer(); ?>