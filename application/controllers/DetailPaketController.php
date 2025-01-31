<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class DetailPaketController extends CI_Controller
{
    public $title = 'Detail Paket';

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->load->view('component/admin/header', ['title' => $this->title]);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/detail-paket/index', [
            'detail_pakets' => $this->ModelBase->all_detail_paket(),
            'title' => $this->title,
        ]);

        $this->load->view('component/admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('paket', 'Paket', 'required');
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('sub_title', 'Sub Judul', 'required');
        $this->form_validation->set_rules('price', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/detail-paket/add', [
                'title' => $this->title,
                'paket' => $this->ModelBase->all('paket'),

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
            'paket_id' => ($i->post('paket')),
            'title' => htmlspecialchars($i->post('title')),
            'sub_title' => htmlspecialchars($i->post('sub_title')),
            'price' => htmlspecialchars($i->post('price')),
            'detail_desc' => htmlspecialchars($i->post('detail_desc')),
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->create('detail_paket', $data);

        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('admin/detail_paket');
    }

    public function edit($id)
    {
        $detail_paket = $this->ModelBase->find('detail_paket', $id);

        $this->form_validation->set_rules('paket', 'Paket', 'required');
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('sub_title', 'Sub Judul', 'required');
        $this->form_validation->set_rules('price', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/detail-paket/edit', [
                'detail_paket' => $detail_paket,
                'paket' => $this->ModelBase->all('paket'),
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
            'paket_id' => ($i->post('paket')),
            'title' => htmlspecialchars($i->post('title')),
            'sub_title' => htmlspecialchars($i->post('sub_title')),
            'price' => htmlspecialchars($i->post('price')),
            'detail_desc' => htmlspecialchars($i->post('detail_desc')),
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->update('detail_paket', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/detail_paket');
    }

    public function destroy($id)
    {
        $this->ModelBase->delete('detail_paket', $id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/detail_paket');
    }
}
