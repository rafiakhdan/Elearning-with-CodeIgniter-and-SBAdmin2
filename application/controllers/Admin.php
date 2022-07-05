<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('kelas');
        $data['kelas'] = $this->kelas->get_data($this->session->userdata('email'))->result();

        $data['title'] = 'Ayo Sinau - Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function buatKelas()
    {
        $this->load->helper('string');
        $data = [
            'namaKelas' => htmlspecialchars($this->input->post('namaKelas', true)),
            'email' => $this->session->userdata('email'),
            'linkMeet' => htmlspecialchars($this->input->post('linkMeet', true)),
            'kodeKelas' => random_string('numeric', 6),
        ];

        $this->db->insert('user_kelas', $data);
        redirect('admin');
    }
    public function viewKelas($kodeKelas)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('kelas');
        $data['kelas'] = $this->kelas->viewKelas($kodeKelas)->result();
        $data['tugas'] = $this->kelas->viewTugas($kodeKelas)->result();

        $data['title'] = 'Ayo Sinau - Ruang Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelas', $data);
        $this->load->view('templates/footer');
    }
    public function buatTugas($kodeKelas)
    {
        $data = [
            'namaTugas' => htmlspecialchars($this->input->post('namaTugas', true)),
            'email' => $this->session->userdata('email'),
            'kodeKelas' => $kodeKelas,
            'keteranganTugas' => htmlspecialchars($this->input->post('keteranganTugas', true)),
            'filePendukung' => htmlspecialchars($this->input->post('filePendukung', true)),
            'deadlineTugas' => $this->input->post('deadlineTugas', true),
        ];
        $this->db->insert('user_kelas_tugas', $data);
        redirect('admin/viewKelas/' . $kodeKelas);
    }
}
