<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model{

    /**
     *  Получение всех статей из таблицы articles
     *
     * @return mixed
     */
    public function get_articles(){
        $query = $this->db->get('articles');
        return $query->result_array();
    }

    /**
     *  Добавление статьи в БД
     *
     * @param $data
     */
    public function add_article($data){
        $this->db->insert("articles", $data);
    }

    /**
     *  Редактирование статьи
     *
     * @param $id
     * @param $data
     */
    public function edit_article($id, $data){
        $id = (int)$id;
        $this->db->where("id", $id);
        $this->db->update("articles", $data);
    }

    public function del_article($id){
        $id = (int)$id;
        $this->db->where("id", $id);
        $this->db->delete("articles");
    }

}