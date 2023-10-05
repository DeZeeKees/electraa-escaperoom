<?php

namespace DB;
use PDO;

class Database {

    private $db;

    public function __construct(string $host, string $db) {
        
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$db";
        $this->db = new PDO($dsn, "root", "", $options);
    }

    public function listNumbers() {

        $stmt = $this->db->prepare("SELECT * FROM numbers WHERE active = 1");
        $stmt->execute();
        return $stmt->fetchAll();

    }

}