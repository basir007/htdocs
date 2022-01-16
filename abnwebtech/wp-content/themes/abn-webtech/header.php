<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="QXbq8NVeuEEfDAv5m1_azTVzNL3Rl97t4iHZ_vezHWY" />
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
    
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/offcanvas-menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ABN WEBTECH</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="case-study.html">
                                    Case Study
                                </a>
                            </li>
                            <li class="nav-item dropdown has-mega-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="service" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Services
                                </a>
                                <div class="dropdown-menu mega-menu" aria-labelledby="service">
                                    <section class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h2 class="">Our Service</h2>
                                                    <p>We have 8+ years of expirience and a good team of full stack developer, and designer to deliver hight quality, traffic driven result </p>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-6">
                                                            <h3 class="nav-title"><i class="fas fa-laptop-code"></i>Web Development</h3>
                                                            <ul>
                                                                <li><a class="dropdown-item" href="web-design.html">Web Design</a></li>
                                                                <li><a class="dropdown-item" href="web-development.html">Web Development</a></li>
                                                                <li><a class="dropdown-item" href="app-development.html">App Development</a></li>
                                                                <li><a class="dropdown-item" href="content-marketing.html">Content Marketing</a></li>
                                                                <li><a class="dropdown-item" href="social-marketing.html">Social Marketing</a></li>
                                                                <li><a class="dropdown-item" href="seo-optimization.html">SEO Optimization</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <h3 class="nav-title"><i class="fab fa-wordpress"></i>WordPress Services</h3>
                                                            <ul>
                                                                <li><a class="dropdown-item" href="web-design.html">PSD to html</a></li>
                                                                <li><a class="dropdown-item" href="web-development.html">WordPress Theme </a></li>
                                                                <li><a class="dropdown-item" href="app-development.html">WordPress Plugin</a></li>
                                                                <li><a class="dropdown-item" href="content-marketing.html">WordPress CMS </a></li>
                                                                <li><a class="dropdown-item" href="social-marketing.html">WordPress BLog</a></li>
                                                                <li><a class="dropdown-item" href="seo-optimization.html">WordPress SEO</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <h3 class="nav-title"><i class="fas fa-newspaper"></i>Content Writing </h3>
                                                            <ul>
                                                                <li><a class="dropdown-item" href="blog.html">Blog Writing</a></li>
                                                                <li><a class="dropdown-item" href="blog-left-sidebar.html">Guest Post Writing</a></li>
                                                                <li><a class="dropdown-item" href="blog-right-sidebar.html">Homepage Content Writing</a></li>
                                                                <li><a class="dropdown-item" href="blog-detail.html">Service Content Writing</a></li>
                                                                <li><a class="dropdown-item" href="blog-detail.html">About Page Content Writing</a></li>
                                                                <li><a class="dropdown-item" href="blog-detail.html">SEO Content Writing</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <h3 class="nav-title"><i class="fas fa-palette"></i>Web Design</h3>
                                                            <ul>
                                                                <li><a class="dropdown-item" href="web-design.html">Web Design</a></li>
                                                                <li><a class="dropdown-item" href="web-development.html">Web Development</a></li>
                                                                <li><a class="dropdown-item" href="app-development.html">App Development</a></li>
                                                                <li><a class="dropdown-item" href="content-marketing.html">Content Marketing</a></li>
                                                                <li><a class="dropdown-item" href="social-marketing.html">Social Marketing</a></li>
                                                                <li><a class="dropdown-item" href="seo-optimization.html">SEO Optimization</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <!-- /ROw -->
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </section>
                                    <!-- /Mega Nav Top -->
                                    <section class="social-group">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="nav-meta">
                                                        <div class="nav-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <a href="#">abnwebtech@gmail.com</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="nav-meta">
                                                        <div class="nav-icon">
                                                            <i class="fas fa-phone-alt"></i>
                                                        </div>
                                                        <a href="#">881 881 0334</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="nav-meta">
                                                        <div class="nav-icon">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </div>
                                                        <a href="#">881 881 0334</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="nav-meta">
                                                        <div class="nav-icon">
                                                            <i class="fab fa-skype"></i>
                                                        </div>
                                                        <a href="#">abnwebtech</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                    <!-- /Social Group -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portfolio.html">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <section class="offcanvas-social-group">
                            <ul>
                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </section>
                        <!-- /Social Group -->
                    </div>
                </div>
        </nav>
    </header>
