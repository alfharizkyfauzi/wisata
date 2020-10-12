<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Post Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Post_model', 'posting');

        // Pagination
        $config['base_url'] = 'http://localhost/wisata/posting/index';
        $config['total_rows'] = $this->posting->countAllPosting();
        $config['per_page'] = 5;

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
        $data['posting'] =  $this->posting->getAllPosting($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('post/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('title', 'Title', 'required');

            $config['upload_path']          = 'assets/img/posting/post/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; // size file maksimum 2mb
            $config['encrypt_name']         = true;

            $this->load->library('upload', $config);

            //Image 1
            if (!empty($_FILES['image1']['name'])) {
                $this->upload->do_upload('image1');
                $data1 = $this->upload->data();
                $image1 = $data1['file_name'];
            }

            //Image 2
            if (!empty($_FILES['image2']['name'])) {
                $this->upload->do_upload('image2');
                $data2 = $this->upload->data();
                $image2 = $data2['file_name'];
            }

            //Image 3
            if (!empty($_FILES['image3']['name'])) {
                $this->upload->do_upload('image3');
                $data3 = $this->upload->data();
                $image3 = $data3['file_name'];
            }

            if ($this->form_validation->run()) {
                $title = $this->input->post('title', true);
                $sub_title = $this->input->post('sub_title', true);
                $address = $this->input->post('address', true);
                $description = $this->input->post('description', true);
                $data = [
                    'title' => $title,
                    'sub_title' => $sub_title,
                    'description' => $description,
                    'image1' => $image1,
                    'image2' => $image2,
                    'image3' => $image3,
                    'address' => $address,
                    'date_created' => time()
                ];
                $insert = $this->db->insert('posting', $data);
                if ($insert) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your Post has been Added.</div>');
                    redirect('posting');
                }
            } else {
                $this->index();
            }
        } else {
            $this->index();
        }
    }

    public function update($id)
    {
        $data['title'] = 'Post Update';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['postings'] = $this->db->get_where('posting', ['id' => $id])->row_array();
        $data['posting'] = $this->db->get('posting')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('sub_title', 'Sub Title', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('post/update', $data);
            $this->load->view('templates/footer');
        } else {
            $title = $this->input->post('title');
            $sub_title = $this->input->post('sub_title');
            $address = $this->input->post('address');
            $description = $this->input->post('description');
            $this->form_validation->set_rules('title', 'Title', 'required');

            //cek jika ada gambar 1
            $upload_image1 = $_FILES['image1']['name'];

            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/post/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image1')) {
                    $old_image1 = $data['postings']['image1'];
                    if ($old_image1 != 'default1.jpg') {
                        unlink(FCPATH . 'assets/img/posting/post/' . $old_image1);
                    }

                    $new_image1 = $this->upload->data('file_name');
                    $this->db->set('image1', $new_image1);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //cek jika ada gambar 2
            $upload_image2 = $_FILES['image2']['name'];

            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/post/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image2')) {
                    $old_image2 = $data['postings']['image2'];
                    if ($old_image2 != 'default1.jpg') {
                        unlink(FCPATH . 'assets/img/posting/post/' . $old_image2);
                    }

                    $new_image2 = $this->upload->data('file_name');
                    $this->db->set('image2', $new_image2);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //cek jika ada gambar 3
            $upload_image3 = $_FILES['image3']['name'];

            if ($upload_image3) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/post/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image3')) {
                    $old_image3 = $data['postings']['image3'];
                    if ($old_image3 != 'default1.jpg') {
                        unlink(FCPATH . 'assets/img/posting/post/' . $old_image3);
                    }

                    $new_image3 = $this->upload->data('file_name');
                    $this->db->set('image3', $new_image3);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('title', $title);
            $this->db->set('sub_title', $sub_title);
            $this->db->set('address', $address);
            $this->db->set('description', $description);
            $this->db->where('id', $id);
            $update = $this->db->update('posting');
            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your Post has been Changed.</div>');
                redirect('posting');
            }
        }
    }

    public function deletePost($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posting');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your Post has been Deleted.</div>');
        redirect('posting');
    }

    public function about()
    {
        $data['title'] = 'About Us';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['about'] = $this->db->get('aboutus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('post/about', $data);
        $this->load->view('templates/footer');
    }

    public function editAbout($id)
    {
        $data['title'] = 'Edit About Us';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['abouts'] = $this->db->get_where('aboutus', ['id' => $id])->row_array();
        $data['about'] = $this->db->get('aboutus')->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('subtitle', 'Sub Title', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('post/update-about', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $subtitle = $this->input->post('subtitle');
            $address = $this->input->post('address');
            $description = $this->input->post('description');
            $facebook = $this->input->post('facebook');
            $twitter = $this->input->post('twitter');
            $linkedin = $this->input->post('linkedin');
            $instagram = $this->input->post('instagram');
            $youtube = $this->input->post('youtube');
            $github = $this->input->post('github');

            //cek jika ada gambar
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/about/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['abouts']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/posting/about/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('name', $name);
            $this->db->set('subtitle', $subtitle);
            $this->db->set('address', $address);
            $this->db->set('description', $description);
            $this->db->set('facebook', $facebook);
            $this->db->set('twitter', $twitter);
            $this->db->set('linkedin', $linkedin);
            $this->db->set('instagram', $instagram);
            $this->db->set('youtube', $youtube);
            $this->db->set('github', $github);
            $this->db->set('date_created', time());
            $this->db->where('id', $id);
            $update = $this->db->update('aboutus');
            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your About Us has been Changed.</div>');
                redirect('posting/about');
            }
        }
    }

    public function jumbotron()
    {
        $data['title'] = 'Jumbotron';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['jumbotron'] = $this->db->get('jumbotron')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('post/jumbotron', $data);
        $this->load->view('templates/footer');
    }

    public function editJumbotron($id)
    {
        $data['title'] = 'Edit Jumbotron';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['jumbotrons'] = $this->db->get_where('jumbotron', ['id' => $id])->row_array();
        $data['jumbotron'] = $this->db->get('jumbotron')->row_array();

        $this->form_validation->set_rules('title1', 'Title 1', 'required');
        $this->form_validation->set_rules('title2', 'Title 2', 'required');
        $this->form_validation->set_rules('title3', 'Title 3', 'required');
        $this->form_validation->set_rules('description1', 'Description 1', 'required');
        $this->form_validation->set_rules('description2', 'Description 2', 'required');
        $this->form_validation->set_rules('description3', 'Description 3', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('post/update-jumbotron', $data);
            $this->load->view('templates/footer');
        } else {
            $title1 = $this->input->post('title1');
            $title2 = $this->input->post('title2');
            $title3 = $this->input->post('title3');
            $description1 = $this->input->post('description1');
            $description2 = $this->input->post('description2');
            $description3 = $this->input->post('description3');

            //cek jika ada gambar 1
            $upload_image1 = $_FILES['image1']['name'];

            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/jumbotron/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image1')) {
                    $old_image1 = $data['postings']['image1'];
                    if ($old_image1 != 'default1.jpg') {
                        unlink(FCPATH . 'assets/img/posting/jumbotron/' . $old_image1);
                    }

                    $new_image1 = $this->upload->data('file_name');
                    $this->db->set('image1', $new_image1);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //cek jika ada gambar 2
            $upload_image2 = $_FILES['image2']['name'];

            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/jumbotron/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image2')) {
                    $old_image2 = $data['postings']['image2'];
                    if ($old_image2 != 'default1.jpg') {
                        unlink(FCPATH . 'assets/img/posting/jumbotron/' . $old_image2);
                    }

                    $new_image2 = $this->upload->data('file_name');
                    $this->db->set('image2', $new_image2);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //cek jika ada gambar 3
            $upload_image3 = $_FILES['image3']['name'];

            if ($upload_image3) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['overwrite']     = true;
                $config['upload_path'] = './assets/img/posting/jumbotron/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image3')) {
                    $old_image3 = $data['postings']['image3'];
                    if ($old_image3 != 'default1.jpg') {
                        unlink(FCPATH . 'assets/img/posting/jumbotron/' . $old_image3);
                    }

                    $new_image3 = $this->upload->data('file_name');
                    $this->db->set('image3', $new_image3);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('title1', $title1);
            $this->db->set('title2', $title2);
            $this->db->set('title3', $title3);
            $this->db->set('description1', $description1);
            $this->db->set('description2', $description2);
            $this->db->set('description3', $description3);
            $this->db->where('id', $id);
            $update = $this->db->update('jumbotron');
            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your About Us has been Changed.</div>');
                redirect('posting/jumbotron');
            }
        }
    }
}