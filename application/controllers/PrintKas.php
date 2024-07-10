<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrintKas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Kas');
    }

    public function print() {
        $data['tran_hari_ini'] = $this->M_Kas->get_transaksi_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_Kas->get_total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_Kas->get_total_keluar_hari_ini();
        $data['total_masuk'] = $this->M_Kas->get_total_masuk();
        $data['total_keluar'] = $this->M_Kas->get_total_keluar();

        $this->load->view('v_kas/v_kas_print', $data);
    }
}
