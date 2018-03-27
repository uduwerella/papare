
<?php $assets['assets'] = "assets" ?>
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
<!--        <link href="<?php // echo $assets['assets'];                                                                                                          ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />-->
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
        <?php
        $ballTeam = $data['team_1_players'];
        $batTeam = $data['team_2_players'];
        if ($data['ballteam'] == $data['team_2']) {
            $ballTeam = $data['team_2_players'];
            $batTeam = $data['team_1_players'];
        }
        ?>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-without-sidebar page-header-fixed in">
            <!-- begin #header -->
            <?php $this->load->view('common/header', $assets); ?>
            <!-- end #header -->
            <div style="display:none">
                <?php
                $counter = 1;
                foreach ($data['team_1_players'] as $team1) {
                    ?>
                    <input id="team1_<?php echo $counter; ?>" type="hidden" name="<?php echo $team1['name']; ?>" value="<?php echo $team1['idplayer']; ?>" />
                    <?php
                    ++$counter;
                }
                $counter = 1;
                foreach ($data['team_2_players'] as $team2) {
                    ?>
                    <input id="team2_<?php echo $counter; ?>" type="hidden" name="<?php echo $team2['name']; ?>" value="<?php echo $team2['idplayer']; ?>" />
                    <?php
                    ++$counter;
                }
                ?>
            </div>
            <!-- begin #content -->
            <div id="content" class="content">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-6 col-sm-12">
                        <div class="widget widget-stats bg-gradient-blue">
                            <!--<div class="stats-icon"><i class="ion-ios-world"></i></div>-->
                            <div class="stats-info">
                                <p style="font-size: 20px;margin-bottom: 5px"><?php echo $data['batteam_name']; ?></p>
                                <p style="font-size: 15px;width: 20%;float: left">Runs - <span id="batting_runs">80</span></p>
                                <p style="font-size: 15px;width: 39%;float: right;text-align: right"><span id="batting_1">Player_16</span> - <span id="batting_1_runs">2</span>(<span id="batting_1_balls">5</span>)<span id="strike_star_1">*</span></p>
                                <p style="font-size: 15px;width: 39%;float: right"><span id="batting_2">Player_17</span> - <span id="batting_2_runs">8</span>(<span id="batting_2_balls">5</span>)<span id="strike_star_2"></span></p>
                                <p style="font-size: 15px;width: 20%;float: left;margin-top: 5px">Wickets - <span id="batting_wickets">0</span></p>
                                <p style="font-size: 15px;width: 48%;float: right;text-align: right;margin-top: 5px">...</p>
                                <p style="font-size: 15px;width: 30%;float: right;margin-top: 5px">Extras - <span id="batting_extras">20</span></p>
                                <p style="font-size: 15px;width: 100%;height: 35px"></p>	
                            </div>
                            <div class="stats-link">
                                <a href="#modal-dialog-team-01" data-toggle="modal">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--team 01 detail modal start-->
                    <div class="modal fade" id="modal-dialog-team-01" style="display: none;">
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
                    <div class="col-md-6 col-sm-12">
                        <div class="widget widget-stats bg-gradient-blue">
                            <!--<div class="stats-icon"><i class="ion-ios-world"></i></div>-->
                            <div class="stats-info">
                                <p style="font-size: 20px;margin-bottom: 5px"><?php echo $data['ballteam_name']; ?> </p>
                                <p style="font-size: 15px;width: 20%;float: left">Runs - <span id="balling_runs">0</span></p>
                                <p style="font-size: 15px;width: 39%;float: right;text-align: right;height: 15px"></p>
                                <p style="font-size: 15px;width: 39%;float: right">
                                    <a href="#modal-dialog-change-baller" data-toggle="modal" style="color: white;text-decoration: none"><span id="balling_baller">Player_3</span> - <span id="balling_baller_overs">0.0</span>(<span id="balling_baller_wickets">0</span>)</a>
                                </p>
                                <p style="font-size: 15px;width: 20%;float: left;margin-top: 5px">Wickets - <span id="balling_wickets">0</span></p>
                                <p style="font-size: 15px;width: 39%;float: right;text-align: right;margin-top: 5px;height: 15px"></p>
                                <p style="font-size: 15px;width: 39%;float: right;margin-top: 5px;height: 15px"></p>
                                <p style="font-size: 15px;width: 100%;height: 35px"></p>	
                            </div>
                            <div class="stats-link">
                                <a href="#modal-dialog-team-02" data-toggle="modal">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--change baller modal start-->
                    <div class="modal fade" id="modal-dialog-change-baller" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Change baller</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <form class="form-horizontal" action="javascript:;">
                                            <div class="form-group">
                                                <div class="col-md-1"></div>
                                                <label class="control-label col-md-2" style="padding-right: 0px">New baller</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" style="width: 100%">
                                                        <option>Select new baller</option>
                                                        <?php foreach ($ballTeam as $ballers) { ?>
                                                            <option value="<?php echo $ballers['idplayer']; ?>"><?php echo $ballers['name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>
                                            <div class="form-group" style="margin-top: 10px">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <button id="changeBallerBtn" class="btn btn-inverse m-r-5 m-b-5"  style="width: 100%;height: 40px">Change baller</button>
                                                </div>    
                                                <div class="col-md-1"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                    <a href="javascript:;" class="btn btn-sm btn-success">Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--change baller modal finish-->
                    <!--team 02 detail modal start-->
                    <div class="modal fade" id="modal-dialog-team-02" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Team 02 details</h4>
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
                    <!--team 02 detail modal finish-->
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
                                <h4 class="panel-title">Match name</h4>
                            </div>
                            <div class="panel-body">
                                <input type="hidden" id="hidden_matchid" value="<?php echo $data['idmatch']; ?>" />
                                <input type="hidden" id="hidden_team1" value="<?php echo $data['team_1']; ?>" />
                                <input type="hidden" id="hidden_team2" value="<?php echo $data['team_2']; ?>" />
                                <input type="hidden" id="hidden_batteam" value="<?php echo $data['batteam']; ?>" />
                                <input type="hidden" id="hidden_ballteam" value="<?php echo $data['ballteam']; ?>" />
                                <input type="hidden" id="hidden_ballno" value="<?php echo $data['ballno']; ?>" />
                                <input type="hidden" id="hidden_strike" value="<?php echo $data['batsman_01']; ?>" />
                                <input type="hidden" id="hidden_nonstrike" value="<?php echo $data['batsman_02']; ?>" />
                                <input type="hidden" id="hidden_baller" value="6" />
<!--                                <input type="hidden" name="hidden_ballno" value="" />
                                <input type="hidden" name="hidden_ballno" value="" />-->
                                <div class="row">
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_0" type="button" class="btn btn-success m-r-5 m-b-5 runs">0</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_1" type="button" class="btn btn-success m-r-5 m-b-5 runs">1</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_2" type="button" class="btn btn-success m-r-5 m-b-5 runs">2</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_3" type="button" class="btn btn-success m-r-5 m-b-5 runs">3</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_4" type="button" class="btn btn-success m-r-5 m-b-5 runs">4</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="boundry_4" type="button" class="btn btn-warning m-r-5 m-b-5 runs">4</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_5" type="button" class="btn btn-success m-r-5 m-b-5 runs">5</button>
                                        </center>
                                    </div>
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="runs_6" type="button" class="btn btn-success m-r-5 m-b-5 runs">6</button>
                                    </div>   
                                    <div class="col-sm-1" style="width: 11.11%">
                                        <center>
                                            <button id="boundry_6" type="button" class="btn btn-warning m-r-5 m-b-5 runs">6</button>
                                        </center>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px">
                                    <div class="col-md-2">
                                        <div class="btn-group m-r-5 m-b-5"  style="width: 100%;margin-left: 24px;padding-right: 15px">
                                            <a href="javascript:;" data-toggle="dropdown" class="btn btn-danger dropdown-toggle" aria-expanded="false"  style="width: 100%">Change batsman <span class="caret"></span></a>
                                            <ul class="dropdown-menu" style="width: 100%">
                                                <li><a href="#modal-dialog-change-batsman-wicket" data-toggle="modal">Wicket</a></li>
                                                <li><a href="#modal-dialog-change-batsman-catch" data-toggle="modal">Catch</a></li>
                                                <li><a href="#modal-dialog-change-batsman-runout" data-toggle="modal">Run out</a></li>
                                                <!--<li><a href="#modal-dialog-change-batsman-injury" data-toggle="modal">Injured</a></li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="padding-left: 72px;padding-right: 45px">
                                        <a id="wide" href="javascript:;" class="btn btn-warning" style="width: 48%">Wide</a>
                                        <a id="noball" href="javascript:;" class="btn btn-warning" style="width: 48%">No ball</a>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="btn-group m-r-5 m-b-5"  style="width: 100%;margin-left: 13px;padding-right: 15px">
                                            <a id="startMatchBtn" href="javascript:;" class="btn btn-primary"   style="width: 100%; display: none">Start match</a>
                                            <a id="stopMatchBtn" href="javascript:;" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false"  style="width: 100%">Pause match <span class="caret"></span></a>
                                            <ul class="dropdown-menu" style="width: 100%">
                                                <li><a id="state_3" href="javascript:;">Due to rain</a></li>
                                                <li><a id="state_4" href="javascript:;">Tea Break</a></li>
                                                <li><a id="state_5" href="javascript:;">Lunch Break</a></li>
                                                <li><a id="state_6" href="javascript:;">Technical error</a></li>
                                                <li><a id="state_7" href="javascript:;">Other</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <center>
                                            <a id="power-play-btn" href="javascript:;" class="btn btn-info" style="width: 60%">Power play on</a>
                                        </center>
                                    </div>
                                    <div class="col-md-2">
                                        <center>
                                            <a href="javascript:;" data-toggle="dropdown" class="btn btn-inverse dropdown-toggle" aria-expanded="false"  style="width: 100%">Finish <span class="caret"></span></a>
                                            <ul class="dropdown-menu" style="width: 100%">
                                                <li><a id="state_8" href="javascript:;">Inning</a></li>
                                                <li><a id="state_9" href="javascript:;">Match</a></li>
                                            </ul>
                                        </center>
                                    </div>
                                </div>
                                <!--team 02 detail modal start-->
                                <div class="modal fade" id="modal-dialog-change-batsman-wicket" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Change batsman - Wicket</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form class="form-horizontal" action="javascript:;">
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">New batsman</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" style="width: 100%">
                                                                    <option>Select new batsman</option>
                                                                    <?php foreach ($batTeam as $batters) { ?>
                                                                        <option value="<?php echo $batters['idplayer']; ?>"><?php echo $batters['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group" style="margin-top: 10px">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <button id="cb_wicket" class="btn btn-inverse m-r-5 m-b-5"  style="width: 100%;height: 40px">Change batsman</button>
                                                            </div>    
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modal-dialog-change-batsman-injury" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Change batsman - Injured</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form class="form-horizontal" action="javascript:;">
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">Current batsman</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" style="width: 100%">
                                                                    <option>Select batsman</option>
                                                                    <?php
                                                                    foreach ($batTeam as $batters) {
                                                                        if ($batters['idplayer'] == $data['batsman_01'] || $batters['idplayer'] == $data['batsman_02']) {
                                                                            ?>
                                                                            <option value="<?php echo $batters['idplayer']; ?>"><?php echo $batters['name']; ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">New batsman</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" style="width: 100%">
                                                                    <option>Select new batsman</option>
                                                                    <?php foreach ($batTeam as $batters) { ?>
                                                                        <option value="<?php echo $batters['idplayer']; ?>"><?php echo $batters['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group" style="margin-top: 10px">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <button id="cb_injured" class="btn btn-inverse m-r-5 m-b-5"  style="width: 100%;height: 40px">Change batsman</button>
                                                            </div>    
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modal-dialog-change-batsman-catch" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Change batsman - Catch</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form class="form-horizontal" action="javascript:;">
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">Fielder</label>
                                                            <div class="col-md-8">
                                                                <select id="cb_catch_fielder" class="form-control" style="width: 100%">
                                                                    <option>Select the fielder</option>
                                                                    <?php foreach ($ballTeam as $ballers) { ?>
                                                                        <option value="<?php echo $ballers['idplayer']; ?>"><?php echo $ballers['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <!--                                                        <div class="form-group">
                                                                                                                    <div class="col-md-1"></div>
                                                                                                                    <label class="control-label col-md-2" style="padding-right: 0px"></label>
                                                                                                                    <div class="col-md-8">
                                                                                                                        <select class="form-control" style="width: 100%">
                                                                                                                            <option>Select batsman</option>
                                                                                                                            <option>attribute 01</option>
                                                                                                                            <option>attribute 01</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-1"></div>
                                                                                                                </div>-->
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">New batsman</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" style="width: 100%">
                                                                    <option>Select new batsman</option>
                                                                    <?php foreach ($batTeam as $batters) { ?>
                                                                        <option value="<?php echo $batters['idplayer']; ?>"><?php echo $batters['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group" style="margin-top: 10px">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <button id="cb_catch" class="btn btn-inverse m-r-5 m-b-5" style="width: 100%;height: 40px">Change batsman</button>
                                                            </div>    
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modal-dialog-change-batsman-runout" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Change batsman - Runout</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <form class="form-horizontal">

                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">Fielder</label>
                                                            <div class="col-md-8">
                                                                <select id="cb_runout_fielder" class="form-control" style="width: 100%">
                                                                    <option>Select the fielder</option>
                                                                    <?php foreach ($ballTeam as $ballers) { ?>
                                                                        <option value="<?php echo $ballers['idplayer']; ?>"><?php echo $ballers['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">Current batsman</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" style="width: 100%">
                                                                    <option>Select batsman</option>
                                                                    <?php
                                                                    foreach ($batTeam as $batters) {
                                                                        if ($batters['idplayer'] == $data['batsman_01'] || $batters['idplayer'] == $data['batsman_02']) {
                                                                            ?>
                                                                            <option value="<?php echo $batters['idplayer']; ?>"><?php echo $batters['name']; ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">New batsman</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" style="width: 100%">
                                                                    <option>Select new batsman</option>
                                                                    <?php foreach ($batTeam as $batters) { ?>
                                                                        <option value="<?php echo $batters['idplayer']; ?>"><?php echo $batters['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-1"></div>
                                                            <label class="control-label col-md-2" style="padding-right: 0px">Runs</label>
                                                            <div class="col-md-8">
                                                                <select id="runout_runs" class="form-control" style="width: 100%">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                        <div class="form-group" style="margin-top: 10px">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <input type="submit" class="btn btn-inverse m-r-5 m-b-5" value="Change batsman" style="width: 100%;height: 40px"/>
                                                            </div>    
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--team 02 detail modal finish-->
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
        <!--<script src="<?php // echo $assets['assets'];                                                                                                          ?>/plugins/gritter/js/jquery.gritter.js"></script>-->
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

                $('#power-play-btn').click(function () {
                    if ($(this).text() === 'Power play off') {
                        $(this).text('Power play on');
                    } else {
                        $(this).text('Power play off');
                    }
                });
                //normal runs start
<?php
for ($i1 = 0; $i1 < 7; $i1++) {
    ?>

                    $("#runs_<?php echo $i1; ?>").click(function () {
                        sendToDb(1, <?php echo $i1; ?>, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
    <?php
    if ($i1 == 1 || $i1 == 3 || $i1 == 5) {
        ?>
                            changeStrike();
        <?php
    }
    ?>
                    });
    <?php
}
?>
                //normal runs finish  
                $("#boundry_4").click(function () {
                    sendToDb(2, 4, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
                });

                $("#boundry_6").click(function () {
                    sendToDb(2, 6, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
                });

                $("#wide").click(function () {
                    sendToDb(3, 1, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
                });

                $("#noball").click(function () {
                    sendToDb(4, 1, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
                });

                $("#cb_wicket").click(function () {
                    sendToDb(5, 0, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
                });

                $("#cb_catch").click(function () {
                    sendToDb(6, 0, $("#hidden_baller").val(), $("#hidden_strike").val(), $("#cb_catch_fielder").val());
                });

                $("#cb_runout").click(function () {
                    sendToDb(7, $("#runout_runs").val(), $("#hidden_baller").val(), $("#hidden_strike").val(), $("#cb_runout_fielder").val());
                });

//                $("#cb_injured").click(function () {
//                    sendToDb(8, 0, $("#hidden_baller").val(), $("#hidden_strike").val(), 0);
//                });

                //state start
                $("#startMatchBtn").click(function () {
                    changeState(2);
                    $("#startMatchBtn").css('display', 'none');
                    $("#stopMatchBtn").css('display', 'block');
                });
<?php
for ($i1 = 3; $i1 < 8; $i1++) {
    ?>

                    $("#state_<?php echo $i1; ?>").click(function () {
                        changeState(<?php echo $i1; ?>);
                        $("#stopMatchBtn").css('display', 'none');
                        $("#startMatchBtn").css('display', 'block');
                    });
    <?php
}
?>
                $("#state_8").click(function () {
                    changeState(8);
                    sendToDb(0, 0, 0, 0, 0);
                });
                $("#state_9").click(function () {
                    changeState(9);
                    alert("Do you want to finish match ?");
                });
                //state finish  


            });


            function sendToDb(type, runs, baller, batsman, third) {
                jQuery.ajax({
                    type: "POST",
                    url: "match_idmatch/add",
                    data: {idmatch: $("#hidden_matchid").val(), idtype: type, runs: runs, idballer: baller, idbatsman: batsman, idthirdplayer: third},
                    success: function (data) {
                        if (data === 0) {
                            alert("1");
                        } else {
                            alert(data);
                            var nowBall = parseInt($("#hidden_ballno").val()) + 1;
                            $("#hidden_ballno").val(nowBall);
                            data = $.parseJSON(data);
                            $("#batting_runs").text(data.runs_1);
                            ("#batting_wickets$").text(data.outs_1);
                            if (data.overs_current_half === 0) {
                                changeStrike();
                            }
                        }
                    }
                });
            }
            //
            function changeState(state) {
                jQuery.ajax({
                    type: "POST",
                    url: "match/change_state",
                    data: {idmatch: $("#hidden_matchid").val(), state: state},
                    success: function (data) {
                        if (data === 0) {
                            alert("1");
                        } else {
                            alert("ok");
                        }
                    }
                });
            }

            function changeStrike() {
                var strike = $("#hidden_strike").val();
                var nonStrike = $("#hidden_nonstrike").val();

                $("#hidden_strike").val(nonStrike);
                $("#hidden_nonstrike").val(strike);

                if ($("#strike_star_1").text() === "*") {
                    $("#strike_star_1").text("");
                    $("#strike_star_2").text("*");
                } else {
                    $("#strike_star_1").text("*");
                    $("#strike_star_2").text("");
                }
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

</html>
<?php


