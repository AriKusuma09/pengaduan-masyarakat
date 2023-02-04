<?php 

    Class PetugasModel {

        private $dbname = 'db_pengaduan_masyarakat';
        private $tablePtgs = 'petugas';
        private $tableInstansi = 'instansi';
        private $db;

        public function __construct() {
            
            $this->db = new Database;

        }

        public function getAllPetugas() {
            $query = "SELECT * FROM AllPetugas";

            $this->db->query($query);
            return $this->db->allResult();
        }

        public function getAllInstansi() {

            $query = "SELECT * FROM {$this->tableInstansi}";

            $this->db->query($query);
            
            return $this->db->allResult();
        }

        public function createPetugas($data) {

            $passwordHash = password_hash($data['password_petugas'], PASSWORD_BCRYPT);

            $query = "INSERT INTO {$this->tablePtgs} (username_petugas, email_petugas, password_petugas, id_instansi) VALUES (:username_petugas, :email_petugas, :password_petugas, :id_instansi)";

            $this->db->query($query);
            $this->db->bind('username_petugas', htmlspecialchars($data['username_petugas']));
            $this->db->bind('email_petugas', htmlspecialchars($data['email_petugas']));
            $this->db->bind('password_petugas', $passwordHash);
            $this->db->bind('id_instansi', htmlspecialchars($data['id_instansi']));

            $this->db->execute();
            return $this->db->rowCount();
        } 

        public function findPetugasByEmail($email) {
            
            $query = "SELECT * FROM {$this->tablePtgs} WHERE email_petugas = :email_address";
            $this->db->query($query);
            $this->db->bind('email_address', $email);
            $row = $this->db->singleResult();
            return $row;

        }

    }
