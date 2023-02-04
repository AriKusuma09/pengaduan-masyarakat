<?php 

    Class Pengaduan extends Controller {

        public function index() {
            $data['title-page'] = 'Pengaduan';

            $this->view('templates/header-user', $data);
                $this->view('pengaduan/index');
            $this->view('templates/footer-user');
        }

    }