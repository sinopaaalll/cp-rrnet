<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonfigurasiController extends CI_Controller
{
    public $title = 'Konfigurasi';
    protected $id = 1;

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'Nama Website', 'required');
        $this->form_validation->set_rules('copyright', 'Copyright', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/konfigurasi/edit', [
                'konfigurasi' => $this->ModelBase->find('konfigurasi', $this->id),
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
            'upload_path' => 'assets/uploads/konfigurasi/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        $i = $this->input;
        $old_icon = $i->post('old_icon');

        if (empty($_FILES['icon']['name'])) {
            $icon = $old_icon;
        } else {

            $old_photo_path = 'assets/uploads/konfigurasi/' . $old_icon;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('icon')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/konfigurasi');
            } else {
                $upload_data['icon'] = $this->upload->data();
                $icon = $upload_data['icon']['file_name'];
            }
        }

        $data = [
            'name' => htmlspecialchars($i->post('name')),
            'copyright' => htmlspecialchars($i->post('name')),
            'icon' => $icon,
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->update('konfigurasi', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/konfigurasi');
    }
}
