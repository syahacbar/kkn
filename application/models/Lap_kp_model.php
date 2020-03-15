<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lap_kp_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get lap_kp by id_laporan
     */
    function get_lap_kp($id_laporan)
    {
        return $this->db->get_where('lap_kp',array('id_laporan'=>$id_laporan))->row_array();
    }

    function get_lap_kp_by_nim($nim)
    {
        return $this->db->get_where('lap_kp',array('nim'=>$nim))->row_array();
    }
        
    /*
     * Get all lap_kp
     */
    function get_all_lap_kp()
    {
        $this->db->order_by('id_laporan', 'desc');
        return $this->db->get('lap_kp')->result_array();
    }
        
    /*
     * function to add new lap_kp
     */
    function add_lap_kp($params)
    {
        $this->db->insert('lap_kp',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update lap_kp
     */
    function update_lap_kp($id_laporan,$params)
    {
        $this->db->where('id_laporan',$id_laporan);
        return $this->db->update('lap_kp',$params);
    }
    
    /*
     * function to delete lap_kp
     */
    function delete_lap_kp($id_laporan)
    {
        return $this->db->delete('lap_kp',array('id_laporan'=>$id_laporan));
    }
}