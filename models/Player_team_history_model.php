<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Player_team_history_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get player_team_history by idplayer_team_history
     */
    function get_player_team_history($idplayer_team_history)
    {
        return $this->db->get_where('player_team_history',array('idplayer_team_history'=>$idplayer_team_history))->row_array();
    }
        
    /*
     * Get all player_team_history
     */
    function get_all_player_team_history()
    {
        $this->db->order_by('idplayer_team_history', 'desc');
        return $this->db->get('player_team_history')->result_array();
    }
        
    /*
     * function to add new player_team_history
     */
    function add_player_team_history($params)
    {
        $this->db->insert('player_team_history',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update player_team_history
     */
    function update_player_team_history($idplayer_team_history,$params)
    {
        $this->db->where('idplayer_team_history',$idplayer_team_history);
        return $this->db->update('player_team_history',$params);
    }
    
    /*
     * function to delete player_team_history
     */
    function delete_player_team_history($idplayer_team_history)
    {
        return $this->db->delete('player_team_history',array('idplayer_team_history'=>$idplayer_team_history));
    }
}
