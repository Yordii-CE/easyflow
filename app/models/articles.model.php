<?php

class ArticlesModel extends Model
{
    public function __construct()
    {
        //$this->loadDatabase();
    }

    function getAll()
    {
        //$results = $this->db->select("select 'hola'");
        $results = ['Hello', 'World'];
        return $results;
    }
}
