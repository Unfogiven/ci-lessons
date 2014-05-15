<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{


    public function index(){
        $this->load->view('home_view');
    }

    public function about(){
        $data = array();
        $data['name'] = "Anton";
        $data['surname'] = "Golomazov";
        $data['age'] = 26;
        $this->load->view("about_view", $data);
    }

    public function articles(){
        $data = array();
        $this->load->model("articles_model");

        $data['articles'] = $this->articles_model->get_articles();
        $this->load->view("articles_view", $data);
    }

}