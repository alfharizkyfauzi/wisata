<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_model extends CI_Model
{
    public function getAllPosting($limit, $start)
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('posting', $limit, $start)->result_array();
    }

    public function countAllPosting()
    {
        return $this->db->get('posting')->num_rows();
    }

    public function getPostingById($id)
    {
        return $this->db->get_where('posting', ['id' => $id])->row_array();
    }
}