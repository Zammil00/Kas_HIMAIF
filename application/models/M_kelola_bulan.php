<?php
    defined('BASEPATH') OR die('cannot access');

    class M_kelola_bulan extends CI_Model {

        function __contruct(){
            parent::__contruct();
            date_default_timezone_set('Asia/Jakarta');
        }

        //function untuk menampilkan data perbulan
        //Januari
        public function januari_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1");
            return $sikat->result();
        }
        public function januari_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function januari_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function januari_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function januari_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function januari_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function januari_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 1 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Februari
        public function februari_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2");
            return $sikat->result();
        }
        public function februari_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function februari_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function februari_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function februari_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function februari_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function februari_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 2 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Maret
        public function maret_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3");
            return $sikat->result();
        }
        public function maret_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function maret_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function maret_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function maret_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function maret_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function maret_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 3 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //April
        public function april_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4");
            return $sikat->result();
        }
        public function april_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function april_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function april_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function april_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function april_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function april_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 4 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Mei
        public function mei_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5");
            return $sikat->result();
        }
        public function mei_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function mei_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function mei_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function mei_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function mei_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function mei_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 5 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Juni
        public function juni_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6");
            return $sikat->result();
        }
        public function juni_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function juni_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function juni_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function juni_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function juni_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function juni_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 6 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Juli
        public function juli_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7");
            return $sikat->result();
        }
        public function juli_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function juli_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function juli_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function juli_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function juli_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function juli_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 7 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Agustus
        public function agustus_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8");
            return $sikat->result();
        }
        public function agustus_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function agustus_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function agustus_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function agustus_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function agustus_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function agustus_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 8 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //September
        public function september_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9");
            return $sikat->result();
        }
        public function september_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function september_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function september_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function september_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function september_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function september_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 9 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Oktober
        public function oktober_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10");
            return $sikat->result();
        }
        public function oktober_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function oktober_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function oktober_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function oktober_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function oktober_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function oktober_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 10 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //November
        public function november_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11");
            return $sikat->result();
        }
        public function november_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function november_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function november_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function november_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function november_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function november_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 11 AND jenis_kas = 'kk';");
            return $sikat->result();
        }

        //Desember
         public function desember_totalsemua(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12");
            return $sikat->result();
        }
        public function desember_jumlahkm(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas='km'");
            return $sikat->result();
        }
        public function desember_jumlahkk(){
            $sikat = $this->db->query("SELECT COUNT(id_kas) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas='kk'");
            return $sikat->result();
        }
        public function desember_totalkm(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas = 'km'");
            return $sikat->result();
        }
        public function desember_totalkk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas = 'kk'");
            return $sikat->result();
        }

        public function desember_km(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas = 'km';");
            return $sikat->result();
        }
        public function desember_kk(){
            $sikat = $this->db->query("SELECT SUM(nominal) AS total, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas = 'kk';");
            return $sikat->result();
        }
        
    }
