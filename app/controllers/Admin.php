<?php 

    Class Admin extends Controller {

        public function __construct() {
                if(empty($_SESSION['admin']['role'] == 'superadmin')) {
                    header('Location: ' . BASE_URL);        
                }
        }

        public function index() {

            $data['title-page'] = 'Admin Data';
            $data['admin'] = $this->model('AdminModel')->getAllAdmin();

            $this->view('templates/header', $data);
                $this->view('admin/index', $data);
            $this->view('templates/footer');

        }

        public function tambah() {

            $data['title-page'] = 'Tambah Admin';

            $this->view('templates/header', $data);
                $this->view('admin/tambah');
            $this->view('templates/footer');
        }

        public function tambahAdmin() {

            if($this->model('AdminModel')->CreateAdmin($_POST) > 0 ) {
                header('Location: ' . BASE_URL . 'admin/');
            } else {
                header('Location: ' . BASE_URL . 'admin/tambah');
            }

        }

    }