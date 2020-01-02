<?php
if( have_rows('footer_group','option') ):  
    while( have_rows('footer_group','option') ): the_row(); 
        $copyright_text = get_sub_field('copyright_text');


    endwhile;
endif;

         
?>



<!-- ========== Footer Area Start   ============-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-flex">
                        <div class="footer-logo">
                              <?php 
                                $footer_logo = get_field('footer_logo','option');
                                if( !empty( $footer_logo ) ): ?>
                                    <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
                                <?php endif; ?>
                        </div>
    <!-- ========== Footer widget  ============-->
                       <?php dynamic_sidebar('footer-1'); ?>
                       <?php dynamic_sidebar('footer-2'); ?>
                       <?php dynamic_sidebar('footer-3'); ?>
                       <?php dynamic_sidebar('footer-4'); ?>
                        <div class="footer-menu-2">
                            <h5>Contact </h5>
                            <ul class="footer-socail">
              <?php
              if( have_rows('footer_social_icon','option') ):
                while ( have_rows('footer_social_icon','option') ) : the_row();
                    $footer_icon = get_sub_field('footer_icon');
                    $footer_icon_url = get_sub_field('footer_icon_url');
                     if( !empty( $footer_icon ) ): ?>

                          <li>
                        <a href="<?php echo $footer_icon_url ?>">
                    <img src="<?php echo esc_url($footer_icon['url']); ?>" alt="<?php echo esc_attr($footer_icon['alt']); ?>" />
                        </a>

                              </li>
                              <?php endif;

                        endwhile;
                    endif;
                    ?> 
                         </ul>   
                            
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy-right">
                        <div class="copy-content">
                            <p><?php echo $copyright_text; ?></p>
                        </div>
                        <div class="copy-card">
                            <?php
                            if( have_rows('company_logos','option') ): 
                            while( have_rows('company_logos','option') ): the_row(); 
                                $company_logos1 = get_sub_field('amazon_logo','option');
                                 $company_logos2 = get_sub_field('emerald_logo','option');
                            ?>


                        
                            <a href="">
                                <?php 
                                    
                                    if( !empty( $company_logos1 ) ): ?>
                                        <img src="<?php echo esc_url($company_logos1); ?>" alt="">
                                    <?php endif; ?>
                            </a>
                            <a href="">
                                <?php 
                               
                                if( !empty( $company_logos2 ) ): ?>
                                    <img src="<?php echo esc_url($company_logos2['url']); ?>" alt="">
                                <?php endif; ?>
                            </a>
                                

                             <?php endwhile; ?>
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ========== Footer Area End ============-->
    <!-- <script src="assets/js/$-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/smartmenus.min.js"></script> -->
    <!--    <script src="assets/js/main.js"></script>-->
    <script>
        // SmartMenus init
        (function($){
            ('#main-menu').smartmenus({
                mainMenuSubOffsetX: -1,
                mainMenuSubOffsetY: 4,
                subMenusSubOffsetX: 6,
                subMenusSubOffsetY: -6
            });
        });

        // SmartMenus mobile menu toggle button
        (function($) {
            var $mainMenuState = $('#main-menu-state');
            if ($mainMenuState.length) {
                // animate mobile menu
                $mainMenuState.change(function(e) {
                    var $menu = $('#main-menu');
                    if (this.checked) {
                        $menu.hide().slideDown(250, function() {
                            $menu.css('display', '');
                        });
                    } else {
                        $menu.show().slideUp(250, function() {
                            $menu.css('display', '');
                        });
                    }
                });
                // hide mobile menu beforeunload
                $(window).bind('beforeunload unload', function() {
                    if ($mainMenuState[0].checked) {
                        $mainMenuState[0].click();
                    }
                });
            }
        });

    </script>

    <?php wp_footer(); ?>
</body>

</html>
