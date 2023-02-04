<?php 

    Class Petugas extends Controller {

        public function index() {
            $data['title-page'] = 'Petugas';
            $data['petugas'] = $this->model('PetugasModel')->getAllPetugas();

            $this->view('templates/header', $data);
                $this->view('petugas/index', $data);
            $this->view('templates/footer');
        }

        public function tambah() {
            $data['title-page'] = 'Tambah Petugas';
            $data['instansi'] = $this->model('PetugasModel')->getAllInstansi();

            $this->view('templates/header', $data);
                $this->view('petugas/tambah', $data);
            $this->view('templates/footer');
        }

        public function store() {
            if($this->model('PetugasModel')->createPetugas($_POST) > 0) {
                header('Location: ' . BASE_URL . 'petugas/');
            } else {
                header('Location: ' .BASE_URL. 'petugas/tambah');
            }
        }

    }

