<?php 

    Class UserModel {

        private $table = 'masyarakat';
        private $db;

        public function __construct() {
            
            $this->db = new Database;

        }


        public function createUser($data) {

            $password = password_hash($data['password'], PASSWORD_BCRYPT);

            $query = "INSERT INTO {$this->table} (nik, nama_lengkap, no_hp, email_address, tempat_tinggal, tanggal_lahir, password) 
                        VALUES(:nik, :nama_lengkap, :no_hp, :email_address, :tempat_tinggal, :tanggal_lahir,  :password)";

            $this->db->query($query);
            $this->db->bind('nik', htmlspecialchars($data['nik']));
            $this->db->bind('nama_lengkap', htmlspecialchars($data['nama_lengkap']));
            $this->db->bind('no_hp', htmlspecialchars($data['no_hp']));
            $this->db->bind('email_address', htmlspecialchars($data['email_address']));
            $this->db->bind('tempat_tinggal', htmlspecialchars($data['tempat_tinggal']));
            $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
            $this->db->bind('password', $password);

            $this->db->execute();

            return $this->db->rowCount();

        }

        public function findMasyarakatByEmail($email) {

            $query = "SELECT * FROM {$this->table} WHERE email_address = :email_address";
            $this->db->query($query);
            $this->db->bind('email_address', $email);
            $row = $this->db->singleResult();
            return $row;

        }
        
    }