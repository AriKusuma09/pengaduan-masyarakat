<?php 

    Class Pengaduan extends Controller {

        public function index() {
            $data['title-page'] = 'Pengaduan';
            $data['instansi'] = $this->model('PengaduanModel')->getAllInstansi();
            $data['kategori'] = $this->model('PengaduanModel')->getAllKategorI();

            $this->view('templates/header-user', $data);
                $this->view('pengaduan/index', $data);
            $this->view('templates/footer-user');
        }

        public function aduLaporan() {
            if($this->model('PengaduanModel')->createLaporan($_POST) > 0) {
                header('Location: ' .BASE_URL. 'pengaduan');
            } else {
                echo "Pengaduan gagal";
                die;
            }
        }
        

    }