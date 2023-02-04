<?php 

    class InstansiModel {

        private $dbname = 'db_pengaduan_masyarakat';
        private $table = 'instansi';
        private $db;
        
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllInstansi() {
            $query = "SELECT * FROM {$this->table}";
            
            $this->db->query($query);

            return $this->db->allResult();
        }

        public function getInstansiById($id) {
            $query = "SELECT * FROM {$this->table} WHERE id_instansi = :id";

            $this->db->query($query);
            $this->db->bind('id', $id);

            return $this->db->singleResult();
        }

        public function createInstansi($data) {

            $query = "INSERT INTO {$this->table} (nama_instansi) VALUES (:nama_instansi)";

            $this->db->query($query);
            $this->db->bind('nama_instansi', htmlspecialchars($data['nama_instansi']));

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function updateInstansi($id, $data) {
            $query = "UPDATE {$this->table} set nama_instansi = :nama_instansi WHERE id_instansi = $id";

            $this->db->query($query);
            $this->db->bind('nama_instansi', htmlspecialchars($data['nama_instansi']));

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteInstansi($id) {
            $query = "DELETE FROM {$this->table} WHERE id_instansi = $id";

            $this->db->query($query);
            $this->db->bind('id', $id);

            $this->db->execute();
            return $this->db->rowCount();
        }

    }