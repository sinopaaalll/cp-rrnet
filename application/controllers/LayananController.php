<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class LayananController extends CI_Controller
{
    public $title = 'Layanan';

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $this->load->view('component/admin/header', ['title' => $this->title]);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/layanan/index', [
            'layanans' => $this->ModelBase->all('layanan'),
            'title' => $this->title,
        ]);

        $this->load->view('component/admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required|is_unique[layanan.slug]');
        $this->form_validation->set_rules('desc', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/layanan/add', [
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
            'upload_path' => 'assets/uploads/layanan/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        if (empty($_FILES['img']['name'])) {
            $img = 'layanan.png';
        } else {

            // Upload the new photo
            if (!$this->upload->do_upload('img')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/layanan');
            } else {
                $upload_data['img'] = $this->upload->data();
                $img = $upload_data['img']['file_name'];
            }
        }

        $i = $this->input;

        $data = [
            'title' => htmlspecialchars($i->post('title')),
            'slug' => htmlspecialchars($i->post('slug')),
            'desc' => htmlspecialchars($i->post('desc')),
            'status' => $i->post('status') == TRUE ? 1 : 0,
            'times' => date('Y-m-d H:i:s'),
            'img' => $img,
            'user_id' => $this->session->userdata('user_id'),
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->create('layanan', $data);

        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('admin/layanan');
    }

    public function show($id)
    {
        $this->load->view('component/admin/header', ['title' => $this->title]);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/layanan/view', [
            'layanan' => $this->ModelBase->findLayanan($id),
            'title' => $this->title
        ]);
        $this->load->view('component/admin/footer');
    }

    public function edit($id)
    {
        $layanan = $this->ModelBase->find('layanan', $id);

        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi', 'required');

        if ($this->input->post('slug') != $layanan->slug) {
            $this->form_validation->set_rules('slug', 'Slug', 'is_unique[layanan.slug]', array(
                'is_unique' => '%s tidak boleh sama'
            ));
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('component/admin/header', ['title' => $this->title]);
            $this->load->view('component/admin/sidebar');
            $this->load->view('pages/admin/layanan/edit', [
                'layanan' => $layanan,
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
            'upload_path' => 'assets/uploads/layanan/',
            'encrypt_name'  => TRUE,
            'max_size' => 5048,
        ));

        $i = $this->input;
        $old_img = $i->post('old_img');

        if (empty($_FILES['img']['name'])) {
            $img = $old_img;
        } else {

            if ($old_img != 'layanan.png') {
                $old_photo_path = 'assets/uploads/layanan/' . $old_img;
                if (file_exists($old_photo_path)) {
                    unlink($old_photo_path);
                }
            }

            // Upload the new photo
            if (!$this->upload->do_upload('img')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/layanan');
            } else {
                $upload_data['img'] = $this->upload->data();
                $img = $upload_data['img']['file_name'];
            }
        }

        $data = [
            'title' => htmlspecialchars($i->post('title')),
            'slug' => htmlspecialchars($i->post('slug')),
            'desc' => htmlspecialchars($i->post('desc')),
            'status' => $i->post('status') == TRUE ? 1 : 0,
            'times' => date('Y-m-d H:i:s'),
            'img' => $img,
            'user_id' => $this->session->userdata('user_id'),
        ];

        // var_dump($data);
        // die();

        $this->ModelBase->update('layanan', $data, $id);

        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('admin/layanan');
    }

    public function destroy($id)
    {
        $img = $this->ModelBase->get_image('layanan', 'img', $id);

        // Hapus file img dari folder uploads
        if ($img != 'layanan.png') {
            $path = 'assets/uploads/layanan/' . $img;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->ModelBase->delete('layanan', $id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/layanan');
    }
}
