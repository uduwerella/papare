<?php $assets['assets'] = "assets"; ?>
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
        <!--<link href="<?php // echo $assets['assets'];             ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />-->
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
                        <li><a href="data_home"><i class="ion-person-stalker bg-green"></i> <span>Players</span></a></li>
                        <li class="active"><a href="data_team"><i class="ion-qr-scanner bg-pink"></i> <span>Teams</span></a></li>
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


                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 ui-sortable">
                        <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
                            <li class="active"><a href="#searchteam" data-toggle="tab"><i class="ion-ios-photos-outline f-s-16 m-r-5"></i> <span class="hidden-xs">Search teams</span></a></li>
                            <li class=""><a href="#newteam" data-toggle="tab"><i class="ion-ios-cart f-s-16 m-r-5"></i> <span class="hidden-xs">New team</span></a></li>
                        </ul>
                        <div class="tab-content" data-sortable-id="index-3">
                            <div class="tab-pane fade active in" id="searchteam">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 30%">Name</th>
                                                        <th style="width: 15%">Short code</th>
                                                        <th style="width: 40%">Address</th>
                                                        <th style="width: 15%">Contact</th>
                                                        <th style="width: 15%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="teamFilterResultTable">
                                                    <tr>
                                                        <td style="width: 30%">
                                                            <input id="teamFilterName" type="text" class="form-control" placeholder="Search by name" style="width: 100%">
                                                        </td>
                                                        <td style="width: 15%">
                                                            <input id="teamFilterCode" type="text" class="form-control" placeholder="Search by code" style="width: 100%">
                                                        </td>
                                                        <td style="width: 40%">
                                                            <input id="teamFilterAddress" type="text" class="form-control" placeholder="Search by address" style="width: 100%">
                                                        </td>
                                                        <td style="width: 15%">
                                                            <input id="teamFilterContact" type="text" class="form-control" placeholder="Search by contact" style="width: 100%">
                                                        </td>
                                                        <th>    
                                                            <button id="teamFilterBtn" class="btn btn-info m-r-5 m-b-5" style="width:100%">Search</button>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="newteam">
                                <?php
                                echo form_open('team/add', array('class' => 'form-horizontal'));
                                ?>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Team name</label>
                                    <div class="col-md-5">
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="text" class="form-control" name="name">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <label class="control-label col-md-1" style="padding-left: 0px">Short code</label>
                                    <div class="col-md-3">
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="text" class="form-control" name="shortcode">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Address</label>
                                    <div class="col-md-5">
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="text" class="form-control" name="address">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <label class="control-label col-md-1">Contact</label>
                                    <div class="col-md-3">
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="text" class="form-control" name="contact">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input type="submit" class="btn btn-inverse m-r-5" style="width: 100%;height: 40px" value="Add team">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <?php
                                echo form_close();
                                ?>
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
        <!--<script src="<?php // echo $assets['assets'];             ?>/plugins/gritter/js/jquery.gritter.js"></script>-->
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

                //
                $('#teamFilterBtn').click(function () {
                    teamFilter();
                });
                //
                function teamFilter() {
                    $('.teamFilterResultRow').remove();
                    var name = $('#teamFilterName').val();
                    var code = $('#teamFilterCode').val();
                    var address = $('#teamFilterAddress').val();
                    var contact = $('#teamFilterContact').val();
                    jQuery.ajax({
                        type: "POST",
                        url: "team/filter",
                        data: {name: name, code: code, address: address, contact: contact},
                        success: function (data) {
                            if (data === 0) {
                                alert("1");
                            } else {
                                data = $.parseJSON(data);
                                $.each(data, function (i, item) {
                                    $('#teamFilterResultTable').append("\n\
                                                        <tr class='teamFilterResultRow'>\n\
<td style='width: 30%'>" + item.name + "</td>\n\
<td style='width: 15%'>" + item.short_code + "</td>\n\
<td style='width: 40%'>" + item.address + "</td>\n\
<td style='width: 15%'>" + item.contact + "</td>\n\
<td style='width: 15%'><a href='player_profile\\" + item.idteam + "' class='btn btn-info m-r-5 m-b-5' style='width:100%'>Profile</a></td>\n\
</tr>");
                                });
                            }
                        }
                    });
                }
                //
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


