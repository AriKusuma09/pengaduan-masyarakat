<?php 

    class KategoriModel {

        private $dbname = 'db_pengaduan_masyarakat';
        private $table = 'kategori_laporan';
        private $db;
        
        public function __construct() {
            $this->db = new Database;
        }

        public function getKategori() {
            $query = "SELECT * FROM {$this->table}";

            $this->db->query($query);
            
            return $this->db->singleResult();
        }

        public function getKategoriById($id) {
            $query = "SELECT * FROM {$this->table} WHERE id_kategori = :id";

            
            $this->db->query($query);
            $this->db->bind('id', $id);

            return $this->db->singleResult();
        }

        public function getAllKategori() {

            $query = "SELECT * FROM {$this->table}";
            $this->db->query($query);

            return $this->db->allResult();
        }



        public function createKategori($data) {

            $query = "INSERT INTO {$this->table}(nama_kategori) VALUES(:kategori_name)";

            $this->db->query($query);
            $this->db->bind('kategori_name', htmlspecialchars($data['kategori_name']));

            $this->db->execute();
            return $this->db->rowCount();

        }

        public function updateKategori($id, $data) {

            $query = "UPDATE {$this->table} SET nama_kategori = :kategori_name WHERE id_kategori = $id";

            $this->db->query($query);
            $this->db->bind('kategori_name', htmlspecialchars($data['kategori_name']));

            $this->db->execute();
            return $this->db->rowCount();

        }

        public function deleteKategori($id) {
            $query = "DELETE FROM {$this->table} WHERE id_kategori = $id";

            $this->db->query($query);
            $this->db->bind('id', $id);
            
            $this->db->execute();
            return $this->db->rowCount();
        }

        



    }