<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bulan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        //load model database
        $this->load->model('M_login');
        $this->load->model('M_kelola_kas');
        $this->load->model('M_kelola_bulan');

        //untuk mengecek user / pengguna
        if ($this->session->userdata('email') == NULL) {
            redirect(base_url());
        }
    }

    public function v_januari()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['januari_total'] = $this->M_kelola_bulan->januari_totalsemua();
        $data['januari_jumlahkm'] = $this->M_kelola_bulan->januari_jumlahkm();
        $data['januari_jumlahkk'] = $this->M_kelola_bulan->januari_jumlahkk();
        $data['januari_totalkm'] = $this->M_kelola_bulan->januari_totalkm();
        $data['januari_totalkk'] = $this->M_kelola_bulan->januari_totalkk();
        $data['januari_km'] = $this->M_kelola_bulan->januari_km();
        $data['januari_kk'] = $this->M_kelola_bulan->januari_kk();
        $this->load->view('v_kas/v_bulan/v_januari', $data);
        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $this->load->view('v_kas/tabel', $data);
        $this->load->view('v_kas/footer');
    }
    public function v_februari()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['februari_total'] = $this->M_kelola_bulan->februari_totalsemua();
        $data['februari_jumlahkm'] = $this->M_kelola_bulan->februari_jumlahkm();
        $data['februari_jumlahkk'] = $this->M_kelola_bulan->februari_jumlahkk();
        $data['februari_totalkm'] = $this->M_kelola_bulan->februari_totalkm();
        $data['februari_totalkk'] = $this->M_kelola_bulan->februari_totalkk();
        $data['februari_km'] = $this->M_kelola_bulan->februari_km();
        $data['februari_kk'] = $this->M_kelola_bulan->februari_kk();
        $this->load->view('v_kas/v_bulan/v_februari', $data);
        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/tabel', $data);
        $this->load->view('v_kas/footer');
    }
    public function v_maret()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['maret_total'] = $this->M_kelola_bulan->maret_totalsemua();
        $data['maret_jumlahkm'] = $this->M_kelola_bulan->maret_jumlahkm();
        $data['maret_jumlahkk'] = $this->M_kelola_bulan->maret_jumlahkk();
        $data['maret_totalkm'] = $this->M_kelola_bulan->maret_totalkm();
        $data['maret_totalkk'] = $this->M_kelola_bulan->maret_totalkk();
        $data['maret_km'] = $this->M_kelola_bulan->maret_km();
        $data['maret_kk'] = $this->M_kelola_bulan->maret_kk();
        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();

        $this->load->view('v_kas/v_bulan/v_maret', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_april()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['april_total'] = $this->M_kelola_bulan->april_totalsemua();
        $data['april_jumlahkm'] = $this->M_kelola_bulan->april_jumlahkm();
        $data['april_jumlahkk'] = $this->M_kelola_bulan->april_jumlahkk();
        $data['april_totalkm'] = $this->M_kelola_bulan->april_totalkm();
        $data['april_totalkk'] = $this->M_kelola_bulan->april_totalkk();
        $data['april_km'] = $this->M_kelola_bulan->april_km();
        $data['april_kk'] = $this->M_kelola_bulan->april_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_april', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_mei()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['mei_total'] = $this->M_kelola_bulan->mei_totalsemua();
        $data['mei_jumlahkm'] = $this->M_kelola_bulan->mei_jumlahkm();
        $data['mei_jumlahkk'] = $this->M_kelola_bulan->mei_jumlahkk();
        $data['mei_totalkm'] = $this->M_kelola_bulan->mei_totalkm();
        $data['mei_totalkk'] = $this->M_kelola_bulan->mei_totalkk();
        $data['mei_km'] = $this->M_kelola_bulan->mei_km();
        $data['mei_kk'] = $this->M_kelola_bulan->mei_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_mei', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_juni()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['juni_total'] = $this->M_kelola_bulan->juni_totalsemua();
        $data['juni_jumlahkm'] = $this->M_kelola_bulan->juni_jumlahkm();
        $data['juni_jumlahkk'] = $this->M_kelola_bulan->juni_jumlahkk();
        $data['juni_totalkm'] = $this->M_kelola_bulan->juni_totalkm();
        $data['juni_totalkk'] = $this->M_kelola_bulan->juni_totalkk();
        $data['juni_km'] = $this->M_kelola_bulan->juni_km();
        $data['juni_kk'] = $this->M_kelola_bulan->juni_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_juni', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_juli()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['juli_total'] = $this->M_kelola_bulan->juli_totalsemua();
        $data['juli_jumlahkm'] = $this->M_kelola_bulan->juli_jumlahkm();
        $data['juli_jumlahkk'] = $this->M_kelola_bulan->juli_jumlahkk();
        $data['juli_totalkm'] = $this->M_kelola_bulan->juli_totalkm();
        $data['juli_totalkk'] = $this->M_kelola_bulan->juli_totalkk();
        $data['juli_km'] = $this->M_kelola_bulan->juli_km();
        $data['juli_kk'] = $this->M_kelola_bulan->juli_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_juli', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_agustus()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['agustus_total'] = $this->M_kelola_bulan->agustus_totalsemua();
        $data['agustus_jumlahkm'] = $this->M_kelola_bulan->agustus_jumlahkm();
        $data['agustus_jumlahkk'] = $this->M_kelola_bulan->agustus_jumlahkk();
        $data['agustus_totalkm'] = $this->M_kelola_bulan->agustus_totalkm();
        $data['agustus_totalkk'] = $this->M_kelola_bulan->agustus_totalkk();
        $data['agustus_km'] = $this->M_kelola_bulan->agustus_km();
        $data['agustus_kk'] = $this->M_kelola_bulan->agustus_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_agustus', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_september()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['september_total'] = $this->M_kelola_bulan->september_totalsemua();
        $data['september_jumlahkm'] = $this->M_kelola_bulan->september_jumlahkm();
        $data['september_jumlahkk'] = $this->M_kelola_bulan->september_jumlahkk();
        $data['september_totalkm'] = $this->M_kelola_bulan->september_totalkm();
        $data['september_totalkk'] = $this->M_kelola_bulan->september_totalkk();
        $data['september_km'] = $this->M_kelola_bulan->september_km();
        $data['september_kk'] = $this->M_kelola_bulan->september_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_september', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_oktober()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['oktober_total'] = $this->M_kelola_bulan->oktober_totalsemua();
        $data['oktober_jumlahkm'] = $this->M_kelola_bulan->oktober_jumlahkm();
        $data['oktober_jumlahkk'] = $this->M_kelola_bulan->oktober_jumlahkk();
        $data['oktober_totalkm'] = $this->M_kelola_bulan->oktober_totalkm();
        $data['oktober_totalkk'] = $this->M_kelola_bulan->oktober_totalkk();
        $data['oktober_km'] = $this->M_kelola_bulan->oktober_km();
        $data['oktober_kk'] = $this->M_kelola_bulan->oktober_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_oktober', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_november()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['november_total'] = $this->M_kelola_bulan->november_totalsemua();
        $data['november_jumlahkm'] = $this->M_kelola_bulan->november_jumlahkm();
        $data['november_jumlahkk'] = $this->M_kelola_bulan->november_jumlahkk();
        $data['november_totalkm'] = $this->M_kelola_bulan->november_totalkm();
        $data['november_totalkk'] = $this->M_kelola_bulan->november_totalkk();
        $data['november_km'] = $this->M_kelola_bulan->november_km();
        $data['november_kk'] = $this->M_kelola_bulan->november_kk();

        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/v_bulan/v_november', $data);
        $this->load->view('v_kas/tabel');
        $this->load->view('v_kas/footer');
    }
    public function v_desember()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['desember_total'] = $this->M_kelola_bulan->desember_totalsemua();
        $data['desember_jumlahkm'] = $this->M_kelola_bulan->desember_jumlahkm();
        $data['desember_jumlahkk'] = $this->M_kelola_bulan->desember_jumlahkk();
        $data['desember_totalkm'] = $this->M_kelola_bulan->desember_totalkm();
        $data['desember_totalkk'] = $this->M_kelola_bulan->desember_totalkk();
        $data['desember_km'] = $this->M_kelola_bulan->desember_km();
        $data['desember_kk'] = $this->M_kelola_bulan->desember_kk();

        $this->load->view('v_kas/v_bulan/v_desember', $data);
        $data['tran_hari_ini'] = $this->M_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->M_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->M_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/tabel', $data);
        $this->load->view('v_kas/footer');
    }

}