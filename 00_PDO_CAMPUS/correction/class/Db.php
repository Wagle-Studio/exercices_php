<?php

require_once __DIR__ . "./../../../config.php";

class DB
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=' . DATABASE_HOST . ';dbname=' . DATABASE_NAME . ';charset=utf8',
                DATABASE_USERNAME,
                DATABASE_PASSWORD
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}
