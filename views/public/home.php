<?php $assets="assets_home/";?>
<!DOCTYPE html>
<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Abel">
        <meta name="author" content="Paul Laros">
        <link rel="shortcut icon" href="favicon.html">

        <title>Adel &mdash; 3D One Page Template</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="<?php echo $assets;?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $assets;?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $assets;?>css/slippry.css" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="<?php echo $assets;?>css/abel.css" rel="stylesheet">
        <link href="<?php echo $assets;?>css/custom.css" rel="stylesheet">

        <!-- Themeswitcher - REMOVE THIS LINE -->
        <link href="<?php echo $assets;?>css/themeswitcher.css" rel="stylesheet">

        <!-- HTML5 shiv for IE8 support -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <![endif]-->
    </head>

    <!-- Replace class 'light' with 'dark' for dark theme -->
    <!-- Replace class 'pt-sans' with 'open-sans' for Open Sans font -->
    <body class="pt-sans light">
        <div class="loading">
            <span class="fa fa-refresh fa-spin"></span>
        </div>

        <nav class="navbar navbar-abel navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Abel</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    <div id="hamburger" class="bg-check navbar-right dark">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="hidden-xs" href="#introduction">Introduction</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#register">Register</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <section id="intro" class="section youtube">
            <div class="container-fluid">
                <div class="boxed">

                    <div id="P1" class="player" 
                         data-property="{videoURL:'http://youtu.be/41dRU2x6K2c',containment:'.boxed',startAt:0,mute:true,autoPlay:true,loop:true,opacity:1}">
                    </div>

                    <div class="header intro">
                        <h1>We're Abel</h1>
                        <img src="<?php echo $assets;?>img/separator.png" alt="" />
                        <h2 class="subtitle">We love to create</h2>
                    </div>

                    <a class="discover" href="#introduction">
                        <i class="fa fa-angle-double-down"></i>
                    </a>

                </div>
            </div>
        </section><!-- /#intro -->

        <section class="section" id="introduction">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 half bg">
                        <div class="zoom" data-image="<?php echo $assets;?>img/unsplash/1.jpg" data-title="I was a comfortable kid" data-caption="But I don't think about it much anymore">
                            <i class="fa fa-expand"></i>
                        </div>
                    </div>

                    <div class="col-lg-6 half">

                        <div class="content">

                            <div class="section-header">
                                <h2 class="section-title">Our mission</h2>
                                <h3 class="section-subtitle">This pricey stuff makes me dizzy</h3>
                            </div>

                            <p class="text-muted">
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                            </p>
                            <p>&nbsp;</p>
                            <p class="text-center">
                                <a href="#portfolio" class="smooth-scroll btn btn-light">See portfolio</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /#introduction -->

        <section class="section" id="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 half bg">
                        <div class="zoom" data-image="<?php echo $assets;?>img/unsplash/2.jpg" data-title="I was a comfortable kid" data-caption="But I don't think about it much anymore">
                            <i class="fa fa-expand"></i>
                        </div>
                    </div>

                    <div class="col-lg-6 half">

                        <div class="content">

                            <div class="section-header">
                                <h2 class="section-title">Services</h2>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="section-subtitle"><i class="fa fa-map-pin"></i> Branding</h4>
                                    <p class="text-muted">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="section-subtitle"><i class="fa fa-camera-retro"></i> Photography</h4>
                                    <p class="text-muted">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="section-subtitle"><i class="fa fa-pencil"></i> Web Design</h4>
                                    <p class="text-muted">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="section-subtitle"><i class="fa fa-code"></i> App Design</h4>
                                    <p class="text-muted">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /#services -->

        <section class="section" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div id="portfolioPlaceholder" class="col-lg-6 half bg">
                        <div class="zoom" data-image="<?php echo $assets;?>img/unsplash/3.jpg" data-title="I was a comfortable kid" data-caption="But I don't think about it much anymore">
                            <i class="fa fa-expand"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 half">

                        <div class="content">

                            <div class="section-header">
                                <h2 class="section-title">Portfolio</h2>
                                <h3 class="section-subtitle">Takes me a day to remember a day</h3>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item portfolio-item" data-image="<?php echo $assets;?>img/portfolio4.jpg" data-title="Resume template" data-caption="Branding">
                                        <div class="caption">
                                            <div class="inner">
                                                <h3>Resume template</h3>
                                                <span>Branding</span>
                                            </div>
                                        </div>
                                        <a class="image">
                                            <img src="<?php echo $assets;?>img/portfolio4.jpg" class="img-responsive" alt="" />
                                        </a>
                                    </div><!-- /.item -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="item portfolio-item" data-image="<?php echo $assets;?>img/portfolio3.jpg" data-title="Abel" data-caption="Web design">
                                        <div class="caption">
                                            <div class="inner">
                                                <h3>Abel</h3>
                                                <span>Web design</span>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="<?php echo $assets;?>img/portfolio3.jpg" class="img-responsive" alt="" />
                                        </div>
                                    </div><!-- /.item -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item portfolio-item" data-image="<?php echo $assets;?>img/portfolio5.jpg" data-title="El Grand Azul" data-caption="Motion">
                                        <div class="caption">
                                            <div class="inner">
                                                <h3>El Grand Azul</h3>
                                                <span>Motion</span>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="<?php echo $assets;?>img/portfolio5.jpg" class="img-responsive" alt="" />
                                        </div>
                                    </div><!-- /.item -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="item portfolio-item" data-image="<?php echo $assets;?>img/portfolio2.jpg" data-title="KixBox" data-caption="Photography">
                                        <div class="caption">
                                            <div class="inner">
                                                <h3>KixBox</h3>
                                                <span>Photography</span>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="<?php echo $assets;?>img/portfolio2.jpg" class="img-responsive" alt="" />
                                        </div>
                                    </div><!-- /.item -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /#portfolio -->

        <section class="section" id="register">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 half bg">
                        <div class="zoom" data-image="<?php echo $assets;?>img/unsplash/4.jpg" data-title="I was a comfortable kid" data-caption="But I don't think about it much anymore">
                            <i class="fa fa-expand"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 half">

                        <div class="content">

                            <div class="section-header">
                                <h2 class="section-title">About us</h2>
                                <h3 class="section-subtitle">I was a comfortable kid</h3>
                            </div>

                            <p class="text-muted">
                                Take all your reasons and take them away. To the middle of nowhere, and on your way home. Throw from your window your record collection. They all run together and never make sense. But that's how we like it, and that's all we want.<br /><br />
                            </p>

                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <img src="<?php echo $assets;?>img/team3.jpg" class="img-responsive" alt="" />
                                    <h4 class="name">Katelynn</h4>
                                    <h5>CEO</h5>
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo $assets;?>img/team1.jpg" class="img-responsive" alt="" />
                                    <h4 class="name">Amy</h4>
                                    <h5>Developer</h5>
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo $assets;?>img/team2.jpg" class="img-responsive" alt="" />
                                    <h4 class="name">Gabriel</h4>
                                    <h5>Designer</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /#about -->

        <section class="section" id="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 half maps">
                        <div class="map-container">
                            <iframe style="height: 100%;width: 100%;border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0139555628944!2d79.88595851421535!3d6.768151822149854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245a660b246b3%3A0xdab9cc19e5fb5e95!2sGreenZion+Software+Developers!5e0!3m2!1sen!2slk!4v1517835135176"  frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 half">

                        <div class="content">
                            <div class="section-header">
                                <h2 class="section-title">Contact</h2>
                                <h3 class="section-subtitle">Do you care if I stay?</h3>
                            </div>

                            <form method="post" class="form">
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="text" />
                                </div>
                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6"></textarea>
                                <br />
                                <button class="btn btn-dark" type="submit">Send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /#contact -->

        <nav id="vertical-nav">
            <ul>
                <li><a class="prev inactive"><i class="fa fa-arrow-long-up"></i></a></li>
                <li><a class="next inactive"></a></li>
            </ul>
        </nav><!-- /#vertical-nav -->

    
        <!-- Scripts -->
        <script src="<?php echo $assets;?>js/jquery-1.11.3.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo $assets;?>js/bootstrap.min.js"></script>
        <script src="<?php echo $assets;?>js/curtains.js"></script>
        <script src="<?php echo $assets;?>js/smoothScroll.js"></script>
        <script src="<?php echo $assets;?>js/slippry.min.js"></script>
        <script src="<?php echo $assets;?>js/intense.js"></script>
        <script src="<?php echo $assets;?>js/background-check.min.js"></script>
        <script src="<?php echo $assets;?>js/main.js"></script>

        <!-- YouTube/Video Background -->
        <script src="<?php echo $assets;?>js/jquery.mb.YTPlayer.js"></script>
        <script>
            $(function () {
                $(".player").mb_YTPlayer();
            });
        </script>

        <!-- Themeswitcher - REMOVE THIS LINE -->
        <script src="<?php echo $assets;?>js/themeswitcher.js"></script>

    </body>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</html>