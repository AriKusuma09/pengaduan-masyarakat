<?php 

    Class Dashboard extends Controller {

       
        public function index() {
            if (!isset($_SESSION['petugas']['id_petugas']) && !isset($_SESSION['admin']['id_admin'])) {
                header('Location: ' . BASE_URL);
                exit;
            } 
            $data['title-page'] = 'Dashboard';

            $this->view('templates/header', $data);
                $this->view('dashboard/index');
            $this->view('templates/footer');
        }

    }