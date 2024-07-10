<?php 
defined('BASEPATH') OR die('cannot access');

class M_login extends CI_Model {

    function __contruct(){
        parent::__contruct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function datalogin($data){
        $sikat = $this->db->get_where('tb_user', $data);
        return $sikat;
    } 

    public function ceklogin($email){
        $sikat = $this->db->query("SELECT * FROM `tb_user` where email='$email'");
        return $sikat->result();
    }

    public function ketloginuser($data){
        $sikat = $this->db->get_where('tb_ketlog', $data);
        return $sikat;
    }

    public function tambah_ketlog($ketlog){
        $sikat = $this->db->insert('tb_ketlog', $ketlog);
        return $sikat;
    }

    public function log_masuk()
    {
        $sikat = $this->db->query("SELECT * FROM tb_ketlog");
        return $sikat->result();
    }

    public function tampil_ketlog()
    {
        $sikat = $this->db->query("SELECT * FROM `tb_user`, tb_ketlog
                                    where tb_user.id_user = tb_ketlog.id_user
                                    ");
        return $sikat->result();
    }

}