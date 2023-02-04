<?php 

    CLass User extends Controller {

        public function edit() {
            if(!isset($_SESSION['user']['id_masyarakat'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }

            $data['title-page'] = 'Edit Profile';

            $this->view('templates/header-user', $data);
                $this->view('masyarakat/index');
            $this->view('templates/footer-user');
        }

    }

