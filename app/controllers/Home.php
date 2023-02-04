<?php 

    class Home extends Controller {

        public function index() {

            $data['title-page'] = 'Home';

            $this->view('templates/header-user', $data);
                $this->view('home/index', $data);
            $this->view('templates/footer-user');
        }

    }