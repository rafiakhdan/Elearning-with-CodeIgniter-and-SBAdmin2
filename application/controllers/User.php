<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('kelas');
        $data['kelas'] = $this->kelas->joinKelas($this->session->userdata('email'))->result();
        $data['guru'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Ayo Sinau - Homepage';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function viewKelas($kodeKelas)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('kelas');
        $data['kelas'] = $this->kelas->viewKelas($kodeKelas)->result();

        $data['title'] = 'Ayo Sinau - Ruang Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/kelas', $data);
        $this->load->view('templates/footer');
    }
    public function tugas()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('kelas');
        $data['kelas'] = $this->kelas->joinKelas($this->session->userdata('email'))->result();

        $data['title'] = 'Ayo Sinau - Tugas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/viewTugas', $data);
        $this->load->view('templates/footer');
    }
    public function viewTugas($kodeKelas)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('kelas');
        $data['kelas'] = $this->kelas->joinKelas($this->session->userdata('email'))->result();
        $data['tugas'] = $this->kelas->viewTugas($kodeKelas)->result();

        $data['title'] = 'Ayo Sinau - Tugas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tugas', $data);
        $this->load->view('templates/footer');
    }
    public function joinKelas()
    {
        $email = $this->session->userdata('email');
        $data = [
            'email' => htmlspecialchars($email, true),
            'kodeKelas' => htmlspecialchars($this->input->post('kodeKelas', true)),
        ];
        //nilai di insert kedalam database
        $this->db->insert('join_kelas', $data);
        //melakukan reload ulang terhadap controller auth
        redirect('user');
    }
}
