<?php

/*
 * 0 = inning break
 * 1 = normal with runs
 * 2 = boundry
 * 3 = wide
 * 4 = noball
 * 5 = wicket
 * 6 = catch
 * 7 = runout
 * 8 = injured
 */

class Match_idmatch_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get match_idmatch by ballno
     */

    function get_match_idmatch($ballno) {
        return $this->db->get_where('match_idmatch', array('ballno' => $ballno))->row_array();
    }

    /*
     * Get all match_idmatch
     */

    function get_all_match_idmatch() {
        $this->db->order_by('ballno', 'desc');
        return $this->db->get('match_idmatch')->result_array();
    }

    /*
     * function to add new match_idmatch
     */

    function add_match_idmatch($idMatch, $params) {
        $this->db->insert('match_' . $idMatch, $params);
        return $this->db->insert_id();
    }

    /*
     * function to update match_idmatch
     */

    function update_match_idmatch($ballno, $params) {
        $this->db->where('ballno', $ballno);
        return $this->db->update('match_idmatch', $params);
    }

    /*
     * function to delete match_idmatch
     */

    function delete_match_idmatch($ballno) {
        return $this->db->delete('match_idmatch', array('ballno' => $ballno));
    }

    /*
     * function to create match_idmatch
     */

    function create_match_idmatch($idMatch) {
        $query = "CREATE TABLE match_" . $idMatch . " (ballno INT(4) AUTO_INCREMENT PRIMARY KEY, idtype INT(1) NOT NULL,runs INT(1) NOT NULL,idballer INT(1) NOT NULL,idbatsman INT(1) NOT NULL,idthirdplayer INT(1) NOT NULL)";
        $query = $this->db->query($query);
    }

    function get_last_ball_number($idMatch) {
        $query = "SELECT MAX(ballno) AS ballno FROM match_" . $idMatch . " ";
        $query = $this->db->query($query);
        return $query->row_array();
    }

    function each_ball_calculation($idMatch) {
        // batsman total wickets overs balls 4s 6s
        // wides noballs rate remaining batting-team 
        // other-team toss-election inning state
        // *******************************************
        //variables start

        $data['team_1'] = ""; // //
        $data['team_2'] = ""; // //
        $data['toss_team'] = ""; // //
        $data['other_team'] = $data['team_1']; // //        
        $data['elected'] = ""; // //
        $data['status'] = ""; // //
        $data['match_overs'] = ""; // //
        $data['inning'] = "1"; // //
        $data['inningBallNo'] = "5000"; // //
        $data['balls_1'] = "0"; //
        $data['balls_2'] = "0"; //
        $data['wide_1'] = "0"; //
        $data['wide_2'] = "0"; //
        $data['noball_1'] = "0"; //
        $data['noball_2'] = "0"; //
        $data['runs_1'] = "0"; //
        $data['runs_2'] = "0"; //
        $data['wickets_1'] = "0"; //
        $data['wickets_2'] = "0"; //
        $data['catch_1'] = "0"; //
        $data['catch_2'] = "0"; //
        $data['runout_1'] = "0"; //
        $data['runout_2'] = "0"; //
        $data['outs_1'] = "0"; //
        $data['outs_2'] = "0"; //
        $data['six_1'] = "0"; //
        $data['six_2'] = "0"; //
        $data['four_1'] = "0"; //
        $data['four_2'] = "0"; //
        $data['overs_current'] = "0"; // //
        $data['current_batting_team'] = ""; // //
        $data['current_balling_team'] = ""; // //
        $data['last_ball_batsman'] = ""; // //
        $data['last_ball_baller'] = ""; // //
        $data['team_1_performance'] = "";
        $data['team_2_performance'] = "";
        //variable ends
        $query = "SELECT ballno FROM match_" . $idMatch . " WHERE idtype = '0' ";
        $query = $this->db->query($query);
        if ($query->row_array()['ballno'] != "") {
            $data['inning'] = "2";
            $data['inningBallNo'] = $query->row_array()['ballno'];
        }
        //
        $query = "SELECT * FROM matches WHERE idmatch = '" . $idMatch . "' ";
        $query = $this->db->query($query);
        $data['team_1'] = $query->row_array()['team1'];
        $data['team_2'] = $query->row_array()['team2'];
        $data['toss_team'] = $query->row_array()['toss'];
        $data['elected'] = $query->row_array()['elected'];
        $data['status'] = $query->row_array()['status'];
        $data['match_overs'] = $query->row_array()['overs'];
        //
        $query = "SELECT * FROM match_" . $idMatch . " ORDER BY ballno DESC LIMIT 1 ";
        $query = $this->db->query($query);
        $data['last_ball_batsman'] = $query->row_array()['idbatsman'];
        $data['last_ball_baller'] = $query->row_array()['idballer'];
        //
        if ($data['toss_team'] == $data['team_1']) {
            $data['other_team'] = $data['team_2'];
        }
        //
        $data['team_1_performance'] = $this->getTeamPerformance($idMatch, $data['team_1']);
        $data['team_2_performance'] = $this->getTeamPerformance($idMatch, $data['team_2']);
        //
        if ($data['inning'] == "1") {
            $data_1 = $this->getInning_1($idMatch, $data['inningBallNo'], $data['elected'], $data['toss_team'], $data['other_team']);
            $data['balls_1'] = $data_1['balls_1'];
            $data['wide_1'] = $data_1['wide_1'];
            $data['noball_1'] = $data_1['noball_1'];
            $data['runs_1'] = $data_1['runs_1'];
            $data['wickets_1'] = $data_1['wickets_1'];
            $data['catch_1'] = $data_1['catch_1'];
            $data['runout_1'] = $data_1['runout_1'];
            $data['outs_1'] = $data_1['outs_1'];
            $data['six_1'] = $data_1['six_1'];
            $data['four_1'] = $data_1['four_1'];
            //
            $data['overs_current'] = $data_1['overs_current'];
            $data['overs_current_full'] = $data_1['overs_current_full'];
            $data['overs_current_half'] = $data_1['overs_current_half'];
            $data['current_batting_team'] = $data_1['current_batting'];
            $data['current_balling_team'] = $data_1['current_balling'];
        } else {
            $data_1 = $this->getInning_1($idMatch, $data['inningBallNo'], $data['elected'], $data['toss_team'], $data['other_team']);
            $data['balls_1'] = $data_1['balls_1'];
            $data['wide_1'] = $data_1['wide_1'];
            $data['noball_1'] = $data_1['noball_1'];
            $data['runs_1'] = $data_1['runs_1'];
            $data['wickets_1'] = $data_1['wickets_1'];
            $data['catch_1'] = $data_1['catch_1'];
            $data['runout_1'] = $data_1['runout_1'];
            $data['outs_1'] = $data_1['outs_1'];
            $data['six_1'] = $data_1['six_1'];
            $data['four_1'] = $data_1['four_1'];
            //
            $data_2 = $this->getInning_2($idMatch, $data['inningBallNo'], $data['elected'], $data['toss_team'], $data['other_team']);
            $data['balls_2'] = $data_2['balls_2'];
            $data['wide_2'] = $data_2['wide_2'];
            $data['noball_2'] = $data_2['noball_2'];
            $data['runs_2'] = $data_2['runs_2'];
            $data['wickets_2'] = $data_2['wickets_2'];
            $data['catch_2'] = $data_2['catch_2'];
            $data['runout_2'] = $data_2['runout_2'];
            $data['outs_2'] = $data_2['outs_2'];
            $data['six_2'] = $data_2['six_2'];
            $data['four_2'] = $data_2['four_2'];
            //
            $data['overs_current'] = $data_2['overs_current'];
            $data['overs_current_full'] = $data_2['overs_current_full'];
            $data['overs_current_half'] = $data_2['overs_current_half'];
            $data['current_batting_team'] = $data_2['current_batting'];
            $data['current_balling_team'] = $data_2['current_balling'];
        }
        return $data;
    }

    function getInning_1($idMatch, $inningBallNo, $elected, $toss_team, $other_team) {
        $data['current_batting'] = "";
        $data['current_balling'] = "";
        if ($elected == "1") {
            $data['current_batting'] = $toss_team;
            $data['current_balling'] = $other_team;
        } else {
            $data['current_balling'] = $toss_team;
            $data['current_batting'] = $other_team;
        }
        //
        //total, balls
        $query = "SELECT SUM(runs) AS total, COUNT(*) AS balls  FROM match_" . $idMatch . " WHERE ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['runs_1'] = $query->row_array()['total'];
        $data['balls_1'] = $query->row_array()['balls'];
        //wide
        $query = "SELECT COUNT(*) AS wide FROM match_" . $idMatch . " WHERE idtype = 3 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['wide_1'] = $query->row_array()['wide'];
        //noball
        $query = "SELECT COUNT(*) AS noball FROM match_" . $idMatch . " WHERE idtype = 4 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['noball_1'] = $query->row_array()['noball'];
        //wicket
        $query = "SELECT COUNT(*) AS wicket FROM match_" . $idMatch . " WHERE idtype = 5 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['wickets_1'] = $query->row_array()['wicket'];
        //catch
        $query = "SELECT COUNT(*) AS catch FROM match_" . $idMatch . " WHERE idtype = 6 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['catch_1'] = $query->row_array()['catch'];
        //runout
        $query = "SELECT COUNT(*) AS runout FROM match_" . $idMatch . " WHERE idtype = 7 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['runout_1'] = $query->row_array()['runout'];
        //outs
        $data['outs_1'] = intval($data['wickets_1']) + intval($data['catch_1']) + intval($data['runout_1']);
        //six
        $query = "SELECT COUNT(*) AS sixes FROM match_" . $idMatch . " WHERE idtype = 2 AND runs = 6 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['six_1'] = $query->row_array()['sixes'];
        //four
        $query = "SELECT COUNT(*) AS fours FROM match_" . $idMatch . " WHERE idtype = 2 AND runs = 4 AND ballno > 0 AND ballno < " . $inningBallNo . " ";
        $query = $this->db->query($query);
        $data['four_1'] = $query->row_array()['fours'];
        //
        //
        $temp_1 = intval($data['balls_1']) - intval($data['wide_1']) - intval($data['noball_1']);
        $data['overs_current'] = intval(($temp_1 / 6)) . "." . ($temp_1 % 6);
        $data['overs_current_full'] = intval(($temp_1 / 6));
        $data['overs_current_half'] = ($temp_1 % 6);
        //
        return $data;
    }

    function getInning_2($idMatch, $inningBallNo, $elected, $toss_team, $other_team) {
        $data['current_batting'] = "";
        $data['current_balling'] = "";
        if ($elected == "1") {
            $data['current_balling'] = $toss_team;
            $data['current_batting'] = $other_team;
        } else {
            $data['current_batting'] = $toss_team;
            $data['current_balling'] = $other_team;
        }
        //
        //total
        $query = "SELECT SUM(runs) AS total, COUNT(*) AS balls FROM match_" . $idMatch . " WHERE ballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['runs_2'] = $query->row_array()['total'];
        $data['balls_2'] = $query->row_array()['balls'];
        //wide
        $query = "SELECT COUNT(*) AS wide FROM match_" . $idMatch . " WHERE idtype = 3 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['wide_2'] = $query->row_array()['wide'];
        //noball
        $query = "SELECT COUNT(*) AS noball FROM match_" . $idMatch . " WHERE idtype = 4 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['noball_2'] = $query->row_array()['noball'];
        //wicket
        $query = "SELECT COUNT(*) AS wicket FROM match_" . $idMatch . " WHERE idtype = 5 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['wickets_2'] = $query->row_array()['wicket'];
        //catch
        $query = "SELECT COUNT(*) AS catch FROM match_" . $idMatch . " WHERE idtype = 6 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['catch_2'] = $query->row_array()['catch'];
        //runout
        $query = "SELECT COUNT(*) AS runout FROM match_" . $idMatch . " WHERE idtype = 7 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['runout_2'] = $query->row_array()['runout'];
        //outs
        $data['outs_2'] = intval($data['wickets_2']) + intval($data['catch_2']) + intval($data['runout_2']);
        //six
        $query = "SELECT COUNT(*) AS sixes FROM match_" . $idMatch . " WHERE idtype = 2 AND runs = 6 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['six_2'] = $query->row_array()['sixes'];
        //four
        $query = "SELECT COUNT(*) AS fours FROM match_" . $idMatch . " WHERE idtype = 2 AND runs = 4 ANDballno > $inningBallNo ";
        $query = $this->db->query($query);
        $data['four_2'] = $query->row_array()['fours'];
        //
        //
        $temp_2 = intval($data['balls_2']) - intval($data['wide_2']) - intval($data['noball_2']);
        $data['overs_current'] = intval(($temp_2 / 6)) . "." . ($temp_2 % 6);
        $data['overs_current_full'] = intval(($temp_2 / 6));
        $data['overs_current_half'] = ($temp_2 % 6);
        //
        return $data;
    }

    function getTeamPerformance($idMatch, $idTeam) {
        $query = "SELECT idplayer FROM match_team_has_players WHERE idmatch='" . $idMatch . "' AND idteam='" . $idTeam . "' ";
        $query = $this->db->query($query);
        $query = $query->result_array();
        $data;
        foreach ($query as $val) {
            $id = $val['idplayer'];
            $query1 = "SELECT SUM(runs) AS total FROM match_" . $idMatch . " WHERE (idtype='1' OR idtype='2') AND idbatsman='" . $id . "' ";
            $total = $this->db->query($query1)->row_array()['total'];
            $data[$id]['runs'] = $total == "" ? "0" : $total;
            $query1 = "SELECT COUNT(*) AS wickets FROM match_" . $idMatch . " WHERE (idtype='5' OR idtype='6' OR idtype='7') AND idballer='" . $id . "' ";
            $data[$id]['wickets'] = $this->db->query($query1)->row_array()['wickets'];
        }
        return $data;
    }

}
