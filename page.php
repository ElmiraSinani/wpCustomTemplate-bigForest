<?php get_header(); ?>
<section class="content">
    <div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
        <div class="inner-page blog-post row">
            <div class="col-lg-9 col-lg-push-3 col-md-push-3 col-md-9 col-sm-7 col-xs-12 padding-right-none padding-left-15 md-padding-left-15 md-padding-right-none sm-padding-right-15 sm-padding-left-none xs-padding-left-none xs-padding-right-none">
                <div class="blog-content">
                    <div class="blog-title">
                        <h2><?php the_title(); ?></h2>
                    <div class="post-entry clearfix">
                        <?php the_content(); ?>
                    </div>
                </div>
                </div>
            </div>
                    
                    
            <?php // comments_template(); ?>

            <?php endwhile; endif; ?>        
                    
            <div class="col-lg-3 col-lg-pull-9 col-md-pull-9 col-md-3 col-sm-5 col-xs-12 padding-left-none padding-right-15 md-padding-left-none md-padding-right-15 sm-padding-left-15 sm-padding-right-none xs-padding-left-none xs-padding-right-none xs-padding-top-20">
                <div class="side-widget padding-bottom-30">   
                 <?php if (!dynamic_sidebar('Left Sidebar') ) : ?>		
                 <?php endif; ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>	
</section>		


<?php get_footer(); ?>