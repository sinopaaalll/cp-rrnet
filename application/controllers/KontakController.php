<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KontakController extends CI_Controller
{
    public $title = 'Kontak';
    protected $id = 1;

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->form_validation->set_rules('address', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/kontak/edit', [
                'kontak' => $this->ModelBase->find('kontak', $this->id),
                'title' => $this->title
            ]);
            $this->load->view('component/admin/footer');
        } else {
            $this->_update($this->id);
        }
    }

    private function _update($id)
    {
        $i = $this->input;
        $data = [
            'address' => htmlspecialchars($i->post('address')),
            'telp' => htmlspecialchars($i->post('telp')),
            'email' => htmlspecialchars($i->post('email')),
        ];

        $this->ModelBase->update('kontak', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/kontak');
    }
}
