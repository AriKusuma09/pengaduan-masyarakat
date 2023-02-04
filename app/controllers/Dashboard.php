<?php 

    Class Dashboard extends Controller {

       
        public function index() {
            if (!isset($_SESSION['petugas']['id_petugas'])) {
                header('Location: ' . BASE_URL);
                exit;
            }
            $data['title-page'] = 'Dashboard';

            $this->view('templates/header', $data);
                $this->view('dashboard/index');
            $this->view('templates/footer');
        }

    }