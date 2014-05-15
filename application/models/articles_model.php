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

}