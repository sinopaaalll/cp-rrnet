<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPageController extends CI_Controller
{
    protected $tentangId = 1;
    protected $kontakId = 1;

    public function index()
    {
        $data = [
            'title' => "Home",
            'galeris' => $this->ModelBase->limit('galeri', 3, 'desc'),
            'paket' => $this->ModelBase->limit('paket', 1, 'asc'),
            'pakets' => $this->ModelBase->all('paket'),
            'detail_pakets' => $this->ModelBase->all('detail_paket'),
            'tentang' => $this->ModelBase->find('tentang', $this->tentangId),
        ];
        $this->load->view('pages/user/home', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => "Tentang Perusahaan",
            'tentang' => $this->ModelBase->find('tentang', $this->tentangId),
        ];
        $this->load->view('pages/user/tentang', $data);
    }

    public function paket()
    {
        $data = [
            'title' => "paket",
            'pakets' => $this->ModelBase->all('paket'),
            'detail_pakets' => $this->ModelBase->all('detail_paket'),
        ];
        $this->load->view('pages/user/paket', $data);
    }

    public function layananDetail($slug)
    {
        $data = [
            'title' => "Layanan",
            'layanan' => $this->ModelBase->findLayananSlug($slug),
            'layanans' => $this->ModelBase->limitLayananSlug(3, $slug),
        ];
        $this->load->view('pages/user/layanan_detail', $data);
    }

    public function galeri()
    {
        // Load pagination library
        $this->load->library('pagination');

        // Konfigurasi pagination
        $config['base_url'] = base_url('galeri'); // URL halaman
        $config['total_rows'] = $this->ModelBase->count_all('galeri'); // Total data
        $config['per_page'] = 6; // Data per halaman
        $config['uri_segment'] = 2; // Segment URI untuk pagination

        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['attributes'] = array('class' => 'page-link');


        // Inisialisasi pagination
        $this->pagination->initialize($config);

        // Mendapatkan data sesuai halaman
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['galeris'] = $this->ModelBase->fetch_data('galeri', $config['per_page'], $page);


        // Load view
        $data['title'] = "Galeri";
        $this->load->view('pages/user/galeri', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => "Kontak",
            'kontak' => $this->ModelBase->find('kontak', $this->kontakId),
        ];
        $this->load->view('pages/user/kontak', $data);
    }
}
