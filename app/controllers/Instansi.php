<?php 

    Class Instansi extends Controller {

        public function index() {
            if (!isset($_SESSION['petugas']['id_petugas'])) {
                header('Location: ' . BASE_URL);
            }


            $data['title-page'] = 'Instansi';
            $data['instansi'] = $this->model('InstansiModel')->getAllInstansi();
            
            $this->view('templates/header', $data);
                $this->view('instansi/index', $data);
            $this->view('templates/footer');

        }

        public function tambah() {
            $data['title-page'] = 'Tambah Instansi';

            $this->view('templates/header', $data);
                $this->view('instansi/tambah');
            $this->view('templates/footer');
        }

        public function store() {
            if($this->model('InstansiModel')->createInstansi($_POST) > 0) {
                header('Location: ' . BASE_URL . 'instansi/index');
            } else {
                header('Location: ' .BASE_URL. 'instansi/tambah');
            }
        }

        public function edit($id) {
            $data['title-page'] = 'Edit Instansi';
            $data['instansi'] = $this->model('InstansiModel')->getInstansiById($id);

            $this->view('templates/header', $data);
                $this->view('instansi/edit', $data) ;
            $this->view('templates/footer');
        }

        public function update($id) {

            if($this->model('InstansiModel')->updateInstansi($id, $_POST) > 0) {
                header('Location: ' . BASE_URL . 'instansi/');
            } else {
                header('Location: ' .BASE_URL. 'instansi/edit');
            }
        }

        public function delete($id) {

            if($this->model('InstansiModel')->deleteInstansi($id, $_POST) > 0) {
                header('Location: ' . BASE_URL . 'instansi/');
            } else {
                header('Location: ' . BASE_URL . 'instansi/');
            }

        }

    }