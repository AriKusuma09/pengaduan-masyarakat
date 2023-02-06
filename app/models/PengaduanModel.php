<?php 

    Class PengaduanModel {

        private $tbLaporan  = 'laporan',
                $tbInstansi = 'instansi',
                $tbKategori = 'kategori_laporan',
                $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllInstansi() {
            $query = "SELECT * FROM {$this->tbInstansi}";
            
            $this->db->query($query);
            return $this->db->allResult();
        }
        
        public function getAllKategori() {
            $query = "SELECT * FROM {$this->tbKategori}";

            $this->db->query($query);
            return $this->db->allResult();
        }

        public function createLaporan() {

            $query = "INSERT INTO {$this->tbLaporan} (judul_laporan, isi_laporan, nama_pelapor, nomor_telepon, tanggal_kejadian, lokasi_kejadian, instansi_tujuan, nama_kategori) VALUES (:judulLaporan, :isiLaporan, :namaPelapor, :nomorTelepon, :tglKejadian, :lokasiLaporan, :instansiLaporan, :kategoriLaporan)";

            $this->db->query($query);
            $this->db->bind('judulLaporan', htmlspecialchars($_POST['judulLaporan']));
            $this->db->bind('isiLaporan', htmlspecialchars($_POST['isiLaporan']));
            $this->db->bind('namaPelapor', htmlspecialchars($_POST['namaPelapor']));
            $this->db->bind('nomorTelepon', htmlspecialchars($_POST['nomorTelepon']));
            $this->db->bind('tglKejadian', htmlspecialchars($_POST['tglKejadian']));
            $this->db->bind('lokasiLaporan', htmlspecialchars($_POST['lokasiLaporan']));
            $this->db->bind('instansiLaporan', htmlspecialchars($_POST['instansiLaporan']));
            $this->db->bind('kategoriLaporan', htmlspecialchars($_POST['kategoriLaporan']));

            $this->db->execute();
            return $this->db->rowCount();

        }

        // public function updateLaporan() {

        //     $query = "UPDATE {$this->tbLaporan} SET ()";

        // }
    }