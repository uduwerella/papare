<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Color Admin | Login Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet" />
        <link href="assets/css/style.min.css" rel="stylesheet" />
        <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="assets/plugins/pace/pace.min.js"></script>
        <!-- ================== END BASE JS ================== -->
    </head>
    <body class="pace-top">
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <div class="login-cover">
            <div class="login-cover-image"><img src="assets/img/login-bg/bg-8.jpg" data-id="login-cover-image" alt="" /></div>
            <div class="login-cover-bg"></div>
        </div>
        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            <!-- begin login -->
            <div class="login login-v2" data-pageload-addclass="animated fadeIn">
                <!-- begin brand -->
                <div class="login-header">
                    <div class="brand" style="font-size: 24px">
                        <span class="logo"><i class="ion-ios-cloud"></i></span> Cricket Analyzing Scoreboard
                        <small>your favourite robot for your favourite sport</small>
                    </div>
                    <div class="icon">
                        <i class="ion-ios-locked"></i>
                    </div>
                </div>
                <!-- end brand -->
                <div class="login-content">
                    <form action="http://seantheme.com/color-admin-v3.0/admin/apple/index.html" method="POST" class="margin-bottom-0">
                        <div class="form-group m-b-20">
                            <input type="text" class="form-control input-lg" placeholder="Email Address" required />
                        </div>
                        <div class="form-group m-b-20">
                            <input type="password" class="form-control input-lg" placeholder="Password" required />
                        </div>
                        <div class="checkbox m-b-20">
                            <label>
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <!--<a href="data_home" class="btn btn-primary btn-block btn-lg">Sign me in</a>-->
                            <a href="data_home" class="btn btn-primary btn-block btn-lg">Sign me in</a>
<!--                            <a href="broadcast_home" class="btn btn-primary btn-block btn-lg">Sign me in(broadcast)</a>
                            <a href="analyse_home" class="btn btn-primary btn-block btn-lg">Sign me in(analyze)</a>-->
                        </div>
                        <div class="m-t-20">
                            Not a member yet? Click <a href="#">here</a> to register.
                        </div>
                    </form>
                </div>
            </div>
            <!-- end login -->


        </div>
        <!-- end page container -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
                <script src="assets/crossbrowserjs/html5shiv.js"></script>
                <script src="assets/crossbrowserjs/respond.min.js"></script>
                <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="assets/js/login-v2.demo.min.js"></script>
        <script src="assets/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function () {
                App.init();
                LoginV2.init();
            });
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>

</html>
