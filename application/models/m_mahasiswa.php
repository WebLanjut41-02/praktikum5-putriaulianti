<?php
class m_mahasiswa extends CI_Model{
   
    //ambil data mahasiswa dari database
    function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('tb_prak5', $limit, $start);
        return $query;
    }
}