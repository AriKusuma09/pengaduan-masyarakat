<?php 

    Class Kategori extends Controller {
        
        public function index() {
            if (!isset($_SESSION['petugas']['id_petugas'])) {
                header('Location: ' . BASE_URL);
            }

            $data['title-page'] = 'Kategori';
            $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

            $this->view('templates/header', $data);
                $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }

        public function tambah() {
            $data['title-page'] = 'Tambah Kategori';

            $this->view('templates/header', $data);
                $this->view('kategori/tambah');
            $this->view('templates/footer');
        }

        public function store() {
            if($this->model('KategoriModel')->createKategori($_POST) > 0) {
                header('Location: ' . BASE_URL . 'kategori');
            } else {
                header('Location: ' .BASE_URL. 'kategori/tambah');
            }
        }

        public function edit($id) {
            $data['title-page'] = 'Edit Kategori';
            $data['kategori'] = $this->model('KategoriModel')->getKategoriById($id);

            $this->view('templates/header', $data);
                $this->view('kategori/edit', $data);
            $this->view('templates/footer');
        }

        public function update($id) {

            if($this->model('KategoriModel')->updateKategori($id, $_POST) > 0) {
                header('Location: ' . BASE_URL . 'kategori');
            } else {
                header('Location: ' .BASE_URL. 'kategori/edit');
            }
        }

        public function delete($id) {
            if($this->model('KategoriModel')->deleteKategori($id, $_POST) > 0) {
                header('Location: ' . BASE_URL . 'kategori');
            } else {
                header('Location: ' . BASE_URL . 'kategori');
            }
        }
        
    }