<?php get_header(); ?>

<?php
$taxonomy = 'products_category';
$tax_terms = get_terms($taxonomy);
?>
<div class="message-shadow"></div>
<div class="clearfix"></div>

<section class="content">
<div class="container">
    <div class="row product-row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
            <?php
                $taxonomy = 'products_category';
                $tax_terms = get_terms($taxonomy);

                foreach ($tax_terms as $tax_term) {
                    echo '<h4 class="front-cat-title"><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></h4>';
                } 
            ?>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <div class="row">
                
                <?php if (have_posts()) : ?> 			
                    <?php while (have_posts()) : the_post(); ?>
                
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
                        <p></p>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                        <h2>Nothing found</h2>
                <?php endif; ?>
                
            </div>
        </div>

    </div>
</div>
<!--container ends--> 
</section>
<!--content ends--> 

		



<?php get_footer(); ?>