<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Model
{
    public function get_data($email)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_kelas', 'user_kelas.email = user.email');
        $this->db->where('user_kelas.email', $email);
        $query = $this->db->get();
        return $query;
    }
    public function viewKelas($kodeKelas)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_kelas', 'user_kelas.email = user.email');
        $this->db->where('user_kelas.kodeKelas', $kodeKelas);
        $query = $this->db->get();
        return $query;
    }
    public function viewTugas($kodeKelas)
    {
        $this->db->select('*');
        $this->db->from('user_kelas_tugas');
        $this->db->join('user_kelas', 'user_kelas.kodeKelas = user_kelas_tugas.kodeKelas');
        $this->db->where('user_kelas_tugas.kodeKelas', $kodeKelas);
        $query = $this->db->get();
        return $query;
    }
    public function joinKelas($email)
    {
        $this->db->select('*');
        $this->db->from('user_kelas');
        $this->db->join('join_kelas', 'user_kelas.kodeKelas = join_kelas.kodeKelas');
        $this->db->where('join_kelas.email', $email);
        $query = $this->db->get();
        return $query;
    }
}
