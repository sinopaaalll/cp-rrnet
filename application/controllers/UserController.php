<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public $title = 'User';
    protected $id = 1;

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[pass_conf]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('pass_conf', 'Password Confirm', 'trim|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/user/edit', [
                'user' => $this->ModelBase->find('user', $this->id),
                'layanan' => $this->ModelBase->all('layanan'),
                'title' => $this->title
            ]);
            $this->load->view('component/admin/footer');
        } else {
            $this->_update($this->id);
        }
    }

    private function _update($id)
    {
        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/user/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        $i = $this->input;
        $old_logo = $i->post('old_logo');

        if (empty($_FILES['logo']['name'])) {
            $logo = $old_logo;
        } else {

            $old_photo_path = 'assets/uploads/user/' . $old_logo;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('logo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/user');
            } else {
                $upload_data['logo'] = $this->upload->data();
                $logo = $upload_data['logo']['file_name'];
            }
        }

        $data = [
            'desc' => htmlspecialchars($i->post('desc')),
            'logo' => $logo,
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->update('user', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/user');
    }
}
