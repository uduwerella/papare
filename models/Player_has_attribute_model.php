<?php

/*
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Player_has_attribute_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get player_has_attribute by idplayer_has_attribute
     */

    function get_player_has_attribute($idplayer_has_attribute) {
        return $this->db->get_where('player_has_attribute', array('idplayer_has_attribute' => $idplayer_has_attribute))->row_array();
    }

    /*
     * Get all player_has_attribute
     */

    function get_all_player_has_attribute() {
        $this->db->order_by('idplayer_has_attribute', 'desc');
        return $this->db->get('player_has_attribute')->result_array();
    }

    /*
     * function to add new player_has_attribute
     */

    function add_player_has_attribute($params) {
        $this->db->insert('player_has_attribute', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update player_has_attribute
     */

    function update_player_has_attribute($idplayer_has_attribute, $params) {
        $this->db->where('idplayer_has_attribute', $idplayer_has_attribute);
        return $this->db->update('player_has_attribute', $params);
    }

    /*
     * function to delete player_has_attribute
     */

    function delete_player_has_attribute($idplayer_has_attribute) {
        return $this->db->delete('player_has_attribute', array('idplayer_has_attribute' => $idplayer_has_attribute));
    }

    function get_player_has_attribute_by_addtri_id($id) {
        $query = "SELECT "
                . "player_has_attribute.idplayer_has_attribute AS idplayer_has_attribute, "
                . "player_has_attribute.idplayer AS idplayer, "
                . "player_has_attribute.idattribute AS idattribute, "
                . "player_has_attribute.idmatch AS idmatch, "
                . "player_has_attribute.level AS level, "
                . "player.name AS player, "
                . "player.current_team AS player_idteam, "
                . "team.name AS team, "
                . "matches.from_date AS match_date,"
                . "attribute.name AS attribute "
                . "FROM player_has_attribute "
                . "JOIN player ON player_has_attribute.idplayer = player.idplayer "
                . "JOIN team ON player.current_team = team.idteam "
                . "JOIN matches ON player_has_attribute.idmatch = matches.idmatch "
                . "JOIN attribute ON player_has_attribute.idattribute = attribute.idattribute "
                . "WHERE player_has_attribute.idattribute = '" . $id . "' ";

        $query = $this->db->query($query);
        return $query->result_array();
    }

}
