<?php
class Home extends Controller
{
    public function index()
    {
        $data['nama'] = $this->model('user_model')->getUser();
        $data['judul'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
