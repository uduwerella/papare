<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Series_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get series by idseries
     */
    function get_series($idseries)
    {
        return $this->db->get_where('series',array('idseries'=>$idseries))->row_array();
    }
        
    /*
     * Get all series
     */
    function get_all_series()
    {
        $this->db->order_by('idseries', 'desc');
        return $this->db->get('series')->result_array();
    }
        
    /*
     * function to add new series
     */
    function add_series($params)
    {
        $this->db->insert('series',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update series
     */
    function update_series($idseries,$params)
    {
        $this->db->where('idseries',$idseries);
        return $this->db->update('series',$params);
    }
    
    /*
     * function to delete series
     */
    function delete_series($idseries)
    {
        return $this->db->delete('series',array('idseries'=>$idseries));
    }
}
