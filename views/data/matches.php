<?php $assets['assets'] = "assets"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/form_plugins.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 05 Feb 2018 09:12:11 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Data Manager</title>
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

        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
        <link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
        <link href="assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
        <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
        <link href="assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
        <link href="assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
        <link href="assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="assets/plugins/pace/pace.min.js"></script>
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
                        <li><a href="data_team"><i class="ion-qr-scanner bg-pink"></i> <span>Teams</span></a></li>
                        <li class="active"><a href="data_matches"><i class="ion-trophy bg-orange"></i> <span>Matches</span></a></li>
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
                            <li class="active"><a href="#match" data-toggle="tab"><i class="ion-ios-photos-outline f-s-16 m-r-5"></i> <span class="hidden-xs">Create match</span></a></li>
                            <li class=""><a href="#tournament" data-toggle="tab"><i class="ion-ios-cart f-s-16 m-r-5"></i> <span class="hidden-xs">Create tournament</span></a></li>
                        </ul>
                        <div class="tab-content" data-sortable-id="index-3">
                            <div class="tab-pane fade active in" id="match">
                                <div class="row" style="margin-top: 20px">
                                    <?php
                                    echo form_open('match/add', array('class' => 'form-horizontal'));
                                    ?>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <label class="control-label col-md-1">Team one</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="team1">
                                                <option>Select a team</option>
                                                <?php foreach ($teams as $ts) { ?>
                                                    <option value="<?php echo $ts['idteam']; ?>"><?php echo $ts['short_code']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Team two</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="team2">
                                                <option>Select a team</option>
                                                <?php foreach ($teams as $ts) { ?>
                                                    <option value="<?php echo $ts['idteam']; ?>"><?php echo $ts['short_code']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group" style="margin-top: 30px">
                                        <div class="col-md-1" style="width: 8.33%"></div>
                                        <label class="control-label col-md-1" style="padding-left: 0px;width: 8.4%">Overs</label>
                                        <div class="col-md-2" style="width: 19.26%">
                                            <select class="form-control" name="overs">
                                                <option>Select a over count</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <!--<option value="90">unlimited</option>-->
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1" style="padding-left: 0px;width: 7%">Date & time</label>
                                        <div class="col-md-2" style="width: 20.66%">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control" name="from_date">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="control-label col-md-1" style="padding-left: 0px;width: 7%">Location</label>
                                        <div class="col-md-2" style="width: 20.66%">
                                            <select class="form-control" name="idlocation">
                                                <option>Select a location</option>
                                                <?php foreach ($locations as $ltns) { ?>
                                                    <option value="<?php echo $ltns['idlocation']; ?>"><?php echo $ltns['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-1"  style="width: 8.33%"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <input type="submit" class="btn btn-inverse m-r-5" style="width: 100%;height: 40px" value='Create match'>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <?php
                                    echo form_close();
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tournament">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <label class="control-label col-md-1" style="padding-right: 0px;text-align: left">Name</label>
                                        <div class="col-md-9">
                                            <div class="input-group date" id="datetimepicker">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-pencil"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <select id="allTeamsList" multiple="true" class="form-control" style="min-height: 180px">
                                                <?php foreach ($teams as $ts) { ?>
                                                    <option id="allTeamItemId-<?php echo $ts['idteam']; ?>" value="<?php echo $ts['idteam']; ?>"><?php echo $ts['short_code']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row" style="padding-top: 50px">
                                                <div class="col-sm-12">
                                                    <button id="selectTeamsBtn" type="button" class="btn btn-info m-r-5 m-b-5" style="width: 100%">Select team <i class="ion ion-chevron-right"></i></button>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button id="deselectTeamsBtn" type="button" class="btn btn-info m-r-5 m-b-5" style="width: 100%">Deselect team <i class="ion ion-chevron-left"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="selectedTeamsList" multiple="true" class="form-control" style="min-height: 180px">

                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <a href="javascript:;" class="btn btn-inverse m-r-5" style="width: 100%;height: 40px">Create tournament</a>
                                        </div>
                                        <div class="col-md-1"></div>
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
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/masked-input/masked-input.min.js"></script>
        <script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/plugins/password-indicator/js/password-indicator.js"></script>
        <script src="assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
        <script src="assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/moment.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js"></script>
        <script src="assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
        <script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
        <script src="assets/plugins/clipboard/clipboard.min.js"></script>
        <script src="assets/js/form-plugins.demo.min.js"></script>
        <script src="assets/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function () {
                App.init();
                $("#datetimepicker1").datetimepicker({format: "YYYY-MM-DD"});


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

    <!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/form_plugins.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 05 Feb 2018 09:12:49 GMT -->
</html>
