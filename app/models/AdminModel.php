<?php 

    Class AdminModel {

        private $table  = 'admin',
                $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllAdmin() {

            $query = "SELECT * FROM {$this->table} ORDER BY id_admin DESC";

            $this->db->query($query);
            return $this->db->allResult();

        }

        public function findAdminByEmail($admin) {

            $query = "SELECT * FROM {$this->table} WHERE email_admin = :email_admin";

            $this->db->query($query);
            $this->db->bind('email_admin', $admin);
            $row = $this->db->singleResult();
            return $row;

        }

        public function CreateAdmin() {

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $query = "INSERT INTO {$this->table} (username_admin, email_admin, password_admin, role) VALUES (:username, :email, :password, :role)";

            $this->db->query($query);
            $this->db->bind('username', htmlspecialchars($_POST['username']));
            $this->db->bind('email', htmlspecialchars($_POST['email']));
            $this->db->bind('password', $password);
            $this->db->bind('role', htmlspecialchars($_POST['role']));
            $this->db->bind('role', 'admin');

            $this->db->execute();
            return $this->db->rowCount();

        }

    }

