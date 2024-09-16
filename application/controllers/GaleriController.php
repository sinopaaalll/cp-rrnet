<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleriController extends CI_Controller
{
    public $title = 'Galeri';

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->load->view('component/admin/header', ['title' => $this->title]);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/galeri/index', [
            'galeris' => $this->ModelBase->all('galeri'),
            'title' => $this->title,
        ]);

        $this->load->view('component/admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/galeri/add', [
                'title' => $this->title
            ]);
            $this->load->view('component/admin/footer');
        } else {
            $this->_store();
        }
    }

    private function _store()
    {
        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/galeri/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));


        if (!$this->upload->do_upload('img')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', strip_tags($error));
            redirect('admin/galeri/tambah');
        } else {
            $upload_data['img'] = $this->upload->data();
        }

        $i = $this->input;

        $data = [
            'title' => htmlspecialchars($i->post('title')),
            'img' => $upload_data['img']['file_name'],
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->create('galeri', $data);

        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('admin/galeri');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('title', 'Judul', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/galeri/edit', [
                'galeri' => $this->ModelBase->find('galeri', $id),
                'title' => $this->title
            ]);
            $this->load->view('component/admin/footer');
        } else {
            $this->_update($id);
        }
    }

    private function _update($id)
    {
        $this->load->library('upload');

        $upload_data = array();

        $this->upload->initialize(array(
            'allowed_types' => 'png|jpg|jpeg',
            'upload_path' => 'assets/uploads/galeri/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        $i = $this->input;
        $old_img = $i->post('old_img');

        if (empty($_FILES['img']['name'])) {
            $img = $old_img;
        } else {

            $old_photo_path = 'assets/uploads/galeri/' . $old_img;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }

            // Upload the new photo
            if (!$this->upload->do_upload('img')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/galeri');
            } else {
                $upload_data['img'] = $this->upload->data();
                $img = $upload_data['img']['file_name'];
            }
        }

        $data = [
            'title' => htmlspecialchars($i->post('title')),
            'img' => $img,
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->update('galeri', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/galeri');
    }

    public function destroy($id)
    {
        $img = $this->ModelBase->get_image('galeri', 'img', $id);

        // Hapus file img dari folder uploads
        $path = 'assets/uploads/galeri/' . $img;
        if (file_exists($path)) {
            unlink($path);
        }

        $this->ModelBase->delete('galeri', $id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/galeri');
    }
}
