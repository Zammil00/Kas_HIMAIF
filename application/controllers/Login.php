<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_login');
		$this->load->helper('html');
	}

	public function index()
	{
		$data['title'] = 'Login ~ Kas Himaif';
		$this->load->view('v_login/login', $data);
	}

	public function cek()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$log_masuk = date('20y-m-d H:i:s');
		$device = $_SERVER['HTTP_USER_AGENT'];

		$data = array(
			'email' => $email,
			'password' => $password,
		);

		$sikat = $this->M_login->datalogin($data);

		if ($sikat->num_rows() > 0) {
			$data['akun'] = $this->M_login->ceklogin($email);
			$data['log_masuk'] = $this->M_login->log_masuk();
			foreach ($data['akun'] as $akun) {
				$sesi['id'] = $akun->id;
				$sesi['nama'] = $akun->nama;
				$sesi['email'] = $akun->email;
				$sesi['password'] = $akun->password;
				$sesi['akses'] = $akun->akses;

				$this->session->set_userdata($sesi);

				// aray untuk keteerangan login user
				$ketlog = array(
					// 'id_user'	=> $id_user,
					// 'email'		=> $email,
					'log_masuk' => $log_masuk,
					'device' => $device,
					'id_user' => $akun->id
				);

				$gas = $this->M_login->tambah_ketlog($ketlog);

				echo "
						<link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
						<script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
						<script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
						<script type='text/javascript'>
							setTimeout(function () {  
							swal({
								title: 'Login Sukses',
								text: 'Selamat Datang " . $akun->nama . "',
								type: 'success',
								timer: 4000,
								showConfirmButton: false
							});  
							},10); 
							window.setTimeout(function(){ 
							window.location.href='" . base_url('kas/index') . "';	
							} ,2100); 
						</script>";
			}
		} else {
			echo "
				<link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
				<script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
				<script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
					<script type='text/javascript'>
						setTimeout(function () {  
						swal({
							title: 'Login Gagal',
							text: 'Cek Email dan Password Anda',
							type: 'error',
							timer: 10000,
							showConfirmButton: false
						});  
						},10); 
						window.setTimeout(function(){ 
						window.location.href='" . base_url('login/index') . "';	
						} ,2100); 
					</script>";
		}

	}

	public function logout()
	{
		$email = $this->session->userdata('email');
		$id_ketlog = $this->session->userdata('id_ketlog');
		$log_keluar = date('20y-m-d H:i:s');



		$this->session->unset_userdata($email);
		// $logkeluar = array(
		// 						'log_keluar'	=> $log_keluar
		// 				);
		// 			$gass	= $this->m_login->tambah_logterakhir($logterakhir);
		session_destroy();

		echo "
			<link href='" . base_url() . "/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='" . base_url() . "/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='" . base_url() . "/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Keluar',
				text: 'Sampai Jumpa Da Daaa',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='" . base_url('login/index') . "';	
			  } ,2100); 
			 </script>";
	}

}