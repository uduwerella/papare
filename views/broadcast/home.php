
<?php $assets['assets'] = "assets"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Broadcast Manager</title>
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
        <!--<link href="<?php // echo $assets['assets'];                                      ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />-->
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo $assets['assets']; ?>/plugins/pace/pace.min.js"></script>
        <!-- ================== END BASE JS ================== -->
        <style>
            .runs{
                width: 60%;
                height: 60px;
            }
        </style>
    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-without-sidebar page-header-fixed in">
            <!-- begin #header -->
            <?php $this->load->view('common/header', $assets); ?>
            <!-- end #header -->


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
                                <h4 class="panel-title">Start Broadcasting</h4>
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <?php
                                    echo form_open('../broadcast_page', array('class' => 'form-horizontal'));
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Select match</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="matchSelect" name="matchid">
                                                <option>Select a match</option>
                                                <?php foreach ($match as $mth) { ?>
                                                    <option value="<?php echo $mth['idmatch']; ?>"><?php echo $mth['location'] . " - " . $mth['team1'] . " vs " . $mth['team2']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Toss</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="toss" name="toss">
                                                <option id="matchTeams1" value="0">First, select a match</option>
                                                <option id="matchTeams2" value="0">First, select a match</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Elected</label>
                                        <div class="col-md-4">
                                            <select id="elected" class="form-control" name="elected">
                                                <option>Select a choice</option>
                                                <option value="1">Batting</option>
                                                <option value="2">Balling</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Batsman 01</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="batsman_01" name="bat1">
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Batsman 02</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="batsman_02" name="bat2">
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-group" style="margin-top: 10px">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <input id="batteam" type="hidden" name="batteam" value="" />
                                            <input id="ballteam" type="hidden" name="ballteam" value="" />
                                            <!--<input type="submit" class="btn btn-inverse m-r-5 m-b-5" value="Start broadcasting" style="width: 100%;height: 40px"/>-->
                                            <input type="submit" class="btn btn-inverse m-r-5 m-b-5"  style="width: 100%;height: 40px" value="Start broadcasting">
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
<!--        <script src="<?php // echo $assets['assets'];                                      ?>/plugins/gritter/js/jquery.gritter.js"></script>-->
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

                $("#matchSelect").change(function () {
                    var id = $('#matchSelect').val();
                    jQuery.ajax({
                        type: "POST",
                        url: "match/get_teams",
                        data: {id: id},
                        success: function (data) {
                            if (data === 0) {
                                alert("1");
                            } else {
                                data = $.parseJSON(data);
                                $("#matchTeams1").text(data.team1);
                                $("#matchTeams1").attr('value', data.idteam1);
                                $("#matchTeams2").text(data.team2);
                                $("#matchTeams2").attr('value', data.idteam2);
                            }
                        }
                    });
                });
                //
                $("#elected").change(function () {
                    var idteam = "";
                    var tossTeam = $("#toss").val();
                    var otherTeam = $("#toss").children(":selected").siblings().val();
                    if ($("#elected").val() === "1") {
                        idteam = tossTeam;
                        $("#batteam").val(tossTeam);
                        $("#ballteam").val(otherTeam);
                    } else {
                        idteam = otherTeam;
                        $("#ballteam").val(tossTeam);
                        $("#batteam").val(otherTeam);
                    }
                    jQuery.ajax({
                        type: "POST",
                        url: "player/get_players_by_match_team",
                        data: {idteam: idteam, idmatch: $("#matchSelect").val()},
                        success: function (data) {
                            if (data === 0) {
                                alert("1");
                            } else {
                                $("#batsman_01").empty();
                                $("#batsman_02").empty();
                                data = $.parseJSON(data);
                                $.each(data, function (i, item) {
                                    $("#batsman_01").append("<option value='" + item.idplayer + "'>" + item.name + "</option>");
                                    $("#batsman_02").append("<option value='" + item.idplayer + "'>" + item.name + "</option>");
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

</html>
<?php


