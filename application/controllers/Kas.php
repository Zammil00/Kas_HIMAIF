<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        //load model database
        $this->load->model('m_login');
        $this->load->model('m_kelola_kas');
        $this->load->model('m_kelola_bulan');

        date_default_timezone_set("Asia/Jakarta");

        if ($this->session->userdata('email') == NULL) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['tkk'] = $this->m_kelola_kas->total_kas_keluar();
        $data['tkm'] = $this->m_kelola_kas->total_kas_masuk();
        $data['total'] = $this->m_kelola_kas->tampil_kas();
        $data['total_keluar'] = $this->m_kelola_kas->hitung_kas_keluar();
        $data['total_masuk'] = $this->m_kelola_kas->hitung_kas_masuk();
        $data['tran_hari_ini'] = $this->m_kelola_kas->tran_hari_ini();
        $data['total_keluar_hari_ini'] = $this->m_kelola_kas->total_keluar_hari_ini();
        $data['total_masuk_hari_ini'] = $this->m_kelola_kas->total_masuk_hari_ini();
        // $data['total_semua']                = $this->m_kelola_kas->total_semua();

        //untuk ditampilkan ke Grafik
        foreach ($this->m_kelola_kas->tampil_kk()->result_array() as $row) {
            $data['kk'][] = (float) $row['Januari'];
            $data['kk'][] = (float) $row['Februari'];
            $data['kk'][] = (float) $row['Maret'];
            $data['kk'][] = (float) $row['April'];
            $data['kk'][] = (float) $row['Mei'];
            $data['kk'][] = (float) $row['Juni'];
            $data['kk'][] = (float) $row['Juli'];
            $data['kk'][] = (float) $row['Agustus'];
            $data['kk'][] = (float) $row['September'];
            $data['kk'][] = (float) $row['Oktober'];
            $data['kk'][] = (float) $row['November'];
            $data['kk'][] = (float) $row['Desember'];
        }

        foreach ($this->m_kelola_kas->tampil_km()->result_array() as $row) {
            $data['km'][] = (float) $row['Januari'];
            $data['km'][] = (float) $row['Februari'];
            $data['km'][] = (float) $row['Maret'];
            $data['km'][] = (float) $row['April'];
            $data['km'][] = (float) $row['Mei'];
            $data['km'][] = (float) $row['Juni'];
            $data['km'][] = (float) $row['Juli'];
            $data['km'][] = (float) $row['Agustus'];
            $data['km'][] = (float) $row['September'];
            $data['km'][] = (float) $row['Oktober'];
            $data['km'][] = (float) $row['November'];
            $data['km'][] = (float) $row['Desember'];
        }

        $this->load->view('v_kas/v_home', $data);
        $data['tran_hari_ini'] = $this->m_kelola_kas->tran_hari_ini();
        $data['total_masuk_hari_ini'] = $this->m_kelola_kas->total_masuk_hari_ini();
        $data['total_keluar_hari_ini'] = $this->m_kelola_kas->total_keluar_hari_ini();
        $this->load->view('v_kas/tabel', $data);
        $this->load->view('v_kas/footer');
    }

    public function v_kas()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');

        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');

        //konfigurasi pagination
        $config['base_url'] = site_url('kas/v_kas'); //site url
        $config['total_rows'] = $this->db->count_all('tb_kas'); //total baris
        $config['per_page'] = 20;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //style Pagination 
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data'] = $this->m_kelola_kas->list_kas($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        // $data['desember_sumkm'] = $this->m_kelola_bulan->desember_sumkm();
        //load view kas view
        $this->load->view('v_kas/v_kas', $data);
        $this->load->view('v_kas/footer');
    }

    //untuk view tampil tambah kas masuk / keluar
    public function v_tambah_kas()
    {
        $data['judul'] = 'Tambah Data';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $this->load->view('v_kas/v_kas_tambah');
        $this->load->view('v_kas/footer');
    }

    public function tambah_kas()
    {
        $jenis_kas = $this->input->post('jenis_kas');
        $nominal = $this->input->post('nominal');
        $keterangan = ucwords($this->input->post('keterangan'));
        $created = date("20y-m-d H:i:s");
        $id_user = $this->session->userdata('id');

        $data = array(
            'jenis_kas' => $jenis_kas,
            'nominal' => $nominal,
            'keterangan' => $keterangan,
            'created' => $created,
            'id_user' => $id_user
        );

        // $a = $this->db->query("SELECT * FROM tb_kas 
        //                         WHERE keterangan='$keterangan'");

        $sikat = $this->m_kelola_kas->tambah_kas($data);

        if ($sikat) {
            echo "
            <link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
            <script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
            <script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
             <script type='text/javascript'>
              setTimeout(function () {  
               swal({
                title: 'Data Berhasil di Tambah',
                type: 'success',
                timer: 4000,
                showConfirmButton: false
               });  
              },10); 
              window.setTimeout(function(){ 
              window.location.href='" . base_url('kas/v_kas') . "';	
              } ,2100); 
             </script>";
        } else {
            echo "
            <link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
            <script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
            <script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
             <script type='text/javascript'>
              setTimeout(function () {  
               swal({
                title: 'Data Gagal Di Tambah',
                type: 'error',
                timer: 4000,
                showConfirmButton: false
               });  
              },10); 
              window.setTimeout(function(){ 
              window.location.href='" . base_url('kas/v_kas') . "';	
              } ,2100); 
             </script>";
        }
    }

    public function v_ubah_kas($id_kas)
    {
        $data['judul'] = 'Halaman Ubah Data';
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['id_ketlog'] = $this->session->userdata('id_ketlog');
        $this->load->view('v_kas/header', $data);
        $this->load->view('v_kas/navbar');
        $data['ubah_kas'] = $this->m_kelola_kas->ubah_kas($id_kas);
        $this->load->view('v_kas/v_kas_ubah', $data);
        $this->load->view('v_kas/footer');
    }

    public function simpan_ubah_kas($id_kas)
    {
        $jenis_kas = $this->input->post("jenis_kas");
        $nominal = $this->input->post("nominal");
        $keterangan = ucwords($this->input->post("keterangan"));
        $created = date("20y-m-d H:i:s");

        $data = array(
            'jenis_kas' => $jenis_kas,
            'nominal' => $nominal,
            'keterangan' => $keterangan,
            'created' => $created
        );
        $sikat = $this->m_kelola_kas->simpan_ubah_kas($id_kas, $data);

        if ($sikat) {
            echo "
					<link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
					<script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
					<script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
					 <script type='text/javascript'>
					  setTimeout(function () {  
					   swal({
						title: 'Data Kas Berhasil Di Perbarui',
						type: 'success',
						timer: 4000,
						showConfirmButton: false
					   });  
					  },10); 
					  window.setTimeout(function(){ 
					  window.location.href='" . base_url('/kas/v_kas/') . "';	
					  } ,2100); 
					 </script>";
        } else {
            echo "
					<link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
					<script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
					<script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
					 <script type='text/javascript'>
					  setTimeout(function () {  
					   swal({
						title: 'Data Kas Gagal Di Perbarui',
						type: 'error',
						timer: 4000,
						showConfirmButton: false
					   });  
					  },10); 
					  window.setTimeout(function(){ 
					  window.location.href='" . base_url('/kas/v_kas/') . "';	
					  } ,2100); 
					 </script>";
        }
    }



}