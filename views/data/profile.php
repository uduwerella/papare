<?php $assets['assets'] = "../assets"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Data Manager</title>
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
                        <li><a href="../data_home"><i class="ion-person-stalker bg-green"></i> <span>Players</span></a></li>
                        <li><a href="../data_team"><i class="ion-qr-scanner bg-pink"></i> <span>Teams</span></a></li>
                        <li><a href="../data_matches"><i class="ion-trophy bg-orange"></i> <span>Matches</span></a></li>
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

                <!-- begin profile-container -->
                <div class="profile-container">
                    <!-- begin profile-section -->
                    <div class="profile-section">
                        <!-- begin profile-left -->
                        <div class="profile-left">
                            <!-- begin profile-image -->
                            <div class="profile-image">
                                <img src="<?php echo $assets['assets']; ?>/img/profile/<?php echo $player['basic']['image']; ?>" />
                                <i class="fa fa-user hide"></i>
                            </div>
                            <!-- end profile-image -->
                            <div class="m-b-10">
                                <a href="#" class="btn btn-warning btn-block btn-sm">Change Picture</a>
                            </div>
                        </div>
                        <!-- end profile-left -->
                        <!-- begin profile-right -->
                        <div class="profile-right">
                            <!-- begin profile-info -->
                            <div class="profile-info">
                                <!-- begin table -->
                                <div class="table-responsive">
                                    <table class="table table-profile" style="font-size: 14px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>
                                                    <h4><?php echo $player['basic']['name']; ?></h4>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="field">Contact</td>
                                                <td> <?php echo $player['basic']['contact']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="field">Date of birth</td>
                                                <td><a href="#"><?php echo $player['basic']['dob']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <td class="field">Team</td>
                                                <td><a href="#"><?php echo $player['basic']['team']; ?></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table -->
                            </div>
                            <!-- end profile-info -->
                        </div>
                        <!-- end profile-right -->
                    </div>
                    <!-- end profile-section -->
                    <!-- begin profile-section -->
                    <div class="profile-section">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-4 -->
                            <div class="col-md-6">
                                <h4 class="title"><center>Match list</center></h4>
                                <!-- begin scrollbar -->
                                <div data-scrollbar="true" data-height="280px" class="bg-silver">
                                    <!-- begin table -->
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Match</th>
                                                <th>Date</th>
                                                <th style="width: 20%">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($player['match_list'] as $mlist) { ?>
                                                <tr>
                                                    <td><?php echo $mlist['team1'] . " vs " . $mlist['team2']; ?></td>
                                                    <td><?php echo explode(" ", $mlist['matchdate'])[0]; ?></td>
                                                    <th style="width: 20%">
                                                        <a id="<?php echo $mlist['idmatch']; ?>" href="#modal-dialog-match-details" class="btn btn-primary btn-sm m-r-5 match_details_mod_btn" data-toggle="modal">More details</a>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                    <!--team 01 detail modal start-->
                                    <div class="modal fade" id="modal-dialog-match-details" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Team 01 details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Modal body content here...
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                                    <a href="javascript:;" class="btn btn-sm btn-success">Action</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--team 01 detail modal finish-->
                                </div>
                                <!-- end scrollbar -->
                            </div>
                            <!-- end col-4 -->
                            <!-- begin col-4 -->
                            <div class="col-md-6">
                                <h4 class="title"><center>Attribute list</center></h4>
                                <!-- begin scrollbar -->
                                <div data-scrollbar="true" data-height="280px" class="bg-silver">
                                    <!-- begin table -->
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Attribute</th>
                                                <th>Date</th>
                                                <th style="width: 30%">Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($player['attrib_list'] as $alist) { ?>
                                                <tr>
                                                    <td><?php echo $alist['attribute']; ?></td>
                                                    <td><?php echo explode(" ", $alist['matchdate'])[0]; ?></td>
                                                    <th style="width: 30%">
                                                        <div class="progress progress-striped active">
                                                            <div class="progress-bar progress-bar-success " style="width: <?php echo $alist['level']; ?>%"><span class="tbl_level"><?php echo $alist['level']; ?></span>%</div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                    <!--team 01 detail modal start-->
                                    <div class="modal fade" id="modal-dialog-match-details" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Team 01 details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Modal body content here...
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                                    <a href="javascript:;" class="btn btn-sm btn-success">Action</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--team 01 detail modal finish-->
                                </div>
                                <!-- end scrollbar -->
                            </div>
                            <!-- end col-4 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end profile-section -->
                </div>
                <!-- end profile-container -->
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
        <script src="<?php echo $assets['assets']; ?>/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function () {
                App.init();
                $(".match_details_mod_btn").click(function () {
                    var idMatch = $(this).attr('id');

                });
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
