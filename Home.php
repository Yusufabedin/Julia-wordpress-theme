<?php 
/*
* Template Name: Home page
*/
?>
<?php get_header(); ?>

<body>
    <!-- ============ Header area start ============-->
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
                        <div class="nav-brand"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt=""></a></div>
                        <!-- Sample menu definition -->
                        <?php wp_nav_menu( array(
                            'theme_location'  => '',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu-{menu-slug}-container',
                            'container_id'    => 'main-menu',
                            'menu_class'      => 'menu sm sm-clean text-center',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>

                        <!-- <ul id="main-menu" class="sm sm-clean text-center">
                            <li><a href="">Home</a></li>
                            <li><a href="">J.Ivy</a>
                                <ul>
                                    <li><a href="">Sub menu</a></li>
                                    <li><a href="">Demos + themes</a></li>
                                    <li><a href="">The author</a></li>
                                    <li><a href="">The company</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">BE-EDGE</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Events</a></li>
                            <li><a href="">Contact</a></li>
                        </ul> -->
                        <div class="social-menu">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/facebook.png" alt="facebook"> </a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitter.png" alt="twitter"> </a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/instagram.png" alt="instagram"> </a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/linkedin.png" alt="linkedin"> </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--========= header area end ========== -->

    <!-- ==========Banner area start ========== -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-items">
                        <div class="banner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.png" alt="banner">
                        </div>
                        <div class="banner-content">
                            <h2>Instrument to craft employability for multidimensional job candidates</h2>
                            <h5>Using the BE-EDGE Method for Consulting Cases and Capstone Projects</h5>
                            <div class="theme-btn"><a href="">Buy now</a></div>
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
                <h2>Julia Ivy</h2>
                <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                    <p>Ph.D. Psychology & Ph.D. Management (Strategy)</p>
                </div>
                <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                    <p>Expert in personal strategy for multidimensional
                        professionals</p>
                </div>
                <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                    <p>Consultant for universities and businesses in
                        crafted employment and employability</p>
                </div>
            </div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/bg-img3.jpg" alt="">
                    <a href="" class="showMore-btn">Show More</a>
                </div>
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
                        <div class="card-item card-item-1">
                            <div class="card-block">
                                <h3>How the <br>
                                    BE-EDGE Method <br>
                                    can help:</h3>
                                <div class="theme-btn"><a href="">Download Book Now</a></div>
                            </div>
                        </div>
                        <a href="" class="card-item card-item-2">
                            <div class="card-block">
                                <h3>PEOPLE</h3>
                                <div class="card-content">
                                    <div class="card-text">
                                        <span><i class="fas fa-check-circle"></i></span>
                                        <p>Making the "what's next?" choice</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Investing to YOUR own personal, social, and professional capitals</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>"Make YOUR case to craft YOUR
                                            edge" utilization of YOUR capitals</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="card-item card-item-3">
                            <div class="card-block">
                                <h3>UNIVERSITIES</h3>
                                <div class="card-content">
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Capstone courses for career design</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Consulting Case Writing Competition</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Alumna engagement</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Employer engagement </p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Internships with impact measures</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Enrollment to graduate programs</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="card-item card-item-2">
                            <div class="card-block">
                                <h3>BUSINESSES</h3>
                                <div class="card-content">
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Talent recruitmentand verification through the company fit Veteran engagement</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>University engagement for the talent pipeline</p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Workplace development for Milennials and Gen Z </p>
                                    </div>
                                    <div class="card-text"><span><i class="fas fa-check-circle"></i></span>
                                        <p>Workplace development for design thinkers</p>
                                    </div>
                                </div>
                            </div>
                        </a>
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
                    <h2>In varius <strong> metus sed</strong></h2>
                    <p>Aliquam laoreet sem magna, sed ornare ligula maximus non. Praesent vehicula odio quam, nec finibus nisl elementum
                        a. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="metus-item">
                        <div class="metus-img">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metus-1.jpg" alt="">
                            </div>
                            <div class="metus-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metus-1-1.png" alt="">
                            </div>
                        </div>
                        <div class="metus-content">
                            <p>Consulting Case “Expansion Decision:
                                HC SECURITIES AND INVESTMENT (Egypt),”
                                Developed by Ali Choucri, Anne Dietterich,
                                Victoria Gillern. Mentor: Julia Ivy</p>
                        </div>
                        <div class="client-item">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-1.jpg" alt="">
                            </div>
                            <div class="client-content">
                                <p>Working on the HC consulting case gave me confidence to seek strategic partnerships in
                                    my own career od working with foreign investors and international companies with an interest in US assets.</p>
                                <h5>Ali Choucri</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="metus-item">
                        <div class="metus-img">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metus-2.jpg" alt="">
                            </div>
                            <div class="metus-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metus-2-2.png" alt="">
                            </div>
                        </div>
                        <div class="metus-content">
                            <p>Consulting Case “FIREDOORS: Path for
                                International Expansion” (Belarus)
                                Developed by Radzion Marozau. Mentor: Julia Ivy</p>
                        </div>
                        <div class="client-item">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-2.jpg" alt="">
                            </div>
                            <div class="client-content">
                                <p>Even when the FireDoors case had been completed, the owner continued communicating with me as a peer
                                    looking for unconvential insights. This has definitely helped me redefineand strengthen my positioning
                                    for the Belarus business market, and it opened opportunities for new projects.</p>
                                <h5>Radzivon Marozau</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="metus-item">
                        <div class="metus-img">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metus-3.jpg" alt="">
                            </div>
                            <div class="metus-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metus-3-3.png" alt="">
                            </div>
                        </div>
                        <div class="metus-content">
                            <p>Consulting Case “BREWERKZ: Brewing What Works Best” (Singapore) Developed by
                                Shreshthi Mehta. Mentor: Julia Ivy</p>
                        </div>
                        <div class="client-item">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-3.jpg" alt="">
                            </div>
                            <div class="client-content">
                                <p>Each case is a journey for me that helps me discover new angles of me as a
                                    globally minded HR professional, as a strategic thinker, and a problem solver.
                                    Because of the BE-EDGE experience, my voice in profession became muchstronger.
                                    Having awards at national and international levels for my consulting cases contributed
                                    to my credibility in the US and abroad.</p>
                                <h5>Shretshthi Mehta</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= metus Area  start =========== -->
    <?php get_footer(); ?>
<?php
 ?>