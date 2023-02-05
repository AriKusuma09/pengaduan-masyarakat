<?php 

    Class Auth extends Controller {

        public function __construct() {
            if (isset($_SESSION['logged'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } 
        }

        public function register() {
            $data['title-page'] = 'Register';

            $this->view('templates/header-user', $data);
                $this->view('register/index');
            $this->view('templates/footer-user');
        }

        public function tryRegister() {
            if ($this->model('UserModel')->createUser($_POST) > 0) {
                header('Location: ' . BASE_URL . 'auth/login/index');
            } else {
                header('Location: ' . BASE_URL . 'register');
            }
        }

        public function login() {
            $data['title-page'] = 'Login';

            $this->view('templates/header-user', $data);
                $this->view('login/index');
            $this->view('templates/footer-user');
        }

        public function tryLogin() {

            $user       = $this->model('UserModel')->findMasyarakatByEmail($_POST['email_address']); 
            $petugas    = $this->model('PetugasModel')->findPetugasByEmail($_POST['email_address']);
            $admin      = $this->model('AdminModel')->findAdminByEmail($_POST['email_address']);

            if($user) {
                if(password_verify($_POST['password'], $user['password'])) {
                    
                    $this->SessionUser($user);
                    header('Location: ' .BASE_URL);
                    return $user;
                } else {
                    echo "Email atau password salah";
                    die;
                }
            } elseif($petugas) {
                if(password_verify($_POST['password'], $petugas['password_petugas'])) {
                    $this->SessionPetugas($petugas);
                    header('Location: ' .BASE_URL . 'dashboard');
                    return $petugas;
                } else {
                    echo "Email atau password salah";
                    die;
                }
            } elseif($admin) {
                if(password_verify($_POST['password'], $admin['password_admin'])) {
                    $this->SessionAdmin($admin);
                    header('Location: ' . BASE_URL . 'dashboard');
                    return $admin;
                }
            } else {
                echo "Gagal";
                die;
            }
        }

        public function logout() {
            session_destroy();
            header('Location: ' . BASE_URL);
        }

        public function SessionUser($user) {
            $_SESSION['user']   = $user;
            $_SESSION['logged'] = true;
        }

        public function SessionPetugas($petugas) {
            $_SESSION['petugas'] = $petugas;
            $_SESSION['logged']  = true;
        }

        public function SessionAdmin($admin) {
            $_SESSION['admin']  = $admin;
            $_SESSION['logged'] = true;
            $_SESSION['adminSesi'] = $_SESSION['admin']['role'] == 'admin';
            $_SESSION['superadmin'] = $_SESSION['admin']['role'] == 'superadmin';
        }

    }