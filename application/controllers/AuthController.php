<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => "Login"
            ];

            $this->load->view('auth/login', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['username' => $username])->row_array();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'foto' => $user['foto'],
                        'status' => "login",
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Anda Berhasil Login.');
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Password yang anda masukkan tidak sesuai');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('error', 'User tidak terdaftar');
                redirect('login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('error', 'Anda Telah Keluar Dari Halaman');
        redirect('/');
    }
}
