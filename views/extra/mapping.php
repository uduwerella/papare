<?php $assets['assets'] = "assets"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Color Admin | Dashboard</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="<?php echo $assets['assets']; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/style.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        <link href="<?php echo $assets['assets']; ?>/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo $assets['assets']; ?>/plugins/pace/pace.min.js"></script>
        <!-- ================== END BASE JS ================== -->
    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            <?php $this->load->view('common/header', $assets); ?>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar user -->
                    <ul class="nav">
                        <li class="nav-profile">
                            <div class="image">
                                <a href="javascript:;"><img src="<?php echo $assets['assets']; ?>/img/user-13.jpg" alt="" /></a>
                            </div>
                            <div class="info">
                                Sean Ngu
                                <small>Front end developer</small>
                            </div>
                        </li>
                    </ul>
                    <!-- end sidebar user -->
                    <!-- begin sidebar nav -->
                    <ul class="nav">
                        <li class="nav-header">Navigation</li>
                        <li><a href="data_home"><i class="ion-ios-search bg-aqua"></i> <span>Search players</span></a></li>
                        <li><a href="data_player"><i class="ion-person-stalker bg-green"></i> <span>Manage players</span></a></li>
                        <li><a href="data_team"><i class="ion-qr-scanner bg-pink"></i> <span>Manage teams</span></a></li>
                        <li class="active"><a href="data_mapping"><i class="ion-network bg-blue"></i> <span>Player mapping</span></a></li>
                        <li><a href="data_matches"><i class="ion-trophy bg-orange"></i> <span>Matches</span></a></li>
                        <!-- begin sidebar minify button -->
                        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
                        <!-- end sidebar minify button -->
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <!-- begin #content -->
            <div id="content" class="content">
                <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
                <!-- end breadcrumb -->
                <!-- begin page-header -->
                <h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
                <!-- end page-header -->

                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-gradient-blue">
                            <div class="stats-icon"><i class="ion-ios-world"></i></div>
                            <div class="stats-info">
                                <h4>TOTAL VISITORS</h4>
                                <p>3,291,922</p>	
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-gradient-aqua">
                            <div class="stats-icon"><i class="ion-ios-upload"></i></div>
                            <div class="stats-info">
                                <h4>BOUNCE RATE</h4>
                                <p>20.44%</p>	
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-gradient-purple">
                            <div class="stats-icon"><i class="ion-ios-pie"></i></div>
                            <div class="stats-info">
                                <h4>UNIQUE VISITORS</h4>
                                <p>1,291,922</p>	
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-stats bg-gradient-orange">
                            <div class="stats-icon"><i class="ion-ios-clock"></i></div>
                            <div class="stats-info">
                                <h4>AVG TIME ON SITE</h4>
                                <p>00:12:23</p>	
                            </div>
                            <div class="stats-link">
                                <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="index-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                </div>
                                <h4 class="panel-title">Website Analytics (Last 7 Days)</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Name in full</label>
                                        <div class="col-md-10">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Age</label>
                                        <div class="col-md-4">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="control-label col-md-2">Current team</label>
                                        <div class="col-md-4">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end #content -->



            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo $assets['assets']; ?>/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
                <script src="<?php echo $assets['assets']; ?>/crossbrowserjs/html5shiv.js"></script>
                <script src="<?php echo $assets['assets']; ?>/crossbrowserjs/respond.min.js"></script>
                <script src="<?php echo $assets['assets']; ?>/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo $assets['assets']; ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="<?php echo $assets['assets']; ?>/plugins/gritter/js/jquery.gritter.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo $assets['assets']; ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo $assets['assets']; ?>/js/dashboard.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function () {
                App.init();
                Dashboard.init();
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
<?php


