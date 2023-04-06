<?php

class Model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    final protected function getDb()
    {
        return $this->db;
    }
}