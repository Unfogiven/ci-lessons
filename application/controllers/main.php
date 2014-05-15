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

        $config = array();
        $config['base_url'] = base_url().'index.php/main/articles/';
        $config['total_rows'] = 4;
        $config['per_page'] = 1;

        $this->pagination->initialize($config);

        $data['articles'] = $this->articles_model->get_articles($config['per_page'], $this->uri->segment(3));
        $this->load->view("articles_view", $data);
    }

    public function add_article(){
        $data = array();
        $data['title'] = "Пятая статья";
        $data['text'] = "Lorem Ipsum is simply dummy text of the printing
        and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer
        took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was
        popularised in the 1960s with the release of Letraset sheets
        containing Lorem Ipsum passages, and more recently with desktop
        publishing software like Aldus PageMaker including versions of
        Lorem Ipsum.";
        $data['date'] = "2014-05-15";

        $this->load->model("articles_model");
        $this->articles_model->add_article($data);
    }

    public function edit_article(){
        $data = array();
        $data['title'] = 'Новое название пятой статьи';
        $data['text'] = 'Текст';
        $data['date'] = "2014-05-15 17:30:56";

        $this->load->model("articles_model");
        $this->articles_model->edit_article(5, $data);
    }

    public function del_article($id){
        $id = (int)$id;
        $this->load->model('articles_model');
        $this->articles_model->del_article($id);
    }

}