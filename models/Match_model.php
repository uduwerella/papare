<?php

/* Pause Status
 * 1 = Initialized
 * 2 = Playing
 * 3 = Rain
 * 4 = Tea
 * 5 = Lunch
 * 6 = Technical
 * 7 = Other
 * 8 = Between Innings
 * 9 = Finised
 */

/* Elected
 * 1 = batting
 * 2 = balling
 */

class Match_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get match by idmatch
     */

    function get_match($idmatch) {
        return $this->db->get_where('matches', array('idmatch' => $idmatch))->row_array();
    }

    /*
     * Get all match
     */

    function get_all_match() {
        $this->db->order_by('idmatch', 'desc');
        return $this->db->get('matches')->result_array();
    }

    /*
     * function to add new match
     */

    function add_match($params) {
        $this->db->insert('matches', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update match
     */

    function update_match($idmatch, $params) {
        $this->db->where('idmatch', $idmatch);
        return $this->db->update('matches', $params);
    }

    /*
     * function to delete match
     */

    function delete_match($idmatch) {
        return $this->db->delete('matches', array('idmatch' => $idmatch));
    }

    /*
     * Get match by date
     */

    function get_match_by_date() {
        date_default_timezone_set('Asia/Kolkata');
        $today = date("Y-m-d");
        $startTime = $today . " 00:00:00";
        $endTime = $today . " 23:59:59";
        $query = "SELECT "
                . "matches.idmatch AS idmatch, "
                . "matches.idseries AS idseries, "
                . "matches.from_date AS from_date, "
                . "matches.to_date AS to_date, "
                . "matches.idlocation AS idlocation, "
                . "matches.team1 AS idteam1, "
                . "matches.team2 AS idteam2, "
                . "location.name AS location, "
                . "team1.name AS team1, "
                . "team2.name AS team2 "
                . "FROM matches "
                . "JOIN location ON matches.idlocation = location.idlocation "
                . "JOIN team AS team1 ON team1.idteam = matches.team1 "
                . "JOIN team AS team2 ON team2.idteam = matches.team2 "
                . "WHERE from_date >= '" . $startTime . "' AND from_date <= '" . $endTime . "' ";
        $query = $this->db->query($query);
        return $query->result_array();
    }

    /*
     * Get match all by id
     */

    function get_match_all_by_id($id) {
        $query = "SELECT "
                . "matches.idmatch AS idmatch, "
                . "matches.idseries AS idseries, "
                . "matches.from_date AS from_date, "
                . "matches.to_date AS to_date, "
                . "matches.idlocation AS idlocation, "
                . "matches.team1 AS idteam1, "
                . "matches.team2 AS idteam2, "
                . "location.name AS location, "
                . "team1.name AS team1, "
                . "team2.name AS team2 "
                . "FROM matches "
                . "JOIN location ON matches.idlocation = location.idlocation "
                . "JOIN team AS team1 ON team1.idteam = matches.team1 "
                . "JOIN team AS team2 ON team2.idteam = matches.team2 "
                . "WHERE matches.idmatch = " . $id;
        $query = $this->db->query($query);
        return $query->row_array();
    }

    function getInning($idMatch) {
        $inning = 1;
        $query = "SELECT ballno FROM match_" . $idMatch . " WHERE idtype = '0' ";
        $query = $this->db->query($query);
        if ($query->row_array()['ballno'] != "") {
            $inning = "2";
        }
        return $inning;
    }

    function getCurrentBattingBallingTeam($idMatch) {
        $data['batting_team'] = "";
        $data['ballting_team'] = "";
        $match = $this->get_match($idMatch);
        $team1 = $match['team1'];
        $team2 = $match['team2'];
        $toss = $match['toss'];
        $elected = $match['elected'];
        $inning = $this->getInning($idMatch);
        if ($toss == $team1) {
            if ($elected == "1") {
                if ($inning == "1") {
                    $data['batting_team'] = $team1;
                    $data['ballting_team'] = $team2;
                } else {
                    $data['batting_team'] = $team2;
                    $data['ballting_team'] = $team1;
                }
            } else {
                if ($inning == "1") {
                    $data['batting_team'] = $team2;
                    $data['ballting_team'] = $team1;
                } else {
                    $data['batting_team'] = $team1;
                    $data['ballting_team'] = $team2;
                }
            }
        } else {
            if ($elected == "1") {
                if ($inning == "1") {
                    $data['batting_team'] = $team2;
                    $data['ballting_team'] = $team1;
                } else {
                    $data['batting_team'] = $team1;
                    $data['ballting_team'] = $team2;
                }
            } else {
                if ($inning == "1") {
                    $data['batting_team'] = $team1;
                    $data['ballting_team'] = $team2;
                } else {
                    $data['batting_team'] = $team2;
                    $data['ballting_team'] = $team1;
                }
            }
        }
        return $data;
    }
    
    function getCurrentBatsmanPair($idMatch){
        $query="SELECT DISTINCT idbatsman FROM match_".$idMatch." LIMIT 2";
        $query = $this->db->query($query)->result_array();
        $data['nonstrike']=$query[1]['idbatsman'];
        $data['strike']=$query[0]['idbatsman'];
        return $data;
    }

    function get_match_by_date_1($date) {
        $startTime = $date . " 00:00:00";
        $endTime = $date . " 23:59:59";
        $query = "SELECT "
                . "matches.idmatch AS idmatch, "
                . "matches.idseries AS idseries, "
                . "matches.from_date AS from_date, "
                . "matches.to_date AS to_date, "
                . "matches.idlocation AS idlocation, "
                . "matches.team1 AS idteam1, "
                . "matches.team2 AS idteam2, "
                . "location.name AS location, "
                . "team1.name AS team1, "
                . "team2.name AS team2, "
                . "team1.short_code AS short_code1, "
                . "team2.short_code AS short_code2 "
                . "FROM matches "
                . "JOIN location ON matches.idlocation = location.idlocation "
                . "JOIN team AS team1 ON team1.idteam = matches.team1 "
                . "JOIN team AS team2 ON team2.idteam = matches.team2 "
                . "WHERE from_date >= '" . $startTime . "' AND from_date <= '" . $endTime . "' ";
        $query = $this->db->query($query);
        return $query->result_array();
    }
}
