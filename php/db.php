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
        $stmt = $this->db->prepare("SELECT * FROM numbers");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getNumber($id) {
        $stmt = $this->db->prepare("SELECT * FROM numbers WHERE id = {$id}");
        $stmt->execute();
        return $stmt->fetch();
    }

    public function toggleNumberActiveState(int $id) {
        $stmt = $this->db->prepare("UPDATE numbers SET active = !active WHERE id=" . $id);
        $stmt->execute();
        $stmt = $this->db->prepare("SELECT * FROM numbers WHERE id=" . $id);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0];
    }

    public function editNumber(int $id, string $name, int $number, string $video) {
        $stmt = $this->db->prepare("UPDATE numbers SET name='{$name}', number={$number}, video='{$video}' WHERE id={$id}");
        $stmt->execute();
        $stmt = $this->db->prepare("SELECT * FROM numbers WHERE id=" . $id);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0];
    }

    public function deleteNumber($id) {
        $stmt = $this->db->prepare("DELETE FROM numbers WHERE id={$id}");
        $stmt->execute();
    }

    public function createNumber($name, $code, $video) {
        $active = 1;
        $stmt = $this->db->prepare(("INSERT INTO numbers (name, number, video, active) VALUES (:name, :number, :video, :active)"));
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":number", $code);
        $stmt->bindParam(":video", $video);
        $stmt->bindParam(":active", $active);
        $stmt->execute();

        $id = $this->db->lastInsertId();

        $stmt = $this->db->prepare("SELECT * FROM numbers WHERE id={$id}");
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function checkNumber($number) {
        $stmt = $this->db->prepare("SELECT * FROM numbers WHERE number = {$number} AND active = 1");
        $stmt->execute();
        $data = $stmt->fetchAll();

        if(count($data) <= 0) {
            return array(
                "status" => false,
            );
        }

        return array(
            "status" => true,
            "id" => $data[0]['id']
        );
    }
}