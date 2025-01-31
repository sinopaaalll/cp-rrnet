<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class PaketController extends CI_Controller
{
    public $title = 'Paket';

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->load->view('component/admin/header', ['title' => $this->title]);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/paket/index', [
            'pakets' => $this->ModelBase->all('paket'),
            'title' => $this->title,
        ]);

        $this->load->view('component/admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/paket/add', [
                'title' => $this->title
            ]);
            $this->load->view('component/admin/footer');
        } else {
            $this->_store();
        }
    }

    private function _store()
    {

        $i = $this->input;

        $data = [
            'name' => htmlspecialchars($i->post('name')),
            'desc' => htmlspecialchars($i->post('desc')),
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->create('paket', $data);

        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('admin/paket');
    }

    public function show($id)
    {
        $this->load->view('component/admin/header', ['title' => $this->title]);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/paket/view', [
            'paket' => $this->ModelBase->findpaket($id),
            'title' => $this->title
        ]);
        $this->load->view('component/admin/footer');
    }

    public function edit($id)
    {
        $paket = $this->ModelBase->find('paket', $id);

        $this->form_validation->set_rules('name', 'Nama Paket', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/paket/edit', [
                'paket' => $paket,
                'title' => $this->title
            ]);
            $this->load->view('component/admin/footer');
        } else {
            $this->_update($id);
        }
    }

    private function _update($id)
    {
        $i = $this->input;

        $data = [
            'name' => htmlspecialchars($i->post('name')),
            'desc' => htmlspecialchars($i->post('desc')),
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->update('paket', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/paket');
    }

    public function destroy($id)
    {
        $this->ModelBase->delete('paket', $id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/paket');
    }
}
