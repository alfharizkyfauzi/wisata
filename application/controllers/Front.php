<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

    public function index()
    {
        $data['jumbotron'] = $this->db->get('jumbotron')->result_array();
        $data['about'] = $this->db->get('aboutus')->result_array();

        $this->load->model('Front_model', 'posting');

        // Pagination
        $config['base_url'] = 'http://localhost/wisata/front/index';
        $config['total_rows'] = $this->posting->countAllPosting();
        $config['per_page'] = 6;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example">
        <ul class="pagination  justify-content-center">';

        $config['full_tag_close'] = '</ul>
        </nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        //end pagination
        $data['start'] = $this->uri->segment(3);
        $data['posting'] = $this->posting->getAllPosting($config['per_page'], $data['start']);

        $this->load->view('front/header', $data);
        $this->load->view('front/jumbotron', $data);
        $this->load->view('front/index', $data);
        $this->load->view('front/footer', $data);
    }

    public function detail($id)
    {
        $this->load->model('Front_model', 'posting');
        $data['posting'] = $this->posting->getPostingById($id);
        $data['about'] = $this->db->get('aboutus')->result_array();


        $this->load->view('front/header', $data);
        $this->load->view('front/detail', $data);
        $this->load->view('front/footer', $data);
    }
}