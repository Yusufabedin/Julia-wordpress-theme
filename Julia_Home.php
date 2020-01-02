

<?php 
/*
* Template Name: Julia page
*/
?>
<?php get_header(); ?>

<body>
    <!-- ============ Header area start ============-->
    <?php
    if( have_rows('social_icon','option') ):
        while ( have_rows('social_icon','option') ) : the_row();
            $header_icon = get_sub_field('header_icon');
            $header_icon_url = get_sub_field('header_icon_url');
        endwhile;
    endif;
    ?>
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" role="navigation">
                        <!-- Mobile menu toggle button (hamburger/x icon) -->
                        <input id="main-menu-state" type="checkbox" />
                        <label class="main-menu-btn" for="main-menu-state">
                            <span class="main-menu-btn-icon"></span>
                        </label>
                        <div class="nav-brand">
                            <a href="#">
                                <?php 
                                $header_logo = get_field('header_logo','option');
                                if( !empty( $header_logo ) ): ?>
                                    <img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>" />
                                <?php endif; ?>
                                
                        </a></div>
                        <!-- Sample menu definition -->
						<?php wp_nav_menu( array(
							'theme_location'  => 'menu-1',
							'menu_class'      => 'menu sm sm-clean text-center',
							'menu_id'         => 'main-menu',
                        )); ?>
                       
                        <div class="social-menu">
            <?php
          if( have_rows('social_icon','option') ):
            while ( have_rows('social_icon','option') ) : the_row();
                $header_icon = get_sub_field('header_icon');
                $header_icon_url = get_sub_field('header_icon_url');
                 if( !empty( $header_icon ) ): ?>
                    <a href="<?php echo $header_icon_url ?>">
                <img src="<?php echo esc_url($header_icon['url']); ?>" alt="<?php echo esc_attr($header_icon['alt']); ?>" />
                </a>
                            <?php endif;
                    endwhile;
                endif;
                ?> 
                        </div>
                    </nav>
               </div>
            </div>
        </div>
    </header>
    <!--========= header area end ========== -->
    

    <!-- ==========Banner area start ========== -->

<?php 
    $image = get_field('banner_image','option');
    $bg_image = get_field('background_image','option'); 
    $bg_color = get_field('background_color','option');

    if (get_field('banner_background','option') == 'banner color') {
            ?>
            <style type="text/css">
                .banner-area{
                    background: <?php echo  $bg_color; ?>
                }
            </style>
            <?php   
        }
    else{
        ?>
            <style type="text/css">
                .banner-area{
                    background: url(<?php echo $bg_image['url'] ?>);
                    background-size: cover;
                    background-repeat: no-repeat;
                    width: 100%;
                    height: 500px;

                }
            </style>
            <?php   
    }
?>

    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-items">
                        <div class="banner-img">
                            
                            <img src="<?php echo $image['url'] ? $image['url'] : "#";?>" alt="banner">
                        </div>
                        <div class="banner-content">
                            <?php if(get_field('banner_content_sub_title','option')): ?>
                            <h2><?php the_field('banner_content_sub_title','option'); ?></h2>
                            <?php endif ?>
                            <?php if(get_field('banner_content','option')): ?>
                            <h5><?php the_field('banner_content','option'); ?></h5>
                            <?php endif ?>

                            <?php 
                            //for button option
                                if (get_field('banner_button','option')==1) : ?>

                            <div class="theme-btn"><a href="<?php the_field('url','option') ?>"><?php the_field('button_text','option') ?></a></div>
                                <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Banner area end =========== -->


    <!-- ========= Image-gallery Area  start =========== -->
    <section class="gallary-area">
        <div class="image-gallary">
            <div class="image-gallary-content">
                <?php if(get_field('gallary_title','option')): ?>
                <h2><?php the_field('gallary_title','option'); ?></h2>
            <?php endif; ?>
                <?php if( have_rows('gallary_content','option')): 
                   while ( have_rows('gallary_content','option')) : the_row();
                    ?>
                <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                    <p><?php the_sub_field('content_text','option'); ?></p>
                </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
           <!-- ========= Image-gallery Area =========== -->
            <div class="image-gallary-items">
                <div class="g-i img-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/bg-img1.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-1.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-2.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-3.jpg" alt="">
                </div>
            </div>

            <div class="image-gallary-items flex-start">
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-4.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-5.jpg" alt="">
                </div>
                <div class="g-i img-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-6.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-7.jpg" alt="">
                </div>
                <div class="g-i img-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-8.jpg" alt="">
                </div>
            </div>

            <div class="image-gallary-items flex-start">
                <div class="g-i img-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/bg-img2.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-9.jpg" alt="">
                </div>
                <div class="g-i">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/gallery-10.jpg" alt="">
                </div>
                <div class="g-i more-photos">
                 <?php if( have_rows('show_more','option') ): 
                while( have_rows('show_more','option') ): the_row(); 
                $titel = get_sub_field('show_button');
                $url = get_sub_field('button_url');
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/bg-img3.jpg" alt="">
                    <a href="<?php echo $url ?>" class="showMore-btn"><?php echo $titel?></a>
                </div> 
                    <?php endwhile; ?>   
                 <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- ========= Image-gallery Area  End =========== -->

    <!-- ========= Card Area  start =========== -->
    <section class="card-area">
        <div class="container">
            <div class="row">
                            <div class="col-12">
                                <div class="card-items">
                        <?php if( have_rows('card1','option') ): 
                while( have_rows('card1','option') ): the_row();
                $titel = get_sub_field('card1_text');
               /* $button_text = get_sub_field('download_book_now');*/
                                ?>
                             <div class="card-item card-item-1">
                            <div class="card-block">
                                <h3><?php echo $titel; ?></h3>
                                <?php if (get_sub_field('download_book_now','option')==1): ?>
                                <div class="theme-btn">
                                    <a href="<?php the_sub_field('url','option') ?>"><?php the_sub_field('download_btn_text','option'); ?></a></div>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- ========= end fst group =========== -->
                        <?php if (have_rows('card2','option')):
                            while(have_rows('card2','option')): the_row();
                                $titel =get_sub_field('card2_title');
                            ?>
                        <a href="<?php the_sub_field('field2','option') ?>" class="card-item card-item-2">
                            <div class="card-block">
                                <h3><?php echo $titel; ?></h3>
                                 <?php if(get_sub_field('card2_content','option')): ?>
                                <div class="card-content">
                                <?php while(has_sub_field('card2_content','option')): ?>
                                    <div class="card-text">
                                        <span><i class="fas fa-check-circle"></i></span>
                                        <p><?php the_sub_field('content2_text','option'); ?></p>
                                        
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- ========= end 2nd group =========== -->
                    <?php if (have_rows('card3','option')):
                            while(have_rows('card3','option')): the_row();
                                $titel =get_sub_field('card3_titel');
                            ?>
                        <a href="<?php the_sub_field('field','option') ?>" class="card-item card-item-3">
                            <div class="card-block">
                                <h3><?php echo $titel ?></h3>
                                <?php if(get_sub_field('card3_content','option')): ?>
                                <div class="card-content">
                                    <?php while(has_sub_field('card3_content','option')) : ?>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p><?php the_sub_field('content3_text','option'); ?></p>
                                    </div>
                                <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                            </div>
                        </a>
                         <?php endwhile; ?>
                        <?php endif; ?>
                         <!-- ========= end 3d group =========== -->
                       <?php if (have_rows('card4','option')):
                            while(have_rows('card4','option')): the_row();
                                $titel =get_sub_field('card4_titel');
                            ?>
                         <a href="" class="card-item card-item-2">
                            <div class="card-block">
                                <h3><?php echo $titel ?></h3>
                                <?php if(get_sub_field('card4_content','option')): ?>
                                <div class="card-content">
                                     <?php while(has_sub_field('card4_content','option')) : ?>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p><?php the_sub_field('content4_text','option'); ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                 <?php endif; ?>
                            </div>
                        </a>
                         <?php endwhile; ?>
                        <?php endif; ?>
                         <!-- ========= end 4th group =========== -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========= metus Area  start =========== -->
    <section class="metus-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2><?php echo the_field('title_intro','option') ?></h2>
                    <p><?php echo the_field('content_intro','option') ?></p>
                </div>
            </div>
                    
            <div class="row">
                <?php
                    $the_query = new WP_Query( array('post_type' => 'introdauction') ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                <div class="col-md-4">
                    <a href="" class="metus-item">
                        <div class="metus-img">
                            <div class="zoom">
                                <img src="<?php  the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="metus-logo">
                                <img src="<?php echo get_field('logo')['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="metus-content">
                            <p><?php the_title(); ?></p>
                        </div>
                        <div class="client-item">
                            <div class="zoom">
                                <img src="<?php the_field('author_image'); ?>" alt="">
                            </div>
                            <div class="client-content">
                                <p><?php the_field('author_description') ?></p>
                                <h5><?php the_field('author_name') ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                     <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- ========= metus Area  start =========== -->
    <?php get_footer(); ?>
<?php
 ?>