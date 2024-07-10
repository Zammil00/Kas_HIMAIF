<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kas extends CI_Model {
    
    public function get_transaksi_hari_ini() {
        $this->db->where('DATE(created)', date('Y-m-d'));
        return $this->db->get('tb_kas')->result_array();
    }

    public function get_total_masuk_hari_ini() {
        $this->db->select_sum('nominal');
        $this->db->where('jenis_kas', 'masuk');
        $this->db->where('DATE(created)', date('Y-m-d'));
        return $this->db->get('tb_kas')->row()->nominal;
    }

    public function get_total_keluar_hari_ini() {
        $this->db->select_sum('nominal');
        $this->db->where('jenis_kas', 'keluar');
        $this->db->where('DATE(created)', date('Y-m-d'));
        return $this->db->get('tb_kas')->row()->nominal;
    }

    public function get_total_masuk() {
        $this->db->select_sum('nominal');
        $this->db->where('jenis_kas', 'masuk');
        return $this->db->get('tb_kas')->row()->nominal;
    }

    public function get_total_keluar() {
        $this->db->select_sum('nominal');
        $this->db->where('jenis_kas', 'keluar');
        return $this->db->get('tb_kas')->row()->nominal;
    }
}
