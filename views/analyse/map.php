<?php $assets['assets'] = "assets"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/form_plugins.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 05 Feb 2018 09:12:11 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Analse Manager</title>
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
                        <li><a href="analyse_home"><i class="ion-home bg-aqua"></i> <span>Home</span></a></li>
                        <li class="active"><a href="analyse_map"><i class="ion-map bg-green"></i> <span>Mapping</span></a></li>
                        <li><a href="analyse_page"><i class="ion-chatbox bg-orange"></i> <span>Results</span></a></li>
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
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="index-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                </div>
                                <h4 class="panel-title">Player mapping for attributes</h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    echo form_open('player_has_attribute/add', array('class' => 'form-horizontal'));
                                    ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" style="padding-right: 0px">Date of match</label>
                                        <div class="col-md-4">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control" id="datepickerInput">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="control-label col-md-1" style="padding-right: 0px">Match</label>
                                        <div class="col-md-4">
                                            <select id="matchList" class="form-control" style="width: 100%" name="idmatch">
                                                <option>Select a match</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" style="padding-right: 0px">Team</label>
                                        <div class="col-md-4">
                                            <select id="teamList" class="form-control" style="width: 100%">
                                                <option>Select a team</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1" style="padding-left: 0px;padding-right: 0px">Player</label>
                                        <div class="col-md-4">
                                            <select id="playerList" class="form-control" style="width: 100%" name="idplayer">
                                                <option>Select a player</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" style="padding-right: 0px">Attribute</label>
                                        <div class="col-md-4">
                                            <select class="form-control" style="width: 100%" name="idattribute">
                                                <option>Select an attribute</option>
                                                <?php foreach ($attributes as $atts) { ?>
                                                    <option value="<?php echo $atts['idattribute']; ?>"><?php echo $atts['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1" style="padding-left: 0px;padding-right: 0px">Level</label>
                                        <div class="col-md-4">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="number" maxlength="2" max="100" min="1" class="form-control" name="level">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-percent"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group" style="margin-top: 10px">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <input type="submit" class="btn btn-inverse m-r-5 m-b-5" value="Map the attribute" style="width: 100%;height: 40px"/>
                                        </div>    
                                        <div class="col-md-1"></div>
                                    </div>
                                    <?php
                                    echo form_close();
                                    ?>
                                </div>
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
                $("#datepickerInput").on("change paste keyup", function () {
                    jQuery.ajax({
                        type: "POST",
                        url: "match/get_match_by_date",
                        data: {date: $("#datepickerInput").val()},
                        success: function (data) {
                            if (data === 0) {
                                alert("1");
                            } else {
                                data = $.parseJSON(data);
                                $(".matchOption").remove();
                                $.each(data, function (i, item) {
                                    $('#matchList').append("<option value='" + item.idteam1 + " vs " + item.short_code1 + " vs " + item.idteam2 + " vs " + item.short_code2 + "' class='matchOption'>" + item.short_code1 + " vs " + item.short_code2 + "</option>");
                                });
                            }
                        }
                    });
                });
                $("#matchList").change(function () {
                    $(".teamOption").remove();
                    $("#teamList").append("<option value='" + $('#matchList').val().split(" vs ")[0] + "' class='teamOption'>" + $('#matchList').val().split(" vs ")[1] + "</option>");
                    $("#teamList").append("<option value='" + $('#matchList').val().split(" vs ")[2] + "' class='teamOption'>" + $('#matchList').val().split(" vs ")[3] + "</option>");
                });
                $("#teamList").change(function () {
                    jQuery.ajax({
                        type: "POST",
                        url: "player/get_players_by_match_team",
                        data: {idmatch: $("#matchList").val(), idteam: $("#teamList").val()},
                        success: function (data) {
                            if (data === 0) {
                                alert("1");
                            } else {
                                data = $.parseJSON(data);
                                $(".playerOption").remove();
                                $.each(data, function (i, item) {
                                    $("#playerList").append("<option class='playerOption' value='" + item.idplayer + "'>" + item.name + "</option>");
                                });
                            }
                        }
                    });
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

    <!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/form_plugins.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 05 Feb 2018 09:12:49 GMT -->
</html>
