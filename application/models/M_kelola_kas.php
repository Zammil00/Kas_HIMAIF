<?php 
defined('BASEPATH') OR die('cannot access');

class M_kelola_kas extends CI_Model {

    function __contruct(){
        parent::__contruct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function tampil_kas()
    {
                    $this->db->select('*');
                    // $this->db->limit(10);
                    $this->db->order_by('created', 'DESC');
        $tampil =   $this->db->get('tb_kas');
        return $tampil->result();
    }

    public function tambah_kas($data)
    {
        $tambah = $this->db->insert('tb_kas', $data);
        return $tambah;
    }

    function list_kas($limit, $start)
    {
                 $this->db->order_by('created', 'DESC');
        $sikat = $this->db->get('tb_kas', $limit, $start);
        return $sikat;
    }

    function list_kas_hari_ini($limit, $start)
    {
        $sikat = $this->db->query("SELECT jenis_kas, nominal, keterangan, DATE_FORMAT(created, '%H:%i:%s') AS created FROM tb_kas WHERE DATE_FORMAT(created, '%Y-%m-%d') = CURDATE();");
                return $sikat->result();
    }

    public function ubah_kas($id_kas)
    {
        $sikat = $this->db->query("SELECT * FROM tb_kas WHERE id_kas = '$id_kas'");
        return $sikat->result();
    }

    public function simpan_ubah_kas($id_kas, $data)
    {
        $this->db->where('id_kas', $id_kas);
        $this->db->update('tb_kas', $data);
        return true;
    }

    public function total_kas_keluar()
    {
        $sikat = $this->db->query("SELECT *  FROM tb_kas WHERE jenis_kas = 'kk'");
        return $sikat->result();
    }

    public function total_kas_masuk()
    {
        $sikat = $this->db->query("SELECT * FROM tb_kas WHERE jenis_kas = 'km'");
        return $sikat->result();
    }

   public function hitung_kas_keluar()
   {
       $sikat = $this->db->query("SELECT SUM(nominal) AS total_keluar FROM tb_kas WHERE jenis_kas = 'kk' ");
        return $sikat->result();
   }

   public function hitung_kas_masuk()
   {
       $sikat = $this->db->query("SELECT SUM(nominal) AS total_masuk FROM tb_kas WHERE jenis_kas = 'km'");
        return $sikat->result();
   }

   public function cari()
   {
       $sikat = $this->db->query("SELECT * FROM tb_kas
                                    WHERE ");
   }

   public function tran_hari_ini()
   {
        $sikat = $this->db->query("SELECT jenis_kas, nominal, keterangan, DATE_FORMAT(created, '%H:%i:%s') AS created FROM tb_kas WHERE DATE_FORMAT(created, '%Y-%m-%d') = CURDATE() AND jenis_kas = 'kk' ORDER BY created DESC");
        return $sikat->result();
   }

   public function total_keluar_hari_ini(){
       $sikat = $this->db->query("SELECT SUM(nominal) AS total FROM tb_kas WHERE DATE_FORMAT(created, '%Y-%m-%d') = CURDATE() AND jenis_kas = 'kk'");
       return $sikat->result();}

   public function total_masuk_hari_ini(){
       $sikat = $this->db->query("SELECT SUM(nominal) AS total FROM tb_kas WHERE DATE_FORMAT(created, '%Y-%m-%d') = CURDATE() AND jenis_kas = 'km'");
       return $sikat->result(); }

    public function tampil_kk(){
        $sikat = $this->db->query(" select
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=1)AND (jenis_kas = 'kk'))),0) AS Januari,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=2)AND (jenis_kas = 'kk'))),0) AS Februari,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=3)AND (jenis_kas = 'kk'))),0) AS Maret,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=4)AND (jenis_kas = 'kk'))),0) AS April,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=5)AND (jenis_kas = 'kk'))),0) AS Mei,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=6)AND (jenis_kas = 'kk'))),0) AS Juni,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=7)AND (jenis_kas = 'kk'))),0) AS Juli,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=8)AND (jenis_kas = 'kk'))),0) AS Agustus,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=9)AND (jenis_kas = 'kk'))),0) AS September,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=10)AND (jenis_kas = 'kk'))),0) AS Oktober,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=11)AND (jenis_kas = 'kk'))),0) AS November,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=12)AND (jenis_kas = 'kk'))),0) AS Desember
                                    from tb_kas");
        return $sikat;
    }

    public function tampil_km(){
        $sikat = $this->db->query(" select
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=1)AND (jenis_kas = 'km'))),0) AS Januari,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=2)AND (jenis_kas = 'km'))),0) AS Februari,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=3)AND (jenis_kas = 'km'))),0) AS Maret,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=4)AND (jenis_kas = 'km'))),0) AS April,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=5)AND (jenis_kas = 'km'))),0) AS Mei,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=6)AND (jenis_kas = 'km'))),0) AS Juni,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=7)AND (jenis_kas = 'km'))),0) AS Juli,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=8)AND (jenis_kas = 'km'))),0) AS Agustus,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=9)AND (jenis_kas = 'km'))),0) AS September,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=10)AND (jenis_kas = 'km'))),0) AS Oktober,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=11)AND (jenis_kas = 'km'))),0) AS November,
                                        ifnull((SELECT SUM(nominal) FROM (tb_kas)WHERE((Month(created)=12)AND (jenis_kas = 'km'))),0) AS Desember
                                    from tb_kas");
        return $sikat;
    }
    
}