<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Player_type_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get player_type by idtype
     */
    function get_player_type($idtype)
    {
        return $this->db->get_where('player_type',array('idtype'=>$idtype))->row_array();
    }
        
    /*
     * Get all player_type
     */
    function get_all_player_type()
    {
        $this->db->order_by('idtype', 'desc');
        return $this->db->get('player_type')->result_array();
    }
        
    /*
     * function to add new player_type
     */
    function add_player_type($params)
    {
        $this->db->insert('player_type',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update player_type
     */
    function update_player_type($idtype,$params)
    {
        $this->db->where('idtype',$idtype);
        return $this->db->update('player_type',$params);
    }
    
    /*
     * function to delete player_type
     */
    function delete_player_type($idtype)
    {
        return $this->db->delete('player_type',array('idtype'=>$idtype));
    }
}
