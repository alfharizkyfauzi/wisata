<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    public function getAllPosting($limit, $start)
    {
        return $this->db->get('posting', $limit, $start)->result_array();
    }

    public function getPostById($id)
    {
        return $this->db->get_where('posting', ['id' => $id])->row_array();
    }

    public function countAllPosting()
    {
        return $this->db->get('posting')->num_rows();
    }
}