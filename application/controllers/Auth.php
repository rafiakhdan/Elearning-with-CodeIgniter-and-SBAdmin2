<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $this->input->post('email');
        $this->session->set_userdata('email', $this->input->post('email'));
        $this->input->post('password');
        $email = $this->input->post('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $data = [
                'email' => $user['email'],
                'peran' => $user['peran'],
            ];
            $this->session->set_userdata($data);
            if ($user['peran'] == 'guru') {
                redirect('admin');
            } else {
                redirect('user');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User tidak terdaftar!</div>');
            redirect('auth');
        }
    }
    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email telah digunakan.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => htmlspecialchars($this->input->post('password', true)),
                'peran' => htmlspecialchars($this->input->post('peran', true)),
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda telah dibuat. Silahkan Masuk</div>');
            redirect('auth/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('peran');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah keluar!</div>');
        redirect('auth');
    }
}
