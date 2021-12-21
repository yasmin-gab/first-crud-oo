<?php

class Contact {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=crud_oo;host=localhost", "root", "");
    }

    public function add($email, $name = '') {
        if($this->emailExists($email) == false) {
            $sql = "INSERT INTO contacts (name, email) VALUES (:name, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    public function getInfo($id) {
        $sql = "SELECT * FROM contacts WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return array();
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM contacts";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }

    }

    public function edit($name, $email, $id) {
        if($this->emailExists($email) == false) {
            $sql = "UPDATE contacts SET name = :name, email = :email WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id', $id);
            $sql->execute();
            
            return true;
            
        } else {
            return false;
        }
    }

    public function deleteById($id) {
        $sql = "DELETE FROM contacts WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function deleteByEmail($email) {
        $sql = "DELETE FROM contacts WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
    }

    private function emailExists($email) {
        $sql = "SELECT * FROM contacts WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}