<?php $assets['assets'] = "../assets"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/chart-flot.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 05 Feb 2018 09:14:49 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Analse Manager</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="<?php echo $assets['assets']; ?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/style.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo $assets['assets']; ?>/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

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
                        <li><a href="../analyse_home"><i class="ion-home bg-aqua"></i> <span>Home</span></a></li>
                        <li><a href="../analyse_map"><i class="ion-map bg-green"></i> <span>Mapping</span></a></li>
                        <li class="active"><a href="analyse_page"><i class="ion-chatbox bg-orange"></i> <span>Results</span></a></li>
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

                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="flot-chart-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                </div>
                                <h4 class="panel-title">Results - <span id="attribName"><?php echo $player_has_attribute[0]['attribute']; ?></span></h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr style="font-size: 14px">
                                                <th style="width: 10%">Select</th>
                                                <th>Player</th>
                                                <th>Team</th>
                                                <th>Date</th>
                                                <th style="width: 30%">Level</th>
                                            </tr>
                                        </thead>
                                        <tbody id="attribResultTable">
                                            <?php foreach ($player_has_attribute as $pha) { ?>
                                                <tr>
                                                    <td style="width: 10%"><input class="tbl_select" type="checkbox" name=""/></td>
                                                    <td class="tbl_name"><?php echo $pha['player']; ?><span style="display: none"><?php echo $pha['player']." - ".  explode(" ", $pha['match_date'])[0]; ?></span></td>
                                                    <td><?php echo $pha['team']; ?></td>
                                                    <td><?php echo $pha['match_date']; ?></td>
                                                    <td class="tbl_level_cover" style="width: 30%">
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar progress-bar-success " style="width: <?php echo $pha['level']; ?>%"><span class="tbl_level"><?php echo $pha['level']; ?></span>%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <a id="genChartBtn" href="javascript:;" class="btn btn-primary btn-sm m-r-5">Generate chart</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>

                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="flot-chart-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                </div>
                                <h4 class="panel-title">Bar Chart</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="myChart" style="width: 100%;height:400px"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <script src="<?php echo $assets['assets']; ?>/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        <script>
            $(document).ready(function () {
                App.init();
                $("#genChartBtn").click(function () {
                    var playerList = $("#attribResultTable").children('tr').children('td').children('.tbl_select:checked').parent().siblings('.tbl_name').children('span').toArray();
                    var a = [];
                    for (var i = 0; i < playerList.length; i++) {
                        a.push(playerList[ i ].innerHTML);
                    }
                    //
                    var playerList = a;
                    var levelList = $("#attribResultTable").children('tr').children('td').children('.tbl_select:checked').parent().siblings('.tbl_level_cover').children('div').children('div').children('.tbl_level').toArray();
                    var a = [];
                    for (var i = 0; i < levelList.length; i++) {
                        a.push(levelList[ i ].innerHTML);
                    }
                    //
                    var levelList = a;
                    var lable = $("#attribName").text();
                    createChart(lable, playerList, levelList);
                });
            });

            function createChart(lable, playerList, levelList) {
                var ctx = $("#myChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: playerList,
                        datasets: [{
                                label: lable,
                                data: levelList,
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        steps: 10,
                                        stepValue: 10,
                                        max: 100
                                    }
                                }]
                        }
                    }
                });
            }
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

    <!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/chart-flot.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 05 Feb 2018 09:14:54 GMT -->
</html>
